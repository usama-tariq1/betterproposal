@extends('profile.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <h2>User Permissions</h2>

        <br><br>
        <form name="account-permissions" id="settings-form" method="post" action="">
            <div id="users-list">
                <div class="user-cards">
                    <div class="user-cards-title">name </div>
                    <div class="padding30-leftright" style="padding-bottom:30px;">
                        <span class="label">By default, the Primary user has all permissions enabled</span>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="grid_12 omega">
                <a href="../settings/"><div class="button white left save"><span class="icon-cancel"></span>Cancel</div></a>
                <button id="save_changes" name="save_changes" class="button green left nomargin save"><span class="icon-save"></span>Save changes</button>
            </div>
        </form>


    </div>
@endsection
