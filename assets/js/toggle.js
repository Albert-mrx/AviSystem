document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  const overlay = document.getElementById('overlay');

  menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('-translate-x-full');
      overlay.classList.toggle('hidden');
  });

  overlay.addEventListener('click', () => {
      mobileMenu.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
  });
});
