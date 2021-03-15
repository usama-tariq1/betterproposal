@extends('template.layout.preview')

@section('content')



    @php
        if(isset($_GET['proposalid'])){
            $proposalid = $_GET['proposalid'];
            $proposal =  App\Proposal::where([
                "id" => $proposalid,
            ])
            ->with('brand')
            ->with('brand.brand_settings')
            ->with('template')
            ->first();

            $proposal_cache = App\proposal_cache::where('proposal_id' , $proposalid)->first();
            if($proposal_cache->status < 2){
                $proposal_cache->status = 3;
                $proposal_cache->save();
            }

            $cover = App\Covers::where('id' , $proposal->cover_id)->first();
            // dd($cover);

        }
    @endphp


    <link rel="stylesheet" href="{{url('/')}}/assets/css/template.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/4e17hcsz7xaiwpc4kl341dgdyg51t6izulk882z4k4af675c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('/')}}/assets/css/coverdesign.css">

    <section id="proposal" style="{{isset($_GET['proposalid']) ? 'display:none;' : '' }}" class="section" >
        <div id="container">

            <div class="navigation">
                <div class="navigate">

                    <div class="logo-holder">
                        @if(isset($proposal))
                            <img width="100%" src="{{url('/')}}/companylogo/{{$proposal->brand->company_logo}}"
                            class="logo p-3">
                        @else
                            <img width="100%" src="https://betterproposals.io/2/img/layout/NEW_BlackYourLogo.png"
                            class="logo p-3">
                        @endif
                    </div>



                    <div class="sectionlist" id="sectionlist" >

                    </div>


                    @if(isset($_GET['proposalid']))
                    <a href="{{url('/')}}/proposal/pdf/{{$proposal->id}}" target="_blank" class="btn btn-primary">
                        Download as Pdf
                    </a>
                    @endif

                    <img src="" class="signaturedisplay" style="width: 80%; margin:0 auto; margin-top:20px;" alt="">
                    <div class="signaturename" style="text-align:center;  width:80%; margin:0 auto;"  ></div>





                    {{-- <div class="btn-library-page" id="sidebar-page-trigger" style="text-align:center; cursor:pointer">or
                        add a page from your Library</div> --}}

                </div>
                <!-- End Navigation -->
            </div>

            <style>
                .navigate {
                    overflow-y: auto;
                    direction: ltr;
                    height: 90%;
                }
                .create-tab{
                    background-image: url({{asset('/assets/images/sidebar-add.png')}});
                }
                .nav-menu li{
                    white-space: nowrap;
                }

                /* The side navigation menu */
                .sidenav {
                    height: 100%; /* 100% Full-height */
                    width: 0; /* 0 width - change this with JavaScript */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Stay on top */
                    top: 0; /* Stay at the top */
                    right: 0;
                    background-color: #111; /* Black*/
                    overflow-x: hidden; /* Disable horizontal scroll */
                    padding-top: 60px; /* Place content 60px from the top */
                    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
                }

                /* The navigation menu links */
                .sidenav a {
                    padding: 8px 8px 8px 32px;
                    text-decoration: none;
                    font-size: 25px;
                    color: #818181;
                    display: block;
                    transition: 0.3s;
                }

                /* When you mouse over the navigation links, change their color */
                .sidenav a:hover {
                    color: #f1f1f1;
                }

                /* Position and style the close button (top right corner) */
                .sidenav .closebtn {
                    position: absolute;
                    top: 0;
                    right: 25px;
                    font-size: 36px;
                    margin-left: 50px;
                }

                /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
                #main {
                    transition: margin-left .5s;
                    padding: 20px;
                }

                /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
                @media screen and (max-height: 450px) {
                    .sidenav {padding-top: 15px;}
                    .sidenav a {font-size: 18px;}
                }
                .library-search{
                    background-image: url({{asset('/assets/images/library-search.gif')}});
                }
            </style>

            <div class="main-content" >

                <div class="load-content" data-font-title-name="" data-font-title-weight="" data-font-title-letterspacing="" data-font-title-lineheight="" data-font-text-name="" data-font-text-size="" data-font-text-weight="" data-font-text-letterspacing="" data-font-text-lineheight="">
                    <div class="inner-content element-identify" style="width:auto;">
                        <div class="widget-holder editor-holder first-element-other" data-id="12956983" style="margin-bottom: 100px; margin-top:0px !important;">

                            <div class="templateholder"id="templateholder">


                                {{-- Template Holder --}}

                                {{-- @php
                                    echo($data['name']);
                                @endphp --}}
                                    {{-- {{dd($data->preview)}} --}}


                                    <div class="template">
                                        <div class="widgetholder">

                                            {!!  $data->preview !!}
                                        </div>
                                    </div>


                            </div>



                            <div style="clear:both;"></div>
                        </div>
                    </div>





            </div>

        </div>
    </section>

    @if (isset($_GET['proposalid']))


    <section id="cover" class="cover" style="" >

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

                    {{-- <div class="actions">
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

                    </div> --}}


                    <div class="logo">
                        @if($cover->cover )
                            <img src="{{url('/')}}/companylogo/{{$proposal->brand->company_logo}}" style="filter: none; background-color:rgba(255, 255, 255, 0) !important;" class="img active">
                        @else
                            <img src="{{url('/')}}/companylogo/default.png" class="img default">
                        @endif
                    </div>
                    <div class="lineone">
                        Proposal for
                        <span class="editor">
                            <span class="inp">

                                {{@$cover->cover_for}}
                            </span>
                        </span>
                    </div>
                    <div class="linetwo">
                        Written by
                        <span class="editor">
                            <span class="inp">
                                {{@$cover->cover_from}}
                            </span>
                        </span>

                        for
                        <span class="editor">
                            <span class="inp">
                                {{@$cover->cover_to}}
                            </span>
                        </span>
                    </div>


                    <div class="btnholder">
                        <button  class="btn btn-bar btn-primary readproposal">
                            Read Your Proposal
                        </button>
                    </div>


                    <input type="file" name="cover" style="display:none;" >





                    {{-- <div class="to">

            </div> --}}

                </form>
            </div>

        </div>
    </section>

    @endif



    <script>

        $(document).ready(function(){
            $('.sectionblock').each(function(){
                var name = $(this).attr('name');
                var sectionid = $(this).attr('sectionid');


                var sectionitem = `

                    <div class="sectionitem" sectionid="${sectionid}">
                        <h5> ${name}</h5>
                        <div class="actions">

                            <i class="fa fa-eye  " ></i>
                        </div>

                    </div>

                `;

                $('.sectionlist').append(sectionitem);

                $('.sectionblock').hide();
                $('body').find(`.sectionblock`).first().show();




            });


            $('body').on('click', '.sectionitem' ,  function(){
                $('.sectionblock').hide();

                var sectionid = $(this).attr('sectionid');
                console.log(sectionid);

                $('body').find(`.sectionblock[sectionid=${sectionid}]`).show();

            });


            setTimeout(() => {
                $('.tinymce-heading').attr('contenteditable' , "false");
                $('.tinymce-heading').removeClass('tinymce-heading');

                $('.tinymce-body').attr('contenteditable' , "false");
            }, 1500);







        });


    </script>

    @if(isset($proposal))
    <script>
        $(document).ready(function(){
            // create Signature pad
            $('.signature-block').each(function(){
                var canvas = $(this).find('.canvas');
                var signaturePad = new SignaturePad($(canvas)[0]);



                canvas.width = $(this).width();
                canvas.height = $(this).height();

                $(this).find('.tinymce-heading').attr('contenteditable' , "true");

            });


            // Clear Signature Pad

            $('body').on('click' , '.signature-block .clearcanvas', function () {
                clearpad($(this).parent().parent() );
            });

            function clearpad(blockparent){


                var canvas = blockparent.find('.canvas');

                var signaturePad = new SignaturePad($(canvas)[0]);
            }


            // get Signature
            $('body').on('click' , '.signature-block .accept', function () {
                acceptproposal($(this).parent().parent() );
            });


            function acceptproposal(blockparent){
                console.log(blockparent);
                var canvas = blockparent.find('.canvas');
                // var ctx = $(canvas).getContext('2d');
                var signatureimage = $(canvas)[0].toDataURL();
                $('.signaturedisplay').attr('src', signatureimage);

                $.ajax({
                    type: "POST",
                    url: "{{url('/')}}/proposal/accept/{{$proposal->id}}",
                    data: {
                        signature : signatureimage,
                        _token : `{{csrf_token()}}`,

                    },
                    success: function(data){
                        console.log(data);
                        if(data.status == 200){
                            swal("Great", "We will Notify Creator", "success");
                            window.location.href = "{{url('/')}}/proposal/thanks/{{$proposal->id}}";
                        }
                        else{
                            swal("Ops", "Something is Not Working!", "warning");

                        }

                    }

                });


            }


            // decline

            $('body').on('click' , '.signature-block .decline', function () {
                declineproposal($(this).parent().parent() );
            });


            function declineproposal(blockparent){
                console.log(blockparent);

                $.ajax({
                    type: "POST",
                    url: "{{url('/')}}/proposal/decline/{{$proposal->id}}",
                    data: {
                        _token : `{{csrf_token()}}`,

                    },
                    success: function(data){
                        console.log(data);
                        if(data.status == 200){
                            swal("Thats Sad!", "We will Notify Creator", "success");
                        }
                        else{
                            swal("Ops", "Something is Not Working!", "warning");

                        }

                    }

                });


            }

            $('.readproposal').click(function(e){
                e.preventDefault();


                $('#proposal').toggle();
                $('#cover').toggle();
            });





        });
    </script>

    @endif




@endsection
