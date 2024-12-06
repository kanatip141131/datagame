<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game DataStructure - Level 6</title>
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
                    <h1 class="text-xl font-bold text-blue-400">Level 6</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm">Level 6 of 12</span>
                        <div class="flex space-x-1">
                            <a href="game5.php" class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&lt;</a>
                            <a href="game7.php" class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&gt;</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 flex-1 overflow-hidden">
                    <!-- Left Column: Problem Description -->
                    <div class="bg-gray-700 rounded-lg p-3 overflow-auto">
                        <h2 class="text-lg font-bold mb-2">คำอธิบายโจทย์</h2>
                        <p class="text-sm text-gray-300 mb-2">จงเขียนโค้ดเพื่อสร้าง Hash Table โดยใช้วิธี chaining ในการจัดการการชนกันของข้อมูล (collision) โดยให้เติมส่วนที่หายไปในฟังก์ชัน put() และ get():</p>
                        <pre class="bg-gray-800 p-3 rounded-lg text-sm font-mono"><code><span class="text-purple-400">class</span> <span class="text-yellow-300">HashNode</span>:
    <span class="text-purple-400">def</span> <span class="text-yellow-300">__init__</span>(<span class="text-blue-300">self</span>, key, value):
        <span class="text-blue-300">self</span>.key = key
        <span class="text-blue-300">self</span>.value = value
        <span class="text-blue-300">self</span>.next = <span class="text-purple-400">None</span>

<span class="text-purple-400">class</span> <span class="text-yellow-300">HashTable</span>:
    <span class="text-purple-400">def</span> <span class="text-yellow-300">__init__</span>(<span class="text-blue-300">self</span>, size=10):
        <span class="text-blue-300">self</span>.size = size
        <span class="text-blue-300">self</span>.table = [<span class="text-purple-400">None</span>] * size

    <span class="text-purple-400">def</span> <span class="text-yellow-300">_hash</span>(<span class="text-blue-300">self</span>, key):
        <span class="text-purple-400">return</span> hash(key) % <span class="text-blue-300">self</span>.size

    <span class="text-purple-400">def</span> <span class="text-yellow-300">put</span>(<span class="text-blue-300">self</span>, key, value):
        <span class="text-gray-400"># จุดที่หายไป: คำนวณ hash index</span>
        <span class="text-gray-400"># จุดที่หายไป: สร้าง node ใหม่</span>
        <span class="text-gray-400"># จุดที่หายไป: จัดการ collision ด้วย chaining</span>
        <span class="text-purple-400">pass</span>

    <span class="text-purple-400">def</span> <span class="text-yellow-300">get</span>(<span class="text-blue-300">self</span>, key):
        <span class="text-gray-400"># จุดที่หายไป: คำนวณ hash index</span>
        <span class="text-gray-400"># จุดที่หายไป: ค้นหาข้อมูลใน chain</span>
        <span class="text-gray-400"># จุดที่หายไป: return ค่าที่เจอ หรือ None</span>
        <span class="text-purple-400">pass</span>

<span class="text-gray-400"># ทดสอบการทำงาน</span>
hash_table = HashTable()
hash_table.put(<span class="text-green-300">"apple"</span>, 5)
hash_table.put(<span class="text-green-300">"banana"</span>, 8)
hash_table.put(<span class="text-green-300">"orange"</span>, 3)

