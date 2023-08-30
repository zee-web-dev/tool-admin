<x-master-layout>

    <x-form title="Update Experience" :action="route('resume.experiences.update', $experience->id)" :to-route="route('resume.experiences.edit', $experience->id)" method="patch">
        @include('admin.content.experience.form')
    </x-form>

</x-master-layout>
