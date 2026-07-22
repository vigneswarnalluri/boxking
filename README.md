# Construz

Static PHP template enhanced with environment management and logging.

## Requirements
- PHP 8.0+
- Composer (for dependency install)

## Setup
1. Install dependencies:
   ```bash
   composer install
   ```
2. Create environment file:
   - Copy `ENV.EXAMPLE` to `.env` and adjust values.
   - Important keys:
     - `APP_ENV`, `APP_DEBUG`
     - `LOG_LEVEL`, `LOG_PATH`
3. Create storage directory if not present:
   ```bash
   mkdir -p storage/logs
   ```

## Run (development)
```bash
php -S localhost:8000 -t .
```
Visit `http://localhost:8000`.

## Logging
- Monolog writes to `storage/logs/app.log` (path configurable via `LOG_PATH`).
- Log level via `LOG_LEVEL` (debug, info, warning, error, etc.).

## Environment
- `.env` is loaded via `vlucas/phpdotenv` in `config/bootstrap.php`.
- `partials/head.php` includes the bootstrap so all pages share config and logging.

## Notes
- Contact/quote form posts to `mail.php` which is not implemented; add a handler before using it in production.
- Production should set `APP_DEBUG=false` and configure proper error pages via web server.
