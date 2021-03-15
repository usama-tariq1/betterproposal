{{-- Feature block --}}

<div class="feature-block templateblock" block="{{$blockid}}" order="{{$order}}" image="deactive" filter="active"  bg="red"  >
    <div class="tooltip-tab editor">

        <div class="tool remove">
            <i class="fa fa-trash-alt "></i>
        </div>
        <div class="tool">
            <i class="fa fa-save"></i>

        </div>
        <div class="tool sortup">
            <i class="fa fa-chevron-up "></i>
        </div>

        <div class="tool sortdown">
            <i class="fa fa-chevron-down "></i>
        </div>
        <div class="tool sidemenu">
            <i class="fa fa-cog "></i>





        </div>
        <div class="tool setting ">
            {{-- <i class="fa fa-cog"></i> --}}
            <input type="color" class="color">

        </div>






    </div>
    <div class="cover view">
        {{-- <input type="color" class="color" > --}}
        <div class="filter">
            <div class="title tinymce-body">
                Click to edit text
            </div>
        </div>
    </div>


    <div id="sidebar-block" class="sidebar slider-open sidebarmenu"
        style="position: fixed; width: 400px; transition: all 300ms ease 0s; height: 100%; top: 0px; right: 0px;">

        <a class="cancel" href="#" id="sidebar-block-cancel">
            <i class="fa fa-chevron-left"></i>
        </a>

        <br><br>

        <div class="bgimageblock">
            <div class="create-title" style="margin-top: 0px;">Upload A Background Image</div>
            <button class="btn btn-primary imagehitter" > <i class="fa fa-image "></i> Choose Image </button>
            <input type="file" name="bgimageinput" class="bgimageinput" style="visibility:hidden;">
        </div>

        <!-- Colours -->
        <div class="sidebar-section">
            <div class="create-title" style="margin-top: 0px;">Pre-set combinations</div>

            <div class="create-subtitle" id="colour-bg">Choose a background and text colour</div>
            <div class="create-subtitle" id="colour-filter" style="display:none">Choose a subtle coloured tint for your
                background image and text colour</div>
            <br><br>

            <div class="patchholder">
                <div class="patch"  >A</div>
                <div class="patch"  >A</div>
                <div class="patch"  >A</div>
                <div class="patch"  >A</div>
                <div class="patch"  >A</div>

            </div>



            <div class="clear"></div>

            <!-- Custom colours -->
            <div class="create-title" style="margin-top: 0px;">Or use your own colours</div>

            <div class="customcolorholder">
                <div class="labels">
                    <div class="label">Background</div>
                    <div class="label">Text</div>
                </div>
                <input type="color" class="customcolorinput  custombgcolor" value="#ff0000" id="">
                <input type="color" class="customcolorinput customfontcolor"  value="#ffffff" id="">
            </div>


            <br>


        </div><!-- End colours section -->

        <!-- Patterns -->
        {{-- <div class="sidebar-section">
            <div id="block-filters">
                <div class="create-title" style="margin-top: 0px;">Add a filter</div>

                <div class="filter-slider">
                    <img src="../img/proposal-icons/sidebar-filter-back.png" class="filter-button filter-back">
                    <div class="filter-preview feature-pattern-nofilter" id="nofilter"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-gradient" id="gradient"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-slanted" id="slanted"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-downward" id="downward"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-bunting" id="bunting"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-curvedbunting" id="curvedbunting"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-diagonal" id="diagonal"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-grid" id="grid"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-horizontal" id="horizontal"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-metal" id="metal"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-preview-photography" id="photography"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-sayagata" id="sayagata"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-preview-shapes" id="shapes"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-spider" id="spider"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-square" id="square"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-vertical slide-active" id="vertical"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-quote" id="quote"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-preview-squares" id="squares"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-preview-circles" id="circles"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <div class="filter-preview feature-pattern-note" id="note"
                        style="background-color: rgb(45, 45, 45);"></div>
                    <img src="../img/proposal-icons/sidebar-filter-next.png" class="filter-button filter-next">
                </div>

                <div class="clear"></div>
            </div><!-- end block-filters -->

            <div class="clear"></div>

            <span class="create-subtitle">Switch to Wide Mode</span><input type="checkbox" name="ContentWidth"
                id="ContentWidth" value="1" style="margin-left: 10px;">
        </div><!-- end Patterns section --> --}}


        <!-- Save button -->

        <div class="btn-cool-editbar blue sidebar-block-submit btn btn-success"

            id="7180320">Save and update</div>

    </div>



</div>
