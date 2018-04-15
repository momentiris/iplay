import './components/hamburger';
import './components/logotype';
import './components/carousel';
const navicon = document.querySelector('.hamburger');
const naviconInner = navicon.querySelector('.hamburger-inner');


navicon.addEventListener('click', (e) => {
  navicon.classList.toggle('is-active');
  console.log(naviconInner);
})

const hero_mob_left = document.querySelector('.display_mobile_image_first');
const hero_mob_right = document.querySelector('.display_mobile_image_second');

window.addEventListener('scroll', (e) => {
  if (window.scrollY >= 100) {
    hero_mob_left.classList.remove('hide');
    hero_mob_right.classList.remove('hide');
  }
  console.log(window.scrollY);
})
