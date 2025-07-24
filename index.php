<?php

session_start();

// allows php to display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const BASE_PATH =  __DIR__ . "/";

require BASE_PATH . "includes/functions.php";
// envloader
require BASE_PATH . "vendor/autoload.php";
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER["REQUEST_URI"] === "/") {
    require BASE_PATH . "includes/fetch-articles.php";
    require BASE_PATH . "includes/pages/index.php";
}

if ($_SERVER["REQUEST_URI"] === "/contact") {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require BASE_PATH . "includes/add-user-contact.php";
        
        header("Location: /contact");
        exit(); 
    }

    $status = $_SESSION["form_status"] ?? [];
    $color = $_SESSION["form_color"] ?? '';
    $old_input = $_SESSION["old_input"] ?? [];
    unset($_SESSION["form_status"], $_SESSION["form_color"], $_SESSION["old_input"]);
    
    require BASE_PATH . "includes/pages/contact-us.php";
}