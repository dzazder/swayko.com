<?php
$products = json_decode(file_get_contents('data/products.json'), true)['products'];
$featuredProducts = array_filter($products, fn($p) => $p['featured']);
$featuredProducts = array_slice($featuredProducts, 0, 3);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWAYKO - Software Development</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="grain-overlay"></div>
    
    <header class="header">
        <nav class="nav">
            <a href="index.php" class="logo">SWAYKO</a>
            <div class="nav-links">
                <a href="index.php" data-i18n="nav.home">Strona główna</a>
                <a href="products.php" data-i18n="nav.products">Produkty</a>
                <a href="#contact" data-i18n="nav.contact">Kontakt</a>
                <button class="lang-toggle" id="langToggle">EN</button>
            </div>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <div class="mobile-menu" id="mobileMenu">
        <a href="index.php" data-i18n="nav.home">Strona główna</a>
        <a href="products.php" data-i18n="nav.products">Produkty</a>
        <a href="#contact" data-i18n="nav.contact">Kontakt</a>
        <button class="lang-toggle" id="langToggleMobile">EN</button>
    </div>

    <main>
        <section class="hero">
            <div class="hero-content">
                <!--<div class="hero-tag">
                    <span class="dot"></span>
                    <span data-i18n="hero.tag">Software House</span>
                </div>-->
                <h1 class="hero-title">
                    <span data-i18n="hero.title1">Tworzymy</span>
                    <span class="hero-title-italic" data-i18n="hero.title2">oprogramowanie</span>
                    <span data-i18n="hero.title3">przyszłości</span>
                </h1>
                <p class="hero-desc" data-i18n="hero.desc">
                    Projektujemy i rozwijamy aplikacje mobilne, webowe oraz rozwiązania dedykowane dla biznesu. Łączymy innowację z perfekcyjnym wykonaniem.
                </p>
                <div class="hero-cta">
                    <a href="products.php" class="btn btn-primary" data-i18n="hero.cta1">Zobacz nasze projekty</a>
                    <!--<a href="#contact" class="btn btn-secondary" data-i18n="hero.cta2">Porozmawiajmy</a>-->
                </div>
            </div>
            <div class="hero-visual">
                <div class="code-block">
                    <div class="code-header">
                        <span class="code-dot red"></span>
                        <span class="code-dot yellow"></span>
                        <span class="code-dot green"></span>
                    </div>
                    <pre class="code-content"><code><span class="code-keyword">const</span> <span class="code-var">swayko</span> = {
  <span class="code-prop">mission</span>: <span class="code-string">"Build the future"</span>,
  <span class="code-prop">expertise</span>: [
    <span class="code-string">"Mobile Apps"</span>,
    <span class="code-string">"Web Development"</span>,
    <span class="code-string">"Cloud Solutions"</span>
  ],
  <span class="code-prop">deliver</span>: () => <span class="code-string">"Excellence"</span>
};</code></pre>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="section-header">
                <span class="section-number">01</span>
                <h2 data-i18n="services.title">Czym się zajmujemy</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="5" y="2" width="14" height="20" rx="2"/>
                            <line x1="12" y1="18" x2="12" y2="18.01" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 data-i18n="services.mobile.title">Aplikacje Mobilne</h3>
                    <p data-i18n="services.mobile.desc">Natywne i cross-platform aplikacje dla iOS i Android. React Native, Flutter, Swift, Kotlin.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <h3 data-i18n="services.web.title">Aplikacje Webowe</h3>
                    <p data-i18n="services.web.desc">Nowoczesne aplikacje SPA i PWA. React, Vue, Angular, Node.js, Python.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3 data-i18n="services.cloud.title">Rozwiązania Cloud</h3>
                    <p data-i18n="services.cloud.desc">Architektura chmurowa, DevOps, CI/CD. AWS, Google Cloud, Azure.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                        </svg>
                    </div>
                    <h3 data-i18n="services.custom.title">Dedykowane Systemy</h3>
                    <p data-i18n="services.custom.desc">Systemy ERP, CRM, automatyzacje procesów biznesowych szyte na miarę.</p>
                </div>
            </div>
        </section>

        <section class="stats">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">30+</span>
                    <span class="stat-label" data-i18n="stats.projects">Zrealizowanych projektów</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">13+</span>
                    <span class="stat-label" data-i18n="stats.years">Lat doświadczenia</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label" data-i18n="stats.clients">Zadowolonych klientów</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">∞</span>
                    <span class="stat-label" data-i18n="stats.coffee">Kaw wypitych</span>
                </div>
            </div>
        </section>

        <section class="featured">
            <div class="section-header">
                <span class="section-number">02</span>
                <h2 data-i18n="featured.title">Wybrane projekty</h2>
            </div>
            <div class="featured-grid" id="featuredProducts">
                <?php foreach ($featuredProducts as $product): ?>
                <article class="product-card" data-category="<?= htmlspecialchars($product['category']) ?>">
                    <div class="product-image">
                        <?php if (!empty($product['image'])): ?>
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']['pl']) ?>">
                        <?php else: ?>
                            <div class="product-image-placeholder"><?= $product['icon'] ?? '📱' ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="product-content">
                        <div class="product-tags">
                            <span class="product-tag category"><?= htmlspecialchars($product['category']) ?></span>
                            <?php foreach (array_slice($product['technologies'], 0, 3) as $tech): ?>
                                <span class="product-tag"><?= htmlspecialchars($tech) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <h3 class="product-name" data-name-pl="<?= htmlspecialchars($product['name']['pl']) ?>" data-name-en="<?= htmlspecialchars($product['name']['en']) ?>">
                            <?= htmlspecialchars($product['name']['pl']) ?>
                        </h3>
                        <p class="product-desc" data-desc-pl="<?= htmlspecialchars($product['description']['pl']) ?>" data-desc-en="<?= htmlspecialchars($product['description']['en']) ?>">
                            <?= htmlspecialchars($product['description']['pl']) ?>
                        </p>
                        <?php if (!empty($product['url'])): ?>
                            <a href="<?= htmlspecialchars($product['url']) ?>" class="product-link" target="_blank" rel="noopener" data-i18n="product.viewProject">
                                Zobacz projekt →
                            </a>
                        <?php endif; ?>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
            <div class="featured-cta">
                <a href="products.php" class="btn btn-outline" data-i18n="featured.cta">Zobacz wszystkie projekty →</a>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="section-header">
                <span class="section-number">03</span>
                <h2 data-i18n="contact.title">Skontaktuj się</h2>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <p class="contact-lead" data-i18n="contact.lead">Masz pomysł na projekt? Porozmawiajmy o tym, jak możemy pomóc go zrealizować.</p>
                    <!--<div class="contact-details">
                        <a href="mailto:hello@swayko.com" class="contact-link">
                            <span class="contact-label">Email</span>
                            <span class="contact-value">hello@swayko.com</span>
                        </a>
                        <a href="tel:+48123456789" class="contact-link">
                            <span class="contact-label" data-i18n="contact.phone">Telefon</span>
                            <span class="contact-value">+48 123 456 789</span>
                        </a>
                    </div>-->
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name" data-i18n="contact.form.name">Imię i nazwisko</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="4" required></textarea>
                        <label for="message" data-i18n="contact.form.message">Wiadomość</label>
                    </div>
                    <button type="submit" class="btn btn-primary" data-i18n="contact.form.submit">Wyślij wiadomość</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <span class="logo">SWAYKO</span>
                <p data-i18n="footer.tagline">Tworzymy oprogramowanie przyszłości</p>
            </div>
            <div class="footer-links">
                <a href="index.php" data-i18n="nav.home">Strona główna</a>
                <a href="products.php" data-i18n="nav.products">Produkty</a>
                <a href="#contact" data-i18n="nav.contact">Kontakt</a>
            </div>
            <div class="footer-social">
                <!--<a href="#" aria-label="GitHub">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
                <a href="#" aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                <a href="#" aria-label="Twitter">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>-->
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2026 SWAYKO. <span data-i18n="footer.rights">Wszelkie prawa zastrzeżone.</span></p>
        </div>
    </footer>

    <script src="js/i18n.js"></script>
    <script src="js/main-php.js"></script>
</body>
</html>

