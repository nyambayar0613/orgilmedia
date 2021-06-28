<div class="app-header white bg b-b">
    <div class="navbar" data-pjax>
        <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
            <i class="ion-navicon"></i>
        </a>
        <div class="navbar-item pull-left h5" id="pageTitle">@yield('title')</div>
        <!-- nabar right -->

        <ul class="nav navbar-nav pull-right">
            <li class="nav-item dropdown">
                <a class="nav-link clear" data-toggle="dropdown">
                    <span class="avatar w-32">
                        <img src="/img/usericon.png" class="w-full rounded" alt="...">
                    </span>
                </a>
                <div class="dropdown-menu w dropdown-menu-scale pull-right">
                    {{--@switch(Auth::user()->getRoleId())
                        @case(1)
                        <a class="dropdown-item" href="{{ route('member.profile') }}">
                            <span>Профайл</span>
                        </a>
                        @break

                        @case(2)
                        <a class="dropdown-item" href="{{ route('moderator.profile') }}">
                            <span>Профайл</span>
                        </a>
                        @break

                        @case(3)
                        <a class="dropdown-item" href="{{ route('admin.profile') }}">
                            <span>Профайл</span>
                        </a>
                        @break

                        --}}{{--@case(4)
                        <a class="dropdown-item" href="{{ route('superAdmin.profile') }}">
                            <span>Профайл</span>
                        </a>
                        @break--}}{{--

                        @default
                        --}}{{--<a class="dropdown-item" href="{{ route('superAdmin.profile') }}">
                            <span>Профайл</span>
                        </a>--}}{{--
                    @endswitch--}}

                    {{--@if(Auth::user()->getRoleId() == 4)
                        <a class="dropdown-item" href="{{ route('superAdmin.userList') }}">
                            <span>사용자 관리</span>
                        </a>
                    @endif--}}
                    <a class="dropdown-item" href="{{ route('logout') }}">Гарах</a>
                </div>
            </li>
        </ul>
        <!-- / navbar right -->
    </div>
</div>
