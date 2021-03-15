<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Eproposal</title>

        <link rel="stylesheet" href="{{url('/')}}/assets/css/coverdesign.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
        </script>

    </head>

    <body>


        <div class="app">
            <div class="cover" style="">
                {{-- <img src="{{$cover->cover ? '{{url('/')}}/covers/{{$cover->cover}}' : '' }}" class="coverimage" alt=""> --}}

                @if($cover->cover)
                    <img src="{{url('/')}}/covers/{{$cover->cover}}" class="coverimage" alt="">
                @else
                    <img src="" class="coverimage" alt="">

                @endif
            </div>


            <div class="body">

                <form id="updatecover" action="{{url('/')}}/cover/update/{{$cover->id}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >

                    <div class="actions">
                        <div class="btn btn-primary image ">
                            Change Cover Image
                        </div>
                        <div class="btn btn-primary save">Save</div>

                        @if(isset($_GET['proposal_id']))



                            @php
                                $proposal = App\Proposal::where('id', $_GET['proposal_id'])->first();
                            @endphp

                            <a href="{{url('/')}}/template/{{$proposal->template_id}}?proposal_id={{$proposal->id}}">
                                <div class="btn btn-primary ">Next</div>

                            </a>
                        @endif

                    </div>


                    <div class="logo">
                        {{-- @if($cover->cover )
                            <img src="{{url('/')}}/companylogo/{{$cover->company_logo}}" class="img active">
                        @else --}}
                            <img src="{{url('/')}}/companylogo/default.png" class="img default">
                        {{-- @endif --}}
                    </div>
                    <div class="lineone">
                        Proposal for
                        <span class="editor">
                            <input type="text" name="cover_for" class="inp" id="" value="{{@$cover->cover_for}}">
                        </span>
                    </div>
                    <div class="linetwo">
                        Written by
                        <span class="editor">
                            <input type="text" name="cover_from" class="inp" id=""
                            value="{{@$cover->cover_from}}" >
                        </span>

                        for
                        <span class="editor">
                            <input type="text" name="cover_to" class="inp" id=""
                            value="{{@$cover->cover_to}}" >
                        </span>
                    </div>


                    <div class="btnholder">
                        <a href="" class="btn btn-bar btn-primary previewbtn">
                            Read Your Proposal
                        </a>
                    </div>


                    <input type="file" name="cover" style="display:none;" >





                    {{-- <div class="to">

            </div> --}}

                </form>
            </div>

        </div>



        <script>
            $(document).ready(function () {
                $('.image').click(function () {
                    $('input[name=cover]').trigger('click');
                });

                $('input[name=cover]').change(function () {
                    var fileinput = $(this);


                    var file = $(fileinput)[0].files[0];
                    var reader = new FileReader();


                    reader.readAsDataURL(file);

                    reader.onload = function (e) {

                        $('.coverimage').attr('src', e.target.result);
                        // $('.cover').css('background-image' ,e.target.result );
                        // $(block).attr('state', 'active');
                    }
                });


                $('.save').click(function(){
                    $('#updatecover').submit();
                });


            });




        </script>


    </body>

</html>
