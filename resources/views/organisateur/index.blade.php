@extends('layouts.admin')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        @include('layouts.navbaradmin')
        <!-- end navbar -->


        <div class="p-6">

            <h2 class="  text-[#f84525] text-3xl font-bold pb-2">Evenments</h2>
            {{-- <div class="p-2 mb-6 text-center rounded bg-[#FEECE2] w-60">
                <div class="font-bold text-blue-500 uppercase ">
                    @if (Auth::user()->ascked_permission == false)
                        <form action="{{ route('Accepte', ['user' => Auth::user()]) }}">
                            <button
                                class="inline-flex items-center px-1 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out border border-transparent rounded-md  focus:outline-none text-[#F6995C]">
                                Rappel
                                Permission
                            </button>
                        </form>
                    @else
                        @can('organise')
                            Organisateur
                        @else
                            waiting
                        @endcan
                    @endif






                </div>

            </div> --}}

            <div
                class="relative flex flex-col w-full min-w-0 p-6 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                <h2 class="font-bold text-blue-400">Creation Evenments</h2>
                <div class="px-0 mb-0 border-0 rounded-t">
                    <div class="flex flex-wrap items-center px-4 py-2">
                        <div class="block w-full overflow-x-auto">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            name_Event</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Categorie</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Location</th>

                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Date</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Nomber de place</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Ticket</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr class="text-gray-700 dark:text-gray-100">
                                            <th
                                                class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->title }}</th>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->categorie->name }}
                                            </td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->location }}</td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->date }}</td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->number_places }}</td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->status }}</td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->validated ? 'true' : 'false' }}</td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div
                class="relative flex flex-col w-full min-w-0 p-6 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                <h2 class="font-bold text-blue-400">Statistiques Reservation sur les Evenments</h2>
                <div class="px-0 mb-0 border-0 rounded-t">
                    <div class="flex flex-wrap items-center px-4 py-2">
                        <div class="block w-full overflow-x-auto">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            name_Event</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Categorie</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Location</th>

                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Date</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Nomber de place</th>

                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Count </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr class="text-gray-700 dark:text-gray-100">
                                            <th
                                                class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->title }}</th>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->categorie->name }}
                                            </td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->location }}</td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->date }}</td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->number_places }}</td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->status }}</td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            {{-- <div class="p-3 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">


            </div> --}}
        </div>

        </div>
        <!-- End Content -->
    </main>
@endsection
