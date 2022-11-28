<div x-data="{ show: false }" class="w-full md:text-left relative" @click.away="show = false">
    <div @click="show = !show" class="relative flex lg:inline-flex items-center rounded-xl w-full md:justify-between">
        {{-- trigger --}}
        {{ $trigger }}
    </div>
    {{-- dropdown links --}}
    <div x-show="show"
        class="absolute items-center text-left mt-2 bg-gray-100 rounded-xl w-full z-10 overflow-auto max-h-52">
        {{ $slot }}
    </div>
</div>
