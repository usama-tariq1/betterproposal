@extends('pages.Master.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="center">
                <div class="tbl mt-5">
                <div class="report">
                    <div class="report-head p-4">
                        <h4>Reports</h4>
                        <p>Company or team reporting, all on one page.</p>
                    </div>
                    <div class="report-body p-4">
                        <form>
                            <div class="form-group">
                              <label for="reportFrom">Run report from:</label>
                              <input type="date" class="form-control" id="reportFrom1">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Until:</label>
                              <input type="date" class="form-control" id="until1">
                            </div>
                            <div class="form-group">
                                <label for="option1">What type of report do you want to run?</label>
                                <select class="form-control" >
                                    <option selected>Company Report</option>
                                    <option value="1">User Report</option>
                                  </select>
                            </div>
                            <button type="submit" class=" mt-4 report-btn btn btn-primary">Generate Report</button>
                          </form>
                    </div>
                </div>
            </div>
            </div>  
    </div>
</div>
@endsection