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
<body>

    <section class="w-full h-screen bg-white z-0 flex items-center overflow-hidden">
        <div class="max-w-[1700px] mx-auto flex flex-col justify-center relative  bottom-[10%]">
            <div class="flex justify-center relative bottom-[40px] md:top-[80px]">
                <h1 class=" font-bold text-6xl">Login</h1>
            </div>
            <div class="hidden md:flex relative top-[80px] left-[140px]"> 
                <img src="{{ URL('image/login_icon.png') }}" alt="" class="w-1/2">
            </div>
            <div class="max-w-[800px] max-h-[600px] md:w-[600px] md:h-[450px] bg-p-red rounded-[22px] shadow-2xl mx-2 flex flex-col justify-center">
                
                <div class="flex justify-center pt-10 md:pt-16">
                    <h1 class="font-bold text-2xl text-white">Pendonor</h1>
                </div>
                <div class=" flex flex-col justify-center items-center py-1 mx-5 mt-2">
                    <div class="w-full mx-5 ">
                        <input type="text" placeholder="Username" class="w-full px-6 py-3 mb-2 rounded-lg font-medium ">
                        <label for="Username" class=""></label>
                    </div>
                    <div class="w-full mx-5 ">
                        
                        <input type="password" placeholder="Password" class="w-full px-6 py-3 mb-2  rounded-lg font-medium ">
                        <label for="Password" class=""></label>
                    </div>
                    <div class="flex flex-row justify-between w-full">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="text-blue-900">
                            <label for="remember" class="text-black ml-2">Ingat Saya</label>
                          </div>
                        <a href="#">
                            <h1 class=" font-bold text-lg">Lupa Password?</h1>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center my-5 w-full px-5">
                    <div class="py-2 w-full">
                        <button class=" md:flex justify-center bg-red-700 w-full py-3 border border-red-700 rounded-md items-center " onclick="showAlert()">
                            <a class="text-white text-center" href="./home">Login</a>
                        </button>
                    </div>
                    <div class="py-2 w-full">
                        <button class=" md:flex justify-center bg-red-700 w-full py-3 px-3 border border-red-700 rounded-md items-center ">
                            <a class="text-white text-center" href="./home">Batal</a>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
      </section>


    <script src="{{ asset('js/style.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <script>
        function showAlert() {
            // Tampilkan alert sukses
            sweetAlert("Selamat", "Login Berhasil", "success");
        }
    </script>
</body>
</html>