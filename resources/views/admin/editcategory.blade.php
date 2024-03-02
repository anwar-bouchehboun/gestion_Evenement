@extends('layouts.admin')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        <div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>

            <ul class="ml-auto flex items-center">
                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <div class="flex-shrink-0 w-10 h-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg"
                                    alt="" />
                                <div
                                    class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping">
                                </div>
                                <div class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                        </div>
                        <div class="p-2 md:block text-left">
                            <h2 class="text-sm font-semibold text-gray-800">John Doe</h2>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>
                    </button>
                    <ul
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <form method="POST" action="">
                                <a role="menuitem"
                                    class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50 cursor-pointer"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- end navbar -->

        <!-- Content -->
        <h2 class="   text-[#f84525] text-3xl font-bold m-2">CATEGORIE</h2>
        <div class=" " style=" width:50%; margin:auto;">

            <div class="   bg-slate-50 rounded p-20" style="margin-left: 0%;">
                <h2 class="mb-4 text-xl font-semibold">Formulaire Modifier de CaTegorie
                </h2>
                <form action="" method="post" class=" w-64 mx-auto">
                    @csrf
                    <div class="mb-4">
                        <label for="specialite" class="block mb-2 font-medium text-gray-700">Edit Categorie :</label>
                        <input type="text" id="categorie" name="categorie"
                            class="w-full  py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        @error('categorie')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="px-20 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Edit
                    </button>
                </form>
                {{-- <button id="fermerPopup"
                    class="px-16 py-2 mt-4 text-white bg-red-500 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Fermer</button> --}}
            </div>
        </div>





        <!-- End Content -->

    </main>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const boutonOuvrirPopup = document.getElementById('ouvrirPopup');
        const boutonFermerPopup = document.getElementById('fermerPopup');
        const popup = document.getElementById('popup');

        boutonOuvrirPopup.addEventListener('click', function() {
            popup.classList.remove('hidden');
        });

        boutonFermerPopup.addEventListener('click', function() {
            popup.classList.add('hidden');
        });
    });
</script>
