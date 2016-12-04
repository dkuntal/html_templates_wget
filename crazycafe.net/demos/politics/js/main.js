(function ($) {
    
    "use strict";

    $(document).ready(function ($) {



        // Progress-bar
        if ($.fn.barfiller) {
            $('#bar1').barfiller();
            $('#bar2').barfiller();
            $('#bar3').barfiller();
            $('#bar4').barfiller();

        }



        if ($.fn.slick) {
            $('.people-slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                dots: false,
                prevArrow: '<i class="icofont icofont-long-arrow-left"></i>',
                nextArrow: '<i class="icofont icofont-long-arrow-right"></i>',

                // the magic
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

        }




        //Menu Slide
        var windoWidth = $(window).width();
        if (windoWidth < 768) {
            $('.sub-menu').on('click', function () {
                $(this).toggleClass('menu-close');
                $(this).find('a').siblings('.dropdown-menu').slideToggle(500);
            });


        }




        if ($.fn.counterUp) {
            // Use jQuery CounterUp For Count Number
            $('.counter').counterUp({
                delay: 5,
                time: 10000
            });
        }


        if ($.fn.swipebox) {
            // Use jQuery Swipebox For Image PopUp
            $('.swipebox').swipebox({
                useCSS: true, // false will force the use of jQuery for animations
                useSVG: true, // false to force the use of png for buttons
                initialIndexOnArray: 0, // which image index to init when a array is passed
                hideCloseButtonOnMobile: false, // true will hide the close button on mobile devices
                removeBarsOnMobile: true, // false will show top bar on mobile devices
                hideBarsDelay: 3000, // delay before hiding bars on desktop
                beforeOpen: function () {}, // called before opening
                afterOpen: null, // called after opening
                afterClose: function () {}, // called after closing
                loopAtEnd: true // true will return to the first image after the last image is reached
            });
        }




    });





    // site preloader -- also uncomment the div in the header and the css style for #preloader
    $(window).load(function () {
        $('.loader').fadeOut('slow', function () {
            $(this).remove();
        });



    });


})(jQuery);