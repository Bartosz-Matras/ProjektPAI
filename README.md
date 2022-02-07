## Spis treści:
* [Link do repozytorium](#link-do-repo)
* [Technologie](#technologie)
* [Uruchomienie projektu](#uruchomienie-projektu)
* [Opis projektu](#opis-projektu)
* [Zrzuty ekranu](#zrzuty-ekranu)

## Link do repozytorium
* https://github.com/Bartosz-Matras/ProjektPAI

## Technologie
* PHP
* HTML
* CSS
* Docker
* JavaScript
* PostgreSQL

## Uruchomienie projektu
Projekt uruchomiamy korzystajac z narzędzia Docker oraz polecenia ```docker-compose up``` wpisanego w konsoli w głownym katalogu projektu. Aplikacja uruchamia się na 
lokalnym serwerze http://localhost:8080 .

## Opis projektu
Aplikacja TRAIN stworzona jest dla osób które poszukują regionalnych smaków i wyrobów. Ludzię mogą wystawić ogłoszenie o sprzedaży lub oddaniu swoich swojskich wyrobów 
zostawiając numer teleofnu w ogłoszeniu. W aplikacji jest możliwość filtrowania ogłoszen za pomocą tagów oraz na mape naniesione są piny odnośnie lokalizacji danego ogłoszenia.
Użytkownik może dodać swój własny pin, należwy wówczas wypełnić wyświetlony formularz.

1. Widok logoawania 
  - składa się z formularzu logowania oraz formularzu rejestracji którym wymagane są niezbędne informacje: login, hasło, imie, naziwsko, email, numer telefonu
  
2. Widok projektu
  - składa sie z głownego okna projektu na którym znajduą się filtry, ogłoszenia oraz mapa.
  - Na mapie znajduje się przycisk dodania ogłoszenia w którym należy podać: opis ogłoszenia, tytuł ogłoszenia, wybrać tagi oraz dołączyć zdjęcie. Aby uzupełnić adres 
  oraz współrzędne należy kliknąć na mapie w wybrane miejsce.
  - projekt zawiera również przycisk profilu. Po naciśnięciu wyświetla się popup w którym użytkownik może edytować swoje dane.
  - projekt zawiera przycisk opcji. Po naciśnięciu wyświetlaja się opcje.
  
## Zrzuty ekranu
