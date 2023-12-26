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
<body class=" bg-bg-blue">
    <section class="w-full h-screen bg-white shadow-lg overflow-hidden">
        <div>
            <nav class="w-full  fixed top-0 z-50">
                <div class="flex flex-row items-center justify-between h-24 px-5 max-w-[1700px] mx-auto">
                    <img src="{{ URL('image/logo.png') }}" alt="">
                    <ul  class="hidden md:flex flex-row text-slate-500">
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110 ">
                            <a href="/home"">Home</a>
                        </li>
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110 font-bold text-p-red">
                            <a href="/about">About</a>
                        </li>
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110">
                            <a href="/jadwal">Jadwal</a>
                        </li>
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110">
                            <a href="/daftar">Daftar</a>
                        </li>
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110">
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                    <div class="flex flex-row justify-end">
                        <button class="hidden md:flex justify-center bg-p-red w-[165px] py-3 border border-p-red rounded-md items-center transition duration-300 hover:scale-110">
                            <a class="text-white text-center" href="login">Login</a>
                        </button>
                        <button class="hidden md:flex justify-center border bg-white border-p-red w-[165px] py-3  rounded-md items-center transition duration-300 hover:scale-110 ml-5">
                            <a class="text-p-red text-center" href="signin">Daftar</a>
                        </button>
                    </div>
                    <div id="hamburger" class="space-y-1 md:hidden z-40">
                        <div class="w-6 h-1" style="background-color: #000745;"></div>
                        <div class="w-6 h-1" style="background-color: #000745;"></div>
                        <div class="w-6 h-1" style="background-color: #000745;"></div>
                    </div>
                    <ul id="menu" class="hidden font-medium text-xl absolute left-0 top-0 w-full p-10 rounded-b-2xl space-y-10 text-center bg-white shadow-md" style="color: #434343;">
                        <img class="items-start top-0" src="image/Decky.svg" alt="">
                        <li class="hover:text-p-red">
                            <a href="/home"">Home</a>
                        </li>
                        <li class="hover:text-p-red">
                            <a href="/about">About</a>
                        </li>
                        <li class="hover:text-p-red">
                            <a href="/jadwal">Jadwal</a>
                        </li>
                        <li class="hover:text-p-red">
                            <a href="/daftar">Daftar</a>
                        </li>
                        <li class="hover:text-p-red">
                            <a href="/contact">Contact</a>
                        </li>
                        <div class=" flex flex-col justify-center items-center">
                            <button class="w-[165px] py-3 rounded-md items-center border border-p-red bg-p-red my-2">
                                <a class="text-white text-center" href="login">Login</a>
                            </button>
                            <button class=" w-[165px] py-3 rounded-md items-center border border-p-red bg-white my-2">
                                <a class="text-p-red text-center" href="signin">Daftar</a>
                            </button>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="flex flex-col-reverse md:flex-row items-center md:justify-between justify-around h-full max-w-[1700px] mx-auto md:relative md:top-0 z-0">
            <div class="items-center md:items-start justify-center max-w-[800px] md:px-5 pb-24 md:pb-0 md:w-1/2">
                <h1 class=" text-4xl text-center md:text-left font-bold md:text-6xl px-3 mx-5 md:mx-0">Mengapa Donor Darah Itu Penting ?</h1>
                <p class="text-center md:text-left pt-5 text-xl px-3 mx-7 md:mx-0">Donor darah dinilai sebagai kegiatan yang baik serta 
                    menyehatkan.Selain dapat membantu sesama dan 
                    menyelamatkan banyak nyawa.</p>
                    <div class="flex flex-row items-center justify-center pt-2 md:pt-10 md:justify-start mx-auto px-3 pb-5 font-bold">
                        <button class="w-[165px] py-3 rounded-md items-center bg-p-red border border-p-red mx-5 md:ml-0">
                            <a class="text-white text-center" href="">Daftar Sekarang</a>
                        </button>
                    </div>
            </div>
            <div class="flex px-5 pt-20 md:pt-0 md:w-1/2 justify-center">
                <img src="{{ URL('image/about_image-1.png') }}" alt="" class=" md:scale-125 scale-75">
            </div>
        </div>

    </section>

    <section class=" w-full h-full pt-10 bg-bg-blue overflow-hidden z-0"> 
        <div class="flex flex-col max-w-[1700px] mx-auto">
            <div class="w-1/2 z-10 flex">
                <img src="{{ URL('image/acc/dots.png') }}" alt="" class="hidden md:inline relative left-[1700px] -top-[60px]">
            </div>
            <div class="flex flex-row px-5 items-center justify-center md:justify-between">
                <div class="flex flex-col">
                    <h1 class=" font-bold text-center md:text-start text-5xl">Kerjasama</h1>
                </div>
            </div>
        </div>
        <div class="pt-10 justify-center md:relative left-[5%] md:right-[5%] flex max-w-[1700px]">
            <div class="swiper mySwiper3 swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-1a728a9104a3b1f48" aria-live="polite">
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5">
                        <div class=" min-w-[200px] min-h-[200px] justify-center pt-8 flex flex-col mx-5">
                            <img src="{{ URL('image/kerjasama1.png') }}" alt="" class="scale-50">
                        </div>    
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5">
                        <div class=" min-w-[200px] min-h-[200px] flex flex-col mx-5">
                            <img src="{{ URL('image/kerjasama2.png') }}" alt="" class="scale-50">
                        </div>    
                    </div>
                    <div class="swiper-slide" role="group" aria-label="3 / 5">
                        <div class=" min-w-[200px] min-h-[200px] flex flex-col mx-5">
                            <img src="{{ URL('image/kerjasama3.png') }}" alt="" class="scale-50">
                        </div>   
                    </div>
                    <div class="swiper-slide" role="group" aria-label="4 / 5 ">
                        <div class=" min-w-[200px] min-h-[200px] flex flex-col mx-5">
                            <img src="{{ URL('image/kerjasama4.png') }}" alt="" class="scale-50">
                        </div>     
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 5">
                        <div class=" min-w-[200px] min-h-[200px] flex flex-col mx-5">
                            <img src="{{ URL('image/kerjasama5.png') }}" alt="" class=" scale-50">
                        </div>     
                    </div>
                </div>
                <div class=" pt-10">
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span></div>
                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section>


    <section class=" w-full h-full pt-10 md:pb-24 pb-0 overflow-hidden bg-white">
        <div class="flex flex-col max-w-[1700px] mx-auto">
            <div class="w-1/2 z-10 flex">
                <img src="{{ URL('image/acc/dots.png') }}" alt="" class="hidden md:inline relative -left-[40px] -top-[40px]">
            </div>
            <div class="w-1/2">
                <img src="{{ URL('image/acc/circle_eat.png') }}" alt="" class="hidden md:flex relative -left-[60px] top-[30px]">
            </div>
            <div class="flex flex-row px-5 items-center justify-center md:justify-between">
                <div class="flex max-w-[600px]">
                    <h1 class=" font-bold text-center md:text-start text-5xl">Beberapa Jenis 
                        Golongan Darah Saat Ini</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-full bg-white overflow-hidden -z-20">
        <div class=" flex flex-row max-w-[1700px] mx-auto justify-center items-center py-20">
            
            <div class="hidden md:flex px-5 md:w-1/2">
                <img src="{{ URL('image/Darah-O.png') }}" alt="" class=" scale-115">
            </div>
            <div class="items-center md:items-start justify-center max-w-[700px] md:px-5 md:w-1/2 ">
                <h1 class=" text-4xl text-center md:text-left font-bold md:text-6xl mx-2 z-20">Golongan Darah O 
                    Sangat Dicari</h1>
                <p class="text-center md:text-left pt-5 text-xl mx-2">Golongan darah O dikenal sebagai golongan darah yang universal karena bisa diterima oleh pemilik golongan darah lain saat transfusi.</p>
                <div class="flex flex-row items-center justify-center pt-10 md:justify-start mx-auto px-3">
                    <button class="w-[165px] py-3 rounded-md items-center bg-p-red border border-p-red">
                        <a class="text-white font-bold text-center" href="">Daftar Sekarang</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-full bg-bg-blue overflow-hidden">

        <div class=" flex flex-row max-w-[1700px] mx-auto justify-center items-center py-20 ">
            <div class="hidden md:flex px-5 md:w-1/2">
                <img src="{{ URL('image/Darah-AB.png') }}" alt="" class=" scale-115">
            </div>
            <div class="items-center md:items-start justify-center max-w-[700px] md:px-5  md:w-1/2">
                <h1 class=" text-4xl text-center md:text-left font-bold md:text-6xl mx-2">Golongan Darah 
                    AB Saat Ini Sangat Dicari</h1>
                <p class="text-center md:text-left pt-5 text-xl mx-2">Golongan darah AB termasuk golongan darah yang langka. Golongan darah ini dapat menerima transfusi darah dari semua golongan darah lainnya. </p>
                <div class="flex flex-row items-center justify-center pt-10 md:justify-start mx-auto px-3">
                    <button class="w-[165px] py-3 rounded-md items-center bg-p-red border border-p-red">
                        <a class="text-white font-bold text-center" href="">Daftar Sekarang</a>
                    </button>
                </div>
            </div>
        </div>

    </section>

    <section class="w-full h-full bg-white overflow-hidden">
        <div class=" flex flex-row max-w-[1700px] mx-auto justify-center items-center py-20">
            <div class="hidden md:flex px-5 md:w-1/2">
                <img src="{{ URL('image/Darah-A.png') }}" alt="" class=" scale-115">
            </div>
            <div class="items-center md:items-start justify-center max-w-[700px] md:px-5 md:w-1/2">
                <h1 class=" text-4xl text-center md:text-left font-bold md:text-6xl mx-2">Golongan Darah A 
                    Sangat Dicari</h1>
                <p class="text-center md:text-left pt-5 text-xl mx-2">Golongan darah A adalah tipe sel darah merah yang memiliki kandungan antigen A dan memproduksi antibodi B yang berguna untuk melawan antigen B.</p>
                <div class="flex flex-row items-center justify-center pt-10 md:justify-start mx-auto px-3">
                    <button class="w-[165px] py-3 rounded-md items-center bg-p-red border border-p-red">
                        <a class="text-white font-bold text-center" href="">Daftar Sekarang</a>
                    </button>
                </div>
            </div>
        </div>

        
    </section>

    <section class="w-full h-full bg-bg-blue overflow-hidden">
        <div class=" flex flex-row max-w-[1700px] mx-auto justify-center items-center py-20">
            <div class="hidden md:flex px-5 md:w-1/2">
                <img src="{{ URL('image/Darah-B.png') }}" alt="" class=" scale-115">
            </div>
            <div class="items-center md:items-start justify-center max-w-[700px] md:px-5 md:w-1/2">
                <h1 class=" text-4xl text-center md:text-left font-bold md:text-6xl mx-2">Golongan Darah 
                    B Saat Ini Sangat Dicari</h1>
                <p class="text-center md:text-left pt-5 text-xl mx-2">Golongan darah B merupakan golongan darah terbanyak kedua yang dimiliki penduduk Indonesia setelah golongan darah O</p>
                <div class="flex flex-row items-center justify-center pt-10 md:justify-start mx-auto px-3">
                    <button class="w-[165px] py-3 rounded-md items-center bg-p-red border border-p-red">
                        <a class="text-white font-bold text-center" href="">Daftar Sekarang</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    
    <div class="hidden w-full h-full md:flex justify-center relative top-[100px]">

        <div class=" max-w-[1000px] max-h-[150px] min-w-[700px] min-h-[120px] px-5 py-5 bg-white shadow-lg flex flex-row justify-around items-center rounded-xl">
            <div class=" mr-20">
                <h1 class=" text-4xl font-bold pb-3">Sudah siap untuk Melakukan Donor?</h1>
                <p class=" text-2xl ">Ayo donor darah sekarang untuk membantu suadara kita</p>
            </div>
            
            <div>
                <button class="hidden md:flex justify-center bg-p-red w-[165px] py-3 border border-p-red rounded-md items-center transition duration-300 hover:scale-110">
                    <a class="text-white text-center" href="">Login</a>
                </button>   
            </div>
        </div>

    </div>



    <section class=" w-full h-full pt-10 md:pt-28 mt-10 bg-p-red  overflow-hidden text-white">
        <div class=" flex flex-col max-w-[1700px] mx-auto">
            <footer class="flex flex-col md:flex-row justify-between ">
                <div class="flex flex-col ">
                    <div class="mx-auto text-center md:text-left">
                        <a href="#" class="flex justify-center md:justify-start">
                            <img src="{{ URL('image/logo.png') }}" alt="">
                        </a>
                        <p class="mt-2 mx-5 md:mx-0 text-sm">Donor darah dengan mudah cepat 
                            sangat flexible hanya di Donor
                            Unity.</p>
                    </div>
                </div>
                <div class=" flex flex-col pt-3 md:pt-0">
                    <div class="w-full px-4 mx-auto text-center md:text-left">
                        <h2 class="mb-3 text-2xl font-medium ">Feature</h2>
                        <nav class="mb-10 list-none">
                            <li class="mt-3">
                                <a class="cursor-pointer hover:text-gray-900">Home</a>
                            </li>
                            <li class="mt-3">
                                <a class=" cursor-pointer hover:text-gray-900">About</a>
                            </li>
                            <li class="mt-3">
                                <a class=" cursor-pointer hover:text-gray-900">Jadwal</a>
                            </li>
                            <li class="mt-3">
                                <a class=" cursor-pointer hover:text-gray-900">Daftar</a>
                            </li>
                        </nav>
                    </div>
                </div>
                <div class=" flex flex-col">
                    <div class="px-4 mx-auto text-center md:text-left">
                        <h2 class="mb-3 text-2xl font-medium ">Pertanyaan</h2>
                         <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="cursor-pointer ">Contact</a>
                        </li>
                    </div>
                </div>
                <div class=" flex flex-col">
                    <div class="px-4 mx-auto text-center md:text-left">
                        <h2 class="mb-3 font-medium tracking-widest  text-2xl title-font">Social Media</h2>
                        <p class="mt-2 text-sm mx-5 md:mx-0">Terdapat beberapa sosial
                            media dari donor unity. </p>
                        <div class="mt-4">
                        <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                            <a class=" cursor-pointer hover:text-gray-700">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-3 cursor-pointer hover:text-gray-700">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-3 cursor-pointer hover:text-gray-700">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    
                </div>
            </footer>
        </div>
        <div class="bg-p-red mt-10">
            <div class="px-5 py-4 mx-auto ">
                <p class="text-sm capitalize text-center">© Copyright 2023 by Kelompok 5 </p>
            </div>
        </div>
    </section>
    


    <script src="{{ asset('js/style.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper3", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
            slidesPerView: 2,
            spaceBetween: 20,
            },
            768: {
            slidesPerView: 3,
            spaceBetween: 10,
            },
            1024: {
            slidesPerView: 5,
            spaceBetween: 10,
            },
            1400: {
            slidesPerView: 5,
            spaceBetween: 10,
            },
        },
        });
  
  

    </script>
</body>
</html>