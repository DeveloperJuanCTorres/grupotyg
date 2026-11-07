@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/grupotyg-project-detail.css') }}">
@endpush

@section('content')
@php
    $galleryRaw = $project->portafolio;
    $galleryDecoded = is_array($galleryRaw) ? $galleryRaw : json_decode($galleryRaw ?: '[]', true);
    $gallery = collect(is_array($galleryDecoded) ? $galleryDecoded : [])->filter(fn($path) => is_string($path) && trim($path) !== '')->values();
    $projectUrl = $project->link_pagina;
    $externalUrl = is_string($projectUrl) && filter_var($projectUrl, FILTER_VALIDATE_URL) && in_array(parse_url($projectUrl, PHP_URL_SCHEME), ['http','https'], true) ? $projectUrl : null;
@endphp
<main class="tyg-case" id="project-top">
    <div class="tyg-case__ambient" aria-hidden="true"></div>
    <section class="tyg-case__hero tyg-case__container">
        <a href="{{ route('project') }}" class="tyg-case__back"><span class="material-symbols-outlined">arrow_back</span> Volver a proyectos</a>
        <div class="tyg-case__eyebrow"><span class="tyg-case__pulse"></span> PORTAFOLIO / CASO DE ESTUDIO</div>
        <div class="tyg-case__hero-grid">
            <div class="tyg-case__intro">
                <div class="tyg-case__client">
                    @if($project->logo_negocio)
                        <span class="tyg-case__client-logo"><img src="{{ asset('storage/'.$project->logo_negocio) }}" alt="Logotipo de {{ $project->nombre_negocio }}" loading="eager"></span>
                    @endif
                    <span><small>PROYECTO PARA</small><strong>{{ $project->nombre_negocio }}</strong></span>
                </div>
                <h1>{{ $project->titulo }}</h1>
                <p class="tyg-case__lead">Una solución digital desarrollada para convertir necesidades reales en experiencias tecnológicas.</p>
                <div class="tyg-case__actions">
                    <a class="tyg-case__button tyg-case__button--primary" href="#galeria"><span class="material-symbols-outlined">grid_view</span> Explorar galería</a>
                    @if($externalUrl)
                        <a class="tyg-case__button tyg-case__button--ghost" href="{{ $externalUrl }}" target="_blank" rel="noopener noreferrer"><span class="material-symbols-outlined">open_in_new</span> Visitar proyecto</a>
                    @endif
                </div>
            </div>
            <div class="tyg-case__hero-visual" data-reveal>
                <div class="tyg-case__visual-top"><span><i></i><i></i><i></i></span><span>PROJECT PREVIEW</span><span class="material-symbols-outlined">open_in_full</span></div>
                @if($project->imagen)
                    <img src="{{ asset('storage/'.$project->imagen) }}" alt="Vista principal del proyecto {{ $project->titulo }}" fetchpriority="high">
                @else
                    <div class="tyg-case__empty-visual"><span class="material-symbols-outlined">developer_mode</span></div>
                @endif
                <div class="tyg-case__visual-caption"><span>Grupo TyG Ingenieros</span><span>Tecnología e Innovación</span></div>
            </div>
        </div>
    </section>

    <section class="tyg-case__story tyg-case__container" data-reveal>
        <div class="tyg-case__section-intro"><span class="tyg-case__kicker">01 / EL PROYECTO</span><h2>Diseñado para <em>hacer la diferencia.</em></h2></div>
        <div class="tyg-case__description">
            <div class="tyg-case__description-body">{!! $project->descripcion !!}</div>
            <div class="tyg-case__fact"><span class="material-symbols-outlined">verified</span><div><strong>Desarrollo tecnológico</strong><p>Un proyecto presentado por Grupo TyG Ingenieros.</p></div></div>
        </div>
    </section>

    <section class="tyg-case__gallery-section" id="galeria">
        <div class="tyg-case__container">
            <div class="tyg-case__gallery-heading" data-reveal><div><span class="tyg-case__kicker">02 / EXPERIENCIA VISUAL</span><h2>El proyecto, <em>en detalle.</em></h2><p>Explora cada pantalla y descubre el diseño detrás de la solución.</p></div><span class="tyg-case__gallery-count">{{ $gallery->count() }} {{ $gallery->count() === 1 ? 'IMAGEN' : 'IMÁGENES' }}</span></div>
            @if($gallery->isNotEmpty())
                <div class="tyg-case__bento" id="projectGallery">
                    @foreach($gallery as $index => $item)
                        <button class="tyg-case__tile {{ $index % 7 === 0 ? 'tyg-case__tile--wide' : '' }} {{ $index % 7 === 3 ? 'tyg-case__tile--tall' : '' }}" type="button" data-gallery-index="{{ $index }}" data-gallery-src="{{ asset('storage/'.$item) }}" data-gallery-alt="Captura {{ $index + 1 }} de {{ $project->titulo }}" aria-label="Ampliar imagen {{ $index + 1 }} de {{ $gallery->count() }}" data-reveal>
                            <img src="{{ asset('storage/'.$item) }}" alt="Captura {{ $index + 1 }} del proyecto {{ $project->titulo }}" loading="lazy" decoding="async">
                            <span class="tyg-case__tile-overlay"><span>EXPLORAR IMAGEN <span class="material-symbols-outlined">north_east</span></span><span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }} / {{ str_pad($gallery->count(), 2, '0', STR_PAD_LEFT) }}</span></span>
                        </button>
                    @endforeach
                </div>
            @else
                <div class="tyg-case__gallery-empty"><span class="material-symbols-outlined">collections</span><p>La galería de este proyecto estará disponible próximamente.</p></div>
            @endif
        </div>
    </section>

    <section class="tyg-case__cta tyg-case__container" data-reveal>
        <div class="tyg-case__cta-inner"><span class="tyg-case__kicker">TU PRÓXIMO PROYECTO</span><h2>¿Y si el siguiente gran proyecto <em>fuera el tuyo?</em></h2><p>Cuéntanos qué necesitas. Diseñamos soluciones web, ecommerce, facturación electrónica y sistemas a medida.</p><div class="tyg-case__actions"><a class="tyg-case__button tyg-case__button--primary" href="{{ route('contact') }}">Hablemos de tu idea <span class="material-symbols-outlined">arrow_forward</span></a><a class="tyg-case__button tyg-case__button--ghost" href="{{ route('project') }}">Ver otros proyectos</a></div></div>
    </section>
