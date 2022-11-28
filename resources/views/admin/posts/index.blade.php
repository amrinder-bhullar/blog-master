<x-layout>
    <x-setting heading="Manage posts">
        <!-- component -->
        <section class="antialiased text-gray-600 px-4 w-full">
            <div class="flex flex-col">
                <!-- Table -->
                <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-xl border border-gray-200">
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <tbody class="text-sm divide-y divide-gray-100">
                                    @foreach ($posts as $post)
                                        <tr class="flex justify-between">
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left">
                                                    <a href="/posts/{{ $post->slug }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left font-medium text-green-500 text-end">published
                                                </div>
                                                <a href="/admin/posts/{{ $post->id }}/edit"
                                                    class="text-lg text-center text-blue-600">Edit</a>

                                                <form method="POST" action="/admin/posts/{{ $post->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-600 text-white px-3 py-1">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-setting>
</x-layout>
