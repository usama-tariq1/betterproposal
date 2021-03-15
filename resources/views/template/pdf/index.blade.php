@extends('template.layout.preview')

@section('content')



@php

$cover = App\Covers::where('id' , $proposal->cover_id)->first();
@endphp
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script> --}}

<link rel="stylesheet" href="{{url('/')}}/assets/css/template.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.tiny.cloud/1/4e17hcsz7xaiwpc4kl341dgdyg51t6izulk882z4k4af675c/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{url('/')}}/assets/css/coverdesign.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>




<section id="cover" class="cover" style="">

    <div class="app">
        <div class="cover" style="">
            {{-- <img src="{{$cover->cover ? '{{url('/')}}/covers/{{$cover->cover}}' : '' }}" class="coverimage" alt="">
            --}}

            @if($cover->cover)
            <img src="{{url('/')}}/covers/{{$cover->cover}}" class="coverimage" alt="">
            @else
            <img src="" class="coverimage" alt="">

            @endif
        </div>


        <div class="body">

            <form id="updatecover" action="{{url('/')}}/cover/update/{{$cover->id}}" method="post"
                enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

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
            <img src="{{url('/')}}/companylogo/{{$proposal->brand->company_logo}}"
                style="filter: none; background-color:rgba(255, 255, 255, 0) !important;" class="img active">
            @else
            <img src="{{url('/')}}/companylogo/default.png" class="img default">
            @endif
        </div>
        <div class="lineone">
            Proposal for &nbsp; &nbsp;
            <span class="editor">
                <span class="inp">

                    {{@$cover->cover_for}}
                </span>
            </span>
        </div>
        <div class="linetwo">
            Written by &nbsp; &nbsp;
            <span class="editor">
                <span class="inp">
                    {{@$cover->cover_from}}
                </span>
                &nbsp; &nbsp; &nbsp; &nbsp;
            </span>

            for &nbsp; &nbsp;
            <span class="editor">
                <span class="inp">
                    {{@$cover->cover_to}}
                </span>
            </span>
        </div>


        <div class="btnholder">
            <button class="btn btn-bar btn-primary readproposal">
                Read Your Proposal
            </button>
        </div>


        <input type="file" name="cover" style="display:none;">





        {{-- <div class="to">

            </div> --}}

        </form>
    </div>

    </div>
</section>


<section id="proposal" style="" class="section">
    <div id="container">



        <style>
            .navigate {
                overflow-y: auto;
                direction: ltr;
                height: 90%;
            }

            .create-tab {
                background-image: url({{asset('/assets/images/sidebar-add.png')
            }
            }

            );
            }

            .nav-menu li {
                white-space: nowrap;
            }

            /* The side navigation menu */
            .sidenav {
                height: 100%;
                /* 100% Full-height */
                width: 0;
                /* 0 width - change this with JavaScript */
                position: fixed;
                /* Stay in place */
                z-index: 1;
                /* Stay on top */
                top: 0;
                /* Stay at the top */
                right: 0;
                background-color: #111;
                /* Black*/
                overflow-x: hidden;
                /* Disable horizontal scroll */
                padding-top: 60px;
                /* Place content 60px from the top */
                transition: 0.5s;
                /* 0.5 second transition effect to slide in the sidenav */
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
                .sidenav {
                    padding-top: 15px;
                }

                .sidenav a {
                    font-size: 18px;
                }
            }

            .library-search {
                background-image: url({{asset('/assets/images/library-search.gif')
            }
            }

            );
            }

        </style>

        <div class="main-content" style="width: 100%;">

            <div class="load-content" data-font-title-name="" data-font-title-weight="" data-font-title-letterspacing=""
                data-font-title-lineheight="" data-font-text-name="" data-font-text-size="" data-font-text-weight=""
                data-font-text-letterspacing="" data-font-text-lineheight="">
                <div class="inner-content element-identify" style="width:auto;">
                    <div class="widget-holder editor-holder first-element-other" data-id="12956983"
                        style="margin-bottom: 100px; margin-top:0px !important;">

                        <div class="templateholder" id="templateholder">


                            {{-- Template Holder --}}

                            {{-- @php
                                    echo($data['name']);
                                @endphp --}}
                            {{-- {{dd($data->preview)}} --}}


                            <div class="template">
                                <div class="widgetholder">

                                    {!! $preview->preview !!}
                                </div>
                            </div>


                        </div>



                        <div style="clear:both;"></div>
                    </div>
                </div>





            </div>

        </div>
</section>










<script>
    $(document).ready(function () {
        $('.sectionblock').each(function () {
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


        $('body').on('click', '.sectionitem', function () {
            $('.sectionblock').hide();

            var sectionid = $(this).attr('sectionid');
            console.log(sectionid);

            $('body').find(`.sectionblock[sectionid=${sectionid}]`).show();

        });


        setTimeout(() => {
            $('.tinymce-heading').attr('contenteditable', "false");
            $('.tinymce-heading').removeClass('tinymce-heading');

            $('.tinymce-body').attr('contenteditable', "false");
        }, 1500);







    });

</script>

<script type="module">
    /* global jsPDF */
                // window.jsPDF()
                // var doc = new jsPDF();
                // var specialElementHandlers = {
                //     '#editor': function (element, renderer) {
                //         return true;
                //     }
                // };
    </script>

<script>
    $(document).ready(function () {


        $('.signature-block').remove();
        $('#cover').find('.editor').show();



        // var doc = new window.jsPDF();
        // var specialElementHandlers = {
        //     '#editor': function (element, renderer) {
        //         return true;
        //     }
        // };
        // doc.fromHTML($('html').html(), 15, 15, {
        //     'width': 170,
        //     'elementHandlers': specialElementHandlers
        // });
        // doc.save('sample-file.pdf');

        function demoFromHTML() {
            var pdf = new jsPDF('p', 'pt', 'letter');
            // source can be HTML-formatted string, or a reference
            // to an actual DOM element from which the text will be scraped.
            source = $('html')[0];

            // we support special element handlers. Register them with jQuery-style
            // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
            // There is no support for any other type of selectors
            // (class, of compound) at this time.
            specialElementHandlers = {
                // element with id of "bypass" - jQuery style selector
                '#bypassme': function (element, renderer) {
                    // true = "handled elsewhere, bypass text extraction"
                    return true
                }
            };
            margins = {
                top: 80,
                bottom: 60,
                left: 40,
                width: 522
            };
            // all coords and widths are in jsPDF instance's declared units
            // 'inches' in this case
            pdf.fromHTML(
                source, // HTML string or DOM elem ref.
                margins.left, // x coord
                margins.top, { // y coord
                    'width': margins.width, // max width of content on PDF
                    'elementHandlers': specialElementHandlers
                },

                function (dispose) {
                    // dispose: object with X, Y of the last line add to the PDF
                    //          this allow the insertion of new lines after html
                    pdf.save('Test.pdf');
                }, margins
            );
        }

        // demoFromHTML();



    });

</script>






@endsection
