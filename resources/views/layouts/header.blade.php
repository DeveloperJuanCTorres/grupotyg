<!-- Spinner Start -->
<div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">
                    <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Lima, perú</small>
                    <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>informes@grupotyg.pe</small>
                </div>
                <div id="note" class="text-secondary d-none d-xl-flex"><small style="font-size: 20px;">{{setting('site.parametro_oferta')}}</small></div>
                <div class="top-link">
                    <a href="https://www.facebook.com/profile.php?id=61552672404418&mibextid=ZbWKwL" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                    <a href="https://instagram.com/grupotyg_ingenieros?igshid=emhoOG0zbTAxdTlm" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                    <a href="https://www.tiktok.com/@grupotyg_ing?_t=8gksOxTpIST&_r=1" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle"><svg class="text-primary" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></a>
                    <a href="https://www.linkedin.com/company/grupo-tyg-ingenieros/" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="/" class="navbar-brand" style="display: flex;">
                    <img style="margin-right: 10px;" class="mt-2" src="{{asset('img/iso-02.png')}}" height="30" alt="">
                    <h1 class="text-white fw-bold d-block mobil-pt2">Grupo<span class="text-secondary">TyG</span> </h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="/" class="nav-item nav-link {{$nav=='Inicio'?'active':''}}">Home</a>
                        <a href="/about" class="nav-item nav-link {{$nav=='Nosotros'?'active':''}}">Nosotros</a>
                        <a href="/service" class="nav-item nav-link {{$nav=='Servicios'?'active':''}}">Servicios</a>
                        <a href="/project" class="nav-item nav-link {{$nav=='Proyectos'?'active':''}}">Proyectos</a>
                        <a href="/blog" class="nav-item nav-link {{$nav=='Posts'?'active':''}}">Blog</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded">
                                <a href="blog.html" class="dropdown-item">Nuestro Blog</a>
                                <a href="team.html" class="dropdown-item">Nuestro Equipo</a>
                                <a href="testimonial.html" class="dropdown-item">Testimoniales</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="/contact" class="nav-item nav-link {{$nav=='Contactanos'?'active':''}}">Contactanos</a>
                    </div>
                </div>
                <div class="d-none d-xl-flex flex-shirink-0">
                    <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                        <a href="" class="position-relative animated tada infinite">
                            <i class="fa fa-phone-alt text-white fa-2x"></i>
                            <div class="position-absolute" style="top: -7px; left: 20px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex flex-column pe-4 border-end">
                        <span class="text-white-50">¿Tiene alguna pregunta?</span>
                        <span class="text-secondary">Lllamar: + 51 978 209 130</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center ms-4 ">
                        <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->