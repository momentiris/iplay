const hamburger = document.querySelector('.hamburger');
const hamburgerInner = hamburger.querySelector('.hamburger-inner');
const menu = document.querySelector('.nav_nav');
const navlinks = [...menu.querySelectorAll('.menu-item')];

const submenuToggler = document.querySelector('.menu-item-has-children a');
const submenu = document.querySelector('.sub-menu');
console.log(submenu);


hamburger.addEventListener('click', (e) => {
  console.log(e.target);
  hamburgerInner.classList.toggle('hamburger-inner_active');
  menu.classList.toggle('menu--active');
  navlinks.forEach(item => {
    item.classList.toggle('navlink--active');
  })
})

submenuToggler.addEventListener('click', (e) => {
  e.preventDefault();
  submenu.classList.toggle('sub-menu--active');
})
