<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h2 class="text-5xl font-bold text-center">
                <label for="q">Let's Find You a Great Job</label>
            </h2>
            <x-forms.form action="/search" class="mt-6">
                <x-forms.input
                    class="w-full max-w-2xl bg-white/5 p-5 rounded-xl border border-white/10 placeholder-gray-500"
                    placeholder="SR Sales Agent..."
                    name="q"
                    :label='false'
                    required/>
            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="mt-6 grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 grid grid-cols-3 md:grid-cols-5 lg:grid-cols-10 gap-3">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
