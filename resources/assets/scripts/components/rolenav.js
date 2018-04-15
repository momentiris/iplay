import {TweenMax, Power2, TimelineLite} from "gsap";

'use strict';

const buttons = [...document.querySelectorAll('.role_button')];
const roleSection = document.querySelector('.role__nav');
const toggleExit = document.querySelector('.toggle_role_nav');
const roles = [...roleSection.querySelectorAll('h2')];

const roleInfo = roleSection.querySelector('.role__info');

const roleNavIntro = roleSection.querySelector('.role__nav-intro');
const roleNavY = roleNavIntro.getBoundingClientRect().y;

const roleText = `
  <h2>Find your way.</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
`

toggleExit.addEventListener('click', () => {
  roleSection.classList.toggle('menu--active');
  roles.forEach((role, i) => {
    role.classList.toggle('hidden');

      roleInfo.style.transitionDelay = "0s";
      roleInfo.classList.add('role__info-hide');
      roleNavIntro.classList.add('hidden__inside');
      if (role.classList.contains('role--active')) {
        role.classList.remove('role--active');
        // role.style.cssText = "transform: translateY(0px);";
      } else {
        role.classList.remove('hidden__inside');

      }
  })
})

buttons.forEach(button => {
  button.addEventListener('click', async () => {
    console.log('hej');
    await roleSection.classList.toggle('menu--active');
    roleNavIntro.classList.remove('hidden__inside');
    goBack.style.opacity = "0";
    roles.forEach((role, i) => {
      setTimeout(() => {
        role.classList.toggle('hidden');
    }, 100 * i)
  })
})
});

const goBack = document.querySelector('.role_back');

goBack.addEventListener('click', (e) => {
  roleInfo.classList.add('role__info-hide');
  goBack.style.opacity = "0";

  roles.forEach(role => {
    roleInfo.style.transitionDelay = "0s";
    roleNavIntro.classList.remove('hidden__inside');
    if (role.classList.contains('role--active')) {
      role.classList.remove('role--active');
<<<<<<< HEAD
      role.style.cssText = "";
    } else {
      role.classList.remove('hidden__inside');
=======
      role.style.cssText = 'transform: translateY(0px);transition-delay: 0.3s';

>>>>>>> cdf543823d7ca7d237b1e1650bc4fbf555796743
    }
  })
})

roles.forEach((role, index) => {
  role.addEventListener('click', e => {
    roleNavIntro.classList.add('hidden__inside');

    console.log(e.target);
    roles.forEach(allButTarget => {
      goBack.style.opacity = "1";
      if (e.target.className != allButTarget.className) {
        allButTarget.classList.toggle('hidden__inside');

      } else {
        e.target.classList.toggle('role--active');
        e.target.style.cssText = `
        transform: translateY(
          -${e.target.getBoundingClientRect().top - roleNavY}px);
          `;
          roleInfo.innerHTML = roleText;
          roleInfo.style.transitionDelay = ".2s";
          roleInfo.classList.remove('role__info-hide');
      }
    })
  })
})
