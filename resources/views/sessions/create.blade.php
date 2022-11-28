<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <form action="/login" method="POST" class="bg-grey-lighter min-h-screen flex flex-col">
                @csrf
                <!-- component -->
                <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                    <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                        <h1 class="mb-8 text-3xl text-center">Login</h1>

                        <x-form.input name="email" placeholder="Email" type="email" class="w-full rounded p-3"
                            autocomelete="username" />
                        <x-form.input name="password" placeholder="Password" type="password"
                            autocomplete="current-password" class="w-full rounded p-3" />

                        <button type="submit"
                            class="w-full text-center py-3 rounded bg-gray-100 text-black hover:bg-gray-200 focus:outline-none my-1">Login</button>

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500 text-xs mt-1 mb-1">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="text-grey-dark mt-6">
                        Don't have an account?
                        <a class="no-underline border-b border-blue text-blue" href="/register">
                            create account
                        </a>.
                    </div>
                </div>
            </form>
        </main>
    </section>
</x-layout>
