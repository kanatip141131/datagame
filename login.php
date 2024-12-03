<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST['username'];
    $password = $_POST['password'];

    if (empty($usernameOrEmail) || empty($password)) {
        $_SESSION['error'] = "กรุณากรอกข้อมูลให้ครบถ้วน";
        header("Location: login.php");
        exit();
    }

    try {
        // เช็คทั้ง username และ email
        $stmt = $conn->prepare("SELECT * FROM user WHERE username = :usernameOrEmail OR email = :usernameOrEmail");
        $stmt->execute(['usernameOrEmail' => $usernameOrEmail]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
            header("Location: login.php");
            exit();
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = "เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล";
        header("Location: login.php");
        exit();
    }
} else {
    if(isset($_SESSION['user_id'])) {
        header("Location: dashboard.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DataStructure Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white h-screen flex items-center justify-center">
    <div class="bg-gray-800 p-8 rounded-lg shadow-xl w-96">
        <h1 class="text-2xl font-bold text-center mb-6 text-blue-400">DataStructure Game</h1>
        
        <?php
        if(isset($_SESSION['error'])) {
            echo '<div class="bg-red-500 text-white p-3 rounded mb-4 text-sm">'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);
        }
        ?>

        <form action="login.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-2">Username or Email</label>
                <input type="text" name="username" required 
                    class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Password</label>
                <input type="password" name="password" required 
                    class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition">
                Login
            </button>
        </form>
        
        <div class="mt-4 text-center text-sm">
            <p>Don't have an account? 
                <a href="register.php" class="text-blue-400 hover:text-blue-300">Register here</a>
            </p>
        </div>
    </div>
</body>
</html>
<?php } ?>
