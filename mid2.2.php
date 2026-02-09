<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณผลคูณของตัวเลข</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row max-w-2xl w-full">
        
        <div class="p-8 flex-1">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">2.2 คำนวณผลคูณของตัวเลข</h2>
            
            <div class="mb-6">
                <label class="block text-gray-600 mb-2">กรอกจำนวนเต็มบวก (n)</label>
                <input type="number" id="numberInput" placeholder="กรอกค่า n" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>

            <div class="flex gap-4">
                <button onclick="calculateProduct()" 
                    class="flex-1 bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded-md transition duration-200">
                    คำนวณ
                </button>
                <button onclick="resetForm()" 
                    class="flex-1 bg-slate-300 hover:bg-slate-400 text-gray-700 font-medium py-2 px-4 rounded-md transition duration-200">
                    ล้างข้อมูล
                </button>
            </div>

            <div id="resultArea" class="mt-6 p-4 bg-orange-50 rounded-md hidden border border-orange-200">
                <p class="text-gray-700">ผลคูณทั้งหมดคือ: <span id="resultValue" class="font-bold text-orange-600 text-xl"></span></p>
            </div>
        </div>

        <div class="bg-[#e5534b] p-8 flex-1 flex flex-col justify-center items-center text-white">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mb-4 mx-auto opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="懸-9 5 9-5 9 5 9-5 9-5-9-5-9 5zm0 0v11l9 5 9-5V10l-9-5-9 5z" />
                    <path d="M12 12L12 22" stroke-width="2" />
                </svg>
                <p class="text-lg opacity-90">ระบบคำนวณตัวเลขทางคณิตศาสตร์</p>
            </div>
        </div>
    </div>

    <script>
        function calculateProduct() {
            const n = document.getElementById('numberInput').value;
            const resultArea = document.getElementById('resultArea');
            const resultValue = document.getElementById('resultValue');

            if (n === "" || n <= 0) {
                alert("กรุณากรอกจำนวนเต็มบวกที่มากกว่า 0");
                return;
            }

            // ตรรกะการคำนวณผลคูณสะสม (1 * 2 * ... * n)
            let product = 1;
            for (let i = 1; i <= n; i++) {
                product *= i;
            }

            // แสดงผล
            resultValue.innerText = product.toLocaleString();
            resultArea.classList.remove('hidden');
        }

        function resetForm() {
            document.getElementById('numberInput').value = "";
            document.getElementById('resultArea').classList.add('hidden');
        }
    </script>

</body>
</html>