
        {{-- Image Block --}}


        <div class="image-block choose templateblock" state="choose" block="{{$blockid}}" order="{{$order}}" >
            <div class="tooltip-tab editor">
                <div class="tool remove">
                    <i class="fa fa-trash-alt " ></i>
                </div>
                <div class="tool">
                    <i class="fa fa-save" ></i>

                </div>
                <div class="tool sortup">
                    <i class="fa fa-chevron-up "></i>
                </div>

                <div class="tool sortdown">
                    <i class="fa fa-chevron-down "></i>
                </div>
                <div class="tool setting ">
                    <i class="fa fa-cog"></i>
                </div>
            </div>
            <div class="choose editor">
                <div class="wrap">
                    <div class="icon">
                        <i class="fa fa-image"></i>
                    </div>
                    <div class="title">
                        Choose Your Image
                    </div>

                    <input type="file" name="image" accept="image"  class="custom-file chooseimage " />
                    <label class="chooselabel" for="image">Browse..</label>

                </div>

            </div>

            <div class="active view" style="display:none">
                <img src="" alt="" class="image activesource"  >
            </div>

        </div>
