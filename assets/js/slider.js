(function() {

    'use strict';

    // breakpoint where swiper will be destroyed
    // and switches to a dual-column layout
    const breakpoint = window.matchMedia( '(min-width:768px)' );

    // keep track of swiper instances to destroy later
    let mySwiper;
    let flowerSwiper;


    const breakpointChecker = function() {

        // if larger viewport and multi-row layout needed
        if ( breakpoint.matches === false ) {

            // clean up old instances and inline styles when available
            if ( mySwiper !== undefined ) mySwiper.destroy( true, true );

            if (flowerSwiper !== undefined) flowerSwiper.destroy(true, true)
            // or/and do nothing
            return;

            // else if a small viewport and single column layout needed
        } else if ( breakpoint.matches === true ) {

            // fire small viewport version of swiper
            return enableSwiper();

        }

    };


    const enableSwiper = function() {

        mySwiper = new Swiper ('.swiper', {

            slidesPerView: 3,
            spaceBetween: 20,

            grabCursor: true,

            navigation: {
                nextEl: '.category-swiper-button-next',
                prevEl: '.category-swiper-button-prev',
            },

            breakpoints: {
                '1080': {
                    slidesPerView: 4
                }
            }
        });

        flowerSwiper = new Swiper ('.flowers-slider', {

            slidesPerView: 3,
            spaceBetween: 20,

            grabCursor: true,

            navigation: {
                nextEl: '.flower-swiper-button-next',
                prevEl: '.flower-swiper-button-prev',
            },

            breakpoints: {
                '1080': {
                    slidesPerView: 4
                }
            }
        });

    };

    // keep an eye on viewport size changes
    breakpoint.addEventListener("change", breakpointChecker);

    // kickstart
    breakpointChecker();



})(); /* IIFE end */