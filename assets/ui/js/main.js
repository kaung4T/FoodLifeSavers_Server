(function ($) {
    "use strict";

    $(document).ready(function ($) {

        function preloader() {
            $('#preloader').delay(0).fadeOut();
        };

        $(window).on('load', function () {
            preloader();
        });

        // Initiate the wowjs
        // wowAnimation();
        // new WOW().init();


        // // Sticky Navbar
        // $(window).scroll(function () {
        //     if ($(this).scrollTop() > 300) {
        //         $('.fixed-top').addClass('shadow-sm').css('top', '0px');
        //     } else {
        //         $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        //     }
        // });


        /*=============================================
      =     Menu sticky & Scroll to top      =
      =============================================*/
        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll < 245) {
                $('.scroll-to-target').removeClass('open');
            } else {
                $('.scroll-to-target').addClass('open');
            }
        });


        /*=============================================
            =    		 Scroll Up  	         =
        =============================================*/
        if ($('.scroll-to-target').length) {
            $(".scroll-to-target").on('click', function () {
                var target = $(this).attr('data-target');
                // animate
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000);
            });
        }

        // Facts counter
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 2000
        });


        // Roadmap carousel
        $(".roadmap-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            margin: 25,
            loop: true,
            dots: false,
            nav: true,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });


        // Testimonials carousel
        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            margin: 25,
            loop: true,
            center: true,
            dots: false,
            nav: true,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });

        // search form
        $(".search-bar-icon").on("click", function () {
            $(".search-area").addClass("search-active");
        });

        $(".close-btn").on("click", function () {
            $(".search-area").removeClass("search-active");
        });

        $('.nav-link').hover(function (e) {
            e.preventDefault();
            $('.active').removeClass('active');
            $(this).addClass('active');
        });

    });
})(jQuery);


// Google Language Translate
function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
}

// ===================Register Password Show/Hide=================

let regChg = (e) => {
    if (e.classList.contains("fa-eye")) {
        e.classList.remove("fa-eye");
        e.classList.add("fa-eye-slash");
        password.type = "password";
    } else {
        e.classList.add("fa-eye");
        e.classList.remove("fa-eye-slash");
        password.type = "text";
    }
}


let regChgco = (e) => {
    if (e.classList.contains("fa-eye")) {
        e.classList.remove("fa-eye");
        e.classList.add("fa-eye-slash");
        c_password.type = "password";
    } else {
        e.classList.add("fa-eye");
        e.classList.remove("fa-eye-slash");
        c_password.type = "text";
    }
}
// ===================End Register Password Show/Hide=================

// ===================Login Password Show/Hide==========================
let chg = (e) => {
    if (e.classList.contains("fa-eye")) {
        e.classList.remove("fa-eye");
        e.classList.add("fa-eye-slash");
        password.type = "password";
    } else {
        e.classList.add("fa-eye");
        e.classList.remove("fa-eye-slash");
        password.type = "text";
    }
}

// ===================End Login Password Show/Hide==========================


// ========================Phone Area Code Number ===============

var input = document.querySelector("#number");
window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: function (success) {
        // Get your api-key at https://ipdata.co/
        fetch("https://api.ipdata.co/?api-key=test")
            .then(function (response) {
                if (!response.ok) return success("");
                return response.json();
            })
            .then(function (ipdata) {
                success(ipdata.country_code);
            });
    },
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js",
});

// =============================================================


// Countries Dropdown List
var config = {
    cUrl: 'https://api.countrystatecity.in/v1/countries',
    ckey: 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA=='
}


var countrySelect = document.querySelector('#countries');
function loadCountries() {

    let apiEndPoint = config.cUrl;

    fetch(apiEndPoint, { headers: { "X-CSCAPI-KEY": config.ckey } })
        .then(Response => Response.json())
        .then(data => {
            // console.log(data);

            data.forEach(country => {
                const option = document.createElement('option')
                option.value = country.iso2;
                option.textContent = country.name;
                countrySelect.appendChild(option);
            });
        }).catch(error => console.error('Error loading countries:', error));
};

loadCountries();


