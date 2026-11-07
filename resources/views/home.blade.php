@extends('layouts.app')

@section('content')
<main class="tyg-home" id="inicio">
    
    <section class="tyg-hero tyg-grid" aria-label="Presentación de Grupo TyG">
        <div class="tyg-orb tyg-orb-a" aria-hidden="true"></div><div class="tyg-orb tyg-orb-b" aria-hidden="true"></div>
        <div class="tyg-shell tyg-hero-grid">
            <div class="tyg-hero-copy" data-reveal>
                <div class="tyg-eyebrow"><span class="tyg-live"></span> GRUPO TYG INGENIEROS <span class="tyg-eyebrow-divider">/</span> TECNOLOGÍA E INNOVACIÓN</div>
                <h1>Convertimos tus ideas en <span class="tyg-gradient-text">tecnología que impulsa negocios.</span></h1>
                <p>Desarrollamos páginas web, tiendas virtuales, sistemas empresariales y soluciones de facturación electrónica que acompañan el crecimiento de tu empresa.</p>
                <div class="tyg-actions"><button class="tyg-btn tyg-btn-primary" type="button" data-open-contact>Iniciar un proyecto <span aria-hidden="true">↗</span></button><a class="tyg-btn tyg-btn-outline" href="#servicios">Explorar soluciones <span aria-hidden="true">↓</span></a></div>
                <div class="tyg-hero-proof"><span class="tyg-proof-dot"></span> Soluciones digitales diseñadas para tu operación</div>
            </div>
            <div class="tyg-visual" data-reveal aria-label="Representación visual de soluciones tecnológicas">
                <div class="tyg-visual-halo"></div>
                <div class="tyg-dashboard">
                    <div class="tyg-window-top"><div class="tyg-window-dots"><i></i><i></i><i></i></div><span>TyG / Digital Workspace</span><span class="tyg-window-status">● SYSTEM ONLINE</span></div>
                    <div class="tyg-dashboard-body"><div class="tyg-dash-side"><div class="tyg-side-logo">T</div><span>▦</span><span>◈</span><span>▥</span><span>⚙</span></div><div class="tyg-dash-content"><span class="tyg-mini-label">ECOSISTEMA DIGITAL</span><h3>Todo conectado.<br><em>Todo bajo control.</em></h3><div class="tyg-bars"><span style="--h:35%"></span><span style="--h:60%"></span><span style="--h:47%"></span><span style="--h:78%"></span><span style="--h:65%"></span><span style="--h:92%"></span><span style="--h:76%"></span><span style="--h:100%"></span><span style="--h:84%"></span></div><div class="tyg-dash-bottom"><span>Infraestructura inteligente</span><strong>● ACTIVA</strong></div></div></div>
                </div>
                <div class="tyg-float-card tyg-float-one"><span class="tyg-float-icon">⌘</span><div><b>Software a medida</b><small>Procesos más inteligentes</small></div></div>
                <div class="tyg-float-card tyg-float-two"><span class="tyg-float-icon blue">↗</span><div><b>Escala tu negocio</b><small>Innovación continua</small></div></div>
            </div>
        </div>
        <div class="tyg-hero-bottom tyg-shell"><span>EXPLORA NUESTRO ECOSISTEMA</span><a href="#servicios" aria-label="Ir a servicios">↓</a><span>WEB · ECOMMERCE · ERP · SOFTWARE</span></div>
    </section>

    <section class="tyg-section tyg-services" id="servicios"><div class="tyg-shell"><div class="tyg-section-head" data-reveal><div><div class="tyg-kicker">01 / QUÉ HACEMOS</div><h2>Soluciones que crean <span class="tyg-gradient-text">posibilidades.</span></h2></div><p>Desde tu primera presencia digital hasta la automatización completa de tus operaciones.</p></div>
        <div class="tyg-service-grid">
            <article class="tyg-service-card" data-reveal><div class="tyg-service-top"><span class="tyg-service-icon">⌘</span><span class="tyg-service-index">01</span></div><h3>Desarrollo web</h3><p>Experiencias digitales rápidas, atractivas y optimizadas para convertir visitas en oportunidades.</p><button type="button" class="tyg-text-link" data-service="Desarrollo Web">Solicitar propuesta <span>↗</span></button></article>
            <article class="tyg-service-card" data-reveal><div class="tyg-service-top"><span class="tyg-service-icon">◈</span><span class="tyg-service-index">02</span></div><h3>Ecommerce</h3><p>Tiendas virtuales con catálogos, pagos y herramientas para gestionar tus ventas en línea.</p><button type="button" class="tyg-text-link" data-service="Ecommerce">Solicitar propuesta <span>↗</span></button></article>
            <article class="tyg-service-card tyg-featured" data-reveal><div class="tyg-service-top"><span class="tyg-service-icon">▤</span><span class="tyg-service-index">03</span></div><div class="tyg-tag">FACTYG</div><h3>Facturación electrónica</h3><p>Organiza tus ventas, comprobantes, inventario y procesos comerciales desde una misma plataforma.</p><a class="tyg-text-link" href="{{ route('facturacion') }}">Conocer FacTyG <span>↗</span></a></article>
            <article class="tyg-service-card" data-reveal><div class="tyg-service-top"><span class="tyg-service-icon">{ }</span><span class="tyg-service-index">04</span></div><h3>Software a medida</h3><p>Sistemas empresariales construidos alrededor de tus procesos, objetivos y necesidades.</p><button type="button" class="tyg-text-link" data-service="Software a medida">Solicitar propuesta <span>↗</span></button></article>
        </div>
        @if(isset($services) && count($services))
        <div class="tyg-extra-services" data-reveal><h3>Más capacidades de nuestro equipo</h3><div class="tyg-extra-grid">@foreach($services as $service)<div class="tyg-extra-card"><i class="{{ $service->icono }}" aria-hidden="true"></i><div><strong>{{ $service->name }}</strong><p>{{ $service->description_corto }}</p></div></div>@endforeach</div></div>
        @endif
    </div></section>

    <section class="tyg-section tyg-product" id="factyg"><div class="tyg-shell tyg-product-grid"><div data-reveal><div class="tyg-kicker">02 / PRODUCTO DESTACADO</div><div class="tyg-product-pill">FAC<span>TYG</span> · GESTIÓN EMPRESARIAL</div><h2>Menos tareas repetitivas.<br><span class="tyg-gradient-text">Más control para crecer.</span></h2><p>FacTyG reúne herramientas de facturación electrónica, ventas, inventario y administración para ayudarte a operar con mayor claridad.</p><div class="tyg-check-grid"><span>✓ Facturación electrónica</span><span>✓ Control de inventario</span><span>✓ Gestión de ventas</span><span>✓ Reportes de negocio</span></div><div class="tyg-actions"><a class="tyg-btn tyg-btn-primary" href="{{ route('facturacion') }}">Conocer FacTyG ↗</a><button type="button" class="tyg-btn tyg-btn-outline" data-service="Facturación Electrónica">Solicitar asesoría</button></div></div><div class="tyg-video-frame" data-reveal><div class="tyg-video-heading"><span>FAC TYG / VISTA GENERAL</span><span>● DEMOSTRACIÓN</span></div><div class="tyg-video-ratio"><iframe src="https://www.youtube.com/embed/-fHASlpiUlc" title="Demostración de sistema de facturación" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div></div></div></section>

    <section class="tyg-section tyg-process" id="metodologia"><div class="tyg-shell"><div class="tyg-section-head" data-reveal><div><div class="tyg-kicker">03 / NUESTRA METODOLOGÍA</div><h2>De una idea a una <span class="tyg-gradient-text">solución real.</span></h2></div><p>Un proceso claro, colaborativo y orientado a los resultados de tu negocio.</p></div><div class="tyg-steps"><div data-reveal><span>01 / DESCUBRIR</span><h3>Entendemos tu negocio</h3><p>Analizamos tus necesidades, usuarios y objetivos.</p></div><div data-reveal><span>02 / DISEÑAR</span><h3>Definimos la solución</h3><p>Diseñamos una experiencia y arquitectura adecuadas.</p></div><div data-reveal><span>03 / CONSTRUIR</span><h3>Desarrollamos contigo</h3><p>Implementamos y validamos cada componente.</p></div><div data-reveal><span>04 / EVOLUCIONAR</span><h3>Seguimos mejorando</h3><p>Optimizamos la solución según nuevas necesidades.</p></div></div></div></section>

    <section class="tyg-section tyg-contact-section"><div class="tyg-shell"><div class="tyg-cta" data-reveal><div class="tyg-cta-glow"></div><div class="tyg-kicker">TU SIGUIENTE PROYECTO EMPIEZA AQUÍ</div><h2>El futuro de tu empresa<br><span class="tyg-gradient-text">se construye hoy.</span></h2><p>Cuéntanos tu idea. Te ayudaremos a convertirla en una solución tecnológica.</p><div class="tyg-actions"><button type="button" class="tyg-btn tyg-btn-primary" data-open-contact>Hablemos de tu proyecto ↗</button><a class="tyg-btn tyg-btn-outline" href="https://wa.me/51972378043?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20sus%20servicios" target="_blank" rel="noopener noreferrer">Contactar por WhatsApp</a></div><div class="tyg-cta-contact">GRUPO TYG INGENIEROS · TECNOLOGÍA E INNOVACIÓN</div></div></div></section>
