@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/grupotyg-facturacion.css') }}?v=2.1">
@endpush

@section('content')
<div class="ft-page" id="factyg-top">
  <section class="ft-hero">
    <div class="ft-aurora ft-aurora-a" aria-hidden="true"></div><div class="ft-aurora ft-aurora-b" aria-hidden="true"></div>
    <div class="ft-container ft-hero-grid">
      <div class="ft-hero-copy ft-reveal">
        <div class="ft-brand-lockup"><img src="{{ asset('img/factyg-logo-horizontal.png') }}" alt="FacTyG — ERP de facturación electrónica" width="520" height="174" fetchpriority="high"></div>
        <div class="ft-eyebrow"><span class="ft-dot"></span> ERP DE FACTURACIÓN ELECTRÓNICA</div>
        <h1>Facturar es solo el comienzo. <span>Controla todo tu negocio.</span></h1>
        <p>Una solución para emitir comprobantes electrónicos y organizar las operaciones de tu empresa desde una experiencia práctica, clara y profesional.</p>
        <div class="ft-hero-actions">
          <a class="ft-btn ft-btn-primary" href="#ft-planes">Conocer los planes <span aria-hidden="true">↗</span></a>
          <a class="ft-btn ft-btn-ghost" href="#ft-demo">Ver el sistema <span aria-hidden="true">▶</span></a>
        </div>
        <div class="ft-hero-points"><span>✓ Facturación electrónica</span><span>✓ Gestión comercial</span><span>✓ Opciones para diferentes negocios</span></div>
      </div>
      <div class="ft-hero-visual ft-reveal">
        <div class="ft-visual-glow"></div>
        <div class="ft-visual-top"><span class="ft-live-dot"></span> Tu negocio, mejor organizado</div>
        <div class="ft-screen"><img src="{{ asset('img/fac.png') }}" alt="Vista del sistema de facturación electrónica FacTyG" loading="eager"></div>
        <div class="ft-visual-bottom"><img class="ft-brand-mini" src="{{ asset('img/factyg-isotipo.png') }}" alt="" loading="lazy"><div><strong>FacTyG</strong><small>Gestión empresarial y facturación</small></div><span class="ft-visual-check material-symbols-outlined" aria-hidden="true">verified</span></div>
      </div>
    </div>
  </section>

  <nav class="ft-section-nav" aria-label="Navegación de facturación"><div class="ft-container ft-section-nav-inner">
    <a href="#ft-soluciones">Soluciones</a><a href="#ft-beneficios">Beneficios</a><a href="#ft-planes">Planes</a><a href="#ft-demo">Video demostrativo</a><a href="#ft-preguntas">Preguntas frecuentes</a>
  </div></nav>

  <section class="ft-section" id="ft-soluciones">
    <div class="ft-container">
      <div class="ft-heading ft-reveal"><div class="ft-kicker">SOLUCIONES POR NEGOCIO</div><h2>Un sistema que se adapta <span>a tu forma de trabajar.</span></h2><p>Explora las aplicaciones de FacTyG para distintos sectores comerciales. Consulta con nuestro equipo las funciones disponibles para tu plan.</p></div>
      <div class="ft-sector-grid">
        @php
          $sectores = [
            ['icon'=>'storefront','title'=>'Tiendas y comercios','desc'=>'Organiza ventas, productos y operaciones de tu tienda con una interfaz fácil de utilizar.','tag'=>'COMERCIO'],
            ['icon'=>'inventory_2','title'=>'Mayoristas y minoristas','desc'=>'Gestiona operaciones comerciales para diferentes clientes y modalidades de venta.','tag'=>'DISTRIBUCIÓN'],
            ['icon'=>'medication','title'=>'Farmacias y boticas','desc'=>'Consulta las opciones para el seguimiento de productos, lotes y fechas de vencimiento.','tag'=>'SALUD'],
            ['icon'=>'local_bar','title'=>'Licorerías','desc'=>'Facilita el registro y la venta de artículos con diferentes presentaciones.','tag'=>'RETAIL'],
            ['icon'=>'devices','title'=>'Móviles y electrónica','desc'=>'Organiza productos y consulta las funciones de control por número de serie.','tag'=>'TECNOLOGÍA'],
            ['icon'=>'build','title'=>'Talleres y reparaciones','desc'=>'Gestiona servicios, trabajos y el seguimiento de las reparaciones de tus clientes.','tag'=>'SERVICIOS'],
          ];
        @endphp
        @foreach($sectores as $sector)
        <article class="ft-sector ft-reveal">
          <div class="ft-sector-top"><div class="ft-icon"><span class="material-symbols-outlined" aria-hidden="true">{{ $sector['icon'] }}</span></div><span class="ft-sector-tag">{{ $sector['tag'] }}</span></div>
          <h3>{{ $sector['title'] }}</h3><p>{{ $sector['desc'] }}</p>
          <a href="https://wa.me/51972378043?text={{ urlencode('Hola, deseo información de FacTyG para ' . $sector['title']) }}" target="_blank" rel="noopener noreferrer">Consultar solución <span aria-hidden="true">↗</span></a>
        </article>
        @endforeach
      </div>
    </div>
  </section>

  <section class="ft-section ft-section-soft" id="ft-beneficios"><div class="ft-container ft-benefit-grid">
    <div class="ft-reveal"><div class="ft-kicker">POR QUÉ FACTYG</div><h2>Menos tareas repetitivas. <span>Más tiempo para crecer.</span></h2><p class="ft-lead">FacTyG busca que las operaciones de tu negocio sean más ordenadas, desde el registro de una venta hasta la consulta de información comercial.</p>
      <div class="ft-benefit-list"><div><span class="material-symbols-outlined">receipt_long</span><div><strong>Comprobantes electrónicos</strong><p>Centraliza la emisión y consulta de tus documentos comerciales.</p></div></div><div><span class="material-symbols-outlined">inventory</span><div><strong>Operaciones organizadas</strong><p>Administra la información de productos, ventas y clientes.</p></div></div><div><span class="material-symbols-outlined">monitoring</span><div><strong>Visibilidad para decidir</strong><p>Accede a información útil para dar seguimiento a tu actividad comercial.</p></div></div></div>
    </div>
    <div class="ft-showcase ft-reveal"><div class="ft-showcase-label"><span class="ft-dot"></span> UNA EXPERIENCIA MÁS SIMPLE</div><div class="ft-flow"><div><span class="material-symbols-outlined">shopping_cart_checkout</span><strong>Registra una venta</strong><small>Organiza tu operación</small></div><span class="material-symbols-outlined ft-flow-arrow">arrow_downward</span><div><span class="material-symbols-outlined">description</span><strong>Emite el comprobante</strong><small>Desde tu sistema</small></div><span class="material-symbols-outlined ft-flow-arrow">arrow_downward</span><div><span class="material-symbols-outlined">insights</span><strong>Consulta tus resultados</strong><small>Información para gestionar</small></div></div></div>
  </div></section>

  <section class="ft-section" id="ft-planes"><div class="ft-container">
    <div class="ft-heading ft-reveal"><div class="ft-kicker">PLANES FACTYG</div><h2>Elige cómo quieres <span>hacer crecer tu negocio.</span></h2><p>Compara las alternativas y consulta qué incluye cada una antes de contratar.</p></div>
    <div class="ft-pricing-grid">
      @php
        $planes = [
          ['nombre'=>'Básico','precio'=>'30','descripcion'=>'Para negocios que están comenzando a organizar sus ventas.','features'=>['Hasta 100 comprobantes al mes','Soporte incluido','Hasta 10 usuarios','Hasta 2 almacenes'],'popular'=>false],
          ['nombre'=>'Pro','precio'=>'100','descripcion'=>'Para empresas con más operaciones y necesidades de gestión.','features'=>['Hasta 500 comprobantes al mes','Soporte prioritario','Hasta 50 usuarios','Hasta 5 almacenes','Analítica avanzada'],'popular'=>true],
          ['nombre'=>'Enterprise','precio'=>'150','descripcion'=>'Para operaciones que necesitan mayor capacidad y flexibilidad.','features'=>['Comprobantes sin límite indicado','Soporte dedicado','Usuarios sin límite indicado','Almacenes sin límite indicado','Integraciones a medida'],'popular'=>false],
        ];
      @endphp
      @foreach($planes as $plan)
      <article class="ft-price-card {{ $plan['popular'] ? 'ft-price-popular' : '' }} ft-reveal">
        @if($plan['popular'])<div class="ft-popular-label">PLAN DESTACADO</div>@endif
        <div class="ft-plan-title">{{ $plan['nombre'] }}</div><p class="ft-plan-desc">{{ $plan['descripcion'] }}</p>
        <div class="ft-price"><small>S/</small><strong>{{ $plan['precio'] }}</strong><span>/ mes</span></div>
        <div class="ft-plan-divider"></div><div class="ft-plan-includes">Características indicadas en el plan</div>
        <ul>@foreach($plan['features'] as $feature)<li><span class="material-symbols-outlined" aria-hidden="true">check_circle</span>{{ $feature }}</li>@endforeach</ul>
        <a class="ft-btn {{ $plan['popular'] ? 'ft-btn-primary' : 'ft-btn-outline' }} ft-plan-button" href="https://wa.me/51972378043?text={{ urlencode('Hola, quiero consultar el precio, condiciones y disponibilidad del plan FacTyG ' . $plan['nombre']) }}" target="_blank" rel="noopener noreferrer">Consultar plan <span aria-hidden="true">↗</span></a>
      </article>
      @endforeach
    </div>
    <p class="ft-price-note">* Precios y características mostrados según la información de la página original. Confirma vigencia, impuestos, límites, soporte y condiciones comerciales antes de publicarlos como oferta definitiva.</p>
  </div></section>

  <section class="ft-section ft-section-soft" id="ft-demo"><div class="ft-container ft-demo-grid"><div class="ft-reveal"><div class="ft-kicker">CONOCE EL SISTEMA</div><h2>Mira FacTyG <span>en acción.</span></h2><p class="ft-lead">Descubre cómo puede ayudarte una solución de facturación y gestión empresarial. Si quieres evaluar su uso en tu negocio, conversemos.</p><a class="ft-btn ft-btn-primary" href="https://wa.me/51972378043?text={{ urlencode('Hola, quiero solicitar una demostración de FacTyG') }}" target="_blank" rel="noopener noreferrer">Solicitar demostración <span aria-hidden="true">↗</span></a></div><div class="ft-video-wrap ft-reveal"><iframe src="https://www.youtube-nocookie.com/embed/qg36PAl5K5k?rel=0" title="Video de facturación electrónica FacTyG" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div></div></section>

  <section class="ft-section" id="ft-preguntas"><div class="ft-container ft-faq-grid"><div class="ft-reveal"><div class="ft-kicker">RESOLVEMOS TUS DUDAS</div><h2>Preguntas <span>frecuentes.</span></h2><p class="ft-lead">La elección de un sistema debe ser sencilla y transparente.</p></div><div class="ft-faq-list ft-reveal">
    <details><summary>¿Puedo solicitar una demostración antes de contratar?<span class="material-symbols-outlined">add</span></summary><p>Sí, puedes contactar al equipo comercial para coordinar una presentación del sistema y revisar si se adapta a tus operaciones.</p></details>
    <details><summary>¿Qué plan conviene a mi negocio?<span class="material-symbols-outlined">add</span></summary><p>Depende de tu volumen de comprobantes, usuarios, almacenes y las funciones que necesites. Nuestro equipo puede ayudarte a evaluar las alternativas.</p></details>
    <details><summary>¿FacTyG se adapta a diferentes rubros?<span class="material-symbols-outlined">add</span></summary><p>La solución contempla escenarios comerciales como tiendas, mayoristas, farmacias y talleres. Consulta la disponibilidad de funciones específicas para tu actividad.</p></details>
    <details><summary>¿Cómo puedo consultar las condiciones del servicio?<span class="material-symbols-outlined">add</span></summary><p>Escríbenos por WhatsApp para recibir información actualizada sobre precios, implementación, soporte y características de cada plan.</p></details>
  </div></div></section>

  <section class="ft-bottom-section"><div class="ft-container"><div class="ft-bottom-cta ft-reveal"><div><img class="ft-cta-brand" src="{{ asset('img/factyg-logo-horizontal.png') }}" alt="FacTyG" loading="lazy"><div class="ft-kicker">TU SIGUIENTE PASO</div><h2>Tu negocio puede operar <span>de una forma más inteligente.</span></h2><p>Cuéntanos qué necesitas y conoce cómo FacTyG puede acompañar el crecimiento de tu empresa.</p></div><a class="ft-btn ft-btn-primary" href="https://wa.me/51972378043?text={{ urlencode('Hola, quiero información para implementar FacTyG en mi negocio') }}" target="_blank" rel="noopener noreferrer">Hablar con un asesor <span aria-hidden="true">↗</span></a></div></div></section>
</div>
@endsection

@push('javascript')
<script src="{{ asset('js/grupotyg-facturacion.js') }}?v=2.1" defer></script>
@endpush
