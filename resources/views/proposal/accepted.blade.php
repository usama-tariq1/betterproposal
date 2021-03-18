@extends('layouts.Master.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9  dash pl-3">
            <h3 class="mr-auto">Accepted Proposals</h3>
        </div>
        <div class="col-md-3 dash">
            <button class="create"><img src="{{asset('assets/images/add-icon1.png')}}" width="40px" alt="">Create New
                Proposal</button> </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="menu" style="float: left;">
                @include("proposal.partials.tabpills")
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-9">
            {{-- @include('proposal.partials.table') --}}
            <div class="tbl pt-4 pl-3">
                <input class="tbl-search" id="searchinput" type="text" placeholder="Search by Company">
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th class="pl-5" scope="col">Name</th>
                            <th class="pl-5" scope="col">Description</th>
                            <th class="pl-5" scope="col">Send to </th>

                            <th class="pl-5" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="table">
                        @forelse(App\proposal_cache::where('status', '=', 4)->where('user_id' , Auth::user()->id)->with('proposal')->with('contact')->get() as $proposal_cache)
                        {{-- {{dd($proposal_cache)}} --}}
                        <tr>
                            <td class="pl-5">
                                <a href="{{url('/')}}/proposals/detail/{{$proposal_cache->proposal->id}}">
                                    {{$proposal_cache->proposal->name}}
                                </a>
                            </td>
                            <td class="pl-5">{{$proposal_cache->proposal->description}}</td>
                            <td class="pl-5">{{$proposal_cache->contact->firstname}} {{$proposal_cache->contact->lastname}}</td>

                            {{-- <td class="pl-5">{{$proposal->template->name}}</td> --}}

                            <td class="pl-5">

                                <button type="button" route="{{url('/')}}/proposals/preview/{{$proposal_cache->proposal->id}}"
                                    class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <button type="button"
                                    class="btn btn-success update"><i class="fa fa-edit"></i></button>
                                <button type="button"
                                    class="btn btn-danger delete"><i class="fa fa-trash-alt"></i></button>

                            </td>
                        </tr>

                        @empty

                        <tr>
                            <td>
                                No Proposal Found!
                            </td>
                        </tr>

                        @endforelse
                    </tbody>
                </table>
                <nav aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center pb-5">
                        <li class="page-item pg-active">
                            <a class="page-link" href="#" tabindex="-1">1</a>
                        </li>
                    </ul>
                </nav>
            </div>







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


<script>
    $(document).ready(function(){
        $("#searchinput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#table tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection
