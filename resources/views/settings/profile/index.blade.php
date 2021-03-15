@extends('settings.Master.app')
@section('content')

    <style>
        .profile-image{
            background-image: url("{{asset('/assets/images/nav-profile-blank.png')}}")
        }
    </style>

    <div class="padding60 block overflow">
        <h2>Your profile</h2>

        <form name="profile-name" id="settings-form" method="post" action="">
            <input type="hidden" name="SubmitForm">
            <input type="hidden" name="ImageUpload" value="">

            <div class="notification info">IMPORTANT: Email Can Not be Changed .</div>

            <div class="label">Your Name</div>
            <input name="name" id="FirstName" type="text" class="textbox attach-validation" value="{{@Auth::user()->name}}">

            <div class="label">Email address</div>
            <div class="label" style="color:#FF0000;"></div>
            <input name="email" id="Email" type="text" disabled="true" class="textbox attach-validation" value="{{@Auth::user()->email}}">


            <div class="label">Profile Image</div>
            <div id="profileimg-preview" class="profile-image mt-2" style="">

            </div>
            <div class="btn btn-primary chooseimage" style="    margin-top: 15px;"> Choose Image </div>
            <br><br>


            <div class="col-md-12 omega" style="display: block; clear: both; margin-top: 30px;">
                <a href="../settings/"><div class="button white left pl-3 pr-4" style="font-size: 14px;"><span class="icon-cancel"></span>Cancel</div></a>
                <button type="button" id="save_changes" name="save_changes" class="button green left nomargin"><span class="icon-save"></span>Save changes</button>
            </div>

        </form>

    </div>
@endsection
