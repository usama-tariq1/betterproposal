<style>

    .navbar-nav > .nav-item {
        padding: 8px 10px;
        height: fit-content;
        height: 35px;
        /* height: fit-content; */
        width: auto;
    }

    .navbar-nav > .nav-item > p {
        margin-top: 0;
        /* margin-bottom: 1rem; */
        margin-top: -3px;

    }

    .navbar-nav > .nav-item:hover{
        cursor: pointer;
    }


    </style>


    <div class="" style="position:fixed; top: 0 ; left:0; width: 100%; z-index: 200;">
        <!---------------------------navbar start-------------------------------->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a id="cancel-btn" href="{{ url('/template') }}" class="btn start-head-btn" style="display: block;">Back</a>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item ">
                        <p class="">Details</p>
                    </li>
                    <li class="nav-item">
                        <p class="">Cover</p>
                    </li>
                    <li class="nav-item">
                        <p class="">Proposal</p>
                    </li>
                    <li class="nav-item">
                        <p class="">Proposal AI</p>
                    </li>
                    <li class="nav-item">
                        <p class="">Send</p>
                    </li>
                </ul> --}}
                <input type="hidden" id="stepValue" value="b" />
                <div class="ml-auto">
                    <button id="send-btn" onclick="savetemplate()" class="btn start-head-btn"
                            style="background-color: #46BD78; color:#fff; ">Save</button>
                </div>

            </div>
        </nav>
        <!---------------------------navbar end-------------------------------->
    </div>
