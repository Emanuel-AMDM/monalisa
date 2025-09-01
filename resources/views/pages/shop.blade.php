@extends('layouts.pages')
@section('contentpage')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{url('/img/hero-carousel/hero-carousel-1.jpg')}}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Desapego</h2>
                <ol>
                <li><a href="{{url('/')}}">Início</a></li>
                <li>Desapego</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="catalogo" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    @foreach ($items as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card position-relative">
                                <div class="position-relative">
                                    <img src="{{url($item->cod_image)}}" class="product-img">
                                    <span class="badge-estado">{{$item->status}}</span>
                                </div>
                                <div class="p-3 d-flex flex-column gap-2">
                                    <h4>{{$item->name}}</h4>
                                    <ul class="list-unstyled text-muted small">
                                        <li><strong>Material:</strong> {{$item->material}}</li>
                                        <li><strong>Tamanho:</strong> {{$item->size}}</li>
                                        <li><strong>Estado:</strong> {{$item->condition}}</li>
                                    </ul>
                                    <div class="price">{{ 'R$ ' . number_format($item->price / 100, 2, '.', '') }}</div>
                                    <a href="https://api.whatsapp.com/send?phone=5515988156441&text=Tenho interesse na camiseta preta tamanho M" class="btn-comprar btn btn-primary w-100" target="_blank">Comprar via WhatsApp</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection