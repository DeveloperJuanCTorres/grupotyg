@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden hero-pattern min-h-[819px] flex items-center px-6">
    <div class="absolute inset-0 bg-gradient-to-b from-primary/5 via-transparent to-surface pointer-events-none"></div>
    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-2xl items-center relative z-10">
        <div class="space-y-xl">
            <span class="inline-block px-md py-xs rounded-full bg-primary/10 border border-primary/20 text-primary font-label-sm uppercase tracking-widest">Sistema SASS</span>
            <h1 class="font-display-xl text-display-xl text-white leading-none">Facturación Electrónica Pro</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                Potencie su PYME con un sistema de facturación electrónica de alto rendimiento. Logre un cumplimiento normativo impecable, automatice los flujos de trabajo y haga crecer su negocio con seguridad de nivel institucional.
            </p>
            <div class="flex flex-wrap gap-md pt-md">                
                <button class="glass-card text-white px-xl py-md rounded-xl font-headline-md font-bold hover:bg-white/10 transition-colors">
                    Ver demo
                </button>
            </div>
        </div>
        <div class="hidden lg:block relative">
            <div class="absolute -inset-4 bg-primary/20 blur-[100px] rounded-full"></div>
            <img class="relative z-10 w-full rounded-2xl border border-white/10 shadow-2xl" 
                data-alt="futuristic digital dashboard showing financial metrics and cloud architecture nodes with blue and violet neon lights" 
                src="{{asset ('img/fac.png')}}" />
        </div>
    </div>
</section>
<!-- Overview Section -->
<!-- <section class="py-3xl px-6 bg-surface-container-lowest">
    <div class="max-w-5xl mx-auto text-center space-y-lg">
        <h2 class="font-headline-lg text-headline-lg text-white">¡Estamos listos para su negocio!</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
            Facturación Electrónica Pro no es solo una herramienta de facturación, sino una infraestructura esencial para la pyme moderna. Acortamos la brecha entre las complejas regulaciones gubernamentales y sus operaciones comerciales diarias. Gracias a una arquitectura en la nube de alta disponibilidad, garantizamos que sus datos estén siempre accesibles, sus transacciones sean instantáneas y su cumplimiento normativo sea automático.
        </p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-lg pt-xl">
            <div class="text-center">
                <div class="text-display-xl font-display-xl text-primary mb-xs">99.9</div>
                <div class="text-label-sm font-label-sm text-outline-variant uppercase tracking-widest">Tiempo de actividad %</div>
            </div>
            <div class="text-center">
                <div class="text-display-xl font-display-xl text-primary mb-xs">50k+</div>
                <div class="text-label-sm font-label-sm text-outline-variant uppercase tracking-widest">Facturas Mensuales</div>
            </div>
            <div class="text-center">
                <div class="text-display-xl font-display-xl text-primary mb-xs">0.2s</div>
                <div class="text-label-sm font-label-sm text-outline-variant uppercase tracking-widest">Latencia</div>
            </div>
            <div class="text-center">
                <div class="text-display-xl font-display-xl text-primary mb-xs">100%</div>
                <div class="text-label-sm font-label-sm text-outline-variant uppercase tracking-widest">Cumplimiento Tributario</div>
            </div>
        </div>
    </div>
