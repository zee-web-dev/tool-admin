<x-master-layout>

    <x-form title="Add Service" :to-route="route('services.edit', $service->id)" :method="@method('PATCH')">
        @include('admin.content.services.form')
    </x-form>

</x-master-layout>
