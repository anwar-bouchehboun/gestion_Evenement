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
                                <h5 class="mb-2 text-2xl font-bold text-blue-600">890</h5>
                                <p class="font-serif font-semibold uppercase">Organisateur</p>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <h5 class="mb-2 text-2xl font-bold text-blue-600">250</h5>
                                <p class="font-serif font-semibold uppercase">Evenements</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-12 border-gray-300" />
                <div class="grid items-center grid-cols-2 gap-4 md:grid-cols-4">
                    <img src="https://readymadeui.com/google-logo.svg" class="mx-auto w-28" alt="google-logo" />
                    <img src="https://readymadeui.com/facebook-logo.svg" class="mx-auto w-28" alt="facebook-logo" />
                    <img src="https://readymadeui.com/linkedin-logo.svg" class="mx-auto w-28" alt="linkedin-logo" />
                    <img src="https://readymadeui.com/pinterest-logo.svg" class="mx-auto w-28" alt="pinterest-logo" />
                </div>
            </div>
            {{-- <img src="https://readymadeui.com/bg-effect.svg" class="absolute inset-0 w-full h-full" /> --}}
        </div>

        <div class="px-4 sm:px-10">
            <div class="mx-auto mt-32 max-w-7xl">
                <div class="max-w-2xl mx-auto mb-16 text-center">
                    <h2 class="mb-6 text-3xl font-extrabold md:text-4xl">Our Events</h2>
                    <p class="mt-6">Engaging and dynamic events tailored to your needs. Unforgettable experiences,
                        expertly crafted for lasting impact</p>
                </div>
                <div class="relative flex w-48 mx-auto mb-7">
                    <input type="search"
                        class="relative m-0 -me-0.5 block flex-auto rounded-s border border-solid border-blue-500 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-surface outline-none transition duration-200 ease-in-out placeholder:text-neutral-500 focus:z-[3] focus:border-primary focus:shadow-inset focus:outline-none motion-reduce:transition-none dark:border-white/10 dark:text-white dark:placeholder:text-neutral-200 dark:autofill:shadow-autofill dark:focus:border-primary"
                        placeholder="Search" aria-label="Search" id="exampleFormControlInput3"
                        aria-describedby="button-addon3" />
                    <button
                        class=" bg-cyan-600 z-[2] inline-block rounded-e border-2 border-primary px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-primary-accent-300 hover:bg-primary-50/50 hover:text-primary-accent-300 focus:border-primary-600 focus:bg-primary-50/50 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:text-primary-500 "
                        data-twe-ripple-init data-twe-ripple-color="white" type="button" id="button-addon3">
                        Search
                    </button>
                </div>
                <div class="grid gap-8 mx-auto lg:grid-cols-3 md:grid-cols-2 max-md:max-w-lg">
                    <div
                        class="sm:p-6 p-4 flex bg-white rounded-md border shadow-[0_14px_40px_-11px_rgba(93,96,127,0.2)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-12 h-12 p-3 mr-6 rounded-md bg-blue-50 shrink-0" viewBox="0 0 32 32">
                            <path
                                d="M28.068 12h-.128a.934.934 0 0 1-.864-.6.924.924 0 0 1 .2-1.01l.091-.091a2.938 2.938 0 0 0 0-4.147l-1.511-1.51a2.935 2.935 0 0 0-4.146 0l-.091.091A.956.956 0 0 1 20 4.061v-.129A2.935 2.935 0 0 0 17.068 1h-2.136A2.935 2.935 0 0 0 12 3.932v.129a.956.956 0 0 1-1.614.668l-.086-.091a2.935 2.935 0 0 0-4.146 0l-1.516 1.51a2.938 2.938 0 0 0 0 4.147l.091.091a.935.935 0 0 1 .185 1.035.924.924 0 0 1-.854.579h-.128A2.935 2.935 0 0 0 1 14.932v2.136A2.935 2.935 0 0 0 3.932 20h.128a.934.934 0 0 1 .864.6.924.924 0 0 1-.2 1.01l-.091.091a2.938 2.938 0 0 0 0 4.147l1.51 1.509a2.934 2.934 0 0 0 4.147 0l.091-.091a.936.936 0 0 1 1.035-.185.922.922 0 0 1 .579.853v.129A2.935 2.935 0 0 0 14.932 31h2.136A2.935 2.935 0 0 0 20 28.068v-.129a.956.956 0 0 1 1.614-.668l.091.091a2.935 2.935 0 0 0 4.146 0l1.511-1.509a2.938 2.938 0 0 0 0-4.147l-.091-.091a.935.935 0 0 1-.185-1.035.924.924 0 0 1 .854-.58h.128A2.935 2.935 0 0 0 31 17.068v-2.136A2.935 2.935 0 0 0 28.068 12ZM29 17.068a.933.933 0 0 1-.932.932h-.128a2.956 2.956 0 0 0-2.083 5.028l.09.091a.934.934 0 0 1 0 1.319l-1.511 1.509a.932.932 0 0 1-1.318 0l-.09-.091A2.957 2.957 0 0 0 18 27.939v.129a.933.933 0 0 1-.932.932h-2.136a.933.933 0 0 1-.932-.932v-.129a2.951 2.951 0 0 0-5.028-2.082l-.091.091a.934.934 0 0 1-1.318 0l-1.51-1.509a.934.934 0 0 1 0-1.319l.091-.091A2.956 2.956 0 0 0 4.06 18h-.128A.933.933 0 0 1 3 17.068v-2.136A.933.933 0 0 1 3.932 14h.128a2.956 2.956 0 0 0 2.083-5.028l-.09-.091a.933.933 0 0 1 0-1.318l1.51-1.511a.932.932 0 0 1 1.318 0l.09.091A2.957 2.957 0 0 0 14 4.061v-.129A.933.933 0 0 1 14.932 3h2.136a.933.933 0 0 1 .932.932v.129a2.956 2.956 0 0 0 5.028 2.082l.091-.091a.932.932 0 0 1 1.318 0l1.51 1.511a.933.933 0 0 1 0 1.318l-.091.091A2.956 2.956 0 0 0 27.94 14h.128a.933.933 0 0 1 .932.932Z"
                                data-original="#000000" />
                            <path
                                d="M16 9a7 7 0 1 0 7 7 7.008 7.008 0 0 0-7-7Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Z"
                                data-original="#000000" />
                        </svg>
                        <div>
                            <h3 class="mb-2 text-xl font-extrabold">Customization</h3>
                            <h4 class="mb-2 font-normal">Location <span> date</span></h4>
                            <p>Tailor our product to suit your needs Tailor our product to suit your needs.</p>
                        </div>
                    </div>

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
                            <a href="javascript:void(0)"
                                class="text-gray-300 transition-all hover:text-white">Careers</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="text-gray-300 transition-all hover:text-white">Blog</a>
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
                            <a href="javascript:void(0)"
                                class="text-gray-300 transition-all hover:text-white">Hubspot</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="text-gray-300 transition-all hover:text-white">Marketo
                                Integration
                                Services</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="text-gray-300 transition-all hover:text-white">Marketing Glossary</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="text-gray-300 transition-all hover:text-white">UIPath</a>
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
                            <a href="javascript:void(0)"
                                class="text-gray-300 transition-all hover:text-white">About</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="text-gray-300 transition-all hover:text-white">Contact</a>
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
