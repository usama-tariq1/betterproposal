<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <script data-require="jquery@*" data-semver="2.1.4" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>

    <title>Create New Proposal</title>
</head>

<body style="background-color: #ffffff !important">
    @include('template.partials.header')
    @yield('content')
    {{-- @include('start.Master.partials.footer') --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>

    <script>
        $(window).scroll(function() {
            var winScrollTop = $(window).scrollTop();
            var winHeight = $(window).height();
            var floaterHeight = $('#sidebar-create-trigger').outerHeight(true);
            var fromBottom = 20;
            var top = winScrollTop + winHeight - floaterHeight - fromBottom;
            $('#sidebar-create-trigger').css({'top': top + 'px'});
        });
        function addPage() {
            $('#content-area').show();
            $('#blankpage').hide();
            $('#form1').submit();
        }
        function showContent() {
            document.getElementById("content-tab").classList.add("current");
            document.getElementById("new").classList.add("current");
            document.getElementById("library-tab").classList.remove("current");
            document.getElementById("library").classList.remove("current");
        }
        function showlibrary() {
            document.getElementById("library-tab").classList.add("current");
            document.getElementById("library").classList.add("current");
            document.getElementById("content-tab").classList.remove("current");
            document.getElementById("new").classList.remove("current");
        }
        function openNav() {
            document.getElementById("sidebar-create").style.display = "block";
            document.getElementById("create-tab").style.display = "none";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("sidebar-create").style.display = "none";
            document.getElementById("create-tab").style.display = "block";
        }

        function goToNextPage() {
            let value = $('#stepValue').val();
            if (value == 'a') {
                $('#stepValue').val('b');
                $('#section1').show();
                document.getElementById("save-btn").style.display = "none";
                document.getElementById("cancel-btn").style.display = "block";
                document.getElementById("back-btn").style.display = "none";
                document.getElementById("back-btn").style.display = "block";
            } else if (value == 'b') {
                $('#stepValue').val('c');
                $('#section1').hide();
                $('#section2').show();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "block";
                document.getElementById("back-btn").style.display = "block";
            } else if (value == 'c') {
                $('#stepValue').val('d');
                $('#section2').hide();
                $('#section3').show();
                $('#section4').show();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "none";
                document.getElementById("change-btn").style.display = "block";
                document.getElementById("merge-btn").style.display = "block";
                document.getElementById("back-btn").style.display = "block";
            } else if (value == 'd') {
                $('#stepValue').val('e');
                $('#section3').hide();
                $('#section4').hide();
                $('#section5').show();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "none";
                document.getElementById("change-btn").style.display = "none";
                document.getElementById("merge-btn").style.display = "block";
            } else if (value == 'e') {
                $('#stepValue').val('f');
                $('#section5').hide();
                $('#section6').show();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "none";
                document.getElementById("change-btn").style.display = "none";
                document.getElementById("merge-btn").style.display = "none";
            } else if (value == 'f') {
                $('#section6').hide();
                $('#section7').show();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "none";
                document.getElementById("change-btn").style.display = "none";
                document.getElementById("merge-btn").style.display = "none";
                document.getElementById("next-btn").style.display = "none";
                document.getElementById("send-btn").style.display = "block";
            }
        }

        function gotoPreviousPage() {
            let value = $('#stepValue').val();
            if (value == 'b') {
                $('#section7').hide();
                $('#section6').hide();
                $('#section5').hide();
                $('#section4').hide();
                $('#section3').hide();
                $('#section1').hide();
                $('#section2').show();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "block";
                document.getElementById("send-btn").style.display = "none";
                document.getElementById("back-btn").style.display = "none";
            } else if (value == 'c') {
                $('#stepValue').val('b');
                $('#section2').hide();
                $('#section3').show();
                $('#section4').show();
                $('#section1').hide();
                $('#section5').hide();
                $('#section6').hide();
                $('#section7').hide();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "none";
                document.getElementById("change-btn").style.display = "block";
                document.getElementById("merge-btn").style.display = "block";
                document.getElementById("back-btn").style.display = "block";
                document.getElementById("send-btn").style.display = "none";
            } else if (value == 'd') {
                $('#stepValue').val('c');
                $('#section3').hide();
                $('#section4').hide();
                $('#section5').show();
                $('#section1').hide();
                $('#section2').hide();
                $('#section6').hide();
                $('#section7').hide();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "none";
                document.getElementById("change-btn").style.display = "none";
                document.getElementById("merge-btn").style.display = "block";
                document.getElementById("send-btn").style.display = "none";
            } else if (value == 'e') {
                $('#stepValue').val('d');
                $('#section5').hide();
                $('#section6').show();
                $('#section7').hide();
                $('#section4').hide();
                $('#section3').hide();
                $('#section2').hide();
                $('#section1').hide();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "none";
                document.getElementById("change-btn").style.display = "none";
                document.getElementById("send-btn").style.display = "none";

                document.getElementById("next-btn").style.display = "block";
            } else if (value == 'f') {
                $('#stepValue').val('e');
                $('#section6').hide();
                $('#section7').show();
                document.getElementById("save-btn").style.display = "block";
                document.getElementById("cancel-btn").style.display = "none";
                document.getElementById("change-btn").style.display = "none";
                document.getElementById("next-btn").style.display = "none";
                document.getElementById("send-btn").style.display = "block";
            }
        }

    </script>
</body>

</html>
