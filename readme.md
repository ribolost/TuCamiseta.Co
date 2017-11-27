# TuCamiseta.co
## Tienda online de diseño personalizado de estampas
### Pasos para ejecutar la aplicación:

1. Entrar desde la línea de comandos a la carpeta del proyecto y ejecutar: composer install.
2. Crear una base de datos propia.
3. Crear el archivo .env y en el configurar la conexión a la base de datos creada.
```[javascript]
    DB_DATABASE=bdtucamiseta
    DB_USERNAME=admin 
    DB_PASSWORD=admin
```
4. Crear la clave de seguridad con el comando: php artisan key:generate.
5. Ejecutar el comando: php artisan migrate:install, para que crear la tabla de las migraciones
6. Ejecutar el comando php artisan migrate, para que crear las tablas en la base de datos.
7. Ejecutar el comando: php artisan db:seed, para cargar los datos de prueba en las tablas correspondientes.
8. Ejecutar el compando: php artisan serve, para hacer correr la aplicación con el servidor que viene incluido en Laravel.
