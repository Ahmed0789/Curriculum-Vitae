{{--<x-layout>--}}
{{--    <div class="toolbar" role="banner">--}}
{{--        <img width="70" alt="Interactive CV LOGO" src="https://www.visualcv.com/assets/images/vcv_blue.png"/>--}}
{{--        <span>--}}
{{--            <h1>Welcome To My Interactive CV</h1>--}}
{{--        </span>--}}
{{--        <div class="spacer"></div>--}}
{{--    </div>--}}
{{--    @foreach ($posts as $post)--}}
{{--        <article>--}}
{{--            <h2>--}}
{{--                <a href="/posts/{{ $post->slug }}">--}}
{{--                    {!! $post->title !!}--}}
{{--                </a>--}}
{{--            </h2>--}}
{{--            <p>--}}
{{--                By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a--}}
{{--                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>--}}
{{--            </p>--}}
{{--            <div>--}}
{{--                {{ $post->excerpt }}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
{{--</x-layout>--}}
<x-layout>
    @include('posts._header')
    @auth
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts"/>
            {{$posts->links()}}
        @else
            <p class="text-center"><strong>No Post Available.</strong></p>
        @endif
        @include('posts._footer')
    </main>
    @endauth
</x-layout>

