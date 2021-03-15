
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <style>


        .view {
            border: 8px solid #7B8290;
            border-radius: 7px;
            padding: 20px;
        }

        .view .table {
            width: 100%;
            outline: none;
        }

        .view .table tr {
            border: 0px;
        }

        .view .table tr td {
            border: 0px;
        }

        .view .table tr td .bodyholder {
            border: 1px solid lightgray;
            border-radius: 7px;
            margin-top: 20px;
            padding: 20px;
        }

        .view .table tr td .bodyholder .emailmsg {
            font-size: 18px;
        }

        .view .table tr td .bodyholder .emailbutton {
            display: block;
            width: fit-content;
            background-color: #21252F;
            text-align: center;
            color: #FFF;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
            border-radius: 6px;
            margin-top: 25px;
            font-size: 17px;
            text-transform: uppercase;
        }

        /*# sourceMappingURL=emailpreview.css.map */

    </style>

    <div class="view">
        {!! $data !!}

    </div>

</body>
</html>

