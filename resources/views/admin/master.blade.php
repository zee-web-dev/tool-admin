<!DOCTYPE html>
<html lang="en">
{{-- head --}}
@include('admin.includes.head')

<body>

    <!-- sidebar -->
    @include('admin.includes.sidebar')
    <!-- /# sidebar -->

    <!-- navbar -->
    @include('admin.includes.navbar')
    <!-- /navbar -->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- breadcrumb -->
                @include('admin.includes.breadcrumb')
                <!-- /breadcrumb -->

                <section id="main-content">

                    @yield('content')


                </section>
            </div>
        </div>
    </div>
    
    <!-- footer -->
    @include('admin.includes.footer')
    <!-- /footer -->

    <!-- scripts -->
    @include('admin.includes.script')
    <!-- /scripts -->
</body>

</html>
