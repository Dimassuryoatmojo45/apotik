<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="fixed left-0 top-0 right-0 z-40 transition-all duration-300 ease-in-out flex justify-center" id="navbar">
        <div class="bg-white flex items-center justify-between px-3 lg:px-20 transition-all duration-300 ease-in-out w-full" id="navbar-container">
            <!-- Logo -->
            <div class="flex w-1/4 sm:w-1/6 justify-center items-center py-2">
                <a href="{{ url('/') }}" aria-label="hastadewa">
                    <img src="{{ asset('/img/landing/logo_hastadewa_blue.png') }}" alt="logo hastadewa" class="w-[37px] h-[37px] lg:w-[50px] lg:h-[50px]">
                </a>
            </div>
    
            <!-- Menu -->
            <div class="flex w-4/5 lg:justify-around justify-end items-center">
                <a href="{{ url('/#tentang') }}" class="hidden lg:block text-grayHastadewa hover:text-grayHastadewa/80 text-lg font-semibold">Tentang</a>
                <a href="{{ url('/#layanan') }}" class="hidden lg:block text-grayHastadewa hover:text-grayHastadewa/80 text-lg font-semibold">Layanan</a>
                <a href="{{ url('/detail_produk_farmascyn') }}" class="hidden lg:block text-grayHastadewa hover:text-grayHastadewa/80 text-lg font-semibold">Produk</a>
                <a href="{{ url('/#testimoni') }}" class="hidden lg:block text-grayHastadewa hover:text-grayHastadewa/80 text-lg font-semibold">Testimoni</a>
                <a href="https://api.whatsapp.com/send/?phone=6285156281898" class="hidden lg:block text-grayHastadewa hover:text-grayHastadewa/80 text-lg font-semibold">Kontak</a>
                <a href="/sign_in" class="hidden lg:flex bg-gradient-to-r from-hastadewa to-lightHastadewa text-white rounded-lg px-6 py-2">Login</a>
    
                <!-- Toggle Button -->
                <button id="toggle-menu" class="lg:hidden text-grayHastadewa w-[60px] h-[40px] rounded-lg text-2xl flex">
                    <i id="menu-icon" class="fas fa-bars text-3xl"></i>
                    <i id="close-icon" class="fas fa-times text-3xl hidden"></i>
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed top-0 right-[-100vw] w-[90vw] bottom-0 bg-white z-30 shadow-md transition-all duration-300 ease-in-out flex lg:hidden">
        <div class="w-full flex flex-col items-start mt-[80px] space-y-6 px-5">
            <a href="{{ url('/#tentang') }}" class="text-lg text-grayHastadewa">Tentang</a>
            <a href="{{ url('/#layanan') }}" class="text-lg text-grayHastadewa">Layanan</a>
            <a href="{{ url('/detail_produk_farmascyn') }}" class="text-lg text-grayHastadewa">Produk</a>
            <a href="{{ url('/#testimoni') }}" class="text-lg text-grayHastadewa">Testimoni</a>
            <a href="{{ url('/#kontak') }}" class="text-lg text-grayHastadewa">Kontak</a>
            <a href="#" class="bg-gradient-to-r from-hastadewa to-lightHastadewa text-white rounded-lg px-6 py-2 flex items-center">Login</a>
        </div>
    </div>
    
    
    
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
        let isMoreMenu = false;

        // Menangani scroll untuk efek perubahan navbar
        $(window).on("scroll", function () {
            let scrollPosition = $(window).scrollTop();
            let layananOffset = $("#layanan").offset()?.top || 0;

            // Tambahkan shadow jika scroll lebih dari 50px
            if (scrollPosition > 50) {
                $("#navbar-container").addClass("shadow-lg lg:h-[80px] h-[50px]");
                $("#navbar-container").removeClass("lg:h-[100px] h-[70px]");
            } else {
                $("#navbar-container").addClass("lg:h-[100px] h-[70px]");
                $("#navbar-container").removeClass("shadow-lg lg:h-[80px] h-[50px]");
            }

            // Cek apakah bagian layanan sudah dilewati
            if (scrollPosition >= layananOffset) {
                $("#navbar-container").addClass("lg:w-4/5 lg:rounded-xl lg:mt-5");
                $("#navbar-container").removeClass("w-full");
            } else {
                $("#navbar-container").addClass("w-full");
                $("#navbar-container").removeClass("lg:w-4/5 lg:rounded-xl lg:mt-5");
            }
        });

        // Toggle mobile menu
        $("#toggle-menu").on("click", function () {
            isMoreMenu = !isMoreMenu;
            if (isMoreMenu) {
                $("#mobile-menu").css("right", "0");
                $("#menu-icon").addClass("hidden");
                $("#close-icon").removeClass("hidden");
            } else {
                $("#mobile-menu").css("right", "-100vw");
                $("#menu-icon").removeClass("hidden");
                $("#close-icon").addClass("hidden");
            }
        });
    });

    </script>
</body>
</html>