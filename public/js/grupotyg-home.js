(() => {
  'use strict';
  const root = document.querySelector('.tyg-home');
  if (!root) return;
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const reveals = root.querySelectorAll('[data-reveal]');
  if ('IntersectionObserver' in window && !reducedMotion) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -30px 0px' });
    reveals.forEach(el => observer.observe(el));
  } else reveals.forEach(el => el.classList.add('is-visible'));

  
  if (!reducedMotion && window.matchMedia('(hover: hover)').matches) {
    root.querySelectorAll('.tyg-service-card').forEach(card => {
      card.addEventListener('pointermove', e => {
        const rect = card.getBoundingClientRect();
        card.style.setProperty('--mx', `${e.clientX - rect.left}px`);
        card.style.setProperty('--my', `${e.clientY - rect.top}px`);
      });
    });
  }

  const modal = document.getElementById('tyg-contact-modal');
  const panel = modal?.querySelector('.tyg-modal-panel');
  const form = document.getElementById('tyg-contact-form');
  const status = document.getElementById('tyg-form-status');
  const submit = form?.querySelector('[type=submit]');
  if (!modal || !form || !submit || !status) return;
  let lastFocus = null;
  function openModal(service) {
    lastFocus = document.activeElement;
    if (service) { const select = form.querySelector('[name=servicio]'); if ([...select.options].some(o => o.value === service)) select.value = service; }
    modal.classList.add('is-open'); modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('tyg-modal-lock');
    panel.focus();
  }
  function closeModal() {
    modal.classList.remove('is-open'); modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('tyg-modal-lock');
    if (lastFocus?.focus) lastFocus.focus();
  }
  document.querySelectorAll('[data-open-contact]').forEach(el => el.addEventListener('click', () => openModal()));
  document.querySelectorAll('[data-service]').forEach(el => el.addEventListener('click', () => openModal(el.dataset.service)));
  modal.querySelectorAll('[data-close-contact]').forEach(el => el.addEventListener('click', closeModal));
  modal.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeModal();
    if (e.key !== 'Tab') return;
    const focusable = [...modal.querySelectorAll('button:not(:disabled),input:not(:disabled),select:not(:disabled),textarea:not(:disabled),a[href]')].filter(el => el.getClientRects().length);
    if (!focusable.length) return;
    if (e.shiftKey && document.activeElement === focusable[0]) { e.preventDefault(); focusable.at(-1).focus(); }
    else if (!e.shiftKey && document.activeElement === focusable.at(-1)) { e.preventDefault(); focusable[0].focus(); }
  });
  form.addEventListener('submit', async e => {
    e.preventDefault();
    if (!form.reportValidity()) return;
    const label = submit.textContent;
    submit.disabled = true; submit.textContent = 'Enviando...'; status.textContent = ''; status.classList.remove('is-success');
    try {
      const response = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }, credentials: 'same-origin' });
      const result = await response.json();
      if (!response.ok || !result.status) throw new Error(result.msg || (response.status === 422 ? 'Revisa los datos del formulario.' : 'No se pudo enviar la solicitud.'));
      status.textContent = result.msg || 'Solicitud enviada correctamente.'; status.classList.add('is-success');
      form.reset();
      // Keep confirmation visible; user can close the modal when ready.
    } catch (error) { status.textContent = error.message || 'Error de conexión. Inténtalo nuevamente.'; }
    finally { submit.disabled = false; submit.textContent = label; }
  });
})();
