<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>

{{-- <style>
        @media (min-width: 1884px) {
            .container {
                @apply w-1600 mx-auto;
            }
        }
    </style> --}}

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
                <div
                    class="hidden lg:flex items-center justify-center text-center w-1/3 h-[32px] mx-auto space-x-4 bg-gray-50 rounded-2xl text-[14px] backdrop-brightness-90 backdrop-blur-sm bg-opacity-10 border-t-2 border-solid border-gray-50">
                    <a href="/"
                        class="text-active px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">Home</a>
                    <a href="#services"
                        class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">Services</a>
                    <a href="#"
                        class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">Tour</a>
                    <a href="#"
                        class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">About</a>
                    <a href="#"
                        class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">Contact</a>
                </div>
                <button id="menu-button" class="lg:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div id="mobile-menu"
                class="hidden flex-col items-center justify-center text-center space-y-4 bg-gray-50 rounded-2xl text-[14px] backdrop-brightness-90 backdrop-blur-sm bg-opacity-10 border-t-2 border-solid border-gray-50 lg:hidden mt-3">
                <a href="/"
                    class="text-active px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">Home</a>
                <a href="#services"
                    class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">Services</a>
                <a href="#"
                    class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">Tour</a>
                <a href="#"
                    class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">About</a>
                <a href="#"
                    class="text-gray-300 px-2 py-1 hover:text-[#fff] transition duration-300 ease-in-out">Contact</a>
            </div>
        </nav>

        <div onclick="toggleDropdown()"
            class="absolute top-[240px] left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 text-center justify-center w-full px-4 sm:px-0">
            <h1 class="text-3xl sm:text-4xl md:text-5xl text-white font-semibold">Extraordinary natural and <Br>cultural
                charm</Br></h1>
            <p class="text-gray-200 text-sm my-2">Exploring Indonesia is an unforgettable adventure</p>
            <div
                class="container custom-container flex flex-col sm:flex-row items-center lg:ml-96 md:ml-40 space-y-5 sm:space-y-0 sm:space-x-2 md:space-x-10 border-t-2 border-solid border-gray-50 bg-gray-500 w-full sm:w-auto max-w-lg p-3 rounded-3xl justify-center backdrop-brightness-120 backdrop-blur-sm bg-opacity-10 mt-5">
                <!-- Ikon kalender -->
                <div class="relative">
                    <div class="flex items-center space-x-2 relative">
                        <img src="icon/date.svg" alt="" class="w-6 h-6 mr-1">
                        <h6 class="text-white text-sm">Date</h6>
                        <button onclick="toggleDropdown('dropdownDate')">
                            <img src="icon/arrowDown.svg" alt="" class="w-3 h-4 ml-3">
                        </button>
                        <div class="rounded bg-gray-500 absolute top-full left-1/2 transform -translate-x-1/2 w-[150px] sm:w-auto border-t border-solid border-gray-50 backdrop-brightness-125 backdrop-blur-sm bg-opacity-10 hidden"
                            id="dropdownDate">
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Date
                                Setting 1</a>
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Date
                                Setting 2</a>
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Date
                                Setting 3</a>
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Date
                                Setting 4</a>
                        </div>
                    </div>
                </div>

                <p class="text-white hidden sm:block">|</p>

                <!-- icon wallet -->
                <div class="relative">
                    <div class="flex items-center space-x-2 relative">
                        <img src="icon/wallet.svg" alt="" class="h-6 w-6 mr-1">
                        <h6 class="text-white text-sm">Budget</h6>
                        <button onclick="toggleDropdown('dropdownBudget')">
                            <img src="icon/arrowDown.svg" alt="" class="w-3 h-4 ml-3 white">
                        </button>
                        <div class="rounded bg-gray-500 absolute top-full left-1/2 transform -translate-x-1/2 w-[150px] sm:w-auto border-t border-solid border-gray-50 backdrop-brightness-125 backdrop-blur-sm bg-opacity-10 hidden"
                            id="dropdownBudget">
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Budget
                                Setting 1</a>
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Budget
                                Setting 2</a>
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Budget
                                Setting 3</a>
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Budget
                                Setting 4</a>
                        </div>
                    </div>
                </div>

                <p class="text-white hidden sm:block">|</p>

                <!-- Ikon profil -->
                <div class="relative">
                    <div class="flex items-center space-x-2 relative">
                        <img src="icon/profile.svg" alt="" class="w-5 h-6 mr-1">
                        <h6 class="text-white text-sm">Guest</h6>
                        <button onclick="toggleDropdown('dropdownGuest')">
                            <img src="icon/arrowDown.svg" alt="" class="w-3 h-4 ml-3">
                        </button>
                        <div class="rounded bg-gray-500 absolute top-full left-1/2 transform -translate-x-1/2 w-[150px] sm:w-auto border-t border-solid border-gray-50 backdrop-brightness-125 backdrop-blur-sm bg-opacity-10 hidden"
                            id="dropdownGuest">
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Guest
                                Setting 1</a>
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Guest
                                Setting 2</a>
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Guest
                                Setting 3</a>
                            <a
                                class="text-gray-500 text-sm px-2 py-2 text-center hover:text-white transition duration-300 ease-in-out cursor-pointer block">Guest
                                Setting 4</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="absolute flex flex-wrap justify-center items-center mx-auto md:space-x-10 w-full mt-[505px] m-5">
        <div
            class="border bg-white w-full sm:w-60 md:w-44 h-[75px] rounded-lg text-center shadow-lg flex items-center justify-center flex-col mb-5 md:mb-0">
            <h4 class="text-black text-xl font-semibold mt-2">10M+</h4>
            <p class="text-gray-600 text-sm mt-1">Total Customers</p>
        </div>

        <div
            class="border bg-white w-full sm:w-60 md:w-44 h-[75px] rounded-lg text-center shadow-lg flex items-center justify-center flex-col mb-5 md:mb-0">
            <h4 class="text-black text-xl font-semibold mt-2">10+</h4>
            <p class="text-gray-600 text-sm mt-1">Years Of Experience</p>
        </div>

        <div
            class="border bg-white w-full sm:w-60 md:w-44 h-[75px] rounded-lg text-center shadow-lg flex items-center justify-center flex-col mb-5 md:mb-0">
            <h4 class="text-black text-xl font-semibold mt-2">12K</h4>
            <p class="text-gray-600 text-sm mt-1">Total Destination</p>
        </div>

        <div
            class="border bg-white w-full sm:w-60 md:w-44 h-[75px] rounded-lg text-center shadow-lg flex items-center justify-center flex-col mb-5 md:mb-0">
            <h4 class="text-black text-xl font-semibold mt-2">4.9</h4>
            <p class="text-gray-600 text-sm mt-1">Average Rating</p>
        </div>



        {{-- <div class="flex flex-wrap absolute mt-[650px] m-24 md:mt-[730px] md:m-12 lg:mt-[650px] lg:m-20">
        <div class="">
            <p class="text-gray-500">Best Location</p>
            <h2 class="font-semibold text-4xl">Indonesian tourism</h2>
            <p class="text-gray-500 ml-[730px] mt-[-20px] md:ml-[365px] lg:ml-[182px]">Extraordinary natural beauty,enjoy the rich culture, <br>and experience the friendliness of the local people</p>
        </div>
    </div>
    --}}
















        <script>
            function toggleDropdown(id) {
                document.querySelectorAll('.dropdown').forEach(dropdown => {
                    if (dropdown.id !== id) {
                        dropdown.classList.add('hidden');
                    }
                });
                document.getElementById(id).classList.toggle('hidden');
            }

            const menuButton = document.getElementById('menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            function toggleDropdown(id) {
                const dropdown = document.getElementById(id);
                dropdown.classList.toggle('hidden');
            }
        </script>
</body>

</html>
