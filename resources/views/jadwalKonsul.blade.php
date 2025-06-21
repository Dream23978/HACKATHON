<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal Konsul</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-50">
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
                        {{-- <th class="py-2 px-4 border-b">Waktu</th> --}}
                        <th class="py-2 px-4 border-b">Dokter</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                        <tr>
                            <th class="py-2 px-4 border-b">{{ $schedule->created_at }}</th>
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
    <footer class="bg-white py-6 px-6 border-t mt-12">
        <div class="max-w-6xl mx-auto text-center text-gray-500 text-sm">
            &copy; 2023 Aplikasi Kesehatan. All rights reserved.
        </div>
    </footer>
</body>

</html>
