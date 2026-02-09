<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างรูปดาวแบบพีระมิด</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white rounded-xl shadow-lg flex flex-col md:flex-row max-w-4xl w-full overflow-hidden">
        
        <div class="p-8 flex-1">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">2.5 สร้างรูปดาวแบบพีระมิด</h2>
            
            <div class="mb-6">
                <label for="rowInput" class="block text-gray-600 mb-2">กรอกจำนวนแถว (n)</label>
                <input type="number" id="rowInput" placeholder="กรอกค่า n" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="flex gap-4">
                <button onclick="generatePyramid()" 
                    class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                    แสดงรูปแบบ
                </button>
                <button onclick="clearData()" 
                    class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 px-6 rounded-lg transition duration-200">
                    ล้างข้อมูล
                </button>
            </div>

            <div id="result" class="mt-8 font-mono text-center text-lg leading-tight text-purple-900 bg-purple-50 p-4 rounded-lg hidden">
                </div>
        </div>

        <div class="bg-red-500 p-8 flex-1 flex flex-col justify-center text-white">
            <h2 class="text-2xl font-bold mb-4">ผลลัพธ์การประมวลผล</h2>
            <p class="opacity-90">รูปพีระมิดดาวจะถูกคำนวณตามเงื่อนไขที่กำหนดไว้ในโจทย์ โดยใช้ Loop ซ้อน Loop เพื่อจัดการเว้นวรรคและการแสดงผล</p>
        </div>
    </div>

    <script>
        function generatePyramid() {
            const n = document.getElementById('rowInput').value;
            const resultDiv = document.getElementById('result');
            
            if (n === '' || n <= 0) {
                alert("กรุณากรอกจำนวนแถวที่มากกว่า 0");
                return;
            }

            let output = "";
            // วนลูปตามจำนวนแถว (n)
            for (let i = 1; i <= n; i++) {
                // 1. วนลูปสร้างช่องว่าง (Space) เพื่อให้เป็นรูปพีระมิด
                for (let j = 1; j <= (n - i); j++) {
                    output += "&nbsp;&nbsp;"; 
                }
                // 2. วนลูปสร้างดาว (*) 
                // เงื่อนไข: แถวแรกมี 1 ดาว, แถวถัดไปเพิ่มทีละ 2 (สูตรคือ 2*i - 1)
                for (let k = 1; k <= (2 * i - 1); k++) {
                    output += "*";
                }
                output += "<br>";
            }

            resultDiv.innerHTML = output;
            resultDiv.classList.remove('hidden');
        }

        function clearData() {
            document.getElementById('rowInput').value = '';
            document.getElementById('result').innerHTML = '';
            document.getElementById('result').classList.add('hidden');
        }
    </script>

</body>
</html>