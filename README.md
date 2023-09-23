<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Sobre el repositorio
Este proyecto contiene una API REST con autenticación mediante Sanctum middleware.


Hay 4 productos cargados en SQlite a modo de base de datos, pudiendo acceder mediando la ruta products detallada mas abajo. Pero para esto es necesario previamente estar logueado con usuario, caso contrario no se podrá acceder a la ruta.


## Caso de uso

1 - clonar repositorio

2 - Para ejecutarlo es necesario tener instalado PHP 8, Composer y laravel 9 en adelante.

3 - Ejecutar dentro del directorio el comando: "php artisan serve" desde una terminal, esto iniciará el servidor.

4 - Utilizar los endpoints siguientes desde Postman si se prefiere.

5 - Loguearse con mail: example@example.com + password: 12345678

6 - luego de esto se debe copiar el Bearer token otorgado por el inicio de sesion y pegarlo en la conuslta GET de products para acceder a la lista

7 - Ejecutar deslogueo, lo cual tambien eliminada el token de acceso, por lo tanto deberá generarse nuevamente con 'login' para reiterar.

8 - Adicionalmente se puede agregar otro user, mediante el endpoint 'register' y ralizar las pruebas con el nuevo usuario creado.


## Endpoints disponibles:


POST | http://127.0.0.1:8000/api/login

GET  | http://127.0.0.1:8000/api/products

GET  | http://127.0.0.1:8000/api/logout

POST | http://127.0.0.1:8000/api/register
