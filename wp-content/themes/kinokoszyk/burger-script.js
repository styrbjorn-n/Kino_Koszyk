function onToggleMenu(e) {
  const navLinks = document.querySelector('#nav-links');
  e.name = e.name === 'menu' ? 'close' : 'menu';
  navLinks.classList.toggle('left-0');
}
