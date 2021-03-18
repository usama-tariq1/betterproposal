@extends('template.layout.add')

@section('content')


    <link rel="stylesheet" href="{{url('/')}}/assets/css/template.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/4e17hcsz7xaiwpc4kl341dgdyg51t6izulk882z4k4af675c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <section id="section5" style="" class="section">
        <div id="container">
            <div class="navigation">
                <div class="navigate">

                    {{-- <div class="logo-holder">
                        <img width="100%" src="https://betterproposals.io/2/img/layout/NEW_BlackYourLogo.png"
                            class="logo p-3">
                    </div> --}}


                    <div class="logo-holder">
                        @php
                        $brand = App\Brand::where('id' , $template->brand_id)->first();
                        @endphp
                        @if(isset($brand))
                            <img width="100%" src="{{url('/')}}/companylogo/{{$brand->company_logo}}"
                            class="logo p-3">
                        @else
                            <img width="100%" src="https://betterproposals.io/2/img/layout/NEW_BlackYourLogo.png"
                            class="logo p-3">
                        @endif
                    </div>


                    <!-- Add New Page -->

                    {{-- <form class="create-page-form" name="form1" method="post" action=""
                        onkeypress="return event.keyCode != 13;">
                        <input type="hidden" name="PerformAction" value="ProposalAddEdit">
                        <input type="hidden" name="PageID" value="">
                        <input type="hidden" name="ProposalID" value="726392">
                        <div class="btn-create-page button-trans">Add a Blank Page</div>
                    </form> --}}


                    <div class="sectionlist" id="sectionlist" >

                    </div>


                    <div class="btn-create-page button-trans  addsection " style="margin-top:40px; " >Add a Section</div>


                    <div class="templateform" style="">

                        <div class="container" style="display:none;">
                            <div class="form-group">
                                <label for="">Template Name</label>
                                <input type="text" name="templatename" id="templatename" value="{{$template->name}}" class="form-control" placeholder="Template Name">

                              </div>

                              <div class="form-group">
                                  <label for="">Description</label>
                                  <textarea name="templatedescription" id="templatedescription"  class="form-control" placeholder="Description">{{$template->description}}</textarea>

                              </div>
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </div>


                        <div class="btn-create-page button-trans  savetemplate"
                            style="background-color: rgb(67, 197, 67);color:white !important; border:0px;">
                            Save
                        </div>
                    </div>


                    {{-- <div class="btn-create-page button-trans  addblankpage " style="margin-top:40px; " >Add a Blank Page</div>

                    <div class="btn-library-page" id="sidebar-page-trigger" style="text-align:center; cursor:pointer">or
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

            <div class="main-content">

                <div class="load-content" data-font-title-name="" data-font-title-weight="" data-font-title-letterspacing="" data-font-title-lineheight="" data-font-text-name="" data-font-text-size="" data-font-text-weight="" data-font-text-letterspacing="" data-font-text-lineheight="">
                    <div class="inner-content element-identify" style="width:auto;">
                        <div class="widget-holder editor-holder first-element-other" data-id="12956983" style="margin-bottom: 100px; margin-top:0px !important;">

                            <div class="templateholder"id="templateholder">

                                <div class="template" id="template" templateid="{{$template->code}}">


                                    <div class="widgetholder">
                                        {!! $templateconfig->editable !!}

                                    </div>



                                    <div class="previewrender" id="previewrender">

                                    </div>

                                </div>
                                {{-- Template Holder --}}



                            </div>



                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <div id="sidebar-create" class="sidebar slider-open" style="position: fixed; display: none; width: 400px; transition: all 600ms ease 0s; height: 100%; top: 0px; right: 0px;">

                        <a class="cancel" href="#" onclick="closeNav()" id="sidebar-create-cancel"><img src="{{asset('/assets/images/sidebar-close.png')}}" class="sidebar-close"></a>

                        <a href="http://help.betterproposals.io/en/articles/1822582-using-the-editor-4-41" target="_blank"><span class="microcopy" style="float: right; color: #FFF; text-decoration: underline">How to use the editor</span></a>

                        <div class="create-title" style="margin-top: 0px;">What would you like to add?</div>
                        <div class="create-subtitle" style="margin-top: 0px;">Click to enhance your proposal with these creative, visual elements</div>
                        <br><br>

                        <!-- TABS -->

                        <ul class="tabs">
                            <li id="content-tab" class="tab-link current1" onclick="showContent()" data-tab="new">New Content</li>
                            <li id="library-tab" class="tab-link " onclick="showlibrary()" data-tab="library">Content Library</li>
                        </ul>


                        <!-- NEW CONTENT -->

                        <div id="new" class="tab-content current" style="padding-bottom: 20px">

                            <div class="createblock create-images element-text addtextblock ">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-text.png')}}" class="create-block-icon">Text Area
                                </div>
                            </div>

                            <div class="createblock create-images element-bigphoto addimageblock">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-bigimage.png')}}" class="create-block-icon">Full Width Image
                                </div>
                            </div>

                            <div class="createblock create-images element-customblock addfeatureblock">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-featured.png')}}" class="create-block-icon">Feature Block
                                </div>
                            </div>

                            <div class="createblock create-images element-video addvideoblock">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-video.png')}}" class="create-block-icon">Video
                                </div>
                            </div>

                            <div class="create-block-inactive tiptip-bottom " id="quote-inactive" style="display:none">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-products.png')}}" class="create-block-icon">Pricing Table
                                </div>
                            </div>

                            <div class="createblock element-quote addpricingblock">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-products.png')}}" class="create-block-icon">Pricing Table
                                </div>
                            </div>

                            <div class="createblock create-images element-sign addsignatureblock">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-signature.png')}}" class="create-block-icon">Digital Signature
                                </div>
                            </div>

                        </div> <!-- End div id new -->


                        <!-- START LIBRARY -->

                        <div id="library" class="tab-content" style="padding: 25px;">
                            <input type="text" placeholder="Search for saved content" class="library-search" id="library-search" autofocus="">

                            <div id="searchResults"></div>

                        </div> <!-- end div content library -->

                        <div id="sidebar-trash-trigger" style="text-decoration:underline; cursor:pointer; color:#FFF; margin-top: 15px; text-align:center">Restore deleted items</div>

                    </div>

                    <!-- Use any element to open the sidenav -->


                    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

                    <div class="saved-tab" style="display: none;">Saved</div>
                    <div class="page-bottom"></div>
                    <a href="#" id="sidebar-create-trigger">
                        <div id="create-tab" onclick="openNav()" class="create-tab" style="position: fixed;">Add to this page</div>
                    </a>

                    {{-- savedtag --}}
                    <div id="create-tab"  class="create-tab savedtag" style="position: fixed; top: 50%; background-image:none; background-color:#9ea99de6; display:none;"> <i class="fa fa-save"></i> Saved </div>

                    </div> <!-- End load content -->


            </div>

        </div>
    </section>


    {{-- {{dd($templateconfig->config)}} --}}
    @if($templateconfig->config == "")

    <script src="{{url('/')}}/assets/js/templateglobal.js"></script>
    @else
    <script>
        var template_config= @php echo($templateconfig->config); @endphp
    </script>
    @endif


    <script src="{{url('/')}}/assets/js/templatebuild.js"></script>
    <script src="{{url('/')}}/assets/js/templateinit.js"></script>
    <script src="{{url('/')}}/assets/js/tooling.js"></script>





<script>

    $(document).ready(function(){

        $('.sectionblock').hide();
        $('body').find(`.sectionblock`).first().show();
        $('.sectionlist').show();
        $('.sectionblock').each(function(){
            var name = $(this).attr('name');
            var sectionid = $(this).attr('sectionid');


            var sectionitem = `

                <div class="sectionitem" sectionid="${sectionid}">
                    <input type="text" placeholder="Section Name .." class="sectionname" value="${name}">
                    <div class="actions">

                        <i class="fa fa-chevron-up sortup"></i>
                        <i class="fa fa-chevron-down sortdown "></i>
                        <i class="fa fa-save save"></i>
                        <i class="fa fa-trash-alt remove  " ></i>
                    </div>

                </div>

            `;

            $('.sectionlist').append(sectionitem);






        });


        $('body').on('click', '.sectionitem' ,  function(){
            $('.sectionblock').hide();

            var sectionid = $(this).attr('sectionid');
            console.log(sectionid);

            $('body').find(`.sectionblock[sectionid=${sectionid}]`).show();

        });

        setTimeout(() => {
            $('.signature-block').find('.tinymce-heading').attr('contenteditable' , "false");
        }, 2000);

    });


</script>


    <script>

        console.log('hit');

        // var nextbtn = $('.nextbtn');
        // var sections  = $('section');
        // var currentsection = $('.section .active').html();
        // $('.section').each(function() {
        //     console.log($(this).html());
        // });
        // console.log(currentsection);


        var emailHeaderConfig = {
        selector: '.tinymce-heading',
        menubar: false,
        inline: true,

        plugins: [
            'lists',
            // 'powerpaste',
            // 'autolink'
        ],
        toolbar: 'undo redo | bold italic underline',
        valid_elements: 'strong,em,span[style],a[href]',
        valid_styles: {
            '*': 'font-size,font-family,color,text-decoration,text-align'
        },
        // powerpaste_word_import: 'clean',
        // powerpaste_html_import: 'clean',
        };

        var emailBodyConfig = {
        selector: '.tinymce-body',
        menubar: false,
        inline: true,
        // plugins: [
        //     'link',
        //     'lists',
        //     'powerpaste',
        //     'autolink',
        //     'tinymcespellchecker'
        // ],
        toolbar: [
            'undo redo | bold italic underline | fontselect fontsizeselect',
            'forecolor backcolor | alignleft aligncenter alignright alignfull | numlist bullist outdent indent'
        ],
        valid_elements: 'p[style],strong,em,span[style],a[href],ul,ol,li',
        valid_styles: {
            '*': 'font-size,font-family,color,text-decoration,text-align'
        },
        // powerpaste_word_import: 'clean',
        // powerpaste_html_import: 'clean',
        };






    </script>






@endsection