<span class="text-yellow-300">print</span>(hash_table.get(<span class="text-green-300">"apple"</span>))  <span class="text-gray-400"># ควรแสดง: 5</span>
<span class="text-yellow-300">print</span>(hash_table.get(<span class="text-green-300">"banana"</span>)) <span class="text-gray-400"># ควรแสดง: 8</span>
<span class="text-yellow-300">print</span>(hash_table.get(<span class="text-green-300">"grape"</span>))  <span class="text-gray-400"># ควรแสดง: None</span></code></pre>
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
            
            const missingLine1 = "index = self._hash(key)";
            const missingLine2 = "new_node = HashNode(key, value)";
            const missingLine3 = "if self.table[index] is None:";
            const missingLine4 = "self.table[index] = new_node";
            const missingLine5 = "current = self.table[index]";
            const missingLine6 = "if current.key == key:";
            const missingLine7 = "current.value = value";
            const missingLine8 = "while current.next:";
            const missingLine9 = "if current.next.key == key:";
            const missingLine10 = "current.next.value = value";
            const missingLine11 = "current = current.next";
            const missingLine12 = "current.next = new_node";
            
            const hasLine1 = code.includes(missingLine1);
            const hasLine2 = code.includes(missingLine2);
            const hasLine3 = code.includes(missingLine3);
            const hasLine4 = code.includes(missingLine4);
            const hasLine5 = code.includes(missingLine5);
            const hasLine6 = code.includes(missingLine6);
            const hasLine7 = code.includes(missingLine7);
            const hasLine8 = code.includes(missingLine8);
            const hasLine9 = code.includes(missingLine9);
            const hasLine10 = code.includes(missingLine10);
            const hasLine11 = code.includes(missingLine11);
            const hasLine12 = code.includes(missingLine12);
            
            let output = '';
            
            if (hasLine1 && hasLine2 && hasLine3 && hasLine4 && hasLine5 && hasLine6 && hasLine7 && 
                hasLine8 && hasLine9 && hasLine10 && hasLine11 && hasLine12) {
                output = `
                    <div class="text-green-500">
                        ✅ ถูกต้อง! พบโค้ดที่ต้องการทั้งหมด:
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
                        7. ${missingLine7}
                        <br>
                        8. ${missingLine8}
                        <br>
                        9. ${missingLine9}
                        <br>
                        10. ${missingLine10}
                        <br>
                        11. ${missingLine11}
                        <br>
                        12. ${missingLine12}
                        <br>
                        <a href="game7.php" class="inline-block mt-2 bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition text-white text-sm">
                            Next Level →
                        </a>
                    </div>
                `;
            } else {
                output = `
                    <div class="text-red-500">
                        ❌ ยังไม่ถูกต้อง กรุณาตรวจสอบโค้ดของคุณอีกครั้ง:
                        ${!hasLine1 ? '<br>- ยังไม่มีการคำนวณ hash index' : ''}
                        ${!hasLine2 ? '<br>- ยังไม่มีการสร้าง node ใหม่' : ''}
                        ${!hasLine3 ? '<br>- ยังไม่มีการตรวจสอบ table[index] ว่าว่างหรือไม่' : ''}
                        ${!hasLine4 ? '<br>- ยังไม่มีการเพิ่ม node ใหม่ลงใน table' : ''}
                        ${!hasLine5 ? '<br>- ยังไม่มีการกำหนด current node' : ''}
                        ${!hasLine6 ? '<br>- ยังไม่มีการตรวจสอบ key ซ้ำ' : ''}
                        ${!hasLine7 ? '<br>- ยังไม่มีการอัพเดท value เมื่อเจอ key ซ้ำ' : ''}
                        ${!hasLine8 ? '<br>- ยังไม่มีการวนลูปหา node ถัดไป' : ''}
                        ${!hasLine9 ? '<br>- ยังไม่มีการตรวจสอบ key ซ้ำใน node ถัดไป' : ''}
                        ${!hasLine10 ? '<br>- ยังไม่มีการอัพเดท value ใน node ถัดไป' : ''}
                        ${!hasLine11 ? '<br>- ยังไม่มีการเลื่อน current ไป node ถัดไป' : ''}
                        ${!hasLine12 ? '<br>- ยังไม่มีการเพิ่ม node ใหม่ต่อท้าย chain' : ''}
                    </div>
                `;
            }
            
            outputArea.innerHTML = output;
        }
    </script>
</body>
</html>
