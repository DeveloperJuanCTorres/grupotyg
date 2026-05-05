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
                    <button id="openModal" class="bg-primary text-on-primary px-12 py-5 rounded-lg font-bold text-lg hover:scale-105 transition-all">
                        Iniciar proyecto
                    </button>
                    <a href="https://wa.me/51972378043?text=Hola,%20quiero%20información" target="_blank" class="border border-white/10 hover:bg-white/5 text-white px-12 py-5 rounded-lg font-bold text-lg transition-all">
                        HABLAR CON UN INGENIERO
                    </a>
                </div>
            </div>
        </div>
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
    
</div>

<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-black/70 backdrop-blur-sm flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 z-50">
    
    <div class="bg-[#0f172a] w-full max-w-2xl rounded-3xl p-10 relative border border-white/10 shadow-2xl scale-95 transition-all duration-300" id="modalContent">
        
        <!-- Close -->
        <button id="closeModal" class="absolute top-4 right-4 text-white/50 hover:text-white text-2xl">&times;</button>

        <h2 class="text-3xl font-bold text-white mb-2">Inicia tu proyecto 🚀</h2>
        <p class="text-white/60 mb-8">Cuéntanos lo que necesitas y te contactamos.</p>

        <form id="formContacto" class="space-y-6">
            @csrf

            <div class="grid md:grid-cols-2 gap-6">
                <input type="text" name="nombre" placeholder="Nombre"
                    class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary">

                <input type="email" name="email" placeholder="Correo"
                    class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary">
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <input type="text" name="telefono" placeholder="Teléfono"
                    class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary">

                <select name="servicio"
                    class="w-full bg-[#0f172a] border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary">
                    <option value="">Selecciona un servicio</option>
                    <option value="Facturacion Electronica">Facturación Electrónica</option>
                    <option value="Desarrollo Web">Desarrollo Web</option>
                    <option value="Ecommerce">Ecommerce</option>
                    <option value="Business Intelligence">Business Intelligence</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <textarea name="mensaje" rows="4" placeholder="Describe tu proyecto..."
                class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary"></textarea>

            <button type="submit"
                class="w-full bg-primary text-on-primary py-4 rounded-lg font-bold text-lg hover:scale-105 transition-all">
                Enviar solicitud
            </button>
        </form>
    </div>
</div>



@endsection

@push('javascript')
<script>
    const modal = document.getElementById('modal');
    const modalContent = document.getElementById('modalContent');
    const openBtn = document.getElementById('openModal');
    const closeBtn = document.getElementById('closeModal');

    openBtn.addEventListener('click', () => {
        modal.classList.remove('opacity-0', 'pointer-events-none');
        modalContent.classList.remove('scale-95');
        modalContent.classList.add('scale-100');
    });

    closeBtn.addEventListener('click', closeModal);

    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });

    function closeModal() {
        modal.classList.add('opacity-0', 'pointer-events-none');
        modalContent.classList.remove('scale-100');
        modalContent.classList.add('scale-95');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const form = document.getElementById('formContacto');
    const submitBtn = form.querySelector('button[type="submit"]');

    // Toast config
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        background: '#0f172a',
        color: '#fff',
        customClass: {
            popup: 'rounded-xl border border-white/10 shadow-2xl'
        }
    });

    function setLoading(state) {
        if (state) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <span class="flex items-center justify-center gap-2">
                    <svg class="animate-spin h-5 w-5" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke="white" stroke-width="4" fill="none" opacity="0.2"/>
                        <path d="M22 12a10 10 0 0 1-10 10" stroke="white" stroke-width="4"/>
                    </svg>
                    Enviando...
                </span>
            `;
        } else {
            submitBtn.disabled = false;
            submitBtn.innerHTML = "Enviar solicitud";
        }
    }

    function validateForm(data) {
        const nombre = data.get('nombre')?.trim();
        const email = data.get('email')?.trim();
        const telefono = data.get('telefono')?.trim();
        const servicio = data.get('servicio');
        const mensaje = data.get('mensaje')?.trim();

        if (!nombre) return "El nombre es obligatorio";
        if (!email) return "El correo es obligatorio";

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) return "Correo inválido";

        if (!telefono) return "El teléfono es obligatorio";
        if (!servicio) return "Selecciona un servicio";
        if (!mensaje) return "El mensaje es obligatorio";

        return null;
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const data = new FormData(form);

        const error = validateForm(data);
        if (error) {
            Toast.fire({
                icon: 'error',
                title: error
            });
            return;
        }

        setLoading(true);

        fetch("{{ route('correo') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: data
        })
        .then(res => res.json())
        .then(res => {
            if (res.status) {
                Toast.fire({
                    icon: 'success',
                    title: 'Solicitud enviada correctamente 🚀'
                });

                form.reset();
                closeModal();
            } else {
                Toast.fire({
                    icon: 'error',
                    title: res.msg || 'Error al enviar'
                });
            }
        })
        .catch(() => {
            Toast.fire({
                icon: 'error',
                title: 'Error de conexión'
            });
        })
        .finally(() => {
            setLoading(false);
        });
    });
</script>

@endpush
