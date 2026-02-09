<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.3 สูตรคูณ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row max-w-4xl w-full">
        
        <div class="p-8 flex-1">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">2.3 สูตรคูณ</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-600 mb-2">กรอกแม่สูตรคูณ</label>
                    <input type="number" id="numberInput" placeholder="กรอกแม่สูตรคูณ" 
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                
                <div class="flex gap-4">
                    <button onclick="generateTable()" 
                        class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-6 rounded transition duration-200">
                        แสดงสูตรคูณ
                    </button>
                    <button onclick="resetForm()" 
                        class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 px-6 rounded transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
            </div>

            <div id="result" class="mt-8 grid grid-cols-2 gap-2 text-lg text-gray-700">
                </div>
        </div>

        <div class="bg-[#e65b46] p-8 text-white flex-1 flex flex-col justify-center">
            <h3 class="text-xl font-bold mb-4 text-center">รายละเอียดโจทย์</h3>
            <p class="mb-4">กรอก **แม่สูตรคูณ** ที่ต้องการ (เช่น 2, 3, 5) แล้วระบบจะแสดงตารางสูตรคูณตั้งแต่ 1 ถึง 12</p>
            <ul class="list-disc list-inside space-y-2 text-sm opacity-90">
                <li>แสดงผลการคูณของตัวเลขในช่วง 1 ถึง 12</li>
                <li>สูตรคูณตามแม่ที่ผู้ใช้กรอก</li>
            </ul>
        </div>

    </div>

    <script>
        function generateTable() {
            const num = document.getElementById('numberInput').value;
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = ''; // ล้างค่าเก่า

            if (num === '') {
                alert('กรุณากรอกตัวเลขครับ');
                return;
            }

            for (let i = 1; i <= 12; i++) {
                const p = document.createElement('div');
                p.className = "border-b border-gray-100 py-1";
                p.innerHTML = `${num} x ${i} = <span class="font-bold text-green-600">${num * i}</span>`;
                resultDiv.appendChild(p);
            }
        }

        function resetForm() {
            document.getElementById('numberInput').value = '';
            document.getElementById('result').innerHTML = '';
        }
    </script>

</body>
</html>