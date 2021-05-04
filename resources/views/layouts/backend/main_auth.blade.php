<!DOCTYPE html>
<html lang="vi">
@include('layouts.backend.head')

<body class="" id="body">
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="app-brand text-center pt-1 pb-1">
                        <img src="{{asset('assets/img/common/logo.min.svg')}}"/>
                        <span class="brand-name">{{getAppName()}}</span>
                    </div>
                </div>

                <div class="card-body p-5">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.backend.footer_js')
</body>
</html>
