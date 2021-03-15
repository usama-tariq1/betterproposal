<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
      </script>
      <script src="{{asset('/assets/js/index.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <title>Dashboard-Better Proposals</title>
  </head>
  <body style="background-color: #1E222C;"> 


<div class="container">
  <div class="row">
          <div class="center pt-5 mt-5">
              <div class="tbl white">
              <div class="login">
                  <div class="report-head p-4">
                      <img src="{{asset('/assets/images/logo.png')}}" alt="">
                  </div>
                  <div class="report-body ml-auto mr-auto p-4" style="width: 80% !important;">
                      <form class="mr-auto ml-auto">
                          <div class="form-group">
                            <label for="email1">Enter your Email</label>
                            <input type="email" class="form-control" id="email">
                          </div>
                          <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1">
                          </div>
                          </div>
                          <div class="text-center">
                            <button style="width: 70%; background-color: #46BD78" type="submit" class="mr-auto ml-auto mt-4 report-btn btn btn-primary">SIGN IN</button>
                          </div>
                            <div class="mid row pb-5">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Keep me logged in</label>
                                  </div>
                                  <a class=" pt-1 pl-5 forgot" href="">Forgot Your Pasaword ?</a>
                               </div>
                        </form>
                  </div>
              </div>
          </div>
          </div>
  </div>
</div>