<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media (max-width: 640px) {
            .grid-cols-4 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
    </style>
</head>

<body class="min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm py-4 px-6">
        <div class="flex justify-between items-center max-w-6xl mx-auto">
            <div>
                <h5 class="text-lg font-medium">
                    @auth
                        Hai, {{ Auth::user()->name }}
                    @else
                        Hai, Guest
                    @endauth
                </h5>

            </div>
            <div class="flex items-center space-x-4">
                <button class="p-2 rounded-full hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6 py-12">
        <!-- Menu Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Menu Item 1 -->
            <a href="/daftar" class="group">
                <div
                    class="flex flex-col items-center p-6 bg-white rounded-lg shadow hover:shadow-md transition-shadow duration-300">
                    <div class="p-4 bg-blue-50 rounded-full group-hover:bg-blue-100 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-blue-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <h3
                        class="mt-4 text-lg font-medium text-gray-900 group-hover:text-blue-600 transition-colors duration-300">
                        Pendaftaran</h3>
                </div>
            </a>

            <!-- Menu Item 2 -->
            <div class="group">
                <div
                    class="flex flex-col items-center p-6 bg-white rounded-lg shadow hover:shadow-md transition-shadow duration-300">
                    <div class="p-4 bg-green-50 rounded-full group-hover:bg-green-100 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.242 5.992h12m-12 6.003H20.24m-12 5.999h12M4.117 7.495v-3.75H2.99m1.125 3.75H2.99m1.125 0H5.24m-1.92 2.577a1.125 1.125 0 1 1 1.591 1.59l-1.83 1.83h2.16M2.99 15.745h1.125a1.125 1.125 0 0 1 0 2.25H3.74m0-.002h.375a1.125 1.125 0 0 1 0 2.25H2.99" />
                        </svg>
                    </div>
                    <h3
                        class="mt-4 text-lg font-medium text-gray-900 group-hover:text-green-600 transition-colors duration-300">
                        Cek Antrian</h3>
                </div>
            </div>

            <!-- Menu Item 3 -->
            <div class="group">
                <div
                    class="flex flex-col items-center p-6 bg-white rounded-lg shadow hover:shadow-md transition-shadow duration-300">
                    <div class="p-4 bg-purple-50 rounded-full group-hover:bg-purple-100 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                    </div>
                    <h3
                        class="mt-4 text-lg font-medium text-gray-900 group-hover:text-purple-600 transition-colors duration-300">
                        Jadwal Konsul</h3>
                </div>
            </div>

            <!-- Menu Item 4 -->
            <div class="group">
                <div
                    class="flex flex-col items-center p-6 bg-white rounded-lg shadow hover:shadow-md transition-shadow duration-300">
                    <div class="p-4 bg-yellow-50 rounded-full group-hover:bg-yellow-100 transition-colors duration-300">
                        <a href="pembayaran">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-yellow-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                        </a>
                    </div>
                    <h3
                        class="mt-4 text-lg font-medium text-gray-900 group-hover:text-yellow-600 transition-colors duration-300">
                        Pembayaran</h3>
                </div>
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
