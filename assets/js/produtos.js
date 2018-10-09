
/* Slides */

var swiperProdutosRelacionado = new Swiper('#produtosRelacionado', {
    slidesPerView: 3,
    spaceBetween: 60,
    loop: true,
    autoplay: {
        delay: 2000,
    },
    navigation: {
        nextEl: '.related .swiper-button-next',
        prevEl: '.related .swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 60,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        }
    }
});