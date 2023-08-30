<x-master-layout>

    <x-form title="Update Education" :action="route('resume.education.update', $education->id)" :to-route="route('resume.education.edit', $education->id)" method="patch">
        @include('admin.content.education.form')
    </x-form>

</x-master-layout>
