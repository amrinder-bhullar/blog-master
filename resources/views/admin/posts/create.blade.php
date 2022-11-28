<x-layout>
    <x-setting heading="Publish New Post">
        <form action="/admin/posts" method="post" enctype="multipart/form-data">
            @csrf
            <!-- component -->
            <div
                class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
                <x-form.input name="title" placeholder="Title of the post" />
                <x-form.input name="slug" placeholder="Slug of the post" />
                <x-form.input name="thumbnail" placeholder="" type="file" />
                <x-form.textarea name="excerpt" class="h-20" />
                <x-form.textarea name="body" class="h-60" />
                <x-form.categories name="category_id" />

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
