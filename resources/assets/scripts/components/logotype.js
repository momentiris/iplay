const pieces = [...document.querySelectorAll('path')];
const dots = document.querySelector('.dots');
const i = document.querySelector('.i');
const iFrags = [...i.querySelectorAll('path')];
const p = document.querySelector('.p');
const pFrags = [...p.querySelectorAll('path')];
const la = document.querySelector('.la');
const laFrags = [...la.querySelectorAll('path')];
const y = document.querySelector('.y');
const yFrags = [...y.querySelectorAll('path')];

function getRandom(min, max) {
return Math.random() * (max - min) + min;
}
let status = true;


[...iFrags, ...pFrags, ...laFrags, ...yFrags ].forEach(elem => {
  init(elem);
})
  function init(element) {
  element.style.cssText = `
  opacity: 0;
  transform: translateX(${getRandom(-500, 500)}px)
  translateY(${getRandom(-500 , 500)}px)
  rotate(${getRandom(-50, 50  )}deg)
  `;
}


async function delay() {
return new Promise((resolve) => setTimeout(resolve, 25))
}
async function doSetTimeout( element) {
await delay();

  element.style.cssText = `
  opacity: 1;
    transition: transform .4s ease,
    opacity .1s ease .1s ;
    transform:
    translateX(${0}px)
    rotate(${0}deg);

  `;

}
async function trigger(element) {
  for (const path of element) {
    await doSetTimeout(path);
  }
}

async function triggerWarning()  {

const triggers = [
await new Promise(resolve => resolve( trigger(yFrags))),
await new Promise(resolve => resolve( trigger(laFrags))),
await new Promise(resolve => resolve( trigger(pFrags))),
await new Promise(resolve => resolve(trigger(iFrags))),
];

const dotting = await new Promise(async resolve => resolve([...dots.querySelectorAll('path')].forEach(async dot => {
  console.log('hej');
 await dot.classList.remove('animate');
})))


// await showIntro(slogan, introText, 0, interval);
}

document.addEventListener("DOMContentLoaded", function(event) {
  console.log("DOM fully loaded and parsed");
  setTimeout(() => {
    triggerWarning();
  }, 500);

});
