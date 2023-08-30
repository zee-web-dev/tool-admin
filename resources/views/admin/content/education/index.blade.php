<x-master-layout>


    <x-datatable title="Educations List" :link="route('resume.education.create')">
        <thead>
            <tr>
                <th></th>
                <th>id</th>
                <th>Title</th>
                <th>Institute</th>
                <th>Address</th>
                <th>From</th>
                <th>To</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($educations))
                @foreach ($educations as $i => $education)
                    <tr>
                        <td></td>
                        <td>{{ ++$i }}</td>
                        <td>{{ $education->title ?? '' }}</td>
                        <td>{{ $education->institute ?? '' }}</td>
                        <td>{{ $education->location ?? '' }}</td>
                        <td>{{ $education->from ?? '' }}</td>
                        <td>{{ $education->to ?? '' }}</td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                {{ method_field('PATCH') }}
                                <label class="switch switch-primary">
                                    <input type="checkbox" class="switch-input" name="status"
                                        {{ $education->status == 1 ? 'checked' : '' }}
                                        onChange="event.preventDefault(); this.closest('form').submit();">
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                </label>
                            </form>
                        </td>
                        <td>

                            <form action="{{ route('resume.education.destroy', $education->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('resume.education.edit', $education->id) }}" class="btn btn-sm btn-icon">
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
