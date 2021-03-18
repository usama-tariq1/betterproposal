@extends('first-login.Master.app')

@section('content')
<style>
    .skip-btn{
        display: block ;
    }
    .faded{
        color: gray !important;
    }
    .steps{
        display:none;

    }
    .activestep{
        display:block;
    }
    .pinkbtn{
         background-color: #ed5373 ;
         color: white;
    }
    .logopreview{
        width: 200px;
        display: block;
        margin: 0 auto;
        margin-bottom: 30px;
    }
</style>

<form id="firstloginform" action="{{url('/')}}/firstlogin/save" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="container steps step1 activestep" step="1">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center justify-content-center text-div">
                    <h4 class="top-heading p-3">Welcome to E-Proposals</h4>
                    <div class="content-div p-5">
                        <h4>Let's get you sending your first proposal as quickly as possible</h4>
                    <p class="faded">This step will quickly get the basics of your proposals design</p>
                    <p class="faded">It will take about 90 seconds if you have your logo to hand</p>
                    <button type="button" class="btn mt-3 start pinkbtn" onclick="step(1)" >Next: Company Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- company --}}

    <div class="container steps"  step="2">
        <div class="row">
            <div class="col-md-12">
                <div class=" justify-content-center text-div" style="top: 100px;">
                    <div class="content-div p-5">

                            {{-- <div class="form-group">
                                <label for="option1">Which timezone are you in?</label>
                                <select class="form-control" >
                                    <option selected>Choose Timezone</option>
                                    <option value="1">London-05:46</option>
                                  </select>
                            </div> --}}
                            <div class="form-group">
                                <label for="option1">Default currency</label>
                                <select class="form-control" name="currency" >
                                    {{-- <option selected>Choose currency</option> --}}
                                    <option value="$">US Dollar(USD)</option>
                                    <option value="&euro;">Euro</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <label for="option1">How many people write proposal in your company?</label>
                                <select class="form-control" name="company_strength">
                                    <option value="">--Select--</option>
                                    <option value="10">1-10</option>
                                    <option value="20">10-20</option>
                                    <option value="50">20-50</option>
                                    <option value="100">50-100</option>

                                  </select>
                            </div>
                            <button type="button" class="btn mt-3 createcompany pinkbtn" onclick="step(2)">Next: Upload Logo</button>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- upload logo --}}

    <div class="container steps"  step="3">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center justify-content-center text-div" style="top: 100px;">
                    <div class="content-div p-5">
                        <h4 class="top-heading p-3">Upload Your logo for your Proposals</h4>
                        <div class="content-div p-5">
                            <h4>Use a logo suitable for a white background and make sure the file is a PNG, JPG or JPEG</h4>
                            <img src="" alt="" class="logopreview">
                            <input type="file" class="companylogo" style="display:none;" name="company_logo" id="">
                            <button type="button"  style="border: 1px solid #000; margin-bottom:20px;" class="btn chooseimage">Browse for Logo</button>
                            <div>
                                <button type="button" class="btn mt-3 uploadlogo pinkbtn" onclick="step(3)">Next: Your Product or Service</button>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- product --}}


    <div class="container steps" step="4">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center justify-content-center text-div" style="top: 100px;">
                    <div class="content-div p-5">
                        <h4 class="top-heading p-3">Upload Product and Services</h4>
                        <div class="content-div p-5">
                            <h4>Add a few of the Products or Services you offer. Don't worry, you can add more later inside your account.</h4>
                            <div class="form-group">
                                <input type="text" placeholder="Name Your Product" name="productname" class="form-control">
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn mt-3 saveall pinkbtn" onclick="step(4)"> Save </button>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>



    <script defer>
        $(document).ready(function (){
            $('.skip').click(function(){
                console.log('hit');

                var current_section = $('.activestep');
                // console.log($(this).hasClass('active'));
                var next = $(current_section).next();
                if(next.length > 0){
                    next.addClass('activestep');
                    current_section.removeClass('activestep');
                    console.log(next.attr('step') == "4");
                    if(next.attr('step') == "4"){
                        console.log('hit in if');
                        $('#skipbtn').hide();
                    }
                }

                // console.log(current_section.html());


            });

            $('.chooseimage').click(function(){
                $('.companylogo').trigger('click');
            });

            $('.companylogo').change(function(){
                var fileinput = $('.companylogo');


                var file = $(fileinput)[0].files[0];
                var reader = new FileReader();


                reader.readAsDataURL(file);

                reader.onload = function (e) {

                    $('.logopreview').attr('src', e.target.result);
                    // $(block).attr('state', 'active');
                }
            });
        });


        function findactive(){
            $('.steps').each(function(){
                if($(this).hasClass('active')){
                    var current_section = $(this);
                    console.log($(this).hasClass('active'));

                    return (current_section);
                }
            });
        }



        function step(id){
            switch (id) {
                case 1:
                    $('.skip').trigger('click');
                    break;
                case 2:
                    $('.skip').trigger('click');
                    break;

                case 3:
                    $('.skip').trigger('click');
                    break;

                case 4:
                    $('#firstloginform').submit();
                    console.log('completed');
                    break;

            }
        }


    </script>


@endsection
