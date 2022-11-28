@props(['name', 'placeholder', 'type' => 'text'])
<input {{ $attributes(['class' => 'title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none']) }}
    spellcheck="false" placeholder="{{ $placeholder }}" type="{{ $type }}" name="{{ $name }}"
    {{ $attributes(['value' => old($name)]) }}>

@error($name)
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
@enderror
