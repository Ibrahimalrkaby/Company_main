<!doctype html>
<html lang="en">


@include('admin.partials.head')


<body class="vertical  light @if (LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif ">
    <div class="wrapper">
        @include('admin.partials.navbar')

        @include('admin.partials.sidbar')

        <main role="main" class="main-content">
            @yield('content')
        </main> <!-- main -->
    </div> <!-- .wrapper -->

    @include('admin.partials.scripts')
    <script>
        function conformDelete(id) {
            if (confirm('Are you sure you want to delete this service?')) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>

</body>

</html>
