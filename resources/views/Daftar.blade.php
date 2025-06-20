<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite('resources/css/app.css')
    <title>Daftar</title>
</head>

<body>
    <form method="POST" action="{{ route('daftar.store') }}">
        @csrf
        <div class="w-52 ml-3">
            <label for="" class="ml-1">Pilih Provinsi</label>
            <select name="pilih_provinsi" id="pilih_provinsi" class="bg-amber-50 border-2 rounded-md">
                <option value="prov_none">Pilih Provinsi</option>
                <option value="kalbar">Kalimantan Barat</option>
                <option value="kaltim">Kalimantan Timur</option>
                <option value="kalsel">Kalimantan Selatan</option>
                <option value="kaltu">Kalimantan Utara</option>
                <option value="kalteng">Kalimantan Tengah</option>
            </select>
        </div>
        <div class="ml-3 mt-3 w-52 hidden" id="pilih_rumah_sakit">
            <label for="" class="ml-1">Pilih Rumah Sakit</label>
            <select name="pilih_rumah_sakit" id="pilih_rumah_sakit_select" class="bg-amber-50 border-2 rounded-md">
                <option value="rs_none">Pilih Rumah Sakit</option>
                <option value="rs_a">Rumah Sakit A</option>
                <option value="rs_b">Rumah Sakit B</option>
                <option value="rs_c">Rumah Sakit C</option>
                <option value="rs_d">Rumah Sakit D</option>
                <option value="rs_e">Rumah Sakit E</option>
            </select>
        </div>
        <div class="ml-3 mt-3 w-52 hidden" id="pilih_poli">
            <label for="" class="ml-1">Pilih Poli</label>
            <select name="pilih_poli" id="pilih_poli_select" class="bg-amber-50 border-2 rounded-md">
                <option value="poli_none">
                    Pilih Poli Sesuai Kebutuhan Anda
                </option>
                <option value="poli_anak">Poli Anak</option>
                <option value="poli_mata">Poli Mata</option>
                <option value="poli_bidan">
                    Poli Kebidanan & Kandungan
                </option>
                <option value="poli_gigi">Poli Gigi</option>
                <option value="poli_saraf">Poli Saraf</option>
            </select>
        </div>
        <div class="justify-center hidden" id="button_selesai">
            <button type="submit" class="border-2 m-2 p-2 rounded-2xl">
                Selesai
            </button>
        </div>
    </form>
    <script>
        let pilihProv = document.getElementById("pilih_provinsi");
        let pilihRumahSakitSelect = document.getElementById("pilih_rumah_sakit_select");
        let pilihRumahSakit = document.getElementById("pilih_rumah_sakit");
        let pilihPoli = document.getElementById("pilih_poli");
        let buttonSelesai = document.getElementById("button_selesai");
        pilihProv.addEventListener("change", function() {
            if (pilihProv.value != "prov_none") {
                pilihRumahSakit.classList.remove("hidden");
            }
        });
        pilihRumahSakitSelect.addEventListener("change", function() {
            if (pilihRumahSakitSelect.value != "rs_none") {
                pilihPoli.classList.remove("hidden");
            }
        });
        pilihPoli.addEventListener("change", function() {
            if (pilihPoli.value != "poli_none") {
                buttonSelesai.classList.remove("hidden");
                buttonSelesai.classList.add("flex");
            }
        });
    </script>
</body>

</html>
