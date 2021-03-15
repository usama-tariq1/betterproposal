@extends('profile.Master.app')
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

            <div class="notification info">IMPORTANT: Changing your email will change the email address that your proposals are sent from and the email address that you log in with.</div>

            <div class="label">Your first name</div>
            <input name="FirstName" id="FirstName" type="text" class="textbox attach-validation" value="name">
            <div class="label">Last name</div>
            <input name="Surname" id="Surname" type="text" class="textbox" value="">
            <div class="label">Email address</div>
            <div class="label" style="color:#FF0000;"></div>
            <input name="Email" id="Email" type="text" class="textbox attach-validation" value="name@example.com">
            <div class="label">Profile Image</div>
            <div id="profileimg-preview" class="profile-image mt-2" style=""></div>
            <div class="file-upload-container mt-3">
                <div id="uploadifive-ImageUpload" class="uploadifive-button button white small" style="height: 40px; margin: 0px; overflow: hidden; position: relative; text-align: center;"><span class="icon-archive"></span>Browse for Image<input name="profile-image" type="file" id="ImageUpload" class="ImgUploadify" style="display: none;"><input type="file" style="font-size: 40px; opacity: 0; position: absolute; right: -3px; top: -3px; z-index: 999;"></div><div id="uploadifive-ImageUpload-queue" class="uploadifive-queue"></div></div><br><br>


            <div class="col-md-12 omega">
                <a href="../settings/"><div class="button white left pl-3 pr-4" style="font-size: 14px;"><span class="icon-cancel"></span>Cancel</div></a>
                <button type="button" id="save_changes" name="save_changes" class="button green left nomargin"><span class="icon-save"></span>Save changes</button>
            </div>

        </form>

    </div>
@endsection
