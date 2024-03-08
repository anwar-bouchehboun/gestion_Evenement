@extends('layouts.admin')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        @include('layouts.navbaradmin')
        <!-- end navbar -->

        <!-- Content -->
        <div class="p-6">

            <h2 class="  text-[#f84525] text-3xl font-bold pb-2">DASHBOARD</h2>

            <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="flex items-center mb-1">
                                <div class="text-2xl font-semibold">{!! $categorie !!}</div>
                            </div>
                            <div class="text-sm font-bold text-blue-400">Categorie</div>
                        </div>
                        {{-- <div class="dropdown">
                            <button type="button" class="text-gray-400 dropdown-toggle hover:text-gray-600"><i class="ri-more-fill"></i></button>
                            <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>

                    {{-- <a href="/gebruikers" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a> --}}
                </div>
                <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                    <div class="flex justify-between mb-4">
                        <div>
                            <div class="flex items-center mb-1">
                                <div class="text-2xl font-semibold">{!! $reservation !!}</div>
                                {{-- <div class="p-1 rounded bg-emerald-500/10 text-emerald-500 text-[12px] font-semibold leading-none ml-2">+30%</div> --}}
                            </div>
                            <div class="text-sm font-bold text-blue-400">Réservation</div>
                        </div>

                    </div>
                    {{-- <a href="/dierenartsen" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a> --}}
                </div>
                <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="mb-1 text-2xl font-semibold">{!! $Allevents !!}</div>
                            <div class="text-sm font-bold text-blue-400">Evenement</div>
                        </div>

                    </div>
                    {{-- <a href="" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a> --}}
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-2">
                <div
                    class="relative flex flex-col w-full min-w-0 p-6 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                    <div class="px-0 mb-0 border-0 rounded-t">
                        <div class="flex flex-wrap items-center px-4 py-2">
                            <div class="relative flex-1 flex-grow w-full max-w-full">
                                <h3 class="text-sm font-bold text-blue-400 dark:text-gray-50">Compte Users</h3>
                            </div>
                        </div>
                        <div class="block w-full overflow-x-auto">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            User</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Email</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Role</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Action</th>
                                    </tr>
                                    {{-- foreach ($user->roles as $role) {
                                        echo $role->name . '<br>'; // Afficher le nom du rôle pour chaque utilisateur
                                    } --}}
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="text-gray-700 dark:text-gray-100">
                                            <th
                                                class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {!! $user->name !!}</th>
                                            <th
                                                class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {!! $user->email !!}</th>
                                            <th
                                                class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                @if ($user->role == 2)
                                                    Organisateur
                                                @elseif($user->role == 3)
                                                    Client
                                                @endif


                                            </th>

                                            <td class="flex">
                                                @if ($user->status == 1)
                                                    <form action="{{ route('refuser.compte', $user) }} " method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit"
                                                            class="p-4 px-4 text-xs text-red-600 align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">Desactive</button>

                                                    </form>
                                                @else
                                                    <form action="{{ route('accepte.compte', $user) }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit"
                                                            class="p-4 px-4 text-xs text-blue-600 align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">Active</button>

                                                    </form>
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                    <div class="flex flex-wrap items-center px-6 py-2">
                        <div class="py-2 text-sm font-bold text-blue-400">Event</div>
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
                                            Date</th>
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
                                                {{ $event->title }} </th>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->categorie->name }}</td>
                                            <td
                                                class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                                {{ $event->date }}</td>
                                            <td>
                                                <form action="{{ route('dashbord.event', $event) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="p-4 px-4 text-xs text-black text-teal-500 align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">Accepet
                                                        Event</button>
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
        <!-- End Content -->
    </main>
@endsection
