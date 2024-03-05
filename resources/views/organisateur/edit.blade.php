@extends('layouts.admin')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        @include('layouts.navbaradmin')
        <!-- end navbar -->


        <div class="p-6">

            <h2 class="  text-[#f84525] text-3xl font-bold pb-2">Creation Evenments</h2>


            <div
                class="relative flex flex-col w-full min-w-0 p-6 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                <div class="px-0 mb-0 border-0 rounded-t">
                    <div class="flex flex-wrap items-center px-4 py-2">
                        <div class="relative flex-1 flex-grow w-full max-w-full">
                            <h3 class="pb-5 text-sm font-bold text-blue-400 dark:text-gray-50">Cration Evenments </h3>
                            <form class="font-[sans-serif] text-[#333] max-w-4xl mx-auto px-6 my-6 bg-blue-400 p-7 rounded"
                                action="{{ route('event.update',$event) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="grid gap-10 sm:grid-cols-2">
                                    <div class="relative flex items-center">
                                        <label class="text-[13px] absolute top-[-20px] left-0 font-semibold">Title</label>
                                        <input type="text" placeholder="Enter first Title"
                                            class="w-full px-2 pt-2 pb-2 text-sm bg-white border-b-2 outline-none"
                                            name="title" value="{{ $event->title }}" />
                                        @error('title')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="relative flex items-center">
                                        <label
                                            class="text-[13px] absolute top-[-20px] left-0 font-semibold">Description</label>
                                        <textarea name="description" id="" class="w-full p-2 text-sm bg-white border-b-2 outline-none "
                                            placeholder="Enter description" >{{ $event->description }}</textarea>
                                        @error('description')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="relative flex items-center">
                                        <label class="text-[13px] absolute top-[-20px] left-0 font-semibold">Date
                                            Evenment</label>
                                        <input type="date" name="date" value="{{ $event->date }}"
                                            class="px-2 pt-2 pb-2 bg-white w-full text-sm border-b-2 border-gray-100 focus:border-[#333] outline-none" />
                                        @error('date')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="relative flex items-center">
                                        <label
                                            class="text-[13px] absolute top-[-20px] left-0 font-semibold">Location</label>
                                        <input type="text" placeholder="Enter Location" name="location"
                                            value="{{ $event->location }}"
                                            class="px-2 pt-2 pb-2 bg-white w-full text-sm border-b-2 border-gray-100 focus:border-[#333] outline-none" />
                                        @error('location')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="relative flex items-center hidden">
                                        <label class="text-[13px] absolute top-[-20px] left-0 font-semibold">Images</label>
                                        <input type="text" name="image" value="{{ $event->image }}"
                                            class="px-2 pt-2 pb-2 bg-white w-full text-sm border-b-2 border-gray-100 focus:border-[#333] outline-none" />
                                        @error('image')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="relative flex items-center">
                                        <label class="text-[13px] absolute top-[-20px] left-0 font-semibold">Images</label>
                                        <input type="file" name="image"
                                            class="px-2 pt-2 pb-2 bg-white w-full text-sm border-b-2 border-gray-100 focus:border-[#333] outline-none" />
                                        @error('image')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="relative flex items-center">
                                        <label class="text-[13px] absolute top-[-20px] left-0 font-semibold">Nombre De
                                            place</label>
                                        <input type="text" placeholder="Enter nombre de place " name="number_places"
                                            value="{{ $event->number_places }}"
                                            class="px-2 pt-2 pb-2 bg-white w-full text-sm border-b-2 border-gray-100 focus:border-[#333] outline-none" />
                                        @error('number_places')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="relative flex items-center">
                                        <label class="text-[13px] absolute top-[-20px] left-0 font-semibold">Reservation</label>
                                        <input type="radio" name="status" value="manuel" class="ms-2 me-2" {{ $event->status == 'manuel' ? 'checked' : '' }}/> <span class="font-bold">Manuel</span>
                                        <input type="radio" name="status" value="auto" class="ms-2 me-2" {{ $event->status == 'auto' ? 'checked' : '' }}/> <span class="font-bold">Auto</span>
                                        @error('status')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="relative flex items-center">
                                        <label class="text-[13px] absolute top-[-20px] left-0 font-semibold">First
                                            Name</label>
                                        <select name="categories_id"
                                            class="px-2 pt-2 pb-2 bg-white w-full text-sm border-b-2 border-gray-100 focus:border-[#333] outline-none">
                                            <option value="" selected disabled>Select Categorie</option>
                                            @foreach ($categories as $categorie)

                                                <option value="{{ $categorie->id }}" {{ $event->categorie->id == $categorie->id ? 'selected' : '' }} class="font-bold ">
                                                    {{ $categorie->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('categories_id')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit"
                                    class="mt-10 px-2 py-2.5 w-full rounded text-sm font-semibold bg-[#404bc5] text-white hover:bg-[#222]">Submit</button>
                            </form>

                        </div>

                    </div>
                    @if (session('success'))
                        <div class="px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded w-80 "
                            role="alert">
                            <strong class="font-bold">Succès!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>

                        </div>
                    @endif
                    @if (session('Error'))
                        <div class="px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded w-80 " role="alert">
                            <strong class="font-bold">Error date creer apres date now !</strong>
                            <span class="block sm:inline">{{ session('Error') }}</span>

                        </div>
                    @endif

                </div>
            </div>

        </div>

        </div>
        <!-- End Content -->
    </main>
@endsection
