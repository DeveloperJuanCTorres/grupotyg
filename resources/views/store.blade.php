@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/grupotyg-store.css') }}">
@endpush

@section('content')
<div class="tyg-store" data-store-url="{{ route('store') }}">
    <div class="tyg-store-glow" aria-hidden="true"></div>
    <section class="tyg-store-hero">
        <div class="tyg-store-shell">
            <div class="tyg-store-eyebrow"><span class="tyg-store-pulse"></span> GRUPO TYG INGENIEROS <span class="tyg-store-eyebrow-separator">/</span> TIENDA TECNOLÓGICA</div>
            <div class="tyg-store-hero-layout">
                <div>
                    <h1>La tecnología que <span>impulsa tu negocio.</span></h1>
                    <p>Explora nuestra selección de soluciones informáticas, equipos de impresión e infraestructura tecnológica para potenciar tus operaciones.</p>
                    <div class="tyg-store-hero-actions">
                        <a href="#catalogo" class="tyg-store-btn-primary">Explorar catálogo <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></a>
                        <a href="{{ route('contact') }}" class="tyg-store-btn-ghost">Solicitar asesoría <span class="material-symbols-outlined" aria-hidden="true">north_east</span></a>
                    </div>
                </div>
                <div class="tyg-store-hero-art" aria-hidden="true">
                    <div class="tyg-store-orbit orbit-one"></div><div class="tyg-store-orbit orbit-two"></div>
                    <div class="tyg-store-art-core"><span class="material-symbols-outlined">devices</span></div>
                    <div class="tyg-store-art-chip chip-top"><span class="material-symbols-outlined">verified</span> Tecnología para empresas</div>
                    <div class="tyg-store-art-chip chip-bottom"><span class="material-symbols-outlined">support_agent</span> Asesoría especializada</div>
                </div>
            </div>
        </div>
    </section>

    <section id="catalogo" class="tyg-store-catalog tyg-store-shell">
        <div class="tyg-store-section-heading">
            <div><div class="tyg-store-kicker">CATÁLOGO / SOLUCIONES</div><h2>Encuentra lo que necesitas</h2><p>Filtra los productos según tu necesidad y explora las opciones disponibles.</p></div>
            <div class="tyg-store-heading-icon"><span class="material-symbols-outlined">grid_view</span> Catálogo tecnológico</div>
        </div>
        <div class="tyg-store-toolbar">
            <div class="tyg-store-toolbar-left"><span class="material-symbols-outlined">tune</span><span>Personaliza tu búsqueda</span><span id="tyg-active-count" class="tyg-store-filter-count" hidden>0 filtros</span></div>
            <div class="tyg-store-toolbar-right"><button type="button" id="tyg-mobile-filters" class="tyg-store-mobile-filter-btn" aria-controls="tyg-filter-panel" aria-expanded="false"><span class="material-symbols-outlined">filter_list</span> Filtros</button><button type="button" id="tyg-clear-filters" class="tyg-store-reset"><span class="material-symbols-outlined">restart_alt</span> Limpiar filtros</button></div>
        </div>
        <div class="tyg-store-layout">
            <aside id="tyg-filter-panel" class="tyg-store-sidebar" aria-label="Filtros de productos">
                <div class="tyg-store-filter-panel">
                    <div class="tyg-store-filter-title"><div><span class="material-symbols-outlined">tune</span> <strong>Filtrar productos</strong></div><span class="tyg-store-filter-subtitle">REFINA TU SELECCIÓN</span></div>
                    <fieldset class="tyg-store-filter-group"><legend><span class="material-symbols-outlined">category</span> Categorías</legend><div class="tyg-store-filter-options">
                        <label class="tyg-store-option"><input type="radio" name="category" value="" checked class="filter-category"><span>Todas las categorías</span></label>
                        @foreach($categories as $category)
                        <label class="tyg-store-option"><input type="radio" name="category" value="{{ $category->id }}" class="filter-category"><span>{{ $category->name }}</span></label>
                        @endforeach
                    </div></fieldset>
                    <fieldset class="tyg-store-filter-group"><legend><span class="material-symbols-outlined">sell</span> Marcas</legend><div class="tyg-store-filter-options">
                        <label class="tyg-store-option"><input type="radio" name="brand" value="" checked class="filter-brand"><span>Todas las marcas</span></label>
                        @foreach($brands as $brand)
                        <label class="tyg-store-option"><input type="radio" name="brand" value="{{ $brand->id }}" class="filter-brand"><span>{{ $brand->name }}</span></label>
                        @endforeach
                    </div></fieldset>
                    <div class="tyg-store-filter-group"><div class="tyg-store-filter-legend"><span class="material-symbols-outlined">payments</span> Precio máximo</div><div class="tyg-store-price-card"><div class="tyg-store-price-top"><span>Hasta</span><strong id="priceValue">S/ 5,000+</strong></div><input id="priceRange" type="range" min="0" max="5000" value="5000" step="50" aria-label="Precio máximo"><div class="tyg-store-price-limits"><span>S/ 0</span><span>S/ 5,000+</span></div></div></div>
                </div>
                <div class="tyg-store-help"><span class="material-symbols-outlined">support_agent</span><div><strong>¿Necesitas orientación?</strong><p>Te ayudamos a encontrar la solución adecuada.</p><a href="{{ route('contact') }}">Hablar con un asesor <span aria-hidden="true">↗</span></a></div></div>
            </aside>
            <div class="tyg-store-results">
                <div class="tyg-store-results-head"><div><span class="tyg-store-results-dot"></span> PRODUCTOS DISPONIBLES</div><span id="tyg-result-status" role="status" aria-live="polite">Explora nuestro catálogo</span></div>
                <div class="tyg-store-products-wrap" id="tyg-products-wrap">
                    <div id="product-container" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                        @include('products')
                    </div>
                    <div class="tyg-store-loading" id="tyg-store-loading" hidden><span class="tyg-store-spinner"></span><span>Actualizando productos...</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="tyg-store-bottom tyg-store-shell"><div class="tyg-store-bottom-card"><div class="tyg-store-bottom-icon"><span class="material-symbols-outlined">handshake</span></div><div><span>ASESORÍA TECNOLÓGICA</span><h2>¿Buscas una solución específica para tu empresa?</h2><p>Conversemos sobre tus necesidades y encontremos la mejor alternativa.</p></div><a href="{{ route('contact') }}" class="tyg-store-btn-primary">Contáctanos <span class="material-symbols-outlined">arrow_forward</span></a></div></section>
</div>
@endsection

@push('javascript')
<script src="{{ asset('js/grupotyg-store.js') }}" defer></script>
@endpush
