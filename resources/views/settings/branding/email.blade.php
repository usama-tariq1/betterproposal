




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

    <div class="grid_6 ">


        <form name="brand-nav" id="settings-form" method="post" action="{{url('/')}}/settings/brands/{{$brand->id}}/email" >
            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            <input type="hidden" name="_method" value="PATCH" >
            <div class="grid_6 omega" style="margin-bottom:20px;">
                <div class="label">How your logo will look at the top of the email</div>
                <div class="logopreview-email ">
                    @if($brand->company_logo)
                        <img src="{{url('/')}}/companylogo/{{$brand->company_logo}}" class="logodisplay" style="width:200px">
                    @else
                        <img src="{{url('/')}}/companylogo/default.png" class="logodisplay" style="width:200px">
                    @endif
                </div>
            </div> <!-- end grid 6 -->

            <!-- SENDING A PROPOSAL -->

            <div class="grid_6">
                <h2>When you send a proposal</h2>
            </div> <!-- end grid 6 -->

            {{-- {{dd($brand->brand_settings)}} --}}

            <div class="grid_12">

                <div class="label">Brand Email</div>
                <input name="brand_email" type="email" id="SubjectLine" class="textbox inp" required="true" value="{{@$brand->brand_settings->brand_email}}" />
                <br>

                <div class="label">Default subject line</div>
                <input name="email_title" type="text" id="SubjectLine" class="textbox inp" required="true" value="{{@$brand->brand_settings->email_title}}" />
                <br>



                <div class="label">Default email message when you're sending a proposal</div>
                <textarea class="textbox inp" id="EmailMessage" name="email_message" rows="5">{{@$brand->brand_settings->brand_message}}</textarea>

                <div class="label">Change the email button text</div>
                <input name="email_button" type="text" id="ButtonText" class="textbox half inp" value="{{@$brand->brand_settings->email_button}}" />
                <br>
            </div> <!-- end grid 12 -->




            <!-- SIGNING A PROPOSAL -->

            <div class="grid_6">
                <h2>When someone signs your proposal</h2>
            </div> <!-- end grid 6 -->



            <div class="grid_12">
                <div class="label">Default subject line for thank you email</div>
                <input name="thanks_title" type="text" id="SubjectLineThanks" class="textbox" value="{{@$brand->brand_settings->thanks_title}}" />
                <br>
                <div class="label">Email message to send when someone signs your proposal</div>
                <textarea class="textbox" id="ThanksMessage" name="thanks_message" rows="5">{{@$brand->brand_settings->thanks_message}}</textarea>
            </div> <!-- end grid 12 -->

            <!-- EARN CASH -->

            {{-- <div class="grid_12">
                <div class="label">Earn cash by mentioning Better Proposals</div>

                <div class="grid_1">
                            <div class="switch"><input id="free-toggle" class="free-toggle free-toggle-round-flat"  type="checkbox" checked><label for="free-toggle"></label></div>
                            </div>

                <div class="grid_10 omega">
                <div class="microcopy" style="margin-left: 20px">Show a small Better Proposals badge on the email you send to your clients and after they've signed. If they choose a plan after clicking on the badge you'll get paid their first month's payment.</div><br><br>
                </div>

            </div> <!-- end grid 12 --> --}}

            <div class="grid_12 omega">
                <div class="button white left"><span class="icon-cancel"></span>Cancel</div>
                <button type="button" id="save_changes" onclick="savesetting('settings-form')" class="button green nomargin left"><span class="icon-save"></span>Save changes</button>
            </div>
        </form>



    </div>

    {{-- <div class="grid_6 omega toright">
        <div class="label">How your logo will look on your proposals</div>
        <div class="logopreview-nav">

            @if($brand->companylogo != '0')
                <img src="{{url('/')}}/companylogo/{{$brand->company_logo}}" class="logodisplay" style="width:200px">
            @else
                <img src="{{url('/')}}/companylogo/default.png" class="logodisplay" style="width:200px">
            @endif
        </div>
    </div> --}}


</div>


<script type="text/javascript" defer >
    function savesetting(formid) {
        var validation = validateform(`#${formid}`);



        // console.log(validation);
        if (validation.errors < 1) {
            $(`#${formid}`).submit();
        }



    }



</script>

@endsection
