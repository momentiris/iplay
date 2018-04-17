
let touchStart;
let touchEnd;
let isRightSwipe;
const elements = [...document.querySelectorAll('.superuser__slide')];
const arrows = [...document.querySelectorAll('.arrow')];

arrows.forEach(arrow => {
  arrow.addEventListener('click', (e) => {
    if (e.target.classList.contains('left')) {
      isRightSwipe = false;
      swipe();
    } else {
      isRightSwipe = false;
      swipe();
    }
  })
})

document.addEventListener('touchstart', (e) => {
  touchStart = e.changedTouches[0].screenX;

}, {passive: true})
document.addEventListener('touchend', (e) => {
  touchEnd = e.changedTouches[0].screenX;
  compare();
}, {passive: true})

const compare = () => {
  isRightSwipe = (touchStart > touchEnd) ? false : true;

  return touchStart == touchEnd ? null : swipe();
}


  const swipe = () => {
    elements.forEach(child => {
      let currentPosition = child.dataset.position;

      let positionNext = parseInt(child.dataset.positionnext);
      let reverse = currentPosition == 0 ? 2 : currentPosition - 1;

      child.dataset.position = isRightSwipe ? positionNext : reverse;

      child.dataset.positionnext = (child.dataset.position == 2) ? 0 : parseInt(child.dataset.position) + 1
    })

}
