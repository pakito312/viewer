# <center>Viewer Sysview</center> <!-- omit in toc -->
<center>Auteur : Paki leonel</center>

## About Viewer
The package allows to generate the automation views according to the layouts
## Installation

Plates is available via Composer:

```
composer require viewer/sysview
```


## how to use

To use you will run the command
```
php artisan make:view name_of_view
```
If you want to add the view in a specific folder you will run the command

```
php artisan make:view folder/name_of_view
```
  - folder matches the name of the folder
  - name_of_view matches the name of the view without the extension

If you want specify layout

```
php artisan make:view folder/name_of_view --layout=name_of_layout
```
## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [pakielonel1@gmail.com](mailto:pakielonel1@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
