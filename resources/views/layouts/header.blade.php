<header id="tygHeader" class="tyg-header fixed inset-x-0 top-0 z-50" role="banner">
  <div class="tyg-nav-shell max-w-7xl mx-auto px-5 sm:px-8">
    <div class="flex items-center justify-between gap-5 min-h-[82px]">
      <a href="{{ route('index') }}" class="tyg-brand flex items-center gap-3 shrink-0" aria-label="Grupo TyG Ingenieros - Inicio">
        <img src="{{ asset('storage/' . $company->logo) }}" class="w-12 h-12 object-contain" alt="Logo Grupo TyG Ingenieros">
        <span class="flex flex-col leading-tight"><strong class="text-white text-lg sm:text-xl tracking-tight">Grupo <span class="tyg-gradient-text">TyG</span></strong><small class="text-[9px] sm:text-[10px] uppercase tracking-[.22em] text-slate-400">Tecnología e Innovación</small></span>
      </a>
      <nav class="hidden lg:flex items-center gap-1" aria-label="Navegación principal">
        <a class="tyg-nav-link {{ request()->routeIs('index') ? 'is-active' : '' }}" href="{{ route('index') }}">Inicio</a>
        <a class="tyg-nav-link {{ request()->routeIs('store') || request()->routeIs('store.*') ? 'is-active' : '' }}" href="{{ route('store') }}">Tienda</a>
        <a class="tyg-nav-link {{ request()->routeIs('service') || request()->routeIs('service.*') || request()->routeIs('facturacion') ? 'is-active' : '' }}" href="{{ route('service') }}">Servicios</a>
        <a class="tyg-nav-link {{ request()->routeIs('project') || request()->routeIs('project.*') ? 'is-active' : '' }}" href="{{ route('project') }}">Proyectos</a>
        <a class="tyg-nav-link {{ request()->routeIs('contact') || request()->routeIs('contact.*') ? 'is-active' : '' }}" href="{{ route('contact') }}">Contacto</a>
      </nav>
      <div class="flex items-center gap-3">
        <a href="{{ route('store') }}" class="tyg-icon-button hidden sm:inline-flex" aria-label="Ir a la tienda" title="Tienda"><span class="material-symbols-outlined">shopping_bag</span></a>
        <a href="{{ route('contact') }}" class="tyg-nav-cta hidden md:inline-flex">Hablemos de tu proyecto <span class="material-symbols-outlined text-[18px]">north_east</span></a>
        <button id="tygMenuBtn" type="button" class="tyg-icon-button lg:hidden" aria-controls="tygMobileMenu" aria-expanded="false" aria-label="Abrir menú"><span id="tygMenuIcon" class="material-symbols-outlined">menu</span></button>
      </div>
    </div>
    <nav id="tygMobileMenu" class="tyg-mobile-menu lg:hidden" aria-label="Navegación móvil" hidden>
      <a href="{{ route('index') }}">Inicio</a><a href="{{ route('store') }}">Tienda</a><a href="{{ route('service') }}">Servicios</a><a href="{{ route('project') }}">Proyectos</a><a href="{{ route('contact') }}">Contacto</a>
      <a href="https://wa.me/51972378043?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20sus%20servicios" target="_blank" rel="noopener noreferrer" class="tyg-mobile-contact">Escríbenos por WhatsApp ↗</a>
    </nav>
  </div>
</header>
