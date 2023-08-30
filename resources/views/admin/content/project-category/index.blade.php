<x-master-layout>


    @if (Route::is('project-category.edit'))
        <x-form title="Update Categories" :action="route('project-category.store')">
            @include('admin.content.project-category.form')
        </x-form>
    @else
        <x-form title="Add Categories" :action="route('project-category.store')">
            @include('admin.content.project-category.form')
        </x-form>

        <x-datatable title="Categories">
            <thead>
                <tr>
                    <th></th>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($categories))
                    @foreach ($categories as $i => $category)
                        <tr>
                            <td></td>
                            <td>{{ ++$i }}</td>
                            <td>
                                {{ $category->title ?? 'N/A' }}
                            </td>
                            <td>{{ $category->description ?? 'N/A' }}</td>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    {{ method_field('PATCH') }}
                                    <label class="switch switch-primary">
                                        <input type="checkbox" class="switch-input" name="status"
                                            {{ $category->status == 1 ? 'checked' : '' }}
                                            onChange="event.preventDefault(); this.closest('form').submit();">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                    </label>
                                </form>
                            </td>
                            <td>

                                <form action="{{ route('project-category.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('project-category.edit', $category->id) }}"
                                        class="btn btn-sm btn-icon">
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

    @endif

</x-master-layout>
