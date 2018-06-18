# Proyecto Minuta
El proyecto minuta consiste en una aplicación para registrar y agendar reuniones.

## Instalación del proyecto
Para la instalación del proyecto se ejecutan los siguientes comandos

### Composer
Contiene todas las dependencias relacionadas con laravel.
```
  composer install
```

### Node
Realiza la instalacion de herramientas para el front-end. La herramienta mas importante, es webpack,ya que reduce la cantidad de archivos css y javascript.
```
npm install
```

### Migrations
Laravel cuenta con un sistema de migraciones para la base de datos de manera sencilla y optimizada. para instalar la base de datos se realizan los siguientes pasos:

* Configurar el archivo .env
  * Crear una copia del archivo .env.example y escribir el nombre y la direccion del servidor de base de datos


* Crear la base de datos (Desde la terminal de mysql)

```
> CREATE DATABASE minutos
```
* Posteriormente hay que ejecutar las migraciones
```
php artisan migrate --seed
```
## Entorno de ejecucion
Para ejecutar el proyecto, por comodidad, se lanza un servidor para desarrollo con el siguiente comando:
```
php artisan serve
```
Ese comando lanza un servidor en la siguiente direccion **localhost:8000**.

### Generar Clave
Antes de comenzar a trabajar con laravel, hay que ejecutar el siguiente comando para generar una clave para el proyecto:
```
php artisan key:generate
```

## Laravel mix
Laravel Mix proporciona una API para compilar archivos comunes de css y javascript. Se utiliza web pack para empaquetar los módulos de css y js del proyecto.

Para ejecutar web pack, se utilizan el siguiente comando:
```
//Ejecutar todas las tareas de compilacion...
npm run dev

// Obtener todos los archivos en su version minificada.
npm run production

//Compilar los nuevos cambios
npm run watch
```


