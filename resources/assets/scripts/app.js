import './components/hamburger';

document.querySelector('.hamburger').addEventListener('click', (e) => {
  e.target.classList.toggle('is-active');
})
