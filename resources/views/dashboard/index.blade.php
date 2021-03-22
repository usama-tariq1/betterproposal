@extends('layouts.Master.app')

@section('content')
@php
    $brand = App\Brand::where("user_id" , Auth::user()->id)->with("brand_settings")->first();
@endphp
<div class="top-section" style="background-color: #21252f;">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h4 class="top-heading p-5">Let's get your proposals more attractive. Shall we set it up?</h4>
         </div>
      </div>
      <div class="row top-cards pb-5">
         <div class="col-md-4">
            <div class="card text-center" style="    min-height: 431px;">
               <div class="card-body">
                 <h5 class="card-title top-card-heading">Setup Brand</h5>
                 <p class="p-3 card-text top-card-txt">Quickly Setup you brand . It will appear on all your future proposals.</p>



                @if(!$brand)
                    <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/onboarding-logo-todo.png')}}" alt="Card image cap">

                @else

                    <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/greencheck.png')}}" alt="Card image cap">

                @endif



               </div>
                @if(!$brand)
                    <a href="{{url('/')}}/settings/brands/add" style="width: 50%" class="btn pl-5 pr-5 p-2 mb-5 mr-auto ml-auto create btn-primary">LET'S DO IT</a>



                @endif
                {{-- <a href="{{url('/')}}/settings/brands/add" style="width: 50%" class="btn pl-5 pr-5 p-2 mb-5 mr-auto ml-auto create btn-primary">LET'S DO IT</a> --}}
             </div>
         </div>
         <div class="col-md-4">
            <div class="card text-center" style="    min-height: 431px;">
               <div class="card-body">
                 <h5 class="card-title top-card-heading">Upload logo</h5>
                 <p class="p-3 card-text top-card-txt">Getting your logo uploaded is the first step in creating world-class proposals. It will appear on all your future proposals.</p>

                 @if(!$brand)
                    <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/onboarding-logo-todo.png')}}" alt="Card image cap">

                 @else
                    @if($brand->company_logo)
                        <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/greencheck.png')}}" alt="Card image cap">
                    @else
                        <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/onboarding-logo-todo.png')}}" alt="Card image cap">

                    @endif
                 @endif


                </div>

                @if($brand)
                    @if(!$brand->company_logo)
                        <a href="/settings/brands/{{$brand->id}}/sidebar" style="width: 50%" class="btn pl-5 pr-5 p-2 mb-5 mr-auto ml-auto create btn-primary">Add LOGO</a>
                    @endif
                @else
                    <a href="{{url('/')}}/settings/brands/add" style="width: 50%" class="btn pl-5 pr-5 p-2 mb-5 mr-auto ml-auto create btn-primary">Create A brand First</a>

                @endif
            </div>
         </div>
         <div class="col-md-4">
            <div class="card text-center" style="    min-height: 431px;">
                <div class="card-body">
                    <h5 class="card-title top-card-heading">Email Setup </h5>
                    <p class="p-3 card-text top-card-txt"> Setup Email Configuration of Brand . By Setting you Email Configuration you will be able to send Proposal Sooner! </p>


                    @if($brand)
                        @if($brand->brand_settings->brand_email == Auth::user()->email)
                            <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/onboarding-logo-todo.png')}}" alt="Card image cap">

                        @else
                            <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/greencheck.png')}}" alt="Card image cap">

                        @endif
                    @endif


                </div>


                @if($brand)
                    @if($brand->brand_settings->brand_email == Auth::user()->email)
                    <a href="/settings/brands/{{$brand->id}}/email" style="width: 50%" class="btn pl-5 pr-5 p-2 mb-5 mr-auto ml-auto create btn-primary">Setup Email</a>
                    @endif
                @else
                    <a href="{{url('/')}}/settings/brands/add" style="width: 50%" class="btn pl-5 pr-5 p-2 mb-5 mr-auto ml-auto create btn-primary">Create A brand First</a>

                @endif


             </div>
         </div>
      </div>
   </div>
</div>
<div class="container ">
    <div class="row">
        <div class="dash pt-5 pl-3">
            <h3>Dashboard</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 ">
            <div class="chart mt-4" style="overflow:hidden;">
              <div style="width:100% !important;" id="chart_div"></div>
            </div>

            <div class="recent-proposals mt-4" style="background-color: #fff; border-radius: 15px;">
               <h5 class=" pt-3 proposals-heading">Recent proposals</h5>
               <div class="tbl pt-4 pl-3">
                <input class="tbl-search" id="searchoutstanding" type="text" placeholder="Search by Company">
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th class="pl-5" scope="col">Name</th>
                            <th class="pl-5" scope="col">Description</th>
                            <th class="pl-5" scope="col">Send to </th>

                            <th class="pl-5" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tableoutstanding">
                        @forelse(App\proposal_cache::where('status', '>', 1 )->where('user_id' , Auth::user()->id)->with('proposal')->with('contact')->get() as $proposal_cache)
                        {{-- {{dd($proposal_cache)}} --}}
                        @if($proposal_cache->proposal)
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

                                <button type="button" route="{{url('/')}}/proposals/detail/{{$proposal_cache->proposal->id}}"
                                    class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <button type="button" route="{{url('/')}}/proposals/detail/{{$proposal_cache->proposal->id}}"
                                    class="btn btn-success update"><i class="fa fa-edit"></i></button>
                                <button type="button" route="{{url('/')}}/proposals/detail/{{$proposal_cache->proposal->id}}"
                                    class="btn btn-danger delete"><i class="fa fa-trash-alt"></i></button>

                            </td>
                        </tr>
                        @endif

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
               <div class="row">
                   <a href="{{url('/')}}/proposals/outstanding" class=" proposed-name mr-auto ml-auto pt-5">View all outstanding proposals</a>
               </div>
            </div>

            <div class="recent-proposals mt-4" style="background-color: #fff; border-radius: 15px;">
              <h5 class=" pt-3 proposals-heading">Recent accepted proposals</h5>

                <div class="tbl pt-4 pl-3">
                    <input class="tbl-search" id="searchaccepted" type="text" placeholder="Search by Company">
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th class="pl-5" scope="col">Name</th>
                                <th class="pl-5" scope="col">Description</th>
                                <th class="pl-5" scope="col">Send to </th>

                                <th class="pl-5" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableaccepted">
                            @forelse(App\proposal_cache::where('status', '=', 4)->where('user_id' , Auth::user()->id)->with('proposal')->with('contact')->get() as $proposal_cache)
                            {{-- {{dd($proposal_cache)}} --}}
                            @if($proposal_cache->proposal)
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

                                    <button type="button" route="{{url('/')}}/proposals/detail/{{$proposal_cache->proposal->id}}"
                                        class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                    <button type="button" route="{{url('/')}}/proposals/detail/{{$proposal_cache->proposal->id}}"
                                        class="btn btn-success update"><i class="fa fa-edit"></i></button>
                                    <button type="button" route="{{url('/')}}/proposals/detail/{{$proposal_cache->proposal->id}}"
                                        class="btn btn-danger delete"><i class="fa fa-trash-alt"></i></button>

                                </td>
                            </tr>
                            @endif

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
              <div class="row">
                  <a href="{{url('/')}}/proposals/accepted" class=" proposed-name mr-auto ml-auto pt-5">View all accepted proposals</a>
              </div>
           </div>
        </div>
        <div class="col-md-4 proposal-count mt-4 " >
          <div class="" style="background-color: #fff; border-radius: 15px;">
              <div class=" overview">
                 <h5 class="proposals-heading">Recent activity</h5>
              </div>
              <div class="row">
                 @if ($activity = App\Proposal_activities::with(['proposal' =>  function($q){
                        $q->where("user_id" , Auth::user()->id);
                    }])->orderby('id' , 'DESC')->first() )

                    <div class="col-md-12">
                        <h3 class="propsals-text">{{$activity->action}} By <strong> ( {{$activity->proposal->company_name}} ) </strong> </h3>
                        <p class="propsals-text"> {{(Carbon\Carbon::parse($activity->timestamp))->toDayDateTimeString()}} </p>
                    </div>

                    @else

                    <div class="col-md-12">
                        <h3 class="propsals-text">No Activity Found</h3>

                    </div>


                 @endif




              </div>
           </div>

            <div class="mt-4" style="background-color: #fff; border-radius: 15px;">
              <div class=" overview">
                  <h5 class="proposals-heading">Overview</h5>
              </div>
              <div class="row">
                  @php
                      $Unsigned  = App\proposal_cache::where('user_id' , Auth::user()->id )->where('status' , "<" , 4)->count();
                    //   dd($unsigned);
                  @endphp
                  <div class="col-md-6">
                    <h5 class="proposals-heading">{{$Unsigned}}</h5>
                    <p class="propsals-text">unsigned proposals</p>
                  </div>
                  <div class="col-md-6">
                    <h5 class="proposals-heading">0.0%</h5>
                    <p class="propsals-text">conversion rate</p>
                  </div>
              </div>
            </div>

            {{-- <div class="mt-4" style="background-color: #fff; border-radius: 15px;">
               <div class=" overview">
                  <h5 class="proposals-heading">Proposal Remaining</h5>
               </div>
               <div class="row">
                  <div class="col-md-12">
                    <p class="propsals-text">You can send 10 more proposals this month. Your allowance will reset on 1st February.</p>
                  </div>
               </div>
            </div> --}}
        </div>
    </div>
</div>



<script>
    $(document).ready(function(){
        $("#searchaccepted").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tableaccepted tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });



        $("#searchoutstanding").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tableoutstanding tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>



@endsection
