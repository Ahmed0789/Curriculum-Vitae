<x-layout>
    <x-setting heading="Publish Your CV">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="thumbnail" type="file"/>
            <x-form.textarea name="excerpt"/>
            <x-form.textarea name="body" />
            <x-form.textarea name="body" />
            <x-form.field>
                <x-form.label name="category"/>
                <select name="category_id" id="category_id">

                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{$category->id }}"
                            {{old('category_id') == $category->id ? 'selected' : ''}}
                        >{{ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category"/>
            </x-form.field>
            <div class="mb-3 mt-3">
                <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Publish
                </button>
            </div>
        </form>

    </x-setting>
</x-layout>
