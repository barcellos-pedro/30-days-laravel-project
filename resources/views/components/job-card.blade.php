@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">
        {{ $job->employer->name }}
    </div>

    <div class="py-8">
        <h3 class="font-bold text-xl group-hover:text-blue-600 transition-colors duration-300">
            {{ $job->title }}
        </h3>
        <p class="text-sm mt-4">
            {{ $job->schedule }} - {{ $job->salary }}
        </p>
    </div>

    <div class="flex gap-3 justify-between items-center mt-auto">
        <div class="space-x-3">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
        <x-employer-logo width="42"/>
    </div>
</x-panel>
