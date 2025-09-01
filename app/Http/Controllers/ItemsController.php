<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Item;
use App\Models\Photo;

class ItemsController extends Controller
{

    public function index()
    {
        $items = Item::all();

        return view('pages.items.index', [
            'items' => $items,
        ]);
    }

    public function create()
    {
        return view('pages.items.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados básicos
        $data = $request->validate([
            'name' => ['required'],
            'material' => ['required'],
            'size' => ['required'],
            'condition' => ['required'],
            'price' => ['required'], // Valida como string, tratamos depois
        ]);

        // Converte valor para inteiro (centavos)
        $priceInput = str_replace(',', '.', $request->input('price')); // vírgula -> ponto
        $floatPrice = floatval($priceInput); // converte para float
        $data['price'] = intval(round($floatPrice * 100)); // salva como inteiro (centavos)

        $data['status'] = 1;

        // Processa primeira foto
        $firstPhotoFile = $request->file('photo1');
        $firstPhotoName = time() . '_photo1.' . $firstPhotoFile->extension();
        $firstPhotoPath = $firstPhotoFile->storeAs('photos', $firstPhotoName, 'public');
        $data['cod_image'] = 'storage/' . $firstPhotoPath;

        // Valida imagens
        $request->validate([
            'photo1' => ['required', 'image'],
            'photo2' => ['nullable', 'image'],
            'photo3' => ['nullable', 'image'],
            'photo4' => ['nullable', 'image'],
        ]);

        // Salva outras fotos (se existirem)
        $photos = ['photo1' => $data['cod_image']];
        foreach (['photo2', 'photo3', 'photo4'] as $key) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $fileName = time() . '_' . $key . '.' . $file->extension();
                $path = $file->storeAs('photos', $fileName, 'public');
                $photos[$key] = 'storage/' . $path;
            } else {
                $photos[$key] = null;
            }
        }

        // Cria o item
        $item = Item::create($data);

        // Cria as fotos
        Photo::create([
            'cod_image' => $data['cod_image'],
            'photo1' => $photos['photo1'],
            'photo2' => $photos['photo2'],
            'photo3' => $photos['photo3'],
            'photo4' => $photos['photo4'],
            'item_id' => $item->id,
        ]);

        return redirect('/items');
    }


    public function edit($id)
    {    
        $item = Item::findOrFail($id); // já lança 404 se não achar
        $itemPhotoId = $item->cod_image;

        // Busca pela coluna cod_image (não é ID!)
        $photo = Photo::where('cod_image', $itemPhotoId)->first(); // ou ->get() se quiser várias

        return view('pages.items.edit', [
            'item' => $item,
            'photo' => $photo,
        ]);
    }

    public function update($id, Request $request)
    {
        // Busca o item e suas fotos
        $item = Item::findOrFail($id);
        $photo = Photo::where('cod_image', $item->cod_image)->first();

        // Validação dos dados do item
        $data = $request->validate([
            'name' => ['required'],
            'material' => ['required'],
            'size' => ['required'],
            'condition' => ['required'],
            'price' => ['required'],
            'photo1' => ['nullable', 'image'],
            'photo2' => ['nullable', 'image'],
            'photo3' => ['nullable', 'image'],
            'photo4' => ['nullable', 'image'],
        ]);

        // Converte o preço (ex: 19,90 ou 19.90) para inteiro (centavos)
        $valorFormatado = str_replace(',', '.', $data['price']); // aceita vírgula ou ponto
        $data['price'] = (int) round($valorFormatado * 100); // salva como inteiro

        // Atualiza os campos do item
        $item->update($data);

        // Fotos: array para atualizar as colunas na tabela photos
        $photosUpdate = [];

        // Função helper para deletar imagem antiga
        $deleteOldImage = function ($oldPath) {
            if ($oldPath && Storage::exists(str_replace('storage/', 'public/', $oldPath))) {
                Storage::delete(str_replace('storage/', 'public/', $oldPath));
            }
        };

        // Loop para cada foto
        foreach (['photo1', 'photo2', 'photo3', 'photo4'] as $photoKey) {
            if ($request->hasFile($photoKey)) {
                // Deleta a foto antiga se existir
                $deleteOldImage($photo->$photoKey);

                // Salva a nova foto
                $file = $request->file($photoKey);
                $fileName = time() . '_' . $photoKey . '.' . $file->extension();
                $path = $file->storeAs('photos', $fileName, 'public');

                // Atualiza o array para salvar no DB
                $photosUpdate[$photoKey] = 'storage/' . $path;

                // Atualiza também o cod_image se for photo1
                if ($photoKey === 'photo1') {
                    $photosUpdate['cod_image'] = 'storage/' . $path;
                    $item->cod_image = $photosUpdate['cod_image'];
                    $item->save();
                }
            }
        }

        // Atualiza as fotos no banco (se houver alguma alteração)
        if (!empty($photosUpdate)) {
            $photo->update($photosUpdate);
        }

        return redirect('/items');
    }

    public function destroy($id)
    {
        // Busca o item
        $item = Item::findOrFail($id);

        // Busca as fotos associadas ao mesmo cod_image
        $photos = Photo::where('cod_image', $item->cod_image)->get();

        // Remove as imagens do disco
        foreach ($photos as $photo) {
            $storagePath = str_replace('storage/', 'public/', $photo->path);
            if (Storage::exists($storagePath)) {
                Storage::delete($storagePath);
            }
        }

        // Deleta as fotos do banco
        Photo::where('cod_image', $item->cod_image)->delete();

        // Deleta o item
        $item->delete();

        return redirect('/items')->with('success', 'Item e fotos deletados com sucesso.');
    }

}
