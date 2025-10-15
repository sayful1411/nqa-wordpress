// Initialize Feedback Swiper carousel
const feedbackSwiper = new Swiper('.feedbackSwiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    grabCursor: true,

    // Navigation arrows
    navigation: {
        nextEl: '#feedback-next',
        prevEl: '#feedback-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        // Mobile: center slide with peek
        320: {
            slidesPerView: 1.2,
            spaceBetween: 16,
            centeredSlides: true,
        },
        // Tablet
        640: {
            slidesPerView: 1.5,
            spaceBetween: 20,
            centeredSlides: true,
        },
        // Desktop: show 3 slides
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false,
        }
    }
});