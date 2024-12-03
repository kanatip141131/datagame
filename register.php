<?php
session_start();
require_once 'config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        $_SESSION['error'] = "Please fill in all fields";
    } else {
        // Check if username or email already exists
        $sql = "SELECT COUNT(*) FROM user WHERE username = :username OR email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username, 'email' => $email]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $_SESSION['error'] = "Username or email already exists";
        } else {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Insert the new user into the database
            $sql = "INSERT INTO user (username, email, password, role) VALUES (:username, :email, :password, 'user')";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['username' => $username, 'email' => $email, 'password' => $hashedPassword]);

            $_SESSION['user_id'] = $pdo->lastInsertId();
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = 'user';

            header("Location: dashboard.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - DataStructure Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white h-screen flex items-center justify-center">
    <div class="bg-gray-800 p-8 rounded-lg shadow-xl w-96">
        <h1 class="text-2xl font-bold text-center mb-6 text-blue-400">Register</h1>
        
        <?php
        if(isset($_SESSION['error'])) {
            echo '<div class="bg-red-500 text-white p-3 rounded mb-4 text-sm">'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);
        }
        ?>

        <form action="register.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-2">Username</label>
                <input type="text" name="username" required 
                    class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Email</label>
                <input type="email" name="email" required 
                    class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Password</label>
                <input type="password" name="password" required 
                    class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition">
                Register
            </button>
        </form>
        
        <div class="mt-4 text-center text-sm">
            <p>Already have an account? 
                <a href="login.php" class="text-blue-400 hover:text-blue-300">Login here</a>
            </p>
        </div>
    </div>
</body>
</html>
