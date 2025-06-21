<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal Konsul</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <!-- Header -->
    <header class="bg-white shadow-sm py-4 px-6">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-2xl font-bold">Jadwal Konsultasi</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 sm:px-6 py-12">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Daftar Jadwal Konsultasi</h2>

            <!-- Schedule Table -->
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Tanggal & waktu (created)</th>
                        <th class="py-2 px-4 border-b">Nama</th>
                        {{-- <th class="py-2 px-4 border-b">Waktu</th> --}}
                        <th class="py-2 px-4 border-b">Dokter</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                        <tr>
                            <th class="py-2 px-4 border-b">{{ $schedule->created_at }}</th>
                            <th class="py-2 px-4 border-b">{{ $name }}</th>
                            {{-- <td class="py-2 px-4 border-b">{{ $schedule->created_at }}</td> --}}
                            <th class="py-2 px-4 border-b">{{ $schedule->doctor_name }}</th>
                            <th class="py-2 px-4 border-b">
                                <a href="{{ route('antri_index', ['schedule_id' => $schedule->id]) }}"
                                    class="text-blue-600 hover:underline">Cek Antrian</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-accent-content py-6 px-6 border-t mt-12 lg:-mt-11 h-36 rounded-2xl">
        <div class=" font-bold font-mono max-w-6xl mx-auto text-center text-white  text-[1rem] mt-6 lg:-ml-6">
            <h1 class="lg:-ml-[35rem]">Kontak Kami</h1>
            <h1 class="lg:-ml-[35rem]  hover:underline">MEADYS@Gmail.com</h1>
        </div>
        <div class=" font-bold font-mono max-w-6xl mx-auto text-center text-white  text-[1rem] mt-6">
            <h1 class="lg:-ml-[0rem] lg:-mt-19">Alamat</h1>
            <h1 class="lg:-ml-[0rem] lg:mt-1 hover:underline">Jalan Ujung Pandang, Sungai Jawi, Pal Lima </h1>
        </div>
        <div
            class="font-bold font-mono max-w-6xl mx-auto text-center text-white  text-[1rem] lg:ml-[60rem] lg:-mt-[3rem] lg:opacity-75">
            &copy; MEADYS.<br>Hak cipta dilindungi
        </div>
    </footer>
</body>

</html>
