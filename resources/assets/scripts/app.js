import './components/hamburger';
import './components/logotype';
import './components/carousel';
import './components/rolenav';
import { getMobileOperatingSystem } from './components/getMobileOperatingSystem';

const navicon = document.querySelector('.main_nav_hamburger');
const naviconInner = navicon.querySelector('.hamburger-inner');


navicon.addEventListener('click', (e) => {
  navicon.classList.toggle('is-active');

})

const hero_mob_left = document.querySelector('.display_mobile_image_first');
const hero_mob_right = document.querySelector('.display_mobile_image_second');

window.addEventListener('scroll', (e) => {
  if (window.scrollY >= 100) {
    hero_mob_left.classList.remove('hide');
    hero_mob_right.classList.remove('hide');
  }

})

const camoCTA = [...document.querySelectorAll('.camoCTA')];

camoCTA.forEach(button=> {
  button.addEventListener('click', () => {
    if (getMobileOperatingSystem() == 'iOS') {
      window.location.href = "https://itunes.apple.com/se/app/iplay-sport/id1068927526?l=en&mt=8";
    } else if (getMobileOperatingSystem() == 'Android' || getMobileOperatingSystem() == 'Windows Phone' || getMobileOperatingSystem() == 'unknown') {
      window.location.href = "https://play.google.com/store/apps/details?id=com.iplay&hl=en&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1";
    }

  });
})
