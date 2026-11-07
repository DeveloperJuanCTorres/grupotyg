(() => {
  const root = document.querySelector('.tyg-contact');
  if (!root) return;
  const reveals = root.querySelectorAll('.tyg-reveal');
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
      if (entry.isIntersecting) { entry.target.classList.add('tyg-visible'); observer.unobserve(entry.target); }
    }), { threshold: 0.08 });
    reveals.forEach(el => observer.observe(el));
  } else reveals.forEach(el => el.classList.add('tyg-visible'));

  const form = document.getElementById('tygContactForm');
  const button = document.getElementById('tygContactSubmit');
  const feedback = document.getElementById('tygContactFeedback');
  if (!form || !button) return;
  form.addEventListener('submit', async event => {
    event.preventDefault();
    if (!form.reportValidity()) return;
    const original = button.innerHTML;
    button.disabled = true;
    button.textContent = 'Enviando consulta...';
    feedback.textContent = '';
    try {
      const response = await fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
        credentials: 'same-origin'
      });
      const payload = await response.json();
      if (!response.ok || !payload.status) throw new Error(payload.msg || 'No se pudo enviar la consulta.');
      feedback.textContent = payload.msg || 'Tu consulta fue enviada correctamente.';
      feedback.style.color = '#86efac';
      form.reset();
    } catch (error) {
      feedback.textContent = error.message || 'Ocurrió un error. Intenta nuevamente.';
      feedback.style.color = '#fca5a5';
    } finally {
      button.disabled = false;
      button.innerHTML = original;
    }
  });
})();
