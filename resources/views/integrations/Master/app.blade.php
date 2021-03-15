<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <title></title>
</head>
<body style="background-color: #E3E6ED;">
@include('integrations.Master.partials.header');
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h3><a style="text-decoration: underline; font-family: Roboto, sans-serif; font-weight: 400; font-size: 22px">Settings</a>>Integrations</h3>
        </div>
        <div class="col-md-3 mb-5 create-products" style="display: none">
            <button class="create" style="margin-left: 25%"><img src="{{asset('assets/images/add-icon1.png')}}" width="40px" alt="">Create New Proposal</button>
        </div>
    </div>
    <div class="row">

        <div class="col-md-3">
            @include('integrations.Master.partials.sidebar')
        </div>

        <div class="col-md-9">

            @yield('content')
        </div>
    </div>
</div>
@include('integrations.Master.partials.footer');
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function toDocument() {
        $('#section2').show();
        document.getElementById("light-sidebar").style.display = "none";
        document.getElementById("dark-sidebar").style.display = "block";
    }
</script>

</body>
</html>
