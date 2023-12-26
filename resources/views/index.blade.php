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
    <section class="w-full md:h-screen h-full bg-white shadow-lg overflow-hidden">
        <div class="hidden md:flex ">
            <div class=" absolute top-[100px] right-[0px]">
                <img src="{{ URL('image/acc/dots.png') }}" alt="">
            </div>
        </div>
        <div>
            <nav class="w-full fixed top-0 z-50">
                <div class="flex flex-row items-center justify-between h-24 px-5 max-w-[1700px] mx-auto">
                    <img src="{{ URL('image/logo.png') }}" alt="">
                    <ul  class="hidden md:flex flex-row text-slate-500">
                        <li class=" px-4 transition duration-300 hover:scale-110 font-bold text-p-red">
                            <a href="/home" class="hover:text-p-red active:font-bold">Home</a>
                        </li>
                        <li class=" px-4 transition duration-300 hover:scale-110">
                            <a href="/about" class="hover:text-p-red active:font-bold">About</a>
                        </li>
                        <li class="  px-4 transition duration-300 hover:scale-110">
                            <a href="/jadwal" class="hover:text-p-red active:font-bold">Jadwal</a>
                        </li>
                        <li class="  px-4 transition duration-300 hover:scale-110">
                            <a href="/daftar" class="hover:text-p-red active:font-bold">Daftar</a>
                        </li>
                        <li class="  px-4 transition duration-300 hover:scale-110">
                            <a href="/contact" class="hover:text-p-red active:font-bold">Contact</a>
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

        <div class="flex flex-col-reverse md:flex-row items-center md:justify-between justify-around  h-full max-w-[1700px] mx-auto md:relative md:top-0 z-0">
            <div class="items-center md:items-start justify-center max-w-[800px] md:px-5 pb-24 md:pb-0 md:w-1/2">
                <h1 class=" text-4xl text-center md:text-left font-bold md:text-6xl px-3 mx-5 md:mx-0">Ayo Donor Darah Untuk Membantu Sesama</h1>
                <p class="text-center md:text-left pt-5 text-xl px-3 mx-7 md:mx-0">Donor darah atau sumbang darah adalah proses pengambilan darah dari seseorang secara sukarela untuk disimpan 
                    di bank darah sebagai stok darah untuk kemudian digunakan untuk transfusi darah.</p>
                    <div class="flex flex-row items-center justify-center pt-2 md:pt-10 md:justify-start mx-auto px-3 pb-5 font-bold">
                        <button class="w-[165px] py-3 rounded-md items-center bg-p-red border border-p-red mx-5 md:ml-0">
                            <a class="text-white text-center" href="">Login</a>
                        </button>
                        <button class="w-[165px] py-3 rounded-md items-center border border-p-red mx-5">
                            <a class="text-p-red text-center" href="">Daftar</a>
                        </button>
                    </div>
            </div>
            <div class="flex px-5 pt-20 md:pt-0 md:w-1/2 justify-center">
                <img src="{{ URL('image/home_image-1.png') }}" alt="" class=" md:scale-125 scale-75">
            </div>
        </div>
        
        

    </section>

    <section class=" w-full h-screen pt-20 md:pt-40  bg-bg-blue  overflow-hidden">
        <div class="flex flex-col max-w-[1700px] mx-auto">
            <div class="w-1/2">
                <img src="{{ URL('image/acc/circle_eat.png') }}" alt="" class="hidden md:flex relative -left-[40px] top-[30px]">
            </div>
            <div class="flex flex-row px-5 justify-between items-center">
                
                <div class="flex flex-col">
                    <h1 class=" text-3xl font-bold md:text-5xl">Rumah Sakit</h1>
                    <h1 class=" text-3xl font-bold md:text-5xl">Lokasi Donor Darah</h1>
                </div>
                <a href="">
                    <h1 class="text-2xl font-medium md:text-3xl text-p-red">Lihat Semua</h1>
                </a>
                
            </div>
        </div>

        <div class="lg:pl-24 pt-10">
            <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-1a728a9104a3b1f48" aria-live="polite">
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9">
                        <div class=" max-w-[300px] max-h-[400px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl overflow-hidden">
                            <div class="max-w-[340px] max-h-[250px] bg-p-red flex items-center overflow-hidden justify-center rounded-md">
                                <img src="{{ URL('image/Lokasi_Balimed.png') }}" alt="" class="w-fit px-5 py-5" >
                            </div>
                            <div class=" pt-7">
                                <h1 class="text-2xl font-bold pb-3">RS Balimed</h1>
                                <h1 class="text-xl pb-3">Jalan Udayana Singaraja</h1>
                                <h1 class="text-xl pb-3">Enroled (1.200)</h1>
                            </div>
                        </div>    
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 9">
                        <div class=" max-w-[300px] max-h-[400px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl overflow-hidden">
                            <div class="max-w-[340px] max-h-[250px] bg-p-red flex items-center overflow-hidden justify-center rounded-md">
                                <img src="{{ URL('image/Lokasi_Buleleng.png') }}" alt="" class="w-fit px-5 py-5" >
                            </div>
                            <div class=" pt-7">
                                <h1 class="text-2xl font-bold pb-3">RS Buleleng</h1>
                                <h1 class="text-xl pb-3">Jalan Buleleng No 1</h1>
                                <h1 class="text-xl pb-3">Enroled (1.200)</h1>
                            </div>
                        </div>     
                    </div>
                    <div class="swiper-slide" role="group" aria-label="3 / 9">
                        <div class=" max-w-[300px] max-h-[400px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl overflow-hidden">
                            <div class="max-w-[340px] max-h-[250px] bg-p-red flex items-center overflow-hidden justify-center rounded-md">
                                <img src="{{ URL('image/Lokasi_Denpasar.png') }}" alt="" class="w-fit px-5 py-5" >
                            </div>
                            <div class=" pt-7">
                                <h1 class="text-2xl font-bold pb-3">RS Denpasar</h1>
                                <h1 class="text-xl pb-3">Jalan Denpasar No 2</h1>
                                <h1 class="text-xl pb-3">Enroled (1.200)</h1>
                            </div>
                        </div>     
                    </div>
                    <div class="swiper-slide" role="group" aria-label="4 / 9">
                        <div class=" max-w-[300px] max-h-[400px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl overflow-hidden">
                            <div class="max-w-[340px] max-h-[250px] bg-p-red flex items-center overflow-hidden justify-center rounded-md">
                                <img src="{{ URL('image/Lokasi_Banyuwangi.png') }}" alt="" class="w-fit px-5 py-5" >
                            </div>
                            <div class=" pt-7">
                                <h1 class="text-2xl font-bold pb-3">RS Banyuwangi</h1>
                                <h1 class="text-xl pb-3">Jalan Banyuwangi</h1>
                                <h1 class="text-xl pb-3">Enroled (1.200)</h1>
                            </div>
                        </div>     
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 9">
                        <div class=" max-w-[300px] max-h-[400px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl overflow-hidden">
                            <div class="max-w-[340px] max-h-[250px] bg-p-red flex items-center overflow-hidden justify-center rounded-md">
                                <img src="{{ URL('image/Lokasi_Balimed.png') }}" alt="" class="w-fit px-5 py-5" >
                            </div>
                            <div class=" pt-7">
                                <h1 class="text-2xl font-bold pb-3">RS Balimed</h1>
                                <h1 class="text-xl pb-3">Jalan Udayana Singaraja</h1>
                                <h1 class="text-xl pb-3">Enroled (1.200)</h1>
                            </div>
                        </div>       
                    </div>
                    <div class="swiper-slide" role="group" aria-label="6 / 9">
                        <div class=" max-w-[300px] max-h-[400px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl overflow-hidden">
                            <div class="max-w-[340px] max-h-[250px] bg-p-red flex items-center overflow-hidden justify-center rounded-md">
                                <img src="{{ URL('image/Lokasi_Balimed.png') }}" alt="" class="w-fit px-5 py-5" >
                            </div>
                            <div class=" pt-7">
                                <h1 class="text-2xl font-bold pb-3">RS Balimed</h1>
                                <h1 class="text-xl pb-3">Jalan Udayana Singaraja</h1>
                                <h1 class="text-xl pb-3">Enroled (1.200)</h1>
                            </div>
                        </div>       
                    </div>
                    <div class="swiper-slide" role="group" aria-label="7 / 9">
                        <div class=" max-w-[300px] max-h-[400px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl overflow-hidden">
                            <div class="max-w-[340px] max-h-[250px] bg-p-red flex items-center overflow-hidden justify-center rounded-md">
                                <img src="{{ URL('image/Lokasi_Balimed.png') }}" alt="" class="w-fit px-5 py-5" >
                            </div>
                            <div class=" pt-7">
                                <h1 class="text-2xl font-bold pb-3">RS Balimed</h1>
                                <h1 class="text-xl pb-3">Jalan Udayana Singaraja</h1>
                                <h1 class="text-xl pb-3">Enroled (1.200)</h1>
                            </div>
                        </div>        
                    </div>
                    <div class="swiper-slide" role="group" aria-label="8 / 9">
                        <div class=" max-w-[300px] max-h-[400px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl overflow-hidden">
                            <div class="max-w-[340px] max-h-[250px] bg-p-red flex items-center overflow-hidden justify-center rounded-md">
                                <img src="{{ URL('image/Lokasi_Balimed.png') }}" alt="" class="w-fit px-5 py-5" >
                            </div>
                            <div class=" pt-7">
                                <h1 class="text-2xl font-bold pb-3">RS Balimed</h1>
                                <h1 class="text-xl pb-3">Jalan Udayana Singaraja</h1>
                                <h1 class="text-xl pb-3">Enroled (1.200)</h1>
                            </div>
                        </div>       
                    </div>
                    <div class="swiper-slide" role="group" aria-label="9 / 9">
                        <div class="max-w-[300px] max-h-[400px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl overflow-hidden">
                            <div class="max-w-[340px] max-h-[250px] bg-p-red flex items-center overflow-hidden justify-center rounded-md">
                                <img src="{{ URL('image/Lokasi_Balimed.png') }}" alt="" class="w-fit px-5 py-5" >
                            </div>
                            <div class=" pt-7">
                                <h1 class="text-2xl font-bold pb-3">RS Balimed</h1>
                                <h1 class="text-xl pb-3">Jalan Udayana Singaraja</h1>
                                <h1 class="text-xl pb-3">Enroled (1.200)</h1>
                            </div>
                        </div>      
                    </div>
                </div>

                <div class=" pt-10">
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span></div>
                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section>

    <section class="w-full h-full bg-white overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-around h-screen max-w-[1700px] mx-auto md:top-0 z-50 pb-20 md:pb-0">
            <div class="flex px-5">
                <img src="{{ URL('image/home_image-2.png') }}" alt="" class=" scale-115">
            </div>
            <div class="items-center md:items-start justify-center max-w-[800px] md:px-5">
                <div class="w-1/2">
                    <img src="{{ URL('image/acc/circle_eat.png') }}" alt="" class="hidden md:flex relative -left-[40px] top-[30px]">
                </div>
                <h1 class=" text-4xl text-center md:text-left font-bold md:text-6xl px-3 mx-10 md:mx-0">Mengapa Donor Darah Sangat Penting ?</h1>
                <p class="text-center md:text-left pt-5 text-xl px-3 mx-10 md:mx-0">Donor darah dinilai sebagai kegiatan yang baik serta menyehatkan. 
                    Selain dapat membantu sesama dan menyelamatkan 
                    banyak nyawa.</p>
                <div class="flex flex-row items-center justify-center pt-10 md:justify-start mx-auto px-3">
                    <button class="w-[165px] py-3 rounded-md items-center bg-p-red border border-p-red mx-5 md:ml-0">
                            <a class="text-white text-center" href="">Login</a>
                    </button>
                    <button class="w-[165px] py-3 rounded-md items-center border border-p-red mx-5">
                        <a class="text-p-red text-center" href="">Daftar</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class=" w-full h-full bg-bg-blue">
        <div class="flex flex-col md:flex-row items-center justify-center mx-auto py-7">
            <div class="flex flex-col items-center text-center mx-5">
                <h1 class=" font-bold text-6xl pb-8 text-p-red">10.000+</h1>
                <p class=" text-2xl">Sudah Donor</p>
            </div>
            <div class="flex flex-col items-center text-center mx-5">
                <h1 class=" font-bold text-6xl pb-8 text-p-red">1.200+</h1>
                <p class=" text-2xl">Sudah Terbantu</p>
            </div>
            <div class="flex flex-col items-center text-center mx-5">
                <h1 class=" font-bold text-6xl pb-8 text-p-red">20+</h1>
                <p class=" text-2xl">Dokter Profesional</p>
            </div>
        </div>
    </section>

    <section class=" w-full h-full bg-white pt-10 md:pb-24 pb-0 overflow-hidden">
        <div class="flex flex-col max-w-[1700px] mx-auto">
            <div class="w-1/2 z-0">
                <img src="{{ URL('image/acc/circle.png') }}" alt="" class="hidden md:flex relative -left-[40px] top-[100px]">
            </div>
            <div class="flex flex-row px-5 items-center justify-center md:justify-between z-10">
                <div class="flex flex-col">
                    <h1 class=" font-bold text-center md:text-start text-5xl">Alur Pendaftaran</h1>
                    <h1 class=" font-bold text-center md:text-start text-5xl">Melakukan Donor Darah</h1>
                </div>
            </div>
        </div>

        <div class="max-w-[1700px] mx-auto">
            <div class=" flex flex-col md:flex-row md:justify-between items-center pt-10">
                <div class=" max-w-[270px] max-h-[330px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl mb-5 shadow-lg items-center">
                    <div class="max-w-[230px] max-h-[150px] bg-s-pink rounded-md">
                        <img src="{{ URL('image/registrasi.png') }}" alt="" class="">
                    </div>
                    <div class=" pt-3">
                        <h1 class="text-2xl font-bold pb-3">Registrasi</h1>
                        <div class=" max-w-[270px]">
                            <h1 class=" text-lg pb-3">Langkah pertama diawali
                                dengan melakukan 
                                registrasi.</h1>
                        </div>
                    </div>
                </div>

                <div class=" max-w-[270px] max-h-[330px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl mb-5 shadow-lg items-center">
                    <div class="max-w-[230px] max-h-[150px] bg-s-pink rounded-md">
                        <img src="{{ URL('image/login.png') }}" alt="" class="">
                    </div>
                    <div class=" pt-3">
                        <h1 class="text-2xl font-bold pb-3">Login</h1>
                        <div class=" max-w-[270px]">
                            <h1 class=" text-lg pb-3">Setelah adanya akun bisa
                                dilanjutkan dengan login
                                akun.</h1>
                        </div>
                    </div>
                </div>

                <div class=" max-w-[270px] max-h-[330px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl mb-5 shadow-lg items-center">
                    <div class="max-w-[230px] max-h-[150px] bg-s-pink rounded-md">
                        <img src="{{ URL('image/daftar.png') }}" alt="" class="">
                    </div>
                    <div class=" pt-3">
                        <h1 class="text-2xl font-bold pb-3">Login</h1>
                        <div class=" max-w-[270px]">
                            <h1 class=" text-lg pb-3">Setelah login akan dapat
                                untuk melakukan daftar donor darah.</h1>
                        </div>
                    </div>
                </div>

                <div class=" max-w-[270px] max-h-[330px] flex flex-col mx-5 bg-white px-4 py-4 rounded-2xl mb-5 shadow-lg items-center">
                    <div class="max-w-[230px] max-h-[150px] bg-s-pink rounded-md">
                        <img src="{{ URL('image/look_jadwal.png') }}" alt="" class="">
                    </div>
                    <div class=" pt-3">
                        <h1 class="text-2xl font-bold pb-3">Melihat Jadwal</h1>
                        <div class=" max-w-[270px]">
                            <h1 class=" text-lg pb-3">Setelah melakukan daftar
                                donor maka akan mendapatkan jadwal.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>


    <section class=" w-full h-full pt-56 bg-bg-blue overflow-hidden">
        <div class="flex flex-col max-w-[1700px] mx-auto">
            <div class="w-full px-5 justify-between items-center">
                <div class="w-1/2">
                    <img src="{{ URL('image/acc/circle_eat.png') }}" alt="" class="hidden md:flex relative -left-[60px] top-[30px]">
                </div>
                <div class="flex flex-row justify-between items-center">
                    
                    <h1 class=" text-3xl font-bold md:text-5xl">Apa Kata Mereka</h1>
                <a href="">
                    <h1 class="text-2xl font-medium md:text-3xl text-p-red">Lihat Semua</h1>
                </a>
                </div>
            </div>
        </div>

        <div class="lg:pl-24 pt-10">
            <div class="swiper mySwiper2 swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-1a728a9104a3b1f48" aria-live="polite">
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 6">
                        <div class=" max-w-[470px] max-h-[225px] flex flex-col mx-5 bg-white shadow-lg px-4 py-4 rounded-2xl mb-5 items-start">
                            <div class=" flex flex-row items-center">
                                <img src="{{ URL('image/person_1.png') }}" alt="" class="">
                                <div class=" flex flex-col pl-7">
                                    <h1 class=" font-bold text-xl">I Putu Mas Yuda Pratama</h1>
                                    <h1>Mahasiswa</h1>
                                </div>
                            </div>
                            <div class=" pt-5 max-w-[470px]">
                                <p class=" text-lg">Saya melakukan donor darah sangat mudah dan
                                    terbantu sekali berkat donor unity</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 6">
                        <div class=" max-w-[470px] max-h-[225px] flex flex-col mx-5 bg-white shadow-lg px-4 py-4 rounded-2xl mb-5 items-start">
                            <div class=" flex flex-row items-center">
                                <img src="{{ URL('image/person_2.png') }}" alt="" class="">
                                <div class=" flex flex-col pl-7">
                                    <h1 class=" font-bold text-xl">Decky Pratama</h1>
                                    <h1>Pekerja</h1>
                                </div>
                            </div>
                            <div class=" pt-5 max-w-[470px]">
                                <p class=" text-lg">Donor darah mudah dan tercepat serta tanggap ya 
                                    donor unity solusinya</p>
                            </div>
                        </div>   
                    </div>
                    <div class="swiper-slide" role="group" aria-label="3 / 6">
                        <div class=" max-w-[470px] max-h-[225px] flex flex-col mx-5 bg-white shadow-lg px-4 py-4 rounded-2xl mb-5 items-start">
                            <div class=" flex flex-row items-center">
                                <img src="{{ URL('image/person_3.png') }}" alt="" class="">
                                <div class=" flex flex-col pl-7">
                                    <h1 class=" font-bold text-xl">Rudy Satya</h1>
                                    <h1>Pekerja</h1>
                                </div>
                            </div>
                            <div class=" pt-5 max-w-[470px]">
                                <p class=" text-lg">Donor unity sangat bagus sekali <br>
                                    keren lah pokoknya</p>
                            </div>
                        </div>  
                    </div>
                    <div class="swiper-slide" role="group" aria-label="4 / 6">
                        <div class=" max-w-[470px] max-h-[225px] flex flex-col mx-5 bg-white shadow-lgpx-4 py-4 rounded-2xl mb-5 items-start">
                            <div class=" flex flex-row items-center">
                                <img src="{{ URL('image/gambar4.png') }}" alt="" class="">
                                <div class=" flex flex-col pl-7">
                                    <h1 class=" font-bold text-xl">Nama</h1>
                                    <h1>Mahasiswa</h1>
                                </div>
                            </div>
                            <div class=" pt-5 max-w-[470px]">
                                <p class=" text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>   
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 6">
                        <div class=" max-w-[470px] max-h-[225px] flex flex-col mx-5 bg-white shadow-lg px-4 py-4 rounded-2xl mb-5 items-start">
                            <div class=" flex flex-row items-center">
                                <img src="{{ URL('image/gambar4.png') }}" alt="" class="">
                                <div class=" flex flex-col pl-7">
                                    <h1 class=" font-bold text-xl">Nama</h1>
                                    <h1>Mahasiswa</h1>
                                </div>
                            </div>
                            <div class=" pt-5 max-w-[470px]">
                                <p class=" text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>  
                    </div>
                    <div class="swiper-slide" role="group" aria-label="6 / 6">
                        <div class=" max-w-[470px] max-h-[225px] flex flex-col mx-5 bg-white shadow-lg px-4 py-4 rounded-2xl mb-5 items-start">
                            <div class=" flex flex-row items-center">
                                <img src="{{ URL('image/gambar4.png') }}" alt="" class="">
                                <div class=" flex flex-col pl-7">
                                    <h1 class=" font-bold text-xl">Nama</h1>
                                    <h1>Mahasiswa</h1>
                                </div>
                            </div>
                            <div class=" pt-5 max-w-[470px]">
                                <p class=" text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class=" pt-10">
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span></div>
                </div>              
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section>



    <section class=" w-full h-full md:-pt-10 pt-10 bg-bg-blue overflow-hidden"> 
        <div class="flex flex-col max-w-[1700px] mx-auto">
            <div class="w-1/2 z-10 flex flex-row">
                <img src="{{ URL('image/acc/dots.png') }}" alt="" class="hidden md:inline relative -left-[40px] top-[200px]">
                <img src="{{ URL('image/acc/dots.png') }}" alt="" class="hidden md:inline relative -right-[1600px] top-[100px]">
            </div>
            <div class="w-1/2 z-0">
                <img src="{{ URL('image/acc/circle.png') }}" alt="" class="hidden md:flex relative -left-[40px] top-[100px]">
            </div>
            <div class="flex flex-row px-5 items-center justify-center md:justify-between z-20">
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
        var swiper = new Swiper(".mySwiper", {
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
            slidesPerView: 2,
            spaceBetween: 100,
            },
            1024: {
            slidesPerView: 3,
            spaceBetween: 50,
            },
            1400: {
            slidesPerView: 4,
            spaceBetween: 50,
            },
        },
        });

        var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
            slidesPerView: 1,
            spaceBetween: 20,
            },
            768: {
            slidesPerView: 2,
            spaceBetween: 100,
            },
            1024: {
            slidesPerView: 2,
            spaceBetween: 50,
            },
            1400: {
            slidesPerView: 3,
            spaceBetween: 20,
            },
        },
        });
        

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