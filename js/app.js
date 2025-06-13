const menuToggleContainer = document.getElementById('menu-toggle');
const menuToggle = menuToggleContainer.querySelector('.bars');
menuToggleContainer.addEventListener('click', () => {
    menuToggle.classList.toggle('open');
});

function initiateSliders() {
  $('.banner-carousel').slick({
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 4300,
      speed: 300,
  })
  
  $('.slider-row').slick({
    infinite: true,
    arrows: false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3500,
    speed: 300,
    variableWidth: true,
    draggable: false,
    centerMode: false,
    responsive: [ // so it fixes bug on it disappearing on desktop view (desktop first)
    {
      breakpoint: 768, 
      settings: {
        centerMode: true,
      }
    }]
  });
}

initiateSliders();
