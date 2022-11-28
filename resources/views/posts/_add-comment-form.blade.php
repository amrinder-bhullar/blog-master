@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf
            <header class="flex items-center space-x-3">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="40" height="40"
                    class="rounded-full">
                <h2>Want to participate?</h2>
            </header>
            <div class="mt-5">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="3"
                    placeholder="Quick, think something to say!" required></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-4 border-t border-gray-200 pt-6">
                <button type="submit"
                    class="bg-blue-500 text-white uppercase text-xs font-semibold py-2 px-10 rounded-2xl hover:bg-blue-600">Post</button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="underline hover:text-blue-500">Register</a> or <a href="/login"
            class="underline hover:text-blue-500">log in</a> to leave a
        comment on this post
    </p>
@endauth
