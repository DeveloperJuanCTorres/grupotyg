<header class="fixed top-0 w-full z-50 bg-zinc-950/80 backdrop-blur-[20px] border-b border-white/10 shadow-[0_8px_32px_rgba(0,0,0,0.3)]">

    <div class="flex justify-between items-center px-6 py-4 max-w-screen-2xl mx-auto">

        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="{{asset('img/iso-02.png')}}" class="w-10 h-10 object-contain" alt="">
            <span class="text-xl font-bold text-white">
                Grupo <span class="text-primary">TyG</span>
            </span>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center space-x-8">

            <a href="/" 
               class="{{ request()->is('/') ? 'text-indigo-400 border-b-2 border-indigo-500 pb-1' : 'text-zinc-400 hover:text-white' }}">
               Inicio
            </a>

            <a href="{{ route('store') }}" 
               class="{{ request()->routeIs('store') ? 'text-indigo-400 border-b-2 border-indigo-500 pb-1' : 'text-zinc-400 hover:text-white' }}">
               Tienda
            </a>

            <a href="{{ route('service') }}" 
               class="{{ request()->routeIs('service') ? 'text-indigo-400 border-b-2 border-indigo-500 pb-1' : 'text-zinc-400 hover:text-white' }}">
               Servicios
            </a>

            <a href="{{ route('contact') }}" 
               class="{{ request()->routeIs('contact') ? 'text-indigo-400 border-b-2 border-indigo-500 pb-1' : 'text-zinc-400 hover:text-white' }}">
               Contacto
            </a>

        </nav>

        <!-- Right -->
        <div class="flex items-center space-x-4">

            <!-- Desktop search -->
            <div class="hidden lg:flex items-center bg-white/5 rounded-full px-4 py-2 border border-white/10">
                <span class="material-symbols-outlined text-zinc-400 text-sm mr-2">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm text-white placeholder-zinc-500 w-48" placeholder="Search tech solutions..." type="text" />
            </div>

            <!-- Icons -->
            <span class="material-symbols-outlined text-zinc-400 hover:text-white cursor-pointer">shopping_cart</span>
            <span class="material-symbols-outlined text-zinc-400 hover:text-white cursor-pointer">account_circle</span>
            <button class="bg-indigo-500 hover:bg-indigo-600 text-white px-5 py-2 rounded-lg font-bold transition-all scale-95 active:scale-90">Comenzar</button>

            <!-- Mobile button -->
            <button id="menuBtn" class="md:hidden text-white">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden px-6 pb-4">

        <a href="/" class="block py-2 text-white">Inicio</a>
        <a href="{{ route('store') }}" class="block py-2 text-white">Tienda</a>
        <a href="{{ route('service') }}" class="block py-2 text-white">Servicios</a>
        <a href="{{ route('contact') }}" class="block py-2 text-white">Contacto</a>

    </div>
</header>

<script>
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>



