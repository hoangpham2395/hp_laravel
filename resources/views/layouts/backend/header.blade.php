<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
            @if (getConstant('BACKEND_SEARCH_FORM'))
                <div class="input-group">
                    <button type="button" name="search" id="search-btn" class="btn btn-flat">
                        <i class="mdi mdi-magnify"></i>
                    </button>

                    {!! Form::text('query', '', ['id' => 'search-input', 'class' => 'form-control', 'placeholder' => getAction('search'), 'autofocus', 'autocomplete' => 'off']) !!}
                </div>
                <div id="search-results-container">
                    <ul id="search-results"></ul>
                </div>
            @endif
        </div>

        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu custom-dropdown">
                    <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                        <i class="mdi mdi-bell-outline"></i>
                    </button>

                    <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                        <div class="tab-content" id="myTabContent3">
                            <div class="tab-pane fade show active" id="home2" role="tabpanel"
                                 aria-labelledby="home2-tab">
                                <ul class="list-unstyled" data-simplebar style="height: 360px">
                                    <li>
                                        <a href="javascript:void(0)" class="media media-message media-notification">
                                            <div class="position-relative mr-3">
                                                <img class="rounded-circle" src="assets/img/user/u2.jpg" alt="Image">
                                                <span class="status away"></span>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Aaren</h4>
                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                        consectetur adipisicing elit. Nam itaque doloremque
                                                        odio, eligendi delectus vitae.</p>
                                                    <span class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 30 min ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" class="media media-message media-notification media-active">
                                            <div class="position-relative mr-3">
                                                <img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
                                                <span class="status active"></span>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Abril</h4>
                                                    <p class="last-msg">Donec mattis augue a nisl consequat,
                                                        nec imperdiet ex rutrum. Fusce et vehicula enim. Sed
                                                        in enim eu odio vehic.</p>
                                                    <span class="font-size-12 font-weight-medium text-white">
                                                        <i class="mdi mdi-clock-outline"></i> Just now...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" class="media media-message media-notification">
                                            <div class="position-relative mr-3">
                                                <img class="rounded-circle" src="assets/img/user/u5.jpg" alt="Image">
                                                <span class="status away"></span>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Emma</h4>
                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                        consectetur adipisicing elit. Nam itaque doloremque
                                                        odio, eligendi delectus vitae.</p>
                                                    <span class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" class="media media-message media-notification event-active">
                                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                <i class="mdi mdi-calendar-check font-size-20"></i>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">New event added</h4>
                                                    <p class="last-msg font-size-14">03/Jan/2020 (1pm - 2pm)</p>
                                                    <span class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 10 min ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" class="media media-message media-notification">
                                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                <i class="mdi mdi-chart-areaspline font-size-20"></i>
                                            </div>

                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Sales report</h4>
                                                    <p class="last-msg font-size-14">Lorem ipsum dolor sit,
                                                        amet consectetur adipisicing elit. Nam itaque
                                                        doloremque odio, eligendi delectus vitae.</p>
                                                    <span class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" class="media media-message media-notification">
                                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                <i class="mdi mdi-account-multiple-check font-size-20"></i>
                                            </div>

                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Add request</h4>
                                                    <p class="last-msg font-size-14">Add Dany Jones as your
                                                        contact consequat nec imperdiet ex rutrum. Fusce et
                                                        vehicula enim. Sed in enim.</p>
                                                    <button type="button" class="my-1 btn btn-sm btn-success">Accept</button>
                                                    <button type="button" class="my-1 btn btn-sm btn-secondary">Delete</button>
                                                    <span class="font-size-12 font-weight-medium text-secondary d-block">
                                                        <i class="mdi mdi-clock-outline"></i> 5 min ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" class="media media-message media-notification">
                                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                                                <i class="mdi mdi-server-network-off font-size-20"></i>
                                            </div>

                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Server overloaded</h4>
                                                    <p class="last-msg font-size-14">Donec mattis augue a
                                                        nisl consequat, nec imperdiet ex rutrum. Fusce et
                                                        vehicula enim. Sed in enim eu odio vehic.</p>
                                                    <span class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 30 min ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)" class="media media-message media-notification">
                                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
                                                <i class="mdi mdi-playlist-check font-size-20"></i>
                                            </div>

                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Task complete</h4>
                                                    <p class="last-msg font-size-14">Nam ut nisi erat. Ut
                                                        quis tortor varius, hendrerit arcu quis, congue
                                                        nisl. In scelerisque, sem ut ve.</p>
                                                    <span class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 2 hrs ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                {{-- View more --}}
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="w-100 media media-message media-notification text-center">{{getAction('view_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- User Account -->
                <li class="dropdown user-menu">
                    @php $currentAdmin = backendGuard()->user(); @endphp
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <img src="{{fullUrl($currentAdmin->avatar)}}" class="user-image" alt=""/>
                        <span class="d-none d-lg-inline-block">{{$currentAdmin->name}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- User image -->
                        <li class="dropdown-header">
                            <img src="{{fullUrl($currentAdmin->avatar)}}" class="img-circle" alt=""/>
                            <div class="d-inline-block">
                                {{$currentAdmin->name}} <small class="pt-1">{{$currentAdmin->email}}</small>
                            </div>
                        </li>

                        <li>
                            <a href="{{route('backend.admin.show', $currentAdmin->id)}}">
                                <i class="mdi mdi-account"></i> {{getAction('my_profile')}}
                            </a>
                        </li>

                        <li class="dropdown-footer">
                            <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