</section> -->
<!-- Key Features Grid -->
<section class="py-3xl px-6 bg-surface-container-lowest">
    <div class="max-w-7xl mx-auto">
        <div class="mb-2xl">
            <h2 class="font-headline-lg text-headline-lg text-white mb-md">¡Estamos listos para su negocio!</h2>
            <p class="font-body-md text-on-surface-variant max-w-2xl">Si necesita un software de gestión empresarial, ha venido al lugar correcto.</p>
            <p class="font-body-md text-on-surface-variant max-w-2xl">¡Tenemos un diseño modular limpio y moderno que seguramente se adaptará a su negocio!</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
            <!-- Feature 1 -->
            <div class="glass-card p-xl rounded-2xl group hover:border-primary/50 transition-all duration-300">
                <i class="fas fa-store-alt fa-lg text-primary text-4xl mb-lg"></i>
                <h3 class="font-headline-md text-white mb-md">Tienda departamental</h3>
                <p class="text-on-surface-variant font-body-md">No busque más, nuestro software integral para tiendas departamentales. Ya sea que necesite vender ropa, zapatos, bolsos o cualquier otro tipo de artículo, nuestro software lo tiene cubierto. Además, nuestra interfaz fácil de usar facilita comenzar a vender de inmediato. Entonces, ¿por qué esperar? ¡Empiece hoy!</p>
            </div>
            <!-- Feature 2 -->
            <div class="glass-card p-xl rounded-2xl group hover:border-primary/50 transition-all duration-300">
                <i class="fas fa-store fa-lg text-primary text-4xl mb-lg"></i>
                <h3 class="font-headline-md text-white mb-md">Venta al por mayor al por menor</h3>
                <p class="text-on-surface-variant font-body-md">Un conjunto completo de funciones para gestionar tiendas minoristas y mayoristas. Establezca múltiples precios para diferentes segmentos de clientes o diferentes ubicaciones comerciales.</p>
            </div>
            <!-- Feature 3 -->
            <div class="glass-card p-xl rounded-2xl group hover:border-primary/50 transition-all duration-300">
                <i class="fas fa-notes-medical fa-lg text-primary text-4xl mb-lg"></i>
                <h3 class="font-headline-md text-white mb-md">Farmacias / Boticas</h3>
                <p class="text-on-surface-variant font-body-md">Nuestro software es perfecto para cualquier empresa farmacéutica. Puede establecer fechas de vencimiento de productos y números de lote, y venderlos en diferentes unidades de medida. Deje de vender artículos caducados y por caducar a los clientes. Consulte los informes detallados sobre el vencimiento de existencias por número de lote</p>
            </div>
            <!-- Feature 4 -->
            <div class="glass-card p-xl rounded-2xl group hover:border-primary/50 transition-all duration-300">
                <i class="fas fa-prescription-bottle fa-lg text-primary text-4xl mb-lg"></i>
                <h3 class="font-headline-md text-white mb-md">Licorería</h3>
                <p class="text-on-surface-variant font-body-md">Fácil de usar para todas las licorerías. Vender en ml de simple vender la botella, puedes gestionarlos fácilmente.</p>
            </div>
            <!-- Feature 5 -->
            <div class="glass-card p-xl rounded-2xl group hover:border-primary/50 transition-all duration-300">
                <i class="fas fa-mobile-alt fa-lg text-primary text-4xl mb-lg"></i>
                <h3 class="font-headline-md text-white mb-md">Móviles y Electrónica</h3>
                <p class="text-on-surface-variant font-body-md">Registre el número de serie del inventario, venda artículos con un número de serie particular</p>
            </div>
            <!-- Feature 6 -->
            <div class="glass-card p-xl rounded-2xl group hover:border-primary/50 transition-all duration-300">
                <i class="fas fa-wrench fa-lg text-primary text-4xl mb-lg"></i>
                <h3 class="font-headline-md text-white mb-md">Tienda de reparacion</h3>
                <p class="text-on-surface-variant font-body-md">Un conjunto completo de funciones para gestionar el negocio de reparaciones, crear hojas de trabajo, asignar hojas de trabajo al técnico, estado de reparación y convertir hojas de trabajo en facturas. Autoenlace para que los clientes verifiquen el progreso de la reparación</p>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section -->
