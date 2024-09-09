<x-layout>
    <section>
        <x-page-heading>Results</x-page-heading>

        @if(count($jobs))
            <div class="space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        @else
            <p class="text-center">
                No results found for "{{ request()->get('q') }}"
            </p>
        @endif
    </section>
</x-layout>
