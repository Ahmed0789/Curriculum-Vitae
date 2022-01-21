<header class="max-w-xl mx-auto mt-10 text-center">
    <h1 class="text-4xl">
        Welcome <span class="text-blue-500">To The Interactive</span> CV<span class="text-blue-500">s</span><span class="text-blue-500 text-5xl"> Portal </span>
    </h1>
    @auth
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-6">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">

            <x-category-dropdown/>

        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">

                    @endif
                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{request('search')}}">
            </form>
        </div>
    </div>
    @else
        <div class="text-xl px-5 py-6 border-2 border-gray-100 mt-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <h1> Please
                <a href="/register" class="text-blue-400">Register</a> or <a href="/login" class="text-blue-400">Login</a> to view All CVs</h1>

        </div>
        @include('components.search.search')
    @endauth
</header>
