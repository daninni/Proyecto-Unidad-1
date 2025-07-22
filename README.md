<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Proyecto Unidad 1

Este proyecto es una aplicación Laravel que gestiona proyectos y consulta el valor de la UF del día.

## Instalación

1. Clona el repositorio y entra al directorio del proyecto.
2. Instala las dependencias:
   ```sh
   composer install
   ```
3. Ejecuta las migraciones:
   ```sh
   php artisan migrate
   ```
4. Inicia el servidor de desarrollo:
   ```sh
   php artisan serve
   ```

## Endpoints API

Las rutas API están disponibles bajo el prefijo `/api`. Ejemplo de uso con la URL base `http://proyecto-unidad-1.test`:

- **Listar proyectos:**  
  `GET /api/listarProyectos`

- **Agregar proyecto:**  
  `POST /api/agregarProyecto`

- **Obtener proyecto por ID:**  
  `GET /api/obtenerProyectoId/{id}`

- **Actualizar proyecto por ID:**  
  `PUT /api/actualizarProyectoId/{id}`

- **Eliminar proyecto por ID:**  
  `DELETE /api/eliminarProyectoId/{id}`

- **Obtener UF del día:**  
  `GET /api/uf-hoy`

## Ejemplo de petición

```sh
curl http://proyecto-unidad-1.test/api/listarProyectos
```

## Estructura principal

- Controlador principal: [`App\Http\Controllers\proyectoController`](proyecto1/proyecto1/app/Http/Controllers/proyectoController.php)
- Modelo de proyectos: [`App\Models\Proyecto`](proyecto1/proyecto1/app/Models/Proyecto.php)
- Servicio UF: [`App\Services\UfService`](proyecto1/proyecto1/app/Services/UfService.php)

## Tests

Ejecuta los tests con:

```sh
php artisan test
```

##