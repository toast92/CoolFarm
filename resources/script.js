const menu = document.querySelector('.js-submenu');
const bars = document.querySelector('.js-bars');

bars.onclick = function() {

  menu.classList.toggle('closed');
};
