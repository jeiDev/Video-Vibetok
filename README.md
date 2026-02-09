# Proyecto: TiktokVideoProcessor & Webpage

Este repositorio contiene dos proyectos que trabajan juntos:

- **TiktokVideoProcessor**: Procesador en Python que descarga videos de TikTok sin marca de agua, convierte a HD/SD y extrae MP3, además de descargar metadatos del video.
- **Webpage**: Aplicación web en Laravel que ofrece la interfaz visual y se comunica con el procesador Python (colas/RabbitMQ).

Este README explica qué hace cada proyecto, cómo instalar dependencias, configurar RabbitMQ, y cómo ejecutar ambos proyectos en local y en producción (Ubuntu).

**Estructura principal**
- TiktokVideoProcessor/: código Python del procesador
- Webpage/: aplicación Laravel (frontend y backend)

**Requisitos generales**
- Git
- Docker (recomendado para servicios opcionales como RabbitMQ en desarrollo)
- Python 3.8+ (recomendado 3.10+)
- PHP 8.0+ (según versión Laravel del proyecto)
- Composer
- Node.js & npm/yarn (para assets de Laravel)

------------------------------------------------------------
**1) RabbitMQ — instalación & configuración**

Recomendado: usar Docker en desarrollo, y `rabbitmq-server` en producción (Ubuntu).

Usar Docker (desarrollo / local):

```bash
docker run -d --name rabbitmq \
  -p 5672:5672 -p 15672:15672 \
  -e RABBITMQ_DEFAULT_USER=devuser \
  -e RABBITMQ_DEFAULT_PASS=devpass \
  rabbitmq:3-management
```

Accede a la consola de administración en http://localhost:15672 (usuario/devuser:devpass).

Instalación en Ubuntu (producción):

```bash
sudo apt update
sudo apt install -y rabbitmq-server
sudo systemctl enable --now rabbitmq-server
sudo rabbitmq-plugins enable rabbitmq_management
# Crear usuario y asignar permisos (ejemplo)
sudo rabbitmqctl add_user produser prodpass
sudo rabbitmqctl add_vhost /my_vhost
sudo rabbitmqctl set_permissions -p /my_vhost produser ".*" ".*" ".*"
```

Asegura puertos en firewall: 5672 (AMQP) y 15672 (management) según necesidad.

Variables de conexión típicas (reemplazar credenciales):

- AMQP URL: `amqp://user:pass@host:5672/vhost`

------------------------------------------------------------
**2) TiktokVideoProcessor (Python)**

Descripción: descarga videos de TikTok sin marca de agua, genera versiones HD/SD/MP3, guarda archivos y publica resultados/estatus vía RabbitMQ.

Ubicación: `TiktokVideoProcessor/`

Pasos básicos (local / desarrollo):

1. Crear y activar un entorno virtual (recomendado):

```bash
python -m venv .venv
# Windows
.venv\Scripts\activate
# macOS / Linux
source .venv/bin/activate
```

2. Instalar dependencias:

```bash
pip install -r TiktokVideoProcessor/requirements.txt
```

3. Configurar variables de entorno (ejemplo `.env` o export):

- `RABBITMQ_URL=amqp://devuser:devpass@localhost:5672/`
- `OUTPUT_DIR=downloads/`
- `LOG_LEVEL=INFO`
- Otros parámetros: API keys, tiempo de conversión, etc. (revisar `TiktokVideoProcessor/config.py` o `main.py`).

4. Ejecutar el procesador (modo desarrollo):

```bash
python TiktokVideoProcessor/main.py
```

Notas de producción (Ubuntu):

- Crear virtualenv igual que en desarrollo.
- Usar un servicio `systemd` para ejecutar el consumidor/worker de forma persistente. Ejemplo de unidad `systemd`:

```ini
[Unit]
Description=TiktokVideoProcessor worker
After=network.target

[Service]
User=ubuntu
WorkingDirectory=/path/to/project/TiktokVideoProcessor
Environment="PATH=/path/to/project/TiktokVideoProcessor/.venv/bin"
ExecStart=/path/to/project/TiktokVideoProcessor/.venv/bin/python main.py
Restart=always

[Install]
WantedBy=multi-user.target
```

- Habilitar y arrancar: `sudo systemctl enable --now tiktokprocessor.service` (ajustar nombres y paths).

------------------------------------------------------------
**3) Webpage (Laravel)**

Descripción: interfaz web en Laravel que muestra resultados y se comunica con el procesador Python a través de colas (RabbitMQ) y websockets.

Ubicación: `Webpage/`

Pasos básicos (local / desarrollo):

1. Copiar `.env` desde `.env.example` y configurar:

- `DB_*` (base de datos)
- `RABBITMQ_HOST`, `RABBITMQ_PORT`, `RABBITMQ_USER`, `RABBITMQ_PASS` (o `BROADCAST_DRIVER`, `PUSHER_*` según configuración)

2. Instalar dependencias PHP y JS:

```bash
cd Webpage
composer install --no-interaction --prefer-dist
npm install
npm run dev   # o `npm run build` para producción
php artisan key:generate
php artisan migrate --force   # si aplica
php artisan storage:link
```

