<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.4 สร้างรูปแบบตัวเลขสามเหลี่ยม</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden">
        
        <div class="p-8 flex-1">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">2.4 สร้างรูปแบบตัวเลขสามเหลี่ยม</h2>
            
            <div class="mb-6">
                <label class="block text-gray-600 mb-2">กรอกจำนวนแถว (n)</label>
                <input type="number" id="rowInput" placeholder="กรอกค่า n" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="flex gap-4">
                <button onclick="generateTriangle()" 
                    class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-lg transition-colors font-medium">
                    แสดงรูปแบบ
                </button>
                <button onclick="clearForm()" 
                    class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-6 py-2 rounded-lg transition-colors font-medium">
                    ล้างข้อมูล
                </button>
            </div>
        </div>

        <div class="bg-orange-600 p-8 flex-1 text-white">
            <h3 class="text-xl font-bold mb-4">ผลลัพธ์การแสดงผล</h3>
            <div id="result" class="bg-orange-700 bg-opacity-30 p-4 rounded-lg min-h-[150px] font-mono whitespace-pre text-lg">
                </div>
        </div>
    </div>

    <script>
        function generateTriangle() {
            const n = document.getElementById('rowInput').value;
            const resultDiv = document.getElementById('result');
            let output = "";

            if (n <= 0 || n === "") {
                resultDiv.innerHTML = "กรุณากรอกตัวเลขที่มากกว่า 0";
                return;
            }

            // ใช้ Nested Loop ตามเงื่อนไข
            for (let i = 1; i <= n; i++) { // Loop แถว
                for (let j = 1; j <= i; j++) { // Loop จำนวนตัวเลขในแต่ละแถว
                    output += j + " ";
                }
                output += "\n";
            }

            resultDiv.innerText = output;
        }

        function clearForm() {
            document.getElementById('rowInput').value = "";
            document.getElementById('result').innerText = "";
        }
    </script>
</body>
</html>