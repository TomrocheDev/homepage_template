const heroSlider = new Swiper(".hero-swiper", {
    effect: "fade",
    loop: true,
    speed: 3000,
    autoplay: {
        delay: 5000,
    },
});

const sponsorSlider = new Swiper(".sponsor-swiper", {
    loop: true,
    speed: 2000,
    autoplay: {
        delay: 5000,
    },
    slidesPerView: 3,
    breakpoints: {
        768: {
            slidesPerView: 5,
        },
    },
});