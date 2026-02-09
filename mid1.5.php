<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณค่าบริการอินเทอร์เน็ต</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white rounded-xl shadow-2xl overflow-hidden flex flex-col md:flex-row max-w-4xl w-full">
        
        <div class="p-8 md:w-1/2">
            <h2 class="text-2xl font-bold text-gray-700 mb-6">1.5 คำนวณค่าบริการอินเทอร์เน็ต</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">จำนวนชั่วโมงใช้งาน</label>
                    <input type="number" id="hours" placeholder="กรอกจำนวนชั่วโมง" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">แพ็กเกจอินเทอร์เน็ต</label>
                    <select id="package" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="basic">Basic</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>

                <div class="flex gap-4 pt-4">
                    <button onclick="calculate()" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 rounded-lg transition">
                        คำนวณ
                    </button>
                    <button onclick="resetForm()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 rounded-lg transition">
                        ล้างข้อมูล
                    </button>
                </div>
            </div>

            <div id="result-area" class="mt-8 p-4 bg-blue-50 rounded-lg border border-blue-100 hidden">
                <p class="text-blue-800">ค่าบริการทั้งหมด: <span id="total-price" class="font-bold text-xl">0</span> บาท</p>
            </div>
        </div>

        <div class="md:w-1/2 bg-gradient-to-br from-orange-400 to-red-500 p-8 flex flex-col justify-center text-white">
            <h3 class="text-xl font-bold mb-4 text-center">สรุปรายการคำนวณ</h3>
            <p class="text-sm opacity-90 text-center">ระบบจะคำนวณค่าบริการตามชั่วโมงที่ท่านใช้งานจริงและแพ็กเกจที่เลือกอัตโนมัติ</p>
        </div>
    </div>

    <script>
        function calculate() {
            const hours = parseFloat(document.getElementById('hours').value);
            const pkg = document.getElementById('package').value;
            let rate = 0;
            let fixedFee = 0;

            if (isNaN(hours) || hours < 0) {
                alert("กรุณากรอกจำนวนชั่วโมงให้ถูกต้อง");
                return;
            }

            if (pkg === 'basic') {
                fixedFee = 100;
                if (hours <= 20) rate = 10;
                else if (hours <= 50) rate = 8;
                else rate = 5;
            } else {
                fixedFee = 200;
                if (hours <= 20) rate = 15;
                else if (hours <= 50) rate = 12;
                else rate = 10;
            }

            const total = (hours * rate) + fixedFee;
            
            document.getElementById('total-price').innerText = total.toLocaleString();
            document.getElementById('result-area').classList.remove('hidden');
        }

        function resetForm() {
            document.getElementById('hours').value = '';
            document.getElementById('package').value = 'basic';
            document.getElementById('result-area').classList.add('hidden');
        }
    </script>
</body>
</html>