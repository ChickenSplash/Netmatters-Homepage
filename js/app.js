// Side menu toggle

$("#menu-toggle").click((event) => {
    if (!$(".bars").hasClass("open")) { // if it doesnt have the class .open, add it
        event.stopPropagation(); // so it doesnt triggler its parent's event handler
        $(".bars").addClass("open")
        $(".main-content").addClass("shifted")
    }
})

$(".main-content").click(() => {
    if ($(".main-content").hasClass("shifted")) {
        $(".main-content").removeClass("shifted")
        $(".bars").removeClass("open")
    }
})

// Sticky Header

const header = document.querySelector(".sticky-header");
let lastScroll = window.scrollY || document.documentElement.scrollTop;

window.addEventListener("scroll", () => { // runs this function every time user it detects scrolling, seemse quite heavy on system resources
    const currentScroll = window.scrollY || document.documentElement.scrollTop;
    
    if (currentScroll < lastScroll) { // is it scrolling up or scrolling down?
        header.classList.add("fixed")
    } else {
        header.classList.remove("fixed")
    }
    
    // update last known scroll position for next scroll event
    lastScroll = currentScroll;
})

// Functionality of sliders using slick.js

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
