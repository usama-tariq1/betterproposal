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


    <div class="">
        <!---------------------------navbar start-------------------------------->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a id="cancel-btn" href="{{ url('/template') }}" class="btn start-head-btn" style="display: block;">Back</a>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if(isset($_GET['proposal_id']))
                <ul class="navbar-nav mr-auto ml-auto"
                    style="position: relative; left: 26%; transform: translateX(-50%);">
                    <style>
                        .activenav{
                            font-weight: 700;
                        }
                    </style>
                    <li class="nav-item  ">
                        <p class="">Details ></p>
                    </li>
                    <li class="nav-item">
                        <p class="">Cover ></p>
                    </li>
                    <li class="nav-item activenav">
                        <p class="">Proposal ></p>
                    </li>

                    <li class="nav-item">
                        <p class="">Send</p>
                    </li>
                </ul>
                @endif
                <input type="hidden" id="stepValue" value="b" />
                <div class="ml-auto">
                    <button id="send-btn" onclick="savetemplate()" class="btn start-head-btn"
                            style="background-color: #46BD78; color:#fff; ">
                        Save
                    </button>


                    @if(isset($_GET['proposal_id']))
                        <button id="send-btn" type="button" route="{{url('/')}}/proposals/collect/{{$_GET['proposal_id']}}"  class="btn start-head-btn"
                                style="background-color: #46BD78; color:#fff; ">
                            Next
                        </button>

                    @endif

                </div>

            </div>
        </nav>
        <!---------------------------navbar end-------------------------------->
    </div>
