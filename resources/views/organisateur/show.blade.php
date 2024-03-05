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
                                <div class="grid gap-4 mt-4 md:grid-cols">
                                    <div class="flex w-full gap-3 px-12 py-8 text-white rounded ">
                                      @foreach ($events as $event )
                                      <div class="" style="width:200%">
                                        <img src="../storage/{{$event->image}}"
                                            style="width:200%; height:100%;" class="w-full" alt="">
                                    </div>
                                    <div class="py-10">
                                        <h1 class="text-3xl font-extrabold text-neutral-950">{{$event->title}}</h1>
                                            <span class="text-[#B5C0D0] ">{{$event->location}}</span>
                                        <div class="my-6">

                                            <p class="font-bold text-black">{{$event->description}}</p>
                                        </div>
                                        <h2 class="text-2xl font-medium text-cyan-700">{{$event->categorie->name}}</h2>
                                        <h3 class="font-bold text-orange-600">Nomber de reservation : <span
                                                class="font-semibold text-emerald-400">32</span> </h3>
                                                <h5 class="font-medium text-cyan-700">Type Reserve : <span class="text-black ">{{$event->status}}</span> </h5>
                                    </div>
                                      @endforeach

                                    </div>


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
