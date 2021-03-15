@extends('admin.Master.layout')


@section('content')





<!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1 class="mr-2">Covers</h1>
        <ul>
            {{-- <li><a href="#">Add New</a></li> --}}
            {{-- <li></li> --}}
        </ul>

        <div class="btn btn-primary right" data-toggle="modal" data-target="#addnewcover"
            style="position:relative; right:0; margin-left: 55px;">
            Add New
        </div>

        {{-- <div class="btn btn-primary right"
            style="position:relative; right:0; margin-left: 55px;">
            <a href="{{url('/')}}/template/add" style="color:white;"> Add New </a>
        </div> --}}


    </div>
    <div class="separator-breadcrumb border-top"></div>

    <section class="ul-widget-stat-s1">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4" >
                        <div class="card-body text-center"><i class="i-Add"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Add New</p>
                                <p class="text-primary text-24 line-height-1 mb-2">Covers</p>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Folder"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Manage</p>
                            <p class="text-primary text-24 line-height-1 mb-2">Covers</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="row mb-4">

        <!-- table-->
        <div class="col-lg-12 col-xl-12 mt-12">

            <div class="row">



                @foreach (App\Covers::where('user_id' , Auth::user()->id )->get() as $cover )



                    <div class="col-md-4">
                        <div class="card mb-4 o-hidden"><img class="card-img-top"
                                src="{{url('/')}}/covers/{{$cover->cover}}" alt="" />
                            <div class="card-body">
                                <h5 class="card-title">{{$cover->name}}</h5>
                                {{-- <p class="card-text">{{$cover->description}}</p> --}}
                            </div>
                            {{-- <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul> --}}
                            <div class="card-body">
                                <a class="card-link" href="{{url('/')}}/cover/{{$cover->id}}">Edit</a>
                                <a class="card-link" href="{{url('/')}}/cover/preview/{{$cover->id}}">Preview</a>
                                <a class="card-link" href="{{url('/')}}/cover/delete/{{$cover->id}}">Delete</a>

                            </div>
                        </div>
                    </div>

                @endforeach












            </div>

        </div>


    </div>

</div>




{{-- Modal User New --}}


<div class="modal fade" id="addnewcover" tabindex="-1" role="dialog" aria-labelledby="addnewcover"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verifyModalContent_title">New Template</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form id="newcover" action="{{url('/')}}/admin/covers/add/" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="_token"  value="{{csrf_token()}}">
                    <div class="step1" style="">
                        <div class="form-group">
                            <label class="col-form-label" for="recipient-name-2"> Name:</label>
                            <input class="form-control" name="name" type="text" />
                        </div>


                        <button  class="btn btn-primary" type="button" onclick="setname()" >Next</button>
                    </div>

                    <div class="step2" style="display:none;" >

                        <div class="form-group">
                            <label class="col-form-label" for="recipient-name-2"> Proposal For :</label>
                            <input class="form-control inp" required="true" name="for" type="text" />
                        </div>


                        <div class="form-group">
                            <label class="col-form-label" for="recipient-name-2"> Proposal to :</label>
                            <input class="form-control inp" required="true" name="to" type="text" />
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="recipient-name-2"> Proposal from :</label>
                            <input class="form-control inp" required="true" name="cover_from" type="text" />
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="recipient-name-2"> Cover Image :</label>
                            <input class="form-control inp " required="true" name="cover" type="file" />
                        </div>


                        <img src="" id="coverpreview" alt="" style="width: 100%;">



                        <button  class="btn btn-primary" type="button" onclick="addcover()" style="margin-top: 20px;" >
                            Next
                        </button>

                    </div>




                    {{-- <div class="form-group">
                        <label class="col-form-label" for="message-text-1">Brand:</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                {{-- <button class="btn btn-primary" type="button">Next</button> --}}
            </div>
        </div>
    </div>
</div>

<script src="{{url('/')}}/assets/js/validateform.js"></script>

<script defer>


    function setname(){


        var name = $('input[name="name"]');

        if(name.val().length < 1){

            name.after(`<div class="errlabel" style="color:red;"> Name is required! </div>`);

            return ;
        }


        $('.step1').hide();
        $('.step2').show();


    }

    function addcover(){
        var formid  = "newcover";
        var validation = validateform(`#${formid}`);
        // console.log(validation);

        if(validation.errors < 1){
            $(`#${formid}`).submit();
        }


    }

    $(document).ready(function(){
        $('input[name=cover]').change(function(){
            var fileinput = $('input[name=cover]');


            var file = $(fileinput)[0].files[0];
            var reader = new FileReader();


            reader.readAsDataURL(file);

            reader.onload = function (e) {

                $('#coverpreview').attr('src', e.target.result);
                // $(block).attr('state', 'active');
            }
        });
    });

</script>



@endsection
