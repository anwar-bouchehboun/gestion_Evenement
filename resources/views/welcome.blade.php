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

{{-- @if (Route::has('login'))
                <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
                    @auth
                        <a href="{{ url('/client') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

<body class="max-w-[1920px] mx-auto">
    <div class="bg-[#f8f9ff] font-[sans-serif] text-[#333] text-[15px]">
        <header class='py-4 px-4 sm:px-10 z-50 min-h-[70px] '>
            <div class='relative flex flex-wrap items-center gap-4'>
                <h2 class="text-2xl font-bold">Tuned <span class="bg-[#387ADF] text-white px-2 rounded-md">EVENTO</span>
                </h2> </a>
                <div class='flex ml-auto lg:order-1'>
                    <button
                        class='px-6 py-3 text-white transition-all rounded-xl bg-cyan-900 hover:bg-cyan-800'>Login</button>
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
                        <a href='javascript:void(0)'
                            class='block font-bold text-blue-600 transition-all lg:hover:text-blue-600'>Home</a>
                    </li>
                    <li class='px-3 max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                            class='block font-bold transition-all lg:hover:text-blue-600'>Team</a>
                    </li>
                    <li class='px-3 max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                            class='block font-bold transition-all lg:hover:text-blue-600'>Feature</a>
                    </li>
                    <li class='px-3 max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                            class='block font-bold transition-all lg:hover:text-blue-600'>Blog</a>
                    </li>
                    <li class='px-3 max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                            class='block font-bold transition-all lg:hover:text-blue-600'>About</a>
                    </li>
                </ul>
            </div>
        </header>

        <div class="relative ">
            <div class="px-4 sm:px-10">
                <div class="relative z-10 max-w-4xl mx-auto mt-16 text-center">
                    <h1 class="md:text-6xl text-4xl font-extrabold mb-6 md:!leading-[75px] text-teal-700 ">COMING SOON !
                    </h1>
                    <p class="text-base font-semibold">Anticipate something big! Stay tuned for upcoming surprises and
                        announcements. Exciting things are on the way. Keep an eye out.</p>
                    <div class="mx-auto">
                        <div class="grid items-center gap-6 mt-16 sm:grid-cols-2">

                            <div class="flex flex-col items-center text-center">
                                <h5 class="mb-2 text-2xl font-bold text-blue-600">{!! $organisateur !!}</h5>
                                <p class="font-serif font-semibold uppercase">Organisateur</p>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <h5 class="mb-2 text-2xl font-bold text-blue-600">{!! $events !!}</h5>
                                <p class="font-serif font-semibold uppercase">Evenements</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-12 border-gray-300" />
            </div>
        </div>
        <div class="px-4 sm:px-10">
            <div class="mx-auto mt-22 max-w-7xl">
                <div class="max-w-2xl mx-auto mb-16 text-center">
                    <h2 class="mb-6 text-3xl font-extrabold md:text-4xl">Our Events</h2>
                    <p class="mt-6">Engaging and dynamic events tailored to your needs. Unforgettable experiences,
                        expertly crafted for lasting impact</p>
                </div>
                <div class="relative">
                    <form action="{{ route('search') }}" method="post"
                        class="flex mx-auto text-center mb-7 sm:w-64 md:w-80 lg:w-96">
                        @csrf

                        <input type="search" name="search"
                            class="relative m-0 -me-0.5 block flex-auto rounded-s border border-solid border-blue-500 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-surface outline-none transition duration-200 ease-in-out placeholder:text-neutral-500 focus:z-[3] focus:border-primary focus:shadow-inset focus:outline-none motion-reduce:transition-none dark:border-white/10 dark:text-white dark:placeholder:text-neutral-200 dark:autofill:shadow-autofill dark:focus:border-primary"
                            placeholder="Search" aria-label="Search" id="exampleFormControlInput3"
                            aria-describedby="button-addon3" />

                        <button type="submit"
                            class="bg-cyan-600 z-[2] inline-block rounded-e border-2 border-primary px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-primary-accent-300 hover:bg-primary-50/50 hover:text-primary-accent-300 focus:border-primary-600 focus:bg-primary-50/50 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:text-primary-500"
                            data-twe-ripple-init data-twe-ripple-color="white" type="button" id="button-addon3">
                            Search
                        </button>
                    </form>

                    <div class="grid items-center grid-cols-2 gap-4 mb-3 md:grid-cols-4">
                        @foreach ($categories as $categorie)
                            <a href=""
                                class="px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600 text-center">
                                {{ $categorie->name }}
                            </a>
                        @endforeach

                    </div>
                </div>

                @if (count($eventaffiche))
                    <div class="grid gap-8 mx-auto lg:grid-cols-3 md:grid-cols-2 max-md:max-w-lg">

                        @foreach ($eventaffiche as $event)
                            {{-- <div
                                class="sm:p-2 p-2 flex bg-white rounded-md border shadow-[0_14px_40px_-11px_rgba(93,96,127,0.2)]">

                                <img src="../storage/{{ $event->image }}" alt="{{ $event->title }}"
                                    class="object-cover h-48 w-62">

                                <div class="pt-10 pl-3">
                                    <h3 class="mb-2 font-extrabold">{{ $event->title }}</h3>
                                    <h4 class="mb-2 font-normal text-gray-400">{{ $event->location }} -<span
                                            class="text-blue-500 "> {{ $event->date }}</span>
                                    </h4>
                                    <h5 class="mb-2 font-semibold">{{ $event->user->name }}</h5>

                                    <h6 class="mb-2" style="">{{ $event->categorie->name }}</h6>

                                    <a href=""
                                        class="text-[#7e7ed8] font-medium text-sm hover:text-red-800 float-end mt-2">View</a>

                                </div>
                            </div> --}}
                            <div
                                class="sm:p-2 p-2 flex bg-white rounded-md border shadow-[0_14px_40px_-11px_rgba(93,96,127,0.2)]">

                                <div class="w-40 ">
                                    <img alt="ecommerce" class="block object-cover object-center h-48 w-62 "
                                        src="../storage/{{ $event->image }}">

                                </div>

                                <div class="px-2 mt-10">
                                    <h3 class="mb-1 text-xs tracking-widest text-gray-500 title-font">
                                        {{ $event->categorie->name }}</h3>
                                    <h2 class="font-extrabold text-gray-900 title-font">{{ $event->title }}</h2>
                                    <h4 class="mb-2 font-normal text-gray-400">{{ $event->location }} -<span
                                            class="text-blue-500 "> {{ $event->date }}</span>
                                        <h5 class="mb-2 font-semibold">{{ $event->user->name }}</h5>
                                        <a href=""
   class="text-[#fff] font-medium text-sm hover:text-red-800 float-end mt-2 border border-cyan-400 py-1 px-3 bg-cyan-400">View</a>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="flex justify-center mt-4">
                        {{ $eventaffiche->links() }}

                    </div>
                @else
                    <h1 class="mb-6 font-medium text-center text-1xl md:text-2xl">Not Event Today</h1>
                @endif


            </div>
        </div>


        <div class="mt-32">
            <div class="mb-16 text-center">
                <h2 class="text-3xl font-extrabold md:text-4xl">What our happy client say</h2>
            </div>
            <div class="relative grid gap-8 mx-auto md:grid-cols-3 md:py-16 max-w-7xl max-md:max-w-lg">
                <div
                    class="bg-blue-100 lg:max-w-[70%] max-w-[80%] h-full w-full inset-0 mx-auto rounded-3xl absolute max-md:hidden">
                </div>
                <div class="relative h-auto p-4 mx-auto bg-white rounded-md lg:p-6 max-md:shadow-md">
                    <div>
                        <img src="https://readymadeui.com/profile_2.webp" class="w-12 h-12 rounded-full" />
                        <h4 class="mt-2 font-extrabold whitespace-nowrap">John Doe</h4>
                        <p class="mt-1 text-xs">Founder of Rubik</p>
                    </div>
                    <div class="mt-4">
                        <p>The service was amazing. I never had to wait that long for my food.
                            The staff was friendly and attentive, and the delivery was impressively prompt.</p>
                    </div>
                </div>
                <div class="relative h-auto p-4 mx-auto bg-white rounded-md lg:p-6 max-md:shadow-md">
                    <div>
                        <img src="https://readymadeui.com/profile_3.webp" class="w-12 h-12 rounded-full" />
                        <h4 class="mt-2 font-extrabold whitespace-nowrap">Mark Adair</h4>
                        <p class="mt-1 text-xs">Founder of Alpha</p>
                    </div>
                    <div class="mt-4">
                        <p>The service was amazing. I never had to wait that long for my food.
                            The staff was friendly and attentive, and the delivery was impressively prompt.</p>
                    </div>
                </div>
                <div class="relative h-auto p-4 mx-auto bg-white rounded-md lg:p-6 max-md:shadow-md">
                    <div>
                        <img src="https://readymadeui.com/profile_4.webp" class="w-12 h-12 rounded-full" />
                        <h4 class="mt-2 font-extrabold whitespace-nowrap">Simon Konecki</h4>
                        <p class="mt-1 text-xs">Founder of Labar</p>
                    </div>
                    <div class="mt-4">
                        <p>The service was amazing. I never had to wait that long for my food.
                            The staff was friendly and attentive, and the delivery was impressively prompt.</p>
                    </div>
                </div>
            </div>
        </div>







    </div>

    <footer class="px-4 py-12 mt-32 bg-cyan-900 sm:px-10">
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
