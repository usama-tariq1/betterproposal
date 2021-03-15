<style>
.drop:hover{
    background-color: #fa7a50;

}
.dropdown-toggle::after{
    content: none !important;
}
</style>

<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="./dashboard.html">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="./icons.html">--}}
{{--                    <i class="now-ui-icons education_atom"></i>--}}
{{--                    <p>Icons</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="./map.html">--}}
{{--                    <i class="now-ui-icons location_map-big"></i>--}}
{{--                    <p>Maps</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="./notifications.html">--}}
{{--                    <i class="now-ui-icons ui-1_bell-53"></i>--}}
{{--                    <p>Notifications</p>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="active">
                    <div class="dropdown design_app drop ml-auto mr-auto" style="border-radius: 25px; width: 90%">
                        <button style="background-color: transparent" class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons users_single-02" style="margin-left: -17%"></i>
                            <p>User Profile</p>
                        </button>
                        <div class="dropdown-menu text-center" style="border-radius: 25px;" aria-labelledby="dropdownMenuButton">
                            <button type="button" class="btn btn-primary">Manage User</button>
                        </div>
                    </div>
            </li>
{{--            <li>--}}
{{--                <a href="./tables.html">--}}
{{--                    <i class="now-ui-icons design_bullet-list-67"></i>--}}
{{--                    <p>Table List</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="./typography.html">--}}
{{--                    <i class="now-ui-icons text_caps-small"></i>--}}
{{--                    <p>Typography</p>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>

