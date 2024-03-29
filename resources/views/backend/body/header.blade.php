@php
$id = Auth::user()->id;
    $userData = App\Models\User::find($id);
@endphp
<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

             <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">

                    <span class="align-middle">languages</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="#" class="dropdown-item">
                        <span class="align-middle">Kinyarwanda</span>
                    </a>

                    <!-- item-->
                    <a href="#" class="dropdown-item">
                        <span class="align-middle">English</span>
                    </a>

                </div>
            </li>


            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light d-inline-flex p-2 align-items-center" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ !empty($userData->photo) ? url('upload/admin_images/' . $userData->photo) : url('upload/profile.png') }} "
                        alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        @if ($userData->username === null)
                            {{ $userData->name }}
                            @else
                            {{ $userData->username }}
                        @endif
                        <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0"> Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{ route('more.information') }}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>
                    <!-- item-->
                    <a href="{{ route('profile.edit') }}" class="dropdown-item notify-item">
                        <i class="bi bi-gear"></i>
                        <span>Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>



        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="#" class="logo logo-dark ">
                <span class="logo-sm">
                    <img src="{{ asset('assets/img/icyicaro.png') }}" alt="" height="70">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/img/icyicaro.png') }}" alt="" height="70">
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>

            <a href="" class="logo logo-light ">
                <span class="logo-sm">
                    <img src="{{ asset('assets/img/icyicaro.png') }}" alt="" height="70">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/img/icyicaro.png') }}" alt="" height="70">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
</div>
