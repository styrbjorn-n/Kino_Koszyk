setTimeout(() => {
  const children = document.querySelector('.primary-menu-list').children;
  // const URL =
  //   window.location.protocol +
  //   '/' +
  //   window.location.host +
  //   '/' +
  //   window.location.pathname +
  //   window.location.search;
  URL = window.location.href
  const pageList = ['biography', 'book', 'photos', 'joanna'];

  for (let i = 0; i < pageList.length; i++) {
    if (URL.includes(pageList[i])) {
      children[1].classList.add('text-red-600');
      children[0].classList.remove('text-red-600');
      break;
    } else {
      children[0].classList.add('text-red-600');
      children[1].classList.remove('text-red-600');
    }
  }
}, 300);
