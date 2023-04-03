setTimeout(() => {
  const childern = document.querySelector('.primary-menu-list').children;
  const URL =
    window.location.protocol +
    '//' +
    window.location.host +
    '/' +
    window.location.pathname +
    window.location.search;
  const pageList = ['biography', 'books', 'photos', 'joanna'];

  pageList.forEach((page) => {
    if (URL.includes(page)) {
      childern[1].classList.add('text-hover');
    } else {
      childern[0].classList.add('text-red-600');
    }
  });
}, 300);
