// Current year in footer
document.addEventListener('DOMContentLoaded', () => {
  const y = document.getElementById('year');
  if (y) y.textContent = new Date().getFullYear();

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  const getScrollOptions = () =>
    prefersReducedMotion.matches
      ? { top: 0 }
      : { top: 0, behavior: 'smooth' };

  document.querySelectorAll('.back-to-top').forEach((button) => {
    button.addEventListener('click', () => {
      window.scrollTo(getScrollOptions());
    });
  });

  // Mobile nav toggle
  const toggle = document.querySelector('.nav-toggle');
  const header = document.querySelector('.site-header');
  if (toggle && header) {
    toggle.addEventListener('click', () => {
      const open = header.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }
});

