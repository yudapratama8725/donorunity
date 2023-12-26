<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    @vite('./resources/css/app.css')
</head>
<script type="text/javascript" src="/js/app.js"></script>
<body>
    
    <div class="flex flex-col h-full bg-gray-100">

        <div class="md:hidden bg-white text-white shadow w-full p-2 flex items-center justify-center">
            <div class="flex h-14 items-center justify-center">
                
                <div id="menuBtn" class="space-y-1 md:hidden z-40">
                    <div class="w-6 h-1" style="background-color: #000745;"></div>
                    <div class="w-6 h-1" style="background-color: #000745;"></div>
                    <div class="w-6 h-1" style="background-color: #000745;"></div>
                </div>
            </div>  
        </div>

        <div class="flex-1 flex flex-row">
            <div class="md:w-1/5">
                <div class="p-2 bg-white md:w-full h-full w-[300px] flex-col md:flex hidden pt-5" id="sideNav">
                    <div class="flex flex-col justify-center items-center mx-5 my-5"> 
                        <img src="{{ URL('image/logo.png') }}" alt="" class=" ">
                        <h1 class="mx-4 font-bold pt-5">Admin Donor</h1>
                    </div>
                    <div class="pt-5">
                        <div class="w-full h-1 mx-1" style="background-color: #000745;"></div>
                    </div>
    
                    <div class="relative w-full pt-5">
                        <div class="flex absolute left-0 top-[30px] items-center justify-center pl-3 pointer-events-none">
                            <img src="{{ URL('image/search.svg') }}" alt="" class="">
                        </div>
                        <input class="w-full h-10 pl-10 pr-4 py-1 text-base bg-p-red placeholder:text-white rounded-md focus:shadow-outline" type="search" placeholder="Search">
                    </div>
    
                    <nav class="">
                        <a class="block text-black py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-p-red hover:to-p-red hover:text-white bg-p-red" href="#">
                            <div class=" flex flex-row">
                                <div class=" max-w-[20px]">
                                    <img src="{{ URL('image/beranda.svg') }}" alt="Logo" class="">
                                </div>
                                <h1 class="ml-5">Beranda</h1>
                            </div>
                        </a>

                        <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-p-red hover:to-p-red hover:text-white" href="/dashboard-pesan">
                            
                            <div class=" flex flex-row">
                                <div class=" max-w-[20px]">
                                    <img src="{{ URL('image/catatan.svg') }}" alt="Logo" class="">
                                </div>
                                <h1 class="ml-5">Pesan</h1>
                            </div>
                        </a>

                        <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-p-red hover:to-p-red hover:text-white" href="#">
                            <div class=" flex flex-row">
                                <div class=" max-w-[20px]">
                                    <img src="{{ URL('image/notif.svg') }}" alt="Logo" class="">
                                </div>
                                <h1 class="ml-5">Notifikasi</h1>
                            </div>
                        </a>
                       
                        
                        <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-p-red hover:to-p-red hover:text-white" href="#">
                            <div class=" flex flex-row">
                                <div class=" max-w-[20px]">
                                    <img src="{{ URL('image/pengaturan.svg') }}" alt="Logo" class="">
                                </div>
                                <h1 class="ml-5">Pengaturan</h1>
                            </div>
                        </a>
                        <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-p-red hover:to-p-red hover:text-white" href="/home" onclick="showAlert()">
                            <div class=" flex flex-row">
                                <div class=" max-w-[20px]">
                                    <img src="{{ URL('image/logout.svg') }}" alt="Logo" class="">
                                </div>
                                <h1 class="ml-5">Logout</h1>
                            </div>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="mx-10 my-10 w-4/5">
                <div class="flex flex-col  mx-auto">
                    <div class="flex flex-row font-bold pb-3">
                        <h1>Info Data  </h1>
                        <img src="{{ URL('image/acc/next.svg') }}" alt="" class="">
                        <h1>13 Oktober 2023  </h1>
                    </div>
                    <div class="pb-7">
                        <h1 class="font-bold text-2xl">Informasi Laporan Donor Darah </h1>
                    </div>
                    <div class="w-full flex flex-row justify-between ">
                        <h1 class=" font-bold text-sm">Jumlah Pendonor Keseluruhan</h1>
                        <h1 class=" font-bold text-sm">Target Pendonor Darah</h1>
                    </div>
                    <div class="w-full flex flex-row justify-between ">
                        <h1 class=" font-bold text-xl">20.000</h1>
                        <h1 class=" font-bold text-xl">100.000</h1>
                    </div>
                    <div class=" py-2">
                        <div class=" absolute bg-red-700 h-5 rounded-full z-10" style="width: 20%"></div>
                        <div class=" relative bg-p-red h-5 rounded-full z-0" style="width: 100%"></div>
                    </div>
                    <div class="w-full flex flex-row justify-between pb-5">
                        <h1 class=" font-bold text-lg">20%</h1>
                        <h1 class=" font-bold text-lg">80%</h1>
                    </div>
                    <div class="pb-3">
                        <div class=" h-32 w-full bg-p-red rounded-2xl">
                            
                        </div>
                    </div>

                    <div class="py-2">
                        <table class="w-full table-auto text-sm rounded-lg overflow-hidden">
                            <thead class="">
                                <tr class="text-sm leading-normal bg-red-700">
                                    <th class="py-5 font-bold text-white">Tanggal</th>
                                    <th class="py-5 font-bold text-white">Nama Pendonor</th>
                                    <th class="py-5 font-bold text-white">Tempat Donor</th>
                                    <th class="py-5 font-bold text-white">Gol Darah</th>
                                    <th class="py-5 font-bold text-white">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $daftars as $items)
          
                                <tr class=" text-center">
                                    <td class=" py-5 pl-3 font-bold border border-black">{{ $items-> created_at }}</td>
                                    <td class=" py-5 pl-3 font-bold border border-black">{{ $items-> nama }}</td>
                                    <td class=" py-5 pl-3 font-bold border border-black">{{ $items-> rumahsakit }}</td>
                                    <td class=" py-5 pl-3 font-bold border border-black">{{ $items-> golongandarah }}</td>
                                    <td class=" py-5 pl-3 border border-black">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('dashboard-daftar.destroy', $items->id) }}" method="POST">
                                            <a href="{{ route('dashboard-daftar.show', $items->id) }}" class=" p-3 bg-blue-700 rounded-lg">SHOW</a>
                                            <a href="{{ route('dashboard-daftar.edit', $items->id) }}" class=" p-3 bg-green-700 rounded-lg">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" p-3 bg-red-700 rounded-lg">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                
                                @endforeach    
                              
                            </tbody>
                        </table>    
                    </div>
                    
                    
                </div>
            </div>
        </div>

    </div>
    
    
    
    <script src="{{ asset('js/style.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        function showAlert() {
            // Tampilkan alert sukses
            sweetAlert("Selamat", "Login Berhasil", "success");
        }
    </script>
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');

        menuBtn.addEventListener('click', () => {
        sideNav.classList.toggle('hidden');
        });

        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
</body>
</html>