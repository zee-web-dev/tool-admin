<x-master-layout>

    <x-form title="Add Service" :action="route('services.update', $service->id)" :to-route="route('services.index')" method="patch">
        @include('admin.content.services.form')
    </x-form>

</x-master-layout>
