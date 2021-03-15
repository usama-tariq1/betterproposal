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
        <a id="cancel-btn" href="{{ url('/') }}" class="btn start-head-btn" style="display: block;">Cancel</a>
        <button id="back-btn" class="btn start-head-btn" style="display: none;"
            onclick="gotoPreviousPage()">Back</button>
        <button id="change-btn" class="btn start-head-btn" style="display: none !important;">Change Cover</button>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
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
            </ul>
            <input type="hidden" id="stepValue" value="b" />
            <div class="ml-auto">
                <button id="merge-btn" class="btn start-head-btn" style="display: none;">Merge Tags</button>
                <button id="save-btn" class="btn start-head-btn">Save and Exit</button>
                <button id="nextbtn" class="btn start-head-btn" style="background-color: #46BD78; color:#fff"
                        onclick="goToNextPage()">Next</button>
                <button id="send-btn" class="btn start-head-btn"
                        style="background-color: #46BD78; color:#fff; display: none;">Send
                    Now</button>
            </div>

        </div>
    </nav>
    <!---------------------------navbar end-------------------------------->
</div>
