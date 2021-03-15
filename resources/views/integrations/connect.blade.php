@extends('integrations.Master.app')
@section('content')
    <div class="padding60 overflow block">

        <!-- APP LOGO -->

        <div class="row">
            <div class="col-md-12">
                <div class="padding30 integrations-cards" style="float: left; margin-right: 30px">
                    <img src="{{asset('/assets/images/activecampaign.png')}}" class="integrations-icon">
                </div>
                <h2>ActiveCampaign</h2>
                <span class="microcopy row"><a href="https://activecampaign.com" target="_blank"><strong>activecampaign.com</strong></a></span>
                <div class="tag-connected not row">Not Connected</div>
            </div> <!-- end grid 4 cards -->

            <!-- DESCRIPTION AND SETTINGS -->

            <div class="col-md-12 omega mt-3 ">

                <p>If you already use ActiveCampaign, now you can send out your proposals faster by searching for a recipient in your CRM.</p>

                <h3>How it works</h3>

                <p>1. Open a new tab and log in to your ActiveCampaign account.<br><br>

                    2. Click on your name in the top right and click 'My Settings'.<br><br>

                    3. Click the 'Developer' link in the left navigation panel and copy your URL and personal API key.<br><br>

                    4. Click the blue button below on this page, enter the API key and URL and click the green 'Connect' button.<br><br></p>

                <div id="form-button" class="button pink"><span class="icon-connect3"></span>Connect ActiveCampaign</div>
                <br><br>


                <!-- INTEGRATION FORM GOES HERE -->
                <div id="form-block" class="hidden">
                    <form name="activecampaignConnect" id="crm-connect" method="post" action="">
                        <input name="AccessToken" id="AccessToken" type="text" class="textbox start-textbox" placeholder="API Key" value="">
                        <br>
                        <input name="AccountURL" id="AccountURL" type="text" class="textbox start-textbox" placeholder="Account URL" value="">
                        <a href="../../integrations/crm"><div class="button white left save">Cancel</div></a>
                        <input type="submit" name="connect_activecampaign" id="connect_activecampaign" value="Connect Now" class="button pink left nomargin save">
                    </form>
                </div> <!-- end form block -->

            </div>
        </div> <!-- end grid 12 -->
    </div>
@endsection