3. Comandos importantes (debe correr siempre):

- `php artisan tiktok:listen-results`  # escucha resultados desde RabbitMQ y procesa/almacena
- `php artisan websockets:serve`       # servidor de websockets (para Broadcaster / realtime)

En desarrollo puede ejecutarlos en terminales separadas o usar `supervisor`/`systemd` en producción.

Ejecutar localmente (rápido):

```bash
php artisan serve --host=127.0.0.1 --port=8000
# En otra terminal:
php artisan tiktok:listen-results
php artisan websockets:serve
```

Producción (Ubuntu) — puntos clave:

- Servidor web: Nginx + PHP-FPM. Configurar sitio apuntando a `public/`.
- Queue / Listeners: usar `supervisor` o `systemd` para ejecutar `php artisan tiktok:listen-results` y otros `queue:work`.
- Websockets: ejecutar `php artisan websockets:serve` como servicio con `systemd` o `supervisor`.

Ejemplo unit `systemd` para el comando websockets:

```ini
[Unit]
Description=Laravel Websockets
After=network.target

[Service]
User=www-data
WorkingDirectory=/var/www/Webpage
ExecStart=/usr/bin/php /var/www/Webpage/artisan websockets:serve
Restart=always

[Install]
WantedBy=multi-user.target
```

Y para `tiktok:listen-results` reemplazando el comando ExecStart.

------------------------------------------------------------
**4) Flujo operativo (alto nivel)**

1. Un usuario solicita procesar un video desde la `Webpage` (frontend).
2. `Webpage` encola un trabajo/publica un mensaje en RabbitMQ con la URL del video.
3. `TiktokVideoProcessor` consume la cola, descarga el video, genera HD/SD/MP3, guarda archivos en `downloads/` y publica el resultado/estado en otra cola o retorna metadata.
4. `Webpage` (escuchando con `php artisan tiktok:listen-results`) recibe resultados y actualiza UI / base de datos; además puede emitir eventos por websockets a los clientes.

------------------------------------------------------------
**5) Checklist rápido — Desarrollo local**

- [ ] Correr RabbitMQ (Docker) o servicio local
- [ ] Configurar `.env` en `Webpage/` y variables en `TiktokVideoProcessor`
- [ ] Crear virtualenv e instalar dependencias Python
- [ ] `composer install` y `npm install` en `Webpage/`
- [ ] Ejecutar `php artisan migrate`, `php artisan storage:link`
- [ ] Ejecutar `php artisan tiktok:listen-results` y `php artisan websockets:serve`
- [ ] Ejecutar `python TiktokVideoProcessor/main.py` (o el comando worker que corresponda)

------------------------------------------------------------
**6) Sugerencias de despliegue**

- Usar Docker Compose en producción o staging para orquestar Nginx, PHP-FPM, Redis (si necesario), RabbitMQ y el servicio Python.
- Registrar servicios persistentes con `systemd` o `supervisord`.
- Habilitar HTTPS (Let’s Encrypt) en Nginx.
- Monitorizar colas y logs, configurar rotación de logs.

------------------------------------------------------------
**7) Variables de entorno de ejemplo**

Webpage `.env` (fragmento):

```
APP_NAME=MyApp
APP_ENV=local
APP_URL=http://localhost:8000

# RabbitMQ
RABBITMQ_HOST=127.0.0.1
RABBITMQ_PORT=5672
RABBITMQ_USER=devuser
RABBITMQ_PASS=devpass

# Broadcasting / Websockets (ejemplo si usa pusher driver)
BROADCAST_DRIVER=pusher
PUSHER_APP_ID=...
PUSHER_APP_KEY=...
PUSHER_APP_SECRET=...
PUSHER_APP_CLUSTER=mt1
```

TiktokVideoProcessor `.env` (ejemplo):

```
RABBITMQ_URL=amqp://devuser:devpass@127.0.0.1:5672/
OUTPUT_DIR=downloads/
LOG_LEVEL=INFO
# API/keys u otros ajustes
```

------------------------------------------------------------
**8) Troubleshooting rápido**

- Si no conectan colas: probar `telnet host 5672` o revisar `rabbitmq-server` logs.
- Revisar credenciales y vhost en RabbitMQ.
- Asegurarse de que `php artisan websockets:serve` usa la misma configuración de broadcaster que el frontend.

------------------------------------------------------------
**9) Próximos pasos recomendados**

- Añadir ejemplo mínimo de `.env.example` en ambos proyectos con variables necesarias.
- Documentar los nombres de colas y el payload (formatos de mensajes) entre `Webpage` y `TiktokVideoProcessor`.
- Crear `docker-compose.yml` para el conjunto (PHP-FPM, Nginx, RabbitMQ, Python worker, DB) para despliegue reproducible.

------------------------------------------------------------
Si quieres, genero:
- Un `docker-compose.yml` para desarrollo con RabbitMQ, PHP-FPM, Nginx y worker Python.
- Un archivo `systemd` de ejemplo ya parametrizado para tu proyecto en Ubuntu.

Dime cuál de las dos opciones quieres que genere ahora.
