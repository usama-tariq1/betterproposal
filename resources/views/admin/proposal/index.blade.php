@extends('admin.Master.layout')


@section('content')





<!-- ============ Body content start ============= -->
<div class="main-content">
    <div class="breadcrumb">
        <h1 class="mr-2">Proposals</h1>
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
                            <p class="text-primary text-24 line-height-1 mb-2">Proposal</p>
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

            <div class="row">


                <div class="col-lg-4 col-xl-4 mb-4">
                    <div class="card o-hidden"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Second slide" />
                        <div class="user-profile ul-widget-app__profile--position mb-4">
                            <div class="ul-widget-card__user-info"><img class="profile-picture avatar-lg mb-2" src="../../dist-assets/images/faces/1.jpg" alt="alt" />
                                <p class="m-0 text-24 text-white">Timothy Carlson</p>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <div class="col text-center">
                                    <h3 class="display">25K</h3>
                                    <h5 class="display text-muted">Followers</h5>
                                </div>
                                <div class="col text-center">
                                    <h3 class="display">200</h3>
                                    <h5 class="display text-muted">Following</h5>
                                </div>
                                <div class="col text-center">
                                    <h3 class="display">25K</h3>
                                    <h5 class="display text-muted">Facebook</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-xl-4 mb-4">
                    <div class="card o-hidden"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Second slide" />
                        <div class="user-profile ul-widget-app__profile--position mb-4">
                            <div class="ul-widget-card__user-info"><img class="profile-picture avatar-lg mb-2" src="../../dist-assets/images/faces/1.jpg" alt="alt" />
                                <p class="m-0 text-24 text-white">Timothy Carlson</p>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <div class="col text-center">
                                    <h3 class="display">25K</h3>
                                    <h5 class="display text-muted">Followers</h5>
                                </div>
                                <div class="col text-center">
                                    <h3 class="display">200</h3>
                                    <h5 class="display text-muted">Following</h5>
                                </div>
                                <div class="col text-center">
                                    <h3 class="display">25K</h3>
                                    <h5 class="display text-muted">Facebook</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-xl-4 mb-4">
                    <div class="card o-hidden"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Second slide" />
                        <div class="user-profile ul-widget-app__profile--position mb-4">
                            <div class="ul-widget-card__user-info"><img class="profile-picture avatar-lg mb-2" src="../../dist-assets/images/faces/1.jpg" alt="alt" />
                                <p class="m-0 text-24 text-white">Timothy Carlson</p>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <div class="col text-center">
                                    <h3 class="display">25K</h3>
                                    <h5 class="display text-muted">Followers</h5>
                                </div>
                                <div class="col text-center">
                                    <h3 class="display">200</h3>
                                    <h5 class="display text-muted">Following</h5>
                                </div>
                                <div class="col text-center">
                                    <h3 class="display">25K</h3>
                                    <h5 class="display text-muted">Facebook</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4 mb-4">
                    <div class="card o-hidden"><img class="d-block w-100" src="../../dist-assets/images/products/headphone-1.jpg" alt="Second slide" />
                        <div class="user-profile ul-widget-app__profile--position mb-4">
                            <div class="ul-widget-card__user-info"><img class="profile-picture avatar-lg mb-2" src="../../dist-assets/images/faces/1.jpg" alt="alt" />
                                <p class="m-0 text-24 text-white">Timothy Carlson</p>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <div class="col text-center">
                                    <h3 class="display">25K</h3>
                                    <h5 class="display text-muted">Followers</h5>
                                </div>
                                <div class="col text-center">
                                    <h3 class="display">200</h3>
                                    <h5 class="display text-muted">Following</h5>
                                </div>
                                <div class="col text-center">
                                    <h3 class="display">25K</h3>
                                    <h5 class="display text-muted">Facebook</h5>
                                </div>
                            </div>
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
                <h5 class="modal-title" id="verifyModalContent_title">New Proposal</h5>
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
