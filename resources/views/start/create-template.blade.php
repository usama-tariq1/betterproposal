@extends('start.Master.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section id="section5">
        <div id="container">
            <div class="navigation">
                <div class="navigate">

                    <div class="logo-holder">
                        <img width="100%" src="https://betterproposals.io/2/img/layout/NEW_BlackYourLogo.png"
                             class="logo p-3">
                    </div>
                    @foreach($template_pages as $template_pages)
                        <div class="row">
                            <div id="dragNdropTpl" class="containerDnD">
                                <div data-id="1927165" class="navbutton active">
                                    <div class="name-label">
                                        <span id="page-name-font" class="page-name active-font" contenteditable="true" title="Click to Edit Page Name">{{$template_pages->page_name}}</span>
                                        <a href="#" class="edit-active edit" id="page-settings" title="Drag this page up or down" style="display: inline;">&nbsp;</a>
                                        <span id="delete" class="deleteImgContainer"><img src="{{asset('/assets/images/tab-delete-dark.png')}}" class="edit-active nav-icon" title="Delete this page" style="width: 18px; display: inline;"></span>
                                        <a href="#" class="edit-active save-page" title="Save this page to the content library" style="display: inline;">&nbsp;</a>   </div>
                                </div><!-- end navbutton -->
                            </div>
                        </div>
                    @endforeach

                    <!-- Add New Page -->
                    <form class="create-page-form" name="form1" id="form1" method="POST" action="{{route('addpage')}}"
                          onkeypress="return event.keyCode != 13;">
                        @csrf
                        <input type="hidden" name="id_val" value="{{$id}}">
                        <input type="hidden" name="PerformAction" value="ProposalAddEdit">
                        <input type="hidden" name="PageID" value="">
                        <input type="hidden" name="ProposalID" value="726392">
                        <a class="btn-create-page button-trans" onclick="addPage()">Add a Blank Page</a>
                    </form>
                    <div class="btn-library-page" id="sidebar-page-trigger" style="text-align:center; cursor:pointer">or
                        add a page from your Library</div>

                </div>
                <!-- End Navigation -->
            </div>

            <style>
                .navbar-nav{
                    display: none;
                }
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
                .edit{
                    background-image: url({{asset('/assets/images/tab-move-dark.png')}});
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
                .save-page{
                    background-image: url({{asset('/assets/images/tab-save-dark.png')}});
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

            <div class="main-content" id="content-area" style="display: none">

                <div class="load-content" data-font-title-name="" data-font-title-weight="" data-font-title-letterspacing="" data-font-title-lineheight="" data-font-text-name="" data-font-text-size="" data-font-text-weight="" data-font-text-letterspacing="" data-font-text-lineheight=""><div class="inner-content element-identify">
                        <div class="widget-holder editor-holder first-element-other" data-id="12956983" style="margin-bottom: 100px;">
                            <div class="action-holder divhide" id="menu-2628183">
                                <a href="#" class="arrange-up"><img src="{{asset('/assets/images/menu-up.png')}}" class="icon-small"></a>
                                <a href="#" class="arrange-down"><img src="{{asset('/assets/images/menu-down.png')}}" class="icon-small"></a>
                                <a href="#" data-id="2628183" class="delete-editor"><img src="{{asset('/assets/images/menu-delete.png')}}" class="icon-small"></a>

                                <a href="#" data-id="2628183" class="save-editor tiptip-bottom"><img src="{{asset('/asset/images/menu-save.png')}}" class="icon-small" title="Save to Content Library"></a>

                            </div>
                            <a href="#" data-id="2628183" class="action-menu"><img src="{{asset('/assets/images/menu-popout.png')}}" class="icon-action" title="Open Menu"></a>

                            <div id="Output_Pagecontent_2628183" class="text-output editable mce-content-body" contenteditable="true" style="position: relative;"><h1>Click to write your title</h1><p>Start writing your content...</p></div>
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

                            <div class="createblock create-images element-text">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-text.png')}}" class="create-block-icon">Text Area
                                </div>
                            </div>

                            <div class="createblock create-images element-bigphoto">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-bigimage.png')}}" class="create-block-icon">Full Width Image
                                </div>
                            </div>

                            <div class="createblock create-images element-customblock">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-featured.png')}}" class="create-block-icon">Feature Block
                                </div>
                            </div>

                            <div class="createblock create-images element-video">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-video.png')}}" class="create-block-icon">Video
                                </div>
                            </div>

                            <div class="create-block-inactive tiptip-bottom" id="quote-inactive" style="display:none">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-products.png')}}" class="create-block-icon">Pricing Table
                                </div>
                            </div>

                            <div class="createblock element-quote">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-products.png')}}" class="create-block-icon">Pricing Table
                                </div>
                            </div>

                            <div class="create-block-inactive tiptip-bottom" id="sign-inactive" style="display:none">
                                <div class="createblock-padding">
                                    <img src="{{asset('/assets/images/add-signature.png')}}" class="create-block-icon">Digital Signature
                                </div>
                            </div>

                            <div class="createblock create-images element-sign">
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
                        <div id="create-tab" onclick="openNav()" class="create-tab">Add to this page</div>
                    </a>
                </div> <!-- End load content -->


            </div>
                        <div class="main-content" id="blankpage">

                            <div class="load-content" data-font-title-name="" data-font-title-weight="" data-font-title-letterspacing=""
                                data-font-title-lineheight="" data-font-text-name="" data-font-text-size="" data-font-text-weight=""
                                data-font-text-letterspacing="" data-font-text-lineheight="">

                                <div class="blankslate">
                                    <img src="../img/blankslates/proposals-dark.png" class="blankslate-icon">
                                    <div class="blankslate-title dark">You need to add your first page to begin</div>
                                    <div class="blankslate-copy dark">Click the 'Add a page' button on the left under your logo. To
                                        rename it, just click the title and edit it then click off.</div>
                                </div>
                                <div class="page-bottom"></div>

                            </div> <!-- End load content -->

                        </div> <!-- End main content -->

        </div>
    </section>
@endsection
