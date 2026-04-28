@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<header class="relative pt-3xl pb-2xl px-margin text-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[radial-gradient(circle_at_center,rgba(128,131,255,0.08)_0%,transparent_70%)]"></div>
    </div>
    <div class="relative z-10 max-w-4xl mx-auto">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-primary/20 bg-primary/5 text-primary mb-lg">
            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
            <span class="font-label-sm uppercase">Proyectos seleccionados</span>
        </div>
        <h1 class="font-display-xl text-display-xl text-white mb-md">Nuestras innovaciones</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-xl">
            Exploramos la intersección entre la arquitectura basada en datos y el diseño centrado en el ser humano. Construimos el futuro de los ecosistemas técnicos.
        </p>
    </div>
</header>

<div class="max-w-[1440px] mx-auto px-margin pb-3xl">
    <!-- Filter Tabs (Internal Navigation) -->
    <div class="flex flex-wrap justify-center gap-md mb-2xl">
        <button class="px-lg py-2 rounded-full glass-card text-primary font-label-sm uppercase border-primary/30">Todos los proyectos</button>
        <button class="px-lg py-2 rounded-full glass-card text-slate-400 font-label-sm uppercase hover:text-white transition-colors">IA &amp; Datos</button>
        <button class="px-lg py-2 rounded-full glass-card text-slate-400 font-label-sm uppercase hover:text-white transition-colors">Web3</button>
        <button class="px-lg py-2 rounded-full glass-card text-slate-400 font-label-sm uppercase hover:text-white transition-colors">Enterprise</button>
        <button class="px-lg py-2 rounded-full glass-card text-slate-400 font-label-sm uppercase hover:text-white transition-colors">Laboratorio</button>
    </div>
    <!-- Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
        <!-- Card 1 -->
         @foreach($projects as $project)
        <div class="glass-card rounded-xl overflow-hidden group transition-all duration-300 flex flex-col">
            <div class="aspect-video relative overflow-hidden">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
                        data-alt="Futuristic dark blue interface with neon lines and abstract data visualization, professional tech aesthetic" 
                        src="{{asset ('storage/' . $project->imagen)}}" />
                <div class="absolute top-md left-md">
                    <span class="px-md py-1 bg-slate-950/60 backdrop-blur-md border border-white/10 rounded-full font-label-sm text-secondary uppercase tracking-tighter">{{$project->nombre_negocio}}</span>
                </div>
            </div>
            <div class="p-lg flex flex-col flex-grow">
                <h3 class="font-headline-md text-headline-md text-white mb-sm">{{$project->titulo}}</h3>
                <p class="text-on-surface-variant font-body-md mb-lg line-clamp-2">{{ $project->descripcion }}</p>
                <div class="mt-auto flex items-center justify-between">
                    <span class="text-slate-500 font-label-sm italic">2024 Release</span>
                    <button class="flex items-center gap-2 text-primary font-label-sm uppercase tracking-widest group/btn">
                        View Case Study
                        <span class="material-symbols-outlined text-[18px] transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Pagination/Load More -->
    <div class="mt-3xl text-center">
        <button class="px-3xl py-md rounded-lg bg-white/5 border border-white/10 text-white font-label-sm uppercase tracking-[4px] hover:bg-white/10 hover:border-primary/50 transition-all duration-300">
            Explore More Innovations
        </button>
    </div>
</div>







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
@endsection