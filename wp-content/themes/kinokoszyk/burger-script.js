function onToggleMenu(e) {
  const navLinks = document.querySelector('#nav-links');
  const lines = document.querySelector('#line-container').children;
  e.name = e.name === 'menu' ? 'close' : 'menu';
  navLinks.classList.toggle('translate-x-[120%] py-4');

  // moves burger icon lines in to an x
  lines[0].classList.toggle('rotate-45');
  lines[0].classList.toggle('translate-y-[18px]');
  lines[0].classList.toggle('w-[32px]');
  lines[1].classList.toggle('invisible');
  lines[2].classList.toggle('rotate-[-45deg]');
  lines[2].classList.toggle('translate-y-[-2px]');
  lines[2].classList.toggle('w-[32px]');
}
