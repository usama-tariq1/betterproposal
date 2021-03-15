@extends('profile.Master.app')
@section('content')

    <div class="padding60 overflow block">
        <h2>Proposal AI</h2>

        <form name="proposal-ai" id="settings-form" method="post" action="">

            <div class="label">Include my data in the aggregated results used to help others</div>
            <div class="switch">
                <input name="AIOptin" id="free-toggle" class="free-toggle free-toggle-round-flat active" type="checkbox" value="1" checked="">
                <span class="slider round"></span>
                <label for="free-toggle"></label>
            </div>
            <br><br>

            <div id="ai-activate" style="display: block;">
                <div class="label">Get helpful tips on improving my proposals based on real life data</div>
                <div class="switch">
                    <input name="AIActive" id="badge-toggle" class="badge-toggle badge-toggle-round-flat active" type="checkbox" value="1" checked="">
                    <span class="slider round"></span>
                    <label for="badge-toggle"></label>
                </div>
                <br><br>

                <div class="label">Which industry describes your business best?</div>
                <select name="Industry" class="textbox">
                    <option value="1">Website design</option>
                    <option value="2">Marketing</option>
                    <option value="3">Consulting</option>
                    <option value="4">Design</option>
                    <option value="5">Coaching</option>
                    <option value="6">I.T. support</option>
                    <option value="7">Photography</option>
                    <option value="8">Video production</option>
                    <option value="9" selected="selected">Software development</option>
                    <option value="10">Home and property</option>
                    <option value="11">Events</option>
                    <option value="12">Finance</option>
                </select>
                <br>


            </div>

            <div id="ai-warning" style="display: none;">
                <div class="notification warning" style="margin-bottom: 20px;">By opting out, Proposal AI is automatically switched off for your account.
                </div>
            </div>

            <div class="grid_12 omega">
                <a href="../settings/"><div class="button white left"><span class="icon-cancel"></span>Cancel</div></a>
                <input type="submit" id="save_changes" name="save_changes" class="button green left nomargin" value="Save Changes">
            </div>
        </form>

    </div>
@endsection
