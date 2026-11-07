<footer class="tyg-footer relative overflow-hidden mt-auto" role="contentinfo">
  <div class="tyg-footer-glow" aria-hidden="true"></div>
  <div class="max-w-7xl mx-auto px-5 sm:px-8 relative z-10">
    <div class="tyg-footer-top py-14 md:py-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">
      <div class="lg:col-span-1 space-y-5">
        <a href="{{ route('index') }}" class="inline-flex items-center gap-3"><img src="{{ asset('storage/' . $company->logo) }}" alt="Grupo TyG Ingenieros" class="w-14 h-14 object-contain"><span class="flex flex-col"><strong class="text-white text-xl">Grupo <span class="tyg-gradient-text">TyG</span></strong><small class="text-slate-400 text-[10px] uppercase tracking-[.2em]">Tecnología e Innovación</small></span></a>
        <p class="text-slate-400 text-sm leading-7">{{ $company->descripcion }}</p>
        <div class="flex gap-3">
          @foreach (['facebook_link' => 'fa-facebook-f', 'instagram_link' => 'fa-instagram', 'tiktok_link' => 'fa-tiktok', 'youtube_link' => 'fa-youtube'] as $field => $icon)
            @if (!empty($company->{$field}))
              <a class="tyg-social" href="{{ $company->{$field} }}" target="_blank" rel="noopener noreferrer" aria-label="{{ str_replace('_link', '', $field) }}"><i class="fa-brands {{ $icon }}"></i></a>
            @endif
          @endforeach
        </div>
      </div>
      <div><h3 class="tyg-footer-title">Soluciones</h3><nav class="tyg-footer-links" aria-label="Soluciones"><a href="{{ route('facturacion') }}">Facturación electrónica</a><a href="{{ route('service') }}">Desarrollo web</a><a href="{{ route('service') }}">E-Commerce</a><a href="{{ route('service') }}">Sistemas a medida</a><a href="{{ route('service') }}">Business Intelligence</a></nav></div>
      <div><h3 class="tyg-footer-title">Explora</h3><nav class="tyg-footer-links" aria-label="Explora"><a href="{{ route('index') }}">Inicio</a><a href="{{ route('store') }}">Tienda tecnológica</a><a href="{{ route('service') }}">Servicios</a><a href="{{ route('project') }}">Proyectos</a><a href="{{ route('contact') }}">Contacto</a></nav></div>
      <div><h3 class="tyg-footer-title">Conversemos</h3><p class="text-slate-400 text-sm leading-7 mb-5">¿Tienes un proyecto en mente? Podemos ayudarte a convertirlo en una solución digital.</p><a class="tyg-footer-contact" href="https://wa.me/51972378043" target="_blank" rel="noopener noreferrer"><span class="material-symbols-outlined">chat</span> +51 972 378 043</a><a class="tyg-footer-contact" href="tel:+51978209130"><span class="material-symbols-outlined">call</span> +51 978 209 130</a><a class="tyg-footer-contact" href="mailto:informes@grupotyg.pe"><span class="material-symbols-outlined">mail</span> informes@grupotyg.pe</a><p class="text-slate-500 text-xs mt-4">Lima, Perú</p></div>
    </div>
    <div class="tyg-footer-bottom py-7 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-slate-500"><span>© {{ date('Y') }} Grupo TyG Ingenieros. Todos los derechos reservados.</span><span>Diseñado con <span class="text-cyan-400">tecnología e innovación</span>.</span></div>
  </div>
</footer>
