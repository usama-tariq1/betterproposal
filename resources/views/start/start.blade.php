@extends('start.Master.app')

@section('content')

    <section id="section1"  class="section active" >
        <div class="container">
            <h3 class="text-center pt-5 mt-5 startheading">Who would you like to send a proposal to?</h3>
            <div class="row text-center mt-5 pt-5">
                <div class="col-md-6">
                    <a role="button" href="">
                        <div class="start-div-btn p-5">
                            <img class="pb-4" src="{{ asset('assets/images/start-existing.png') }}" alt="">
                            <p>An Existing Contact</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a role="button" href="">
                        <div class="start-div-btn p-5">
                            <img class="pb-4" src="{{ asset('assets/images/start-new.png') }}" alt="">
                            <p>A New Contact</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section id="section2" style="display:none;" class="section ">
        <div class="container">
            <div class="col-md-12">
                <div class="details-div text-center m-5">
                    <div class="detail-form p-5">
                        <form>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="option1">Which Company do you want to send to?</label>
                                    <select class="form-control">
                                        <option selected>--Choose a Company--</option>
                                        <option value="1">User Report</option>
                                    </select>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="details-div text-center m-5">
                    <div class="detail-form p-5">
                        <form>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="option1">Which Template do you want to use?</label>
                                    <select class="form-control">
                                        <option selected>--Select a Template--</option>
                                        <option value="1">Start from scratch without a Template</option>
                                    </select>
                                    <select class="mt-3 form-control">
                                        <option selected>Template Name</option>
                                    </select>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="details-div text-center m-5">
                    <div class="detail-form p-5">
                        <form>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="option1">How are you going to charge for this?</label>
                                    <label class="pt-3" for="">Currency</label>
                                    <select class="form-control">
                                        <option selected>US Dollar (USD)</option>
                                    </select>
                                    <label class="pt-4" for="">Do you charge tax on top of your prices?</label>
                                    <select class=" form-control">
                                        <option selected>No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section3" style="display:none;" class="section ">
        <div class="container">
            <h3 class="text-center pt-5 mt-5 startheading">Choose Cover</h3>
            <div class="row">
                <div class="col-md-3 nobottom pt-5">
                    <div class="card-image card-image-blank"
                        style="background-image: url('{{ asset('assets/images/start-cover-blank.png') }}')" data-id="new">
                        <img src="" class="card-active">
                    </div>
                </div>
                <div class="col-md-3 nobottom pt-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('assets/images/97959_human-resources-cover_3668.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">(New) Consulting > Human Resources</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="center-bg-nofilter section" id="section4" style="display:none;">

        <style>
            .center-bg-nofilter {
                background-image: url("{{ asset('assets/images/97959_human-resources-cover_3668.jpg') }}");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: top;
            }
            }

        </style>
        <div id="edit-cover" class="container-cover">

            <div class="text-center" id="div-align">
                <img width="30%" src="https://betterproposals.io/2/img/layout/NEW_BlackYourLogo.png"
                    class="logo p-5 tiptip-right" style="margin-left: 10px;">

                <textarea name="Headline" id="Headline" rows="1"
                    class="p-3 expandibleTextarea form-textbox-hidden-1 text-center expandibleHeadline tiptip-top center-align"
                    style="height: 86px;">Proposal for "Company Name" </textarea>

                <textarea name="Subheader" id="Subheader" rows="1"
                    class="p-5 expandibleTextarea form-textbox-hidden-2 text-center expandibleSubheader tiptip-top center-align"
                    style="height: 57px;">Written by "Author Name" at "Company Name" </textarea>

                <div style="clear:both;">
                    <div class="btn-square-solid" id="cover-button" style="margin-left: 13px;">Start Reading Proposal</div>
                </div>


            </div>

        </div>
    </section>

    <section id="section5" style="display:none;" class="section">
        <div id="container">
            <div class="navigation">
                <div class="navigate">

                    <div class="logo-holder">
                        <img width="100%" src="https://betterproposals.io/2/img/layout/NEW_BlackYourLogo.png"
                            class="logo p-3">
                    </div>


                    <!-- Add New Page -->

                    <form class="create-page-form" name="form1" method="post" action=""
                        onkeypress="return event.keyCode != 13;">
                        <input type="hidden" name="PerformAction" value="ProposalAddEdit">
                        <input type="hidden" name="PageID" value="">
                        <input type="hidden" name="ProposalID" value="726392">
                        <div class="btn-create-page button-trans">Add a Blank Page</div>
                    </form>
                    <div class="btn-library-page" id="sidebar-page-trigger" style="text-align:center; cursor:pointer">or
                        add a page from your Library</div>

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
{{--            <div class="main-content">--}}

