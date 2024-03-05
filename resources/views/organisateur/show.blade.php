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
                                    <div class="overflow-hidden">
                                        <img src="../storage/{{ $event->image }}" alt="{{ $event->title }}" class="object-cover w-full h-64">
                                        <div class="p-6">
                                            <h2 class="text-xl font-bold text-gray-800">{{ $event->title }}</h2>
                                            <p class="text-sm text-[#387ADF]">{{ $event->location }}</p>
                                            <p class="mt-2 text-gray-700">{{ $event->description }}</p>
                                            <p class="mt-2 text-[#387ADF]">Catégorie : {{ $event->categorie->name }}</p>
                                            <div class="flex items-center justify-between mt-4">
                                                <div class="text-sm text-gray-600">Nombre de réservations : <span class="text-[#387ADF]">{{ $event->number_places }}</span> </div>
                                                 <div>
                                                    <h3  class="text-blue-500 hover:text-blue-700">{!! $countReservationsmanul !!} <span class="text-black"> Reserve</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                    @foreach ($events as $event)
                                        @if ($event->status == 'manuel')
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
                                                                    <form  action="{{ route('accepte.reservation',$reservation) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <button type="submit"
                                                                            onclick="return confirm('Êtes-vous sûr de vouloir Accpte cette Reservation ?')"
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
                                        @else
                                            <div class="p-6 ">

                                                <div
                                                    class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                                                    <div class="flex justify-between mb-6">
                                                        <div>
                                                            <div class="mb-1 text-2xl font-semibold">{!! $countReservationsauto !!}
                                                            </div>
                                                            <div class="text-sm font-bold text-blue-400">Reseve</div>
                                                        </div>

                                                    </div>
                                                </div>
                                        @endif
                                    @endforeach

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
