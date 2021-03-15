@extends('integrations.Master.app')
@section('content')
    <div class="padding60 overflow block">
        <div class="integrations-title">Live Chat</div>
        <div class="integrations-subtitle">Allow your clients to ask questions directly to you while they're reading your proposals.</div>
        <div class="clearfix fle"></div>

        <div class="row">
            <div class="col-md-3">
                <a href="../integrations/payments/stripe">
                    <div class=" cards center">
                        <div class="padding30 normal">
                            <img src="{{asset('/assets/images/boldchat.png')}}" class="integrations-icon">
                        </div>
                    </div>
                </a>
            </div>


        </div>


    </div>
@endsection
