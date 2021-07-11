//navigation bar hamburger toggle funtion
const hamburger = document.querySelector('.hamburger');
const navList = document.querySelector('.hamburger-menu');

hamburger.addEventListener('click', () => {
  navList.classList.toggle('show');
}
)
