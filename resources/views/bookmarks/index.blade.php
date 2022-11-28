<x-layout>
    <section class="px-6 py-8">
        @foreach ($bookmarks as $bookmark)
            <p>{{ $bookmark->posts->id }}</p>
        @endforeach
    </section>
</x-layout>
