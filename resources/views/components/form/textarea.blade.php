@props(['name'])
<textarea {{ $attributes(['class' => 'description bg-gray-100 sec p-3 border border-gray-300  mb-4 outline-none']) }}
    placeholder="Add {{ $name }} of this post here" name="{{ $name }}"> {{ $slot ?? old($name) }}</textarea>

<x-form.error name={{ $name }} />
