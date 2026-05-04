@extends('layouts.app')

@section('content')
<div class="pt-16 pb-2xl flex-grow hero-gradient">
    <div class="max-w-screen-2xl mx-auto px-6">
        <!-- Header Section -->
        <div class="mb-2xl">
            <h1 class="font-display-xl text-display-xl mb-md">Tienda virtual</h1>
            <p class="text-on-surface-variant font-body-lg max-w-2xl">Experimente la excelencia técnica con nuestra cuidada selección de soluciones informáticas de alto rendimiento, soluciones de impresión empresarial e infraestructura digital.</p>
        </div>
        <div class="flex flex-col lg:flex-row gap-gutter">
            <!-- Sidebar Filters -->
            <aside class="w-full lg:w-72 shrink-0">
                <div class="glass-surface rounded-xl p-lg sticky top-32">
                    <div class="flex items-center gap-sm mb-lg">
                        <span class="material-symbols-outlined text-primary" data-icon="tune">tune</span>
                        <h2 class="font-headline-md text-headline-md">Filtros</h2>
                    </div>
                    <!-- Category -->
                    <div class="mb-xl">
                        <h3 class="text-label-sm uppercase text-zinc-500 mb-md">Categorias</h3>
                        <div class="space-y-sm">
                            @foreach($categories as $category)
                            <label class="flex items-center gap-md group cursor-pointer">
                                <input name="category" class="rounded border-outline bg-transparent text-primary focus:ring-primary filter-category" type="radio" value="{{ $category->id }}"/>
                                <span class="text-body-md group-hover:text-primary transition-colors">{{ $category->name }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                    <!-- Brand -->
                    <div>
                        <h3 class="text-label-sm uppercase text-zinc-500 mb-md">Marcas</h3>
                        <div class="space-y-sm">
                            @foreach($brands as $brand)
                            <label class="flex items-center gap-md group cursor-pointer">
                                <input name="brand" class="rounded border-outline bg-transparent text-primary focus:ring-primary filter-brand" type="radio" value="{{ $brand->id }}"/>
                                <span class="text-body-md group-hover:text-primary transition-colors">{{ $brand->name }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                    <!-- Price Range -->
                    <div class="mb-xl">
                        <h3 class="text-label-sm uppercase text-zinc-500 mb-md">Rango de Precio</h3>
                        <input id="priceRange" class="w-full accent-primary h-1 bg-white/10 rounded-full appearance-none" type="range" 
                                min="0" max="5000" value="5000"/>
                        <div class="flex justify-between mt-sm text-label-sm text-on-surface-variant">
                            <span>S/. 0</span>
                            <span id="priceValue">S/. 5,000+</span>
                        </div>
                    </div>                    
                </div>
            </aside>
            <!-- Product Grid -->
            <div class="flex-grow">
                <div id="product-container" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-3 gap-gutter">
                    @include('products')
                    
                </div>

                
            </div>
        </div>
    </div>
</div>

@endsection

@push('javascript')

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const container = document.getElementById('product-container');
        const range = document.getElementById('priceRange');
        const priceValue = document.getElementById('priceValue');

        let debounceTimer;

        function fetchProducts(page = 1) {

            const params = new URLSearchParams();

            const brand = document.querySelector('.filter-brand:checked')?.value;
            const category = document.querySelector('.filter-category:checked')?.value;
            const price = range.value;

            if (brand) params.append('brand', brand);
            if (category) params.append('category', category);

            // 🔥 solo enviar precio si no es el max
            if (price && price != range.max) {
                params.append('price', price);
            }

            params.append('page', page);

            container.style.opacity = "0.4";

            fetch(`{{ route('store') }}?${params.toString()}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                method: 'GET',
                credentials: 'same-origin'
            })
            .then(res => res.text())
            .then(html => {
                container.innerHTML = html;
                container.style.opacity = "1";
            })
            .catch(() => {
                container.style.opacity = "1";
            });
        }

        // =========================
        // 🔹 FILTROS (radio)
        // =========================
        document.querySelectorAll('.filter-brand, .filter-category').forEach(el => {
            el.addEventListener('change', () => fetchProducts(1));
        });

        // =========================
        // 🔹 SLIDER PRECIO
        // =========================
        range.addEventListener('input', function () {

            priceValue.textContent = 'S/ ' + this.value;

            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => {
                fetchProducts(1);
            }, 400);
        });

        // =========================
        // 🔹 PAGINACIÓN AJAX
        // =========================
        document.addEventListener('click', function (e) {

            const btn = e.target.closest('.pagination-btn');

            if (!btn) return;

            e.preventDefault();

            const page = btn.dataset.page;

            fetchProducts(page);
        });

    });
</script>

@endpush

