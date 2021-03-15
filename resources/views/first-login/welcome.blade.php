@extends('first-login.Master.app')

@section('content')
<style>
    .skip-btn{
        display: block !important;
    }
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center justify-content-center text-div">
                    <h4 class="top-heading p-3">Welcome to E-Proposals</h4>
                    <div class="content-div p-5">
                        <h4>Let's get you sending your first proposal as quickly as possible</h4>
                    <p>This step will quickly get the basics of your proposals design</p>
                    <p>It will take about 90 seconds if you have your logo to hand</p>
                    <button class="btn mt-3 create">Next: Company Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection