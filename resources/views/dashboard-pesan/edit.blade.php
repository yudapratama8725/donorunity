<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('./resources/css/app.css')
</head>
<body style="">



    <section class=" w-full h-full py-56">
        <div class="flex flex-col max-w-[1700px] items-center justify-center mx-auto">
            <div class="flex flex-col items-center justify-center">
                <h1 class=" text-4xl font-bold text-center">KONTAK KAMI DISINI</h1>
                <div class=" pt-5">
                    <div class="w-[300px] h-2 bg-p-red rounded-xl ">
    
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-[1700px] mx-auto ">
            <form action="{{ route('dashboard-pesan.update', $pesans->id) }}" method="post" class="">
                @csrf 
                <div class=" flex flex-row justify-center items-center pt-5 pb-1">
                    <div class="w-full mx-5">
                        <input type="text" name="nama" value="{{ old('nama', $pesans-> nama) }}" placeholder="Input Nama Lengkap" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium ">
                        <label for="Input Nama Lengkap" class=""></label>
                    </div>
                    <div class="w-full mx-5">
                        <input type="text" name="email" value="{{ old('email', $pesans-> email) }}" placeholder="Input Email" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium ">
                        <label for="Input Email"></label>
                    </div>
                </div>
                <div class=" flex flex-row justify-center items-center py-1">
                    <div class="w-full mx-5">
                        <input type="text" name="topik" value="{{ old('topik', $pesans-> topik) }}" placeholder="Topik Pertanyaan" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium ">
                        <label for="Topik Pertanyaan" class=""></label>
                    </div>
                    <div class="w-full mx-5">
                        <input type="text" name="pekerjaan" value="{{ old('pekerjaan', $pesans-> pekerjaan) }}" placeholder="Input Pekerjaan" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium ">
                        <label for="Input Pekerjaan"></label>
                    </div>
                </div>
                <div class="flex justify-center items-center py-1 mx-5">
                    <textarea name="pertanyaan" value="{{ old('pertanyaan', $pesans-> pertanyaan) }}" class="description sec p-3 h-56 outline-none w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium " spellcheck="false" placeholder="Pertanyaan">{{ old('pertanyaan', $pesans-> pertanyaan) }}</textarea>
                </div>
                <div class="flex justify-center items-center py-5 mx-5">
                    <button type="submit" class="flex justify-center bg-p-red py-3 border border-p-red rounded-lg items-center w-full" onclick="showAlert()">
                        <a type="submit" class="text-white font-medium text-center" onclick="showAlert()">EDIT</a>
                    </button>
                </div>
            </form>
        </div>
    </section>


</body>
</html>