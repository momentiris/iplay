import './components/hamburger';
import './components/logotype';
const navicon = document.querySelector('.hamburger');
 const naviconInner = navicon.querySelector('.hamburger-inner');


navicon.addEventListener('click', (e) => {
  navicon.classList.toggle('is-active');
  console.log(naviconInner);
})
