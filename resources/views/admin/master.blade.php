<!DOCTYPE html>
<html lang="en">
{{--head--}}
@include('admin.includes.head')

<body>
{{--sidebar--}}
@include('admin.includes.sidebar')
<!-- /# sidebar -->
{{--topbar--}}
@include('admin.includes.topbar')
{{--endtopbar--}}

<div class="content-wrap">
    @yield('content')

    @include('admin.includes.footer')
</div>

@include('admin.includes.script')
</body>

</html>
