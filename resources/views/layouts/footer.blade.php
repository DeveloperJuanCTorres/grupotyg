<footer class="bg-zinc-950 w-full border-t border-zinc-800 mt-auto">
    <div class="max-w-7xl mx-auto px-8 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 uppercase tracking-widest text-xs">
        <div class="space-y-6">
            <div class="flex items-center space-x-2">
                <img src="{{asset('storage/' . $company->logo)}}" class="object-contain" width="70" alt="">
                <span class="text-2xl font-bold text-primary" style="text-transform: none !important;">
                    Grupo TyG
                </span>
            </div>
            <p class="text-zinc-500 normal-case tracking-normal">P{{$company->descripcion}}</p>
            <div class="flex space-x-4">
                <a href="{{$company->facebook_link}}" target="_blank" class="text-zinc-500 hover:text-indigo-400 transition-colors">
                    <i class="fa-brands fa-facebook-f text-xl"></i>
                </a>

                <a href="{{$company->instagram_link}}" target="_blank" class="text-zinc-500 hover:text-indigo-400 transition-colors">
                    <i class="fa-brands fa-instagram text-xl"></i>
                </a>

                <a href="{{$company->tiktok_link}}" target="_blank" class="text-zinc-500 hover:text-indigo-400 transition-colors">
                    <i class="fa-brands fa-tiktok text-xl"></i>
                </a>

                <a href="{{$company->youtube_link}}" target="_blank" class="text-zinc-500 hover:text-indigo-400 transition-colors">
                    <i class="fa-brands fa-youtube text-xl"></i>
                </a>
            </div>
        </div>
        <div class="space-y-6">
            <h4 class="text-primary font-bold">Soluciones</h4>
            <nav class="flex flex-col space-y-4 text-zinc-500">
                <a class="hover:text-indigo-400 transition-colors" href="#">Facturación electrónica</a>
                <a class="hover:text-indigo-400 transition-colors" href="#">Desarrollo web</a>
                <a class="hover:text-indigo-400 transition-colors" href="#">Business Intelligence</a>
                <a class="hover:text-indigo-400 transition-colors" href="#">E-Commerce</a>
                <a class="hover:text-indigo-400 transition-colors" href="#">Servicios de TI</a>
            </nav>
        </div>
        <div class="space-y-6">
            <h4 class="text-primary font-bold">Recursos</h4>
            <nav class="flex flex-col space-y-4 text-zinc-500">
                <a class="hover:text-indigo-400 transition-colors" href="{{ route('index') }}">Inicio</a>
                <a class="hover:text-indigo-400 transition-colors" href="{{ route('store') }}">Tienda</a>
                <a class="hover:text-indigo-400 transition-colors" href="{{ route('service') }}">Servicios</a>
                <a class="hover:text-indigo-400 transition-colors" href="{{ route('project') }}">Proyecto</a>
            </nav>
        </div>
        <div class="space-y-6">
            <h4 class="text-primary font-bold">Company</h4>
            <nav class="flex flex-col space-y-4 text-zinc-500">
                <a class="hover:text-indigo-400 transition-colors" href="#">Privacy</a>
                <a class="hover:text-indigo-400 transition-colors" href="#">Terms</a>
                <a class="hover:text-indigo-400 transition-colors" href="#">Careers</a>
                <a class="hover:text-indigo-400 transition-colors" href="#">Ethics</a>
            </nav>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-8 py-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-zinc-500 font-space-grotesk uppercase tracking-widest text-[10px]">
        <div>© 2026 GRUPO TYG INGENIEROS. TODOS LOS DERECHOS RESERVADOS.</div>
        <!-- <div class="flex gap-8">
            <a class="hover:text-white transition-colors" href="#">Sitemap</a>
            <a class="hover:text-white transition-colors" href="#">Legal</a>
            <a class="hover:text-white transition-colors" href="#">Security</a>
        </div> -->
    </div>
</footer>