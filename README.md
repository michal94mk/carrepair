# Car Repair - Strona Warsztatu Samochodowego

Prosta, responsywna strona internetowa dla warsztatu samochodowego "Car Repair", wykonana w czystym PHP.

## Funkcjonalności

- Strona główna z karuzelą, sekcjami "o nas", usługami i formularzem kontaktowym
- Podstrona O nas z informacjami o firmie
- Podstrona Usługi z ofertą warsztatu
- Galeria zdjęć z Lightbox
- Formularz kontaktowy z walidacją
- Strona kontaktowa z danymi firmy i mapą
- Responsywny design (mobilny, tablet, desktop)

## Technologie

- HTML5
- CSS3
- JavaScript (vanilla)
- PHP 7+
- Bootstrap 5
- Lightbox.js
- jQuery

## Struktura projektu

```
/carrepair
├── config/                # Pliki konfiguracyjne
│   └── config.php         # Główna konfiguracja
├── css/                   # Style CSS
│   └── style.css          # Główny arkusz stylów
├── images/                # Obrazy i grafiki
├── includes/              # Pliki PHP do dołączania
│   ├── functions.php      # Funkcje pomocnicze
│   ├── init.php           # Plik inicjalizujący
│   └── messages.php       # Obsługa komunikatów
├── js/                    # Skrypty JavaScript
│   └── main.js            # Główny plik JavaScript
├── layouts/               # Układ strony
│   └── layout.php         # Główny szablon
├── pages/                 # Podstrony
│   ├── 404.php            # Strona błędu
│   ├── home.php           # Strona główna
│   ├── aboutus.php        # O nas
│   ├── services.php       # Usługi
│   ├── gallery.php        # Galeria
│   ├── contact.php        # Kontakt
│   └── send_form.php      # Obsługa formularza
├── index.php              # Plik wejściowy
└── README.md              # Dokumentacja
```

## Instrukcja instalacji

1. Sklonuj lub pobierz repozytorium
2. Umieść pliki na serwerze obsługującym PHP 7+
3. Upewnij się, że katalog jest dostępny przez serwer WWW
4. Otwórz stronę w przeglądarce

## Dodatkowe informacje

Projekt wykorzystuje:
- Czysty PHP bez framework'ów
- Własny system routingu
- Własną obsługę formularzy i komunikatów
- Bootstrap 5 dla interfejsu użytkownika
- Lightbox do galerii

## Autor

Projekt stworzony jako demonstracja umiejętności programowania w czystym PHP oraz projektowania responsywnych stron internetowych.