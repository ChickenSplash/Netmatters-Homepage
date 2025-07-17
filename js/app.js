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
let lastScroll = window.scrollY;

window.addEventListener("scroll", () => { // runs this function every time it detects scrolling
    const currentScroll = window.scrollY; // fetch the current scroll value
    
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


// Consent functionality

function consentFunctionality() {
    //declare variables and functions
    const manageContentBtn = document.querySelector(".cookies .manage");
    const acceptBtn = document.querySelector(".accept-btn");
    const popup = document.querySelector(".cookies .consent-popup");

    function toggleHidden() {
        if (popup.classList.contains("is-hidden")) {
            popup.classList.remove("is-hidden");
        } else {
            popup.classList.add("is-hidden");
            localStorage.setItem("cookiesConsent", "accepted");
        }
    }

    // use them
    if (!localStorage.getItem("cookiesConsent")) {
        popup.classList.remove("is-hidden");
    }

    manageContentBtn.addEventListener("click", toggleHidden)
    acceptBtn.addEventListener("click", toggleHidden)
}

consentFunctionality();

// dropdown for contact us page

$(".dropdown-box").hide();

$("#dropdown-link").click(() => {
    $(".dropdown-box").is(':visible') // is content visible?
        ? $(".dropdown-box").slideUp(350)
        : $(".dropdown-box").slideDown(350);
});

// event listeners to be able to close server side form validation feedback

const closeFeedback = document.querySelectorAll(".close");

for (let i = 0; i < closeFeedback.length; i++) {
    closeFeedback[i].addEventListener("click", (event) => {
        event.target.parentElement.remove();
    });
}

// client side form validation

function validateForm() {
    let valid = true;

    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const message = document.getElementById('message');

    // Clear previous errors
    const error = document.querySelectorAll('.error')
    for (i = 0; i < error.length; i++) {
      error[i].classList.remove("error");
    }

    if (name.value.trim() === '') {
        name.classList.add("error");
        valid = false;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.value.trim())) {
        email.classList.add("error");
        valid = false;
    }

    if (phone.value.trim() === '') {
        phone.classList.add("error");
        valid = false;
    }

    if (message.value.trim() === '') {
        message.classList.add("error");
        valid = false;
    }

    return valid;
}

