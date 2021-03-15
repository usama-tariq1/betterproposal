@extends('profile.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <h2>Email notifications</h2>

        <form name="profile-notifications" id="settings-form" method="post" action="">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td>Weekly summary</td>
                    <td><input type="checkbox" id="WeeklySummary" name="WeeklySummary" checked="checked" value="1" class="right"></td>
                </tr>
                <tr>
                    <td>When someone opens a proposal</td>
                    <td><input type="checkbox" id="ProposalOpened" name="ProposalOpened" checked="checked" value="1" class="right"></td>
                </tr>
                <tr>
                    <td>When someone prints a proposal</td>
                    <td><input type="checkbox" id="ProposalPrinted" name="ProposalPrinted" checked="checked" value="1" class="right"></td>
                </tr>
                </tbody></table>
            <br><br>

            <div class="grid_12 omega">
                <a href="../settings/"><div class="button white left"><span class="icon-cancel"></span>Cancel</div></a>
                <button name="save_changes" id="save_changes" class="button green left nomargin"><span class="icon-save"></span>Save changes</button>
            </div>
        </form>

    </div>
@endsection
