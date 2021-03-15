@extends('profile.Master.app')
@section('content')

    <style>
        .settings-referral.facebook{
            background-image: url("{{asset('assets/images/settings-referral-facebook.png')}}");
        }
        .settings-referral.twitter{
            background-image: url("{{asset('assets/images/settings-referral-twitter.png')}}");
        }
    </style>

    <div class="padding60 overflow block">


        <div class="row padding30 center">
            <div class="integrations-title" style="margin: 0 auto">Settings</div>
            <div class="integrations-subtitle" style="margin: 0 auto"><br>Everything you need is on the left. If you want to change how something appears, your login information, add users or upgrade your account - this  is where you do it. If you can't find something, just hover over the profile icon in the top right and click 'Help'.</div>
            <br><br><br>
        </div> <!-- end padding60 -->

        <!-- RIGHT COLUMN -->

        <div class="row mt-5 padding30">
            <div class="col-md-7">
                <div class="card-title">Earn Money by Referring Better Proposals</div>
                <span class="microcopy">If you refer Better Proposals and someone signs up using your link, we'll not only give them a full month free as a gift from you but we'll pay you 100% of their second month to say thanks.</span><br><br>
                <strong>Your link:</strong><br>
                <input value="https://betterproposals.io?rf=241111762" class="textbox" style="margin-top: 10px; margin-bottom: 10px">
            </div>
            <div class="col-md-5 omega">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//betterproposals.io?rf=241111762" class="no-ul" target="_blank">
                    <div class="settings-referral facebook">Share on Facebook</div>
                </a>

                <a href="https://twitter.com/intent/tweet?text=Save%20yourself%20hours%20doing%20client%20proposals%20by%20using%20@betterproposals.%20Get%201%20month%20free%20:-)%20https://betterproposals.io?rf=241111762" target="_blank" class="no-ul">
                    <div class="settings-referral twitter">Share on Twitter</div>
                </a>
            </div>
        </div> <!-- end grid 12 -->

    </div>
@endsection
