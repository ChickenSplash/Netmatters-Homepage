// Side menu toggle

$("#menu-toggle").click((event) => {
  if (!$(".bars").hasClass("open")) {
    event.stopPropagation(); // so it doesnt triggler its parent's event handler
    $(".bars").addClass("open")
    $(".main-content").addClass("shifted")
  } else {
    event.stopPropagation();
    $(".bars").removeClass("open")
    $(".main-content").removeClass("shifted")
  }
})

$(".main-content").click(() => {
  if ($(".main-content").hasClass("shifted")) {
    $(".main-content").removeClass("shifted")
    $(".bars").removeClass("open")
  }
})

// Functionality of sliders

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
