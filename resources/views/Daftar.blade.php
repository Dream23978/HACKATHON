<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite('resources/css/app.css')

    <title>Daftar</title>
</head>

<body class="animate-fadeinb" >
      <nav class=" top-0 w-full backdrop-blur bg-white/80 shadow-sm z-50">
  <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
    <h1 class="text-xl font-extrabold tracking-wider text-slate-900">MEADYS</h1>


    <div class="flex-1 flex justify-center">
      <ul class="flex gap-6 text-sm md:text-base font-medium">
        <li><a href="/home" class="hover:text-indigo-600 transition">Home</a></li>
        <li><a href="/statusAntrian" class="hover:text-indigo-600 transition"> Antrian</a></li>

        <li><a href="/jadwalKonsul" class="hover:text-indigo-600 transition">Jadwal Konsul</a></li>
        <li><a href="/jadwal" class="hover:text-indigo-600 transition">Pembayaran</a></li>
      </ul>
    </div>

    <div class="hidden md:block ml-4 text-sm text-slate-700">
      {{ date('Y M d | H:i') }}
    </div>
  </div>
</nav>
 <h1 class="font-bold text-6xl lg:text-center lg:mt-5  drop-shadow-2xl">Pendaftaran</h1>
    <section class="bg-amber-300-50 flex items-center justify-center min-h-screen  lg:-mt-28">


    <form method="POST" action="{{ route('daftar.store') }}" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md md:block sm:block">
        @csrf
        <div class="mb-4">
            <label for="pilih_provinsi" class="block text-sm font-medium text-gray-700">Pilih Provinsi</label>
            <select name="pilih_provinsi" id="pilih_provinsi" class="mt-1 block w-full bg-amber-50 border-2 border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-amber-200">
                <option value="prov_none">Pilih Provinsi</option>
                <option value="kalbar">Kalimantan Barat</option>
                <option value="kaltim">Kalimantan Timur</option>
                <option value="kalsel">Kalimantan Selatan</option>
                <option value="kaltu">Kalimantan Utara</option>
                <option value="kalteng">Kalimantan Tengah</option>
            </select>
        </div>
        <div class="mb-4 hidden" id="pilih_rumah_sakit">
            <label for="pilih_rumah_sakit_select" class="block text-sm font-medium text-gray-700">Pilih Rumah Sakit</label>
            <select name="pilih_rumah_sakit" id="pilih_rumah_sakit_select" class="mt-1 block w-full bg-amber-50 border-2 border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-amber-200">
                <option value="rs_none">Pilih Rumah Sakit</option>
                <option value="rs_a">Rumah Sakit A</option>
                <option value="rs_b">Rumah Sakit B</option>
                <option value="rs_c">Rumah Sakit C</option>
                <option value="rs_d">Rumah Sakit D</option>
                <option value="rs_e">Rumah Sakit E</option>
            </select>
        </div>
        <div class="mb-4 hidden" id="pilih_poli">
            <label for="pilih_poli_select" class="block text-sm font-medium text-gray-700">Pilih Poli</label>
            <select name="pilih_poli" id="pilih_poli_select" class="mt-1 block w-full bg-amber-50 border-2 border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-amber-200">
                <option value="poli_none">Pilih Poli Sesuai Kebutuhan Anda</option>
                <option value="poli_anak">Poli Anak</option>
                <option value="poli_mata">Poli Mata</option>
                <option value="poli_bidan">Poli Kebidanan & Kandungan</option>
                <option value="poli_gigi">Poli Gigi</option>
                <option value="poli_saraf">Poli Saraf</option>
            </select>
        </div>
        <div class="flex justify-center hidden" id="button_selesai">
            <button type="submit" class="border-2 m-2 p-2 rounded-2xl bg-blue-600 text-white hover:bg-blue-500 transition duration-200" onclick="showCustomImageSwal1()">
                Selesai
            </button>
        </div>
    </form>
     </section>

    <script>
        let pilihProv = document.getElementById("pilih_provinsi");
        let pilihRumahSakitSelect = document.getElementById("pilih_rumah_sakit_select");
        let pilihRumahSakit = document.getElementById("pilih_rumah_sakit");
        let pilihPoli = document.getElementById("pilih_poli");
        let buttonSelesai = document.getElementById("button_selesai");

        pilihProv.addEventListener("change", function() {
            if (pilihProv.value != "prov_none") {
                pilihRumahSakit.classList.remove("hidden");
            } else {
                pilihRumahSakit.classList.add("hidden");
                pilihPoli.classList.add("hidden");
                buttonSelesai.classList.add("hidden");
            }
        });

        pilihRumahSakitSelect.addEventListener("change", function() {
            if (pilihRumahSakitSelect.value != "rs_none") {
                pilihPoli.classList.remove("hidden");
            } else {
                pilihPoli.classList.add("hidden");
                buttonSelesai.classList.add("hidden");
            }
        });

        pilihPoli.addEventListener("change", function() {
            if (pilihPoli.value != "poli_none") {
                buttonSelesai.classList.remove("hidden");
                buttonSelesai.classList.add("flex");
            } else {
                buttonSelesai.classList.add("hidden");
            }
        });
    </script>

<footer class="bg-accent-content py-6 px-6 border-t mt-12 lg:-mt-11 h-36 rounded-2xl">
        <div class=" font-bold font-mono max-w-6xl mx-auto text-center text-white  text-[1rem] mt-6 lg:-ml-6">
          <h1 class="lg:-ml-[35rem]">Kontak Kami</h1>
          <h1 class="lg:-ml-[35rem]  hover:underline">MEADYS@Gmail.com</h1>
        </div>
        <div class=" font-bold font-mono max-w-6xl mx-auto text-center text-white  text-[1rem] mt-6">
          <h1 class="lg:-ml-[0rem] lg:-mt-19">Alamat</h1>
          <h1 class="lg:-ml-[0rem] lg:mt-1 hover:underline">Jalan Ujung Pandang, Sungai Jawi, Pal Lima </h1>
        </div>
        <div class="font-bold font-mono max-w-6xl mx-auto text-center text-white  text-[1rem] lg:ml-[60rem] lg:-mt-[3rem] lg:opacity-75">
               &copy; MEADYS.<br>Hak cipta dilindungi
               </div>
    </footer>
</body>

</html>
