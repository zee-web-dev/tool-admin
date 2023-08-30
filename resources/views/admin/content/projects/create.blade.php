<x-master-layout>

    <x-form title="Add Projects" :action="route('projects.store')" :to-route="route('projects.index')">
        @include('admin.content.projects.form')
    </x-form>

</x-master-layout>
