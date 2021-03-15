@extends('proposal.add.layout.layout')

@section('content')


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">



<style>
    .navbar-nav>.nav-item {
        padding: 8px 10px;
        height: fit-content;
        height: 35px;
        /* height: fit-content; */
        width: auto;
    }

    .navbar-nav>.nav-item>p {
        margin-top: 0;
        /* margin-bottom: 1rem; */
        margin-top: -3px;

    }

    .navbar-nav>.nav-item:hover {
        cursor: pointer;
    }

</style>


<div class="" style="position:fixed; top: 0 ; left:0; width: 100%; z-index: 200;">
    <!---------------------------navbar start-------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{-- <a id="cancel-btn" href="{{ url('/template') }}" class="btn start-head-btn" style="display:
        block;">Back</a> --}}
        <button id="send-btn" class="btn start-head-btn  " style="background-color: #cfcfcf; color:rgb(0, 0, 0); "><a
                href="{{url()->previous()}}">Cancel</a></button>
        {{-- <button id="send-btn" onclick="prestep()" class="btn start-head-btn backbtn step2"
                    style="background-color: #46BD78; color:#fff; display:none">Back</button>

        <button id="send-btn" onclick="tostep(0)" class="btn start-head-btn backbtn step1"
                    style="background-color: #46BD78; color:#fff; display:none">Back</button> --}}


        <button id="send-btn" step="0" class="btn start-head-btn btn-back step2"
            style="background-color: #46BD78; color:#fff; display:none">Back</button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto"
                style="position: relative; left: 26%; transform: translateX(-50%);">
                <style>
                    .activenav{
                        font-weight: 700;
                    }
                </style>
                <li class="nav-item activenav ">
                    <p class="">Details ></p>
                </li>
                <li class="nav-item">
                    <p class="">Cover ></p>
                </li>
                <li class="nav-item">
                    <p class="">Proposal ></p>
                </li>

                <li class="nav-item">
                    <p class="">Send</p>
                </li>
            </ul>
            <input type="hidden" id="stepValue" value="b" />
            <div class="ml-auto">
                {{-- <button id="send-btn" onclick="nextstep('proposalform')" class="btn start-head-btn step1"
                    style="background-color: #46BD78; color:#fff; ">Next</button> --}}
                {{-- <button id="send-btn " onclick="save('proposalform')" class="btn start-head-btn step2"
                style="background-color: #46BD78; color:#fff; display:none; ">Next</button> --}}

                <button id="send-btn " step="0" class="btn start-head-btn btn-next"
                    style="background-color: #46BD78; color:#fff;  ">Next</button>


            </div>

        </div>
    </nav>
    <!---------------------------navbar end-------------------------------->
</div>






<form id="proposalform" action="{{url('/')}}/proposals/add" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">




    <section id="section1" class="section contacttype step0">
        <div class="container">
            <h3 class="text-center pt-5 mt-5 startheading">Who would you like to send a proposal to?</h3>
            <div class="container text-center mt-5 pt-5">
                <div class="row type">
                    <div class="col-md-6 excontact">
                        <a role="button">
                            <div class="start-div-btn p-5">
                                <img class="pb-4" src="{{ asset('assets/images/start-existing.png') }}" alt="">
                                <p>An Existing Contact</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 newcontact">
                        <a role="button">
                            <div class="start-div-btn p-5">
                                <img class="pb-4" src="{{ asset('assets/images/start-new.png') }}" alt="">
                                <p>A New Contact</p>
                            </div>
                        </a>
                    </div>

                </div>
                <div class=" row choose" style="display:none ;">
                    <div class="col-md-12 ">
                        <a role="button">
                            <div class="start-div-btn p-5">
                                <label for="">Choose Contact</label>
                                <select name="contact_id" class="form-control" id="">
                                    <option value="">Choose Contact</option>
                                    <option value="">New Contact</option>


                                    @foreach (App\contact::where("user_id" , Auth::user()->id)->get() as $contact )
                                    <option value="{{$contact->id}}">{{$contact->firstname}} ({{$contact->email}})
                                    </option>
                                    @endforeach

                                </select>

                                <br><br>
                                <button class="btn btn-primary btn-next" step="0">Skip</button>
                                <button class="btn btn-success btn-next" step="0">Save</button>

                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>




    <section id="section2" style="margin-top: 80px; display:none; " class="section step1 ">


        <div class="container">
            <div class="col-md-12">
                <div class="details-div text-center m-5">
                    <div class="detail-form p-5">

                        <div class="form-group">
                            <div class="form-group">

                                <label for="option1">Name Your Proposal</label>
                                <input type="text" name="proposal_name" class="form-control inp " required="true"
                                    placeholder="Proposal Name">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="col-md-12">
                <div class="details-div text-center m-5">
                    <div class="detail-form p-5">

                        <div class="form-group">
                            <div class="form-group">
                                <label for="option1">Which Company do you want to send to?</label>
                                <input type="text" name="company_name" class="form-control inp" required="true"
                                    placeholder="Company Name">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="details-div text-center m-5">
                    <div class="detail-form p-5">

                        <div class="form-group">
                            <div class="form-group ">
                                <label for="option1">Which Template do you want to use?</label>
                                <select name="template_id" class="form-control inp" required="true">
                                    <option selected value="">--Select a Template--</option>
                                    <option value="-1">Start from scratch without a Template</option>
                                    @foreach( App\Template::where('user_id' , Auth::user()->id)->get() as $template)
                                    <option value="{{$template->id}}">{{$template->name}}</option>
                                    @endforeach

                                </select>
                                {{-- <select class="mt-3 form-control">
                                <option selected>Template Name</option>
                            </select> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="col-md-12">
                <div class="details-div text-center m-5">
                    <div class="detail-form p-5">

                        <div class="form-group">
                            <div class="form-group ">
                                <label for="option1">Select Your Brand</label>
                                <select name="brand_id" class="form-control inp" required="true">
                                    <option selected value="">--Select a Brand--</option>

                                    @foreach( App\Brand::where('user_id' , Auth::user()->id)->get() as $brand)
                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach

                                </select>
                                {{-- <select class="mt-3 form-control">
                                <option selected>Template Name</option>
                            </select> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <div class="details-div text-center m-5">
                    <div class="detail-form p-5">

                        <div class="form-group">
                            <div class="form-group">
                                <label for="option1">How are you going to charge for this?</label>
                                <label class="pt-3" for="">Currency</label>
                                <select class="form-control">
                                    <option selected>US Dollar (USD)</option>
                                </select>
                                <label class="pt-4" for="">Do you charge tax on top of your prices?</label>
                                <select class=" form-control">
                                    <option selected>No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class=" coverselection step2" style="margin-top: 80px; padding:50px ; display:none;">
        <style>
            .card {
                margin: 10px;
                width: 300px;
                height: 200px;
                background-origin: content-box;
                background-position: top left;
                background-size: cover;
                padding: 0px;
                cursor: pointer;

            }

            .card>.body {
                width: 100%;
                height: 100%;
                background-color: #00000087;
                color: white;
            }

            .card>.body>.name {
                position: relative;
                width: fit-content;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: white;
                font-size: 22px;
                font-weight: bold;
                padding: 10px;
            }

        </style>

        <div class="row">

            <div class="card p-1 covercard" id="-1" style="border: 4px solid green">
                <div class="body">
                    <div class="name">Start From Scratch</div>
                </div>
            </div>

            @foreach(App\Covers::where('user_id' , Auth::user()->id)->get() as $cover)

            <div class="card p-1 covercard" id="{{$cover->id}}"
                style="background-image: url('{{url('/')}}/covers/{{$cover->cover}}'); ">
                <div class="body">
                    <div class="name">
                        {{$cover->name}}
                    </div>

                </div>
            </div>

            @endforeach





        </div>

        <select name="cover_id" id="coverid" style="visibility:hidden;">
            <option selected value="-1">Start</option>
            @foreach(App\Covers::where('user_id' , Auth::user()->id)->get() as $cover)
            <option value="{{$cover->id}}">{{$cover->name}}</option>
            @endforeach
        </select>

    </section>

</form>


<script src="{{url('/')}}/assets/js/validateform.js"></script>


<script type="text/javascript" defer>
    function save(formid) {
        var validation = validateform(`#${formid}`);



        console.log(validation);
        if (validation.errors < 1) {
            $(`#${formid}`).submit();
            $(".btn-next").attr('step', 2);
            $(".btn-back").attr('step', 1);

        }



    }


    function nextstep(formid) {
        var validation = validateform(`#${formid}`);



        // console.log(validation);
        if (validation.errors < 1) {
            // $(`#${formid}`).submit();
            $('.step1').hide();
            $('.step2').show();
            $(".btn-next").attr('step', 2);
            $(".btn-back").attr('step', 1);


        }



    }

    $('.newcontact').click(function (e) {
        e.preventDefault();
        $('.step1').show();
        $('.step0').hide();
        $(this).attr('step', 1);
        $('.btn-back').show();


    });

    $('.excontact').click(function (e) {
        e.preventDefault();

        $('.contacttype').find('.type').hide();
        $('.contacttype').find('.choose').show();



    });

    function tostep(step) {
        $('section').hide();
        $(`.step${step}`).show();
    }

    function prestep() {
        $('.step1').show();
        $('.step2').hide();
    }

    $('.covercard').click(function () {
        var id = $(this).attr('id');
        $('#coverid').val(id);
        $('.covercard').css("border", "0px");
        $(this).css("border", "4px solid green");
    });

    $('.btn-next').click(function (e) {
        var step = $(this).attr("step");


        if (step == 0) {
            e.preventDefault();
            $('.step1').show();
            $('.step0').hide();
            $(".btn-next").attr('step', 1);
            $(".btn-back").attr('step', 0);

            $('.btn-back').show();
        } else if (step == 1) {
            nextstep('proposalform');


        }
        else if(step == 2) {
            save('proposalform')
        }



    });

    $('.btn-back').click(function (e) {
        var step = $(this).attr("step");
        if (step == 0) {
            e.preventDefault();
            $('.step1').hide();
            $('.step0').show();
            $(".btn-back").hide();
            $('.btn-next').attr('step', 0);
        } else if (step == 1) {
            e.preventDefault();
            $('.step2').hide();
            $('.step1').show();
            // $(".btn-back").hide();
            $('.btn-next').attr('step', 1);
            $(".btn-back").attr('step', 0);



        }

    });

</script>




@endsection
