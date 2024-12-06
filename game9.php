<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game DataStructure - Level 9</title>
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
                    <h1 class="text-xl font-bold text-blue-400">Level 9</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm">Level 9 of 12</span>
                        <div class="flex space-x-1">
                            <a href="game8.php" class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&lt;</a>
                            <a href="game10.php" class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&gt;</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 flex-1 overflow-hidden">
                    <!-- Left Column: Problem Description -->
                    <div class="bg-gray-700 rounded-lg p-3 overflow-auto">
                        <h2 class="text-lg font-bold mb-2">คำอธิบายโจทย์</h2>
                        <p class="text-sm text-gray-300 mb-2">จงสร้าง Linked List ที่สามารถแทรกและลบ node ได้ในเวลา O(1):</p>
                        <pre class="bg-gray-800 p-3 rounded-lg text-sm font-mono"><code><span class="text-purple-400">class</span> <span class="text-yellow-300">Node</span>:
    <span class="text-purple-400">def</span> <span class="text-yellow-300">__init__</span>(<span class="text-blue-300">self</span>, val):
        <span class="text-blue-300">self</span>.val = val
        <span class="text-blue-300">self</span>.next = <span class="text-purple-400">None</span>

<span class="text-purple-400">class</span> <span class="text-yellow-300">LinkedList</span>:
    <span class="text-purple-400">def</span> <span class="text-yellow-300">__init__</span>(<span class="text-blue-300">self</span>):
        <span class="text-blue-300">self</span>.head = <span class="text-purple-400">None</span>

    <span class="text-purple-400">def</span> <span class="text-yellow-300">insert</span>(<span class="text-blue-300">self</span>, node):
        <span class="text-gray-400"># จุดนี้หายไป: แทรก node ที่จุดเริ่มต้น</span>

    <span class="text-purple-400">def</span> <span class="text-yellow-300">delete</span>(<span class="text-blue-300">self</span>, node):
        <span class="text-gray-400"># จุดนี้หายไป: ลบ node ที่จุดเริ่มต้น</span>

<span class="text-gray-400"># ตัวอย่างการใช้งาน</span>
linked_list = LinkedList()
node1 = Node(1)
node2 = Node(2)
linked_list.insert(node1)
linked_list.insert(node2)
linked_list.delete(node1)
<span class="text-yellow-300">print</span>(<span class="text-green-300">f"Head: {linked_list.head.val}"</span>)</code></pre>
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
            
            const missingLine1 = "node.next = self.head";
            const missingLine2 = "self.head = node";
            const missingLine3 = "if self.head == node:";
            const missingLine4 = "self.head = self.head.next";
            
            const hasLine1 = code.includes(missingLine1);
            const hasLine2 = code.includes(missingLine2);
            const hasLine3 = code.includes(missingLine3);
            const hasLine4 = code.includes(missingLine4);
            
            let output = '';
            
            if (hasLine1 && hasLine2 && hasLine3 && hasLine4) {
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
                        <a href="game10.php" class="inline-block mt-2 bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition text-white text-sm">
                            Next Level →
                        </a>
                    </div>
                `;
            } else {
                output = `
                    <div class="text-red-500">
                        ❌ ยังไม่ถูกต้อง กรุณาตรวจสอบโค้ดของคุณอีกครั้ง:
                        ${!hasLine1 ? '<br>- แทรก node ที่จุดเริ่มต้น' : ''}
                        ${!hasLine2 ? '<br>- กำหนด head เป็น node ใหม่' : ''}
                        ${!hasLine3 ? '<br>- ตรวจสอบและลบ node ที่จุดเริ่มต้น' : ''}
                        ${!hasLine4 ? '<br>- อัพเดท head เป็น node ถัดไป' : ''}
                    </div>
                `;
            }
            
            outputArea.innerHTML = output;
        }
    </script>
</body>
</html>
