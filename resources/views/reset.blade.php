<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
           @vite('resources/css/app.css')
    <title>Reset password</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-t from-[#8db9f2c8] to-[#fcfcfc]">

  <img src ="{{ url('img/LOGO_MEADYS.png') }} "width="440" class=" relative -top-14">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 -mt-64  shadow  shadow-xl/30">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm
    shadow-xl">
  </div>
  <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Ubah kata sandi </h2>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm rounded-2xl ">
    <form class="space-y-6"  >
        @csrf
      <div>
        <label for="username" class="block text-sm/6 font-medium text-gray-900">Kata sandi baru</label>
        <div class="mt-2">
          <input type="text" name="username" id="username"  required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
        <label for="username" class="block text-sm/6 font-medium text-gray-900">Ketik ulang kata sandi</label>
        <div class="mt-2">
          <input type="text" name="username" id="username"  required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">



      </div>

      <div>

        <a href="{{route('masuk')}}" class="font-semibold text-indigo-600 hover:text-indigo-500">Reset</a>
    </form>

  <div class=" md:block ml-28 text-sm text-slate-700 mt-6">
      {{ date('Y M d | H:i') }}
    </div>
    </p>
  </div>
</div>
</body>
</html>

</body>
</html>
