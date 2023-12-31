<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('admin/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('admin/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/node-waves/node-waves.js') }}"></script>

<script src="{{ asset('admin/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('admin/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
{{-- <script src="{{ asset('admin/vendor/libs/apex-charts/apexcharts.js') }}"></script> --}}
{{-- <script src="{{ asset('admin/vendor/libs/swiper/swiper.js') }}"></script> --}}
<script src="{{ asset('admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('admin/vendor/libs/toastr/toastr.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('admin/js/main.js') }}"></script>

<!-- Page JS -->
{{-- <script src="{{asset('admin/js/dashboards-analytics.js">')}}</script> --}}

<script>
    $(function() {
        toastr.options = {
            maxOpened: 1,
            autoDismiss: true,
            closeButton: true,
            newestOnTop: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            preventDuplicates: true,
            onclick: null,
            closeDuration: 300,
            closeMethod: 'fadeOut',
            closeEasing: 'swing',
            timeOut: 2000,
        };
        @if (session('success'))
            toastr.success('{{ session('success') }}', 'Success');
        @endif
        @if ($errors->any())
            toastr.error("{{ $errors->first() }}", 'Error');
        @endif
    });
</script>
