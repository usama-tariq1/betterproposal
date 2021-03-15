@extends('layouts.Master.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>



<link rel="stylesheet" href="{{url('/')}}/assets/css/detailpage.css">

<style>


</style>


<div class="container">
    <!-- TITLE -->

    @if($proposal_cache)
    {{-- {{dd($proposal_cache)}} --}}

    <div class="grid_12 nobottom">
        <h1 style="margin-bottom:20px;">{{$proposal_cache->proposal->name}}</h1>
        {{-- <div contenteditable="true" class="company-name rounded4" data-text="Add a description"></div> --}}
    </div> <!-- end grid 9 -->


    <!-- BODY -->

    <div class="grid_12 main-frame" style="margin-top: 20px">
        <div class="grid_9">

            <div class="action-button-menu">
                <ul>


                    <div class="mobile-hide">

                        <li class="action-button first">
                            <i class="fa fa-pencil action-icon" style="color: white; font-size:20px; text-align: center;" ></i>
                            Edit proposal

                            <ul>
                                {{-- <a href="edit?id=760604" class="no-ul ">
                                    <li>Edit Setup</li>
                                </a> --}}
                                <a href="{{url('/')}}/cover/edit/{{$proposal_cache->proposal->cover_id}}" class="no-ul ">
                                    <li>Edit Cover</li>
                                </a>

                                <a href="{{url('/')}}/template/{{$proposal_cache->proposal->template_id}}" class="no-ul ">
                                    <li>Edit Content</li>
                                </a>
                            </ul>
                        </li>
                    </div>

                    <div class="desktop-hide">
                        <a href="no-mobile">
                            <li class="action-button">


                                Edit proposal
                            </li>
                        </a>
                    </div>


                    <a href="send?ProposalID=757064" class="no-ul">
                        <li class="action-button">
                            <i class="fa fa-paper-plane action-icon" style="color: white; font-size:20px; text-align: center;" ></i>

                            Send proposal
                        </li>
                    </a>


                    <a href="{{url('/')}}/template/preview/{{$proposal_cache->proposal->template->code}}"
                        target="_blank" class="no-ul">
                        <li class="action-button">
                            <i class="fa fa-eye action-icon" style="color: white; font-size:20px; text-align: center;" ></i>
                            Preview proposal
                        </li>
                    </a>
                    <li class="action-button last">
                        <i class="fa fa-save action-icon" style="color: white; font-size:20px; text-align: center;" ></i>

                        Options
                        <ul class="action-button-options">
                            <a class="save-template">
                                <li>Save as template</li>
                            </a> <a href=""
                                class="no-ul">
                                <li class="declineproposal">Mark as lost</li>
                            </a>
                            <a  class="no-ul">
                                <li class="acceptproposal">Manually approve</li>
                            </a>
                            <a href="{{url('/')}}/proposals/delete/{{$proposal_cache->proposal->id}}" id="proposal-d" class="no-ul">
                                <li>Delete</li>
                            </a>
                        </ul>
                    </li>

                </ul>

            </div>

            <div class="clear"></div>

            <div class="padding30 block">
                <h2>Proposal Activity</h2>
                <br>

                <div class="entries-page page-1">
                    <div class="timeline-block ">
                        <div class="timeline-title ">Proposal Created</div><br>
                        <div class="timeline-date">5th March 2021 at 09:26 by You</div>
                    </div>



                </div>


            </div>

        </div> <!-- end grid 9 -->


        <div class="grid_3 omega">

            <style>
                .complete  > i{
                    color: white;
                    position: relative;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50% , -50%);

                }
                .uncomplete{
                    border: 1px solid #ED5373;
                    background-color: white
                }
                .uncomplete  > i{
                    color: #ED5373;
                    position: relative;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50% , -50%);
                }

            </style>


            <div class="padding30 block clearfix">
                <h2>Proposal Progress</h2>
                <div class="progress-bg">
                    <div class="progress-step {{$proposal_cache->status >= 1 ? 'complete' : 'uncomplete'  }}">
                        <i class="fa fa-{{$proposal_cache->status >= 1 ? 'check' : 'times'  }}"  ></i>
                    </div>
                    <div class="progress-step {{$proposal_cache->status >= 2 ? 'complete' : 'uncomplete'  }}">
                        <i class="fa fa-{{$proposal_cache->status >= 2 ? 'check' : 'times'  }}" ></i>
                    </div>
                    <div class="progress-step {{$proposal_cache->status >= 3 ? 'complete' : 'uncomplete'  }}">
                        <i class="fa fa-{{$proposal_cache->status >= 3 ? 'check' : 'times'  }}"  ></i>
                    </div>
                    <div class="progress-step last {{$proposal_cache->status >= 4 ? 'complete' : 'uncomplete'  }}">
                        <i class="fa fa-{{$proposal_cache->status >= 4 ? 'check' : 'times'  }}"  ></i>
                    </div>
                </div> <!-- end progress bg -->

                <div class="progress-labels" style="">
                    <div class="progress-label">Sent</div>
                    <div class="progress-label">Email opened</div>
                    <div class="progress-label">Proposal read</div>
                    <div class="progress-label">Signed</div>
                </div> <!-- end progress bg -->
            </div> <!-- end padding30 block -->

        </div> <!-- end grid 3 omega -->
    </div> <!-- end grid 12 omega main frame -->

    @else

    <div class="grid_12 nobottom">
        <h1 style="margin-bottom:20px ; text-align:center;">Proposal is neither Saved  nor Sent !</h1>
    </div> <!-- end grid 9 -->

    @endif

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Proposal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="newproposal" action="{{url('/')}}/proposals/add" method="post">
                <div class="modal-body">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control inp" placeholder="" required="true">

                    </div>

                    <div class="form-group">
                        <label for="">Select Template</label>
                        <select name="templateid" class="form-control inp" required="true">
                            <option value="" selected> Select </option>

                            @foreach(App\Template::where('user_id' , Auth::user()->id)->get() as $template)
                            <option value="{{$template->id}}"> {{$template->name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="">Choose Action</label>
                        <select name="action" class="form-control inp" required="true">
                            <option value="duplicate" selected> Duplicate </option>
                            <option value="exact"> Exact Template </option>

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


    $(document).ready(function () {
        $('body').css('background-color', '#e4e4e4 !important');



         // get Signature
            $('body').on('click' , '.acceptproposal', function (e) {
                e.preventDefault();
                acceptproposal();
            });


            function acceptproposal(){
                // console.log();


                $.ajax({
                    type: "POST",
                    url: "{{url('/')}}/proposal/accept/{{$proposal_cache->proposal->id}}",
                    data: {
                        signature : null,
                        _token : `{{csrf_token()}}`,

                    },
                    success: function(data){
                        console.log(data);
                        if(data.status == 200){
                            swal("Great", "Maked As Accepted", "success");

                        }
                        else{
                            swal("Ops", "Something is Not Working!", "warning");

                        }

                    }

                });


            }


            // decline

            $('body').on('click' , '.declineproposal', function (e) {
                e.preventDefault();

                declineproposal();
            });


            function declineproposal(){

                $.ajax({
                    type: "POST",
                    url: "{{url('/')}}/proposal/decline/{{$proposal_cache->proposal->id}}",
                    data: {
                        _token : `{{csrf_token()}}`,

                    },
                    success: function(data){
                        console.log(data);
                        if(data.status == 200){
                            swal("Thats lost!", "Proposal Marked as Lost", "success");
                        }
                        else{
                            swal("Ops", "Something is Not Working!", "warning");

                        }

                    }

                });


            }


    });







</script>

@endsection
