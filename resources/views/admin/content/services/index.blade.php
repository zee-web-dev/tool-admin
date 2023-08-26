<x-master-layout>


    <x-datatable title="Add Services" :link="route('services.create')">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $i => $service)
                <tr>
                    <td></td>
                    <td>{{ ++$i }}</td>
                    <td>{{ $service->title ?? 'N/A' }}</td>
                    <td>
                        <img src="{{ $service->image ?? '' }}" alt="" height="50">
                    </td>
                    <td>{{ $service->description ?? 'N/A' }}</td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            {{ method_field('PATCH') }}
                            <label class="switch switch-primary">
                                <input type="checkbox" class="switch-input" name="status"
                                    {{ $service->status == 1 ? 'checked' : '' }}
                                    onChange="event.preventDefault();
                            this.closest('form').submit();">
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                            </label>
                        </form>
                    </td>
                    <td>

                        <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-icon">
                                <i class="text-primary ti ti-pencil me-2"></i></a>


                            <button class="btn btn-sm btn-icon" type="submit">
                                <i class="text-danger ti ti-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-datatable>

</x-master-layout>
