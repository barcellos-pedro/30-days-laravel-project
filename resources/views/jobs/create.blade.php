<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" required/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" required/>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" required/>
        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" required/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" required/>
        <x-forms.button class="block mx-auto">Post</x-forms.button>
    </x-forms.form>
</x-layout>
