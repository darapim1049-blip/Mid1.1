<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณเลขยกกำลัง</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white rounded-2xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden mx-4">
        
        <div class="p-8 md:w-1/2">
            <h2 class="text-2xl font-bold text-gray-700 mb-6">2.6 คำนวณเลขยกกำลัง</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-500 mb-1">ฐาน (Base)</label>
                    <input type="number" id="base" placeholder="กรอกฐาน" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
                </div>

                <div>
                    <label class="block text-gray-500 mb-1">เลขชี้กำลัง (Exponent)</label>
                    <input type="number" id="exponent" placeholder="กรอกเลขชี้กำลัง" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
                </div>

                <div class="flex gap-4 pt-4">
                    <button onclick="calculatePower()" 
                        class="bg-pink-500 hover:bg-pink-600 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        คำนวณ
                    </button>
                    <button onclick="clearForm()" 
                        class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 px-6 rounded-lg transition duration-200">
                        เคลียร์ผลลัพธ์
                    </button>
                </div>
            </div>

            <div id="result-container" class="mt-8 p-4 bg-gray-50 rounded-lg hidden">
                <p class="text-gray-600">ผลลัพธ์คือ:</p>
                <p id="result-display" class="text-3xl font-bold text-pink-600">0</p>
            </div>
        </div>

        <div class="bg-orange-500 p-8 md:w-1/2 text-white flex flex-col justify-center">
            <h3 class="text-xl font-bold mb-4">วิธีการคำนวณเลขยกกำลัง</h3>
            <p class="mb-4 text-orange-50 font-light">
                โปรแกรมนี้ใช้วิธีการวนลูปเพื่อคำนวณเลขยกกำลัง รองรับทั้งเลขชี้กำลังบวกและลบ โดยมีเงื่อนไขดังนี้
            </p>
            <ul class="list-disc list-inside space-y-2 text-orange-50 font-light">
                <li>หากเลขชี้กำลังเป็นบวก จะคูณฐานซ้ำตามจำนวนที่กำหนด</li>
                <li>หากเลขชี้กำลังเป็นลบ จะคำนวณกลับค่าโดยใช้ 1/ผลลัพธ์</li>
            </ul>
        </div>

    </div>

    <script>
        function calculatePower() {
            const base = parseFloat(document.getElementById('base').value);
            const exponent = parseInt(document.getElementById('exponent').value);
            const resultDisplay = document.getElementById('result-display');
            const resultContainer = document.getElementById('result-container');

            if (isNaN(base) || isNaN(exponent)) {
                alert("กรุณากรอกข้อมูลให้ครบถ้วน");
                return;
            }

            let result = 1;
            const absExponent = Math.abs(exponent);

            // ใช้ลูปในการคำนวณตามเงื่อนไข
            for (let i = 0; i < absExponent; i++) {
                result *= base;
            }

            // ถ้าเลขชี้กำลังเป็นลบ ให้กลับค่า
            if (exponent < 0) {
                result = 1 / result;
            }

            // จัดการกรณีเลขชี้กำลังเป็น 0
            if (exponent === 0) {
                result = 1;
            }

            // แสดงผลลัพธ์ (ตัดทศนิยมถ้าเลขยาวเกินไป)
            resultDisplay.innerText = Number.isInteger(result) ? result : result.toFixed(4);
            resultContainer.classList.remove('hidden');
        }

        function clearForm() {
            document.getElementById('base').value = '';
            document.getElementById('exponent').value = '';
            document.getElementById('result-container').classList.add('hidden');
        }
    </script>
</body>
</html>