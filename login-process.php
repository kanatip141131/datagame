<?php
session_start();
require 'db.php'; // ไฟล์ที่ใช้เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $email = $_POST['email'];
    $password = $_POST['password'];

    // เตรียมคำสั่ง SQL สำหรับค้นหาผู้ใช้ที่มีอีเมลนี้ในฐานข้อมูล
    $sql = "SELECT * FROM user WHERE email = :email LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // ตรวจสอบว่าพบอีเมลในฐานข้อมูลหรือไม่ และตรวจสอบรหัสผ่านที่เข้ารหัส
    if ($user && password_verify($password, $user['password'])) {
        // หากรหัสผ่านถูกต้อง ให้สร้าง session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        echo "Login successful! Welcome " . $_SESSION['username'];
        // เปลี่ยนเส้นทางไปยังหน้า dashboard หรือหน้าหลัก
        header("Location: dashboard.php");
        exit();
    } else {
        // หากไม่พบผู้ใช้หรือรหัสผ่านไม่ถูกต้อง
        echo "Invalid email or password!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="auth-body">
    <div class="auth-container">
        <h1 class="auth-title">Login</h1>
        <form class="auth-form" action="login-process.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="auth-button">Login</button>
            </div>
            <p>Don't have an account? <a href="register-process.php" class="auth-link">Register here</a></p>
        </form>
    </div>
</body>
</html>
