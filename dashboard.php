<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game DataStructure</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* ตั้งค่าเริ่มต้นสำหรับ body */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #1e1e1e;
            color: white;
        }

        /* Header */
        .header {
            background-color: #6a0dad; /* สีม่วง */
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .menu a {
            margin-left: 20px;
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        .menu a:hover {
            color: #ffd700; /* สีทอง */
        }

        /* สำหรับการจัดหน้า dashboard */
        .container {
            display: flex;
            height: calc(100vh - 60px);
        }

        /* สไตล์สำหรับ sidebar */
        .sidebar {
            width: 20%;
            background-color: #282828;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 4px;
        }

        .sidebar ul li a:hover {
            background-color: #444;
        }

        /* ส่วนสำหรับ main content */
        .main-content {
            width: 80%;
            padding: 20px;
            background-color: #2d2d2d;
        }

        /* ส่วนหัวของแต่ละ Level */
        .level-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .level-header h1 {
            color: #ffd700; /* สีทอง */
        }

        .level-selector {
            display: flex;
            align-items: center;
            font-size: 18px;
            color: white;
        }

        .level-selector .arrows button {
            background-color: #6a0dad;
            color: white;
            border: none;
            padding: 8px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
        }

        .level-selector .arrows button:hover {
            background-color: #4834d4;
        }

        /* สำหรับส่วน textarea ที่ให้ผู้ใช้กรอกโค้ด */
        .code-area {
            margin-top: 20px;
        }

        .code-editor {
            width: 100%;
            height: 200px;
            background-color: #1e1e1e;
            color: white;
            border: 1px solid #444;
            padding: 10px;
            font-family: monospace;
            font-size: 16px;
            border-radius: 4px;
        }

        .run-btn {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #6a0dad; /* สีม่วง */
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .run-btn:hover {
            background-color: #4834d4;
        }

        /* สำหรับแสดงกล่อง output */
        .output-area {
            margin-top: 20px;
        }

        .output-box {
            background-color: #282828;
            padding: 10px;
            border: 1px solid #444;
            min-height: 150px;
            color: white;
            border-radius: 4px;
        }

    </style>
</head>
<body>
    <div class="header">
        <div class="logo">DataStructure Game</div>
        <div class="menu">
            <a href="dashboard.php">Games</a>
            <a href="login-process.php">Login here</a>
            <a href="register-process.php">Register here</a>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Log Out</a></li>
            </ul>
        </div>

        <div class="main-content">
            <div class="level-header">
                <h1>Level 1</h1>
                <div class="level-selector">
                    <span>Level 1 of 80</span>
                    <div class="arrows">
                        <button>&lt;</button>
                        <button>&gt;</button>
                    </div>
                </div>
            </div>
            
            <h1>Welcome to the Dashboard</h1>
            <p>This is where you can manage your settings and view your activities.</p>
            
            <!-- ส่วนการแสดงผลการทำงาน -->
            <div class="code-area">
                <textarea class="code-editor" placeholder="Cook your dish here..."></textarea>
                <button class="run-btn">Run</button>
            </div>
            
            <!-- กล่องแสดงผล -->
            <div class="output-area">
                <p>Output:</p>
                <div class="output-box"></div>
            </div>
        </div>
    </div>
</body>
</html>
