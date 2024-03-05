@extends('layouts.admin')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        @include('layouts.navbaradmin')
        <!-- end navbar -->

        <!-- Content -->
        <h2 class="   text-[#f84525] text-3xl font-bold m-2">CATEGORIE</h2>
        <div class="" style=" width:50%; margin:auto;">

            <div class="p-20 rounded  bg-slate-50" style="margin-left: 0%;">
                <h2 class="mb-4 text-xl font-semibold">Formulaire Modifier de CaTegorie
                </h2>
                <form action="{{ route('categorie.update', $categorie) }}" method="POST" class="w-64 mx-auto">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="categorie" class="block mb-2 font-medium text-gray-700">Edit Categorie :</label>
                        <input type="text" id="categorie" name="name" value="{{ $categorie->name }}"
                            class="w-full py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        @error('name')
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
{{-- <script>
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
</script> --}}
