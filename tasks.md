# Tasks

- [x] Zamień nazwy wszystkich plików tak aby były w języku angielskim
- [x] Przygotuj konfigurację bazującą na tablicach która pozwoli zastąpić instrukcję switch w pliku index.php, na rzecz wyszukiwania odpowiedniego routingu w tablicy
- [x] Rozplanuj treść strony z elementami: nagłówek, treść, stopka, zadbaj o responsywność strony, aby przyspieszyć pracę z css możesz wykorzystać takie narzędzia jak tailwindcss lub bootstrap
- [x] Stwórz na stronie trzy artykuły o tytułach i adresach lorem, ipsum oraz dolor i wklej tam treść lorem ipsum
- [x] Stwórz podstronę formularze, na której po wejściu wyświetli się lista formularzy przesłanych za pomoca formularza kontaktowego, każdy element listy powinien być podlinkowany do podstrony na której będą szczegoły przesłanego formularza, czyli: tytuł, data oraz treść
- [x] Przygotuj podstronę na której będzie prezentowana lista artykułów (lorem, ipsum, dolor)
- [x] Przygotuj menu które znajdzie się w nagłówku strony, menu powinno zawierać linki do takich podstron jak strona główna, kontakt, lista formularzy, lista artykułów
- [x] Przygotuj formularz dzięki któremu będzie można dodać nowy artykuł, powinien zostać on zapisany w katalogu article, formularz powinien posiadać dwa pola tytuł, oraz treść
- [x] Rozszerz formularz dodawania artykułu o opcję wgrania artykułu z pliku (format html lub txt)
- [x] Przygotuj możliwość logowania na stronie
- [x] Zadbaj aby formularz dodawania nowych artukułów był dostępny jedynie dla zalogowanego użytkownika
- [x] Dodaj podstronę wylogowania użytkownika, podepnij ją pod menu
- [x] Przenieś dane logowania użytkowników do osobnej tablicy w pliku config.php, tak aby można było przechowywać w jednym miejscu dane dostępowe wielu użytkowników, obsłuż tą formę przechowywania danych
- [x] Podepnij mechanizm szyfrowania haseł użytkowników (może być algorytmem md5, nie jest bezpieczny, ale do prezentacji idei wystarczy), tak aby hasła nie były przechowywane jako plain text
- [x] Dodaj powiadomienia we wszystkich elementach stronki, na zapisaniu formularza, wylogowaniu, próbie dodania artykułu, po pomyślnym dodaniu artykułu
- [x] Zabezpiecz dodawanie nowego artykułu aby wgranie artykułu o tym samym tytule nie powodowało nadpisania instniejącego, w tym przypadku użytkownik powinien dostać komunikat, że taki artykuł już istnieje i zostać przekierowany z powrotem na formularz dodawania artykułów
- [x] przenieś dane użytkowników do pliku users.csv
- [x] przygotuj rejestrację użytkowników
- [x] przygotuj opcję edycji menu przez zalogowanych użytkowników, w tym celu przygptuj plik menu.csv z którego będzie pobierane menu
- [x] aplikacja ma wiele fragmentów powielającego się kodu, aby tego uniknąć stwórz kilka funkcji: funkcję do pobierania listy plików z obrębu katalogu, funkcję do przekierowań, funkcję do zapisu treści do pliku
- [] ostyluj wszystkie formularze używając tailwind css
- [x] dodaj autoloader
- [] rozdziel klasę repository na trzy oddzielne
