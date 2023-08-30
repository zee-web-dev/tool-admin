<x-master-layout>




    <x-datatable title="Add Projects" :link="route('projects.create')">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Order</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($projects))
                @foreach ($projects as $i => $project)
                    <tr>
                        <td></td>
                        <td>{{ ++$i }}</td>
                        <td>
                            <a href="{{ $project->link ?? '' }}">
                                {{ $project->title ?? 'N/A' }}</a>
                        </td>
                        <td>
                            <img src="{{ $project->image ?? '' }}" alt="" height="50">
                        </td>
                        <td>{{ $project->category->title ?? 'N/A' }}</td>
                        <td>{{ $project->description ?? 'N/A' }}</td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                {{ method_field('PATCH') }}
                                <label class="switch switch-primary">
                                    <input type="checkbox" class="switch-input" name="status"
                                        {{ $project->status == 1 ? 'checked' : '' }}
                                        onChange="event.preventDefault(); this.closest('form').submit();">
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                </label>
                            </form>
                        </td>
                        <td>

                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-icon">
                                    <i class="text-primary ti ti-pencil me-2"></i></a>


                                <button class="btn btn-sm btn-icon" type="submit">
                                    <i class="text-danger ti ti-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </x-datatable>

</x-master-layout>
