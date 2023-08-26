<x-master-layout>

    <x-form title="Add Service" :action="route('services.store')" :to-route="route('services.index')">
        @include('admin.content.services.form')
    </x-form>

</x-master-layout>
