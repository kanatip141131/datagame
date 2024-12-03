<?php
require 'db.php'; // ไฟล์ที่ใช้เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // ตรวจสอบว่ารหัสผ่านและยืนยันรหัสผ่านตรงกันหรือไม่
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
        exit();
    }

    // เข้ารหัสรหัสผ่านก่อนบันทึกลงฐานข้อมูล
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // เตรียมคำสั่ง SQL สำหรับบันทึกข้อมูล
    $sql = "INSERT INTO user (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $conn->prepare($sql);

    // ดำเนินการบันทึกข้อมูล
    try {
        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword
        ]);
        echo "Registration successful!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="auth-body">
    <div class="auth-container">
        <h1 class="auth-title">Register</h1>
        <form class="auth-form" action="register-process.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="auth-button">Register</button>
            </div>
            <p>Already have an account? <a href="login-process.php" class="auth-link">Login here</a></p>
        </form>
    </div>
</body>
</html>
