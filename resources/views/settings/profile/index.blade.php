@extends('settings.Master.app')
@section('content')

    <style>
        .profile-image{
            background-image: url("{{asset('/assets/images/nav-profile-blank.png')}}")
        }
    </style>

    <div class="padding60 block overflow">
        <h2>Your profile</h2>

        <form name="profile-name" id="settings-form" method="post" action="{{url('/')}}/profile/update" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="notification info">IMPORTANT: Email Can Not be Changed .</div>

            <div class="label">Your Name</div>
            <input name="name" id="FirstName" type="text" class="textbox attach-validation" value="{{@Auth::user()->name}}" required="true" >

            <div class="label">Email address</div>
            <div class="label" style="color:#FF0000;"></div>
            <input name="email" id="Email" type="text" disabled="true" class="textbox attach-validation" value="{{@Auth::user()->email}}">


            <div class="label">Profile Image</div>
            @if(Auth::user()->profile)
                <div id="profileimg-preview" class="profile-image mt-2 profilepreview" style="background-image: url({{url('/')}}/profileimage/{{Auth::user()->profile}})">

            @else
                <div id="profileimg-preview" class="profile-image mt-2 profilepreview" style="">

            @endif
            {{-- <div id="profileimg-preview" class="profile-image mt-2 profilepreview" style="{{Auth::user()->profile ? "background-image: url({{url('/')}}/profileimage/{{Auth::user()->profile}})" : '' }}"> --}}

            </div>
            <div class="btn btn-primary chooseimage" style="    margin-top: 15px;"> Choose Image </div>
            <br><br>

            <input type="file" name="profile_image" id="" class="profileimage" style="display:none;" accept="image/*" >




            <div class="col-md-12 omega" style="display: block; clear: both; margin-top: 30px;">
                <a href="{{url('/')}}/settings/"><div class="button white left pl-3 pr-4" style="font-size: 14px;"><span class="icon-cancel"></span>Cancel</div></a>
                <button type="submit" id="save_changes"  class="button green left nomargin saveprofile"><span class="icon-save"></span>Save changes</button>
            </div>

        </form>

    </div>



    <script>
        $(document).ready(function(){
            $('.chooseimage').click(function(){
                $('.profileimage').trigger('click');
            });
        });


        $('.profileimage').on('change' , function(){
            // console.log('hit');

            var fileinput = $('.profileimage');


            var file = $(fileinput)[0].files[0];
            var reader = new FileReader();


            reader.readAsDataURL(file);

            reader.onload = function (e) {

                $('.profilepreview').css('background-image', `url(${e.target.result})`);
                // $(block).attr('state', 'active');
            }


        });



    </script>
@endsection
