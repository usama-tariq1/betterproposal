@extends('profile.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <h2>Your email signature</h2>
        <form name="profile-signature" id="settings-form" method="post" action="">
            <div class="label">Type your email signature out in the box below for it to be plain text. If you want to use HTML, switch to code editor.</div>
            <div class="plaintext-view tab active">Plain Text</div>
            <div class="code-view tab">HTML</div><br>
            <textarea name="Signature" id="Signature" cols="" rows="8" class="textbox code"></textarea><br><br>
            <div class="row omega">
                <a href="../settings/"><div class="button white left"><span class="icon-cancel"></span>Cancel</div></a>
                <button id="save_changes" name="save_changes" class="button green left nomargin"><span class="icon-save"></span>Save changes</button>
            </div>

            <div class="row pt-3">
                <div class="label">Preview:</div>
                <div class="signature-table">
                </div>
            </div>
            <br><br>

        </form>

    </div>
@endsection
