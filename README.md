# SWAYKO Portfolio Website

Strona internetowa - portfolio produktów dla firmy programistycznej SWAYKO.

## 🚀 Funkcje

- **Dwujęzyczność** - obsługa języka polskiego i angielskiego z automatycznym zapisem preferencji
- **Dynamiczne produkty** - łatwe dodawanie produktów poprzez edycję pliku JSON
- **Responsywny design** - optymalizacja dla wszystkich urządzeń
- **Nowoczesny UI** - ciemny motyw z gradientowymi akcentami
- **PHP** - produkty renderowane po stronie serwera

## 📁 Struktura projektu

```
swayko.com/
├── index.php           # Strona główna
├── products.php        # Podstrona z produktami
├── css/
│   └── style.css       # Style CSS
├── js/
│   ├── i18n.js         # System tłumaczeń
│   ├── main-php.js     # Główna logika
│   └── products-php.js # Logika strony produktów
├── data/
│   └── products.json   # Dane produktów
├── appstore/           # Strony wsparcia i polityki prywatności dla aplikacji iOS
│   ├── MyWeightTracking/
│   │   ├── support.html
│   │   ├── support_pl.html
│   │   ├── privacyPolicy.html
│   │   └── privacyPolicy_pl.html
│   ├── BrewingCalculator/
│   │   ├── support.html
│   │   ├── support_pl.html
│   │   ├── privacyPolicy.html
│   │   └── privacyPolicy_pl.html
│   └── ClickGame/
│       ├── support.html
│       ├── support_pl.html
│       ├── privacyPolicy.html
│       └── privacyPolicy_pl.html
└── README.md           # Ten plik
```

## 📝 Jak dodać nowy produkt

Aby dodać nowy produkt, edytuj plik `data/products.json`. Każdy produkt ma następującą strukturę:

```json
{
    "id": "unique-product-id",
    "name": {
        "pl": "Nazwa produktu po polsku",
        "en": "Product name in English"
    },
    "description": {
        "pl": "Opis produktu po polsku...",
        "en": "Product description in English..."
    },
    "category": "mobile",
    "technologies": ["React Native", "Node.js", "MongoDB"],
    "icon": "📱",
    "image": "images/product-screenshot.jpg",
    "url": "https://example.com",
    "supportUrl": "appstore/AppName/support.html",
    "privacyPolicyUrl": "appstore/AppName/privacyPolicy.html",
    "featured": true
}
```

### Pola produktu:

| Pole | Typ | Opis |
|------|-----|------|
| `id` | string | Unikalny identyfikator produktu |
| `name` | object | Nazwa produktu w obu językach (pl/en) |
| `description` | object | Opis produktu w obu językach (pl/en) |
| `category` | string | Kategoria: `mobile`, `web`, `cloud`, `custom` |
| `technologies` | array | Lista użytych technologii |
| `icon` | string | Emoji ikona (wyświetlana gdy brak obrazka) |
| `image` | string | Ścieżka do obrazka produktu (opcjonalne) |
| `url` | string | Link do projektu/demo (opcjonalne) |
| `supportUrl` | string | Link do strony wsparcia dla aplikacji iOS (opcjonalne) |
| `privacyPolicyUrl` | string | Link do polityki prywatności dla aplikacji iOS (opcjonalne) |
| `featured` | boolean | Czy wyświetlać na stronie głównej |

### Kategorie produktów:

- `mobile` - Aplikacje mobilne (iOS/Android)
- `web` - Aplikacje webowe
- `cloud` - Rozwiązania chmurowe
- `custom` - Dedykowane systemy (ERP, CRM, itp.)

## 📱 Strony App Store (iOS)

Dla aplikacji iOS wymagane są strony wsparcia i polityki prywatności. Znajdują się one w folderze `appstore/`.

### Struktura dla nowej aplikacji:

1. Utwórz folder z nazwą aplikacji w `appstore/`
2. Dodaj 4 pliki HTML:
   - `support.html` - strona wsparcia (EN)
   - `support_pl.html` - strona wsparcia (PL)
   - `privacyPolicy.html` - polityka prywatności (EN)
   - `privacyPolicy_pl.html` - polityka prywatności (PL)

3. Zaktualizuj `products.json`:
```json
{
    "supportUrl": "appstore/NazwaAplikacji/support.html",
    "privacyPolicyUrl": "appstore/NazwaAplikacji/privacyPolicy.html"
}
```

Strony używają spójnego ciemnego motywu z kolorami akcentu dostosowanymi do charakteru aplikacji.

## 🖼️ Dodawanie obrazków produktów

1. Utwórz folder `images/` w głównym katalogu
2. Dodaj obrazki produktów (zalecany rozmiar: 800x500px, format: JPG/PNG/WebP)
3. Zaktualizuj pole `image` w `products.json`

```json
{
    "image": "images/my-product.jpg"
}
```

## 🌐 Uruchomienie lokalne

Strona wymaga serwera PHP. W terminalu uruchom:

```bash
cd swayko.com
php -S localhost:8000
```

Następnie otwórz: http://localhost:8000

### Instalacja PHP na macOS (przez Homebrew):
```bash
brew install php
```

## 🎨 Personalizacja

### Zmiana kolorów

Edytuj zmienne CSS w pliku `css/style.css`:

```css
:root {
    --color-accent: #00ff88;           /* Główny kolor akcentu */
    --color-accent-secondary: #00d4ff; /* Dodatkowy kolor akcentu */
    --color-bg: #0a0a0b;               /* Kolor tła */
    /* ... */
}
```

### Dodawanie tłumaczeń

Edytuj plik `js/i18n.js` i dodaj nowe klucze do obiektów `pl` i `en`:

```javascript
const translations = {
    pl: {
        'my.new.key': 'Tekst po polsku',
        // ...
    },
    en: {
        'my.new.key': 'English text',
        // ...
    }
};
```

Użyj w HTML:
```html
<span data-i18n="my.new.key">Tekst po polsku</span>
```

## 📱 Responsywność

Strona jest w pełni responsywna:
- Desktop: > 1024px
- Tablet: 768px - 1024px
- Mobile: < 768px

## 🔧 Technologie

- HTML5
- CSS3 (Custom Properties, Grid, Flexbox)
- Vanilla JavaScript (ES6+)
- Google Fonts (Syne, Instrument Serif)

## 📄 Licencja

© 2025 SWAYKO. Wszelkie prawa zastrzeżone.

