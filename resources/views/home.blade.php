@extends('layouts.app')

@section('content')

<!-- Hero Carousel Section -->
<section class="relative w-full overflow-hidden tech-grid group" style="height: 750px;">
    <div class="carousel-container flex h-full overflow-x-auto snap-x snap-mandatory" id="hero-carousel">
        <!-- Slide 1: Custom Software Architecture -->
        <div class="slide snap-start w-full h-full shrink-0 relative flex items-center">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-background/50 to-background z-0"></div>
            <div class="absolute -top-[10%] -right-[10%] w-[600px] h-[600px] bg-primary/10 blur-[120px] rounded-full"></div>
            <div class="max-w-7xl mx-auto px-8 relative z-10 grid lg:grid-cols-2 gap-16 items-center w-full">
                <div class="space-y-8">
                    <div class="inline-flex items-center space-x-2 bg-primary/10 border border-primary/20 px-3 py-1 rounded-full">
                        <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                        <span class="font-label-sm text-primary text-label-sm uppercase tracking-wider">Arquitectura de Software</span>
                    </div>
                    <h1 class="font-display-xl text-6xl md:text-display-xl text-white leading-none">
                        Diseñamos <span class="text-primary italic">Soluciones</span> Innovadoras
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                        Construimos software de alto rendimiento a la velocidad del pensamiento. Escala tu empresa con sistemas diseñados con precisión para paisajes digitales modernos.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-primary text-on-primary px-8 py-4 rounded-xl font-bold flex items-center group/btn transition-all hover:glow-shadow">
                            Comience
                            <span class="material-symbols-outlined ml-2 group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
                        </button>
                        <button class="glass-card text-white px-8 py-4 rounded-xl font-bold hover:bg-white/10 transition-all">
                            Más información
                        </button>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img alt="software architecture dashboard" class="rounded-3xl border border-white/10 shadow-2xl w-full h-[500px] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDS2Nospj1ZbMz1ZGQPbJDYsIzoDFUSy5aFvPrU9Htob3ZburjYpWRxJO9yirMbpe_iEt4wzFTQmWqzVgi1oCbUlk_g3y4sVZ8eXOGRNydWCMLs4syfMQ2y7izECacjzDLbj9sITlQ76fumR7u42BJhLuBKWIAHrekK6jiqRgXRs28qD5g272kyxnmAkoeDkTGs8CG79tepCPQu2-wYLHTNBdFY-61zhgS8M4dBAiAitU41sht7Jpp5_TnKRgNXnRPcrRmjXK5OVIKS" />
                </div>
            </div>
        </div>
        <!-- Slide 2: Electronic Invoicing -->
        <div class="slide snap-start w-full h-full shrink-0 relative flex items-center">
            <div class="absolute inset-0 bg-gradient-to-tr from-secondary/10 via-background to-transparent z-0"></div>
            <div class="absolute top-[20%] -left-[5%] w-[400px] h-[400px] bg-secondary/10 blur-[100px] rounded-full"></div>
            <div class="max-w-7xl mx-auto px-8 relative z-10 grid lg:grid-cols-2 gap-16 items-center w-full">
                <div class="space-y-8">
                    <div class="inline-flex items-center space-x-2 bg-secondary/10 border border-secondary/20 px-3 py-1 rounded-full">
                        <span class="w-2 h-2 bg-secondary rounded-full"></span>
                        <span class="font-label-sm text-secondary text-label-sm uppercase tracking-wider">Sistema de Facturación</span>
                    </div>
                    <h1 class="font-display-xl text-6xl md:text-display-xl text-white leading-none">
                        Facturación <span class="text-secondary">Electrónica</span> Pro
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                        Optimice su flujo de trabajo financiero con facturación de nivel empresarial. Garantice el cumplimiento tributario al 100 % con firmas digitales automatizadas.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{route('facturacion')}}" class="bg-secondary text-on-secondary px-8 py-4 rounded-xl font-bold flex items-center group/btn transition-all hover:shadow-[0_0_20px_rgba(0,162,230,0.4)]">
                            Ver planes
                            <span class="material-symbols-outlined ml-2 group-hover/btn:translate-x-1 transition-transform">payments</span>
                        </a>
                        <button class="glass-card text-white px-8 py-4 rounded-xl font-bold hover:bg-white/10 transition-all">
                            Más información
                        </button>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img alt="digital invoicing interface" class="rounded-3xl border border-white/10 shadow-2xl w-full h-[500px] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCm-JSe0g0LpHBKR1jd_9Q_hEDWW5svEQwZonFwpq_KxDdpS7UKSrHevrCPB04s7V8VZpFt1lXsANanCYACWHXOYzzJzNA1LTD1skFKkugdWkFtRXBKPyMURuNcZxkHRijaM04N_kZ47YBcGYnDbInZDOQlYarNYrGzVQ2FGm4lr0Q7_Dpq4Uhb80wPuqqmW90I0ZT05umOlY5abk-XQfZ4511MCh0NAh_sndb0rJbkhoajYtn_aupX_4RtUGavTpCgW8tt1uMhY8Xj" />
                </div>
            </div>
        </div>
        <!-- Slide 3: Precision Engineering -->
        <div class="slide snap-start w-full h-full shrink-0 relative flex items-center">
            <div class="absolute inset-0 bg-gradient-to-bl from-tertiary/10 via-background to-transparent z-0"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[500px] h-[500px] bg-tertiary/10 blur-[120px] rounded-full"></div>
            <div class="max-w-7xl mx-auto px-8 relative z-10 grid lg:grid-cols-2 gap-16 items-center w-full">
                <div class="space-y-8">
                    <div class="inline-flex items-center space-x-2 bg-tertiary/10 border border-tertiary/20 px-3 py-1 rounded-full">
                        <span class="w-2 h-2 bg-tertiary rounded-full"></span>
                        <span class="font-label-sm text-tertiary text-label-sm uppercase tracking-wider">Servicios de Ingeniería</span>
                    </div>
                    <h1 class="font-display-xl text-6xl md:text-display-xl text-white leading-none">
                        Excelencia en <span class="text-tertiary">Ingeniería</span> Precision
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                        Desde infraestructuras nativas en la nube hasta motores de venta minorista personalizados, ofrecemos excelencia técnica en todo el conjunto de herramientas con equipos sénior.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-tertiary text-on-tertiary px-8 py-4 rounded-xl font-bold flex items-center group/btn transition-all hover:shadow-[0_0_20px_rgba(219,184,255,0.4)]">
                            Comience
                            <span class="material-symbols-outlined ml-2 group-hover/btn:translate-x-1 transition-transform">settings_input_component</span>
                        </button>
                        <button class="glass-card text-white px-8 py-4 rounded-xl font-bold hover:bg-white/10 transition-all">
                            Más información
                        </button>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="glass-card rounded-[40px] p-8 aspect-square flex items-center justify-center relative overflow-hidden">
                        <div class="grid grid-cols-2 gap-4 w-full h-full">
                            <div class="bg-primary/20 rounded-2xl animate-pulse"></div>
                            <div class="bg-secondary/20 rounded-2xl"></div>
                            <div class="bg-tertiary/20 rounded-2xl"></div>
                            <div class="bg-white/10 rounded-2xl animate-pulse"></div>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="material-symbols-outlined text-white text-9xl">precision_manufacturing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel Controls -->
    <!-- Indicators -->
    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 flex items-center space-x-3 z-30">
        <button class="w-3 h-3 rounded-full bg-white transition-all hover:scale-125" id="dot-0" onclick="scrollToSlide(0)"></button>
        <button class="w-3 h-3 rounded-full bg-white/30 transition-all hover:scale-125" id="dot-1" onclick="scrollToSlide(1)"></button>
        <button class="w-3 h-3 rounded-full bg-white/30 transition-all hover:scale-125" id="dot-2" onclick="scrollToSlide(2)"></button>
    </div>
    <!-- Arrows -->
    <button class="absolute left-6 top-1/2 -translate-y-1/2 glass-card w-14 h-14 rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity z-30" onclick="prevSlide()">
        <span class="material-symbols-outlined">chevron_left</span>
    </button>
    <button class="absolute right-6 top-1/2 -translate-y-1/2 glass-card w-14 h-14 rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity z-30" onclick="nextSlide()">
        <span class="material-symbols-outlined">chevron_right</span>
    </button>
