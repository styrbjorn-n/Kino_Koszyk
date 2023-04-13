function clickToCange(element) {
  const displayImg = document.querySelector('#displayImg');

  displayImg.src = element.src;
}

function findCurrnetIndex(element) {
  const displayImg = document.querySelector('#displayImg');
  const imgArray = document.querySelectorAll('.bottom-img');

  let index = 0;

  for (; index < imgArray.length; index++) {
    if (displayImg.src === imgArray[index].src) {
      console.log('found it');
      index += parseInt(element.dataset.move);
      break;
    }
  }
  if (index === imgArray.length){ index = 0 }
  if (index < 0) { index = imgArray.length -1 }
  displayImg.src = imgArray[index].src;
}

function closeDisplay() {
  const window = document.querySelector('#imgOverlay');

  window.classList.add('left-[-300%]')
}

function openDisplay(element){
  const display = document.querySelector('#imgOverlay');

  display.classList.remove('left-[-300%]')
  clickToCange(element)
}
