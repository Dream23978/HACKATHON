<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gray-50 animate-fadeinb">



         <nav class=" top-0 w-full backdrop-blur bg-white/80 shadow-sm z-50">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-extrabold tracking-wider text-slate-900">MEADYS</h1>


            <div class="flex-1 flex justify-center">
                <ul class="flex gap-6 text-sm md:text-base font-medium">
                    <li><a href="/home" class="hover:text-indigo-600 transition">Home</a></li>
                    <li><a href="/antrian" class="hover:text-indigo-600 transition"> Antrian</a></li>

                    <li><a href="/jadwalKonsul" class="hover:text-indigo-600 transition">Jadwal Konsul</a></li>
                    <li><a href="/pembayaran" class="hover:text-indigo-600 transition">Pembayaran</a></li>
                </ul>
            </div>

            <div class="hidden md:block ml-4 text-sm text-slate-700">
                {{ date('Y M d | H:i') }}
            </div>
        </div>
    </nav>
    <header class="bg-white shadow-sm py-4 px-6">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-2xl font-bold">Pembayaran</h1>
        </div>
    </header>
    <main class="max-w-6xl mx-auto px-4 sm:px-6 py-12">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Metode Pembayaran</h2>

            <div class="mb-6">
                <h3 class="text-md font-medium">Pembayaran untuk:</h3>
                <ul class="list-disc list-inside mb-4">
                    <li>Jadwal Konsultasi: Rp 300.000</li>
                    <li>Biaya Administrasi: Rp 50.000</li>
                    <li>Obat dan Perawatan: Rp 150.000</li>
                </ul>
                <p class="text-gray-700">Jumlah yang harus dibayar: <span class="font-bold text-lg">Rp 500.000</span>
                </p>
            </div>

            <div class="mb-6">
                <h3 class="text-md font-medium">Cash (Bayar ke Dokter Langsung)</h3>
                <button
                    class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-300 w-full sm:w-auto">
                    Bayar Sekarang
                </button>
            </div>

            <div>
                <h3 class="text-md font-medium">Transfer Bank (Prototype)</h3>
                <p class="text-gray-700">Silakan transfer ke rekening berikut:</p>
                <ul class="list-disc list-inside mb-4">
                    <li>Bank: ABC Bank</li>
                    <li>Nomor Rekening: 123-456-789</li>
                    <li>Atas Nama: Dr. John Doe</li>
                </ul>
                <p class="text-gray-700">Setelah melakukan transfer, silakan klik tombol di bawah ini untuk konfirmasi.
                </p>
                <a href="/home">
                    <button
                        class="mt-4 px-4 py-2 bg-yellow-600 text-black rounded hover:bg-green-700 transition duration-300 w-full sm:w-auto">
                        batalkan / Kembali
                    </button>
                </a>
                <button
                    class="mt-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition duration-300 w-full sm:w-auto">
                    Konfirmasi Transfer
                </button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white py-6 px-6 border-t mt-12">
        <div class="max-w-6xl mx-auto text-center text-gray-500 text-sm">
            &copy; 2025 Aplikasi Kesehatan. All rights reserved.
        </div>
    </footer>
</body>

</html>
