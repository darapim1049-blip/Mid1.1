<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.3 คำนวณค่าไฟฟ้า</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row max-w-4xl w-full m-4">
        
        <div class="p-8 md:w-1/2">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">1.3 คำนวณค่าไฟฟ้า</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">จำนวนหน่วยไฟฟ้า</label>
                    <input type="number" id="units" placeholder="กรอกจำนวนหน่วยไฟฟ้า" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">ประเภทผู้ใช้ไฟฟ้า</label>
                    <select id="userType" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:outline-none transition">
                        <option value="home">บ้านอยู่อาศัย</option>
                        <option value="business">ร้านค้า/ธุรกิจ</option>
                    </select>
                </div>

                <div class="flex gap-4 pt-4">
                    <button onclick="calculate()" class="flex-1 bg-pink-600 hover:bg-pink-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        คำนวณค่าไฟ
                    </button>
                    <button onclick="clearForm()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 px-4 rounded-lg transition duration-200">
                        เคลียร์ผลลัพธ์
                    </button>
                </div>
            </div>

            <div id="resultArea" class="mt-6 p-4 bg-gray-50 rounded-lg hidden">
                <p class="text-center text-lg">ค่าไฟฟ้าที่ต้องจ่าย: <span id="totalPrice" class="font-bold text-pink-600 text-2xl">0</span> บาท</p>
            </div>
        </div>

        <div class="md:w-1/2 bg-orange-500 flex items-center justify-center p-8 text-white">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto mb-4 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <p class="text-xl font-light">ระบบคำนวณอัตโนมัติ</p>
            </div>
        </div>
    </div>

    <script>
        function calculate() {
            const units = parseFloat(document.getElementById('units').value);
            const userType = document.getElementById('userType').value;
            let pricePerUnit = 0;

            if (isNaN(units) || units < 0) {
                alert("กรุณากรอกจำนวนหน่วยให้ถูกต้อง");
                return;
            }

            if (userType === 'home') {
                if (units <= 100) pricePerUnit = 3;
                else if (units <= 200) pricePerUnit = 4;
                else pricePerUnit = 5;
            } else { // ร้านค้า/ธุรกิจ
                if (units <= 100) pricePerUnit = 4;
                else if (units <= 200) pricePerUnit = 5;
                else pricePerUnit = 6;
            }

            const total = units * pricePerUnit;
            
            document.getElementById('totalPrice').innerText = total.toLocaleString();
            document.getElementById('resultArea').classList.remove('hidden');
        }

        function clearForm() {
            document.getElementById('units').value = '';
            document.getElementById('resultArea').classList.add('hidden');
            document.getElementById('userType').selectedIndex = 0;
        }
    </script>
</body>
</html>