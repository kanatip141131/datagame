<?php
require_once 'config/config.php';

try {
    // Display all data in the user table
    $sql = "SELECT * FROM user";
    $stmt = $pdo->query($sql);
    
    echo "<h2>User Table Data:</h2>";
    echo "<pre>";
    while($row = $stmt->fetch()) {
        print_r($row);
        echo "\n";
    }
    echo "</pre>";

    // Display user table structure
    $sql = "DESCRIBE user";
    $stmt = $pdo->query($sql);
    
    echo "<h2>User Table Structure:</h2>";
    echo "<pre>";
    while($row = $stmt->fetch()) {
        print_r($row);
        echo "\n";
    }
    echo "</pre>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
