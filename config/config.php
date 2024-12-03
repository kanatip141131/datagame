<?php
// Define base paths
define('BASE_PATH', dirname(dirname(__FILE__)));
define('CONFIG_PATH', BASE_PATH . '/config');
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('PAGES_PATH', BASE_PATH . '/pages');
define('ASSETS_PATH', BASE_PATH . '/assets');

// URL paths
define('BASE_URL', 'http://localhost/datastrucegame');
define('ASSETS_URL', BASE_URL . '/assets');

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'datastruce');
define('DB_USER', 'root');
define('DB_PASS', '');

// Session configuration
define('SESSION_NAME', 'datastrucegame_session');
define('SESSION_LIFETIME', 7200); // 2 hours

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database connection
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Helper functions
function redirect($path) {
    header("Location: " . BASE_URL . $path);
    exit();
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function requireLogin() {
    if (!isLoggedIn()) {
        $_SESSION['error'] = "Please login to access this page";
        redirect('/login.php');
    }
}

function sanitize($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}
?>
