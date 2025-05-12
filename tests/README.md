# Car Repair Website - Podstawowe Testy

Ten katalog zawiera podstawowe testy dla aplikacji Car Repair.

## Struktura testów

Testy są zorganizowane w prosty sposób:

- `FunctionsTest.php` - testy jednostkowe dla funkcji pomocniczych
- `ContactFormTest.php` - testy walidacji formularza kontaktowego
- `Setup/` - zawiera bazowe klasy testowe i pomocnicze

## Wymagania

- PHP 7.4 lub nowszy
- Composer
- PHPUnit 9.5 lub nowszy

## Instalacja

1. Zainstaluj zależności z katalogu głównego projektu:

```bash
composer install
```

## Uruchamianie testów

Z katalogu głównego projektu, uruchom:

```bash
composer test
```

Lub uruchom PHPUnit bezpośrednio:

```bash
vendor/bin/phpunit
```

Aby uruchomić określony plik testowy:

```bash
vendor/bin/phpunit tests/FunctionsTest.php
```

Aby uruchomić testy z raportem pokrycia:

```bash
vendor/bin/phpunit --coverage-html coverage
```

Następnie otwórz `coverage/index.html` w przeglądarce, aby zobaczyć raport pokrycia.

## Rozwiązywanie problemów

### Funkcje nie są znalezione

Jeśli napotkasz błędy typu "Call to undefined function escape()" lub podobne:

1. Upewnij się, że w pliku `composer.json` masz poprawny autoload:

```json
"autoload": {
    "files": [
        "includes/functions.php",
        "includes/init.php"
    ]
}
```

2. Odśwież autoloader Composera:

```bash
composer dump-autoload
```

3. Sprawdź, czy pliki `includes/functions.php` i `includes/init.php` istnieją i zawierają odpowiednie funkcje.

### Problemy z testami formularza

Jeśli testy formularza nie przechodzą:

1. Sprawdź czy kod walidacji w testach jest zgodny z aktualnym kodem w `pages/send_form.php`
2. Upewnij się, że sesja PHP jest poprawnie inicjowana w `Setup/TestCase.php`

### Windows - uruchamianie testów

W systemie Windows użyj:

```bash
vendor\bin\phpunit
```

lub:

```bash
php vendor\bin\phpunit
```

## Dobre praktyki testowania PHP

1. **Testy powinny być niezależne** - każdy test powinien działać niezależnie od innych
2. **Używaj asercji** - upewnij się, że testujesz konkretne wyniki
3. **Testuj konkretne scenariusze** - np. poprawne i niepoprawne dane wejściowe
4. **Testuj głównie logikę biznesową** - skupiaj się na testowaniu funkcji, które zawierają logikę

## Pisanie nowych testów

Wszystkie klasy testowe powinny rozszerzać klasę `Tests\Setup\TestCase`, która zapewnia wspólną konfigurację i narzędzia.

Przykład:

```php
<?php

namespace Tests;

use Tests\Setup\TestCase;

class MojTest extends TestCase
{
    public function testPrzyklad()
    {
        $this->assertTrue(true);
    }
}
``` 