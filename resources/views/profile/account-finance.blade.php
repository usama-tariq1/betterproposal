@extends('profile.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <h2>Financial Options</h2>

        <form name="finance-settings" id="settings-form" method="post" action="">
            <div class="label">What currency do you want to see your pipeline in?<br> <span class="microcopy">(You can override this per proposal)</span>
            </div>
            <select name="Currency" id="Currency" class="textbox">
                <option value="2" selected="selected">US Dollars (USD)</option>
            </select>
            <!--<div class="label">Do you charge a recurring fee?</div>
            <select name="Monthly" id="Monthly" class="textbox">
              <option value="1" >Yes</option>
              <option value="0" >No</option>
            </select>-->
            <!--
                <div class="label">Do you charge tax on top of your prices?</div>
                <select name="Tax" id="Tax" class="textbox half">
                  <option value="1" >Yes</option>
                  <option value="0" selected="selected">No</option>
                </select>

            <div id="tax-settings" style="display:none">
                <div class="label">What is it called? (e.g. VAT, IVA, Sales Tax)</div><input name="TaxLabel" id="TaxLabel" type="text" class="textbox small" value="" /><br />
                <div class="label">What percentage do you charge?</div><input name="TaxAmount" id="TaxAmount" type="text" class="textbox small" value="" /><span class="bigcopy">&nbsp;%</span><br />
            </div>
            -->

            <div class="grid_12 omega">
                <a href="../settings/"><div class="button white left"><span class="icon-cancel"></span>Cancel</div></a>
                <button name="save_changes" id="save_changes" class="button green left nomargin"><span class="icon-save"></span>Save changes</button>
            </div>

        </form>

    </div>
@endsection
