<div class="max-w-xl mx-auto mt-20 text-center border-2 border-gray-100 h-80
  transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-6">
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2 w-80 item-center">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">

                @endif
                <input type="text" name="search" placeholder="Find People..."
                       class="bg-transparent  placeholder-blue-300 font-semibold text-sm py-2 px-12"
                       value="{{request('search')}}">
            </form>
        </div>
    </div>
</div>