{{--                <div class="load-content" data-font-title-name="" data-font-title-weight="" data-font-title-letterspacing=""--}}
{{--                    data-font-title-lineheight="" data-font-text-name="" data-font-text-size="" data-font-text-weight=""--}}
{{--                    data-font-text-letterspacing="" data-font-text-lineheight="">--}}

{{--                    <div class="blankslate">--}}
{{--                        <img src="../img/blankslates/proposals-dark.png" class="blankslate-icon">--}}
{{--                        <div class="blankslate-title dark">You need to add your first page to begin</div>--}}
{{--                        <div class="blankslate-copy dark">Click the 'Add a page' button on the left under your logo. To--}}
{{--                            rename it, just click the title and edit it then click off.</div>--}}
{{--                    </div>--}}
{{--                    <div class="page-bottom"></div>--}}

{{--                </div> <!-- End load content -->--}}

{{--            </div> <!-- End main content -->--}}

        </div>
    </section>

    <section class="bg-black section" id="section6" style="display:none;">
        <div class="container">
            <div class="col-md-12 text-center">
                <h3 class="checker-title">Proposal AI</h3>
            </div>
            <div class="col-md-12 checker-block ">
                <div class="pb-5">
                    <div class="checker-item-title">Your Custom Domain</div>
                    <div class="checker-tag moderate">moderate</div>
                    <div class="checker-copy">
                        You should consider setting up your custom domain so it shows your business URL in the address bar
                        when your client opens the proposal.<br><br>
                        # <a href="../upgrade/custom-domain-from-free" target="_blank">
                            <div class="button white">Set up your Custom Domain</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 checker-block">
                <div class="pt-5 pb-5">
                    <div class="checker-item-title">Use of cover</div>
                    <div class="checker-tag good">Good</div>
                    <div class="checker-copy">
                        Your cover is all set to make a great first impression.
                    </div>
                </div>
            </div>
            <div class="col-md-12 checker-block ">
                <div class="pt-5 pb-5 mb-5">
                    <div class="checker-item-title">Live chat</div>
                    <div class="checker-tag moderate">moderate</div>
                    <div class="checker-copy">
                        You haven't integrated any live chat services into your Better Proposals account yet. You should
                        consider this if you want to increase your conversion rate. Allowing your clients to ask questions
                        when they're important to them is vital in getting deals over the line.<br><br>
                        # <a href="../upgrade/custom-domain-from-free" target="_blank">
                            <div class="button white">Set up your Custom Domain</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

        </div>
        </div>
    </section>

    <section id="section7" style="display:none;" class="section ">
        <div class="container">
            <div class="col-md-12">
                <div class="details-div m-5">
                    <div class="detail-form p-5">
                        <form>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="option1">This Proposal will come from</label>
                                    <p><span style="font-weight: 700">name</span> (name@example.com)</p>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="details-div m-5">
                    <div class="detail-form p-5">
                        <form>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="option1">Who would you like to send your Proposal to?</label>
                                    <div class="padding30-leftright">


                                        Recipients must sign in the order they appear below
                                        <div class="switch" style="margin-top:10px; margin-bottom: 20px;">
                                            <input type="hidden" name="SignOrder" class="signorder " value="0">
                                            <input id="signorder-toggle"
                                                class="signorder-toggle signorder-toggle-round-flat" type="checkbox">
                                            <label for="signorder-toggle"></label>
                                        </div>

                                        <div id="dragNdrop" class="containerDnD">

                                            <div class="extra-fields row" style="overflow: auto">
                                                <div class="col-md-3">
                                                    <label class="send-label">First name</label>
                                                    <input name="ToFirstName[]" id="ToFirstName" type="text"
                                                        class="textbox send-textbox-person validate[required]"
                                                        style="margin-left:0; border-radius: 10px; outline: 0px;" value="">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="send-label">Last name</label>
                                                    <input name="ToSurname[]" id="ToSurname" type="text"
                                                        class="textbox send-textbox-person" value=""
                                                        style="border-radius: 10px; outline: 0px;">
                                                </div>

                                                <div class="col-md-4">
                                                    <label class="send-label">Email address</label>
                                                    <input name="ToEmail[]" id="ToEmail" type="text"
                                                        class="textbox send-textbox-email validate[required]" value=""
                                                        style="border-radius: 10px; outline: 0px;">
                                                </div>

                                                <div class="col-md-1 omega">
                                                    <input type="hidden" name="Signature[]" value="0">
                                                </div>


                                            </div><!-- End extra-fields -->

                                        </div><!-- end dragndrop-->
                                        <!-- End recipient row -->


                                        <div class="grid_12 omega" style="text-align:center">
                                            <a href="#" class="add-proposal-recipient">
                                                <div class="button white mt-3" style="margin-bottom: 40px"><span
                                                        class="icon-new"></span>Add another recipient</div>
                                            </a>
                                        </div> <!-- end grid 12 -->

                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="details-div m-5">
                    <div class="detail-form p-5">
                        <form>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="option1">Write your email</label>
                                    <label class="pt-3" for="">Email Subject</label>
                                    <input type="text" id="CompanyName" name="CompanyName"
                                        value="Proposal from 'company name'" class="textbox">

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="details-div p-5">
                    <div class="send-email-preview text-center">How your email will look</div>
                    <div class="send-emailblock">

                        <img src="https://betterproposals.io/2/img/layout/NEW_BlackYourLogo.png" alt="Better Proposals"
                            class="email-logo">

                        <div class="email-border">
                            <textarea name="personalmessage" style="resize: none" class="autoExpand personal-message"
                                rows="2" data-min-rows="2" placeholder="Start typing your message..."></textarea>

                            <a href="https://betterproposals.io/proposal/cover.php?ProposalID=0KkC8ekUz78isveLU5do5u4gwk11ditCXDx-f2-EMMU&amp;debug=yes"
                                target="_blank" class="no-ul">
                                <div class="email-button">Read Your Proposal</div>
                            </a>

                        </div> <!-- end email border -->
                        <div class="email-signature">
                            <div class="signature-table">
                            </div>
                        </div> <!-- end email signature -->
                        <br><br>
                        <a href="https://betterproposals.io/?rf=241111762" target="_blank"><img
                                src="{{ asset('/assets/images/footlogo.png') }}" width="150"></a>
                    </div> <!-- end email block -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="details-div detail-form p-5 mt-5 mb-5">
                    <label for="option1">Write your email</label>
                    <div class="padding30-leftright mt-4" style="padding-bottom: 30px;">


                        <div class="notification info">To enable password protection for your proposals, simply






                            <a href="../upgrade/upgrade-to-enterprise-trial?cab=1&amp;s=1&amp;c=3"
                                style="color: #FFF !important">upgrade your trial</a>
                            .
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>

        console.log('hit');

        var nextbtn = $('.nextbtn');
        var sections  = $('section');
        var currentsection = $('.section .active').html();
        $('.section').each(function() {
            console.log($(this).html());
        });
        console.log(currentsection);








    </script>


@endsection
