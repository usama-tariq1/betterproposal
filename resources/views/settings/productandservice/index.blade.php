@extends('settings.Master.app')
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .create-products {
        display: block !important;
    }

    .anchor {
        text-decoration: underline;
    }

</style>

@if(\Session::has('message'))
<div class="toast" data-autohide="false">
    <div class="toast-header">
        <strong class="mr-auto text-primary">Product </strong>
        <small class="text-muted">Just now</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        {{\Session::get('message')}}
    </div>
</div>

@endif


<div class="padding60 overflow block">

    <div class="header" style="display: flex; justify-content: space-between; margin-bottom:35px;">


        <h2>Products and Services</h2>

        <button class="create" data-toggle="modal" data-target="#createnewproduct">
            <img src="{{asset('assets/images/add-icon1.png')}}" width="40px" alt="">
            Create New Product
        </button>
    </div>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            @foreach (App\Product::where('user_id' , Auth::user()->id)->get() as $product)
            <tr>
                <td>
                    <a class="anchor" href="">{{$product->name}}</a>
                </td>
                <td>
                    <div class="right">
                        {{-- <a href="javascript:void(0);" onclick="javascript:duplicate_product(982579);">
                                <div class="button white small"><span class="icon-duplicate"></span>Duplicate</div>
                            </a> --}}
                        {{-- <a href="{{url('/')}}/product/edit/{{$product->id}}">
                            <div class="button white small"><span class="icon-edit"></span>Edit</div>
                        </a> --}}

                        <div class="button white small editbtn " productid="{{$product->id}}" data-toggle="modal" data-target="#editproduct">
                            <span class="icon-edit"></span>
                            Edit
                        </div>

                        <a href="{{url('/')}}/product/delete/{{$product->id}}">
                            <div class="button white small"><span class="icon-archive"></span>Archive</div>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="modal fade" id="createnewproduct" role="dialog" aria-labelledby="modelId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addtemplate" action="{{url('/')}}/product/add" method="post">
                <div class="modal-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="">Name of Product</label>
                        <input type="text" name="name" id="" class="form-control inp" errname="Template Name"
                            required="true" placeholder="Name..">

                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="editproduct" role="dialog" aria-labelledby="modelId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  id="editproductform" action="{{url('/')}}/product/add" method="post">
                <div class="modal-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="">Name of Product</label>
                        <input type="text" name="name" id="" class="form-control inp" errname="Template Name"
                            required="true" placeholder="Name..">

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



<script>
$(document).ready(function(){
    $('.toast').toast('show');




    $('.editbtn').click(function(){
        var productid = $(this).attr('productid');
        $.ajax({
            url : `{{url('/')}}/product/get/${productid}`,
            method : 'GET',
            success : function(data){
                $('#editproductform').attr('action' , `{{url('/')}}/product/update/${data.id}`);
                $('#editproduct').find('input[name=name]').val(data.name);
            }

        });
    });


});








</script>

@endsection
