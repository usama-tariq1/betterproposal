<div class="tbl pt-4 pl-3">
    <input class="tbl-search" id="searchinput" type="text" placeholder="Search by Company">
    <table  class="table mt-4">
      <thead>
        <tr>
          <th class="pl-5" scope="col">Name</th>
          <th class="pl-5"scope="col">Description</th>
          <th class="pl-5" scope="col">Actions</th>
        </tr>
      </thead>
      <tbody id="table">
        @foreach($proposals as $proposal)

            <tr>
                <td class="pl-5">
                    <a href="{{url('/')}}/proposals/detail/{{$proposal->id}}">
                        {{$proposal->name}}
                    </a>
                </td>
                <td class="pl-5">{{$proposal->description}}</td>
                {{-- <td class="pl-5">{{$proposal->template->name}}</td> --}}

                <td class="pl-5">

                    <button type="button" route="{{url('/')}}/proposals/detail/{{$proposal->id}}"  class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    <button type="button" route="{{url('/')}}/proposals/detail/{{$proposal->id}}" class="btn btn-success"><i class="fa fa-edit"></i></button>
                    <button type="button" route="{{url('/')}}/proposals/delete/{{$proposal->id}}" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>

                </td>
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




  <script>
    $(document).ready(function(){
        $("#searchinput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#table tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
  </script>
