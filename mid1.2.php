<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณภาษีรถยนต์</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-xl shadow-2xl overflow-hidden max-w-4xl w-full flex flex-col md:flex-row">
        
        <div class="p-8 md:w-1/2">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">1.2 คำนวณภาษีรถยนต์</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">ขนาด CC ของรถยนต์</label>
                    <input type="number" id="ccInput" placeholder="กรอกจำนวน CC" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 outline-none transition">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1">ประเภทของรถยนต์</label>
                    <select id="typeInput" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 outline-none bg-white">
                        <option value="personal">รถยนต์ส่วนบุคคล</option>
                        <option value="truck">รถกระบะ</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1">อายุของรถยนต์ (ปี)</label>
                    <input type="number" id="ageInput" placeholder="กรอกอายุรถยนต์" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 outline-none transition">
                </div>

                <div class="flex gap-4 pt-4">
                    <button onclick="calculateTax()" class="flex-1 bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 rounded-lg transition duration-300 shadow-md">
                        คำนวณภาษี
                    </button>
                    <button onclick="clearFields()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-3 rounded-lg transition duration-300">
                        เคลียร์ผลลัพธ์
                    </button>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 bg-gradient-to-br from-orange-500 to-red-500 p-8 text-white flex flex-col justify-center items-center text-center">
            <h3 class="text-xl mb-2 opacity-90">ภาษีที่ต้องชำระทั้งหมด</h3>
            <div id="resultDisplay" class="text-5xl font-extrabold my-4">0.00</div>
            <p class="text-lg">บาท</p>
            
            <div id="detailDisplay" class="mt-6 text-sm opacity-80 italic">
                กรุณากรอกข้อมูลเพื่อคำนวณ
            </div>
        </div>
    </div>

    <script>
        function calculateTax() {
            const cc = parseFloat(document.getElementById('ccInput').value);
            const type = document.getElementById('typeInput').value;
            const age = parseFloat(document.getElementById('ageInput').value);
            const resultElement = document.getElementById('resultDisplay');
            const detailElement = document.getElementById('detailDisplay');

            if (isNaN(cc) || isNaN(age)) {
                alert("กรุณากรอกข้อมูลให้ครบถ้วน");
                return;
            }

            let tax = 0;

            // คำนวณตามประเภทและ CC
            if (type === 'personal') {
                if (cc <= 1500) tax = 500;
                else if (cc <= 2000) tax = 1000;
                else tax = 1500;
            } else { // รถกระบะ
                if (cc <= 1500) tax = 400;
                else if (cc <= 2000) tax = 800;
                else tax = 1200;
            }

            // คำนวณส่วนลดตามอายุรถ
            let discount = 0;
            if (age > 10) {
                discount = tax * 0.20;
            } else if (age > 5) {
                discount = tax * 0.10;
            }

            const finalTax = tax - discount;

            // แสดงผล
            resultElement.innerText = finalTax.toLocaleString(undefined, {minimumFractionDigits: 2});
            detailElement.innerHTML = `ภาษีตั้งต้น: ${tax} บาท <br> ส่วนลด: ${discount} บาท`;
        }

        function clearFields() {
            document.getElementById('ccInput').value = '';
            document.getElementById('ageInput').value = '';
            document.getElementById('resultDisplay').innerText = '0.00';
            document.getElementById('detailDisplay').innerText = 'กรุณากรอกข้อมูลเพื่อคำนวณ';
        }
    </script>
</body>
</html>