</section>

<!-- Invoicing System Section (Preserved from Screen 6) -->
<section class="py-3xl bg-surface-container-low border-y border-white/5 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full max-w-4xl bg-primary/5 blur-[120px] rounded-full"></div>
    <div class="max-w-7xl mx-auto px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8 order-2 lg:order-1">
                <div class="inline-flex items-center space-x-2 bg-secondary/10 border border-secondary/20 px-3 py-1 rounded-full">
                    <span class="w-2 h-2 bg-secondary rounded-full"></span>
                    <span class="font-label-sm text-secondary text-label-sm uppercase tracking-wider">Sistema SAS</span>
                </div>
                <h2 class="font-display-xl text-5xl md:text-display-xl text-white">
                    Facturación <span class="text-secondary">Electrónica</span> Pro
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    ¡La mejor aplicación de gestión de POS, facturación, inventario y servicios para su negocio en crecimiento!
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pb-4">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-cloud fa-lg text-secondary"></i>
                        <span class="text-white font-medium">¡Acceda desde cualquier lugar!</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-check-double fa-lg text-secondary"></i>
                        <span class="text-white font-medium">Sin instalación</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-sitemap fa-lg text-secondary"></i>
                        <span class="text-white font-medium">Multisucursales y almacén</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-user-lock fa-lg text-secondary"></i>
                        <span class="text-white font-medium">Límite de acceso de usuarios</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <i class="fas fa-cubes fa-lg text-secondary"></i>
                        <span class="text-white font-medium">Gestion de Stocks</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-handshake fa-lg text-secondary"></i>
                        <span class="text-white font-medium">Gestión de clientes</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-users fa-lg text-secondary"></i>
                        <span class="text-white font-medium">Gestión de recursos humanos</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-chart-line fa-lg text-secondary"></i>
                        <span class="text-white font-medium">Informes</span>
                    </div>

                </div>
                <div class="flex flex-wrap gap-4">
                    <button class="bg-secondary text-on-secondary px-8 py-4 rounded-xl font-bold flex items-center group transition-all hover:shadow-[0_0_20px_rgba(0,162,230,0.4)]">
                        Ver demo
                        <span class="material-symbols-outlined ml-2 group-hover:translate-x-1 transition-transform">play_circle</span>
                    </button>
                    <a href="{{route('facturacion')}}" class="glass-card text-white px-8 py-4 rounded-xl font-bold hover:bg-white/10 transition-all border-white/20">
                        Más información
                    </a>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="relative group">
                    <!-- Video Placeholder Mockup -->
                    <div class="glass-card rounded-[32px] p-3 shadow-2xl border-white/10 relative overflow-hidden aspect-video">
                        <iframe
                            class="w-full h-full rounded-[22px]"
                            src="https://www.youtube.com/embed/-fHASlpiUlc?si=awnNjAQXosmcjArL"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="absolute -bottom-10 -left-10 glass-card p-4 rounded-2xl shadow-xl border border-secondary/30 hidden sm:block">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-500/20 text-green-400 rounded-lg flex items-center justify-center">
                                <span class="material-symbols-outlined">check_circle</span>
                            </div>
                            <div>
                                <div class="text-white text-sm font-bold">Invoice #8842 Sent</div>
                                <div class="text-[10px] text-on-surface-variant uppercase tracking-tighter">Verified by Tax Authority</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview (Standardized Grid) -->
