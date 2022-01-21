{{--<!DOCTYPE html>--}}
{{--<title>Code With Ahmed</title>--}}
{{--<link rel="stylesheet" href="/app.css">--}}


{{--<body>--}}
{{--{{ $slot }}--}}
{{--<svg id="clouds" xmlns="http://www.w3.org/2000/svg" width="2611.084" height="485.677"--}}
{{--     viewBox="0 0 2611.084 485.677">--}}
{{--    <path id="Path_39" data-name="Path 39"--}}
{{--          d="M2379.709,863.793c10-93-77-171-168-149-52-114-225-105-264,15-75,3-140,59-152,133-30,2.83-66.725,9.829-93.5,26.25-26.771-16.421-63.5-23.42-93.5-26.25-12-74-77-130-152-133-39-120-212-129-264-15-54.084-13.075-106.753,9.173-138.488,48.9-31.734-39.726-84.4-61.974-138.487-48.9-52-114-225-105-264,15a162.027,162.027,0,0,0-103.147,43.044c-30.633-45.365-87.1-72.091-145.206-58.044-52-114-225-105-264,15-75,3-140,59-152,133-53,5-127,23-130,83-2,42,35,72,70,86,49,20,106,18,157,5a165.625,165.625,0,0,0,120,0c47,94,178,113,251,33,61.112,8.015,113.854-5.72,150.492-29.764a165.62,165.62,0,0,0,110.861-3.236c47,94,178,113,251,33,31.385,4.116,60.563,2.495,86.487-3.311,25.924,5.806,55.1,7.427,86.488,3.311,73,80,204,61,251-33a165.625,165.625,0,0,0,120,0c51,13,108,15,157-5a147.188,147.188,0,0,0,33.5-18.694,147.217,147.217,0,0,0,33.5,18.694c49,20,106,18,157,5a165.625,165.625,0,0,0,120,0c47,94,178,113,251,33C2446.709,1093.793,2554.709,922.793,2379.709,863.793Z"--}}
{{--          transform="translate(142.69 -634.312)" fill="#eee" />--}}
{{--</svg>--}}
{{--</body>--}}
    <!doctype html>

<title>Code With Ahmed</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>
<body style="font-family: Open Sans, sans-serif" class="bg-gradient-to-r from-blue-100 to-zinc-800 hover:from-yellow-500 hover:to-pink-400 ...">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="https://www.visualcv.com/assets/images/vcv_blue.png" alt="Visual CV LOGO" width="165"
                     height="25">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold uppercase">Welcome, {{auth()->user()->name}}!</button>
                    </x-slot>

                    @admin
                        <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">
                            All Posts
                        </x-dropdown-item>
                    @endadmin
                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">
                            New Post
                        </x-dropdown-item>

                    <x-dropdown-item href="#" x-data="{}"
                                     @click.prevent="document.querySelector('#logout-form').submit()">Log Out
                    </x-dropdown-item>
                    <form id="logout-form" method="POST" action="/logout"
                          class="hidden">
                        @csrf
                    </form>
                </x-dropdown>
            @else
                <a href="/register" class="text-xs font-bold uppercase hover:bg-blue-500 hover:text-white py-3 px-2">Register</a>
                <a href="login" class="ml-4 text-xs font-bold uppercase hover:bg-blue-500 hover:text-white py-3 px-2">Login</a>
            @endauth
        </div>
    </nav>
    {{$slot}}
</section>
<x-flash/>
</body>

