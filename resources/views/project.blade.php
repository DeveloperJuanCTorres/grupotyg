@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/grupotyg-projects.css') }}?v=2.0.0">
@endpush

@section('content')
<div class="tyg-projects" id="tyg-projects">
    <section class="tyg-projects-hero" aria-labelledby="projects-heading">
        <div class="tyg-projects-orb tyg-projects-orb-a" aria-hidden="true"></div>
        <div class="tyg-projects-orb tyg-projects-orb-b" aria-hidden="true"></div>
        <div class="tyg-projects-shell tyg-projects-hero-grid">
            <div class="tyg-reveal">
                <span class="tyg-eyebrow"><span class="tyg-live-dot"></span> PORTAFOLIO · GRUPO TYG INGENIEROS</span>
                <h1 id="projects-heading">Ideas que se convierten en <span class="tyg-gradient-text">soluciones reales.</span></h1>
                <p>Conoce proyectos donde unimos ingeniería, diseño y tecnología para transformar procesos, experiencias y negocios.</p>
                <div class="tyg-hero-actions">
                    <a href="#portafolio" class="tyg-btn tyg-btn-primary">Explorar proyectos <span class="material-symbols-outlined">arrow_downward</span></a>
                    <a href="{{ route('contact') }}" class="tyg-btn tyg-btn-ghost">Hablemos de tu idea <span class="material-symbols-outlined">north_east</span></a>
                </div>
            </div>
            <div class="tyg-hero-visual tyg-reveal" aria-hidden="true">
                <div class="tyg-visual-grid"></div>
                <div class="tyg-visual-glow"></div>
                <div class="tyg-visual-window">
                    <div class="tyg-window-top"><span></span><span></span><span></span><small>GRUPOTYG / PROJECT LAB</small></div>
                    <div class="tyg-window-body">
                        <div class="tyg-window-label">TECNOLOGÍA E INNOVACIÓN</div>
                        <div class="tyg-window-headline">BUILDING<br><em>WHAT'S NEXT.</em></div>
                        <div class="tyg-window-line"></div>
                        <div class="tyg-window-bars"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
                    </div>
                </div>
                <div class="tyg-floating-chip"><span class="material-symbols-outlined">code</span> Diseño + Ingeniería</div>
            </div>
        </div>
    </section>

    <section id="portafolio" class="tyg-portfolio tyg-projects-shell" aria-labelledby="portfolio-heading">
        <div class="tyg-section-heading tyg-reveal">
            <div><span class="tyg-section-kicker">TRABAJOS DESTACADOS</span><h2 id="portfolio-heading">Nuestro <span class="tyg-gradient-text">portafolio</span></h2><p>Explora las soluciones que hemos desarrollado para nuestros clientes y proyectos.</p></div>
            <div class="tyg-project-count"><strong>{{ $projects->count() }}</strong><span>{{ $projects->count() === 1 ? 'proyecto' : 'proyectos' }}</span></div>
        </div>
        <div class="tyg-portfolio-tools tyg-reveal">
            <label class="tyg-project-search"><span class="material-symbols-outlined" aria-hidden="true">search</span><span class="sr-only">Buscar proyectos</span><input id="tygProjectSearch" type="search" placeholder="Buscar proyecto o empresa..." autocomplete="off"></label>
            <span id="tygProjectStatus" class="tyg-project-status" role="status" aria-live="polite"></span>
        </div>
        <div class="tyg-project-grid" id="tygProjectGrid">
            @forelse($projects as $project)
                <article class="tyg-project-card tyg-reveal" data-project-card data-search="{{ mb_strtolower($project->titulo . ' ' . $project->nombre_negocio . ' ' . $project->descripcion, 'UTF-8') }}">
                    <a class="tyg-project-image" href="{{ route('project.detail', $project) }}" aria-label="Ver proyecto {{ $project->titulo }}">
                        @if($project->imagen)
                            <img src="{{ asset('storage/' . $project->imagen) }}" alt="Proyecto {{ $project->titulo }} de {{ $project->nombre_negocio }}" loading="lazy" decoding="async">
                        @else
                            <div class="tyg-image-placeholder"><span class="material-symbols-outlined">deployed_code</span></div>
                        @endif
                        <span class="tyg-image-overlay"></span>
                        <span class="tyg-project-chip">{{ $project->nombre_negocio }}</span>
                        <span class="tyg-image-arrow material-symbols-outlined" aria-hidden="true">north_east</span>
                    </a>
                    <div class="tyg-project-content">
                        <span class="tyg-project-type"><span class="tyg-type-dot"></span> PROYECTO DESARROLLADO</span>
                        <h3><a href="{{ route('project.detail', $project) }}">{{ $project->titulo }}</a></h3>
                        <p>{{ $project->descripcion }}</p>
                        <a class="tyg-project-link" href="{{ route('project.detail', $project) }}">Explorar proyecto <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></a>
                    </div>
                </article>
            @empty
                <div class="tyg-empty-static"><span class="material-symbols-outlined">folder_open</span><h3>Próximamente nuevos proyectos</h3><p>Estamos preparando nuestro portafolio.</p></div>
            @endforelse
        </div>
        <div class="tyg-no-results" id="tygNoResults" hidden><span class="material-symbols-outlined">manage_search</span><h3>No encontramos coincidencias</h3><p>Prueba con otro nombre o término.</p></div>
        <div class="tyg-load-area"><button id="tygLoadMore" class="tyg-btn tyg-btn-ghost" type="button" hidden>Ver más proyectos <span class="material-symbols-outlined">expand_more</span></button></div>
    </section>

    <section class="tyg-project-cta tyg-projects-shell tyg-reveal" aria-labelledby="projects-cta-heading">
        <div class="tyg-cta-inner"><div class="tyg-cta-halo" aria-hidden="true"></div><span class="tyg-section-kicker">TU PRÓXIMO PROYECTO EMPIEZA AQUÍ</span><h2 id="projects-cta-heading">¿Tienes una idea? <span class="tyg-gradient-text">Hagámosla realidad.</span></h2><p>Conversemos sobre tus objetivos y construyamos una solución tecnológica para tu negocio.</p><div class="tyg-hero-actions tyg-cta-actions"><a href="{{ route('contact') }}" class="tyg-btn tyg-btn-primary">Iniciar un proyecto <span class="material-symbols-outlined">arrow_forward</span></a><a href="https://wa.me/51972378043?text=Hola%2C%20quiero%20conversar%20sobre%20un%20proyecto" target="_blank" rel="noopener noreferrer" class="tyg-btn tyg-btn-ghost"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Hablar por WhatsApp</a></div></div>
    </section>
</div>
@endsection

@push('javascript')
<script src="{{ asset('js/grupotyg-projects.js') }}?v=2.0.0" defer></script>
@endpush
