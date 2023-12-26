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
                        <th class="py-5 font-bold text-white">Nama Pendonor</th>
                        <th class="py-5 font-bold text-white">Email</th>
                        <th class="py-5 font-bold text-white">Tempat Donor</th>
                        <th class="py-5 font-bold text-white">Gol Darah</th>
                        <th class="py-5 font-bold text-white">Riwayat Kesehatan</th>
                    </tr>
                </thead>
                <tbody>
    
                    <tr class=" text-center">
                        <td class=" py-5 px-3 font-bold border border-black">{{ $daftars-> created_at }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $daftars-> nama }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $daftars-> email }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $daftars-> rumahsakit }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $daftars-> golongandarah }}</td>
                        <td class=" py-5 px-3 font-bold border border-black">{{ $daftars-> riwayatkesehatan }}</td>
                    </tr>
                  
                </tbody>
            </table>    
        </div>
    </section>


</body>
</html>