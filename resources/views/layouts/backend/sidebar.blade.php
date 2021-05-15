<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <div class="app-brand">
            <a href="{{route('backend.dashboard.index')}}" title="Sleek Dashboard">
                <img src="{{asset('assets/img/common/logo.min.svg')}}">
                <span class="brand-name text-truncate">{{getAppName()}}</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="{{getClassActive('dashboard')}}">
                    <a class="sidenav-item-link" href="{{route('backend.dashboard.index')}}">
                        <i class="mdi mdi-home"></i>
                        <span class="nav-text">Tổng quan</span>
                    </a>
                </li>

                <li class="has-sub {{getClassActive('admin')}}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#admin" aria-expanded="false" aria-controls="app">
                        <i class="mdi mdi-account-circle"></i>
                        <span class="nav-text">Quản trị viên</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse {{getClassActive('admin', null, true)}}" id="admin" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="{{getClassActive('admin', 'index')}}">
                                <a class="sidenav-item-link" href="{{route('backend.admin.index')}}">
                                    <i class="mdi mdi-account-multiple"></i>
                                    <span class="nav-text">Danh sách</span>
                                </a>
                            </li>

                            <li class="{{getClassActive('admin', 'create')}}">
                                <a class="sidenav-item-link" href="{{route('backend.admin.create')}}">
                                    <i class="mdi mdi-account-plus"></i>
                                    <span class="nav-text">Thêm mới</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
