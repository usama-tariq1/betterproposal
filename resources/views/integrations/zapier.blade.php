@extends('integrations.Master.app')
@section('content')
    <div class="padding60 overflow block">

        <!-- APP LOGO -->

        <div class="row">
            <div class="grid_12">
                <div class="padding30 integrations-cards" style="float: left; margin-right: 30px">
                    <img src="{{asset('assets/images/zapier (1).png')}}" class="integrations-icon">
                </div>
                <h2>Zapier</h2>
                <span class="microcopy"><a href="https://zapier.com" target="_blank"><strong>zapier.com</strong></a></span><br>
                <div class="tag-connected not">Not Connected</div>
            </div> <!-- end grid 4 cards -->

            <!-- DESCRIPTION AND SETTINGS -->

            <div class="grid_12 omega">

                <p>Use Zapier to connect Better Proposals with over 1,000 apps to help automate your workflows.</p>

                <h3>How to connect your account</h3>

                <p></p><ol>
                    <li><a href="https://zapier.com/app/login/" target="_blank">Log in</a> to your Zapier account or <a href="https://zapier.com/sign-up/" target="_blank">sign up</a> for one here.</li>
                    <!--<li>Click our invite link here: <a href="https://zapier.com/developer/invite/92201/22ad08ce867a17e0c2e0f561db34c3a7/" target="_blank">https://zapier.com/developer/invite/92201/22ad08ce867a17e0c2e0f561db34c3a7/</a></li>-->
                    <li>Take a look below at some of the Zaps we've pre-designed for you, or you can go in and create your own.</li>
                    <li>When you start to create a Better Proposals Zap, you'll be prompted to connect a new account. This will open a popup asking for an API token.</li>
                    <li>Generate your API key below and paste it into the box in the popup</li>
                    <li>Click their 'Yes, continue' button, and you're all set</li>
                </ol><p></p>

                <h3>Your API key</h3>


                You don't have an API Key yet, click the button below to create one.<br><br>

                <div class="grid_12 omega" style="margin-bottom: 60px">
                    <a href="../../integrations/"><div class="button white left save">Cancel</div></a>
                    <a href="?action=generate"><div class="button pink left nomargin save" style="width: auto; margin: 0">Generate API Key</div></a>
                </div>

                <div class="grid_12">
                    <script src="https://zapier.com/apps/embed/widget.js?services=better-proposals&amp;container=true&amp;limit=10"></script>
                    <style type="text/css">.zap-widget-IjTTH6Hy {
                                position: relative;
                                margin: 10px 0;
                            }

                            .zap-widget-IjTTH6Hy .zap-widget {
                                overflow: hidden;

                                font:  normal normal 400 14px/1.5 'Open Sans', 'Helvetica Neue', Helvetica,
                                Arial, 'Lucida Grande', sans-serif; ;
                                min-width: 200px;
                            }

                            .zap-widget-IjTTH6Hy .zap-widget * {
                                -webkit-box-sizing: border-box;
                                box-sizing: border-box;
                                font-size: 14px;
                                line-height: 1.5;
                                margin: 0;
                                padding: 0;
                                background: transparent;
                            }

                            .zap-widget-IjTTH6Hy .zap-header {
                                font-size: 18px;
                                font-weight: 300;
                                padding: 20px 0 0.5em;
                            }

                            .zap-widget-IjTTH6Hy .zap-widget.zap-theme-dark .zap-header {
                                color:  #fff ;
                            }

                            .zap-widget-IjTTH6Hy .zap-row,
                            .zap-widget-IjTTH6Hy .zap-empty {
                                background:  #fff ;
                                border-radius: 3px;
                                border:  1px solid #DADFE2 ;
                                margin-bottom: 1em;
                                padding: 1em;
                            }

                            .zap-widget-IjTTH6Hy .zap-widget.zap-theme-dark .zap-row,
                            .zap-widget-IjTTH6Hy .zap-widget.zap-theme-dark .zap-empty {
                                border-color: #fff ;
                            }

                            .zap-widget-IjTTH6Hy .zap-inner-container {
                                display: table;
                                overflow: auto;
                                table-layout: fixed;
                                width: 100%;
                            }

                            .zap-widget-IjTTH6Hy .zap-services {
                                display: table-cell;
                                vertical-align: middle;
                                width: 165px;
                            }

                            .zap-widget-IjTTH6Hy .zap-service {
                                border:  1px solid #DADFE2 ;
                                border-radius: 4px;
                                display: inline-block;
                                vertical-align: middle;
                                height: 36px;
                                width: 36px;
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: 26px 26px;
                            }

                            .zap-widget-IjTTH6Hy .zap-service-count {
                                color:  #354147 ;
                                text-align: center;
                                height: 36px;
                                width: 36px;
                                padding: 7px 5px;
                                border-radius: 4px;
                            }

                            .zap-widget-IjTTH6Hy .zap-service-count:hover {
                                text-decoration: none;
                            }

                            .zap-widget-IjTTH6Hy .zap-services .zap-arrow {
                                display: inline-block;
                                margin: 0 9px;
                                vertical-align: middle;
                                background-image: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTBweCIgaGVpZ2h0PSIxMnB4IiB2aWV3Qm94PSIwIDAgMTAgMTIiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE5OC4wMDAwMDAsIC0xMzcuMDAwMDAwKSIgZmlsbD0iIzk2OUVBMiIgZmlsbC1ydWxlPSJub256ZXJvIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0Ny4wMDAwMDAsIDEwNC4wMDAwMDApIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNy4wMDAwMDAsIDE3LjAwMDAwMCkiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEzNC41MDAwMDAsIDE2LjAwMDAwMCkiPjxwYXRoIGQ9Ik0wLDEwLjU0NDQ2NjEgQzAsMTEuMzgxNDMyNiAwLjk0ODY0ODY1MSwxMS44NTk2OTkxIDEuNjI5NzI5NzMsMTEuMzgxNDMyNiBMOC41NjIxNjIxNSw2LjYyMjY4MDczIEM5LjE0NTk0NTkzLDYuMjE2MTU0MTUgOS4xNDU5NDU5Myw1LjM1NTI3NDQyIDguNTYyMTYyMTUsNC45NDg3NDc4NyBMMS42Mjk3Mjk3MywwLjE4OTk5NTk4MiBDMC45NDg2NDg2NTEsLTAuMjg4MjcwNTQgMCwwLjE4OTk5NTk4MiAwLDEuMDI2OTYyNCBMMCwxMC41NDQ0NjYxIFoiPjwvcGF0aD48L2c+PC9nPjwvZz48L2c+PC9nPjwvc3ZnPg==");
                                width: 10px;
                                height: 12px;
                            }

                            .zap-widget-IjTTH6Hy .zap-description {
                                color:  #354147 ;
                                display: table-cell;
                                font-size: 1.1em;
                                padding: 0 1em;
                                vertical-align: middle;
                            }

                            .zap-widget-IjTTH6Hy .zap-cta {
                                display: table-cell;
                                text-align: right;
                                vertical-align: middle;
                                width: 125px;
                            }

                            .zap-widget-IjTTH6Hy a.zap-button {
                                background: #136BF5;
                                height: 40px;
                                width: 100%;
                                -webkit-box-align: center;
                                align-items: center;
                                appearance: none;
                                border: 1px solid transparent;
                                border-radius: 10px;
                                box-sizing: border-box;
                                color:  #fff ;
                                position: relative;
                                cursor: pointer;
                                display: inline-flex;
                                font-weight: 700;
                                -webkit-box-pack: center;
                                justify-content: center;
                                line-height: 1.3;
                                text-align: center;
                                text-decoration: none;
                            }

                            .zap-widget-IjTTH6Hy a.zap-button-outline {
                                background: transparent;
                                border: 1px solid #136BF5;
                                color:  #136BF5 ;
                            }

                            .zap-widget-IjTTH6Hy a.zap-button:hover {
                                box-shadow: inset 0em 0em 0em 10em rgba(0, 0, 0, 0.1);
                                color:  #fff ;
                            }

                            .zap-widget-IjTTH6Hy a.zap-button-outline:hover {
                                background: #136BF5;
                                color:  None ;
                            }

                            .zap-widget-IjTTH6Hy .zap-empty {
                                color:  #354147 ;
                                font-size: 1.14em;
                                text-align: center;
                                vertical-align: middle;
                            }

                            .zap-widget-IjTTH6Hy .zap-empty span {
                                vertical-align: middle;
                                display: inline-block;
                                padding: 1em 0 1em 0.75em;
                            }

                            .zap-widget-IjTTH6Hy .zap-empty svg {
                                display: inline-block;
                                vertical-align: middle;
                            }

                            .zap-widget-IjTTH6Hy .zap-empty {
                                padding: 2.5em 0 3.2em 0;
                            }

                            .zap-widget-IjTTH6Hy .zap-empty .zap-header.zap-header-strong{
                                font-weight: bold;
                                font-size: 18px;
                                padding: 0;
                                margin-bottom: 10px
                            }

                            .zap-widget-IjTTH6Hy .zap-empty .zap-copy{
                                text-align: center;
                                font-size: 16px;
                                max-width: 250px;
                                margin: 0 auto;
                            }

                            .zap-widget-IjTTH6Hy .zap-empty .zap-button{
                                padding: 15px;
                                font-size: 16px;
                                max-width: 283px;
                                height: auto;
                                margin-top: 20px;
                            }

                            .zap-widget-IjTTH6Hy .zap-power-bar {
                                margin-top: -5px;
                                overflow: visible;
                                text-align: right;
                            }

                            .zap-widget-IjTTH6Hy .zap-power-bar__description {
                                color:  #969ea2 ;
                                display: inline-block;
                                font-size: 15px;
                                overflow: visible;
                                vertical-align: middle;
                            }

                            .zap-widget-IjTTH6Hy .zap-power-bar__description a.zap-power-bar__link {
                                color:  #969ea2 ;
                                background: transparent;
                                border: 0;
                                font-size: 15px;
                                font-weight: normal;
                                text-decoration: underline;
                                vertical-align: bottom;
                                box-shadow: none;
                            }

                            .zap-widget-IjTTH6Hy .zap-widget.zap-theme-dark .zap-power-bar__description,
                            .zap-widget-IjTTH6Hy .zap-widget.zap-theme-dark .zap-power-bar__description a.zap-power-bar__link {
                                color:  #fff ;
                            }

                            .zap-widget-IjTTH6Hy .zap-power-bar a.zap-zapier-logo {
                                border: 0;
                                font: 0/0 a;
                                color: transparent;
                                display: inline-block;
                                height: 30px;
                                vertical-align: middle;
                                width: 65px;
                                box-shadow: none;
                                background: transparent;
                            }

                            /* md */
                            .zap-widget-IjTTH6Hy.zap-embed-md .zap-inner-container {
                                display: block;
                            }

                            .zap-widget-IjTTH6Hy.zap-embed-md .zap-services,
                            .zap-widget-IjTTH6Hy.zap-embed-md .zap-description,
                            .zap-widget-IjTTH6Hy.zap-embed-md .zap-cta {
                                display: block;
                                width: 100%;
                                text-align: center;
                            }

                            .zap-widget-IjTTH6Hy.zap-embed-md .zap-services,
                            .zap-widget-IjTTH6Hy.zap-embed-md .zap-description {
                                margin-bottom: 10px;
                            }

                            .zap-widget-IjTTH6Hy.zap-embed-md .zap-power-bar {
                                text-align: center;
                            }

                            /* sm */
                            .zap-widget-IjTTH6Hy.zap-embed-sm .zap-services .zap-arrow {
                                background: none;
                            }

                            @media only screen and (max-width: 500px) {
                                .zap-widget-IjTTH6Hy.zap-embed-resp-fallback .zap-inner-container {
                                    display: block;
                                }

                                .zap-widget-IjTTH6Hy.zap-embed-resp-fallback .zap-services,
                                .zap-widget-IjTTH6Hy.zap-embed-resp-fallback .zap-description,
                                .zap-widget-IjTTH6Hy.zap-embed-resp-fallback .zap-cta {
                                    display: block;
                                    width: 100%;
                                    text-align: center;
                                }

                                .zap-widget-IjTTH6Hy.zap-embed-resp-fallback .zap-services,
                                .zap-widget-IjTTH6Hy.zap-embed-resp-fallback .zap-description {
                                    margin-bottom: 10px;
                                }

                                .zap-widget-IjTTH6Hy.zap-embed-resp-fallback .zap-button {
                                    display: block;
                                }

                                .zap-widget-IjTTH6Hy.zap-embed-resp-fallback .zap-power-bar {
                                    text-align: center;
                                }

                                /* sm */
                                .zap-widget-IjTTH6Hy.zap-embed-resp-fallback .zap-services .zap-arrow {
                                    background: none;
                                }
                            }</style>

                </div>

            </div>
        </div> <!-- end grid 12 -->
    </div>
        </div>>
@endsection
