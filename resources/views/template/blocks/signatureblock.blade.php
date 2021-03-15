{{-- signature Block --}}



<div class="signature-block templateblock" block="{{$blockid}}" order="{{$order}}">

    <div class="tooltip-tab ">
        <div class="tool remove editor">
            <i class="fa fa-trash-alt " ></i>
        </div>
        <div class="tool editor">
            <i class="fa fa-save" ></i>

        </div>
        <div class="tool sortup editor">
            <i class="fa fa-chevron-up "></i>
        </div>

        <div class="tool sortdown editor">
            <i class="fa fa-chevron-down "></i>
        </div>
        <div class="tool clearcanvas">
            <i class="fa fa-eraser "></i>
        </div>

    </div>

    <div class="view">

        <div class="agreementline">
            I agree to the terms of this agreement and I agree that my typed name below can be used as a digital representation of my signature to that fact.
        </div>

        <div class="tabswitch">
            <div class="tab  name-tab ">
                Type
            </div>
            <div class="tab sign-tab active">
                Sign
            </div>

        </div>

        <canvas class="canvas sign" width="500px" height="250px" style="border: 1px solid #ddd;"></canvas>
        <br>
        <div class="signatureholder name">

            <label for="">Enter your name</label>
            <div class="digitalsignature tinymce-heading">
                Name..
            </div>
        </div>
        {{-- <button class="clearcanvas">Clear</button> --}}

        <div class="control">
            <button class="btn btn-primary accept" type="button">
                Accept
            </button>

            <button class="btn btn-primary decline" type="button">
                Decline
            </button>
        </div>


    </div>


</div>
