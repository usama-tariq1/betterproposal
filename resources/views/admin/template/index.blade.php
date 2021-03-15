@extends('admin.Master.layout')


@section('content')





<!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1 class="mr-2">Templates</h1>
        <ul>
            {{-- <li><a href="#">Add New</a></li> --}}
            {{-- <li></li> --}}
        </ul>

        {{-- <div class="btn btn-primary right" data-toggle="modal" data-target="#addnewtemplate"
            style="position:relative; right:0; margin-left: 55px;">
            Add New
        </div> --}}

        <div class="btn btn-primary right"
            style="position:relative; right:0; margin-left: 55px;">
            <a href="{{url('/')}}/template/add" style="color:white;"> Add New </a>
        </div>


    </div>
    <div class="separator-breadcrumb border-top"></div>

    <section class="ul-widget-stat-s1">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="{{url('/')}}/template/add">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4" >
                        <div class="card-body text-center"><i class="i-Add"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Add New</p>
                                <p class="text-primary text-24 line-height-1 mb-2">Template</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Folder"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Manage</p>
                            <p class="text-primary text-24 line-height-1 mb-2">Templates</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Feedburner"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Active </p>
                            <p class="text-primary text-24 line-height-1 mb-2">80</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-File-Horizontal-Text"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Opinion</p>
                            <p class="text-primary text-24 line-height-1 mb-2">1200</p>
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



                @foreach (App\Template::where('user_id' , Auth::user()->id )->get() as $template )



                    <div class="col-md-4">
                        <div class="card mb-4 o-hidden"><img class="card-img-top"
                                src="../../dist-assets/images/photo-wide-3.jpg" alt="" />
                            <div class="card-body">
                                <h5 class="card-title">{{$template->name}}</h5>
                                <p class="card-text">{{$template->description}}</p>
                            </div>
                            {{-- <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul> --}}
                            <div class="card-body">
                                <a class="card-link" href="{{url('/')}}/template/{{$template->id}}">Edit</a>
                                <a class="card-link" href="{{url('/')}}/template/preview/{{$template->code}}">Preview</a>
                                <a class="card-link" href="{{url('/')}}/template/delete/{{$template->id}}">Delete</a>

                            </div>
                        </div>
                    </div>

                @endforeach












            </div>

        </div>


    </div>

</div>




{{-- Modal User New --}}


<div class="modal fade" id="addnewtemplate" tabindex="-1" role="dialog" aria-labelledby="addnewtemplate"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verifyModalContent_title">New Template</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name-2"> Name:</label>
                        <input class="form-control" name="name" type="text" />
                    </div>



                    <div class="form-group">
                        <label class="col-form-label" for="message-text-1">Description:</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button">Submit</button>
            </div>
        </div>
    </div>
</div>





@endsection
