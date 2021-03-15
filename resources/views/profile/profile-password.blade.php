@extends('profile.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <h2>Change your password</h2>
        <form name="profile-password" id="profile-password" method="post" action="">
            <div class="label">Old password</div><input name="OldPassword" type="password" class="textbox attach-validation old-password" autofocus="">
            <div class="label">What do you want your <u>new</u> password to be?</div><input name="NewPassword" id="NewPassword" type="password" class="textbox attach-validation new-password" data-min-chars="8">
            <div class="label">Confirm your new password</div><input name="NewPasswordConfirm" id="NewPasswordConfirm" type="password" class="textbox attach-validation new-password-confirm" data-min-chars="8">

            <div class="grid_12 omega">
                <a href="../settings/"><div class="button white left"><span class="icon-cancel"></span>Cancel</div></a>
                <button id="save_changes" name="save_changes" class="button green left nomargin"><span class="icon-save"></span>Save changes</button>
            </div>
        </form>

    </div>
@endsection
