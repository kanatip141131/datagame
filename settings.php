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
    <title>Settings - DataStructure Game</title>
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
            <h1 class="text-2xl font-bold mb-6 text-blue-400">Settings</h1>
            
            <form action="update-settings.php" method="POST" class="space-y-6">
                <!-- Account Settings -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Account Settings</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">Change Password</label>
                            <input type="password" name="current_password" placeholder="Current Password" 
                                class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2">
                            <input type="password" name="new_password" placeholder="New Password" 
                                class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2">
                            <input type="password" name="confirm_password" placeholder="Confirm New Password" 
                                class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Game Settings -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Game Settings</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">Code Editor Theme</label>
                            <select name="editor_theme" 
                                class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="dark">Dark Theme</option>
                                <option value="light">Light Theme</option>
                                <option value="monokai">Monokai</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Font Size</label>
                            <select name="font_size" 
                                class="w-full px-3 py-2 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="12">12px</option>
                                <option value="14">14px</option>
                                <option value="16">16px</option>
                                <option value="18">18px</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition">
                    Save Changes
                </button>
            </form>
        </div>
    </div>
</body>
</html>
