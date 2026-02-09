<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.6 เช็คเลขคู่หรือเลขคี่</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-lg overflow-hidden max-w-4xl w-full">
        
        <div class="p-8 md:w-1/2 flex flex-col justify-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">1.6 เช็คเลขคู่หรือเลขคี่</h2>
            
            <div class="mb-6">
                <label for="numberInput" class="block text-gray-600 mb-2">กรอกตัวเลข</label>
                <input type="number" id="numberInput" placeholder="กรอกตัวเลข" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 transition">
            </div>

            <div class="flex gap-4">
                <button onclick="checkNumber()" 
                    class="flex-1 bg-green-500 hover:bg-green-600 text-white font-medium py-3 px-4 rounded-md transition duration-200">
                    ตรวจสอบ
                </button>
                <button onclick="clearResult()" 
                    class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-3 px-4 rounded-md transition duration-200">
                    เคลียร์ผลลัพธ์
                </button>
            </div>

            <div id="result" class="mt-6 text-center text-xl font-semibold text-gray-700"></div>
        </div>

        <div class="md:w-1/2 bg-gradient-to-br from-red-500 to-orange-500 min-h-[200px]">
            </div>

    </div>

    <script>
        function checkNumber() {
            const num = document.getElementById('numberInput').value;
            const resultDiv = document.getElementById('result');

            if (num === "") {
                resultDiv.innerText = "กรุณากรอกตัวเลขก่อนครับ";
                resultDiv.style.color = "#ef4444"; // สีแดง
                return;
            }

            // ใช้ Modulo (%) เพื่อหาเศษ
            if (parseInt(num) % 2 === 0) {
                resultDiv.innerText = num + " คือ เลขคู่";
                resultDiv.style.color = "#10b981"; // สีเขียว
            } else {
                resultDiv.innerText = num + " คือ เลขคี่";
                resultDiv.style.color = "#f59e0b"; // สีส้ม
            }
        }

        function clearResult() {
            document.getElementById('numberInput').value = "";
            document.getElementById('result').innerText = "";
        }
    </script>

</body>
</html>