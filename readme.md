## Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)



########################################################################
### Run Server

Una vez descargado la API REST, debe ser copiada en el Web Server.
Ingresar en la raiz del proyecto descargado y ejecutar el siguiente comando:

php -S localhost:8083 -t public

Opcionalmente, pueden ejecutar el runServer.sh (contiene el comando a ejecutar), que esta en la raiz del proyecto desde la consola:

bash runServer.sh


########################################################################
### Open API WEB.

Para ver la especificacion de cada uno de los metodos de la API, debemos ingresar en el navegador URL lo siguiente:

http://localhost/apiRestLumen/apidoc/index.html


########################################################################
### Modificar URl o informaciond de los metodos:

En caso de que se hayan actualizados la informacion de los metodos del API REST, debemos actualizar el contenido de la WEB
de la API.

Para hacer esto, debemos situarnos en la raiz del proyecto y ejecutar el siguiente comando:

apidoc -i app/ -o apidoc/

Una vez realizado esto, podemos ver si se ha actualizado la informacion asociada a los metodos.

http://localhost/apiRestLumen/apidoc/index.html







