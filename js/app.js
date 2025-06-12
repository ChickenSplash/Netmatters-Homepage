const menuToggleContainer = document.getElementById('menu-toggle');
const menuToggle = menuToggleContainer.querySelector('.bars');
menuToggleContainer.addEventListener('click', () => {
    menuToggle.classList.toggle('open');
});

$('.banner-carousel').slick({
    arrows: false,
})