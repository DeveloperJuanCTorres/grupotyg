@if ($paginator->hasPages())
<div class="mt-2xl flex justify-center items-center gap-md">

    {{-- Prev --}}
    @if ($paginator->onFirstPage())
        <span class="w-10 h-10 rounded-lg glass-surface flex items-center justify-center opacity-30">
            <span class="material-symbols-outlined">chevron_left</span>
        </span>
    @else
        <button data-page="{{ $paginator->currentPage() - 1 }}" class="pagination-btn w-10 h-10 rounded-lg glass-surface flex items-center justify-center hover:text-primary transition-colors">
            <span class="material-symbols-outlined">chevron_left</span>
        </button>
    @endif

    {{-- Pages --}}
    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="px-2">{{ $element }}</span>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="w-10 h-10 rounded-lg bg-primary text-on-primary font-bold flex items-center justify-center">
                        {{ $page }}
                    </span>
                @else
                    <button data-page="{{ $page }}" class="pagination-btn w-10 h-10 rounded-lg glass-surface flex items-center justify-center hover:text-primary transition-colors">
                        {{ $page }}
                    </button>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next --}}
    @if ($paginator->hasMorePages())
        <button data-page="{{ $paginator->currentPage() + 1 }}" class="pagination-btn w-10 h-10 rounded-lg glass-surface flex items-center justify-center hover:text-primary transition-colors">
            <span class="material-symbols-outlined">chevron_right</span>
        </button>
    @else
        <span class="w-10 h-10 rounded-lg glass-surface flex items-center justify-center opacity-30">
            <span class="material-symbols-outlined">chevron_right</span>
        </span>
    @endif

</div>
@endif