</main>

<div id="tyg-contact-modal" class="tyg-modal" role="dialog" aria-modal="true" aria-labelledby="tyg-modal-title" aria-hidden="true"><div class="tyg-modal-backdrop" data-close-contact></div><div class="tyg-modal-panel" tabindex="-1"><button class="tyg-modal-close" type="button" data-close-contact aria-label="Cerrar formulario">×</button><div class="tyg-kicker">HABLEMOS</div><h2 id="tyg-modal-title">Cuéntanos tu proyecto.</h2><p>Completa tus datos y nuestro equipo podrá ponerse en contacto contigo.</p><form id="tyg-contact-form" action="{{ route('correo') }}" method="POST">@csrf<div class="tyg-form-grid"><label>Nombre <input name="nombre" type="text" autocomplete="name" required maxlength="120"></label><label>Correo electrónico <input name="email" type="email" autocomplete="email" required maxlength="160"></label><label>Teléfono <input name="telefono" type="tel" autocomplete="tel" required maxlength="30"></label><label>Servicio <select name="servicio" required><option value="">Seleccionar servicio</option><option value="Desarrollo Web">Desarrollo web</option><option value="Ecommerce">Ecommerce</option><option value="Facturación Electrónica">Facturación electrónica</option><option value="Software a medida">Software a medida</option><option value="Otro">Otro</option></select></label></div><label>Tu mensaje <textarea name="mensaje" rows="4" required maxlength="2000" placeholder="Describe brevemente qué necesitas..."></textarea></label><div id="tyg-form-status" class="tyg-form-status" role="status" aria-live="polite"></div><button class="tyg-btn tyg-btn-primary tyg-submit" type="submit">Enviar solicitud ↗</button></form></div></div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/grupotyg-home.css') }}">
@endpush
@push('javascript')
<script src="{{ asset('js/grupotyg-home.js') }}" defer></script>
@endpush
