@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/grupotyg-services.css') }}">
@endpush

@section('content')
<div class="tyg-services">
  <section class="tyg-services-hero relative overflow-hidden">
    <div class="tyg-orb tyg-orb-one" aria-hidden="true"></div><div class="tyg-orb tyg-orb-two" aria-hidden="true"></div>
    <div class="tyg-services-grid" aria-hidden="true"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 grid lg:grid-cols-2 gap-12 items-center">
      <div class="tyg-reveal">
        <div class="tyg-eyebrow"><span class="tyg-status"></span> GRUPO TYG INGENIEROS · SOLUCIONES DIGITALES</div>
        <h1 class="tyg-hero-title">Tecnología que <span>impulsa</span> tu negocio.</h1>
        <p class="tyg-lead">Transformamos ideas y desafíos empresariales en plataformas digitales, sistemas a medida y soluciones para crecer con confianza.</p>
        <div class="flex flex-wrap gap-4 mt-9">
          <a href="#soluciones" class="tyg-btn tyg-btn-primary">Explorar soluciones <span class="material-symbols-outlined">arrow_forward</span></a>
          <button type="button" class="tyg-btn tyg-btn-outline" data-tyg-open-modal>Cuéntanos tu proyecto <span class="material-symbols-outlined">north_east</span></button>
        </div>
        <div class="tyg-hero-tags"><span>Desarrollo web</span><span>E-commerce</span><span>Facturación electrónica</span><span>Software a medida</span></div>
      </div>
      <div class="tyg-visual tyg-reveal" aria-label="Representación gráfica de nuestras soluciones digitales">
        <div class="tyg-visual-glow"></div>
        <div class="tyg-console">
          <div class="tyg-console-top"><div class="flex gap-2"><i></i><i></i><i></i></div><span>TYG / DIGITAL SOLUTIONS</span><span class="material-symbols-outlined">terminal</span></div>
          <div class="tyg-console-body">
            <div class="tyg-code-label">// Tecnología e Innovación</div>
            <div class="tyg-code-line"><em>const</em> proyecto = <strong>{</strong></div>
            <div class="tyg-code-line pl-5">estrategia: <b>'inteligente'</b>,</div>
            <div class="tyg-code-line pl-5">desarrollo: <b>'a medida'</b>,</div>
            <div class="tyg-code-line pl-5">crecimiento: <b>'escalable'</b></div>
            <div class="tyg-code-line"><strong>}</strong>;</div>
            <div class="tyg-progress"><span></span></div>
            <div class="tyg-console-bottom"><span><i></i> Proyecto en evolución</span><span>TYG ENGINEERING</span></div>
          </div>
        </div>
        <div class="tyg-floating tyg-floating-a"><span class="material-symbols-outlined">verified_user</span><span>Diseño confiable</span></div>
        <div class="tyg-floating tyg-floating-b"><span class="material-symbols-outlined">hub</span><span>Soluciones conectadas</span></div>
      </div>
    </div>
  </section>

  <section id="soluciones" class="tyg-section max-w-7xl mx-auto px-6 lg:px-8">
    <div class="tyg-section-head tyg-reveal"><div><div class="tyg-kicker">QUÉ HACEMOS</div><h2>Soluciones para cada <span>desafío.</span></h2></div><p>Unimos estrategia, diseño e ingeniería para crear herramientas que aporten valor real a tu empresa.</p></div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <article class="tyg-service-card tyg-featured tyg-reveal"><div class="tyg-card-top"><div class="tyg-service-icon"><span class="material-symbols-outlined">receipt_long</span></div><span class="tyg-card-index">01 / DESTACADO</span></div><h3>Facturación Electrónica</h3><p>Gestiona ventas, comprobantes electrónicos, inventario y operaciones comerciales desde una plataforma centralizada.</p><div class="tyg-card-foot"><span>Conoce FacTyG</span><a href="{{ route('facturacion') }}" aria-label="Conocer facturación electrónica"><span class="material-symbols-outlined">arrow_outward</span></a></div></article>
      @foreach($services as $service)
      <article class="tyg-service-card tyg-reveal"><div class="tyg-card-top"><div class="tyg-service-icon"><i class="{{ $service->icono }}" aria-hidden="true"></i></div><span class="tyg-card-index">SOLUCIÓN DIGITAL</span></div><h3>{{ $service->name }}</h3><p>{{ $service->description_corto }}</p><div class="tyg-card-foot"><span>Hablemos de tu proyecto</span><button type="button" data-tyg-open-modal data-tyg-service="{{ $service->name }}" aria-label="Consultar por {{ $service->name }}"><span class="material-symbols-outlined">arrow_outward</span></button></div></article>
      @endforeach
    </div>
  </section>

  <section class="tyg-section tyg-method-section"><div class="max-w-7xl mx-auto px-6 lg:px-8"><div class="tyg-section-head tyg-reveal"><div><div class="tyg-kicker">NUESTRA FORMA DE TRABAJAR</div><h2>De la idea al <span>resultado.</span></h2></div><p>Un proceso claro, colaborativo y orientado a las necesidades de cada negocio.</p></div><div class="grid md:grid-cols-4 gap-5">
    @foreach([['01','Exploramos','Entendemos tus objetivos, procesos y oportunidades.','search'],['02','Diseñamos','Definimos una experiencia y arquitectura alineadas al proyecto.','architecture'],['03','Construimos','Desarrollamos, integramos y validamos cada solución.','code'],['04','Evolucionamos','Acompañamos la mejora y el crecimiento de tu plataforma.','trending_up']] as $step)
    <div class="tyg-step tyg-reveal"><span class="tyg-step-number">{{ $step[0] }}</span><span class="material-symbols-outlined tyg-step-icon">{{ $step[3] }}</span><h3>{{ $step[1] }}</h3><p>{{ $step[2] }}</p></div>
    @endforeach
  </div></div></section>

  <section class="tyg-section max-w-7xl mx-auto px-6 lg:px-8"><div class="tyg-product-panel tyg-reveal"><div class="tyg-panel-content"><div class="tyg-kicker">PRODUCTO DESTACADO · FACTYG</div><h2>Menos procesos manuales. <span>Más control para tu empresa.</span></h2><p>Conoce nuestra solución de facturación electrónica y gestión comercial, pensada para simplificar tu operación diaria.</p><a href="{{ route('facturacion') }}" class="tyg-btn tyg-btn-primary">Descubrir FacTyG <span class="material-symbols-outlined">arrow_forward</span></a></div><div class="tyg-panel-art" aria-hidden="true"><div class="tyg-panel-ring"></div><div class="tyg-panel-center"><span class="material-symbols-outlined">monitoring</span><strong>FacTyG</strong><small>GESTIÓN INTELIGENTE</small></div></div></div></section>

  <section class="tyg-section max-w-7xl mx-auto px-6 lg:px-8"><div class="tyg-cta tyg-reveal"><div class="tyg-kicker">CONSTRUYAMOS ALGO GRANDE</div><h2>Tu próximo proyecto comienza <span>con una conversación.</span></h2><p>Cuéntanos qué necesitas y evaluemos juntos la mejor solución tecnológica.</p><div class="flex flex-wrap justify-center gap-4"><button type="button" data-tyg-open-modal class="tyg-btn tyg-btn-primary">Solicitar asesoría <span class="material-symbols-outlined">arrow_forward</span></button><a href="https://wa.me/51972378043?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20sus%20servicios" target="_blank" rel="noopener noreferrer" class="tyg-btn tyg-btn-outline"><i class="fa-brands fa-whatsapp"></i> Hablar por WhatsApp</a></div></div></section>
