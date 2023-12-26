<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('./resources/css/app.css')
</head>
<body style="">

    <section class=" w-full h-full py-40 z-0 bg-white">
        <div class="flex flex-col max-w-[1700px] items-center justify-center mx-auto">
            <div class="flex flex-col items-center justify-center">
                <h1 class=" text-4xl font-bold text-center">UPDATE DATA PENDAFTARAN</h1>
                <div class=" pt-5">
                    <div class="w-[300px] h-2 bg-p-red rounded-xl ">
    
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-[1700px] mx-auto ">
            <form action="{{ route('dashboard-daftar.update', $daftars->id) }}" method="post" class="">
                @csrf 

                @method('PUT')
                <div class=" flex flex-row justify-center items-center pt-5 pb-1">
                    <div class="w-full mx-5 ">
                        <input type="text" placeholder="Input Nama Lengkap" name="nama"class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium " value="{{ old('nama', $daftars-> nama) }}">
                        <label for="Input Nama Lengkap" class=""></label>
                    </div>
                    <div class="w-full mx-5">
                        <input type="text" placeholder="Input Email" name="email" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium " value="{{ old('email', $daftars-> email) }}">
                        <label for="Input Email"></label>
                    </div>
                </div>
                <div class=" flex flex-row justify-center items-center py-1">
                    <div class="w-full mx-5">
                        <input type="text" placeholder="Input Rumah Sakit" name="rumahsakit" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium "value="{{ old('rumahsakit', $daftars-> rumahsakit) }}">
                        <label for="Input Rumah Sakit" class=""></label>
                    </div>
                    <div class="w-full mx-5">
                        <input type="text" placeholder="Input Pekerjaan" name="pekerjaan" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium "value="{{ old('pekerjaan', $daftars-> pekerjaan) }}">
                        <label for="Input Pekerjaan"></label>
                    </div>
                </div>
                <div class=" flex flex-row justify-center items-center py-1">
                    <div class="w-full mx-5 ">
                        <input type="text" placeholder="Input Golongan Darah" name="golongandarah" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium "value="{{ old('golongandarah', $daftars-> golongandarah) }}">
                        <label for="Input Golongan Darah" class=""></label>
                    </div>
                    <div class="w-full mx-5 ">
                        <input type="file" placeholder="File Kesehatan" accept=".pdf" name="filekesehatan" class="w-full px-6 py-3 mb-2 border placeholder:text-black text-black bg-s-pink rounded-lg font-medium "value="{{ old('filekesehatan', $daftars-> filekesehatan) }}">
                        <label for="File Kesehatan"></label>
                    </div>
                </div>
                <div class="flex justify-center items-center py-1 mx-5">
                    <textarea name="riwayatkesehatan" class="description sec p-3 h-56 outline-none w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium " value="{{ old('riwayatkesehatan', $daftars-> riwayatkesehatan) }}" spellcheck="false" placeholder="Deskripsikan Riwayat Kesehatan">{{ old('riwayatkesehatan', $daftars-> riwayatkesehatan) }}</textarea>
                </div>
                <div class="flex justify-center items-center py-5 mx-5">
                    <button type="submit" class="flex justify-center bg-p-red py-3 border border-p-red rounded-lg items-center w-full" onclick="showAlert()">
                        <a class="text-white font-medium text-center" type="submit" onclick="showAlert()">Edit</a>
                    </button>
                </div>
            </form>
            
        </div>
    </section>


</body>
</html>