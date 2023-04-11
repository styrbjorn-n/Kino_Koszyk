function primaryMenuList(joannaPages, URL) {
  const children = document.querySelector('.primary-menu-list').children;

  for (let i = 0; i < joannaPages.length; i++) {
    if (URL.includes(joannaPages[i])) {
      children[1].classList.add('text-red-600');
      return;
    }
  }
  children[0].classList.add('text-red-600');
}

function navMenuList(joannaPages, kinoPages, URL) {
  const children = document.querySelector('.nav-menu-list').children;

  for (let i = 0; i < joannaPages.length; i++) {
    if (URL.includes(joannaPages[i]) && i < 4) {
      children[i].classList.add('text-red-600');
      return;
    }
  }
  for (let i = 0; i < kinoPages.length; i++) {
    if (URL.includes(kinoPages[i])) {
      children[i].classList.add('text-red-600');
    }
  }
}

setTimeout(() => {
  const joannaPages = ['biography', 'books', 'photos', 'contact', 'joanna'];
  const kinoPages = ['about', 'films', 'contact'];
  let URL = window.location.href;
  primaryMenuList(joannaPages, URL);
  navMenuList(joannaPages, kinoPages, URL);
}, 300);
