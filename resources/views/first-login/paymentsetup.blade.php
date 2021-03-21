<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Welcome</title>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    </head>

    <body>


        <div class="bg-drak">
            <nav class="navbar navbar-light  justify-content-between">
                <a class="navbar-brand"><img width="50%" src="{{asset('assets/images/logo.png')}}"> </a>
                <div class="btngroup" style="display:flex;">
                    {{-- <button class="btn back" id="backbtn"
                        style="display: block; background-color: #ffffff ; color: rgb(0, 0, 0);">Back</button>

                    <button class="btn skip" id="skipbtn"
                        style="display: block; background-color: #ed5373 ; color: white;">Skip Step</button> --}}
                </div>
            </nav>
        </div>

        {{-- content --}}



        <style>
            .skip-btn {
                display: block;
            }

            .faded {
                color: gray !important;
            }

            .steps {
                display: none;

            }

            .activestep {
                display: block;
            }

            .pinkbtn {
                background-color: #ed5373;
                color: white;
            }

            .logopreview {
                width: 200px;
                display: block;
                margin: 0 auto;
                margin-bottom: 30px;
            }

            .title {
                text-align: center;
                margin-bottom: 35px;
                font-size: 25px;
                font-weight: bold;
            }
            .pricebox{
                position: absolute;
                width: 70%;
                left: 50%;
                top: 50%;
                transform: translate(-50% , -50%);
            }

            .paybtn{
                display: block;
                margin: 0 auto;
                margin-top: 40px;
                padding: 15px 40px;
                background-color: #ed5373;
                color: white;
            }
            .paymentselection{
                border-radius: 17px;
            }

        </style>

        <form id="paymentform" action="{{url('/')}}/paymentsetup/checkout" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <select name="pamenttype" id="" class="paymenttype" style="display: none;">
                <option selected value="1">Onetime</option>
                <option value="2">Monthly</option>

            </select>




            <div class="container ">
                <div class="row pricebox">
                    <div class="col-md-6 col-lg-6 onetime paymentselection" type="1" style="border: 4px solid green;">
                        <!-- Pricing Card -->
                        <div class="pricing-card">
                            <div class="card shadow-sm border-light text-center mt-1">
                                <!-- Header -->
                                <header class="card-header bg-white p-3">
                                    <h2 class="h5 text-primary mb-4">One Time</h2>
                                    <span class="d-block">
                                        <span class="display-1 text-dark font-weight-bold">
                                            <span class="align-top font-medium">$</span>40
                                        </span>
                                        <span class="d-block text-light font-small" style="color:gray  !important;">/ Onetime</span>
                                    </span>
                                </header>
                                <!-- End Header -->
                                <!-- Content -->
                                <div class="card-body">
                                    <ul class="list-group ">
                                        {{-- <li class="list-group-item"><strong>1</strong> free domain
                                        </li>
                                        <li class="list-group-item">Storage space:
                                            <strong>5GB</strong></li> --}}

                                    </ul>
                                    <button type="button"
                                        class="btn btn-primary btn-block animate-up-1"
                                        tabindex="0">
                                        Pay One Time

                                    </button>
                                </div>
                                <!-- End Content -->
                            </div>
                        </div>
                        <!-- End of Pricing Card -->
                    </div>
                    <div class="col-md-6 col-lg-6 monthly paymentselection" type="2">
                        <!-- Pricing Card -->
                        <div class="pricing-card">
                            <div class="card shadow-sm border-light text-center mt-1">
                                <!-- Header -->
                                <header class="card-header bg-white p-3">
                                    <h2 class="h5 text-secondary mb-4">Monthly</h2>
                                    <span class="d-block">
                                        <span class="display-1 text-dark font-weight-bold">
                                            <span class="align-top font-medium">$</span>15
                                        </span>
                                        <span class="d-block text-light font-small" style="color:gray !important;">/ month</span>
                                    </span>
                                </header>
                                <!-- End Header -->
                                <!-- Content -->
                                <div class="card-body">
                                    {{-- <ul class="list-group mb-4">
                                        <li class="list-group-item"><strong></strong> free domain
                                        </li>
                                        <li class="list-group-item">Storage space:
                                            <strong>25GB</strong></li>

                                    </ul> --}}
                                    <button type="button"
                                        class="btn btn-secondary btn-block animate-up-1"
                                        tabindex="0">
                                        Pay Monthly
                                    </button>
                                </div>
                                <!-- End Content -->
                            </div>
                        </div>
                        <!-- End of Pricing Card -->
                    </div>


                    <div class="col-md-12 col-lg-12">
                        <button class="btn btn-success paybtn">
                            Proceed to Payment
                        </button>
                    </div>





                </div>
            </div>







        </form>



        <script defer>
            $(document).ready(function () {
                $('.paymentselection').click(function(){
                    var  type = $(this).attr('type');
                    // console.log(type);
                    $('.paymenttype').val(type);
                    $('.paymentselection').css('border', '0px');
                    $(this).css('border', '4px solid green');
                });

            });

        </script>




        {{-- content Ends --}}


        <div class="white"></div>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>


        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}


    </body>

</html>
