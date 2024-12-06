<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game DataStructure - Level 8</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        team: {
                            white: '#ffffff',
                            blue: '#1e40af',
                            black: '#111827',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 text-white h-screen overflow-hidden">
    <!-- Navigation Bar -->
    <nav class="bg-team-blue shadow-lg h-12">
        <div class="max-w-7xl mx-auto px-4 h-full">
            <div class="flex justify-between items-center h-full">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-white">DataStructure Game</span>
                </div>
                <div class="flex space-x-6">
                    <a href="dashboard.php" class="text-white hover:text-gray-200 transition text-sm">Games</a>
                    <a href="login-process.php" class="text-white hover:text-gray-200 transition text-sm">Login</a>
                    <a href="register-process.php" class="text-white hover:text-gray-200 transition text-sm">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex h-[calc(100vh-3rem)]">
        <!-- Sidebar -->
        <div class="w-48 bg-team-black shadow-lg">
            <div class="p-2">
                <ul class="space-y-1">
                    <li>
                        <a href="dashboard.php" class="flex items-center p-2 text-sm text-white hover:bg-blue-600 rounded-lg transition">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php" class="flex items-center p-2 text-sm text-white hover:bg-blue-600 rounded-lg transition">
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="settings.php" class="flex items-center p-2 text-sm text-white hover:bg-blue-600 rounded-lg transition">
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" class="flex items-center p-2 text-sm text-white hover:bg-blue-600 rounded-lg transition">
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-4 overflow-hidden">
            <div class="bg-gray-800 rounded-lg shadow-xl p-4 h-full flex flex-col">
                <!-- Level Header -->
                <div class="flex justify-between items-center mb-2">
                    <h1 class="text-xl font-bold text-blue-400">Level 8</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm">Level 8 of 12</span>
                        <div class="flex space-x-1">
                            <a href="game7.php" class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&lt;</a>
                            <a href="game9.php" class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&gt;</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 flex-1 overflow-hidden">
                    <!-- Left Column: Problem Description -->
                    <div class="bg-gray-700 rounded-lg p-3 overflow-auto">
                        <h2 class="text-lg font-bold mb-2">คำอธิบายโจทย์</h2>
                        <p class="text-sm text-gray-300 mb-2">จงสร้าง Stack ที่สามารถดึงค่าต่ำสุดได้ในเวลา O(1) โดยใช้โครงสร้างข้อมูลที่เหมาะสม:</p>
                        <pre class="bg-gray-800 p-3 rounded-lg text-sm font-mono"><code><span class="text-purple-400">class</span> <span class="text-yellow-300">MinStack</span>:
    <span class="text-purple-400">def</span> <span class="text-yellow-300">__init__</span>(<span class="text-blue-300">self</span>):
        <span class="text-blue-300">self</span>.stack = []
        <span class="text-blue-300">self</span>.min_stack = []

    <span class="text-purple-400">def</span> <span class="text-yellow-300">push</span>(<span class="text-blue-300">self</span>, val):
        <span class="text-gray-400"># จุดนี้หายไป: เพิ่ม val ไปที่ stack และอัพเดท min_stack</span>

    <span class="text-purple-400">def</span> <span class="text-yellow-300">pop</span>(<span class="text-blue-300">self</span>):
        <span class="text-gray-400"># จุดนี้หายไป: นำค่าออกจาก stack และอัพเดท min_stack</span>

    <span class="text-purple-400">def</span> <span class="text-yellow-300">get_min</span>(<span class="text-blue-300">self</span>):
        <span class="text-gray-400"># จุดนี้หายไป: คืนค่าต่ำสุดจาก min_stack</span>

<span class="text-gray-400"># ตัวอย่างการใช้งาน</span>
min_stack = MinStack()
min_stack.push(3)
min_stack.push(5)
min_stack.push(2)
<span class="text-yellow-300">print</span>(<span class="text-green-300">f"Min: {min_stack.get_min()}"</span>)
min_stack.pop()
<span class="text-yellow-300">print</span>(<span class="text-green-300">f"Min: {min_stack.get_min()}"</span>)</code></pre>
                    </div>

                    <!-- Right Column: Code Editor and Output -->
                    <div class="flex flex-col space-y-2">
                        <!-- Code Editor -->
                        <textarea id="codeEditor" 
                            class="flex-1 bg-gray-900 text-white p-3 rounded-lg font-mono text-sm resize-none h-64"
                            placeholder="เขียนโค้ดของคุณที่นี่..."></textarea>

                        <!-- Control Buttons -->
                        <button onclick="checkCode()" 
                            class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition text-sm w-full">
                            Check Code
                        </button>

                        <!-- Output Area -->
                        <div id="outputArea" 
                            class="bg-gray-900 p-3 rounded-lg font-mono text-sm h-64 overflow-auto">
                            <!-- Output will be displayed here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function checkCode() {
            const code = document.getElementById('codeEditor').value;
            const outputArea = document.getElementById('outputArea');
            
            const missingLine1 = "self.stack.append(val)";
            const missingLine2 = "if not self.min_stack or val <= self.min_stack[-1]:";
            const missingLine3 = "self.min_stack.append(val)";
            const missingLine4 = "if self.stack.pop() == self.min_stack[-1]:";
            const missingLine5 = "self.min_stack.pop()";
            const missingLine6 = "return self.min_stack[-1]";
            
            const hasLine1 = code.includes(missingLine1);
            const hasLine2 = code.includes(missingLine2);
            const hasLine3 = code.includes(missingLine3);
            const hasLine4 = code.includes(missingLine4);
            const hasLine5 = code.includes(missingLine5);
            const hasLine6 = code.includes(missingLine6);
            
            let output = '';
            
            if (hasLine1 && hasLine2 && hasLine3 && hasLine4 && hasLine5 && hasLine6) {
                output = `
                    <div class="text-green-500">
                        ✅ Correct! All missing lines found:
                        <br>
                        1. ${missingLine1}
                        <br>
                        2. ${missingLine2}
                        <br>
                        3. ${missingLine3}
                        <br>
                        4. ${missingLine4}
                        <br>
                        5. ${missingLine5}
                        <br>
                        6. ${missingLine6}
                        <br>
                        <a href="game9.php" class="inline-block mt-2 bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition text-white text-sm">
                            Next Level →
                        </a>
                    </div>
                `;
            } else {
                output = `
                    <div class="text-red-500">
                        ❌ ยังไม่ถูกต้อง กรุณาตรวจสอบโค้ดของคุณอีกครั้ง:
                        ${!hasLine1 ? '<br>- เพิ่ม val ไปที่ stack' : ''}
                        ${!hasLine2 ? '<br>- ตรวจสอบและอัพเดท min_stack' : ''}
                        ${!hasLine3 ? '<br>- เพิ่ม val ไปที่ min_stack' : ''}
                        ${!hasLine4 ? '<br>- ตรวจสอบและ pop จาก min_stack' : ''}
                        ${!hasLine5 ? '<br>- pop จาก min_stack' : ''}
                        ${!hasLine6 ? '<br>- คืนค่าต่ำสุดจาก min_stack' : ''}
                    </div>
                `;
            }
            
            outputArea.innerHTML = output;
        }
    </script>
</body>
</html>
