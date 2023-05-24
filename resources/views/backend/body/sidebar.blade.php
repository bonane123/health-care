<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title font-weight-bold">Dashboard</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li class="menu-title font-weight-bold">Users</li>

                <li>
                    <a href="{{ route('all.users') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> All Users </span>
                    </a>
                </li>
                
                <li class="menu-title font-weight-bold">HOSPITAL</li>

                <li>
                    <a href="{{ route('hospital.category') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Categories </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('all.hospitals') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> All hospitals </span>
                    </a>
                </li>
                <li class="menu-title font-weight-bold">PATIENT</li>

                <li>
                    <a href="{{ route('patient.add') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Add Patient </span>
                    </a>
                </li>
                <li class="menu-title font-weight-bold">Role | Permission</li>
                <li>
                    <a href="#role" data-bs-toggle="collapse">
                        <i class="bi bi-patch-exclamation"></i>
                        <span>Role | Permission </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="role">
                        <ul class="nav-second-level">


                            <li>
                                <a href="{{ route('dashboard.pages.role.all') }}">All Role | Permission</a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.pages.permission.all') }}">All Permissions</a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.pages.role.permission.add') }}">Add Role in Permission</a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.pages.role.permission.all') }}">All Role in Permissions</a>
                            </li>


                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
