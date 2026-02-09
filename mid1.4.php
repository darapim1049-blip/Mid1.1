<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณค่าแรงพนักงาน</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white rounded-2xl shadow-xl flex overflow-hidden max-w-4xl w-full mx-4">
        <div class="p-10 w-full md:w-3/5">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">1.4 คำนวณค่าแรงพนักงาน</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-600 mb-1">จำนวนชั่วโมงทำงาน</label>
                    <input type="number" id="hours" placeholder="กรอกจำนวนชั่วโมงทำงาน" 
                           class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600 mb-1">ประเภทงาน</label>
                    <select id="workType" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50">
                        <option value="50">งานทั่วไป (50 บาท/ชม.)</option>
                        <option value="100">งานพิเศษ (100 บาท/ชม.)</option>
                        <option value="150">งานเร่งด่วน (150 บาท/ชม.)</option>
                    </select>
                </div>

                <div class="flex gap-4 pt-4">
                    <button onclick="calculateWage()" class="flex-1 bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                        คำนวณค่าแรง
                    </button>
                    <button onclick="resetForm()" class="flex-1 bg-gray-300 text-gray-700 py-3 rounded-lg font-medium hover:bg-gray-400 transition">
                        เคลียร์ผลลัพธ์
                    </button>
                </div>
            </div>

            <div id="resultArea" class="mt-8 p-4 bg-blue-50 border-l-4 border-blue-500 rounded hidden">
                <p class="text-gray-700">ค่าแรงสุทธิ: <span id="totalWage" class="text-2xl font-bold text-blue-600">0</span> บาท</p>
                <p id="otDetail" class="text-sm text-blue-400 mt-1"></p>
            </div>
        </div>

        <div class="hidden md:flex w-2/5 bg-red-500 items-center justify-center p-10 text-white">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto mb-4 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="id-12" />
                    <circle cx="12" cy="12" r="9" stroke-width="2" />
                    <path d="M12 8v4l3 2" stroke-width="2" />
                </svg>
                <p class="text-xl font-light">ระบบคำนวณอัตโนมัติ</p>
            </div>
        </div>
    </div>

    <script>
        function calculateWage() {
            const hours = parseFloat(document.getElementById('hours').value);
            const rate = parseFloat(document.getElementById('workType').value);
            
            if (isNaN(hours) || hours <= 0) {
                alert("กรุณากรอกจำนวนชั่วโมงให้ถูกต้อง");
                return;
            }

            let total = 0;
            let otMessage = "";

            if (hours <= 8) {
                // กรณีทำงานไม่เกิน 8 ชม.
                total = hours * rate;
            } else {
                // กรณีเกิน 8 ชม. (8 ชม. แรกเรทปกติ + ที่เหลือเรท OT 1.5 เท่า)
                const normalPay = 8 * rate;
                const otHours = hours - 8;
                const otPay = otHours * (rate * 1.5);
                total = normalPay + otPay;
                otMessage = `(รวม OT จำนวน ${otHours} ชม.)`;
            }

            // แสดงผล
            document.getElementById('totalWage').innerText = total.toLocaleString();
            document.getElementById('otDetail').innerText = otMessage;
            document.getElementById('resultArea').classList.remove('hidden');
        }

        function resetForm() {
            document.getElementById('hours').value = "";
            document.getElementById('resultArea').classList.add('hidden');
        }
    </script>
</body>
</html>