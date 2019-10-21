<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).



----

 
```
Documentation PHP

Fichier de base
installation basique laravel -> doc
création serveur dès le début
composer.json = "sommaire" du projet"
obliger de faire "composer install"
pour se mettre en dev et pas en prod (pour utiliser des lib et tester)
pour passer en prod mettre "APP_ENV" du fichier .env
package.json pour les librairies node

Dossier de base
image -> storage
créer par commande "php artisan make"
```

# **Environnement Laravel**

**Sommaire**

## Installations requises

* Installer Visual Code Studio : https://code.visualstudio.com/download
* Installer et utiliser composer :
    * Avec Windows : https://getcomposer.org/Composer-Setup.exe
    * Installation manuelle : https://getcomposer.org/doc/faqs/how-to-install-composer-programmatically.md
* Installer un serveur web et une base de donnée :
    * Je propose directement xampp qui fournira les deux : https://www.apachefriends.org/fr/download.html (à la racine de votre disque)
    * Ou installer MySQLServer : 
* Installer PHP : https://www.php.net/manual/fr/install.php
* Installer Homestead : https://apical.xyz/fiches/travailler_avec_laravel/installation_de_homestead_sous_windows_pour_developper_en_laravel

Prêt pour débuter Laravel

## Laravel

Tout d'abord il va nous falloir installer les pré-requis via l'installateur laravel pour pouvoir créer un nouveau projet.
Si vous utilisez xampp, installer laravel parmis ces dossiers.

```composer global require laravel/installer```

```laravel new project```

Ou en utilisant directement le composer

```composer create-project --prefer-dist laravel/laravel project```

Allumer xampp, connectez votre serveur mysql et apache. 

En lançant dans votre composer ou votre invité de commande ```php artisan serve```, vous lancez votre serveur local que vous pouvez afficher avec : `http://localhost:8000`

A ce stade, vous pouvez naviguer dans les dossiers laravel afin de trouver le fichier php de votre local server
