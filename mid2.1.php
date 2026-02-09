<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณผลรวมเลขคู่</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-xl shadow-lg overflow-hidden max-w-4xl w-full flex flex-col md:flex-row">
        
        <div class="p-8 md:w-1/2">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">2.1 คำนวณผลรวมเลขคู่</h2>
            
            <div class="mb-6">
                <label for="numberInput" class="block text-sm font-medium text-gray-600 mb-2">กรอกจำนวนเต็มบวก (n)</label>
                <input type="number" id="numberInput" placeholder="กรอกค่า n" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            </div>

            <div class="flex gap-4">
                <button onclick="calculateSum()" 
                    class="flex-1 bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition font-medium">
                    คำนวณ
                </button>
                <button onclick="resetForm()" 
                    class="flex-1 bg-gray-300 text-gray-700 py-2 rounded-md hover:bg-gray-400 transition font-medium">
                    ล้างข้อมูล
                </button>
            </div>

            <div id="resultArea" class="mt-8 p-4 bg-blue-50 rounded-lg border border-blue-100 hidden">
                <p class="text-blue-800 font-medium">ผลรวมของเลขคู่คือ: <span id="sumResult" class="text-2xl font-bold">0</span></p>
                <p class="text-sm text-blue-600 mt-1" id="processText"></p>
            </div>
        </div>

        <div class="md:w-1/2 bg-orange-500 p-8 flex flex-col justify-center items-center text-white text-center">
            <div class="bg-white/20 p-6 rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="普及9 7h-6a2 2 0 00-2 2v8a2 2 0 002 2h6m10-10V7a2 2 0 00-2-2h-6m10 10V19a2 2 0 01-2 2h-6" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">ระบบคำนวณอัตโนมัติ</h3>
            <p class="text-orange-50 opacity-90">กรอกตัวเลขเพื่อหาผลรวมของเลขคู่ทั้งหมดในช่วง 1 ถึง n ได้ทันที</p>
        </div>
    </div>

    <script>
        function calculateSum() {
            const n = parseInt(document.getElementById('numberInput').value);
            const resultArea = document.getElementById('resultArea');
            const sumResult = document.getElementById('sumResult');
            const processText = document.getElementById('processText');

            if (isNaN(n) || n < 1) {
                alert("กรุณากรอกจำนวนเต็มบวกที่มากกว่า 0");
                return;
            }

            let sum = 0;
            let evens = [];
            for (let i = 1; i <= n; i++) {
                if (i % 2 === 0) {
                    sum += i;
                    evens.push(i);
                }
            }

            // แสดงผลลัพธ์
            resultArea.classList.remove('hidden');
            sumResult.innerText = sum.toLocaleString();
            processText.innerText = evens.length > 0 ? `ตัวเลขที่นำมาบวก: ${evens.join(', ')}` : "ไม่มีเลขคู่ในช่วงนี้";
        }

        function resetForm() {
            document.getElementById('numberInput').value = '';
            document.getElementById('resultArea').classList.add('hidden');
        }
    </script>
</body>
</html>