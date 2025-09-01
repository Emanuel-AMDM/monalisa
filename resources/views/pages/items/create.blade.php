@extends('layouts.pages')
@section('contentpage')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Desapego Adicionar</h2>
                <ol>
                    <li><a href="{{url('/items')}}">Desapego</a></li>
                    <li>Adicionar</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <form action="{{url('/items')}}" 
            method="POST"
            enctype="multipart/form-data"
            novalidate>
            @csrf

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="material" class="form-control" placeholder="Material">
                    </div>
                    <div class="col-md-3">
                        <select id="size" name="size" class="form-control">
                            <option value="">Selecione Tamanho</option>
                            <option value="PP">PP</option>
                            <option value="P">P</option>
                            <option value="M">M</option>
                            <option value="G">G</option>
                            <option value="GG">GG</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="condition" class="form-control" placeholder="Condição">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <input type="number" name="price" class="form-control" placeholder="Preço">
                    </div>
                </div>
                <div class="row mt-5 mb-5 text-center">
                    <div class="col-md-3">
                        <img src="" width="200px">
                    </div>
                    <div class="col-md-3">
                        <img src="" width="200px">
                    </div>
                    <div class="col-md-3">
                        <img src="" width="200px">
                    </div>
                    <div class="col-md-3">
                        <img src="" width="200px">
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-3">
                        <input type="file" name="photo1" class="form-control" >
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="photo2" class="form-control" >
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="photo3" class="form-control" >
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="photo4" class="form-control" >
                    </div>
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn-primary w-100">Salvar</button>
                </div>
            </div><!-- End Quote Form -->
        </form>

    </main><!-- End #main -->
@endsection