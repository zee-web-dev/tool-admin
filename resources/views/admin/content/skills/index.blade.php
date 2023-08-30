<x-master-layout>

    @if (Route::is('resume.skills.edit'))
        <x-form title="Update Categories" :action="route('resume.skills.store')">
            @include('admin.content.skills.form')
        </x-form>
    @else
        <x-form title="Add Categories" :action="route('resume.skills.store')">
            @include('admin.content.skills.form')
        </x-form>

        <x-datatable title="Skills List">
            <thead>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Value</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($skills as $i => $skill)
                    <tr>
                        <td></td>
                        <td>{{ ++$i }}</td>
                        <td>{{ $skill->name }}</td>
                        <td>{{ $skill->value }}</td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                {{ method_field('PATCH') }}
                                <label class="switch switch-primary">
                                    <input type="checkbox" class="switch-input" name="status"
                                        {{ $skill->status == 1 ? 'checked' : '' }}
                                        onChange="event.preventDefault(); this.closest('form').submit();">
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                </label>
                            </form>
                        </td>
                        <td>

                            <form action="{{ route('resume.skills.destroy', $skill->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('resume.skills.edit', $skill->id) }}" class="btn btn-sm btn-icon">
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

    @endif

</x-master-layout>
