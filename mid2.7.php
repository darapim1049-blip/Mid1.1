<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาจำนวนเฉพาะ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-xl shadow-2xl overflow-hidden max-w-4xl w-full flex flex-col md:flex-row">
        
        <div class="p-8 md:w-1/2">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">2.7 ค้นหาจำนวนเฉพาะ (prime number)</h2>
            
            <form id="primeForm" class="space-y-4">
                <div>
                    <label class="block text-gray-600 mb-1">ช่วงเริ่มต้น (start)</label>
                    <input type="number" id="start" placeholder="กรอกช่วงเริ่มต้น" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 transition">
                </div>
                
                <div>
                    <label class="block text-gray-600 mb-1">ช่วงสิ้นสุด (end)</label>
                    <input type="number" id="end" placeholder="กรอกช่วงสิ้นสุด" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 transition">
                </div>

                <div class="flex gap-3 pt-4">
                    <button type="button" onclick="findPrimes()" 
                        class="flex-1 bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 rounded-lg transition shadow-md">
                        ค้นหา
                    </button>
                    <button type="reset" onclick="clearResult()" 
                        class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 rounded-lg transition">
                        ล้างข้อมูล
                    </button>
                </div>
            </form>

            <div id="resultContainer" class="mt-6 p-4 bg-orange-50 rounded-lg hidden">
                <p class="text-sm font-semibold text-orange-800 mb-2">ผลลัพธ์ที่ได้:</p>
                <div id="result" class="text-gray-700 break-words"></div>
            </div>
        </div>

        <div class="bg-[#f06262] p-8 md:w-1/2 flex flex-col justify-center text-white">
            <h3 class="text-2xl font-bold mb-4 text-center">รายละเอียดโจทย์</h3>
            <p class="mb-6 text-center text-white/90">
                กรอกช่วงตัวเลขเริ่มต้นและสิ้นสุดเพื่อแสดงตัวเลขเฉพาะในช่วงนั้น
            </p>
            <ul class="space-y-3 text-sm">
                <li class="flex items-start">
                    <span class="mr-2">•</span>
                    <span>ตัวเลขเฉพาะจะต้องไม่มีตัวหารอื่น นอกจาก 1 และตัวมันเอง</span>
                </li>
                <li class="flex items-start">
                    <span class="mr-2">•</span>
                    <span>โปรแกรมจะวนซ้ำตรวจสอบตัวเลขในช่วงที่กำหนด</span>
                </li>
            </ul>
        </div>
    </div>

    <script>
        function isPrime(num) {
            if (num <= 1) return false;
            for (let i = 2; i <= Math.sqrt(num); i++) {
                if (num % i === 0) return false;
            }
            return true;
        }

        function findPrimes() {
            const start = parseInt(document.getElementById('start').value);
            const end = parseInt(document.getElementById('end').value);
            const resultDiv = document.getElementById('result');
            const container = document.getElementById('resultContainer');
            
            if (isNaN(start) || isNaN(end)) {
                alert("กรุณากรอกตัวเลขให้ครบถ้วน");
                return;
            }

            let primes = [];
            for (let i = start; i <= end; i++) {
                if (isPrime(i)) {
                    primes.push(i);
                }
            }

            container.classList.remove('hidden');
            if (primes.length > 0) {
                resultDiv.innerHTML = primes.join(', ');
            } else {
                resultDiv.innerHTML = '<span class="text-red-500">ไม่พบจำนวนเฉพาะในช่วงนี้</span>';
            }
        }

        function clearResult() {
            document.getElementById('resultContainer').classList.add('hidden');
            document.getElementById('result').innerHTML = '';
        }
    </script>
</body>
</html> 