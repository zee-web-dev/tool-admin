<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">{{ $title }}</h5>

        @if ($toRoute)
            <a href="{{ $toRoute }}" class="btn btn-secondary btn-primary">
                <i class="ti ti-arrow-back me-sm-1"></i> Back
            </a>
        @endif
    </div>
    <div class="card-body">
        <form action="{{ $action }}" method="POST" enctype="multipart/form-data">

            @if ($method == 'patch')
                @method('PATCH')
            @elseif ($method == 'delete')
                @method('DELETE')
            @endif

            @csrf

            {{ $slot }}

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
            </div>
        </form>
    </div>
</div>
