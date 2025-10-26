<?php

/**
 * Display all errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




/**
 * Parse het .env bestand
 */
$env_array = parse_ini_file(dirname(__DIR__) . '/.env');

/**
 * Definieer constante waardes voor de database
 */
define('DB_HOST', isset($env_array['DB_HOST']) ? $env_array['DB_HOST'] : '127.0.0.1');         // mariadb
define('DB_NAME', isset($env_array['DB_NAME']) ? $env_array['DB_NAME'] : 'music_library');     // music_library
define('DB_USERNAME', isset($env_array['DB_USERNAME']) ? $env_array['DB_USERNAME'] : 'music_user'); // music_user
define('DB_PASSWORD', isset($env_array['DB_PASSWORD']) ? $env_array['DB_PASSWORD'] : 'mysecretuserpw'); // mysecretuserpw