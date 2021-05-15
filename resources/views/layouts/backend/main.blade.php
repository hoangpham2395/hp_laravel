<!DOCTYPE html>
<html lang="vi" dir="ltr">
<head>
    @include('layouts.backend.head')
    @stack('head_tag')
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
<script>
    NProgress.configure({showSpinner: false});
    NProgress.start();
</script>
<div class="wrapper">
    @include('layouts.backend.sidebar')
    <div class="page-wrapper">
        <!-- Header -->
        @include('layouts.backend.header')
        <div class="content-wrapper">
            <div class="content">
                {!! genBreadcrumb() !!}
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div> <!-- End Content -->
        </div> <!-- End Content Wrapper -->
        <!-- Footer -->
        @include('layouts.backend.footer')
    </div> <!-- End Page Wrapper -->
</div> <!-- End Wrapper -->
@include('layouts.backend.footer_js')
@stack('scripts')
</body>
</html>

