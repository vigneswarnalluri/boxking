<?php

// Composer autoload (optional if composer install has not been run yet)
$autoloadPath = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath)) {
    /** @noinspection PhpIncludeInspection */
    require_once $autoloadPath;
}

// Load environment variables if Dotenv is available
if (class_exists(\Dotenv\Dotenv::class)) {
    $envPath = dirname(__DIR__);
    try {
        $dotenv = \Dotenv\Dotenv::createImmutable($envPath);
        $dotenv->safeLoad();
    } catch (Throwable $e) {
        // ignore if .env is absent or cannot be loaded
    }
}

// Basic config helper
if (!function_exists('env')) {
    function env(string $key, $default = null) {
        $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);
        return $value === false || $value === null ? $default : $value;
    }
}

// Error display based on APP_DEBUG
$debug = filter_var(env('APP_DEBUG', false), FILTER_VALIDATE_BOOL);
if ($debug) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_STRICT);
}

// Initialize logger if Monolog is available
if (class_exists(\Monolog\Logger::class)) {
    $logLevelName = strtolower((string) env('LOG_LEVEL', 'info'));
    $levelMap = [
        'debug' => \Monolog\Level::Debug,
        'info' => \Monolog\Level::Info,
        'notice' => \Monolog\Level::Notice,
        'warning' => \Monolog\Level::Warning,
        'error' => \Monolog\Level::Error,
        'critical' => \Monolog\Level::Critical,
        'alert' => \Monolog\Level::Alert,
        'emergency' => \Monolog\Level::Emergency,
    ];
    $level = $levelMap[$logLevelName] ?? \Monolog\Level::Info;

    $logPath = env('LOG_PATH', __DIR__ . '/../storage/logs/app.log');
    $logDir = dirname($logPath);
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0777, true);
    }

    $logger = new \Monolog\Logger('app');
    $handler = new \Monolog\Handler\StreamHandler($logPath, $level);
    $formatter = new \Monolog\Formatter\LineFormatter(null, null, true, true);
    $handler->setFormatter($formatter);
    $logger->pushHandler($handler);

    $GLOBALS['logger'] = $logger; // available as $GLOBALS['logger']
}
