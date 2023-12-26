<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    @vite('./resources/css/app.css')
</head>
<script type="text/javascript" src="/js/app.js"></script>
<body class="bg-bg-blue">
    <section class="w-full h-screen shadow-lg bg-bg-blue overflow-hidden">
        <div>
            <nav class="w-full fixed top-0 z-50">
                <div class="flex flex-row items-center justify-between h-24 px-5 max-w-[1700px] mx-auto">
                    <img src="{{ URL('image/logo.png') }}" alt="">
                    <ul  class="hidden md:flex flex-row text-slate-500">
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110">
                            <a href="/home"">Home</a>
                        </li>
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110">
                            <a href="/about">About</a>
                        </li>
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110">
                            <a href="/jadwal">Jadwal</a>
                        </li>
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110 font-bold text-p-red">
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

        <div class="flex flex-col-reverse  items-center justify-center h-screen max-w-[1700px] mx-auto md:relative md:top-0 z-0">
            <div class="items-center justify-center max-w-[1000px] md:px-5">
                <h1 class=" text-4xl text-center font-bold md:text-6xl px-3">Form Pendaftaran Digital Dalam
                    Melakukan Donor Darah</h1>
                <p class="text-center pt-5 text-xl px-3">Pada halaman ini merupakan halaman form pendaftaran
                    yang dapat diisi jika ingin melakukan donor
                    darah secara mudah dalam satu platform </p>
                    <div class="flex items-center justify-center pt-10 mx-auto px-3">
                        <button class="w-[165px] py-3 rounded-md items-center bg-p-red border border-p-red mx-5 md:ml-0">
                            <a class="text-white text-center font-bold" href="">Contact Person</a>
                        </button>
                    </div>
            </div>
        </div>
    </section>


    <section class=" w-full h-full py-40 z-0 bg-white">
        <div class="flex flex-col max-w-[1700px] items-center justify-center mx-auto">
            <div class="flex flex-col items-center justify-center">
                <h1 class=" text-4xl font-bold text-center">FORM PENDAFTARAN</h1>
                <div class=" pt-5">
                    <div class="w-[300px] h-2 bg-p-red rounded-xl ">
    
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-[1700px] mx-auto ">
            <form action="{{ route('daftar.store') }}" method="post" class="">
                @csrf 
                <div class=" flex flex-row justify-center items-center pt-5 pb-1">
                    <div class="w-full mx-5 ">
                        <input type="text" placeholder="Input Nama Lengkap" name="nama"class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium " value="{{ old('nama') }}">
                        <label for="Input Nama Lengkap" class=""></label>
                    </div>
                    <div class="w-full mx-5">
                        <input type="text" placeholder="Input Email" name="email" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium " value="{{ old('email') }}">
                        <label for="Input Email"></label>
                    </div>
                </div>
                <div class=" flex flex-row justify-center items-center py-1">
                    <div class="w-full mx-5">
                        <input type="text" placeholder="Input Rumah Sakit" name="rumahsakit" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium "value="{{ old('rumahsakit') }}">
                        <label for="Input Rumah Sakit" class=""></label>
                    </div>
                    <div class="w-full mx-5">
                        <input type="text" placeholder="Input Pekerjaan" name="pekerjaan" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium "value="{{ old('pekerjaan') }}">
                        <label for="Input Pekerjaan"></label>
                    </div>
                </div>
                <div class=" flex flex-row justify-center items-center py-1">
                    <div class="w-full mx-5 ">
                        <input type="text" placeholder="Input Golongan Darah" name="golongandarah" class="w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium "value="{{ old('golongandarah') }}">
                        <label for="Input Golongan Darah" class=""></label>
                    </div>
                    <div class="w-full mx-5 ">
                        <input type="file" placeholder="File Kesehatan" accept=".pdf" name="filekesehatan" class="w-full px-6 py-3 mb-2 border placeholder:text-black text-black bg-s-pink rounded-lg font-medium "value="{{ old('filekesehatan') }}">
                        <label for="File Kesehatan"></label>
                    </div>
                </div>
                <div class="flex justify-center items-center py-1 mx-5">
                    <textarea name="riwayatkesehatan" class="description sec p-3 h-56 outline-none w-full px-6 py-3 mb-2 placeholder:text-black text-black bg-s-pink rounded-lg font-medium " value="{{ old('riwayatkesehatan') }}" spellcheck="false" placeholder="Deskripsikan Riwayat Kesehatan"></textarea>
                </div>
                <div class="flex justify-center items-center py-5 mx-5">
                    <button type="submit" class="flex justify-center bg-p-red py-3 border border-p-red rounded-lg items-center w-full" onclick="showAlert()">
                        <a class="text-white font-medium text-center" type="submit" onclick="showAlert()">Daftar</a>
                    </button>
                </div>
            </form>
            
        </div>
    </section>


    <section class=" w-full h-full md:py-20 pt-20">

        <div class="flex flex-col">
            <div class="flex items-center justify-center">
                <div class="max-w-[800px]">
                    <h1 class=" text-4xl text-center font-bold md:text-6xl px-3">Pertanyaan Yang Sering Ditanyakan ?</h1>
                </div>
                <img src="{{ URL('image/acc/circle_eat.png') }}" alt="" class="hidden md:flex relative right-[800px] bottom-[80px]">
            </div>
        </div>

        <div class="max-w-[1700px] md:flex flex-row mx-auto justify-between items-center py-6">
            <div class=" md:w-1/2 mx-5">
                <ul class="w-full mx-auto divide-y border">
                    <li>
                        <details class="group">
                            <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                <span>Bagaimana cara daftar melalui halaman ini ?</span>
                                <svg class="w-5 h-5  transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </summary>
                
                            <article class="px-4 pb-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum sapien. Vestibulum molestie
                                    porttitor augue vitae vulputate. Aliquam nec ex maximus, suscipit diam vel, tristique tellus.
                                </p>
                            </article>
                        </details>
                    </li>
                    <li>
                        <details class="group">
                            <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                <span>Cara daftar dengan mudah melalui website ?</span>
                                <svg class="w-5 h-5  transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </summary>
                
                            <article class="px-4 pb-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum sapien. Vestibulum molestie
                                    porttitor augue vitae vulputate. Aliquam nec ex maximus, suscipit diam vel, tristique tellus. </p>
                            </article>
                        </details>
                    </li>
                    <li>
                        <details class="group">
                            <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                <span>Bagaimana cara melihat jadwal donor ?</span>
                                <svg class="w-5 h-5 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </summary>
                
                            <article class="px-4 pb-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum sapien. Vestibulum molestie
                                    porttitor augue vitae vulputate. Aliquam nec ex maximus, suscipit diam vel, tristique tellus. </p>
                            </article>
                        </details>
                    </li>
                    <li>
                        <details class="group">
                            <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                <span>Bagaimana cara menghubungi admin ?</span>
                                <svg class="w-5 h-5 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </summary>
                
                            <article class="px-4 pb-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum sapien. Vestibulum molestie
                                    porttitor augue vitae vulputate. Aliquam nec ex maximus, suscipit diam vel, tristique tellus. </p>
                            </article>
                        </details>
                    </li>

                    <li>
                        <details class="group">
                            <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                <span>Bagaimana jika saya lupa password login ?</span>
                                <svg class="w-5 h-5 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </summary>
                
                            <article class="px-4 pb-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum sapien. Vestibulum molestie
                                    porttitor augue vitae vulputate. Aliquam nec ex maximus, suscipit diam vel, tristique tellus. </p>
                            </article>
                        </details>
                    </li>

                    <li>
                        <details class="group">
                            <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                <span>Bagaimana jika tidak mendapatkan jadwal ?</span>
                                <svg class="w-5 h-5 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </summary>
                
                            <article class="px-4 pb-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum sapien. Vestibulum molestie
                                    porttitor augue vitae vulputate. Aliquam nec ex maximus, suscipit diam vel, tristique tellus. </p>
                            </article>
                        </details>
                    </li>
                
                </ul>
            </div>
            <div class=" md:w-1/2 hidden md:flex justify-center">
                <img src="{{ URL('image/daftar_image-1.png') }}" alt="" class="">
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
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <script>
        function showAlert() {
            // Tampilkan alert sukses
            sweetAlert("Selamat", "Pendaftaran Berhasil", "success");
        }
    </script>
</body>
</html>