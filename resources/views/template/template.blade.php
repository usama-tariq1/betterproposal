@extends('layouts.Master.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9  dash pl-3">
            <h3 class="mr-auto">Dashboard</h3>
        </div>
        <div class="col-md-3 dash">
              <button route="{{url('/')}}/template/add" class="create"><img src="{{asset('/assets/images/add-icon1.png')}}" width="40px" alt="">Create New Template</button>
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
                    <td><div class="right">
                        <button route="/template/preview/{{$template->code}}" class="btn">Preview</button>
                        <button class="btn">Duplicate</button>
                        <button route="/template/{{$template->id}}" class="btn">Edit</button>
                        <button route="/template/delete/{{$template->id}}" class="btn">Delete</button>
                    </div></td>
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
@endsection