</div>

<div id="tygServicesModal" class="tyg-modal" aria-hidden="true"><div class="tyg-modal-backdrop" data-tyg-close-modal></div><div class="tyg-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="tygModalTitle"><button class="tyg-modal-close" type="button" data-tyg-close-modal aria-label="Cerrar formulario"><span class="material-symbols-outlined">close</span></button><div class="tyg-kicker">HABLEMOS DE TU IDEA</div><h2 id="tygModalTitle">Inicia tu proyecto</h2><p>Completa tus datos y nuestro equipo podrá ponerse en contacto contigo.</p><form id="tygServicesForm" action="{{ route('correo') }}" method="POST" class="tyg-form">@csrf<div class="grid sm:grid-cols-2 gap-4"><label>Nombre<input name="nombre" type="text" autocomplete="name" required maxlength="150" placeholder="Tu nombre"></label><label>Correo electrónico<input name="email" type="email" autocomplete="email" required maxlength="200" placeholder="correo@empresa.com"></label><label>Teléfono<input name="telefono" type="tel" autocomplete="tel" required maxlength="30" placeholder="Tu teléfono"></label><label>Servicio<select name="servicio" id="tygServiceSelect" required><option value="">Selecciona un servicio</option><option value="Facturacion Electronica">Facturación Electrónica</option>@foreach($services as $service)<option value="{{ $service->name }}">{{ $service->name }}</option>@endforeach<option value="Otro">Otro</option></select></label></div><label>Tu proyecto<textarea name="mensaje" rows="4" required maxlength="3000" placeholder="Cuéntanos qué necesitas..."></textarea></label><div id="tygFormMessage" class="tyg-form-message" role="status" aria-live="polite"></div><button class="tyg-btn tyg-btn-primary tyg-submit" type="submit">Enviar solicitud <span class="material-symbols-outlined">send</span></button></form></div></div>
@endsection

@push('javascript')
<script src="{{ asset('js/grupotyg-services.js') }}" defer></script>
@endpush
