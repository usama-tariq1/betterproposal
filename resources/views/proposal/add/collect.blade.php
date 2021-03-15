@extends('proposal.add.layout.layout')

@section('content')

@php

$brand = $proposal->brand;

$brand_settings =$proposal->brand->brand_settings;

if($proposal->contact_id){
    $contact = App\contact::where('id' , $proposal->contact_id )->first();

}

// dd($contact);





@endphp

<script src="https://cdn.tiny.cloud/1/4e17hcsz7xaiwpc4kl341dgdyg51t6izulk882z4k4af675c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{url('/')}}/assets/css/emailpreview.css">



<style>
    .navbar-nav>.nav-item {
        padding: 8px 10px;
        height: fit-content;
        height: 35px;
        /* height: fit-content; */
        width: auto;
    }

    .navbar-nav>.nav-item>p {
        margin-top: 0;
        /* margin-bottom: 1rem; */
        margin-top: -3px;

    }

    .navbar-nav>.nav-item:hover {
        cursor: pointer;
    }

    .inp{
        margin-bottom: 20px;
        width: 50%;

    }

</style>


<div class="" style="position:fixed; top: 0 ; left:0; width: 100%; z-index: 200;" >
    <!---------------------------navbar start-------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a id="cancel-btn" href="{{ url('/template') }}" class="btn start-head-btn" style="display: block;">Back</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mr-auto ml-auto"
                style="position: relative; left: 26%; transform: translateX(-50%);">
                <style>
                    .activenav{
                        font-weight: 700;
                    }
                </style>
                <li class="nav-item  ">
                    <p class="">Details ></p>
                </li>
                <li class="nav-item">
                    <p class="">Cover ></p>
                </li>
                <li class="nav-item">
                    <p class="">Proposal ></p>
                </li>

                <li class="nav-item activenav">
                    <p class="">Send</p>
                </li>
            </ul>

            <input type="hidden" id="stepValue" value="b" />
            <div class="ml-auto">
                <button id="send-btn" onclick="cacheit('proposalform')" class="btn start-head-btn"
                    style="background-color: #46BD78; color:#fff; ">Send</button>
            </div>

        </div>
    </nav>
    <!---------------------------navbar end-------------------------------->
</div>


<form id="proposalform" action="{{url('/')}}/proposals/cache/{{$proposal->id}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}" >
<section id="section2" style="margin-top: 80px;" class="section " >


    <div class="container">
        <div class="col-md-12">
            <div class="details-div text-center m-5">
                <div class="detail-form p-5">

                    <div class="form-group">
                        <div class="form-group" style="text-align:left;">
                            <label for="option1">This Proposal will come from</label>
                            <strong>{{$brand->brand_name}}</strong>( {{$brand_settings->brand_email}} )
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="col-md-12">
            <div class="details-div text-center m-5">
                <div class="detail-form p-5">

                    <div class="form-group">
                        <div class="form-group" style="text-align:left;">
                            <label for="option1">Who would you like to send your Proposal to?</label>
                            <input type="text" name="firstname" class="form-control inp" required="true" placeholder="First Name" value="{{@$contact->firstname}}">
                            <input type="text" name="lastname" class="form-control inp" required="true" placeholder="Last Name" value="{{@$contact->lastname}}">
                            <input type="text" name="email" class="form-control inp" required="true" placeholder="email" value="{{@$contact->email}}">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="details-div text-center m-5">
                <div class="detail-form p-5" style="text-align:left;">
                    <label for="option1">Write Your Email</label>

                    <label for="">Email Subject</label>

                    <input type="text" name="email_title" class="form-control inp" required="true" placeholder="email" value="{{@$brand_settings->email_title}}">
                    <input type="text" name="email_template" id="emailtemplate" class="form-control" style="display:none;">
                    <div class="cache" style="display: none;">

                    </div>

                    <div class="emailpreview">
                        <div class="title">
                            HOW YOUR EMAIL WILL LOOK
                        </div>


                        <div class="viewholder">
                            <div class="view">
                                <table class="table">
                                    <tr>
                                        <td>
                                            @if($brand->company_logo )
                                                <img src="{{url('/')}}/companylogo/{{$brand->company_logo}}" class="logodisplay" style="width:200px">
                                            @else
                                                <img src="{{url('/')}}/companylogo/default.png" class="logodisplay" style="width:200px">
                                            @endif
                                        </td>
                                    </tr>
                                    <br><br><br>
                                    <tr>
                                        <td>
                                            <div class="bodyholder">
                                                <div class="emailmsg tinymce-body ">
                                                    {{ $brand_settings->email_message == '' ? 'Start Typing your message' : $brand_settings->email_message }}
                                                </div>

                                                <br>
                                                <br>

                                                <a href="{{url('/')}}/preview/{{$proposal->template->code}}?proposalid={{$proposal->id}}"  class="emailbutton">
                                                    {{$brand_settings->email_button}}
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



</section>

</form>



<script src="{{url('/')}}/assets/js/validateform.js"></script>


<script type="text/javascript" defer >
    function cacheit(formid) {
        var validation = validateform(`#${formid}`);



        console.log(validation);
        if (validation.errors < 1) {
            $(`#${formid}`).submit();
        }



    }

    cachetemplate();
    $(document).ready(function(){
       $('.emailmsg').focusout(function(){
            cachetemplate();
       });
    });

    function cachetemplate(){
        var emailtemplate = $('.view').html();
        $('.cache').html(emailtemplate);
        $('.cache').find('.emailmsg').attr('contenteditable' , false);

        $('#emailtemplate').val(`${$('.cache').html()}`);

    }



</script>



<script defer>

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

    tinymce.init(emailHeaderConfig);
    tinymce.init(emailBodyConfig);




</script>




@endsection
