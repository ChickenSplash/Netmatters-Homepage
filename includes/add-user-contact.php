<?php

require BASE_PATH . 'includes/database-config.php';

foreach ($_POST as $key => $value) {
    $_POST[$key] = trim(strip_tags($value));
}

$status = [];

if (!$_POST["name"]) {
    $status["name"] = "Name required";
}

if (!$_POST["email"]) {
    $status["email"] = "Email required.";
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $status["email"] = "Invalid email format.";
}

if (!$_POST["phone"]) {
    $status["phone"] = "Phone number required.";
} elseif (!preg_match('/^\+?[0-9]{7,15}$/', $_POST["phone"])) {
    $status["phone"] = "Invalid phone number.";
}

if (strlen($_POST["message"]) < 5) {
    $status["message"] = "Message must contain atleast 5 characters.";
}

$_POST["marketing_consent"] = isset($_POST["marketing_consent"]) ? 1 : 0;

if (!$status) { // to apply the class and feedback depending on condition
    $status["sent"] = "Message sent.";
    $color = "success";
    
    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        
        //dynamically build the sql statement
        $columns = implode(", ", array_keys($_POST));
        $placeholders = ":" . implode(", :", array_keys($_POST));
        $statement = $pdo->prepare("INSERT INTO user_contact ($columns) VALUES ($placeholders)");
        
        //passing in the POST array allows it to bind array keys with placeholders
        $statement->execute($_POST);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    $color = "fail";
}
