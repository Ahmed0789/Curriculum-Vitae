@if (session()->has('success'))
    <div x-data="{show: true}"
         x-init="setTimeout(()=> show = false, 6000 )"
         x-show="show"
         class="fixed top-20 right-6 bg-blue-500 text-white text-sm py-2 px-2 rounded-xl">
        <p> {{ session('success') }} </p>
    </div>
@endif
