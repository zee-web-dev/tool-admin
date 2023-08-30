<x-master-layout>

    <x-form title="Update Service" :action="route('projects.update', $project->id)" :to-route="route('projects.index')" method="patch">
        @include('admin.content.projects.form')
    </x-form>

</x-master-layout>
