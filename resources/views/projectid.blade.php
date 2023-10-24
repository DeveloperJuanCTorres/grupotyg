@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">{{$project->titulo}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page">Proyectos</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Fact Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">99</h1>
                    <h5 class="text-white mt-1">Éxito en conseguir un cliente satisfecho</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">25</h1>
                    <h5 class="text-white mt-1">Miles de negocios exitosos</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">120</h1>
                    <h5 class="text-white mt-1">Clientes totales que aman la alta tecnología</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">5</h1>
                    <h5 class="text-white mt-1">Reseñas de estrellas dadas por clientes satisfechos.</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->

<!-- Negocio Start -->
<div class="container-fluid my-5">
    <div class="container pt-5">        
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="{{config('url')}}/storage/{{$project->imagen}}" class="img-fluid rounded" alt="" style="margin-bottom: 25%;">
                    
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <img src="{{config('url')}}/storage/{{$project->logo_negocio}}" style="max-height: 100px;" class="img-fluid rounded" alt="">
                
                <h1 class="mb-4">{{$project->nombre_negocio}}</h1>
                <h5 class="text-primary">Sobre el proyecto</h5>
                <p>{{$project->descripcion}}</p>
                <a href="{{$project->link_pagina}}" target="_blank" class="btn btn-secondary rounded-pill px-5 py-3 text-white">Ver proyecto</a>
            </div>
        </div>
    </div>
</div>
<!-- Negocio End -->

<!-- Gallery Start -->
<div class="container-fluid my-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn mb-4" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Imagenes del proyecto</h5>
            <h1>Portafolio</h1>
        </div>
        <div class="row g-5">
            <div class="m-p-g">
                <div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
                    @php
                        $portafolio = json_decode($project->portafolio);
                    @endphp
                    @foreach($portafolio as $item)
                    <img style="padding: 2px;" src="{{config('url')}}/storage/{{$item}}" data-full="{{config('url')}}/storage/{{$item}}" class="m-p-g__thumbs-img" />
                    @endforeach
                </div>

                <div class="m-p-g__fullscreen"></div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

@endsection

@push('javascript')
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/material-photo-gallery.min.js"></script>
<script>
	var elem = document.querySelector('.m-p-g');

	document.addEventListener('DOMContentLoaded', function() {
		var gallery = new MaterialPhotoGallery(elem);
	});
</script>
@endpush