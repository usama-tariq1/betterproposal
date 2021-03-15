

        {{-- Video Block --}}

        <div class="video-block choose templateblock" state="choose" >
            <div class="tooltip-tab">
                <div class="tool">
                    <i class="fa fa-trash-alt" ></i>
                </div>
                <div class="tool">
                    <i class="fa fa-save" ></i>

                </div>
                <div class="tool">
                    <i class="fa fa-chevron-up"></i>
                </div>

                <div class="tool">
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="tool setting ">
                    <i class="fa fa-cog"></i>
                </div>
            </div>
            <div class="choose">
                <div class="wrap">
                    <div class="title">
                        What website did you upload your video to?
                    </div>
                    <div class="selection"  >
                        <div class="iframe-selection youtube active " type="youtube">
                            <img src="{{url('/')}}/assets/images/youtube-circle.png" alt="" class="img">
                        </div>

                        <div class="iframe-selection vimeo" type="vimeo">
                            <img src="{{url('/')}}/assets/images/viemo-circle.png" alt="" class="img">
                        </div>
                        <select name="iframetype" class="iframetype" id="">
                            <option value="youtube">Youtube</option>
                            <option value="vimeo">Vimeo</option>

                        </select>
                    </div>
                    <div class="spacer"></div>
                    <div class="title">
                        Paste in the web address to your video, we'll do the rest.
                    </div>
                    <input type="text" name="iframeinput" Placeholder=""  class="form-control iframeinput">
                    <div class="loadvideo">
                        Load Video
                    </div>
                </div>

            </div>

            <div class="active" section="active" style="display:none">

            </div>

        </div>
