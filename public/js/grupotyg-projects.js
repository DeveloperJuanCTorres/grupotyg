(() => {
  'use strict';
  const root = document.getElementById('tyg-projects');
  if (!root) return;
  const cards = Array.from(root.querySelectorAll('[data-project-card]'));
  const search = root.querySelector('#tygProjectSearch');
  const status = root.querySelector('#tygProjectStatus');
  const loadMore = root.querySelector('#tygLoadMore');
  const noResults = root.querySelector('#tygNoResults');
  const pageSize = 6;
  let limit = pageSize;
  const normalize = value => (value || '').normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLocaleLowerCase('es').trim();
  function render() {
    const query = normalize(search.value);
    const matches = cards.filter(card => normalize(card.dataset.search).includes(query));
    cards.forEach(card => {
      const index = matches.indexOf(card);
      card.hidden = index < 0 || index >= limit;
    });
    noResults.hidden = matches.length !== 0 || cards.length === 0;
    loadMore.hidden = matches.length <= limit;
    status.textContent = cards.length ? `Mostrando ${Math.min(matches.length, limit)} de ${matches.length} proyectos` : '';
  }
  search.addEventListener('input', () => { limit = pageSize; render(); });
  loadMore.addEventListener('click', () => { limit += pageSize; render(); });
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('tyg-visible'); observer.unobserve(entry.target); } });
    }, { threshold: 0.08, rootMargin: '0px 0px 50px 0px' });
    root.querySelectorAll('.tyg-reveal').forEach(el => observer.observe(el));
  } else root.querySelectorAll('.tyg-reveal').forEach(el => el.classList.add('tyg-visible'));
  render();
})();
