@props(['active'=> false])

@php
    $classes = "block hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white px-3 py-2";
    if($active) $classes .= " bg-blue-500 text-white";
@endphp

<a {{$attributes(['class'=> $classes])}}>{{$slot}}</a>