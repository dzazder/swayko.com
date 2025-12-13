/**
 * SWAYKO - Internationalization (i18n) Module
 * Supports Polish (pl) and English (en) languages
 */

const translations = {
    pl: {
        // Navigation
        'nav.home': 'Strona główna',
        'nav.products': 'Produkty',
        'nav.contact': 'Kontakt',
        
        // Hero
        'hero.tag': 'Software House',
        'hero.title1': 'Tworzymy',
        'hero.title2': 'oprogramowanie',
        'hero.title3': 'przyszłości',
        'hero.desc': 'Projektujemy i rozwijamy aplikacje mobilne, webowe oraz rozwiązania dedykowane dla biznesu. Łączymy innowację z perfekcyjnym wykonaniem.',
        'hero.cta1': 'Zobacz nasze projekty',
        'hero.cta2': 'Porozmawiajmy',
        
        // Services
        'services.title': 'Czym się zajmujemy',
        'services.mobile.title': 'Aplikacje Mobilne',
        'services.mobile.desc': 'Natywne i cross-platform aplikacje dla iOS i Android. React Native, Flutter, Swift, Kotlin.',
        'services.web.title': 'Aplikacje Webowe',
        'services.web.desc': 'Nowoczesne aplikacje SPA i PWA. React, Vue, Angular, Node.js, Python.',
        'services.cloud.title': 'Rozwiązania Cloud',
        'services.cloud.desc': 'Architektura chmurowa, DevOps, CI/CD. AWS, Google Cloud, Azure.',
        'services.custom.title': 'Dedykowane Systemy',
        'services.custom.desc': 'Systemy ERP, CRM, automatyzacje procesów biznesowych szyte na miarę.',
        
        // Stats
        'stats.projects': 'Zrealizowanych projektów',
        'stats.years': 'Lat doświadczenia',
        'stats.clients': 'Zadowolonych klientów',
        'stats.coffee': 'Kaw wypitych',
        
        // Featured
        'featured.title': 'Wybrane projekty',
        'featured.cta': 'Zobacz wszystkie projekty →',
        
        // Contact
        'contact.title': 'Skontaktuj się',
        'contact.lead': 'Masz pomysł na projekt? Porozmawiajmy o tym, jak możemy pomóc go zrealizować.',
        'contact.phone': 'Telefon',
        'contact.form.name': 'Imię i nazwisko',
        'contact.form.message': 'Wiadomość',
        'contact.form.submit': 'Wyślij wiadomość',
        
        // Footer
        'footer.tagline': 'Tworzymy oprogramowanie przyszłości',
        'footer.rights': 'Wszelkie prawa zastrzeżone.',
        
        // Products Page
        'products.tag': 'Portfolio',
        'products.title': 'Nasze Produkty',
        'products.desc': 'Projekty, które zrealizowaliśmy dla naszych klientów. Od aplikacji mobilnych po zaawansowane systemy webowe.',
        'products.filter.all': 'Wszystkie',
        'products.filter.mobile': 'Mobile',
        'products.filter.web': 'Web',
        'products.filter.cloud': 'Cloud',
        'products.filter.custom': 'Custom',
        'products.cta.title': 'Masz pomysł na projekt?',
        'products.cta.desc': 'Skontaktuj się z nami i porozmawiajmy o Twoich potrzebach.',
        'products.cta.btn': 'Rozpocznij współpracę',
        
        // Product Card
        'product.viewProject': 'Zobacz projekt →',
        'product.support': 'Wsparcie',
        'product.privacyPolicy': 'Polityka prywatności'
    },
    en: {
        // Navigation
        'nav.home': 'Home',
        'nav.products': 'Products',
        'nav.contact': 'Contact',
        
        // Hero
        'hero.tag': 'Software House',
        'hero.title1': 'We create',
        'hero.title2': 'software',
        'hero.title3': 'of the future',
        'hero.desc': 'We design and develop mobile apps, web applications, and custom business solutions. Combining innovation with perfect execution.',
        'hero.cta1': 'View our projects',
        'hero.cta2': 'Let\'s talk',
        
        // Services
        'services.title': 'What we do',
        'services.mobile.title': 'Mobile Apps',
        'services.mobile.desc': 'Native and cross-platform apps for iOS and Android. React Native, Flutter, Swift, Kotlin.',
        'services.web.title': 'Web Applications',
        'services.web.desc': 'Modern SPA and PWA applications. React, Vue, Angular, Node.js, Python.',
        'services.cloud.title': 'Cloud Solutions',
        'services.cloud.desc': 'Cloud architecture, DevOps, CI/CD. AWS, Google Cloud, Azure.',
        'services.custom.title': 'Custom Systems',
        'services.custom.desc': 'ERP, CRM systems, business process automation tailored to your needs.',
        
        // Stats
        'stats.projects': 'Completed projects',
        'stats.years': 'Years of experience',
        'stats.clients': 'Happy clients',
        'stats.coffee': 'Coffees consumed',
        
        // Featured
        'featured.title': 'Featured projects',
        'featured.cta': 'View all projects →',
        
        // Contact
        'contact.title': 'Get in touch',
        'contact.lead': 'Have a project idea? Let\'s discuss how we can help make it happen.',
        'contact.phone': 'Phone',
        'contact.form.name': 'Full name',
        'contact.form.message': 'Message',
        'contact.form.submit': 'Send message',
        
        // Footer
        'footer.tagline': 'Creating software of the future',
        'footer.rights': 'All rights reserved.',
        
        // Products Page
        'products.tag': 'Portfolio',
        'products.title': 'Our Products',
        'products.desc': 'Projects we\'ve delivered for our clients. From mobile apps to advanced web systems.',
        'products.filter.all': 'All',
        'products.filter.mobile': 'Mobile',
        'products.filter.web': 'Web',
        'products.filter.cloud': 'Cloud',
        'products.filter.custom': 'Custom',
        'products.cta.title': 'Have a project idea?',
        'products.cta.desc': 'Get in touch and let\'s discuss your needs.',
        'products.cta.btn': 'Start collaboration',
        
        // Product Card
        'product.viewProject': 'View project →',
        'product.support': 'Support',
        'product.privacyPolicy': 'Privacy Policy'
    }
};

class I18n {
    constructor() {
        this.currentLang = localStorage.getItem('swayko_lang') || 'pl';
        this.init();
    }
    
    init() {
        this.updateDOM();
        this.updateLangToggle();
        document.documentElement.lang = this.currentLang;
    }
    
    translate(key) {
        return translations[this.currentLang][key] || key;
    }
    
    updateDOM() {
        const elements = document.querySelectorAll('[data-i18n]');
        elements.forEach(el => {
            const key = el.getAttribute('data-i18n');
            const translation = this.translate(key);
            if (translation) {
                el.textContent = translation;
            }
        });
    }
    
    updateLangToggle() {
        const toggles = document.querySelectorAll('.lang-toggle');
        toggles.forEach(toggle => {
            toggle.textContent = this.currentLang === 'pl' ? 'EN' : 'PL';
        });
    }
    
    switchLanguage() {
        this.currentLang = this.currentLang === 'pl' ? 'en' : 'pl';
        localStorage.setItem('swayko_lang', this.currentLang);
        document.documentElement.lang = this.currentLang;
        this.updateDOM();
        this.updateLangToggle();
        
        // Dispatch event for other modules to react
        window.dispatchEvent(new CustomEvent('languageChanged', { 
            detail: { lang: this.currentLang } 
        }));
    }
    
    getCurrentLang() {
        return this.currentLang;
    }
}

// Initialize i18n
const i18n = new I18n();
window.i18n = i18n;

