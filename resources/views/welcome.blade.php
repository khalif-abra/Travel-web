<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>

<body class="bg-gray-100">
    <header class="relative">
        <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent">
            <!-- Gambar -->
            <img src="img/bromo.jpg" alt="" class="absolute inset-0 w-full h-[600px] object-cover">
            </div>
        </div>

        {{-- bagian navbar --}}
        <nav class="container mx-auto px-6 py-3 relative z-10">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold text-[#fff] ml-5"><span
                        class="text-[#ff7d66]">T</span>ravelio</a>
                <div id="services"
                    class="flex items-center justify-center text-center w-1/3 h-[32px] mx-auto space-x-4 bg-gray-50 rounded-2xl text-[14px] backdrop-brightness-90 backdrop-blur-sm bg-opacity-10 border-t-2 border-solid border-gray-50">
                    <a href="/"
                        class="text-active px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out  {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="#services"
                        class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">Services</a>
                    <a href="#"
                        class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out {{ request()->is('/') ? 'active' : '' }} ">Tour</a>
                    <a href="#"
                        class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out {{ request()->is('/') ? 'active' : '' }} ">About</a>
                    <a href="#"
                        class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out {{ request()->is('/') ? 'active' : '' }} ">Contact</a>
                </div>
            </div>
        </nav>

        <div
            onclick="toggleDropdown()"
            class="absolute top-[240px] left-1/2 transform -translate-x-[305px] -translate-y-1/2 z-10 text-center justify-center">
            <h1 class="text-5xl text-white font-semibold">Extraordinary natural and cultural charm</h1>
            <p class="text-gray-200 text-sm my-2">Exploring Indonesia is an unforgettable adventure</p>
            <div
                class="flex items-center space-x-10 absolute m-4 border-t-2 border-solid border-gray-50 bg-gray-500 w-[550px] p-3 rounded-3xl justify-center ml-16 backdrop-brightness-120 backdrop-blur-sm bg-opacity-10 mt-5">
            <!-- Ikon kalender -->
            <div class="flex items-center space-x-2 relative">
                <img src="icon/date.svg" alt="" class="w-6 h-6 mr-1">
                <h6 class="text-white text-sm">Date</h6>
                <button onclick="toggleDropdown('dropdownDate')">
                    <img src="icon/arrowDown.svg" alt="" class="w-3 h-4 ml-3">
                </button>
                <div class="rounded bg-gray-500 absolute mt-56 w-[150px] h-[150px] border-t border-solid border-gray-50 backdrop-brightness-125 backdrop-blur-sm bg-opacity-10 hidden" id="dropdownDate">
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Date Setting 1</a>
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Date Setting 2</a>
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Date Setting 3</a>
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Date Setting 4</a>
                </div>
            </div>

            <p class="text-white">|</p>

            <!-- icon wallet -->
            <div class="flex items-center space-x-2 relative">
                <img src="icon/wallet.svg" alt="" class="h-6 w-6 mr-1">
                <h6 class="text-white text-sm">Budget</h6>
                <button onclick="toggleDropdown('dropdownBudget')">
                    <img src="icon/arrowDown.svg" alt="" class="w-3 h-4 ml-3 white">
                </button>
                <div class="rounded bg-gray-500 absolute mt-56 w-[150px] h-[150px] border-t border-solid border-gray-50 backdrop-brightness-125 backdrop-blur-sm bg-opacity-10 hidden" id="dropdownBudget">
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Budget Setting 1</a>
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Budget Setting 2</a>
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Budget Setting 3</a>
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Budget Setting 4</a>
                </div>
            </div>

            <p class="text-white">|</p>

            <!-- Ikon profil -->
            <div class="flex items-center space-x-2 relative">
                <img src="icon/profile.svg" alt="" class="w-5 h-6 mr-1">
                <h6 class="text-white text-sm">Guest</h6>
                <button onclick="toggleDropdown('dropdownGuest')">
                    <img src="icon/arrowDown.svg" alt="" class="w-3 h-4 ml-3">
                </button>
                <div class="rounded bg-gray-500 absolute mt-56 w-[150px] h-[150px] border-t border-solid border-gray-50 backdrop-brightness-125 backdrop-blur-sm bg-opacity-10 hidden" id="dropdownGuest">
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Guest Setting 1</a>
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Guest Setting 2</a>
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Guest Setting 3</a>
                    <a class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Guest Setting 4</a>
                </div>
            </div>
        </div>
    </div>
    </header>

    <div class="absolute mt-96 m-5 ml-80">
        <div>
            <h4>10M</h4>
        </div>
    </div>

    <script>
        function toggleDropdown(id) {
            document.querySelectorAll('.dropdown').forEach(dropdown => { 
                if (dropdown.id !== id) {
                    dropdown.classList.add('hidden');
                }
            });
            document.getElementById(id).classList.toggle('hidden');
        }
    </script>
</body>

</html>
