@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/grupotyg-contact.css') }}">
@endpush

@section('content')
<div class="tyg-contact relative overflow-hidden pt-32 pb-24 px-5 sm:px-8">
    <div class="tyg-contact-orb" aria-hidden="true"></div>
    <div class="max-w-7xl mx-auto relative z-10">
        <header class="tyg-reveal text-center max-w-3xl mx-auto mb-16">
            <span class="tyg-eyebrow"><span class="tyg-status-dot"></span> HABLEMOS DE TU PRÓXIMO PROYECTO</span>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mt-6 mb-6">Grandes ideas.<br><span class="tyg-gradient-text">Conexiones reales.</span></h1>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed">Cuéntanos qué quieres construir. En Grupo TyG Ingenieros convertimos tus necesidades en soluciones tecnológicas a medida.</p>
        </header>

        <div class="grid lg:grid-cols-12 gap-7 items-start">
            <section class="tyg-contact-panel tyg-reveal lg:col-span-7 p-6 sm:p-10" aria-labelledby="contact-title">
                <div class="flex items-center gap-4 mb-8">
                    <div class="tyg-icon-box"><span class="material-symbols-outlined">outgoing_mail</span></div>
                    <div><p class="text-xs tracking-[.2em] uppercase text-cyan-300 mb-1">Contacto directo</p><h2 id="contact-title" class="text-2xl sm:text-3xl font-bold text-white">Inicia una conversación</h2></div>
                </div>
                <form id="tygContactForm" action="{{ route('correo') }}" method="POST" class="space-y-5">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div><label for="tygNombre">Nombre completo *</label><input id="tygNombre" name="nombre" type="text" autocomplete="name" maxlength="120" required placeholder="Tu nombre"></div>
                        <div><label for="tygEmail">Correo electrónico *</label><input id="tygEmail" name="email" type="email" autocomplete="email" maxlength="160" required placeholder="correo@empresa.com"></div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div><label for="tygTelefono">Teléfono *</label><input id="tygTelefono" name="telefono" type="tel" autocomplete="tel" maxlength="30" required placeholder="+51 999 999 999"></div>
                        <div><label for="tygServicio">Servicio de interés *</label><select id="tygServicio" name="servicio" required><option value="">Selecciona un servicio</option><option value="Facturacion Electronica">Facturación electrónica</option><option value="Desarrollo Web">Desarrollo web</option><option value="Ecommerce">E-commerce</option><option value="Desarrollo de Sistemas a Medida">Sistemas a medida</option><option value="Business Intelligence">Business Intelligence</option><option value="Otro">Otro proyecto</option></select></div>
                    </div>
                    <div><label for="tygMensaje">Cuéntanos sobre tu proyecto *</label><textarea id="tygMensaje" name="mensaje" rows="5" maxlength="3000" required placeholder="¿Qué necesitas desarrollar o mejorar?"></textarea></div>
                    <div class="flex items-start gap-3 text-sm text-slate-400"><span class="material-symbols-outlined text-cyan-300 text-lg">lock</span><span>Utilizaremos tus datos únicamente para atender tu consulta.</span></div>
                    <button type="submit" id="tygContactSubmit" class="tyg-primary-btn w-full sm:w-auto"><span class="material-symbols-outlined">send</span><span>Enviar consulta</span><span class="material-symbols-outlined">arrow_forward</span></button>
                    <p id="tygContactFeedback" class="text-sm" role="status" aria-live="polite"></p>
                </form>
            </section>

            <aside class="lg:col-span-5 space-y-6">
                <div class="tyg-contact-panel tyg-reveal p-7 sm:p-8">
                    <p class="text-xs tracking-[.2em] uppercase text-cyan-300 mb-3">Estamos conectados</p><h2 class="text-2xl font-bold text-white mb-7">Hablemos de tecnología</h2>
                    <div class="space-y-6">
                        @if($company->email)
                        <div class="tyg-info-row"><span class="material-symbols-outlined">mail</span><div><span class="tyg-info-label">Correo corporativo</span><a href="mailto:{{ $company->email }}" class="tyg-info-link break-all">{{ $company->email }}</a></div></div>
                        @endif
                        @if($company->telefono_1)
                        <div class="tyg-info-row"><span class="material-symbols-outlined">call</span><div><span class="tyg-info-label">Llámanos</span><a href="tel:{{ preg_replace('/[^+0-9]/', '', $company->telefono_1) }}" class="tyg-info-link">{{ $company->telefono_1 }}</a>@if($company->telefono_2)<a href="tel:{{ preg_replace('/[^+0-9]/', '', $company->telefono_2) }}" class="tyg-info-link">{{ $company->telefono_2 }}</a>@endif</div></div>
                        @endif
                        @if($company->direccion_1 || $company->direccion_2 || $company->direccion_3)
                        <div class="tyg-info-row"><span class="material-symbols-outlined">location_on</span><div><span class="tyg-info-label">Nuestra ubicación</span><p class="text-white leading-relaxed">{{ collect([$company->direccion_1, $company->direccion_2, $company->direccion_3])->filter()->implode(', ') }}</p></div></div>
                        @endif
                    </div>
                    <a href="https://wa.me/51972378043?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20sus%20servicios" target="_blank" rel="noopener noreferrer" class="tyg-whatsapp-btn mt-8"><i class="fa-brands fa-whatsapp text-xl"></i> Conversar por WhatsApp <span class="material-symbols-outlined">north_east</span></a>
                </div>
                <div class="tyg-contact-panel tyg-reveal p-7 sm:p-8 relative overflow-hidden">
                    <div class="tyg-small-glow" aria-hidden="true"></div><div class="relative"><div class="tyg-icon-box mb-5"><span class="material-symbols-outlined">deployed_code</span></div><h3 class="text-xl font-bold text-white mb-3">Tu próximo proyecto comienza aquí.</h3><p class="text-slate-300 leading-relaxed mb-6">Desarrollo web, comercio electrónico, facturación electrónica y software personalizado, desde la idea hasta su implementación.</p><a href="{{ route('service') }}" class="text-cyan-300 font-semibold inline-flex items-center gap-2 hover:text-white transition">Explorar servicios <span class="material-symbols-outlined text-lg">arrow_forward</span></a></div>
                </div>
            </aside>
        </div>
        <section class="tyg-reveal mt-20 text-center"><p class="text-xs uppercase tracking-[.22em] text-cyan-300 mb-4">Nuestro compromiso</p><h2 class="text-2xl sm:text-4xl font-bold text-white mb-4">Tecnología e Innovación</h2><p class="text-slate-400 max-w-2xl mx-auto">Cada gran solución comienza escuchando una necesidad. Queremos conocer la tuya.</p></section>
    </div>
</div>
@endsection

@push('javascript')
<script src="{{ asset('js/grupotyg-contact.js') }}" defer></script>
@endpush
