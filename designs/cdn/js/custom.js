(function($) {

    "use strict";

    /* ==========================================
            1.  Scroll To Top
    ========================================== */


    function scroll_to_top() {

        var scroll_div = $.scrollUp;

        scroll_div({
            scrollName: 'scrollUp',
            topDistance: '1000',
            topSpeed: 10000,
            animation: 'fade',
            animationInSpeed: 200,
            animationOutSpeed: 200,
            scrollText: 'Scroll to top',
            activeOverlay: false,

        });

    }

    scroll_to_top();


    /* ==========================================
          2.    testimonial-items   
    ========================================== */

    $('.themeix-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        smartSpeed: 1000,
        margin: 30,
        responsive: {
            0: {
                items: 1,

            },
            450: {
                items: 1,

            },
            600: {
                items: 2,

            },
            1000: {
                items: 2,
            }
        }
    });

    /* ==========================================
            3.   related-posts      
    ========================================== */


    $('.themeix-post-caro').owlCarousel({
        autoplay: false,
        loop: true,
        nav: true,
        dots: false,
        smartSpeed: 1000,
        margin: 30,
        responsive: {
            0: {
                items: 1,

            },
            450: {
                items: 1,

            },
            600: {
                items: 2,

            },
            1000: {
                items: 2,
            }
        }
    });

    /* ==========================================
              4.    mobile-menu     
       ========================================== */

    jQuery('ul.sf-menu').superfish({

        animation: {

            height: 'show'
        },

        delay: 1200
    });

    $('#menu').slicknav();

    /* ==========================================
               5.   time-clock  
       ========================================== */

    function digital_clock() {

        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

        var newDate = new Date();
        newDate.setDate(newDate.getDate());
        $('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

        setInterval(function() {

            var seconds = new Date().getSeconds();

            var secondRange = parseInt((seconds < 10 ? "0" : "") + seconds, 10);

            $("#sec").html(secondRange);

        }, 1000);

        setInterval(function() {

            var minutes = new Date().getMinutes();

            var minutesRange = parseInt((minutes < 10 ? "0" : "") + minutes, 10)

            $("#min").html(minutesRange);

        }, 1000);

        setInterval(function() {

            var hours = new Date().getHours();

            var hoursRange = parseInt(hours, 10);

            $("#hours").html((hoursRange < 10 ? "0" : "") + hoursRange);

        }, 1000);
    }

    digital_clock();



    /* ==========================================
              6.     Remove Cart Item
      ========================================== */

    function cart_item_remove() {

        $(".checkout-list .cross-btn").on("click", function(e) {

            var tt = $(this).parent().parent().hide();

            e.preventDefault();

        });

    }

    cart_item_remove();


    /*=============================================
        8. Active WoW JS
    ===============================================*/

    new WOW().init();




})(jQuery);