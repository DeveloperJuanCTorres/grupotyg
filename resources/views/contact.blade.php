@extends('layouts.app')

@section('content')

<div class="flex-grow pt-32 pb-2xl px-6 md:px-margin max-w-screen-2xl mx-auto w-full">
    <!-- Hero Section -->
    <header class="mb-2xl">
        <h1 class="font-display-xl text-display-xl text-white mb-md">Conéctate con el futuro.</h1>
        <p class="text-body-lg text-on-surface-variant max-w-2xl font-body-lg">
            Tanto si tiene preguntas sobre nuestro sistema de facturación electrónica como si desea hablar sobre soluciones empresariales, nuestro equipo técnico está listo para ayudarle.
        </p>
    </header>
    <!-- Split Layout Design -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2xl">
        <!-- Contact Form Side -->
        <div class="glass-surface p-lg md:p-2xl rounded-xl shadow-2xl">
            <h2 class="font-headline-lg text-headline-lg text-white mb-lg">Envíanos un mensaje</h2>
            <form class="space-y-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                    <div class="flex flex-col gap-xs">
                        <label class="text-label-sm text-on-surface-variant uppercase">Nombre completo</label>
                        <input id="nombre" class="bg-surface-container-low border rounded-lg p-md text-white" placeholder="John Doe" type="text" />
                    </div>

                    <div class="flex flex-col gap-xs">
                        <label class="text-label-sm text-on-surface-variant uppercase">Email</label>
                        <input id="email" class="bg-surface-container-low border rounded-lg p-md text-white" placeholder="correo@email.com" type="email" />
                    </div>
                </div>

                <div class="flex flex-col gap-xs">
                    <label class="text-label-sm text-on-surface-variant uppercase">Teléfono</label>
                    <input id="telefono" class="bg-surface-container-low border rounded-lg p-md text-white" placeholder="+51 999 999 999" type="tel" />
                </div>

                <div class="flex flex-col gap-xs">
                    <label class="text-label-sm text-on-surface-variant uppercase">Servicio</label>
                    <input id="servicio" class="bg-surface-container-low border rounded-lg p-md text-white" placeholder="Ej: Página web, sistema, ecommerce..." type="text" />
                </div>

                <div class="flex flex-col gap-xs">
                    <label class="text-label-sm text-on-surface-variant uppercase">Mensaje</label>
                    <textarea id="mensaje" class="bg-surface-container-low border rounded-lg p-md text-white resize-none" rows="5"></textarea>
                </div>

                <button type="button"
                    class="Enviarconsulta w-full bg-gradient-to-r from-primary to-secondary text-white py-md rounded-lg">
                    Enviar Consulta
                </button>

            </form>
        </div>
        <!-- Office Details & Map Side -->
        <div class="flex flex-col gap-lg">
            <!-- Details Card -->
            <div class="glass-surface p-lg md:p-xl rounded-xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                    <div class="flex flex-col gap-sm">
                        <div class="flex items-center gap-sm text-secondary">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="font-label-sm uppercase tracking-widest">Ubicados en</span>
                        </div>
                        <p class="text-body-md text-white font-headline-md">
                            {{ $company->direccion_1 }}<br />
                            {{ $company->direccion_2 }}<br />
                            {{ $company->direccion_3 }}
                        </p>
                    </div>
                    <div class="flex flex-col gap-sm">
                        <div class="flex items-center gap-sm text-secondary">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="font-label-sm uppercase tracking-widest">Consultas Generales</span>
                        </div>
                        <p class="text-body-md text-white font-headline-md">
                            {{$company->email}}<br />
                            {{$company->telefono_1}} <br>
                            {{$company->telefono_2}}
                        </p>
                    </div>
                </div>
                <div class="mt-lg pt-lg border-t border-white/5 grid grid-cols-2 gap-lg">
                    <div>
                        <span class="text-label-sm text-on-surface-variant block mb-xs">SOPORTE</span>
                        <p class="text-white">Lun — Vier: 24/5</p>
                    </div>
                    <div>
                        <span class="text-label-sm text-on-surface-variant block mb-xs">VENTAS</span>
                        <p class="text-white">9AM — 7PM Agente Comercial</p>
                    </div>
                </div>
            </div>
            <!-- Embedded Map Replacement (Visual UI Element) -->
            <div class="relative rounded-xl overflow-hidden glass-surface h-full min-h-[400px] border border-white/10 group">
                <img class="w-full h-full object-cover grayscale opacity-40 group-hover:grayscale-0 group-hover:opacity-60 transition-all duration-700" data-alt="high contrast dark mode architectural map of a modern city center with neon blue and purple accents" data-location="San Francisco" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkKr5Vt8tkpfFLD-oHEVG1mX3_LCKAx2xH2JsnYAUNVGiJzmy8oeawtWJ-U4eFmnDBI1NWl8VNZEnSgX0o2e4E_WV_t_OLDrZQ9ZkWwb0FuTxJpiqEpZUkAS4ZwpsVFd8VcOskjzGQ-2WroBLAastICWv8n-6wgQkpjEZExp4TWK9uAALGuamXUqWekSi6TxTG3SmpyAB4CyBVuJigoaSLQwr3mVJEb0HFfZhY0LKSqp8032I-aWQ9RVl7d6Ox7ZcaS--E2DxlxOU2" />
                <div class="absolute inset-0 bg-gradient-to-t from-surface-dim via-transparent to-transparent"></div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col items-center gap-sm">
                    <div class="relative">
                        <div class="absolute inset-0 bg-primary rounded-full animate-ping opacity-25"></div>
                        <div class="relative bg-primary text-on-primary p-md rounded-full shadow-2xl">
                            <span class="material-symbols-outlined" data-icon="hub">hub</span>
                        </div>
                    </div>
                    <div class="bg-surface-container p-sm px-md rounded-full border border-white/10 shadow-xl backdrop-blur-md">
                        <span class="text-white font-label-sm">TECHNOVA HQ</span>
                    </div>
                </div>
                <div class="absolute bottom-6 right-6">
                    <button class="bg-surface-container-high/80 backdrop-blur-md p-sm rounded-lg border border-white/10 hover:bg-white/10 transition-colors">
                        <span class="material-symbols-outlined text-white" data-icon="open_in_new">open_in_new</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@push('javascript')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    let token = $('meta[name="csrf-token"]').attr('content');

    $(function() {
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