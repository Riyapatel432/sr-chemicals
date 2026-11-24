// ==========================================================================
// S R CHEMICALS - JAVASCRIPT APP CONTROLLER
// Bootstrap 5 + Swiper 11 + Performance & Mobile Touch Enhancements
// ==========================================================================

import './bootstrap';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, EffectFade } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header Scroll State
    const header = document.querySelector('.src-header');
    const scrollTopBtn = document.getElementById('srcScrollTop');

    window.addEventListener('scroll', () => {
        const scrolled = (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0) > 40;
        if (header) {
            header.classList.toggle('is-scrolled', scrolled);
        }
        if (scrollTopBtn) {
            scrollTopBtn.classList.toggle('show', (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0) > 250);
        }
    }, { passive: true });

    // 2. Scroll to Top Action
    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
            document.documentElement.scrollTo({ top: 0, behavior: 'smooth' });
            document.body.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 3. Hero Touch/Swipe Swiper Slider with Category Pill Sync
    const heroSwiperEl = document.querySelector('.src-hero-swiper');
    const heroPills = document.querySelectorAll('.src-hero-pill-btn');
    const heroBgImgs = document.querySelectorAll('.src-hero-bg-img');

    if (heroSwiperEl) {
        const heroSwiper = new Swiper(heroSwiperEl, {
            modules: [Navigation, Pagination, Autoplay, EffectFade],
            effect: 'fade',
            fadeEffect: { crossFade: true },
            speed: 700,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            navigation: {
                prevEl: '.src-hero-prev',
                nextEl: '.src-hero-next',
            },
            pagination: {
                el: '.src-hero-pagination',
                clickable: true,
            },
            on: {
                slideChange: (swiper) => {
                    const activeIndex = swiper.realIndex;
                    // Sync category pills
                    heroPills.forEach((pill, idx) => {
                        pill.classList.toggle('active', idx === activeIndex);
                    });
                    // Sync background image crossfade
                    heroBgImgs.forEach((bg, idx) => {
                        bg.classList.toggle('active', idx === activeIndex);
                    });
                },
            },
        });

        // Click on category pill -> slide to that index
        heroPills.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                heroSwiper.slideTo(index);
            });
        });
    }

    /**
     * Helper: Automatically hide swiper controls (buttons, pagination, control containers)
     * when all slides fit on screen and scrolling is not required.
     */
    function attachSwiperLockHandler(swiper, controlsSelector) {
        if (!swiper) return;
        const updateLockState = () => {
            const isLocked = Boolean(
                swiper.isLocked ||
                (swiper.snapGrid && swiper.snapGrid.length <= 1) ||
                swiper.el?.classList.contains('swiper-lock')
            );
            if (controlsSelector) {
                document.querySelectorAll(controlsSelector).forEach(el => {
                    el.classList.toggle('is-locked', isLocked);
                    el.style.display = isLocked ? 'none' : '';
                });
            }
            if (swiper.params?.navigation) {
                const prevSelector = swiper.params.navigation.prevEl;
                const nextSelector = swiper.params.navigation.nextEl;
                const prevEls = typeof prevSelector === 'string' ? document.querySelectorAll(prevSelector) : [prevSelector].filter(Boolean);
                const nextEls = typeof nextSelector === 'string' ? document.querySelectorAll(nextSelector) : [nextSelector].filter(Boolean);
                [...prevEls, ...nextEls].forEach(btn => {
                    if (btn) {
                        btn.classList.toggle('swiper-button-lock', isLocked);
                        btn.style.display = isLocked ? 'none' : '';
                        const parent = btn.closest('.src-slider-arrows');
                        if (parent) {
                            parent.classList.toggle('is-locked', isLocked);
                            parent.style.display = isLocked ? 'none' : '';
                        }
                    }
                });
            }
            if (swiper.pagination?.el) {
                swiper.pagination.el.classList.toggle('swiper-pagination-lock', isLocked);
                swiper.pagination.el.style.display = isLocked ? 'none' : '';
            }
        };

        swiper.on('init', updateLockState);
        swiper.on('lock', updateLockState);
        swiper.on('unlock', updateLockState);
        swiper.on('resize', updateLockState);
        swiper.on('breakpoint', updateLockState);
        updateLockState();
        setTimeout(updateLockState, 50);
        window.addEventListener('resize', updateLockState);
    }

    // 4. Featured DEALS Swiper Carousel
    const dealsSwiperEl = document.querySelector('.src-deals-swiper');
    if (dealsSwiperEl) {
        const dealsSwiper = new Swiper(dealsSwiperEl, {
            modules: [Navigation, Pagination, Autoplay],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 600,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.src-deals-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-deals-prev',
                nextEl: '.src-deals-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(dealsSwiper, '.src-deals-controls');
    }

    // 5. MOST POPULAR PRODUCTS Swiper Carousel
    const popularSwiperEl = document.querySelector('.src-popular-swiper');
    if (popularSwiperEl) {
        const popularSwiper = new Swiper(popularSwiperEl, {
            modules: [Navigation, Pagination, Autoplay],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 600,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.src-popular-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-popular-prev',
                nextEl: '.src-popular-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(popularSwiper, '.src-popular-controls');
    }

    // 6. Our Clientele Swiper Carousel
    const clientSwiperEl = document.querySelector('.src-client-swiper');
    if (clientSwiperEl) {
        new Swiper(clientSwiperEl, {
            modules: [Pagination, Autoplay],
            slidesPerView: 1.4,
            spaceBetween: 14,
            speed: 600,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.src-client-pagination',
                clickable: true,
            },
            breakpoints: {
                480: {
                    slidesPerView: 2,
                    spaceBetween: 16,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
        });
    }

    // 7. Company Profile / Strengths Tab Switcher
    const tabBtns = document.querySelectorAll('.src-tab-btn');
    const tabPanels = document.querySelectorAll('.src-tab-panel');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-tab');
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            tabPanels.forEach(panel => {
                if (panel.id === targetId) {
                    panel.style.display = 'block';
                    panel.classList.add('active');
                } else {
                    panel.style.display = 'none';
                    panel.classList.remove('active');
                }
            });
        });
    });

    // 8. Client-Side Form Validation (Bootstrap 5 Standard)
    const forms = document.querySelectorAll('.src-validated-form');
    forms.forEach(form => {
        form.addEventListener('submit', event => {
            // Honeypot spam check
            const hp = form.querySelector('input[name="website_hp"]');
            if (hp && hp.value) {
                event.preventDefault();
                event.stopPropagation();
                return false;
            }

            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    // 9. Infrastructure & Facility Gallery Swiper
    const facilitySwiperEl = document.querySelector('.src-facility-swiper');
    if (facilitySwiperEl) {
        const facilitySwiper = new Swiper(facilitySwiperEl, {
            modules: [Navigation, Pagination, Autoplay],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 600,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.src-facility-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-facility-prev',
                nextEl: '.src-facility-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(facilitySwiper, '.src-facility-controls');
    }

    // 10. Client Testimonials / Trust Swiper Slider
    const testimonialSwiperEl = document.querySelector('.src-testimonial-swiper');
    if (testimonialSwiperEl) {
        const testimonialSwiper = new Swiper(testimonialSwiperEl, {
            modules: [Navigation, Pagination, Autoplay],
            slidesPerView: 1,
            spaceBetween: 24,
            watchOverflow: true,
            speed: 600,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.src-testimonial-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-testimonial-prev',
                nextEl: '.src-testimonial-next',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(testimonialSwiper, '.src-testimonial-controls');
    }

    // 11. Featured Products Catalog Swiper (Our Products Page)
    const featuredProductsSwiperEl = document.querySelector('.src-featured-products-swiper');
    if (featuredProductsSwiperEl) {
        const featuredProductsSwiper = new Swiper(featuredProductsSwiperEl, {
            modules: [Navigation, Pagination, Autoplay],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 600,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.src-featured-products-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-featured-products-prev',
                nextEl: '.src-featured-products-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(featuredProductsSwiper, '.src-featured-products-controls');
    }

    // 12. Subproduct Swiper for Category Pages on Mobile/Tablet
    const subproductSwiperEl = document.querySelector('.src-subproduct-swiper');
    if (subproductSwiperEl) {
        const subproductSwiper = new Swiper(subproductSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 500,
            pagination: {
                el: '.src-subproduct-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-subproduct-prev',
                nextEl: '.src-subproduct-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(subproductSwiper, '.src-subproduct-controls');
    }

    // 13. Category Carousel for About Us Page
    const categorySwiperEl = document.querySelector('.src-category-swiper');
    if (categorySwiperEl) {
        const categorySwiper = new Swiper(categorySwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1,
            spaceBetween: 20,
            watchOverflow: true,
            speed: 600,
            pagination: {
                el: '.src-category-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-category-prev',
                nextEl: '.src-category-next',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1.5,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(categorySwiper, '.src-category-controls');
    }

    // 14. Key Industries & Applications Swiper (About Us Page)
    const industrySwiperEl = document.querySelector('.src-industry-swiper');
    if (industrySwiperEl) {
        const industrySwiper = new Swiper(industrySwiperEl, {
            modules: [Navigation, Pagination, Autoplay],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 600,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.src-industry-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-industry-prev',
                nextEl: '.src-industry-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(industrySwiper, '.src-industry-controls');
    }

    // 15. 4-Stage Quality Assurance Protocol Swiper (About Us Page)
    const qualitySwiperEl = document.querySelector('.src-quality-swiper');
    if (qualitySwiperEl) {
        const qualitySwiper = new Swiper(qualitySwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 500,
            pagination: {
                el: '.src-quality-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-quality-prev',
                nextEl: '.src-quality-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(qualitySwiper, '.src-quality-controls');
    }

    // 16. Export Strategic Industries Swiper (Vietnam & Thailand Pages)
    const exportIndSwiperEl = document.querySelector('.src-export-industry-swiper');
    if (exportIndSwiperEl) {
        const indSwiper = new Swiper(exportIndSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 500,
            pagination: {
                el: '.src-export-ind-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-export-ind-prev',
                nextEl: '.src-export-ind-next',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1.3,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 1.8,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(indSwiper, '.src-export-industry-controls');

        document.querySelectorAll('.src-export-ind-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                indSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-export-ind-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                indSwiper.slideNext();
            });
        });
    }

    // 17. Export USPs / Advantages Swiper (Vietnam & Thailand Pages)
    const exportUspSwiperEl = document.querySelector('.src-export-usp-swiper');
    if (exportUspSwiperEl) {
        const uspSwiper = new Swiper(exportUspSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 500,
            pagination: {
                el: '.src-export-usp-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-export-usp-prev',
                nextEl: '.src-export-usp-next',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1.3,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 1.8,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(uspSwiper, '.src-export-usp-controls');

        document.querySelectorAll('.src-export-usp-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                uspSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-export-usp-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                uspSwiper.slideNext();
            });
        });
    }

    // Direct event listener safety fallbacks for all other custom carousel buttons
    document.querySelectorAll('.src-category-prev').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.src-category-swiper')?.swiper?.slidePrev();
        });
    });
    document.querySelectorAll('.src-category-next').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.src-category-swiper')?.swiper?.slideNext();
        });
    });
    document.querySelectorAll('.src-quality-prev').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.src-quality-swiper')?.swiper?.slidePrev();
        });
    });
    document.querySelectorAll('.src-quality-next').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.src-quality-swiper')?.swiper?.slideNext();
        });
    });
    document.querySelectorAll('.src-industry-prev').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.src-industry-swiper')?.swiper?.slidePrev();
        });
    });
    document.querySelectorAll('.src-industry-next').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.src-industry-swiper')?.swiper?.slideNext();
        });
    });

    // 18. Products Page: Showroom Category Swiper
    const showroomSwiperEl = document.querySelector('.src-showroom-swiper');
    if (showroomSwiperEl) {
        const showroomSwiper = new Swiper(showroomSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1,
            spaceBetween: 20,
            watchOverflow: true,
            speed: 550,
            pagination: {
                el: '.src-showroom-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-showroom-prev',
                nextEl: '.src-showroom-next',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(showroomSwiper, '.src-showroom-controls');

        document.querySelectorAll('.src-showroom-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                showroomSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-showroom-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                showroomSwiper.slideNext();
            });
        });
    }

    // 19. Products Page: Application Guide Swiper
    const appGuideSwiperEl = document.querySelector('.src-app-guide-swiper');
    if (appGuideSwiperEl) {
        const appGuideSwiper = new Swiper(appGuideSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 500,
            pagination: {
                el: '.src-app-guide-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-app-guide-prev',
                nextEl: '.src-app-guide-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(appGuideSwiper, '.src-app-guide-controls');

        document.querySelectorAll('.src-app-guide-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                appGuideSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-app-guide-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                appGuideSwiper.slideNext();
            });
        });
    }

    // Fallback click listeners for featured products carousel
    document.querySelectorAll('.src-featured-products-prev').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.src-featured-products-swiper')?.swiper?.slidePrev();
        });
    });
    document.querySelectorAll('.src-featured-products-next').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.src-featured-products-swiper')?.swiper?.slideNext();
        });
    });

    // 20. Sodium Phosphate Formulations & Strengths Swipers
    const sodiumSwiperEl = document.querySelector('.src-sodium-swiper');
    if (sodiumSwiperEl) {
        const sodiumSwiper = new Swiper(sodiumSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1,
            spaceBetween: 20,
            watchOverflow: true,
            speed: 550,
            pagination: {
                el: '.src-sodium-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-sodium-prev',
                nextEl: '.src-sodium-next',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(sodiumSwiper, '.src-sodium-controls');

        document.querySelectorAll('.src-sodium-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                sodiumSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-sodium-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                sodiumSwiper.slideNext();
            });
        });
    }

    const sodiumStrengthsSwiperEl = document.querySelector('.src-sodium-strengths-swiper');
    if (sodiumStrengthsSwiperEl) {
        const sodiumStrengthsSwiper = new Swiper(sodiumStrengthsSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 500,
            pagination: {
                el: '.src-sodium-strengths-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-sodium-strengths-prev',
                nextEl: '.src-sodium-strengths-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(sodiumStrengthsSwiper, '.src-sodium-strengths-controls');

        document.querySelectorAll('.src-sodium-strengths-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                sodiumStrengthsSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-sodium-strengths-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                sodiumStrengthsSwiper.slideNext();
            });
        });
    }

    // 21. Potassium Phosphate Formulations & Applications Swipers
    const potassiumSwiperEl = document.querySelector('.src-potassium-swiper');
    if (potassiumSwiperEl) {
        const potassiumSwiper = new Swiper(potassiumSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1,
            spaceBetween: 20,
            watchOverflow: true,
            speed: 550,
            pagination: {
                el: '.src-potassium-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-potassium-prev',
                nextEl: '.src-potassium-next',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(potassiumSwiper, '.src-potassium-controls');

        document.querySelectorAll('.src-potassium-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                potassiumSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-potassium-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                potassiumSwiper.slideNext();
            });
        });
    }

    const potassiumAppsSwiperEl = document.querySelector('.src-potassium-apps-swiper');
    if (potassiumAppsSwiperEl) {
        const potassiumAppsSwiper = new Swiper(potassiumAppsSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 500,
            pagination: {
                el: '.src-potassium-apps-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-potassium-apps-prev',
                nextEl: '.src-potassium-apps-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(potassiumAppsSwiper, '.src-potassium-apps-controls');

        document.querySelectorAll('.src-potassium-apps-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                potassiumAppsSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-potassium-apps-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                potassiumAppsSwiper.slideNext();
            });
        });
    }

    // 22. Ammonium Phosphate Formulations & Applications Swipers
    const ammoniumSwiperEl = document.querySelector('.src-ammonium-swiper');
    if (ammoniumSwiperEl) {
        const ammoniumSwiper = new Swiper(ammoniumSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1,
            spaceBetween: 20,
            watchOverflow: true,
            speed: 550,
            pagination: {
                el: '.src-ammonium-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-ammonium-prev',
                nextEl: '.src-ammonium-next',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(ammoniumSwiper, '.src-ammonium-controls');

        document.querySelectorAll('.src-ammonium-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                ammoniumSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-ammonium-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                ammoniumSwiper.slideNext();
            });
        });
    }

    const ammoniumAppsSwiperEl = document.querySelector('.src-ammonium-apps-swiper');
    if (ammoniumAppsSwiperEl) {
        const ammoniumAppsSwiper = new Swiper(ammoniumAppsSwiperEl, {
            modules: [Navigation, Pagination],
            slidesPerView: 1.15,
            spaceBetween: 16,
            watchOverflow: true,
            speed: 500,
            pagination: {
                el: '.src-ammonium-apps-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.src-ammonium-apps-prev',
                nextEl: '.src-ammonium-apps-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            },
        });
        attachSwiperLockHandler(ammoniumAppsSwiper, '.src-ammonium-apps-controls');

        document.querySelectorAll('.src-ammonium-apps-prev').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                ammoniumAppsSwiper.slidePrev();
            });
        });
        document.querySelectorAll('.src-ammonium-apps-next').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                ammoniumAppsSwiper.slideNext();
            });
        });
    }

    // 23. Mobile Table Scroll Visual Indicator
    const responsiveTables = document.querySelectorAll('.table-responsive');
    responsiveTables.forEach(wrapper => {
        const table = wrapper.querySelector('table');
        if (!table) return;

        const checkOverflow = () => {
            if (wrapper.scrollWidth > wrapper.clientWidth + 5) {
                wrapper.classList.add('is-overflowing');
            } else {
                wrapper.classList.remove('is-overflowing');
            }
        };

        checkOverflow();
        window.addEventListener('resize', checkOverflow, { passive: true });
        wrapper.addEventListener('scroll', () => {
            if (wrapper.scrollLeft > 20) {
                wrapper.classList.add('has-scrolled');
            } else {
                wrapper.classList.remove('has-scrolled');
            }
        }, { passive: true });
    });
});
