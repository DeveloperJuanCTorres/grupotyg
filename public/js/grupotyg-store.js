document.addEventListener('DOMContentLoaded', () => {
    const root = document.querySelector('.tyg-store');
    if (!root) return;
    const container = root.querySelector('#product-container');
    const range = root.querySelector('#priceRange');
    const priceValue = root.querySelector('#priceValue');
    const clearBtn = root.querySelector('#tyg-clear-filters');
    const count = root.querySelector('#tyg-active-count');
    const status = root.querySelector('#tyg-result-status');
    const loading = root.querySelector('#tyg-store-loading');
    const wrap = root.querySelector('#tyg-products-wrap');
    const mobileBtn = root.querySelector('#tyg-mobile-filters');
    const panel = root.querySelector('#tyg-filter-panel');
    if (!container || !range) return;
    let debounceTimer;
    let controller;
    let requestId = 0;
    const money = n => 'S/ ' + Number(n).toLocaleString('es-PE');
    const updateVisualState = () => {
        const brand = root.querySelector('.filter-brand:checked')?.value;
        const category = root.querySelector('.filter-category:checked')?.value;
        const price = range.value;
        const active = Number(Boolean(brand)) + Number(Boolean(category)) + Number(price !== range.max);
        count.hidden = active === 0;
        count.textContent = active + (active === 1 ? ' filtro' : ' filtros');
        priceValue.textContent = price === range.max ? money(price) + '+' : money(price);
    };
    const fetchProducts = async (page = 1) => {
        const params = new URLSearchParams();
        const brand = root.querySelector('.filter-brand:checked')?.value;
        const category = root.querySelector('.filter-category:checked')?.value;
        const price = range.value;
        if (brand) params.append('brand', brand);
        if (category) params.append('category', category);
        if (price && price !== range.max) params.append('price', price);
        params.append('page', page);
        controller?.abort();
        controller = new AbortController();
        const currentId = ++requestId;
        wrap.classList.add('is-loading');
        loading.hidden = false;
        status.textContent = 'Actualizando catálogo...';
        try {
            const response = await fetch(`${root.dataset.storeUrl || window.location.pathname}?${params.toString()}`, {
                method: 'GET', credentials: 'same-origin', headers: {'X-Requested-With':'XMLHttpRequest'}, signal: controller.signal
            });
            if (!response.ok) throw new Error('HTTP ' + response.status);
            const html = await response.text();
            if (currentId !== requestId) return;
            container.innerHTML = html;
            status.textContent = 'Catálogo actualizado';
        } catch (error) {
            if (error.name !== 'AbortError' && currentId === requestId) status.textContent = 'No se pudo actualizar. Intenta nuevamente.';
        } finally {
            if (currentId === requestId) {wrap.classList.remove('is-loading');loading.hidden = true;}
        }
    };
    root.querySelectorAll('.filter-brand, .filter-category').forEach(input => input.addEventListener('change', () => {updateVisualState();fetchProducts(1);}));
    range.addEventListener('input', () => {updateVisualState();clearTimeout(debounceTimer);debounceTimer = setTimeout(() => fetchProducts(1),400);});
    clearBtn?.addEventListener('click', () => {
        root.querySelectorAll('.filter-brand, .filter-category').forEach(input => input.checked = input.value === '');
        range.value = range.max;
        clearTimeout(debounceTimer);
        updateVisualState();fetchProducts(1);
    });
    mobileBtn?.addEventListener('click', () => {
        const opened = panel.classList.toggle('is-open');
        mobileBtn.setAttribute('aria-expanded', String(opened));
    });
    document.addEventListener('click', event => {
        const btn = event.target.closest('.pagination-btn');
        if (!btn || !container.contains(btn)) return;
        event.preventDefault();
        const page = btn.dataset.page;
        if (!page) return;
        fetchProducts(page);
        root.querySelector('#catalogo')?.scrollIntoView({behavior:window.matchMedia('(prefers-reduced-motion: reduce)').matches?'auto':'smooth',block:'start'});
    });
    root.dataset.storeUrl = root.dataset.storeUrl || window.location.pathname;
    updateVisualState();
});
