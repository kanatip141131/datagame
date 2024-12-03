<?php
$host = 'localhost';
$db = 'datastruce';
$user = 'root'; // ชื่อผู้ใช้ MySQL ของคุณ
$pass = '';     // รหัสผ่าน MySQL (ใส่รหัสผ่านของคุณถ้ามี)

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
