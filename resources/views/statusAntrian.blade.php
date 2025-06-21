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
    <header class="bg-white shadow-sm py-4 px-6 animate-fadeinb">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-2xl font-bold">Cek Antrian</h1>
        </div>

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
            &copy; MEADYS, Hak Cipta dilindungi
        </div>
    </footer>
</body>

</html>
