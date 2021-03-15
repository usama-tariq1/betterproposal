@extends('integrations.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <div class="integrations-title">Integrations</div>
        <div class="integrations-subtitle">The Integration Center is where you will connect all your favourite apps to Better Proposals. The options are endless. Browse the categories on the left, learn about an integration and connect it. Here are our currently featured  apps.</div>
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
