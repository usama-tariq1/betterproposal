@extends('settings.Master.app')
@section('content')
<div class="padding60 overflow block">
    <h2> {{@$brand->brand_name}} </h2>

    <div class="clearfix"></div>

    <style>
        .tabs a {
            padding: 0px;
        }

        .tabs a li {
            padding: 8px;
        }

        .no-margin-bottom {
            margin-bottom: 0px;
        }

        .spacer-30 {
            height: 30px;
        }

        .toleft {
            width: 50%;
            float: left;
        }

        .toright {
            width: 49%;
            float: right;
        }

    </style>



    @include('settings.branding.partials.tabs' , compact('brand'))



    <div class="clearfix"></div><br><br>

    <!-- BODY -->

    <div class="grid_6 toleft">

        <!-- UPLOAD LOGO -->
        <form name="brand-nav" id="settings-form" method="post" action="{{url('/')}}/settings/brands/{{$brand->id}}/sidebar" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            <input type="hidden" name="_method" value="PATCH" >

            <div class="label">Upload your company logo</div>
            <div class="microcopy">If you have a dark background, use a light coloured logo. If you're using a white
                background use a logo with dark text.</div><br>
            <div class="file-upload-container">

                <input type="file" class="form-control inp " required="true" name="companylogo" id="companylogo">



            </div>


            <br><br>

            {{-- <!-- NAV COLOUR -->
            <div class="label">What colour do you want your navigation bar to be?</div>
            <div class="microcopy">By default it's white with dark text. This always looks clean and classy. You can
                invert it or customize it completely by clicking <span class="advanced"
                    style="text-decoration:underline; cursor:pointer;">Advanced Settings</span></div>

            <div class="grid_12 omega colorlist">
                <div class="navcolor light" data-id="FFFFFF" data-font="333333">Aa</div>
                <div class="navcolor dark" data-id="333333" data-font="FFFFFF">Aa</div>
                <div class="clearfix"></div>

                <!-- ADVANCED SETTINGS -->
                <div style="display:none" id="advanced">
                    <div class="label">Enter your own #HEX reference (6 characters without the #):</div>
                    <span class="bigcopy">#&nbsp;</span><input name="NavColour" id="NavColour" type="text"
                        class="textbox small navcolour-hex attach-validation validate-colour" value="FFFFFF"
                        maxlength="6" data-min-chars="6">
                    <div class="label">If you chose a light colour like white then you will want to select a dark text
                        colour</div>
                    <select name="FontColour" id="FontColour" class="textbox">
                        <option value="FFFFFF">Light text (for most background colours)</option>
                        <option value="333333" selected="selected">Dark text (for very light background colours)
                        </option>
                    </select>
                </div>
            </div> <!-- end grid 12 -->
 --}}


            <!-- BUTTONS -->
            <a href="../settings/">
                <div class="button white left"><span class="icon-cancel"></span>Cancel</div>
            </a>
            <button  id="save_changes" onclick="savesetting('settings-form')" class="button green left nomargin"><span
                    class="icon-save"></span>Save changes</button>

        </form>
    </div>

    <div class="grid_6 omega toright">
        <div class="label">How your logo will look on your proposals</div>
        <div class="logopreview-nav">

            @if($brand->company_logo )
                <img src="{{url('/')}}/companylogo/{{$brand->company_logo}}" class="logodisplay" style="width:200px">
            @else
                <img src="{{url('/')}}/companylogo/default.png" class="logodisplay" style="width:200px">
            @endif
        </div>
    </div>


</div>


<script type="text/javascript" defer >
    function savesetting(formid) {
        var validation = validateform(`#${formid}`);



        console.log(validation);
        // if (validation.errors < 1) {
        //     $(`#${formid}`).submit();
        // }



    }



    $(document).ready(function(){
        $('#companylogo').on('change' , function(){
            // console.log('hit');

            var fileinput = $('#companylogo');


            var file = $(fileinput)[0].files[0];
            var reader = new FileReader();


            reader.readAsDataURL(file);

            reader.onload = function (e) {

                $('.logodisplay').attr('src', e.target.result);
                // $(block).attr('state', 'active');
            }


        });
    });

</script>

@endsection
