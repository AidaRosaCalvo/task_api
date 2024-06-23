# task_api

Este repositorio contiene la API desarrollada en Laravel para el proyecto de lista de tareas (ToDo). La API proporciona endpoints para agregar tareas, eliminarlas, marcarlas como realizadas y ver los detalles de una tarea específica. Esta API es consumida por una aplicación frontend desarrollada en Vue 3 que se encuentra en otro repositorio de tu cuenta.

## Características

- **Agregar Tarea**: Endpoint para agregar una nueva tarea.
- **Eliminar Tarea**: Endpoint para eliminar una tarea existente.
- **Marcar como Realizada**: Endpoint para cambiar el estado de una tarea a "realizada".
- **Ver Detalles de Tarea**: Endpoint para obtener los detalles de una tarea específica.

## Tecnologías Utilizadas

- **Laravel**: Framework principal para la construcción de la API.
- **MySQL**: Base de datos para almacenar las tareas (puede ser configurada a otra base de datos según las necesidades).

## Requisitos Previos

- PHP 7.3 o superior
- Composer
- Servidor de base de datos (MySQL, PostgreSQL, etc.)

## Instalación

1. Clona el repositorio:
    ```sh
    git clone https://github.com/AidaRosaCalvo/task_api.git
    cd task_api
    ```

2. Instala las dependencias de Laravel:
    ```sh
    composer install
    ```

3. Configura el archivo `.env`:
    ```plaintext
    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=base64:...
    APP_DEBUG=true
    APP_URL=http://localhost

    LOG_CHANNEL=stack

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_base_de_datos
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_contraseña

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    MEMCACHED_HOST=127.0.0.1

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null

    AWS_ACCESS_KEY_ID=
    AWS_SECRET_ACCESS_KEY=
    AWS_DEFAULT_REGION=us-east-1
    AWS_BUCKET=

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_APP_CLUSTER=mt1

    MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
    ```

4. Genera la clave de la aplicación:
    ```sh
    php artisan key:generate
    ```

5. Ejecuta las migraciones para crear las tablas en la base de datos:
    ```sh
    php artisan migrate
    ```

6. Inicia el servidor de desarrollo:
    ```sh
    php artisan serve
    ```

    La API estará disponible en `http://localhost:8000`.

## Endpoints

### Listar Tareas

```http
GET /api/tasks
```
Devuelve una lista de todas las tareas.

### Crear Tarea

```http
POST /api/tasks
```
Crea una nueva tarea.
- **Parámetros**: `title`, `description`

### Ver Detalles de una Tarea

```http
GET /api/tasks/{id}
```
Devuelve los detalles de una tarea específica.

### Actualizar Tarea

```http
PUT /api/tasks/{id}
```
Actualiza los detalles de una tarea.
- **Parámetros**: `title`, `description`, `completed`

### Eliminar Tarea

```http
DELETE /api/tasks/{id}
```
Elimina una tarea específica.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir, por favor sigue los siguientes pasos:

1. Haz un fork del repositorio.
2. Crea una rama para tu característica (`git checkout -b feature/nueva-caracteristica`).
3. Realiza tus cambios (`git commit -m 'Añadir nueva característica'`).
4. Sube tus cambios a tu fork (`git push origin feature/nueva-caracteristica`).
5. Abre un pull request.

## Licencia

El marco Laravel es un software de código abierto con licencia [licencia MIT] (https://opensource.org/licenses/MIT).
