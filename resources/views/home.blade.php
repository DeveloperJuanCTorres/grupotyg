@extends('layouts.app')

@section('content')
       
<!-- Carousel Start -->
<div class="container-fluid px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/carousel-1.jpg" class="img-fluid" alt="First slide">
                <div class="carousel-caption mobil-p">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">Soluciones de TI</h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInRight">Agencia innovadora de soluciones de TI</h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">Ofrecemos soluciones completas y fáciles de usar, incluso para sus problemas de gestión de TI más difíciles.</p>
                        <a href="/service" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Leer más</button></a>
                        <a href="/contact" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contactanos</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="img-fluid" alt="Second slide">
                <div class="carousel-caption mobil-p">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">Las mejores soluciones de TI</h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInLeft">Servicios digitales de calidad!</h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">Ofrecemos soluciones completas y fáciles de usar, incluso para sus problemas de gestión de TI más difíciles.</p>
                        <a href="/service" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Leer más</button></a>
                        <a href="/contact" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contactanos</button></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


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


<!-- About Start -->
<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
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
                <a href="/about" class="btn btn-secondary rounded-pill px-5 py-3 text-white">Más detalles</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid services py-5 my-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Nuestros Servicios</h5>
            <h1>Servicios específicamente para su negocio</h1>
        </div>
        <div class="row g-5 services-inner">
            @foreach($services as $item)
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="{{$item->icono}} fa-7x mb-4 text-primary"></i>
                            <h4 class="mb-3">{{$item->name}}</h4>
                            <p class="mb-4">{{$item->description_corto}}</p>
                            <a href="{{route('serviceid',$item)}}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Project Start -->
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Nuestros Proyectos</h5>
            <h1>Nuestros proyectos recientemente completados</h1>
        </div>
        <div class="row g-5">
            @foreach($projects as $project)
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{config('url')}}/storage/{{$project->imagen}}" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="{{route('projectid',$project)}}" class="text-center">
                                <h4 class="text-secondary">{{$project->titulo}}</h4>
                                <p class="m-0 text-white">{{$project->subtitulo}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Blog Start -->
<div class="container-fluid blog py-5 my-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Nuestro Blog</h5>
            <h1>Últimos blogs & noticias</h1>
        </div>
        <div class="row g-5 justify-content-center">
            @foreach ($posts as $post)
            @if($post->status=="PUBLISHED")
            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="{{config('url')}}/storage/{{$post->image}}" class="img-fluid w-100 rounded-top" alt="">
                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">{{$post->title}} </span>
                    <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                            <a href="{{route('blogid',$post)}}" class="btn text-white">Leer más</a>
                        </div>
                        <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                            <div class="blog-icon-1">
                                <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                            </div>
                            <div class="blog-icon-2">
                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                        <img src="{{config('url')}}/storage/{{$post->user->avatar}}" width="100" height="100" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                        <h5 class="">By {{$post->user->name}}</h5>
                        <span class="text-secondary">{{date_format($post->created_at,'d M Y')}}</span>
                        <p class="py-2">{{Str::limit($post->excerpt,100)}}</p>
                    </div>
                    <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                        <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                        <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach            
        </div>
    </div>
</div>
<!-- Blog End -->


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
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" target="_blank" href="{{$user->link_instagram}}"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" target="_blank" href="{{$user->link_linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" target="_blank" href="{{$user->link_web}}"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Nuestro testimonio</h5>
            <h1>Nuestro Cliente Dice!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
            <div class="testimonial-item border p-4">
                <div class="d-flex align-items-center">
                    <div class="">
                        <img src="img/testimonial-1.jpg" alt="">
                    </div>
                    <div class="ms-4">
                        <h4 class="text-secondary">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex pe-5">
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                </div>
            </div>
            <div class="testimonial-item border p-4">
                <div class=" d-flex align-items-center">
                    <div class="">
                        <img src="img/testimonial-2.jpg" alt="">
                    </div>
                    <div class="ms-4">
                        <h4 class="text-secondary">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex pe-5">
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                </div>
            </div>
            <div class="testimonial-item border p-4">
                <div class=" d-flex align-items-center">
                    <div class="">
                        <img src="img/testimonial-3.jpg" alt="">
                    </div>
                    <div class="ms-4">
                        <h4 class="text-secondary">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex pe-5">
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                </div>
            </div>
            <div class="testimonial-item border p-4">
                <div class=" d-flex align-items-center">
                    <div class="">
                        <img src="img/testimonial-4.jpg" alt="">
                    </div>
                    <div class="ms-4">
                        <h4 class="text-secondary">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex pe-5">
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                            <i class="fas fa-star me-1 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial End -->


<!-- Contact Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Ponerse en contacto</h5>
            <h1 class="mb-3">Contacto para cualquier consulta</h1>
            
        </div>
        <div class="contact-detail position-relative p-5 contact">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Dirección</h4>
                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5 contact-h6">Lima, Perú</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Llámanos</h4>
                            <a class="h5" href="tel:+0123456789" target="_blank">+51 978209130</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email</h4>
                            <a class="h5 contact-h6" href="mailto:info@example.com" target="_blank">informes@grupotyg.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="p-5 h-100 rounded contact-map contact">
                        <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="p-5 rounded contact-form contact">
                        <div class="mb-4">
                            <input id="nombre" type="text" class="form-control border-0 py-3" placeholder="Su nombre">
                        </div>
                        <div class="mb-4">
                            <input id="telefono" type="number" class="form-control border-0 py-3" placeholder="Teléfono de contacto">
                        </div>
                        <div class="mb-4">
                            <input id="email" type="email" class="form-control border-0 py-3" placeholder="Tu Email">
                        </div>
                        <div class="mb-4">
                            <input id="servicio" type="text" class="form-control border-0 py-3" placeholder="Servicio">
                        </div>
                        <div class="mb-4">
                            <textarea id="mensaje" class="w-100 form-control border-0 py-3" rows="6" cols="6" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="text-start">
                            <button class="btn bg-primary text-white py-3 px-5 Enviarconsulta" type="button">Enviar mensaje</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- Contact End -->

<!-- modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #011133;">
        <h5 class="modal-title text-white" id="exampleModalToggleLabel">Promoción por todo el mes de Octubre</h5>
        <button type="button" class="btn-close" style="background-color:white;" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding: 0;">
        <img src="{{asset('img/octubre.png')}}" width="100%" alt="">
        <a href="https://wa.me/51978209130" class="me-2"><button type="button" class="flotante btn btn-secondary rounded-pill carousel-content-btn1 animated fadeInLeft">Click aquí</button></a>
        
      </div>
    </div>
  </div>
</div>

@endsection

@push('javascript')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        let token = $('meta[name="csrf-token"]').attr('content');

        

        $(function() {
            $('#exampleModalToggle').modal('toggle');
            $(".Enviarconsulta").on('click',function () {
                var nombre = $("#nombre").val();
                var telefono = $("#telefono").val();
                var email = $("#email").val();
                var servicio = $("#servicio").val();
                var mensaje = $("#mensaje").val();
                if(nombre == ''){
                    Swal.fire({
                        icon:'warning',
                        text: "Tienes que ingresar tu nombre",
                    });
                    return false;
                }
                if(telefono == ''){
                    Swal.fire({
                        icon:'warning',
                        text: "Tienes que ingresar un número de contacto",
                    });
                    return false;
                }
                if(email == ''){
                    Swal.fire({
                        icon:'warning',
                        text: "Tienes que ingresar una correo de contacto",
                    });
                    return false;
                }
                if(servicio == ''){
                    Swal.fire({
                        icon:'warning',
                        text: "Ingresa el servicio en la cual estas interesado",
                    });
                    return false;
                }
                if(mensaje == ''){
                    Swal.fire({
                        icon:'warning',
                        text: "Tienes que ingresar un mensaje",
                    });
                    return false;
                }
                Swal.fire({
                    header: '...',
                    title: 'loading...',
                    allowOutsideClick:false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                $.ajax({
                    url: "/correo",
                    method: "post",
                    dataType: 'json',
                    data: {
                        _token: token,
                        nombre : nombre,
                        telefono : telefono,
                        email : email,
                        servicio : servicio,
                        mensaje: mensaje,
                    },
                    success: function (response) {   
                        if (response.status) {
                            Swal.fire({
                                icon: 'success',
                                title: 'OK',
                                text: response.msg,
                            })                 
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Oops...',
                                text: response.msg,
                            })
                        }
                        $("#nombre").val('');
                        $("#telefono").val('');
                        $("#email").val('');
                        $("#servicio").val('');
                        $("#mensaje").val('');
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...!!',
                            text: 'Algo salió mal, Inténtalo más tarde!',
                        })
                    }
                });
            });
        })
    </script>
@endpush
