@extends('settings.Master.app')
@section('content')
<div class="padding60 overflow block">
    <h2>   {{$brand->brand_name}}  </h2>

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

    </style>



    @include('settings.branding.partials.tabs')



    <div class="clearfix"></div><br><br>

    <!-- BODY -->

    <div class="grid_12 omega">
        <form name="brand-name" id="settingsform" method="post" action="/settings/brands/update/{{$brand->id}}">
            <div class="label">How do you refer to this brand internally?</div>
            <input type="text" class="textbox attach-validation inp no-margin-bottom" name="brand_name"
                errname="Brand Name" required="true" id="BrandName" placeholder="Enter your brand name" value="{{@$brand->brand_name}}">
            <div class="spacer-30"></div>


            <div class="label">How do you want it displayed to your clients?</div>
            <input type="text" class="textbox attach-validation inp no-margin-bottom" name="company_name"
                errname="Company Name" required="true" id="CompanyName" placeholder="Company Name" value="{{@$brand->company_name}}">

            <div class="spacer-30"></div>

            <div class="label">What language do you want your clients to see?</div>
            <select name="language" errname="Language" id="LanguageID" class="textbox inp no-margin-bottom"
                required="true">

                <option value="{{$brand->language}}" selected>{{$brand->language}}</option>
                <option value="0">-- English by default --</option>
                <option value="Arabic">Arabic</option>
                <option value="Bahasa">Bahasa</option>
                <option value="Brazilian Portuguese">Brazilian Portuguese</option>
                <option value="Catalan">Catalan</option>
                <option value="Croatian">Croatian</option>
                <option value="Danish">Danish</option>
                <option value="Dutch">Dutch</option>
                <option  value="English">English</option>
                <option value="Farsi">Farsi</option>
                <option value="Finnish">Finnish</option>
                <option value="French">French</option>
                <option value="German">German</option>
                <option value="Hebrew">Hebrew</option>
                <option value="Hungarian">Hungarian</option>
                <option value="Italian">Italian</option>
                <option value="Lithuanian">Lithuanian</option>
                <option value="Norwegian">Norwegian</option>
                <option value="Polish">Polish</option>
                <option value="Portuguese">Portuguese</option>
                <option value="Romanian">Romanian</option>
                <option value="Russian">Russian</option>
                <option value="Slovakian">Slovakian</option>
                <option value="Slovenian">Slovenian</option>
                <option value="Spanish">Spanish</option>
                <option value="Swedish">Swedish</option>
                <option value="Thai">Thai</option>
                <option value="Turkish">Turkish</option>
            </select>

            <div class="spacer-30"></div>

            <input type="hidden" name="default_brand" class="inp" value="0">
            <input type="hidden" name="_token" class="inp" value="{{csrf_token()}}">
            <br><br>

            <a href="/settings/">
                <div class="button white left"><span class="icon-cancel"></span>Cancel</div>
            </a>
            {{-- <a >
                <div class="button white left"><span class="icon-duplicate"></span>Duplicate</div>
            </a> --}}
            <button type="button" onclick="savesetting('settingsform')" class="button green left nomargin"><span
                    class="icon-save"></span>Save changes</button>
        </form>
    </div> <!-- end grid 12 omega -->


</div>


<script type="text/javascript">
    function savesetting(formid) {
        var validation = validateform(`#${formid}`);



        console.log(validation);
        if (validation.errors < 1) {
            $(`#${formid}`).submit();
        }



    }

</script>

@endsection