<section class="py-3xl px-6 bg-surface-container overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-2xl space-y-md">
            <h2 class="font-headline-lg text-headline-lg text-white">Nuestros planes</h2>
            <p class="font-body-md text-on-surface-variant max-w-2xl mx-auto">Automatiza la gestión de tu negocio a muy bajo costo</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-lg items-stretch">
            <!-- Plan Básico -->
            <div class="glass-card bg-surface-container-lowest p-xl rounded-3xl flex flex-col border-white/5 hover:border-white/20 transition-all duration-300">
                <div class="mb-lg">
                    <h3 class="font-headline-md text-white mb-xs">Plan Básico</h3>
                    <div class="flex items-baseline gap-xs">
                        <span class="text-3xl font-display-xl text-white">30</span>
                        <span class="text-on-surface-variant font-label-sm uppercase tracking-widest">soles / mes</span>
                    </div>
                </div>
                <ul class="space-y-md mb-2xl flex-grow">
                    <li class="flex gap-md items-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary text-lg">receipt_long</span>
                        <span class="font-body-md">100 receipts/month</span>
                    </li>
                    <li class="flex gap-md items-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary text-lg">support_agent</span>
                        <span class="font-body-md">Included Support</span>
                    </li>
                    <li class="flex gap-md items-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary text-lg">group</span>
                        <span class="font-body-md">10 Users</span>
                    </li>
                    <li class="flex gap-md items-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary text-lg">warehouse</span>
                        <span class="font-body-md">2 Warehouses</span>
                    </li>
                </ul>
                <button class="w-full py-md rounded-xl border border-white/20 text-white font-headline-md font-bold hover:bg-white/5 transition-all">
                    Get Started
                </button>
            </div>
            <!-- Plan Pro -->
            <div class="glass-card bg-surface-container-lowest p-xl rounded-3xl flex flex-col border-primary/40 relative shadow-[0_0_40px_rgba(192,193,255,0.1)] scale-105 z-10">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary px-md py-xs rounded-full">
                    <span class="text-on-primary font-label-sm uppercase tracking-widest">Recommended</span>
                </div>
                <div class="mb-lg">
                    <h3 class="font-headline-md text-white mb-xs">Plan Pro</h3>
                    <div class="flex items-baseline gap-xs">
                        <span class="text-3xl font-display-xl text-primary">100</span>
                        <span class="text-on-surface-variant font-label-sm uppercase tracking-widest">soles / mes</span>
                    </div>
                </div>
                <ul class="space-y-md mb-2xl flex-grow">
                    <li class="flex gap-md items-center text-white">
                        <span class="material-symbols-outlined text-primary text-lg">receipt_long</span>
                        <span class="font-body-md">500 receipts/month</span>
                    </li>
                    <li class="flex gap-md items-center text-white">
                        <span class="material-symbols-outlined text-primary text-lg">verified</span>
                        <span class="font-body-md">Priority Support</span>
                    </li>
                    <li class="flex gap-md items-center text-white">
                        <span class="material-symbols-outlined text-primary text-lg">group</span>
                        <span class="font-body-md">50 Users</span>
                    </li>
                    <li class="flex gap-md items-center text-white">
                        <span class="material-symbols-outlined text-primary text-lg">warehouse</span>
                        <span class="font-body-md">5 Warehouses</span>
                    </li>
                    <li class="flex gap-md items-center text-white">
                        <span class="material-symbols-outlined text-primary text-lg">monitoring</span>
                        <span class="font-body-md">Advanced Analytics</span>
                    </li>
                </ul>
                <button class="w-full py-md rounded-xl bg-primary text-on-primary font-headline-md font-bold hover:shadow-[0_0_25px_rgba(192,193,255,0.5)] transition-all">
                    Get Started
                </button>
            </div>
            <!-- Plan Enterprise -->
            <div class="glass-card bg-surface-container-lowest p-xl rounded-3xl flex flex-col border-white/5 hover:border-white/20 transition-all duration-300">
                <div class="mb-lg">
                    <h3 class="font-headline-md text-white mb-xs">Plan Enterprise</h3>
                    <div class="flex items-baseline gap-xs">
                        <span class="text-3xl font-display-xl text-white">150</span>
                        <span class="text-on-surface-variant font-label-sm uppercase tracking-widest">soles / mes</span>
                    </div>
                </div>
                <ul class="space-y-md mb-2xl flex-grow">
                    <li class="flex gap-md items-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary text-lg">all_inclusive</span>
                        <span class="font-body-md">Unlimited receipts</span>
                    </li>
                    <li class="flex gap-md items-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary text-lg">headset_mic</span>
                        <span class="font-body-md">24/7 Dedicated Support</span>
                    </li>
                    <li class="flex gap-md items-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary text-lg">groups_3</span>
                        <span class="font-body-md">Unlimited Users</span>
                    </li>
                    <li class="flex gap-md items-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary text-lg">domain</span>
                        <span class="font-body-md">Unlimited Warehouses</span>
                    </li>
                    <li class="flex gap-md items-center text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary text-lg">integration_instructions</span>
                        <span class="font-body-md">Custom Integrations</span>
                    </li>
                </ul>
                <button class="w-full py-md rounded-xl border border-white/20 text-white font-headline-md font-bold hover:bg-white/5 transition-all">
                    Get Started
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Benefits Section -->
<section class="py-3xl px-6 bg-surface-container-lowest">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-2xl">
        <div class="flex-1 space-y-xl">
            <h2 class="font-headline-lg text-headline-lg text-white">Diseñado para la eficiencia</h2>
            <div class="space-y-lg">
                <div class="flex gap-md">
                    <div class="mt-1 w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-on-secondary-container text-sm">bolt</span>
                    </div>
                    <div>
                        <h4 class="font-headline-md text-white text-lg">Mayor productividad</h4>
                        <p class="text-on-surface-variant">Reduzca el tiempo de facturación manual en un 85 % mediante la automatización y el uso de plantillas inteligentes.</p>
                    </div>
                </div>
                <div class="flex gap-md">
                    <div class="mt-1 w-8 h-8 rounded-full bg-tertiary-container flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-on-tertiary-container text-sm">shield</span>
                    </div>
                    <div>
                        <h4 class="font-headline-md text-white text-lg">Seguridad Empresarial</h4>
                        <p class="text-on-surface-variant">Sus datos están protegidos por encriptación de grado militar AES-256 y autenticación de múltiples factores.</p>
                    </div>
                </div>
                <div class="flex gap-md">
                    <div class="mt-1 w-8 h-8 rounded-full bg-primary-container flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-on-primary-container text-sm">savings</span>
                    </div>
                    <div>
                        <h4 class="font-headline-md text-white text-lg">Optimización de Costos</h4>
                        <p class="text-on-surface-variant">Elimine los costos de papel, correo y archivo manual mientras reduce el riesgo de sanciones fiscales.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 w-full">
            <div class="relative p-gutter">
                <div class="absolute inset-0 bg-indigo-500/10 rounded-[40px] blur-3xl"></div>

                <div class="relative glass-card aspect-video rounded-[32px] overflow-hidden">
                    <iframe 
                        class="w-full h-full rounded-[32px]"
                        src="https://www.youtube.com/embed/qg36PAl5K5k?rel=0"
                        title="Video de facturación electrónica"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="py-3xl px-6 relative overflow-hidden">
    <div class="max-w-4xl mx-auto relative z-10">
        <div class="glass-card p-2xl rounded-3xl text-center space-y-xl border-primary/20">
            <span class="material-symbols-outlined text-primary text-6xl opacity-50">format_quote</span>
            <h3 class="font-headline-lg text-white italic font-light leading-snug">
                "Since implementing Technova's invoicing pro, our accounting department has cut reporting cycles by two weeks. The compliance is bulletproof and the interface is incredibly intuitive."
            </h3>
            <div class="flex flex-col items-center gap-sm">
                <div class="w-16 h-16 rounded-full border-2 border-primary p-xs">
                    <img class="w-full h-full object-cover rounded-full" data-alt="professional businessman headshot with clean haircut and blazer against neutral dark background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDQRLqur-dSKM4UmpHOSsT6qym5dmtO-c38cj1380I9p43amWRVnGSteES_j3j63glMlJQxhdLU63o9gJDlIbnDpufFObKXJDXF9vQDdToxvU5wPEV4FgYHaqpVqr-meIhT-WJXDaBg1H9R26lv94Mq6oneUb74QBDLYht9IDIBRv0cBYslLMQg0XqfY0W1Yu-BMTAiDIKqKqBTh6Ra5rTOCyQXzJsYLPWR9-_sEcrBh1qck4maOxO8UX8FUJt3KyNCOok12fQhbNt" />
                </div>
                <div>
                    <div class="font-headline-md text-white text-lg">Marcus Sterling</div>
                    <div class="font-label-sm text-outline-variant uppercase tracking-widest">CTO, Apex Logistics</div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
