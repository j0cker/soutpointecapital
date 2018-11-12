/*
 ** With Slick Slider Plugin : https://github.com/marvinhuebner/slick-animation
 ** And Slick Animation Plugin : https://github.com/marvinhuebner/slick-animation
 */

// Init slick slider + animation
$('.slider').slick({
    autoplay: true,
    speed: 1500,
    lazyLoad: 'progressive',
    arrows: false,
    dots: true,
}).slickAnimation();