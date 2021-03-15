@extends('layouts.Master.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>





<div class="container">
    <div class="row">
        <div class="col-md-9  dash pl-3">
            <h3 class="mr-auto">Dashboard</h3>
        </div>
        <div class="col-md-3 dash">
            {{-- <button class="create" data-toggle="modal" data-target="#exampleModal">
                <img src="{{asset('assets/images/add-icon1.png')}}"width="40px" alt="" >

                Create New Proposal

            </button> --}}


            <button class="create" route="{{url('/')}}/proposals/add">
                <img src="{{asset('assets/images/add-icon1.png')}}"width="40px" alt="" >

                Create New Proposal

            </button>
        </div>
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
        {{-- table --}}

        @include('proposal.partials.table' , ["proposals" => $proposals])
      </div>
      <div class="col-md-3">
        <div class="pipeline p-3">
          <h4 class="pipe-title">Pipeline</h4>
          <h3 class="pipe-price">$0</h3>
          <p class="pipe-txt">PIPELINE TOTAL</p>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Proposal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="newproposal" action="{{url('/')}}/proposals/add" method="post"  >
                <div class="modal-body">

                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control inp" placeholder="" required="true" >

                    </div>

                    <div class="form-group">
                        <label for="">Select Template</label>
                        <select name="templateid" class="form-control inp" required="true">
                            <option value="" selected> Select </option>

                            @foreach(App\Template::where('user_id' , Auth::user()->id)->get()  as $template)
                                <option value="{{$template->id}}"> {{$template->name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="">Choose Action</label>
                        <select name="action" class="form-control inp" required="true">
                            <option value="duplicate" selected> Duplicate </option>
                            <option value="exact" > Exact Template </option>

                        </select>

                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control"></textarea>

                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary addnewproposal">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>




</div>



<script>
// $('#myModal').on('shown.bs.modal', function () {
//   $('#myInput').trigger('focus')
// });



// $('.addnewproposal').click(function(){
//     validation = validateform('#newproposal');

//     // console.log(validation);
//     if(validation.errors < 1){
//         $("#newproposal").submit();
//     }
// });


$(document).ready(function(){
    $('body').css('background-color', '#e4e4e4 !important');
});


</script>

@endsection
