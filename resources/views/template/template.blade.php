@extends('layouts.Master.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9  dash pl-3">
            <h3 class="mr-auto">Dashboard</h3>
        </div>
        <div class="col-md-3 dash">
            {{-- <button route="{{url('/')}}/template/add" class="create"><img
                src="{{asset('/assets/images/add-icon1.png')}}" width="40px" alt="">Create New Template</button> --}}

            <button class="create" data-toggle="modal" data-target="#modelId">
                <img src="{{asset('/assets/images/add-icon1.png')}}" width="40px" alt="">
                Create New Template
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="menu" style="float: left;">
                {{-- tabs --}}

                @include('template.partials.tabpills')
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-12">
            <div class="tbl pt-4 pl-3">
                <input class="tbl-search" type="text" placeholder="Search by template name...">
                <h4 class="pt-4 pl-3">Name</h4>
                <table class="table mt-4">
                    <thead>
                    </thead>
                    <tbody>
                        @foreach($templates as $template)

                        <tr>
                            <td class="">{{$template->name}}</td>

                            @if($template->brand_id)
                            <td>
                                <div class="right">
                                    <button route="/template/preview/{{$template->code}}" class="btn">Preview</button>
                                    <button class="btn">Duplicate</button>
                                    <button route="/template/{{$template->id}}" class="btn">Edit</button>
                                    <button route="/template/delete/{{$template->id}}" class="btn">Delete</button>
                                </div>
                            </td>


                            @else
                            <td>
                                <div class="right">
                                    <button class="btn" data-toggle="modal" data-target="#setupbrand{{$template->id}}">Set Up Brand</button>

                                    <div class="modal fade" id="setupbrand{{$template->id}}" role="dialog" aria-labelledby="modelId"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Setup Brand</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="addtemplate" action="{{url('/')}}/template/setup/brand/{{$template->id}}"
                                                    method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <div class="form-group">
                                                            <label for="">Name of Template</label>
                                                            <input type="text" name="name" id=""
                                                                class="form-control inp" errname="Template Name"
                                                                required="true" placeholder="Name.." value="{{$template->name}}">

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Brand</label>
                                                            <select name="brand_id" id="" class="form-control inp"
                                                                required="true" errname="Brand">
                                                                <option value=""> Select Brand</option>
                                                                @foreach (App\Brand::where("user_id" ,
                                                                Auth::user()->id)->get() as $brand)
                                                                <option value="{{$brand->id}}">{{$brand->brand_name}}
                                                                </option>
                                                                @endforeach
                                                            </select>

                                                        </div>



                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                        <button type="submit"
                                                        class="btn btn-primary">update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </td>
                            @endif
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <nav aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center pb-5">
                        <li class="page-item pg-active">
                            <a class="page-link" href="#" tabindex="-1">1</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>




<div class="modal fade" id="modelId" role="dialog" aria-labelledby="modelId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addtemplate" action="{{url('/')}}/template/add" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="">Name of Template</label>
                        <input type="text" name="name" id="" class="form-control inp" errname="Template Name"
                            required="true" placeholder="Name..">

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
                <button type="button" onclick="addtemplate('addtemplate')" class="btn btn-primary">next</button>
            </div>
        </div>
    </div>
</div>


<script>
    function addtemplate(formid) {
        var validation = validateform(`#${formid}`);

        console.log(validation);

        if (validation.errors < 1) {
            $(`#${formid}`).submit();
        }
    }

</script>

@endsection
