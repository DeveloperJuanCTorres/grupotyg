@extends('layouts.app')

@section('content')
<div class="pt-16 flex-grow hero-gradient">
    <!-- Hero Section -->
    <section class="max-w-screen-2xl mx-auto px-margin mb-3xl">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-lg border-l-2 border-primary/30 pl-lg">
            <div class="max-w-4xl">
                <span class="font-label-sm text-primary tracking-[0.2em] mb-sm block">Proyecto // 2024</span>
                <!-- <h1 class="font-display-xl text-white mb-md">Quantum Nexus Framework</h1> -->
                <div class="flex items-center gap-md">
                    <div class="w-20 h-20 rounded-lg bg-white flex items-center justify-center border border-white/10">
                        <!-- <span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">dataset</span> -->
                        <img src="{{asset('storage/' . $project->logo_negocio)}}" alt="">
                    </div>
                    <div>
                        <p class="font-label-sm text-outline uppercase tracking-wider">{{$project->titulo}}</p>
                        <p class="font-headline-md text-on-surface">{{$project->nombre_negocio}}</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block text-right">
                <p class="font-label-sm text-outline mb-xs">ESTADO</p>
                <p class="font-body-lg text-primary">Proyecto terminado</p>
            </div>
        </div>
    </section>
    <!-- Main Content Canvas -->
    <section class="max-w-screen-2xl mx-auto px-margin mb-3xl">
        <div class="grid grid-cols-12 gap-gutter">
            <!-- Description Section -->
            <div class="col-span-12 lg:col-span-5 flex flex-col justify-center">
                <h2 class="font-headline-lg text-white mb-lg">{{$project->titulo}}</h2>
                <div class="space-y-lg">
                    <p class="font-body-md text-outline">
                        {!!$project->descripcion!!}
                    </p>
                    <div class="pt-lg flex gap-md">
                        <div class="glass p-lg rounded-xl flex-1 bg-secondary/10">
                            <p class="text-display-xl font-display-xl text-secondary">0.8ms</p>
                            <p class="font-label-sm text-outline">AVG LATENCY</p>
                        </div>
                        <div class="glass p-lg rounded-xl flex-1 bg-secondary/10">
                            <p class="text-display-xl font-display-xl text-tertiary">99.9%</p>
                            <p class="font-label-sm text-outline">UPTIME SLA</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Featured Image -->
            <div class="col-span-12 lg:col-span-7">
                <div class="relative group overflow-hidden rounded-2xl aspect-video">
                    <img alt="Digital Interface" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Futuristic dark blue high-tech server room with glowing blue fiber optic cables and digital data overlay in minimalist style"
                        src="{{asset('storage/' . $project->imagen)}}" />
                    <div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent"></div>
                    <div class="absolute bottom-lg left-lg">
                        <span class="glass px-md py-xs rounded-full text-white font-label-sm">Infraestructura primaria</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Result Portfolio Gallery (Bento Grid) -->
    <section class="max-w-screen-2xl mx-auto px-margin mb-3xl">
        <div class="flex items-end justify-between mb-xl">
            <div>
                <h3 class="font-headline-lg text-white">Resultado</h3>
                <p class="text-outline font-body-md">Galería de implementación e interfaz</p>
            </div>
        </div>

        @php
        $portafolio = json_decode($project->portafolio, true);
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-gutter">

            @foreach($portafolio as $item)
            <div class="group relative cursor-pointer"
                onclick="openLightbox('{{ asset('storage/'.$item) }}')">

                <div class="overflow-hidden rounded-2xl glass">
                    <img
                        src="{{ asset('storage/'.$item) }}"
                        class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-110">
                </div>

                <!-- Hover overlay -->
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center rounded-2xl">
                    <span class="glass px-lg py-md text-white text-sm rounded-full">
                        Ver imagen
                    </span>
                </div>

            </div>
            @endforeach

        </div>
    </section>
    <!-- Final Narrative / Call to Action -->
    <section class="py-3xl bg-surface-container-low/50">
        <div class="max-w-4xl mx-auto px-margin text-center">
            <span class="material-symbols-outlined text-primary text-5xl mb-lg" style="font-variation-settings: 'FILL' 0;">verified</span>
            <h4 class="font-headline-lg text-white mb-md">Validated Excellence</h4>
            <p class="font-body-lg text-on-surface-variant mb-xl">
                "Technova's implementation of the Quantum Nexus Framework didn't just solve our latency issues—it redefined how we think about our data ecosystem. A masterclass in precision engineering."
            </p>
            <div class="flex flex-col items-center">
                <p class="font-label-sm text-white uppercase tracking-widest">Marcus Thorne</p>
                <p class="font-body-md text-outline">CTO, Aether Solutions</p>
            </div>
        </div>
    </section>
</div>


<!-- Lightbox -->
<div id="lightbox"
    class="fixed inset-0 bg-black/90 hidden z-50 flex items-center justify-center">

    <button onclick="closeLightbox()"
        class="absolute top-6 right-6 text-white text-3xl">&times;</button>

    <img id="lightboxImg"
        class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl">
</div>


@endsection

@push('javascript')


<script>
    function openLightbox(src) {
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightboxImg');

        img.src = src;
        lightbox.classList.remove('hidden');
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.add('hidden');
    }

    // cerrar con ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") closeLightbox();
    });
</script>
@endpush