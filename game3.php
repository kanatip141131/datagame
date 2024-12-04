<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game 3 - DataStructure</title>
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
                    <h1 class="text-xl font-bold text-blue-400">Level 3</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm">Level 3 of 80</span>
                        <div class="flex space-x-1">
                            <button class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&lt;</button>
                            <button class="bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-lg transition text-sm">&gt;</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 flex-1 overflow-hidden">
                    <!-- Left Column: Problem Description -->
                    <div class="bg-gray-700 rounded-lg p-3 overflow-auto">
                        <h2 class="text-lg font-bold mb-2">Problem Description</h2>
                        <p class="text-sm text-gray-300 mb-2">Implement a basic stack data structure with push and pop operations:</p>
                        <pre class="bg-gray-800 p-3 rounded-lg text-sm font-mono"><code><span class="text-purple-400">class</span> <span class="text-yellow-300">Stack</span>:
    <span class="text-purple-400">def</span> <span class="text-yellow-300">__init__</span>(<span class="text-blue-300">self</span>):
        <span class="text-blue-300">self.items</span> = []

    <span class="text-purple-400">def</span> <span class="text-yellow-300">push</span>(<span class="text-blue-300">self</span>, <span class="text-blue-300">item</span>):
        <span class="text-blue-300">self.items.append(item)</span>

    <span class="text-purple-400">def</span> <span class="text-yellow-300">pop</span>(<span class="text-blue-300">self</span>):
        <span class="text-purple-400">if</span> <span class="text-blue-300">not self.is_empty()</span>:
            <span class="text-purple-400">return</span> <span class="text-blue-300">self.items.pop()</span>
        <span class="text-purple-400">return</span> <span class="text-yellow-300">None</span>

    <span class="text-purple-400">def</span> <span class="text-yellow-300">is_empty</span>(<span class="text-blue-300">self</span>):
        <span class="text-purple-400">return</span> <span class="text-blue-300">len(self.items) == 0</span>

<span class="text-gray-400"># Example usage</span>
<span class="text-blue-300">stack</span> = <span class="text-yellow-300">Stack</span>()
<span class="text-blue-300">stack.push(1)</span>
<span class="text-blue-300">stack.push(2)</span>
<span class="text-yellow-300">print</span>(<span class="text-orange-300">f</span><span class="text-green-300">"Popped item: {stack.pop()}"</span>)</code></pre>
                    </div>

                    <!-- Right Column: Code Editor and Output -->
                    <div class="flex flex-col space-y-2">
                        <!-- Code Editor -->
                        <textarea id="codeEditor" 
                            class="flex-1 bg-gray-900 text-white p-3 rounded-lg font-mono text-sm resize-none"
                            placeholder="Write your code here..."></textarea>

                        <!-- Control Buttons -->
                        <button onclick="checkCode()" 
                            class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition text-sm w-full">
                            Check Code
                        </button>

                        <!-- Output Area -->
                        <div id="outputArea" 
                            class="bg-gray-900 p-3 rounded-lg font-mono text-sm h-32 overflow-auto">
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
            
            // Example solution for the stack problem
            const correctSolution = "class Stack:\n    def __init__(self):\n        self.items = []\n    def push(self, item):\n        self.items.append(item)\n    def pop(self):\n        if not self.is_empty():\n            return self.items.pop()\n        return None\n    def is_empty(self):\n        return len(self.items) == 0";
            
            if (code.includes("class Stack:") && code.includes("def __init__(self):") && code.includes("def push(self, item):") && code.includes("def pop(self):") && code.includes("def is_empty(self):")) {
                outputArea.textContent = "Correct! The function works as expected.";
            } else {
                outputArea.textContent = "Incorrect. Please try again.";
            }
        }
    </script>
</body>
</html>
