const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.nav_nav');
const navlinks = [...menu.querySelectorAll('.page_item')];

hamburger.addEventListener('click', () => {
  menu.classList.toggle('menu--active');
  navlinks.forEach(item => {
    console.log('hej');
    item.classList.toggle('navlink--active');
  })
})
