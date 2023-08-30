<x-master-layout>

    <x-form title="Add Experience" :action="route('resume.experiences.store')" :to-route="route('resume.experiences.index')">
        @include('admin.content.experience.form')
    </x-form>

</x-master-layout>
