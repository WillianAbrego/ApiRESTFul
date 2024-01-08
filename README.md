# Laravel API RESTful

Un proyecto Apirestful sencillo que consiste en la creación de una API (Interfaz de Programación de Aplicaciones) siguiendo los principios de arquitectura REST (Transferencia de Estado Representacional). Esta API permite la comunicación y transferencia de datos entre diferentes aplicaciones de manera eficiente y escalable. Utilizando métodos HTTP estándar (como GET, POST, PUT, DELETE), la API proporcionaría acceso a recursos específicos mediante endpoints bien definidos. La implementación se centra en la simplicidad y la facilidad de uso, brindando funcionalidades básicas para la manipulación de datos a través de solicitudes HTTP.

## Pre-Requisitos

- Sistema operativo Window 10
- Postman for Windows Version 10.21.11
- Xampp Version 3.3.0
- MySQL Version 8.0.2
- Laravel Framework 9.52.16
- Visual Studio Code
- Composer version 2.4.4

## Instalación

Clonar repositorio 
```bash
git clone https://github.com/WillianAbrego/ApiRESTFul.git
```
Ingresar al folder
```bash
cd ApiRESTFul
```
Abrir con visual studio code
```bash
code .
```

Actualizar composer 
```bash
composer install or composer update
```
Copiar archivo .env.example y renombrarlo como .env
```bash
cp .env.example .env
```
Realizar las siguientes configuraciones en archivo .env
 ```
 DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={name_db}
DB_USERNAME={user_db}
DB_PASSWORD={pass_db}
 ```
 ```bash
php artisan key:generate
```
***
Reiniciar la base de datos de la aplicación Laravel
```bash
php artisan migrate:fresh --seed
```

