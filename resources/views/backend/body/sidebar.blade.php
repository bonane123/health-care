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
            </ul>
        </div>
    </div>
</div>