</main>

<div class="tyg-lightbox" id="tygProjectLightbox" role="dialog" aria-modal="true" aria-label="Visor de imágenes del proyecto" aria-hidden="true" tabindex="-1">
    <div class="tyg-lightbox__top"><span class="tyg-lightbox__brand">GRUPO TYG <span>/ PORTAFOLIO</span></span><div><span id="tygLightboxCounter">01 / 01</span><button type="button" id="tygLightboxZoom" aria-label="Ampliar imagen" title="Ampliar imagen"><span class="material-symbols-outlined">zoom_in</span></button><button type="button" id="tygLightboxClose" aria-label="Cerrar galería" title="Cerrar"><span class="material-symbols-outlined">close</span></button></div></div>
    <button class="tyg-lightbox__arrow tyg-lightbox__arrow--prev" type="button" id="tygLightboxPrev" aria-label="Imagen anterior"><span class="material-symbols-outlined">chevron_left</span></button>
    <div class="tyg-lightbox__stage" id="tygLightboxStage"><img id="tygLightboxImage" alt="" draggable="false"></div>
    <button class="tyg-lightbox__arrow tyg-lightbox__arrow--next" type="button" id="tygLightboxNext" aria-label="Imagen siguiente"><span class="material-symbols-outlined">chevron_right</span></button>
    <div class="tyg-lightbox__bottom"><span id="tygLightboxCaption"></span><span>← → Navegar · ESC Cerrar · Z Zoom</span></div>
</div>
@endsection

@push('javascript')
<script src="{{ asset('js/grupotyg-project-detail.js') }}" defer></script>
@endpush
