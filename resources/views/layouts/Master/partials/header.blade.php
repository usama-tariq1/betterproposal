


@php

    $current_full_path = Request::getPathInfo();
    $path = (explode("/", $current_full_path))[1];


    // dd($path);



@endphp



<div class="">
    <!---------------------------navbar start-------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff !important;;">
        <a class="navbar-brand pl-5" href="{{ url('/') }}"><img width="50%"
                src="{{ asset('/assets/images/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  {{ $path == '' ? 'active' : ''  }} ">
                    <a class="nav-link main-nav" href="{{ url('/') }}">Dashboard <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ $path == 'proposals' ? 'active' : ''  }}">
                    <a class="nav-link main-nav" href="{{ route('proposals') }}">Proposals </a>
                </li>
                <li class="nav-item {{ $path == 'template' ? 'active' : ''  }}">
                    <a class="nav-link main-nav" href="{{ route('template') }}">Templates</a>
                </li>
                <li class="nav-item {{ $path == 'report' ? 'active' : ''  }}">
                    <a class="nav-link main-nav" href="{{ route('report') }}">Reports</a>
                </li>

                <li class="nav-item {{ $path == 'marketplace' ? 'active' : ''  }}">
                    <a class="nav-link main-nav" href="{{url('/')}}/marketplace/templates">Marketplace</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="pt-2 nav-item">
                    <a class="nav-link" href="{{url('/')}}/proposals/add"><img
                            src="{{ asset('/assets/images/add-icon.png') }}" alt=""></a>
                </li>
            </ul>
            <div class="dropdown-settings">
                <li class="header-hotlink header-hotlink-image"
                    style="background-image: url({{ asset('assets/images/nav-profile-blank.png') }}) ; margin:0px;"></li>
                <div class="dropdown-content-settings">
                    <div class="col-md-12 profile" style="padding: 0px;

                            padding: 0px;
                            display: flex;
                            justify-content: flex-start;
                            padding-bottom: 10px;


                    " >
                        <div class="profile-image"
                            style="background-image: url({{ asset('assets/images/nav-profile-blank.png') }}) ; margin-top: -7px;">
                        </div>
                        <div class="profile-name" style="margin-top: 4px; font-size:18px;"> {{Auth::user()->name}} </div>
                    </div>
                    <div class="col-md-12"  >
                        <a style="width: 100%; display: block; margin-top:10px;" href="/2/settings/profile-name">My account</a>
                        <a style="width: 100%; display: block;" href="/integrations/">Integrations</a>
                        <a style="width: 100%; display: block;" href="/templates/marketplace">Template Marketplace</a>
                        <a style="width: 100%; display: block;" href="/settings/">Settings</a>
                    </div>
                    <div class="col-md-12">
                        <a style="width: 100%; display: block;" href="/upgrade">Upgrade</a>
                        <!-- session-app -->
                        <div class="alert-count" style="margin-left: 10px;">7</div><a href="/2/learn/">Learning centre</a>
                        <a style="width: 100%; display: block;" href="/help" target="_blank">Help</a>
                        <a style="width: 100%; display: block;" href="/logout">Logout</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    <!---------------------------navbar end-------------------------------->
</div>
