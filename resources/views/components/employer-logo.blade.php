@props(['employer', 'width' => 90])

<img width="{{ $width }}" src="{{ asset($employer->logo) }}" alt="{{ $employer->name }} logo" class="rounded-xl">
