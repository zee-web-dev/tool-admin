<x-master-layout>

    <x-form title="Add Education" :action="route('resume.education.store')" :to-route="route('resume.education.index')">
        @include('admin.content.education.form')
    </x-form>

</x-master-layout>
