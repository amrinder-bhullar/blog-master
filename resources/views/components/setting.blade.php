@props(['heading'])
<section class="px-6 py-8">
    <h1 class="heading text-center font-bold text-2xl m-5 text-gray-800 border-b mb-6 pb-4">{{ $heading }}</h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <ul>
                <li><a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Posts</a>
                <li><a href="/admin/posts/create"
                        class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a></li>
                </li>
                {{-- <li><a href="/admin/dashboard"
                        class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">Dashboard</a></li> --}}
            </ul>
        </aside>
        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</section>
