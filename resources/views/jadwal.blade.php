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
<body class="bg-bg-blue">
    <section class="w-full h-screen  overflow-hidden">
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
                        <li class="hover:text-p-red px-4 transition duration-300 hover:scale-110 font-bold text-p-red">
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

        <div class="flex flex-col-reverse  items-center justify-center h-screen max-w-[1700px] mx-auto md:relative md:top-0 z-0">
            <div class="flex flex-col items-center justify-center max-w-[1000px] md:px-5">
                <h1 class=" text-4xl text-center font-bold md:text-6xl px-3">Jadwal Donor Darah Keseluruhan
                    Yang Telah mendaftar</h1>
                <div class="max-w-[600px]">
                    <p class="text-center pt-5 text-xl px-3">Pada halaman ini anda dapat melihat jadwal donor
                        darah anda secara realtime yang mudah untuk
                        diakses dimanapun</p>
                </div>
                    <div class="flex items-center justify-center pt-10 mx-auto px-3">
                        <button class="w-[165px] py-3 rounded-md items-center bg-p-red border border-p-red mx-5 md:ml-0">
                            <a class="text-white text-center font-bold" href="">Contact Person</a>
                        </button>
                    </div>
            </div>
        </div>
    </section>

    <section class="w-full h-full py-40 bg-white">
        <div class="flex flex-col max-w-[1700px] items-center justify-center mx-auto">
            <div class="w-1/2">
                <img src="{{ URL('image/acc/circle_eat.png') }}" alt="" class="hidden md:flex relative left-[250px] top-[40px]">
            </div>
            <div class="flex flex-col items-center justify-center">
                <h1 class=" text-4xl font-bold text-center">Jadwal Hari Ini</h1>
                <div class=" pt-5">
                    <div class="w-[150px] h-2 bg-p-red ">
    
                    </div>
                </div>
            </div>
        </div>

        <div class="flex md:flex-row flex-col max-w-[1400px] mx-auto pt-10 justify-center items-center">
            <div class="w-1/3 flex justify-center my-2">
                <div class="max-w-[342px] bg-p-red px-5 py-5">
                    <div class="flex flex-row">
                        <img src="{{ URL('image/acc/branch.png') }}" alt="" class=" scale-50 md:scale-100">
                        <h1 class="font-bold text-3xl text-white mx-5">Rs Balimed</h1>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-s-yellow">Jln Sudirman No 1</h1>
                    </div>
                    <div class=" pt-5 text-white">
                        <ul class="w-full mx-auto divide-y border">
                            <li>
                                <details class="group">
                                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                        <span>Yuda</span>
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
                                        <span>Decky</span>
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
                                        <span>Wira</span>
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
                                        <span>Mahendra</span>
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
                                        <span>Agus</span>
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
                                        <span>Rudy</span>
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
                    <div class="flex justify-center pt-5 ">
                        <button class="w-[186px] h-[68px] bg-s-yellow">
                            <a href="" class="font-bold text-xl text-white">Lihat Detail</a>
                        </button>
                    </div>
                </div>
                
            </div>
            <div class="w-1/3 flex justify-center my-2">
                <div class="max-w-[400px] bg-p-red px-5 py-5">
                    <div class="flex flex-row">
                        <img src="{{ URL('image/acc/branch.png') }}" alt="" class=" scale-50 md:scale-100">
                        <h1 class="font-bold text-3xl text-white mx-5">Rs Umum Singaraja</h1>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-s-yellow">Jln Ngurah Rai No 12</h1>
                    </div>
                    <div class=" pt-5 text-white">
                        <ul class="w-full mx-auto divide-y border">
                            <li>
                                <details class="group">
                                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                        <span>Yuda</span>
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
                                        <span>Decky</span>
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
                                        <span>Wira</span>
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
                                        <span>Mahendra</span>
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
                                        <span>Agus</span>
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
                                        <span>Rudy</span>
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
                    <div class="flex justify-center py-10">
                        <button class="w-[186px] h-[68px] bg-s-yellow">
                            <a href="" class="font-bold text-xl text-white">Lihat Detail</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-1/3 flex justify-center my-2">
                <div class="max-w-[342px] bg-p-red px-5 py-5">
                    <div class="flex flex-row">
                        <img src="{{ URL('image/acc/branch.png') }}" alt="" class=" scale-50 md:scale-100">
                        <h1 class="font-bold text-3xl text-white mx-5">Rs Denpasar</h1>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-s-yellow">Jln Ngurah Rai No 12</h1>
                    </div>
                    <div class=" pt-5 text-white">
                        <ul class="w-full mx-auto divide-y border">
                            <li>
                                <details class="group">
                                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                        <span>Yuda</span>
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
                                        <span>Decky</span>
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
                                        <span>Wira</span>
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
                                        <span>Mahendra</span>
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
                                        <span>Agus</span>
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
                                        <span>Rudy</span>
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
                    <div class="flex justify-center pt-5">
                        <button class="w-[186px] h-[68px] bg-s-yellow">
                            <a href="" class="font-bold text-xl text-white">Lihat Detail</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="w-full h-full py-40 ">
        <div class="flex flex-col max-w-[1700px] items-center justify-center mx-auto">
            <div class="w-1/2">
                <img src="{{ URL('image/acc/circle_eat.png') }}" alt="" class="hidden md:flex relative left-[140px] top-[40px]">
            </div>
            <div class="flex flex-col items-center justify-center">
                <h1 class=" text-4xl font-bold text-center">Jadwal 1 Minggu Kedepan</h1>
               <div class=" pt-5">
                <div class="w-[150px] h-2 bg-p-red ">

                </div>
               </div>
            </div>
        </div>

        <div class="flex md:flex-row flex-col max-w-[1400px] mx-auto pt-10 justify-center items-center">
            <div class="w-1/3 flex justify-center my-2">
                <div class="max-w-[342px] bg-p-red px-5 py-5">
                    <div class="flex flex-row">
                        <img src="{{ URL('image/acc/branch.png') }}" alt="" class=" scale-50 md:scale-100">
                        <h1 class="font-bold text-3xl text-white mx-5">Rs Balimed</h1>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-s-yellow">Jln Sudirman No 1</h1>
                    </div>
                    <div class=" pt-5 text-white">
                        <ul class="w-full mx-auto divide-y border">
                            <li>
                                <details class="group">
                                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                        <span>Yuda</span>
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
                                        <span>Decky</span>
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
                                        <span>Wira</span>
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
                                        <span>Mahendra</span>
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
                                        <span>Agus</span>
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
                                        <span>Rudy</span>
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
                    <div class="flex justify-center pt-5 ">
                        <button class="w-[186px] h-[68px] bg-s-yellow">
                            <a href="" class="font-bold text-xl text-white">Lihat Detail</a>
                        </button>
                    </div>
                </div>
                
            </div>
            <div class="w-1/3 flex justify-center my-2">
                <div class="max-w-[400px] bg-p-red px-5 py-5">
                    <div class="flex flex-row">
                        <img src="{{ URL('image/acc/branch.png') }}" alt="" class="scale-50 md:scale-100">
                        <h1 class="font-bold text-3xl text-white mx-5">Rs Umum Singaraja</h1>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-s-yellow">Jln Ngurah Rai No 12</h1>
                    </div>
                    <div class=" pt-5 text-white">
                        <ul class="w-full mx-auto divide-y border">
                            <li>
                                <details class="group">
                                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                        <span>Yuda</span>
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
                                        <span>Decky</span>
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
                                        <span>Wira</span>
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
                                        <span>Mahendra</span>
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
                                        <span>Agus</span>
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
                                        <span>Rudy</span>
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
                    <div class="flex justify-center py-10">
                        <button class="w-[186px] h-[68px] bg-s-yellow">
                            <a href="" class="font-bold text-xl text-white">Lihat Detail</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-1/3 flex justify-center my-2">
                <div class="max-w-[342px] bg-p-red px-5 py-5">
                    <div class="flex flex-row">
                        <img src="{{ URL('image/acc/branch.png') }}" alt="" class=" scale-50 md:scale-100">
                        <h1 class="font-bold text-3xl text-white mx-5">Rs Denpasar</h1>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-s-yellow">Jln Ngurah Rai No 12</h1>
                    </div>
                    <div class=" pt-5 text-white">
                        <ul class="w-full mx-auto divide-y border">
                            <li>
                                <details class="group">
                                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer justify-between">
                                        <span>Yuda</span>
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
                                        <span>Decky</span>
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
                                        <span>Wira</span>
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
                                        <span>Mahendra</span>
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
                                        <span>Agus</span>
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
                                        <span>Rudy</span>
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
                    <div class="flex justify-center pt-5">
                        <button class="w-[186px] h-[68px] bg-s-yellow">
                            <a href="" class="font-bold text-xl text-white">Lihat Detail</a>
                        </button>
                    </div>
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

    </script>
</body>
</html>