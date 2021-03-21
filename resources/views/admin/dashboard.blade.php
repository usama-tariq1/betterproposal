

@extends('admin.Master.layout')


@section('content')





            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1 class="mr-2"> </h1>
                    <ul>
                        <li><a href="#">Dashboard</a></li>
                        <li> </li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row mb-4">
                    <div class="col-md-3 col-lg-3">
                        <div class="card mb-4 o-hidden">
                            <div class="card-body ul-card__widget-chart">
                                <div class="ul-widget__chart-info">
                                    <h5 class="heading">Proposals</h5>
                                    <div class="ul-widget__chart-number">
                                        <h2 class="t-font-boldest">{{App\Proposal::count()}}</h2><small class="text-muted"> Total Proposals</small>
                                    </div>
                                </div>
                                <div id="basicArea-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="card mb-4 o-hidden">
                            <div class="card-body ul-card__widget-chart">
                                <div class="ul-widget__chart-info">
                                    <h5 class="heading">Approved Proposals</h5>
                                    <div class="ul-widget__chart-number">
                                        <h2 class="t-font-boldest">{{App\proposal_cache::where('status' , 4)->count()}}</h2><small class="text-muted"> Approved Proposals</small>
                                    </div>
                                </div>
                                <div id="basicArea-chart2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="card mb-4 o-hidden">
                            <div class="card-body ul-card__widget-chart">
                                <div class="ul-widget__chart-info">
                                    <h5 class="heading">Templates</h5>
                                    <div class="ul-widget__chart-number">
                                        <h2 class="t-font-boldest">{{App\Template::count()}}</h2><small class="text-muted">Total Template Created</small>
                                    </div>
                                </div>
                                <div id="basicArea-chart3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="card mb-4 o-hidden">
                            <div class="card-body ul-card__widget-chart">
                                <div class="ul-widget__chart-info">
                                    <h5 class="heading">Users</h5>
                                    <div class="ul-widget__chart-number">
                                        <h2 class="t-font-boldest">{{(App\User::count())-1}}</h2><small class="text-muted">Total Users</small>
                                    </div>
                                </div>
                                <div id="basicArea-chart4"></div>
                            </div>
                        </div>
                    </div>
                    <!-- finance-->
                    <div class="col-md-12 col-lg-8 mt-4">
                        <div class="card o-hidden h-100">
                            <div class="card-header bg-transparent">
                                <div class="row" style="align-items: center;">
                                    <div class="col-md-6">
                                        <div class="ul-card-widget__head-label">
                                            <h5 class="text-18 font-weight-700 card-title">Finance Summary</h5>
                                        </div>
                                    </div>
                                    <div class="text-right col-md-6">
                                        <button class="btn btn-outline-primary" type="button">Summary View</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="text-muted text-14 font-weight-500">Final Commission Revenue</h3><span class="text-muted text-18 font-weight-600">$790,420</span>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="text-muted text-14 font-weight-500">Final Commission Revenue</h3><span class="text-muted text-18 font-weight-600">July 25,2019</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="spark2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-4">
                        <div class="card mb-4 h-100">
                            <div class="card-body">
                                <div class="card-title">Sales by Countries</div>
                                <div id="stackedPie" style="height: 250px;"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- end of row-->
                <!-- end of main-content -->
            </div>







@endsection
