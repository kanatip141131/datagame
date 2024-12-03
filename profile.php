<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - DataStructure Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-blue-900 shadow-lg h-12">
        <div class="max-w-7xl mx-auto px-4 h-full">
            <div class="flex justify-between items-center h-full">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-white">DataStructure Game</span>
                </div>
                <div class="flex space-x-6">
                    <a href="dashboard.php" class="text-white hover:text-gray-200 transition text-sm">Games</a>
                    <a href="profile.php" class="text-white hover:text-gray-200 transition text-sm">Profile</a>
                    <a href="settings.php" class="text-white hover:text-gray-200 transition text-sm">Settings</a>
                    <a href="logout.php" class="text-white hover:text-gray-200 transition text-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto mt-8 p-6">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6">
            <h1 class="text-2xl font-bold mb-6 text-blue-400">Your Profile</h1>
            
            <div class="grid grid-cols-2 gap-8">
                <!-- Profile Information -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Profile Information</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-400">Username</label>
                            <div class="text-lg"><?php echo htmlspecialchars($_SESSION['username'] ?? ''); ?></div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-400">Email</label>
                            <div class="text-lg"><?php echo htmlspecialchars($_SESSION['email'] ?? ''); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Game Progress -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Game Progress</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-400">Completed Levels</label>
                            <div class="text-lg">2/80</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-400">Current Level</label>
                            <div class="text-lg">Level 3</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
