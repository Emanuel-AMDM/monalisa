@extends('layouts.pages')
@section('contentpage')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Desapego Editar</h2>
                <ol>
                    <li><a href="{{url('/items')}}">Desapego</a></li>
                    <li>Editar</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <form action="{{url('/items/' . $item->id)}}" 
            method="POST"
            enctype="multipart/form-data"
            novalidate>
            @csrf
            @method('PUT')

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control" placeholder="Nome" value="{{$item->name}}">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="material" class="form-control" placeholder="Material" value="{{$item->material}}">
                    </div>
                    <div class="col-md-3">
                        <select id="size" name="size" class="form-control">
                            <option value="">Selecione Tamanho</option>
                            <option value="pp" {{ $item->size == 'pp' ? 'selected' : '' }}>PP</option>
                            <option value="p"  {{ $item->size == 'p' ? 'selected' : '' }}>P</option>
                            <option value="m"  {{ $item->size == 'm' ? 'selected' : '' }}>M</option>
                            <option value="g"  {{ $item->size == 'g' ? 'selected' : '' }}>G</option>
                            <option value="gg" {{ $item->size == 'gg' ? 'selected' : '' }}>GG</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="condition" class="form-control" placeholder="Condição" value="{{$item->condition}}">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <input type="number" name="price" class="form-control" placeholder="Preço" value="{{ number_format($item->price / 100, 2, '.', '') }}">
                    </div>
                </div>
                <div class="row mt-5 mb-5 text-center">
                    <div class="col-md-3">
                        @if ($photo && $photo->photo1)
                            <img src="{{ asset($photo->photo1) }}" width="200px">
                        @endif
                    </div>
                    <div class="col-md-3">
                        @if ($photo && $photo->photo2)
                            <img src="{{url($photo->photo2)}}" width="200px">
                        @endif
                    </div>
                    <div class="col-md-3">
                        @if ($photo && $photo->photo3)
                            <img src="{{url($photo->photo3)}}" width="200px">
                        @endif
                    </div>
                    <div class="col-md-3">
                        @if ($photo && $photo->photo4)
                            <img src="{{url($photo->photo4)}}" width="200px">
                        @endif
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-3">
                        <input type="file" name="photo1" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="photo2" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="photo3" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="photo4" class="form-control">
                    </div>
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn-primary w-100">Salvar</button>
                </div>
            </div><!-- End Quote Form -->
        </form>

    </main><!-- End #main -->
@endsection