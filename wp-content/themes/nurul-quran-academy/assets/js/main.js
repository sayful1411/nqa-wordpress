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

// Initialize Teacher Swiper carousel
const teacherSwiper = new Swiper('.teacherSwiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    grabCursor: true,

    // Navigation arrows
    navigation: {
        nextEl: '#teacher-next',
        prevEl: '#teacher-prev',
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



// GSAP Card Stack on Scroll Effect
gsap.registerPlugin(ScrollTrigger);

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
  const cards = gsap.utils.toArray('.card-item');

  if (!cards.length) return;

  // Configuration
  const baseStickyTop = window.innerWidth > 768 ? 80 : 60;
  const stackOffset = 20; // Offset between each stacked card
  const scaleAmount = 0.05; // How much each card scales down

  cards.forEach((card, index) => {
    const isLast = index === cards.length - 1;

    // Calculate individual sticky position for stacking effect
    const cardStickyTop = baseStickyTop + (index * stackOffset);

    // Add margin to create spacing between cards
    if (index > 0) {
      card.style.marginTop = '40px';
    }

    // Make each card sticky with progressive top positions
    // Higher index = higher z-index (so later cards appear on top)
    gsap.set(card, {
      position: 'sticky',
      top: cardStickyTop + 'px',
      zIndex: index + 1, // Later cards have higher z-index
      transformOrigin: 'center top'
    });

    // Last card scrolls freely - make it relative
    if (isLast) {
      gsap.set(card, {
        position: 'relative',
        top: 'auto'
      });
      return;
    }
  });

  // Refresh ScrollTrigger on window resize
  window.addEventListener('resize', () => {
    ScrollTrigger.refresh();
  });

  
});