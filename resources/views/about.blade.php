@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Nosotros</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page">Nosotros</li>
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
                    <h5 class="text-white mt-1">Success in getting happy customer</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">25</h1>
                    <h5 class="text-white mt-1">Thousands of successful business</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">120</h1>
                    <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">5</h1>
                    <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- About Start -->
<div class="container-fluid py-5 my-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="img/about-1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">Sobre nosotros</h5>
                <h1 class="mb-4">Acerca de la agencia GrupoTyG y sus innovadoras soluciones de TI</h1>
                <p>Somos una empresa de tecnologías de la información que desarrolla consultorías e implementaciones empresariales orientada a modernizar y automatizar procesos estratégicos, considerando los objetivos de cada uno de nuestros clientes para lograr aumentar su rendimiento y efectividad en sus unidades de negocio. Es decir, brindamos un servicio personalizado para ofrecerle la mejor solución.</p>
                <p class="mb-4">Tenemos los conocimientos, la experiencia y los contactos para diseñar y poner en marcha tu proyecto o área de TI a la medida de tus necesidades y tu presupuesto.</p>
                <!-- <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-fluid py-5 mb-5 team">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Nuestro Equipo</h5>
            <h1>Conozca a nuestro equipo de expertos</h1>
        </div>
        <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
            @foreach($users as $user)
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
                            <img src="{{config('url')}}/storage/{{$user->avatar}}" class="img-fluid w-100 rounded-circle" alt="">
                        </div>
                        <div class="team-name text-center py-3">
                            <h4 class="">{{$user->name}}</h4>
                            <p class="m-0">{{$user->designacion}}</p>
                        </div>
                        <div class="team-icon d-flex justify-content-center pb-4">
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" target="_blank" href="{{$user->link_facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</div>
<!-- Team End -->
@endsection