@extends('profile.Master.app')
@section('content')
<div class="padding60 overflow block">
    <h2>aAAA &gt; Name</h2>

    <div class="clearfix"></div>

    <ul class="tabs">
        <a href="account-branding-name?id=119237">
            <li class="tab-link tab-left current">Name</li>
        </a><a href="account-branding-navigation?id=119237">
            <li class="tab-link">Sidebar</li>
        </a><a href="account-branding-email?id=119237">
            <li class="tab-link">Email</li>
        </a><a href="account-branding-fonts?id=119237">
            <li class="tab-link">Fonts</li>
        </a><a href="account-branding-finance?id=119237">
            <li class="tab-link">Finances</li>
        </a><a href="account-branding-thankyou?id=119237">
            <li class="tab-link">Thank you</li>
        </a><a href="account-branding-payment?id=119237">
            <li class="tab-link">Payments</li>
        </a><a href="../upgrade/custom-domain-from-free">
            <li class="tab-link">Custom Domain</li>
        </a><a href="account-branding-pdf?id=119237">
            <li class="tab-link tab-right">PDF</li>
        </a>
    </ul> <!-- end tabs -->

    <div class="clearfix"></div><br><br>

    <!-- BODY -->

    <div class="grid_12 omega">
        <form name="brand-name" id="settings-form" method="post" action="">
            <div class="label">How do you refer to this brand internally?</div>
            <input name="BrandName" type="text" class="textbox attach-validation" id="BrandName" value="aAAA">
            <div class="label">How do you want it displayed to your clients?</div>
            <input name="CompanyName" type="text" class="textbox attach-validation" id="CompanyName" value="aAAA">
            <div class="label">What language do you want your clients to see?</div>
            <select name="LanguageID" id="LanguageID" class="textbox">
                <option value="0">-- English by default --</option>
                <option value="28">Arabic</option>
                <option value="20">Bahasa</option>
                <option value="11">Brazilian Portuguese</option>
                <option value="5">Catalan</option>
                <option value="8">Croatian</option>
                <option value="12">Danish</option>
                <option value="7">Dutch</option>
                <option selected="selected" value="1">English</option>
                <option value="22">Farsi</option>
                <option value="9">Finnish</option>
                <option value="3">French</option>
                <option value="2">German</option>
                <option value="23">Hebrew</option>
                <option value="25">Hungarian</option>
                <option value="6">Italian</option>
                <option value="27">Lithuanian</option>
                <option value="10">Norwegian</option>
                <option value="19">Polish</option>
                <option value="15">Portuguese</option>
                <option value="16">Romanian</option>
                <option value="21">Russian</option>
                <option value="26">Slovakian</option>
                <option value="14">Slovenian</option>
                <option value="4">Spanish</option>
                <option value="13">Swedish</option>
                <option value="18">Thai</option>
                <option value="24">Turkish</option>
            </select>
            <input type="hidden" name="DefaultBrand" value="1">
            <br><br>

            <a href="../settings/">
                <div class="button white left"><span class="icon-cancel"></span>Cancel</div>
            </a>
            <a href="javascript:void(0);" onclick="javascript:duplicate_brand(119237);">
                <div class="button white left"><span class="icon-duplicate"></span>Duplicate</div>
            </a>
            <button name="save_changes" id="save_changes" class="button green left nomargin"><span
                    class="icon-save"></span>Save changes</button>
        </form>
    </div> <!-- end grid 12 omega -->


</div>
@endsection
