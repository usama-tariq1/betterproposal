@extends('admin.Master.layout')


@section('content')





<!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1 class="mr-2">Users</h1>
        <ul>
            {{-- <li><a href="#">Add New</a></li> --}}
            {{-- <li></li> --}}
        </ul>

        <div class="btn btn-primary right" data-toggle="modal" data-target="#addnewuser"
            style="position:relative; right:0; margin-left: 55px;">
            Add New
        </div>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <section class="ul-widget-stat-s1">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4" data-toggle="modal"
                    data-target="#addnewuser">
                    <div class="card-body text-center"><i class="i-Add"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Add New</p>
                            <p class="text-primary text-24 line-height-1 mb-2">User</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Folder"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Manage</p>
                            <p class="text-primary text-24 line-height-1 mb-2">Users</p>
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
            <div class="card">
                <div class="card-body">
                    <div class="ul-widget__head v-margin">
                        <div class="ul-widget__head-label">
                            <h3 class="ul-widget__head-title">Users</h3>
                        </div>
                        <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><span
                                class="_dot _inline-dot bg-primary"></span><span
                                class="_dot _inline-dot bg-primary"></span><span
                                class="_dot _inline-dot bg-primary"></span></button>
                        <div class="dropdown-menu" x-placement="bottom-start"
                            style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another
                                action</a><a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="ul-widget-body">
                        <div class="ul-widget3">
                            <div class="ul-widget6__item--table">
                                <table class="table">
                                    <thead>
                                        <tr class="ul-widget6__tr--sticky-th">

                                            <th scope="col">Profile</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"> Email</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- start tr-->
                                        @foreach (App\User::where('role' , 2)->get() as $user )

                                        <tr>

                                            <td><span>
                                                    <div class="ul-widget_user-card">
                                                        <div class="ul-widget4__img">
                                                            @if($user->profile)
                                                            <img id="userDropdown"
                                                                src="{{url('/')}}/profileimage/{{$user->profile}}"
                                                                alt="" />
                                                            @else
                                                            <img id="userDropdown"
                                                                src="{{url('/')}}/dist-assets/images/faces/1.jpg"
                                                                alt="" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                </span></td>
                                            <td>{{$user->name}}</td>
                                            <td><span
                                                    class="badge badge-pill badge-outline-{{$user->status == 1 ? 'success' : 'danger' }} p-2 m-1">
                                                    {{$user->status == 1 ? 'Active' : 'Disabled' }} </span>
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td>
                                                <button class="btn bg-white _r_btn border-0" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><span
                                                        class="_dot _inline-dot bg-primary"></span><span
                                                        class="_dot _inline-dot bg-primary"></span><span
                                                        class="_dot _inline-dot bg-primary"></span></button>
                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                    style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">

                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item ul-widget__link--font"
                                                        href="{{url('/')}}/admin/user/{{$user->id}}/0"><i
                                                            class="i-Pen-3"></i> Disable
                                                    </a>
                                                    <a class="dropdown-item ul-widget__link--font"
                                                        href="{{url('/')}}/admin/user/{{$user->id}}/1"><i
                                                            class="i-Remove"></i> Activate
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <!-- end tr-->


                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>




{{-- Modal User New --}}


<div class="modal fade" id="addnewuser" tabindex="-1" role="dialog" aria-labelledby="addnewuser" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verifyModalContent_title">New User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name-2">First Name:</label>
                        <input class="form-control" name="firstname" type="text" />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name-2">Last Name:</label>
                        <input class="form-control" name="lastname" type="text" />
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name-2">Email:</label>
                        <input class="form-control" name="email" type="email" />
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name-2">Password:</label>
                        <input class="form-control" name="password" type="password" />
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
