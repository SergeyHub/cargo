@extends('layout_reddit.app')
@section('content')
    <h4 class="text-center" style="margin-top:155px"></h4>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        {{-- @include('includes.navbar') --}}
        <div class="text-lg font-semibold text-gray-900 dark:text-white">
            Get Json Data
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                            From
                        </div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 text-md dark:text-gray-400 text-sm">
                            <a href="https://jsonplaceholder.typicode.com/posts" class="underline" target="_blank"
                               style="color: #144f6a">
                                jsonplaceholder.typicode.com/posts
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                            From
                        </div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 text-md dark:text-gray-400 text-sm">
                            <a href="https://www.reddit.com/r/MechanicalKeyboards.json" class="underline" target="_blank"
                               style="color: #144f6a">
                                www.reddit.com/r/MechanicalKeyboards.json
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                            From
                        </div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 text-md dark:text-gray-400 text-sm">
                            <a href="https://api.cargo.tech/v1/cargos" class="underline" target="_blank"
                               style="color: #144f6a">
                                api.cargo.tech/v1/cargos
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                            From
                        </div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 text-md dark:text-gray-400 text-sm">
                            <a href="http://notesin.net/json/fruit.json" class="underline" target="_blank"
                               style="color: #165672">
                                notesin.net/json/fruit.json
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">


            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>

@endsection
