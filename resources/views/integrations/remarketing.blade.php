@extends('integrations.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <div class="integrations-title">Retargeting</div>
        <div class="integrations-subtitle">Run ads to people who have received your proposals but not yet signed them, or people who have signed. The possibilities are endless.
        </div>
        <div class="clearfix fle"></div>

        <div class="row">
            <div class="col-md-3">
                <a href="../integrations/payments/stripe">
                    <div class=" cards center">
                        <div class="padding30 normal">
                            <img src="{{asset('/assets/images/stripe.png')}}" class="integrations-icon">
                        </div>
                    </div>
                </a>
            </div>


        </div>


    </div>
@endsection
