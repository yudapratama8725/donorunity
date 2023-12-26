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
                @foreach ($data_alumni as $item)

                <tr>
                    <td class=" py-5 pl-3 font-bold border border-black">{{ $item['nama']}}</td>
                </tr>
                    
                @endforeach
                    
                                    
              
            </tbody>
        </table>
    </div>
    
    
    
    <script src="{{ asset('js/style.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');

        menuBtn.addEventListener('click', () => {
        sideNav.classList.toggle('hidden');
        });
    </script>
</body>
</html>