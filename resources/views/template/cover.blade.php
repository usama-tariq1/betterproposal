@extends('layouts.Master.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9  dash pl-3">
            <h3 class="mr-auto">Covers</h3>
        </div>
        <div class="col-md-3 dash">
            <button class="create" data-toggle="modal" data-target="#modelId">
                <img src="{{asset('/assets/images/add-icon1.png')}}" width="40px" alt="">
                Create New Cover
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="menu" style="">
                @include('template.partials.tabpills')
            </div>
        </div>
    </div>
    <div class="row tbl mt-3 pb-5 pt-3">

        @foreach (App\Covers::where('user_id' , Auth::user()->id )->get() as $cover )



        <div class="card ml-5 text-center" style="width: 18rem;">
            {{-- <img class="card-img-top" src="{{url('/')}}/covers/{{$cover->cover}}" alt="Card image cap"> --}}
            @if($cover->cover)
                <img class="card-img-top" src="{{url('/')}}/covers/{{$cover->cover}}" alt="Card image cap">
            @else
                <div style="width: 100% ; height:150px; background-color:black;"  ></div>
            @endif
            <div class="card-body">
                <h5 class="card-title">{{$cover->name}}</h5>

                @if ($cover->brand_id)

                <div class="right" style="float: none !important;">
                    <button route="{{url('/')}}/cover/edit/{{$cover->id}}" type="button" class="btn">Edit</button>
                    <button route="{{url('/')}}/cover/delete/{{$cover->id}}" type="button" class="btn">Delete</button>
                </div>

                @else
                <div class="right" style="float: none !important;">
                    <button  type="button" data-toggle="modal" data-target="#setupbrand{{$cover->id}}" class="btn">Setup Brand</button>

                    <div class="modal fade" id="setupbrand{{$cover->id}}" role="dialog" aria-labelledby="modelId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Setup Brand</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="addcover" action="{{url('/')}}/cover/setup/brand/{{$cover->id}}" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="form-group">
                                            <label for="">Name of Cover</label>
                                            <input type="text" name="name" id="" class="form-control inp" value="{{$cover->name}}" required="true" placeholder="Name..">

                                        </div>

                                        <div class="form-group">
                                            <label for="">Brand</label>
                                            <select name="brand_id" id="" class="form-control inp" required="true" errname="Brand">
                                                <option value=""> Select Brand</option>
                                                @foreach (App\Brand::where("user_id" , Auth::user()->id)->get() as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


                @endif
            </div>
        </div>

        @endforeach

    </div>


    {{-- <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" >
        Launch
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="modelId" role="dialog" aria-labelledby="modelId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Cover</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addcover" action="{{url('/')}}/cover/add" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="">Name of Cover</label>
                            <input type="text" name="name" id="" class="form-control inp" required="true" placeholder="Name..">

                        </div>

                        <div class="form-group">
                            <label for="">Brand</label>
                            <select name="brand_id" id="" class="form-control inp" required="true" errname="Brand">
                                <option value=""> Select Brand</option>
                                @foreach (App\Brand::where("user_id" , Auth::user()->id)->get() as $brand)
                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>

                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="addcover('addcover')" class="btn btn-primary">next</button>
                </div>
            </div>
        </div>
    </div>

</div>


<script>


$(document).ready(function(){


});

function addcover(formid){
    var validation = validateform(`#${formid}`);

    console.log(validation);

    if(validation.errors < 1){
        $(`#${formid}`).submit();
    }
}





</script>


@endsection
