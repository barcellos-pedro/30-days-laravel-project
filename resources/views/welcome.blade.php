<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h2 class="text-5xl font-bold text-center">
                <label for="query">Let's Find You a Great Job</label>
            </h2>
            <form class="mt-6">
                <input type="text" id="query" name="query"
                       placeholder="I'm looking for..."
                       class="w-full max-w-2xl bg-white/5 p-5 rounded-xl border border-white/10 placeholder-gray-500">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="mt-6 grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 grid grid-cols-3 md:grid-cols-5 lg:grid-cols-10 gap-3">
                @for($i = 0; $i < 20; $i++)
                    <x-tag>Tag</x-tag>
                @endfor
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>
