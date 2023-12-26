<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('./resources/css/app.css')
</head>
<body style="">



    <section class=" w-full h-screen bg-white flex justify-center">
        
        <div class="py-2 flex items-center justify-center">
            <table class="w-full table-auto text-sm rounded-lg overflow-hidden bg-p-red ">
                <thead class="">
                    <tr class="text-sm leading-normal bg-red-700">
                        <th class="py-5 font-bold text-white">Tanggal</th>
                        <th class="py-5 font-bold text-white">Nama</th>
                        <th class="py-5 font-bold text-white">Email</th>
                        <th class="py-5 font-bold text-white">Topik</th>
                        <th class="py-5 font-bold text-white">Pekerjaan</th>
                        <th class="py-5 font-bold text-white">Pertanyaan</th>
                    </tr>
                </thead>
                <tbody>
    
                    <tr class=" text-center">
                        <td class=" py-5 px-3 font-bold border border-black">{{ $pesans-> created_at }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $pesans-> nama }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $pesans-> email }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $pesans-> topik }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $pesans-> pekerjaan }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $pesans-> pertanyaan }}</td>
                    </tr>
                  
                </tbody>
            </table>    
        </div>
    </section>


</body>
</html>