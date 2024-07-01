<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
-------------
traccia 01/07/2024
 CONSEGNA
Implementerete quanto visto oggi a lezione. In particolare concentriamoci sul padroneggiare:
i dati in arrivo da config
layout (con relativi @yield, @extends e @section)
le rotte (con i relativi ->name)
:roccia: MILESTONE 0
Assicuratevi di recuperare i dati dei fumetti da config("qualcosa") strutturando i dati correttamente.
Assicuratevi anche di aver importato eventuali file statici da /public usando un percorso che inizi con /
Esempio <link rel="stylesheet" href="style.css"> diventa <link rel="stylesheet" href="/style.css">
:roccia: MILESTONE 1
Create un layout di base da utilizzare in tutte le pagine. Ricordatevi gli elementi fondamentali:
Creare un layout con l'html di base, in /resources/views/layouts/nomelayout.blade.php
Prevedere nel layout almeno uno @yield("nomesegnaposto")
Modificare le vostre pagine affinche usino il layout con @extends("percorso.layout")
Customizzare il contenuto del layout per quella pagina usando @section
:roccia: MILESTONE 2
Modificate il vostro header in modo che i link vengano generati usando {{ route("nomerotta") }}
Ovviamente questo richiedete che diate il ->name alle rotte
Ora provate a usare Route::currentRouteName() per evidenziare la voce di menu attualmente attiva. E' lo stesso metodo che stampo nel mio header ma usato diversamente :occhiolino:
:regalo: BONUS 1
Se volete potete provare a creare una rotta per la pagina di dettaglio del fumetto.
Dalla rotta dovrete controllare che l'indice fornito sia un valore valido. Alcuni spunti sono intval o array_key_exists, ma ci sono tanti metodi validi. Provate una logica del tipo if(controlliOk) { return view... } else { abort(404) } :occhiolino:
Se eseguite questo bonus trovate il modo poi di linkare a questa pagina non così <a href="/comics/{{ $indice }}"> ma usando il metodo giusto.
:regalo: BONUS 2
Se volete spingervi oltre, provate a realizzare una partial per la singola card e a passargli dei dati.
Leggendo bene la documentazione scoprirete che potete lasciargli ereditare i dati o passarglieli manualmente.

Il mio live coding è qui. Mi raccomando è importante PER VOI che non vi limitiate a copiare ma invece ragionate, capiate e facciate vostri i concetti. Come fare?
Fatevi domande: da dove arriva questo dato? che struttura ha? cosa succede se gli cambio nome?
Testate modifiche e ispezionate il vostro codice finchè non vi è tutto chiaro
Usate i ticket (!)
Confrontatevi
--------
esecuzione milestone 0:
controllare che i file importati da public siano corretti(usando lo /):già fatto
assicurarsi la giusta configurazione del config(controllare se bisogna far ritornare l'array come all'inizio)
nella traccia precedente ho creato un array nel file store.php per fare in modo che nel file web.php vada a prendere l'array.
Per ora Luca ha detto che va bene, ma mi chiedo se sia poi necessario fare nell'altra maniera per richiamare meglio i dati 

milestone 1:
creazione layout base, creazione cartella layouts
nel layout andare a creare dei segnaposto con yield che verranno ripresi nei file che usano il layout
andare a modificare le pagine welcome e about con l'utilizzo di layout(quindi riducendo lo scheletro della pagina con un @extends) e andando a scrivere nei segnaposto preposti tramite l'utilizzo di @section del relativo @yield 


milestone 2:creazione di link nell'header che rimandino alle relative rotte 
vado a creare le rotte necessarie nel file web.
aggiungo il name alle rotte 
milestone 2 1/2: lavorare sul Route::getcurrentRouteName per agire sullo stile del link(es.se sono sulla pagina about, il link about sarà colorato di giallo)
