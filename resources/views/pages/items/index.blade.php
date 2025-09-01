@extends('layouts.pages')
@section('contentpage')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ url('/img/hero-carousel/hero-carousel-1.jpg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Desapego</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Início</a></li>
                    <li>Desapego</li>
                </ol>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Tabela ======= -->
        <div class="container mb-5 mt-5">
            <div class="row mb-5">
                <div class="col-md-3">
                    <a href="{{url('/items/create')}}" class="btn btn-primary">Adicionar Item</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Material</th>
                                <th>Tamanho</th>
                                <th>Condição</th>
                                <th>Preço</th>
                                <th>Status</th>
                                <th>Imagem</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->material }}</td>
                                    <td>{{ $item->size }}</td>
                                    <td>{{ $item->condition }}</td>
                                    <td>{{ number_format($item->price / 100, 2, '.', '') }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <img width="200px" src="{{ $item->cod_image }}">
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ url('/items/' . $item->id . '/edit') }}">
                                                <i class="fa-solid fa-pen btn btn-primary"></i>
                                            </a>

                                            <form action="{{ url('/items/' . $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-secondary">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main><!-- End #main -->
@endsection
