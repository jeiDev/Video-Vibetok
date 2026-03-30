# TiktokDownloaderPython

Este proyecto permite descargar videos de TikTok y gestionar tareas de procesamiento usando Flask y RabbitMQ.

## Configuración

1. **Variables de entorno**
   - Copia el archivo `.env.example` como `.env` y ajusta los valores según tu entorno.
   - Las variables principales son:
     - `DOWNLOADS_ROOT`: Carpeta donde se guardan los videos descargados.
     - `MAX_CONCURRENT_TASKS`: Número máximo de tareas concurrentes.
     - `EXPIRATION_SECONDS`: Tiempo de expiración de los archivos descargados (en segundos).
     - `CLEANUP_INTERVAL`: Intervalo de limpieza automática (en segundos).
     - `RABBIT_HOST`, `QUEUE_TASKS`, `QUEUE_RESULTS`: Configuración de RabbitMQ.
     - `FLASK_HOST`, `FLASK_PORT`: Configuración del servidor Flask.
     - `IS_PRODUCTION`: Modo producción (True/False).

2. **Instalación de dependencias**
   - Instala las dependencias con:
     ```bash
     pip install -r requirements.txt
     ```
   - Asegúrate de tener `python-dotenv` en tu archivo `requirements.txt`.

3. **Ejecución**
   - Ejecuta la aplicación principal:
     ```bash
     python main.py
     ```

## Estructura del proyecto

- `src/`: Código fuente principal.
- `downloads/`: Carpeta donde se almacenan los videos descargados.
- `.env` y `.env.example`: Variables de entorno.
- `requirements.txt`: Dependencias del proyecto.

## Notas
- Asegúrate de tener un servidor RabbitMQ corriendo si usas la funcionalidad de colas.
- Modifica el archivo `.env` según tus necesidades.

---

Desarrollado por VideoVibeTok
