@extends('layouts.admin')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        @include('layouts.navbaradmin')
        <!-- end navbar -->


        <div class="p-6">

            <h2 class="  text-[#f84525] text-3xl font-bold pb-2"> Evenments</h2>


            <div
                class="relative flex flex-col w-full min-w-0 p-6 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                <div class="px-0 mb-0 border-0 rounded-t">
                    <div class="flex flex-wrap items-center px-4 py-2">
                        <div class="relative flex-1 flex-grow w-full max-w-full">
                            <h3 class="pb-5 text-sm font-bold text-blue-400 dark:text-gray-50">Show Evenments </h3>
                            <div class="max-w-6xl mx-auto text-[#333] font-[sans-serif]">
                                <div class="grid gap-4 mt-4 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
                                    @foreach ($events as $event)
                                        <div class="flex flex-col w-full gap-3 px-12 py-4 text-white rounded">
                                            <div class="max-w-full">
                                                <img src="../storage/{{ $event->image }}" class="w-full h-auto"
                                                    alt="">
                                            </div>
                                            <div class="">
                                                <h1 class="text-3xl font-extrabold text-neutral-950">{{ $event->title }}
                                                </h1>
                                                <span class="text-[#B5C0D0] ">{{ $event->location }}</span>
                                                <div class="my-1">
                                                    <p class="font-bold text-black">{{ $event->description }}</p>
                                                </div>
                                                <h2 class="text-2xl font-medium text-cyan-700">{{ $event->categorie->name }}
                                                </h2>
                                                <h3 class="font-bold text-orange-600">Nombre de réservations : <span
                                                        class="font-semibold text-emerald-400">32</span></h3>
                                                <h5 class="font-medium text-cyan-700">Type de réservation : <span
                                                        class="text-black">{{ $event->status }}</span></h5>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="block w-full overflow-x-auto">
                                        <table class="items-center w-full bg-transparent border-collapse">
                                            <thead>
                                                <tr>
                                                    <th
                                                    class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                                  #</th>
                                                    <th
                                                        class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                                        name_user</th>
                                                    <th
                                                        class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                                        Email</th>

                                                    <th
                                                        class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                                        Ticket</th>

                                                    <th
                                                        class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($reservations as $reservation)
                                                    <tr class="text-gray-700 dark:text-gray-100">
                                                        <td
                                                        class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                        {{ $reservation->id }}
                                                    </td>

                                                        <td
                                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                            {{ $reservation->user->name }}
                                                        </td>
                                                        <td
                                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                            {{ $reservation->user->email }}
                                                        </td>
                                                        <td
                                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                            {{ $reservation->event->status }}
                                                        </td>


                                                        <td
                                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                            <form id="deleteForm" action="" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button type="submit"
                                                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette Catégorie ?')"
                                                                    class="text-blue-500 hover:text-red-700">
                                                                  Accepte Place
                                                                </button>
                                                            </form>
                                                    </td>

                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>


        <!-- End Content -->
    </main>
@endsection
