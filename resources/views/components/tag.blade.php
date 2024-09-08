@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/10 text-center rounded-xl font-bold hover:bg-white/25 transition-colors duration-300";

    if ($size === 'base') {
        $classes .= ' px-5 py-2 text text-sm';
    }

    else if ($size === 'small') {
        $classes .= ' px-3 py-1 text text-[.725rem]';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" {{ $attributes(['class' => $classes]) }}>
    {{ $tag->name }}
</a>
