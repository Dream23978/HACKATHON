<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm py-4 px-6">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-2xl font-bold">Pembayaran</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 sm:px-6 py-12">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Metode Pembayaran</h2>

            <!-- Payment Details -->
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

            <!-- Cash Payment Method -->
            <div class="mb-6">
                <h3 class="text-md font-medium">Cash (Bayar ke Dokter Langsung)</h3>
                <button
                    class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-300 w-full sm:w-auto">
                    Bayar Sekarang
                </button>
            </div>

            <!-- Bank Transfer Payment Method -->
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
            &copy; 2023 Aplikasi Kesehatan. All rights reserved.
        </div>
    </footer>
</body>

</html>
