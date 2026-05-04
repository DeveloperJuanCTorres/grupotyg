    @foreach($products as $product)
    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
            @php
                $imagenes = json_decode($product->images, true);
                $product->image = $imagenes[0] ?? null;
            @endphp
            <img alt="NovaBook Ultra" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Sleek silver high-end laptop on a minimalist desk with blue neon accents and cinematic moody lighting" 
                    src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300' }}" />
            <span class="absolute top-sm right-sm bg-primary/20 backdrop-blur-md text-primary text-label-sm px-md py-xs rounded-full border border-primary/30">New</span>
        </div>
        <div class="p-lg">
            <p class="text-zinc-500 text-label-sm mb-xs">{{ $product->category->name ?? 'Sin categoría' }}</p>
            <h3 class="font-headline-md text-headline-md mb-sm truncate">{{ $product->name }}</h3>
            <p class="text-primary font-bold text-headline-md mb-lg">S/ {{ $product->price_final }}</p>
            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                <span class="text-label-sm font-bold uppercase">Comprar</span>
            </button>
        </div>
    </div>
    @endforeach

<div class="col-span-full mt-6">
    {{ $products->links('pagination::tailwind') }}
</div>