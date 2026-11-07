(() => {
  const modal = document.getElementById('tygServicesModal');
  const form = document.getElementById('tygServicesForm');
  if (!modal || !form) return;
  const message = document.getElementById('tygFormMessage');
  const serviceSelect = document.getElementById('tygServiceSelect');
  const submit = form.querySelector('[type="submit"]');
  let previousFocus = null;
  const open = (service) => {
    previousFocus = document.activeElement;
    if (service && [...serviceSelect.options].some(o => o.value === service)) serviceSelect.value = service;
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    modal.querySelector('.tyg-modal-close').focus();
  };
  const close = () => {
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    previousFocus?.focus?.();
  };
  document.querySelectorAll('[data-tyg-open-modal]').forEach(el => el.addEventListener('click', () => open(el.dataset.tygService)));
  modal.querySelectorAll('[data-tyg-close-modal]').forEach(el => el.addEventListener('click', close));
  document.addEventListener('keydown', e => {
    if (!modal.classList.contains('is-open')) return;
    if (e.key === 'Escape') close();
    if (e.key === 'Tab') {
      const focusable = [...modal.querySelectorAll('button:not([disabled]),input:not([disabled]),select:not([disabled]),textarea:not([disabled])')];
      if (!focusable.length) return;
      const first = focusable[0], last = focusable[focusable.length - 1];
      if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    }
  });
  const observer = 'IntersectionObserver' in window ? new IntersectionObserver(entries => entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); } }), { threshold: .08 }) : null;
  document.querySelectorAll('.tyg-reveal').forEach(el => observer ? observer.observe(el) : el.classList.add('is-visible'));
  form.addEventListener('submit', async e => {
    e.preventDefault();
    if (!form.reportValidity()) return;
    message.textContent = '';
    submit.disabled = true;
    const oldLabel = submit.innerHTML;
    submit.textContent = 'Enviando solicitud...';
    try {
      const response = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }, credentials: 'same-origin' });
      const payload = await response.json();
      if (!response.ok || !payload.status) throw new Error(payload.msg || 'No se pudo enviar la solicitud.');
      form.reset();
      close();
      if (window.Swal) Swal.fire({ icon: 'success', title: 'Solicitud enviada', text: payload.msg || 'Gracias, nos pondremos en contacto contigo.' });
      else alert(payload.msg || 'Solicitud enviada correctamente.');
    } catch (error) {
      message.textContent = error.message || 'Error de conexión. Inténtalo nuevamente.';
    } finally { submit.disabled = false; submit.innerHTML = oldLabel; }
  });
})();
