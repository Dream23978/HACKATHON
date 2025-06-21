<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
</head>

<body class="bg-gradient-to-t from-[#8db9f2c8] to-[#fcfcfc] flex items-center justify-center min-h-screen">

    <img src="{{ url('img/LOGO.png') }}" height="240" class="relative -top-14">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 -mt-40 rounded-2xl shadow-xl w-full max-w-md">
        <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Register</h2>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-900">Nama Pengguna</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="username" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-600" />
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-600" />
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-900">Kata Sandi</label>
                    </div>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-600" />
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Sudah punya akun?
                <a href="/" class="font-semibold text-indigo-600 hover:text-indigo-500">Login</a>
            </p>
        </div>
    </div>
</body>

</html>
