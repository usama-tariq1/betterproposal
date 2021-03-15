@extends('pages.Master.app')

@section('content')
<div class="top-section" style="background-color: #21252f;">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h4 class="top-heading p-5">Let's get your Better Proposals account set up shall we?</h4>
         </div>
      </div>
      <div class="row top-cards pb-5">
         <div class="col-md-4">
            <div class="card text-center">
               <div class="card-body">
                 <h5 class="card-title top-card-heading">Upload logo</h5>
                 <p class="p-3 card-text top-card-txt">Getting your logo uploaded is the first step in creating world-class proposals. It will appear on all your future proposals.</p>
                 <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/onboarding-logo-todo.png')}}" alt="Card image cap">

               </div>
               <a href="#" style="width: 50%" class="btn pl-5 pr-5 p-2 mb-5 mr-auto ml-auto create btn-primary">LET'S DO IT</a>
             </div>
         </div>
         <div class="col-md-4">
            <div class="card text-center">
               <div class="card-body">
                 <h5 class="card-title top-card-heading">Upload logo</h5>
                 <p class="p-3 card-text top-card-txt">Getting your logo uploaded is the first step in creating world-class proposals. It will appear on all your future proposals.</p>
                 <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/onboarding-logo-todo.png')}}" alt="Card image cap">

               </div>
               <a href="#" style="width: 50%" class="btn pl-5 pr-5 p-2 mb-5 mr-auto ml-auto create btn-primary">LET'S DO IT</a>
             </div>
         </div>
         <div class="col-md-4">
            <div class="card text-center">
               <div class="card-body">
                 <h5 class="card-title top-card-heading">Upload logo</h5>
                 <p class="p-3 card-text top-card-txt">Getting your logo uploaded is the first step in creating world-class proposals. It will appear on all your future proposals.</p>
                 <img class="card-img-top rounded-circle top-card-img" src="{{asset('assets/images/onboarding-logo-todo.png')}}" alt="Card image cap">

               </div>
               <a href="#" style="width: 50%" class="btn pl-5 pr-5 p-2 mb-5 mr-auto ml-auto create btn-primary">LET'S DO IT</a>
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
               <div class="row">
                  <p class="mr-auto pl-5 proposed-name">proposed name</p>
                  <p class="ml-auto pr-5 proposed-name">proposed price</p>
               </div>
               <div class="row">
                   <a href="#" class=" proposed-name mr-auto ml-auto pt-5">View all outstanding proposals</a>
               </div>
            </div>

            <div class="recent-proposals mt-4" style="background-color: #fff; border-radius: 15px;">
              <h5 class=" pt-3 proposals-heading">Recent accepted proposals</h5>
              <div class="row">
                 <p class="mr-auto pl-5 proposed-name">proposed name</p>
                 <p class="ml-auto pr-5 proposed-name">proposed price</p>
              </div>
              <div class="row">
                  <a href="#" class=" proposed-name mr-auto ml-auto pt-5">View all accepted proposals</a>
              </div>
           </div>
        </div>
        <div class="col-md-4 proposal-count mt-4 " >
          <div class="" style="background-color: #fff; border-radius: 15px;">
              <div class=" overview">
                 <h5 class="proposals-heading">Recent activity</h5>
              </div>
              <div class="row">
                 <div class="col-md-12">
                   <h3 class="propsals-text">Proposal created for ...</h3>
                   <p class="propsals-text">"date created"</p>
                 </div>
              </div>
           </div>

            <div class="mt-4" style="background-color: #fff; border-radius: 15px;">
              <div class=" overview">
                  <h5 class="proposals-heading">Overview</h5>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <h5 class="proposals-heading">0</h5>
                    <p class="propsals-text">unsigned proposals</p>
                  </div>
                  <div class="col-md-6">
                    <h5 class="proposals-heading">0.0%</h5>
                    <p class="propsals-text">conversion rate</p>
                  </div>
              </div>
            </div>

            <div class="mt-4" style="background-color: #fff; border-radius: 15px;">
               <div class=" overview">
                  <h5 class="proposals-heading">Proposal Remaining</h5>
               </div>
               <div class="row">
                  <div class="col-md-12">
                    <p class="propsals-text">You can send 10 more proposals this month. Your allowance will reset on 1st February.</p>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
