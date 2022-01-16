@auth
    <x-panel>
        <form method="POST" action="/posts/{{$post->slug}}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{auth()->id()}}"
                     alt="" width="60" height="60"
                     class="rounded-full">
                <h2 class="ml-5">Want to participate?</h2>
            </header>

            <div class="mt-6">
                            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring p-2" rows="5"
                                      placeholder="Write your comment here..."
                                      required></textarea>
                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <button type="submit"
                        class="bg-blue-500 text-white text-sm uppercase font-semibold py-2 px-10 rounded-2xl
                                    hover:bg-blue-600">
                    Post
                </button>
            </div>

        </form>
    </x-panel>
@else
    <x-panel>
        <p class="font-semibold text-sm">
            <a href="/register"
               class="hover:underline hover:bg-blue-500 hover:text-white p-2 rounded-xl">Register</a>
            or
            <a href="/login"
               class="hover:underline hover:bg-blue-500 hover:text-white p-2 rounded-xl">Log in</a>
            to
            leave a comment.
        </p>
    </x-panel>
@endauth
