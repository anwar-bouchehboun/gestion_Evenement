@extends('layouts.admin')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        @include('layouts.navbaradmin')
        <!-- end navbar -->


        <div class="p-6">

            <h2 class="  text-[#f84525] text-3xl font-bold pb-2">Creation Evenments</h2>
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






                </div>

            </div>

                <div
                    class="relative flex flex-col w-full min-w-0 p-6 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                    <div class="px-0 mb-0 border-0 rounded-t">
                        <div class="flex flex-wrap items-center px-4 py-2">
                            <div class="relative flex-1 flex-grow w-full max-w-full">
                                <h3 class="text-sm font-bold text-blue-400 dark:text-gray-50">Users</h3>
                            </div>
                        </div>
                       
                    </div>
                </div>
            <div class="p-3 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">


            </div>
        </div>

        </div>
        <!-- End Content -->
    </main>
@endsection
