if (page == "home") {
    const swiper = new Swiper('.swiper', {
        speed: 400,
        spaceBetween: 32,
        slidesPerView: 2,
        loop: true,
        allowSlideNext: true,
        allowSlidePrev: true,
        allowTouchMove: true,
        // initialSlide: 1,
        mousewheel: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
            dynamicBullets: true,
        },
        mousewheel: {
            invert: true,
            eventsTarget: 'wrapper',  
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 16                
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 1,          
            },
            // when window width is >= 992px
            992: {
                slidesPerView: 2,          
            }
        }
    });
}

$(window).scroll(function () {
    if (page == "profile") {
	    if ($(".button-vote").offset().top + 48 > $("#footer").offset().top) {
            $(".button-vote").addClass("visually-hidden")
        } else {
            $(".button-vote").removeClass("visually-hidden")
        }
    }
})

if (page != "dashboard") {
    const togglePassword = document.querySelector('#togglePassword');

    const password = document.querySelector('#password');

    const iconTP = document.querySelector('#iconTogglePassword');

    togglePassword.addEventListener('click', () => {
        const type = password.getAttribute('type') ===
            'password' ?
            'text' : 'password';
                
        password.setAttribute('type', type);
        const icon = iconTP.getAttribute('icon') ===
            'bi:eye' ?
            'bi:eye-slash' : 'bi:eye';
                
        iconTP.setAttribute('icon', icon);
    });   
} else if (page == "dashboard") {
    document.writeln('<script src="../assets/js/app.js"></script>')
}