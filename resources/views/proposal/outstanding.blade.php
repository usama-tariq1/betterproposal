@extends('pages.Master.app')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-9  dash pl-3">
            <h3 class="mr-auto">Outstanding Proposals</h3>
        </div>
        <div class="col-md-3 dash">
            <button class="create"><img src="{{asset('assets/images/add-icon1.png')}}" width="40px" alt="">Create New
                Proposal</button> </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="menu">
                @include("proposal.partials.tabpills")
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-9">
            {{-- @include('proposal.partials.table') --}}
        </div>
        <div class="col-md-3">
            <div class="pipeline p-3">
                <h4 class="pipe-title">Pipeline</h4>
                <h3 class="pipe-price">$0</h3>
                <p class="pipe-txt">PIPELINE TOTAL</p>
            </div>
        </div>
    </div>

</div>
@endsection
