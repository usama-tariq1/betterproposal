@extends('integrations.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <div class="integrations-title">CRM Integrations</div>
        <div class="integrations-subtitle">Simply connect your CRM then search and select your proposal recipients from Better Proposals instantly. No waiting for data to sync or uploading lists.
        </div>
        <div class="clearfix fle"></div>

        <div class="row">
            <div class="col-md-3">
                <a href="../integrations/payments/stripe">
                    <div class=" cards center">
                        <div class="padding30 normal">
                            <img src="{{asset('/assets/images/activecampaign.png')}}" class="integrations-icon">
                        </div>
                    </div>
                </a>
            </div>


        </div>


    </div>
@endsection
