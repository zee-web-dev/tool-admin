<div class="card">

    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title mb-0">{{ $title }}</h5>

        @if ($link)
            <a href="{{ $link }}" class="btn btn-secondary btn-primary">
                <i class="ti ti-plus me-sm-1"></i> Add New Record
            </a>
        @endif
    </div>

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table">
            {{ $slot }}
        </table>
    </div>
</div>


@push('scripts')
    <script>
        $(function() {
            var dt_basic_table = $('.datatables-basic');
            if (dt_basic_table.length) {
                dt_basic = dt_basic_table.DataTable({
                    columnDefs: [{
                            // For Responsive
                            className: 'control',
                            orderable: false,
                            searchable: false,
                            responsivePriority: 2,
                            targets: 0,
                            render: function(data, type, full, meta) {
                                return '';
                            }
                        },
                        {
                            orderable: false,
                            searchable: false,
                            targets: -2
                        },
                        {
                            orderable: false,
                            searchable: false,
                            targets: -1
                        },
                    ],
                    order: [
                        [1, 'asc']
                    ],
                    displayLength: 7,
                    lengthMenu: [7, 10, 25, 50, 75, 100],
                });
            }
        })
    </script>
@endpush
