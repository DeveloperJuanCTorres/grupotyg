@extends('layouts.app')

@section('content')

<div class="pt-16 pb-2xl flex-grow hero-gradient">
    <!-- Hero Section -->
    <header class="max-w-7xl mx-auto px-8 mb-24 text-center">
        <div class="inline-block px-4 py-1.5 mb-6 rounded-full bg-primary-container/20 border border-primary/30 text-primary font-label-sm uppercase tracking-widest">
            Ingeniería de precisión para el futuro
        </div>
        <h1 class="font-display-xl text-display-xl mb-6 text-white max-w-4xl mx-auto">
            Sistemas avanzados, <span class="text-secondary">ejecución</span> impecable.
        </h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
            Diseñamos y construimos arquitecturas de software de alto rendimiento que impulsan la escala empresarial y la transformación digital.
        </p>
    </header>
    <!-- Standardized Services Grid -->
    <section class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
        <!-- Facturación Electrónica -->
        <div class="glass-card rounded-3xl p-8 flex flex-col group hover:border-secondary transition-all hover:-translate-y-2">
            <div class="w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mb-8">
                <span class="material-symbols-outlined text-secondary text-4xl" style="font-variation-settings: 'FILL' 1">receipt_long</span>
            </div>
            <h3 class="text-headline-md font-headline-md text-white mb-4">Facturación Electrónica</h3>
            <p class="text-on-surface-variant text-sm flex-grow">Sistema integral de facturación cumpliendo con todas las normativas tributarias vigentes.</p>
            <a href="{{route('facturacion')}}" class="mt-8 flex items-center text-secondary font-bold text-sm cursor-pointer group/link">
                Saber más
                <span class="material-symbols-outlined ml-2 text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
        @foreach($services as $service)
        <div class="glass-card rounded-3xl p-8 flex flex-col group hover:border-primary transition-all hover:-translate-y-2">
            <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-8">
                <i class="{{$service->icono}} text-4xl text-primary"></i>
            </div>
            <h3 class="text-headline-md font-headline-md text-white mb-4">{{ $service->name }}</h3>
            <p class="text-on-surface-variant text-sm flex-grow">{{ $service->description_corto }}</p>
            <!-- <div class="mt-8 flex items-center text-primary font-bold text-sm cursor-pointer group/link">
                Saber más
                <span class="material-symbols-outlined ml-2 text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
            </div> -->
        </div>
        @endforeach
    </section>
    <!-- Tech Stack Section -->
    <section class="max-w-7xl mx-auto px-8 mt-32 text-center">
        <h2 class="font-headline-lg text-headline-lg text-white mb-16 uppercase tracking-widest">Nucleo tecnológico</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center justify-items-center opacity-60">
            <div class="flex flex-col items-center gap-2 group hover:opacity-100 transition-all">
                <span class="material-symbols-outlined text-4xl" data-icon="database">database</span>
                <span class="text-label-sm font-label-sm tracking-widest">POSTGRESQL</span>
            </div>
            <div class="flex flex-col items-center gap-2 group hover:opacity-100 transition-all">
                <span class="material-symbols-outlined text-4xl" data-icon="terminal">terminal</span>
                <span class="text-label-sm font-label-sm tracking-widest">NODE.JS</span>
            </div>
            <div class="flex flex-col items-center gap-2 group hover:opacity-100 transition-all">
                <span class="material-symbols-outlined text-4xl" data-icon="layers">layers</span>
                <span class="text-label-sm font-label-sm tracking-widest">REACT</span>
            </div>
            <div class="flex flex-col items-center gap-2 group hover:opacity-100 transition-all">
                <span class="material-symbols-outlined text-4xl" data-icon="memory">memory</span>
                <span class="text-label-sm font-label-sm tracking-widest">AI &amp; ML</span>
            </div>
            <div class="flex flex-col items-center gap-2 group hover:opacity-100 transition-all">
                <span class="material-symbols-outlined text-4xl" data-icon="cloud">cloud</span>
                <span class="text-label-sm font-label-sm tracking-widest">AWS/GCP</span>
            </div>
            <div class="flex flex-col items-center gap-2 group hover:opacity-100 transition-all">
                <span class="material-symbols-outlined text-4xl" data-icon="token">token</span>
                <span class="text-label-sm font-label-sm tracking-widest">TYPESCRIPT</span>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="max-w-7xl mx-auto px-8 mt-32">
        <div class="relative overflow-hidden glass-card rounded-3xl p-2xl text-center border-primary/20">
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary/10 blur-[120px] -translate-y-1/2 translate-x-1/2"></div>
            <div class="relative z-10">
                <h2 class="font-display-xl text-headline-lg md:text-display-xl text-white mb-8">¿Listo para iniciar la compilación?</h2>
                <p class="text-body-lg text-on-surface-variant max-w-xl mx-auto mb-12">
                    Asóciate con un equipo que domine la ingeniería de alto rendimiento.
                </p>
                <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                    <button class="bg-primary text-on-primary px-12 py-5 rounded-lg font-bold text-lg hover:scale-105 transition-all">
                        Iniciar proyecto
                    </button>
                    <button class="border border-white/10 hover:bg-white/5 text-white px-12 py-5 rounded-lg font-bold text-lg transition-all">
                        HABLAR CON UN INGENIERO
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection