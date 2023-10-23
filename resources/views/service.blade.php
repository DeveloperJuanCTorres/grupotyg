@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Servicios</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page">Servicios</li>
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


<!-- Services Start -->
<div class="container-fluid services py-5 my-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Nuestros Servicios</h5>
            <h1>Servicios específicamente para su negocio</h1>
        </div>
        <div class="row g-5 services-inner">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Diseño Web</h4>
                            <p class="mb-4">Adaptamos los diferentes elementos web a un protocolo responsive avanzado. El acceso multidispositivo está garantizado.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Desarrollo Web</h4>
                            <p class="mb-4">Identifica puntos de mejora y transforma tus procesos para ahorrar tiempo y dinero.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fas fa-chart-line fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Biseness Intelligence</h4>
                            <p class="mb-4">Automatiza la creación de reportes y toma de decisiones informadas con Power Bi.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fas fa-shopping-cart fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">E-Commerce</h4>
                            <p class="mb-4">Una tienda virtual le ayudará a incrementar sus ventas, nosotros nos encargamos de desarrollar su Ecommerce.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Leer más</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fas fa-palette fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Branding</h4>
                            <p class="mb-4"> Creamos marcas con mucha personalidad; para profesionales que quieren mejorar la reputación y rentabilidad de su negocio.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-project-diagram fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">Servicios de TI</h4>
                            <p class="mb-4">Brindamos servicios de asesoría, diseño, implementación, operación y soporte de las distintas soluciones de tecnología.</p>
                            <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- Services End -->
@endsection