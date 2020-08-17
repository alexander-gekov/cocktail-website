@extends('layouts.app')

@section('content')
    <div class="relative h-full w-full overflow-y-auto z-20">
        <div style="backdrop-filter: blur(10px)"
             class="bg-gray-900 bg-opacity-75 text-white shadow-lg rounded-lg p-4 m-10">
            <form action="http://localhost:8001/api/drinks" enctype="multipart/form-data" method="post"
                  class="rounded px-40 pt-2 pb-2">
                @csrf
                <h2 class="my-4 text-3xl font-semibold font-display">Add New Drink</h2>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" name="name" type="text" placeholder="Name">
                </div>
                <div class="flex mb-4">

                    <div class="flex flex-col mr-2">
                        <label class="block text-sm font-bold mb-2" for="category">
                            Category
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="category" name="category" type="text" placeholder="Category">
                    </div>
                    <div class="flex flex-col">
                        <label class="block text-sm font-bold mb-2" for="alcoholic">
                            Alcoholic
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="alcoholic" name="alcoholic" type="text" placeholder="Alcoholic">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="glass">
                        Glasss
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="glass" name="glass" type="text" placeholder="Type of Glass">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="glass">
                        Instructions
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="instructions" name="instructions" placeholder="Instructions" style="resize: none"
                        rows="3"></textarea>
                </div>
                <div class="mb-4">
                    <label
                        class="flex items-center px-4 py-2 bg-white text-orange-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-orange-700 hover:text-white">
                        <svg class="w-8 h-8 mr-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path
                                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                        </svg>
                        <span class="mt-2 text-base leading-normal">Select an image</span>
                        <input type='file' name="image" class="hidden"/>
                    </label>
                </div>
                <div class="flex mb-4">
                    <div class="flex flex-col mr-2">
                        <label class="block text-sm font-bold mb-2" for="ingredient1">
                            Ingredient1
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="ingredient1" name="ingredient1" type="text" placeholder="Ingredient 1">
                    </div>
                    <div class="flex-flex-col mr-2">
                        <label class="block text-sm font-bold mb-2" for="ingredient2">
                            Ingredient2
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="ingredient2" name="ingredient2" type="text" placeholder="Ingredient 2">
                    </div>
                    <div class="flex flex-col">
                        <label class="block text-sm font-bold mb-2" for="ingredient3">
                            Ingredient3
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="ingredient3" name="ingredient3" type="text" placeholder="Ingredient 3">
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="flex flex-col mr-2">
                        <label class="block text-sm font-bold mb-2" for="measure1">
                            Measure 1
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="measure1" name="measure1" type="text" placeholder="Measure 1">
                    </div>
                    <div class="flex-flex-col mr-2">
                        <label class="block text-sm font-bold mb-2" for="measure2">
                            Measure 2
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="measure2" name="measure2" type="text" placeholder="Measure 2">
                    </div>
                    <div class="flex flex-col">
                        <label class="block text-sm font-bold mb-2" for="measure3">
                            Measure 3
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="measure3" name="measure3" type="text" placeholder="Measure 3">
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
