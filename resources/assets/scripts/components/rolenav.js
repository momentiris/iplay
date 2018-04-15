import {TweenMax, Power2, TimelineLite} from "gsap";

'use strict';

const buttons = [...document.querySelectorAll('.role_button')];
const roleSection = document.querySelector('.role__nav');
const toggleBack = document.querySelector('.toggle_role_nav');
const roles = [...roleSection.querySelectorAll('h2')];

const roleInfo = roleSection.querySelector('.role__info');

const roleText = `
  <h2>Find your way.</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
`

toggleBack.addEventListener('click', () => {
  roleSection.classList.toggle('menu--active');
  roles.forEach((role, i) => {
    role.classList.toggle('hidden');
  })
})

buttons.forEach(button => {
  button.addEventListener('click', async () => {
    console.log('hej');
    await roleSection.classList.toggle('menu--active');
    roles.forEach((role, i) => {
      setTimeout(() => {
        role.classList.toggle('hidden');
    }, 100 * i)
  })
})
});

const goBack = document.querySelector('.role_back');
goBack.addEventListener('click', (e) => {

})
const roleNavIntro = roleSection.querySelector('.role__nav-intro');
const roleNavY = roleNavIntro.getBoundingClientRect().y;

roles.forEach((role, index) => {
  role.addEventListener('click', e => {
    roleNavIntro.classList.toggle('hidden__inside');

    console.log(e.target);
    roles.forEach(allButTarget => {
      if (e.target.className != allButTarget.className) {
        allButTarget.classList.toggle('hidden__inside');

      } else {
        e.target.classList.toggle('role--active');
        e.target.style.cssText = `
        transform: translateY(
          -${e.target.getBoundingClientRect().top - roleNavY}px);
        color: #44bb58;
        text-decoration: underline;
        font-size: 2rem;
        transition-delay: .2s;
          `;
          roleInfo.innerHTML = roleText;
      roleInfo.classList.remove('role__info-hide');
      }
    })
  })
})
