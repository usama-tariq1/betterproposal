<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item" ><a class="nav-item-hold" href="{{url('/')}}/admin/dashboard"><i
                        class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span></a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item" ><a class="nav-item-hold" href="{{url('/')}}/admin/users"><i
                        class="nav-icon i-Male"></i><span class="nav-text">Users</span></a>

            </li>

            <li class="nav-item" >
                <a class="nav-item-hold" href="{{url('/')}}/admin/covers">
                    <i class="nav-icon i-Split-Vertical"></i>
                    <span class="nav-text">Covers</span>
                </a>

            </li>

            <li class="nav-item" >
                <a class="nav-item-hold" href="{{url('/')}}/admin/templates">
                    <i class="nav-icon i-Split-Vertical"></i>
                    <span class="nav-text">Templates</span>
                </a>

            </li>
            {{-- <li class="nav-item" >
                <a class="nav-item-hold" href="{{url('/')}}/admin/proposals">
                    <i class="nav-icon i-Atom"></i>
                    <span class="nav-text">Proposals</span>
                </a>

            </li> --}}



            {{-- <li class="nav-item" data-item="users"><a class="nav-item-hold" href="/admin/users"><i
                        class="nav-icon i-Male"></i><span class="nav-text">Users</span></a>
                <div class="triangle"></div>
            </li> --}}

        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <!-- Submenu Dashboards-->
        <ul class="childNav" data-parent="users">
            <li class="nav-item"><a href="/admin/users"><i class="nav-icon i-Clock-3"></i><span
                        class="item-name"> Show All </span></a>
            </li>
            <li class="nav-item"><a href="/admin/user/manage"><i class="nav-icon i-Clock-3"></i><span
                        class="item-name"> Manage Users </span></a>
            </li>

            <li class="nav-item"><a href="/admin/user/add"><i class="nav-icon i-Clock-3"></i><span
                        class="item-name"> Add User </span></a>
            </li>

        </ul>



    </div>
    <div class="sidebar-overlay"></div>
</div>
