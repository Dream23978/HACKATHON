<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Antrian</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm py-4 px-6">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-2xl font-bold">Cek Antrian</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 sm:px-6 py-12">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Status Antrian Anda</h2>

            <div class="mb-6">
                <p class="text-gray-700">Nama: <span class="font-bold">{{ $name }}</span></p>
                <p class="text-gray-700">Nomor Pendaftaran: <span class="font-bold">{{ $registration_number }}</span>
                </p>
                <p class="text-gray-700">Provinsi: <span class="font-bold">{{ $pilih_provinsi }}</span></p>
                <p class="text-gray-700">Rumah Sakit: <span class="font-bold">{{ $pilih_rumah_sakit }}</span></p>
                <p class="text-gray-700">Poli: <span class="font-bold">{{ $pilih_poli }}</span></p>
            </div>

            <div class="mb-6">
                <h3 class="text-md font-medium">Posisi Anda di Antrian:</h3>
                <p class="text-lg font-bold text-blue-600">{{ $queue_position }}</p>
                <p class="text-gray-700">Estimasi Waktu Tunggu: <span
                        class="font-bold">{{ $estimated_wait_time }}</span></p>
            </div>

            <div>
                <h3 class="text-md font-medium">Apa yang harus dilakukan selanjutnya?</h3>
                <p class="text-gray-700 mb-3">Silakan tunggu panggilan yang sudah tertera di atas. Terimakasih</p>
                <a href="{{ route('homepage') }}"
                    class="mt-5 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-300">
                    Kembali ke Menu Utama
                </a>
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
