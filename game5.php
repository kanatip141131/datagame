<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game DataStructure - Level 5</title>
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
                    <h1 class="text-xl font-bold text-blue-400">Level 5</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm">Level 5 of 12</span>
                        <div class="flex space-x-1">
                            <a href="game4.php" class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&lt;</a>
                            <a href="game6.php" class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&gt;</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 flex-1 overflow-hidden">
                    <!-- Left Column: Problem Description -->
                    <div class="bg-gray-700 rounded-lg p-3 overflow-auto">
                        <h2 class="text-lg font-bold mb-2">คำอธิบายโจทย์</h2>
                        <p class="text-sm text-gray-300 mb-2">จงเติมส่วนที่หายไปเพื่อสร้าง Binary Search Tree (BST) และตรวจสอบความถูกต้องของมัน โดย BST ต้องรักษาคุณสมบัติที่ลูกซ้ายมีค่าน้อยกว่าพ่อแม่และลูกขวามีค่ามากกว่าพ่อแม่:</p>
                        <pre class="bg-gray-800 p-3 rounded-lg text-sm font-mono"><code><span class="text-purple-400">class</span> <span class="text-yellow-300">TreeNode</span>:
    <span class="text-purple-400">def</span> <span class="text-yellow-300">__init__</span>(<span class="text-blue-300">self</span>, val=0):
        <span class="text-blue-300">self</span>.val = val
        <span class="text-blue-300">self</span>.left = <span class="text-purple-400">None</span>
        <span class="text-blue-300">self</span>.right = <span class="text-purple-400">None</span>

<span class="text-purple-400">class</span> <span class="text-yellow-300">BinarySearchTree</span>:
    <span class="text-purple-400">def</span> <span class="text-yellow-300">__init__</span>(<span class="text-blue-300">self</span>):
        <span class="text-blue-300">self</span>.root = <span class="text-purple-400">None</span>
    
    <span class="text-purple-400">def</span> <span class="text-yellow-300">insert</span>(<span class="text-blue-300">self</span>, val):
        <span class="text-purple-400">if</span> <span class="text-purple-400">not</span> <span class="text-blue-300">self</span>.root:
            <span class="text-blue-300">self</span>.root = TreeNode(val)
            <span class="text-purple-400">return</span>
        
        curr = <span class="text-blue-300">self</span>.root
        <span class="text-purple-400">while</span> curr:
            <span class="text-gray-400"># จุดนี้หายไป: ตรวจสอบค่าและเพิ่ม node ทางซ้าย</span>
            
            <span class="text-gray-400"># จุดนี้หายไป: ตรวจสอบค่าและเพิ่ม node ทางขวา</span>
    
    <span class="text-purple-400">def</span> <span class="text-yellow-300">is_valid_bst</span>(<span class="text-blue-300">self</span>, node, min_val=float('-inf'), max_val=float('inf')):
        <span class="text-purple-400">if</span> <span class="text-purple-400">not</span> node:
            <span class="text-purple-400">return</span> <span class="text-purple-400">True</span>
            
        <span class="text-gray-400"># จุดนี้หายไป: ตรวจสอบว่า node อยู่ในช่วงที่ถูกต้อง</span>
        
        <span class="text-gray-400"># จุดนี้หายไป: ตรวจสอบ subtree ซ้ายและขวา</span>

<span class="text-gray-400"># ตัวอย่างการใช้งาน</span>
bst = BinarySearchTree()
bst.insert(5)
bst.insert(3)
bst.insert(7)
<span class="text-yellow-300">print</span>(<span class="text-green-300">f"Is Valid BST: {bst.is_valid_bst(bst.root)}"</span>)</code></pre>
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
            
            const missingLine1 = "if val < curr.val:";
            const missingLine2 = "if not curr.left: curr.left = TreeNode(val); return";
            const missingLine3 = "curr = curr.left";
            const missingLine4 = "if val > curr.val:";
            const missingLine5 = "if not curr.right: curr.right = TreeNode(val); return";
            const missingLine6 = "curr = curr.right";
            const missingLine7 = "if not min_val <= node.val <= max_val:";
            const missingLine8 = "return False";
            const missingLine9 = "return self.is_valid_bst(node.left, min_val, node.val) and self.is_valid_bst(node.right, node.val, max_val)";
            
            const hasLine1 = code.includes(missingLine1);
            const hasLine2 = code.includes(missingLine2);
            const hasLine3 = code.includes(missingLine3);
            const hasLine4 = code.includes(missingLine4);
            const hasLine5 = code.includes(missingLine5);
            const hasLine6 = code.includes(missingLine6);
            const hasLine7 = code.includes(missingLine7);
            const hasLine8 = code.includes(missingLine8);
            const hasLine9 = code.includes(missingLine9);
            
            let output = '';
            
            if (hasLine1 && hasLine2 && hasLine3 && hasLine4 && hasLine5 && hasLine6 && hasLine7 && hasLine8 && hasLine9) {
                output = `
                    <div class="text-green-500">
                        Correct! All missing lines found:
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
                        <a href="game6.php" class="inline-block mt-2 bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition text-white text-sm">
                            Next Level →
                        </a>
                    </div>
                `;
            } else {
                output = `
                    <div class="text-red-500">
                        Not complete yet. Missing:
                        ${!hasLine1 ? '<br>- Check if value is less than current' : ''}
                        ${!hasLine2 ? '<br>- Insert new node to left' : ''}
                        ${!hasLine3 ? '<br>- Move to left child' : ''}
                        ${!hasLine4 ? '<br>- Check if value is greater than current' : ''}
                        ${!hasLine5 ? '<br>- Insert new node to right' : ''}
                        ${!hasLine6 ? '<br>- Move to right child' : ''}
                        ${!hasLine7 ? '<br>- Check if node value is in valid range' : ''}
                        ${!hasLine8 ? '<br>- Return False for invalid BST' : ''}
                        ${!hasLine9 ? '<br>- Recursively validate left and right subtrees' : ''}
                    </div>
                `;
            }
            
            outputArea.innerHTML = output;
        }
    </script>
</body>
</html>
