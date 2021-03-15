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
                <li class="nav-item active">
                    <a class="nav-link main-nav" href="{{ url('/') }}">Dashboard <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link main-nav" href="{{ route('proposals') }}">Proposals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link main-nav" href="{{ route('template') }}">Templates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link main-nav" href="{{ route('report') }}">Reports</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="pt-2 nav-item">
                    <a class="nav-link" href="{{ route('start') }}"><img
                            src="{{ asset('/assets/images/add-icon.png') }}" alt=""></a>
                </li>
            </ul>
            <div class="dropdown-settings">
                <li class="header-hotlink header-hotlink-image"
                    style="background-image: url({{ asset('assets/images/nav-profile-blank.png') }})"></li>
                <div class="dropdown-content-settings">
                    <div class="col-md-12 profile">
                        <div class="profile-image"
                             style="background-image: url({{ asset('assets/images/nav-profile-blank.png') }})">
                        </div>
                        <div class="profile-name" style="margin-top: 15px;">name </div>
                    </div>
                    <div class="col-md-12">
                        <a href="/2/settings/profile-name">My account</a>
                        <a href="/2/integrations/">Integrations</a>
                        <a href="/2/templates/marketplace">Template Marketplace</a>
                        <a href="/2/settings/">Settings</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/2/upgrade/choose-a-plan-from-free?cab=1&amp;c=3&amp;s=1">Upgrade</a>
                        <!-- session-app -->
                        <div class="alert-count">7</div><a href="/2/learn/">Learning centre</a>
                        <a href="http://help.betterproposals.io" target="_blank">Help</a>
                        <a href="/2/login/?logout=1">Logout</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    <!---------------------------navbar end-------------------------------->
</div>
