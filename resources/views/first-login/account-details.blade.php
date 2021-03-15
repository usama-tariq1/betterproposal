@extends('first-login.Master.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" justify-content-center text-div" style="top: 100px;">
                    <div class="content-div p-5">
                        <form>
                            <div class="form-group">
                                <label for="option1">Which timezone are you in?</label>
                                <select class="form-control" >
                                    <option selected>Choose Timezone</option>
                                    <option value="1">London-05:46</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="option1">Default currency</label>
                                <select class="form-control" >
                                    <option selected>Choose currency</option>
                                    <option value="1">US Dollar(USD)</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="option1">How many people write proposal in your company?</label>
                                <select class="form-control" >
                                    <option selected>--Select--</option>
                                  </select>
                            </div>
                            <button class="btn mt-3 create">Next: Company Details</button>
                          </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection