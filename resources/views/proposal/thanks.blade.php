<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Thanks</title>

        <style>
            html , body{
                padding: 0px ;
                margin: 0px ;
                box-sizing: border-box;
                width: 100%;

            }
            body{
                background-color:#e3e6ed !important;

            }
            .app{
                width: 70%;
                margin: 0 auto;
                margin-top:45px;

            }
            .card{
                background-color:white;
                border-radius: 14px;
                padding: 50px;
                margin: 0 auto;
                display: block;


            }
            .logo{
                width: 200px;
                margin-bottom: 40px;
            }
            .logo > .img{
                width: 100%;            }
            .msg{
                font-size:27px;

            }
            .btn{
                margin-top:40px;
                width: fit-content;
                padding: 12px 20px;
            }
        </style>

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

            <div class="card">
                <div class="logo">
                    {{-- {{dd($proposal)}} --}}
                    <img src="{{url('/')}}/companylogo/{{$proposal->brand->company_logo}}" alt="" class="img">
                </div>
                <div class="msg">
                    Thanks you for signing our Proposal . We will be in touch shortly so that we can get started.
                </div>
                <button class="btn btn-primary">
                    DOWNLOAD AS A PDF
                </button>
            </div>



        </div>






    </body>

</html>
