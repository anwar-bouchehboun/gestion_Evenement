@extends('layouts.admin')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        @include('layouts.navbaradmin')
        <!-- end navbar -->


        <div class="p-6">

            <h2 class="  text-[#f84525] text-3xl font-bold pb-2">DASHBOARD</h2>
            <div class="p-2 mb-6 text-center rounded bg-[#FEECE2] w-60">
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
                    {{-- <form action="{{ route('Accepte', Auth::user()) }}" method="POST" class="btn">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="font-bold uppercase">Rappel Permission</button>
                    </form> --}}
                    {{-- @elseif (Auth::check() && Auth::user()->asked_permission == true)
                    Waiting
                @else --}}





                </div>

            </div>
            {{-- <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="flex items-center mb-1">
                                <div class="text-2xl font-semibold">
                                </div>
                            </div>
                            <div class="text-sm font-bold text-blue-400">Categorie</div>
                        </div>

                    </div>

                </div>
                <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                    <div class="flex justify-between mb-4">
                        <div>
                            <div class="flex items-center mb-1">
                                <div class="text-2xl font-semibold">100</div>
                                <div class="p-1 rounded bg-emerald-500/10 text-emerald-500 text-[12px] font-semibold leading-none ml-2">+30%</div>
                            </div>
                            <div class="text-sm font-bold text-blue-400">Réservation</div>
                        </div>

                    </div>
                </div>
                <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="mb-1 text-2xl font-semibold">100</div>
                            <div class="text-sm font-bold text-blue-400">Evenement</div>
                        </div>

                    </div>
                    <a href="" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
                </div>
            </div> --}}
            {{-- <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-2">
                <div
                    class="relative flex flex-col w-full min-w-0 p-6 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                    <div class="px-0 mb-0 border-0 rounded-t">
                        <div class="flex flex-wrap items-center px-4 py-2">
                            <div class="relative flex-1 flex-grow w-full max-w-full">
                                <h3 class="text-sm font-bold text-blue-400 dark:text-gray-50">Users</h3>
                            </div>
                        </div>
                        <div class="block w-full overflow-x-auto">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Role</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Administrator</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            1</td>

                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            User</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            6</td>

                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Organsateur</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            5</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
            <div class="p-3 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                <div class="flex flex-wrap items-center px-6 py-2">
                    <div class="py-2 text-sm font-bold text-blue-400">Event Reserve</div>
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
                                        Ticket</th>
                                    <th
                                        class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-gray-700 dark:text-gray-100">
                                    <th
                                        class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                        Administrator</th>
                                    <td
                                        class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                        1</td>
                                    <td
                                        class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                        1</td>
                                    <td
                                        class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                        1</td>
                                    <td
                                        class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                        5</td>
                                    <td>
                                        <button
                                            class="p-4 px-4 text-xs text-black align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">Status</button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        </div>
        <!-- End Content -->
    </main>
@endsection
