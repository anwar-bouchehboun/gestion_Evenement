@extends('layouts.admin')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        @include('layouts.navbaradmin')
        <!-- end navbar -->

      <!-- Content -->
        <div class="p-6">

            <h2 class="  text-[#f84525] text-3xl font-bold pb-2">PERMISSION USERS</h2>


            <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-2">
                <div class="relative flex flex-col w-full min-w-0 px-6 py-4 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                    <div class="flex flex-wrap items-center px-6 py-3">
                        <div class="py-2 text-sm font-bold text-blue-400">Organisateur</div>
                        <div class="block w-full overflow-x-auto">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                  <tr>
                                    <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">name_Event</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">Categorie</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">Date</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @if (count($refuserUsers) > 0)
                                    @foreach ($refuserUsers as $user )
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">{{ $user->name }}</th>
                                        <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">{{ $user->email }}</td>
                                        <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">{{ $user->updated_at->format('d/m/Y') }}
                                        </td>
                                  <td>
                                    <form action="{{ route('dashbord.refuser',$user) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                        <button type="submit" class="p-4 px-4 text-xs text-red-600 align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">Refuser Permission</button>

                                    </form>
                                    </td>
                                      </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-sm text-center text-gray-500">
                                            No Permesson Refusser available.
                                        </td>
                                    </tr>
                                @endif



                                </tbody>
                              </table>
                          </div>
                    </div>
                  </div>
                        <div class="p-3 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                    <div class="flex flex-wrap items-center px-6 py-2">
                        <div class="py-2 text-sm font-bold text-blue-400">Permission Organisateur</div>
                        <div class="block w-full overflow-x-auto">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                  <tr>
                                    <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">name_Event</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">Categorie</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">Date</th>
                                    <th class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @if (count($Rappelluser) > 0)
                                    @foreach ($Rappelluser as $user )
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">{{ $user->name }}</th>
                                        <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">{{ $user->email }}</td>
                                        <td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">{{ $user->updated_at->format('d/m/Y') }}
                                        </td>
                                  <td>
                                    <form action="{{ route('dashbord.donpermission',$user) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                        <button type="submit" class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap text-cyan-600">Accepte Permission</button>

                                    </form>
                                    </td>
                                      </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-sm text-center text-gray-500">
                                            No Permesson Accepte available.
                                        </td>
                                    </tr>
                                @endif


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



