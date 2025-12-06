/**
 * SWAYKO - Main JavaScript (PHP version)
 */

document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenuBtn.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });
        
        // Close mobile menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenuBtn.classList.remove('active');
                mobileMenu.classList.remove('active');
            });
        });
    }
    
    // Language Toggle
    const langToggle = document.getElementById('langToggle');
    const langToggleMobile = document.getElementById('langToggleMobile');
    
    if (langToggle) {
        langToggle.addEventListener('click', () => {
            window.i18n.switchLanguage();
            updateProductsLanguage();
        });
    }
    
    if (langToggleMobile) {
        langToggleMobile.addEventListener('click', () => {
            window.i18n.switchLanguage();
            updateProductsLanguage();
        });
    }
    
    // Initial language update for products
    updateProductsLanguage();
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
    
    // Contact Form
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert(window.i18n.getCurrentLang() === 'pl' 
                ? 'Dziękujemy za wiadomość! Skontaktujemy się wkrótce.' 
                : 'Thank you for your message! We\'ll get back to you soon.');
            contactForm.reset();
        });
    }
    
    // Scroll animations
    initScrollAnimations();
});

// Update products language (for PHP-rendered products)
function updateProductsLanguage() {
    const lang = window.i18n.getCurrentLang();
    
    // Update product names
    document.querySelectorAll('.product-name').forEach(el => {
        const namePl = el.getAttribute('data-name-pl');
        const nameEn = el.getAttribute('data-name-en');
        if (namePl && nameEn) {
            el.textContent = lang === 'pl' ? namePl : nameEn;
        }
    });
    
    // Update product descriptions
    document.querySelectorAll('.product-desc').forEach(el => {
        const descPl = el.getAttribute('data-desc-pl');
        const descEn = el.getAttribute('data-desc-en');
        if (descPl && descEn) {
            el.textContent = lang === 'pl' ? descPl : descEn;
        }
    });
}

// Listen for language changes
window.addEventListener('languageChanged', () => {
    updateProductsLanguage();
});

// Scroll animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe service cards and product cards
    document.querySelectorAll('.service-card, .product-card, .stat-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}

// Animation class
document.head.insertAdjacentHTML('beforeend', `
    <style>
        .animate-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    </style>
`);

