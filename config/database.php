<?php
/**
 * ============================================================
 * SmartQR Restaurant Ordering System
 * File: config/database.php
 * Purpose: Database connection using PDO (PHP Data Objects)
 *          This file is included by every PHP page that needs
 *          to read from or write to the database.
 * ============================================================
 */

// ---- Database Credentials ----
// Change these if your XAMPP MySQL uses different settings.
define('DB_HOST', 'localhost');       // MySQL server (always localhost in XAMPP)
define('DB_NAME', 'smartqr_restaurant'); // Database name we created
define('DB_USER', 'root');            // Default XAMPP MySQL username
define('DB_PASS', '');                // Default XAMPP MySQL password (empty)
define('DB_CHARSET', 'utf8mb4');      // Character set (supports emojis & all languages)

// ---- Site Configuration ----
define('SITE_URL', 'http://localhost/smartqr');   // Base URL of the project
define('SITE_NAME', 'SmartQR Restaurant');         // Restaurant system name
define('UPLOAD_PATH', __DIR__ . '/../uploads/');   // Absolute path to uploads folder
define('UPLOAD_URL', SITE_URL . '/uploads/');       // URL to uploads folder

// ---- PDO Connection Function ----
// PDO is a secure way to connect PHP to MySQL.
// It supports prepared statements which prevent SQL injection.
function getDBConnection(): PDO
{
    // Build the DSN (Data Source Name) string
    $dsn = "mysql:host=" . DB_HOST
         . ";dbname=" . DB_NAME
         . ";charset=" . DB_CHARSET;

    // PDO options for better security and error handling
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,  // Throw exceptions on error
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,        // Fetch rows as associative arrays
        PDO::ATTR_EMULATE_PREPARES   => false,                    // Use real prepared statements
    ];

    try {
        // Create and return the PDO connection object
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        return $pdo;
    } catch (PDOException $e) {
        // If connection fails, stop and show an error message
        // In production, you would log this error instead of displaying it
        die(json_encode([
            'status'  => 'error',
            'message' => 'Database connection failed: ' . $e->getMessage(),
        ]));
    }
}

// ---- Create a global $pdo variable ----
// Pages can include this file and use $pdo directly
$pdo = getDBConnection();
