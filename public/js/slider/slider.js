/*
 ** With Slick Slider Plugin : https://github.com/kenwheeler/slick/
 ** And Slick Animation Plugin : https://github.com/marvinhuebner/slick-animation
 */

// Init slick slider + animation
$('.slider').slick({
    autoplay: true,
    speed: 2500,
    lazyLoad: 'progressive',
    arrows: false,
    dots: true,
    autoplaySpeed: 15000,
    pauseOnHover: false,
    pauseOnFocus: false,
}).slickAnimation();