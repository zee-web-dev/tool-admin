<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('admin') }}/"
    data-template="vertical-menu-template-no-customizer">

<head>
    @include('admin.includes.head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">

        <div class="layout-container">

            <!-- Menu -->
            @include('admin.includes.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('admin.includes.navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">



                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        {{ $slot }}
                    </div>
                    <!--/ Content -->

                    <!-- Footer -->
                    @include('admin.includes.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>

                </div>
                <!--/ Content wrapper -->

            </div>
            <!--/ Layout container -->

        </div>

    </div>
    <!--/ Layout wrapper -->

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>


    @include('admin.includes.script')

    @stack('scripts')

</body>

</html>
