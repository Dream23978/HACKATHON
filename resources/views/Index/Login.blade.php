<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <img src="{{ url('img/LOGO.png') }}" height="240"
        class="static -mt-24 md:mt-44 lg:-mt-44 scale-75 left-5 bg-transparent rounded-4xl">

    <div class=" min-h-screen bg-gray-100 flex items-center justify-center -mt-44 rounded-4xl   p-5">
        <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">MEADYS <br class="text-[1rem]">Login</h2>

            <form method="POST" class="space-y-6" action="{{ route('login_store') }}">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="text" name="email" id="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder=" Masukkan email anda..." />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kata sandi</label>
                    <input type="password" name="password" id="password" autocomplete="current-password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="Masukkan kata sandi anda" />
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                        <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                    </label>
                    <a href="{{ route('reset') }}" class="text-sm text-indigo-600 hover:text-indigo-500">Lupa Kata
                        Sandi?</a>
                </div>

                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors">
                    Masuk
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-600">
                Tidak punya akun?
                <a href="/register_user" class="font-semibold text-indigo-600 hover:text-indigo-500">Daftar di sini</a>

            </div>
        </div>
    </div>

</body>

</html>
