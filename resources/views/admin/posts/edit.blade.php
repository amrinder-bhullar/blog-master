<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form action="/admin/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <!-- component -->
            <div
                class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
                <x-form.input name="title" placeholder="Title of the post" value="{{ $post->title }}" />
                <x-form.input name="slug" placeholder="Slug of the post" :value="$post->slug" />
                <div class="flex justify-between">
                    <div>
                        <x-form.input name="thumbnail" placeholder="" type="file" :value="$post->thumbnail" />
                    </div>
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl"
                        width="150">
                </div>
                <x-form.textarea name="excerpt" class="h-20">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
                <x-form.textarea name="body" class="h-60">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>


                <div class="mb-4">
                    <label for="category_id" class="block mb-2 font-bold text-xs text-gray-700">Select a
                        category</label>
                    <select name="category_id" id="category_id">

                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                </div>

                <x-form.error name="category_id" />

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs mt-1 mb-1">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <!-- buttons -->
                <div class="flex justify-end mt-4 border-t border-gray-200 pt-6 space-x-4">
                    <a href="/"
                        class="bg-blue-500 text-white uppercase text-xs font-semibold py-2 px-10 rounded-2xl hover:bg-blue-600">
                        Cancel</a>
                    <button type="submit"
                        class="bg-blue-500 text-white uppercase text-xs font-semibold py-2 px-10 rounded-2xl hover:bg-blue-600">
                        Publish</button>
                </div>
            </div>
        </form>
    </x-setting>
</x-layout>
