<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>Register</title>
  </head>
  <body class="bg-img" style="background-image: url('{{asset('assets/images/bg-signup.png')}}'); background-size: 100%;">
    <div class="container">
      <div class="row">
        <div class=" col-md-12">
          <div class="text-center register-head pt-5 mt-5">
            <img width="200px" class="pb-2" src="{{asset('assets/images/footlogo.png')}}" alt="">
            <h1 class="mt-5 pb-5">Start your 14-day free trial now</h1>
            <p>Start winning more business today</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{route('register')}}" class="p-5 mt-5 form-div mb-5" style="width: 80%; float: right;">
                @csrf
              <div class="form-group">
                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                <input id="name" type="text" class=" p-4 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                 @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                 @enderror
              </div>
              <div class="form-group">
                <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="p-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                   <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                   </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="company1">Company Name</label>
                <input name="company" type="text" class="p-4 form-control" id="">
              </div>
              <div class="form-group">
                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="p-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                 @error('password')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                 @enderror
              </div>
              <div class="form-group">
                <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="p-4 form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Captcha</label>
              </div>
              <button type="submit" class="btn report-btn btn-primary">Create Account</button>
              <p class="agreement pt-2">By signing up, you agree to our</p>
            <p class="agreement"><a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a></p>
            </form>


        </div>
        <div class="col-md-6">
          <div class="review text-center pt-5 mt-5">
            <p class="review-txt">Better Proposals has helped me improve the number of people who go ahead from the proposals I send.</p>
            <p class="review-txt pt-5">They look more impressive, it's a great conversation point and it saves me absolutely hours.</p>
            <hr class="mt-5 review-divide">
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
