<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณเงินเดือน</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row max-w-4xl w-full">
        
        <div class="p-8 flex-1">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">1.1 คำนวณเงินเดือนพนักงาน</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-600 mb-1">ชื่อพนักงาน</label>
                    <input type="text" id="name" placeholder="กรอกชื่อพนักงาน" 
                        class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-2 focus:ring-pink-500 outline-none">
                </div>

                <div>
                    <label class="block text-gray-600 mb-1">จำนวนชั่วโมงทำงาน</label>
                    <input type="number" id="hours" placeholder="เช่น 170" 
                        class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-2 focus:ring-pink-500 outline-none">
                </div>

                <div>
                    <label class="block text-gray-600 mb-1">ตำแหน่งพนักงาน</label>
                    <select id="position" class="w-full border border-gray-300 rounded-lg p-2.5 bg-gray-50 focus:ring-2 focus:ring-pink-500 outline-none">
                        <option value="100">ปฏิบัติการ</option>
                        <option value="200">หัวหน้างาน</option>
                        <option value="300">ผู้จัดการ</option>
                    </select>
                </div>

                <div class="flex gap-4 pt-4">
                    <button onclick="calculateSalary()" class="flex-1 bg-pink-600 hover:bg-pink-700 text-white font-medium py-2.5 rounded-lg transition">
                        คำนวณเงินเดือน
                    </button>
                    <button onclick="resetForm()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2.5 rounded-lg transition">
                        เคลียร์ผลลัพธ์
                    </button>
                </div>
            </div>

            <div id="result" class="mt-6 p-4 bg-pink-50 rounded-lg border border-pink-100 hidden">
                <p class="text-pink-800 font-medium" id="resultText"></p>
            </div>
        </div>

        <div class="bg-orange-600 text-white p-8 flex flex-col justify-center md:w-1/3">
            <h3 class="text-xl font-bold mb-4">สรุปผลการคำนวณ</h3>
            <p class="text-orange-100 text-sm italic">ระบบจะคำนวณเงินพิเศษ 1.5 เท่า หากทำงานเกิน 160 ชั่วโมง</p>
        </div>
    </div>

    <script>
        function calculateSalary() {
            const name = document.getElementById('name').value;
            const hours = parseFloat(document.getElementById('hours').value);
            const rate = parseFloat(document.getElementById('position').value);
            const resultDiv = document.getElementById('result');
            const resultText = document.getElementById('resultText');

            if (!name || isNaN(hours)) {
                alert("กรุณากรอกข้อมูลให้ครบถ้วน");
                return;
            }

            let totalSalary = 0;
            const standardHours = 160;

            if (hours <= standardHours) {
                totalSalary = hours * rate;
            } else {
                const regularPay = standardHours * rate;
                const overtimeHours = hours - standardHours;
                const overtimePay = overtimeHours * (rate * 1.5);
                totalSalary = regularPay + overtimePay;
            }

            resultText.innerHTML = `คุณ ${name} <br> เงินเดือนรวม: ${totalSalary.toLocaleString()} บาท`;
            resultDiv.classList.remove('hidden');
        }

        function resetForm() {
            document.getElementById('name').value = '';
            document.getElementById('hours').value = '';
            document.getElementById('result').classList.add('hidden');
        }
    </script>
</body>
</html>
