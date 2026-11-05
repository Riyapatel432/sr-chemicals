// ==========================================================================
// S R CHEMICALS - JAVASCRIPT APP CONTROLLER
// Bootstrap 5 + Performance & Accessibility Enhancements
// ==========================================================================

import './bootstrap';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header Scroll State
    const header = document.querySelector('.src-header');
    const scrollTopBtn = document.getElementById('srcScrollTop');

    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY > 40;
        if (header) {
            header.classList.toggle('is-scrolled', scrolled);
        }
        if (scrollTopBtn) {
            scrollTopBtn.classList.toggle('show', window.scrollY > 400);
        }
    }, { passive: true });

    // 2. Scroll to Top Action
    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 3. Hero Interactive Category Switcher
    const heroPills = document.querySelectorAll('.src-hero-pill-btn');
    const heroItems = document.querySelectorAll('.src-hero-item');
    const heroBgImgs = document.querySelectorAll('.src-hero-bg-img');

    heroPills.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-target');
            heroPills.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            heroItems.forEach(item => {
                if (item.id === targetId) {
                    item.style.display = 'block';
                    item.classList.add('active');
                } else {
                    item.style.display = 'none';
                    item.classList.remove('active');
                }
            });

            // Crossfade background images matching active category
            heroBgImgs.forEach(bg => {
                if (bg.id === 'bg-' + targetId) {
                    bg.classList.add('active');
                } else {
                    bg.classList.remove('active');
                }
            });
        });
    });

    // 4. Company Profile / Strengths Tab Switcher
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

    // 5. Client-Side Form Validation (Bootstrap 5 Standard)
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
});
