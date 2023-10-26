@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">{{$blog->title}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page">Blog</li>
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

<!-- Post Start -->
<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-8 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <!-- <img class="pb-4" src="{{config('url')}}/storage/{{$blog->image}}" style="width: -webkit-fill-available;" alt=""> -->
                {!! $blog->body !!}
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{config('url')}}/storage/{{$blog->user->avatar}}" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">{{$blog->user->name}}</h4>
                                <p class="m-0">{{$blog->user->designacion}}</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" target="_blank" href="{{$blog->user->link_facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" target="_blank" href="{{$user->link_instagram}}"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" target="_blank" href="{{$user->link_linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" target="_blank" href="{{$user->link_web}}"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- Post End -->


@endsection