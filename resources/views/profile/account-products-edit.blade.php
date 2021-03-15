@extends('profile.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <h2>Edit: Untitled Product</h2>

        <form name="product-edit" id="settings-form" method="post" action="">
            <div class="label">Product name</div>
            <input name="ProductName" type="text" class="textbox attach-validation" value="Untitled Product"><br>

            <div class="label">Description</div>
            <textarea name="Description" id="Description" cols="" rows="3" class="textbox"></textarea><br>

            <div class="label">How do you charge for this?</div>
            <select name="RecurringType" class="textbox half">
                <option value="0" selected="selected">One-off</option>
                <option value="12">Monthly</option>
                <option value="4">Quarterly</option>
                <option value="1">Annually</option>
            </select>
            <br>

            <div class="label">Do you charge an amount or percentage?</div>
            <select name="PriceType" class="textbox half">
                <option value="0" selected="selected">Amount</option>
                <option value="1">Percentage</option>
            </select>
            <br>

            <div class="label">Price</div>
            <input name="DefaultPrice" id="DefaultPrice" type="text" class="textbox small" value="0.00"><br>



            <div class="label">Make this an optional product&nbsp;&nbsp;<input type="checkbox" id="Optional" name="Optional" value="1"></div>
            <div class="label">Make this a choice&nbsp;&nbsp;<input type="checkbox" id="Selectable" name="Selectable" value="1"></div>

            <div class="grid_12 omega" style="margin-top: 15px">
                <a href="../settings/account-products"><div class="button white left"><span class="icon-cancel"></span>Cancel</div> </a>
                <button name="save_changes" id="save_changes" class="button green left nomargin"><span class="icon-save"></span>Save changes</button>
            </div>

        </form>

    </div>
@endsection
