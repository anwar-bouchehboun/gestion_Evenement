<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>



<body class="max-w-[1920px] mx-auto">
    <div class="bg-[#f8f9ff] font-[sans-serif] text-[#333] text-[15px]">
        <header class='py-4 px-4 sm:px-10 z-50 min-h-[70px] '>
            <div class='relative flex flex-wrap items-center gap-4'>
                <h2 class="text-2xl font-bold">Tuned <span class="bg-[#387ADF] text-white px-2 rounded-md">EVENTO</span>
                </h2>
                {{-- </a> --}}
                <div class='flex ml-auto lg:order-1'>
                    {{-- <button
                        class='px-6 py-3 text-white transition-all rounded-xl bg-cyan-900 hover:bg-cyan-800'>Login</button> --}}
                    <button id="toggle" class='lg:hidden ml-7'>
                        <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <ul id="collapseMenu"
                    class='lg:!flex lg:ml-12 lg:space-x-6 max-lg:space-y-6 max-lg:hidden max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[250px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-lg:z-50'>
                    <li class='px-3 max-lg:border-b max-lg:py-2'>
                        <a href='{{ route('Home') }}'
                            class='block font-bold text-blue-600 transition-all lg:hover:text-blue-600'>Home</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            @role('client')
                                <li class='px-3 max-lg:border-b max-lg:py-2'><a href='{{ route('client') }}'
                                        class='block font-bold transition-all lg:hover:text-blue-600'>Dashbord</a>
                                </li>
                            @endrole
                        @else
                            <a href="{{ route('login') }}" class='block font-bold transition-all lg:hover:text-blue-600'>Log
                                in</a>

                            @if (Route::has('register'))
                                <li class='px-3 max-lg:border-b max-lg:py-2'>
                                    <a href="{{ route('register') }}"
                                        class='block font-bold transition-all lg:hover:text-blue-600'>Register</a>
                                </li>
                            @endif
                        @endauth

                    @endif


                </ul>
            </div>
        </header>






        <section class="py-5 bg-gray-100 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid items-center grid-cols-1 gap-y-8 lg:grid-cols-2 gap-x-16 xl:gap-x-24">
                    <div class="relative mb-12">
                        <img class="w-full rounded-md"  src="../storage/{{ $events->image }}" alt="" />

                        <div class="absolute w-full max-w-xs px-4 -translate-x-1/2 sm:px-0 sm:max-w-sm left-1/2 -bottom-12">
                            <div class="overflow-hidden bg-white rounded">
                                <div class="px-10 py-6">
                                    <div class="flex items-center">
                                        <p class="flex-shrink-0 text-3xl font-bold text-blue-600 sm:text-4xl">{{ $events->number_places }}</p>
                                        <p class="pl-6 text-sm font-bold text-gray-500 sm:text-lg">Nomber Place <br />Disponible</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full">
                            <svg class="w-8 h-8 text-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h2 class="mt-10 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight"> {{ $events->title }} </h2>
                        <p class="mt-6 text-lg leading-relaxed text-gray-600">{{ $events->description }}</p>
                        <h5 class=""> <strong  class="text-3xl text-blue-600">{{ $events->date }}</strong> </h5>
                        <span class="text-2xl text-slate-600">  {{ $events->location }}</span> <br>
                        <a href="#" title="" class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 rounded-md mt-9 bg-gradient-to-r to-blue-600 hover:opacity-80 focus:opacity-80 from-cyan-600" role="button"> Réservé </a>
                    </div>
                </div>
            </div>
        </section>





    </div>

    <footer class="px-4 py-12 bg-cyan-900 sm:px-10">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div>
                <h4 class="mb-6 text-xl font-extrabold text-white">Quick Links</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Our
                            Story</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-300 transition-all hover:text-white">Newsroom</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Careers</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Blog</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="mb-6 text-xl font-extrabold text-white">Services</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Web
                            Development</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Testing
                            Automation</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">AWS
                            Development
                            Services</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Mobile
                            App
                            Development</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="mb-6 text-xl font-extrabold text-white">Platforms</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Hubspot</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Marketo
                            Integration
                            Services</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Marketing
                            Glossary</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">UIPath</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="mb-6 text-xl font-extrabold text-white">Company</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-300 transition-all hover:text-white">Accessibility</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">About</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Contact</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Learn
                            more</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pt-8 mt-8 text-center border-t border-gray-400">
            <p class="text-gray-300">
                Copyright © 2023
                <a href="https://readymadeui.com/" target="_blank" class="mx-1 hover:underline">ReadymadeUI</a>
                All Rights Reserved.
            </p>
        </div>
    </footer>

    </div>
</body>



</html>

<script>
    var toggleBtn = document.getElementById('toggle');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleBtn.addEventListener('click', handleClick);
</script>