<section class="py-3xl max-w-7xl mx-auto px-8">
    <div class="text-center mb-2xl space-y-4">
        <h2 class="font-headline-lg text-headline-lg text-white">Nuestros Servicios</h2>
        <p class="text-on-surface-variant max-w-2xl mx-auto">Soluciones tecnológicas de vanguardia diseñadas para potenciar tu crecimiento digital.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
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
            <a href="#" class="mt-8 flex items-center text-primary font-bold text-sm cursor-pointer group/link">
                Saber más
                <span class="material-symbols-outlined ml-2 text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
        @endforeach
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-3xl bg-surface-container-lowest relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-8 grid lg:grid-cols-2 gap-2xl items-center">
        <div class="space-y-12">
            <div class="space-y-6">
                <h2 class="font-headline-lg text-headline-lg text-white">¿Por qué elegirnos?</h2>
                <p class="text-on-surface-variant text-body-lg">No nos limitamos a escribir código; diseñamos ventajas competitivas. Nuestra metodología combina una ingeniería rigurosa con la resolución creativa de problemas.</p>
            </div>
            <div class="grid gap-8">
                <div class="flex gap-6">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 border border-primary/20 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-primary">speed</span>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1">Rapidez para llegar al mercado</h4>
                        <p class="text-on-surface-variant text-sm">Nuestros marcos de trabajo internos propios nos permiten entregar productos mínimos viables (MVP) un 40 % más rápido que el promedio de la industria sin sacrificar la calidad.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-12 h-12 rounded-xl bg-secondary/10 border border-secondary/20 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-secondary">groups</span>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1">Equipos especializados</h4>
                        <p class="text-on-surface-variant text-sm">Equipos de ingeniería exclusivamente sénior que se integran a la perfección con sus gerentes de producto y partes interesadas.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-12 h-12 rounded-xl bg-tertiary/10 border border-tertiary/20 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-tertiary">trending_up</span>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1">Escalabilidad infinita</h4>
                        <p class="text-on-surface-variant text-sm">Construimos sistemas que pueden escalar de 1 a 100 millones de usuarios sin requerir una reescritura total.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="aspect-square bg-gradient-to-br from-primary/20 to-secondary/20 rounded-3xl p-1">
                <div class="w-full h-full bg-surface-container rounded-[22px] p-8 overflow-hidden relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="h-32 glass-card rounded-xl p-4 flex flex-col justify-between">
                                <div class="text-label-sm text-primary">ESTADO LATENTE</div>
                                <div class="text-2xl font-bold text-white">24ms</div>
                            </div>
                            <div class="h-48 glass-card rounded-xl p-4 flex flex-col justify-between bg-primary/20 border-primary/30">
                                <div class="text-label-sm text-white">TIEMPO DE ACTIVIDAD</div>
                                <div class="text-4xl font-black text-white">99.99%</div>
                            </div>
                        </div>
                        <div class="space-y-4 pt-8">
                            <div class="h-48 glass-card rounded-xl p-4 flex flex-col justify-between">
                                <div class="text-label-sm text-secondary">TRÁFICO</div>
                                <div class="text-2xl font-bold text-white">1.2M/s</div>
                            </div>
                            <div class="h-32 glass-card rounded-xl p-4 flex flex-col justify-between">
                                <div class="text-label-sm text-tertiary">SEGURIDAD</div>
                                <div class="text-white flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">verified</span>
                                    Active
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 h-24 glass-card rounded-xl border-dashed border-white/20 flex items-center justify-center">
                        <span class="material-symbols-outlined text-zinc-500 mr-2">location_on</span>
                        <span class="text-xs uppercase tracking-widest text-zinc-500 font-bold">Global Infrastructure Active</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-3xl">
    <div class="max-w-7xl mx-auto px-8">
        <h2 class="font-headline-lg text-headline-lg text-white mb-xl text-center">Engineered for Success</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            <div class="glass-card p-lg rounded-3xl space-y-6 relative">
                <span class="text-6xl font-serif text-primary/20 absolute top-4 left-4">“</span>
                <p class="text-body-md text-white italic relative z-10">TECHNOVA transformed our legacy monolith into a blazing-fast microservices architecture. Our conversion rates jumped 22% in the first month.</p>
                <div class="flex items-center gap-4">
                    <img alt="portrait of a male tech executive" class="w-12 h-12 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpSPKzMXduC3JWF6nsRwXspyv9AO0juaehlTbxGaL2ENlhQnNG_aNbvADozFILAHALa370-FAKwazw8saPhwY-ZG2u4STO5HaNmK3_WKOuTq5IPdWcqYSZSYiNIu_VAY1uz62_Or54K-ZdU035W2PT2095qpn1H2isRRXdi5n0DTESBGvPpjOVCQG4q9lbozo1NMl7WaI194o9FdBHo2zgnUv_bJgRmTfqb2Q-1Tp8lHNiyu1ScIvoO3L6GIoPF86jMBCytn1jz6ap" />
                    <div>
                        <div class="font-bold text-white">Marcus Thorne</div>
                        <div class="text-xs text-on-surface-variant">CTO, Nexus Corp</div>
                    </div>
                </div>
            </div>
            <div class="glass-card p-lg rounded-3xl space-y-6 relative border-primary/40 bg-primary/5">
                <span class="text-6xl font-serif text-primary/20 absolute top-4 left-4">“</span>
                <p class="text-body-md text-white italic relative z-10">The speed of delivery was unlike any agency we've worked with. They truly understand what 'future-ready' means in a high-growth environment.</p>
                <div class="flex items-center gap-4">
                    <img alt="professional woman in corporate attire" class="w-12 h-12 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuATMCZIbzOI1o94GA7lF7kYwP9KrDSlVj8bzWRPSR61gNRajp6zUDYAzeCsanVGoWq94VUZQsEYZHdjzWFCLBuoLiDNySYgAmw6O7VbA9SKoVAlsRRi9I7qM0AspDtUohmPQSn0CG9_k6XSHBf86lXDq_W6zKyYtpn3jDQ6WUTwUjoNMZhX1QYl7Ki0e9Me1ItbcmdOMaZxtQxJX7T8lAkWQvIsekPvUQF9cTPRZDkELbyFd4G3oeLyVwfr4kOVZnaATqMaIco_mPOz" />
                    <div>
                        <div class="font-bold text-white">Sarah Jenkins</div>
                        <div class="text-xs text-on-surface-variant">VP Engineering, FlowState</div>
                    </div>
                </div>
            </div>
            <div class="glass-card p-lg rounded-3xl space-y-6 relative">
                <span class="text-6xl font-serif text-primary/20 absolute top-4 left-4">“</span>
                <p class="text-body-md text-white italic relative z-10">Their cybersecurity audit and subsequent implementation saved us from a potential catastrophic breach. They are partners in the truest sense.</p>
                <div class="flex items-center gap-4">
                    <img alt="headshot of a businessman" class="w-12 h-12 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDshQahoLSprimTlpHO-fBWkS_zx-jbM0kQlSnn6M_JRZ80lUvzGqLgNrL48waqlPBnY4rGzLNgUegtx71rWg1kGn3xiBoLFTrsA4b76qW2X4gqcldldGpsZpcdS_RGfsNW3vidsMUjlSTMXBAHMAGyUoyDd39fN1dY0IXOczvYn8ydG0JJxs_UYXKQ9AZ6ipnqZaF5CEn1h9wN0DKDga67KzBgOdjnpJ-wYCcloJoYyYNAm7r-Ud9tLIpNKGHSlieb-yvdziT7mTe7" />
                    <div>
                        <div class="font-bold text-white">David Chen</div>
                        <div class="text-xs text-on-surface-variant">Founder, Apex Logic</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Footer Section -->
<section class="max-w-7xl mx-auto px-8 mb-2xl">
    <div class="bg-indigo-600 rounded-[40px] p-2xl overflow-hidden relative text-center">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
        <div class="absolute -top-1/2 -left-1/4 w-full h-full bg-white/10 blur-[120px] rounded-full"></div>
        <div class="relative z-10 space-y-8">
            <h2 class="font-display-xl text-white text-5xl md:text-display-xl">Ready to Architect Your Future?</h2>
            <p class="text-white/80 text-body-lg max-w-2xl mx-auto">Join the world's most innovative companies and start building software that scales infinitely.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-white text-indigo-600 px-10 py-5 rounded-2xl font-black text-lg hover:scale-105 transition-transform">Schedule a Strategy Call</button>
                <button class="bg-indigo-700/50 backdrop-blur-sm text-white border border-white/30 px-10 py-5 rounded-2xl font-black text-lg hover:bg-indigo-700 transition-colors">Review Case Studies</button>
            </div>
        </div>
    </div>
</section>


@endsection

@push('javascript')

<script>
    const carousel = document.getElementById('hero-carousel');
    const dots = [document.getElementById('dot-0'), document.getElementById('dot-1'), document.getElementById('dot-2')];
    let currentSlide = 0;

    function updateDots(index) {
        dots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('bg-white');
                dot.classList.remove('bg-white/30');
            } else {
                dot.classList.remove('bg-white');
                dot.classList.add('bg-white/30');
            }
        });
    }

    function scrollToSlide(index) {
        currentSlide = index;
        const slideWidth = carousel.clientWidth;
        carousel.scrollTo({
            left: slideWidth * index,
            behavior: 'smooth'
        });
        updateDots(index);
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % 3;
        scrollToSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + 3) % 3;
        scrollToSlide(currentSlide);
    }

    carousel.addEventListener('scroll', () => {
        const index = Math.round(carousel.scrollLeft / carousel.clientWidth);
        if (index !== currentSlide) {
            currentSlide = index;
            updateDots(index);
        }
    });

    // Auto-advance
    setInterval(nextSlide, 8000);
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    let token = $('meta[name="csrf-token"]').attr('content');



    $(function() {
        //$('#exampleModalToggle').modal('toggle');

        $(".Enviarconsulta").on('click', function() {
            var nombre = $("#nombre").val();
            var telefono = $("#telefono").val();
            var email = $("#email").val();
            var servicio = $("#servicio").val();
            var mensaje = $("#mensaje").val();
            if (nombre == '') {
                Swal.fire({
                    icon: 'warning',
                    text: "Tienes que ingresar tu nombre",
                });
                return false;
            }
            if (telefono == '') {
                Swal.fire({
                    icon: 'warning',
                    text: "Tienes que ingresar un número de contacto",
                });
                return false;
            }
            if (email == '') {
                Swal.fire({
                    icon: 'warning',
                    text: "Tienes que ingresar una correo de contacto",
                });
                return false;
            }
            if (servicio == '') {
                Swal.fire({
                    icon: 'warning',
                    text: "Ingresa el servicio en la cual estas interesado",
                });
                return false;
            }
            if (mensaje == '') {
                Swal.fire({
                    icon: 'warning',
                    text: "Tienes que ingresar un mensaje",
                });
                return false;
            }
            Swal.fire({
                header: '...',
                title: 'loading...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });

            $.ajax({
                url: "/correo",
                method: "post",
                dataType: 'json',
                data: {
                    _token: token,
                    nombre: nombre,
                    telefono: telefono,
                    email: email,
                    servicio: servicio,
                    mensaje: mensaje,
                },
                success: function(response) {
                    if (response.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'OK',
                            text: response.msg,
                        })
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: response.msg,
                        })
                    }
                    $("#nombre").val('');
                    $("#telefono").val('');
                    $("#email").val('');
                    $("#servicio").val('');
                    $("#mensaje").val('');
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...!!',
                        text: 'Algo salió mal, Inténtalo más tarde!',
                    })
                }
            });
        });
    })
</script>
@endpush