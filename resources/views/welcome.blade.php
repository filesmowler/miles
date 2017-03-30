<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
        <title>Miles Fowler//manage.band</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
                max-width: 100%;
                margin: 1;
            }
            .miles{

                width:100%;
                color: black;
                cursor: auto;
            }
            .milesnav{
                background-color: #000;
                color: #fff;
                width:150%;
                cursor: auto;
            }
            
            .full-height {
                height: 30vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 50px;
                font-weight: 600;
                letter-spacing: .2rem;
                text-decoration: none;
                text-transform: lowercase;
            }
            a.links2 {
                color: #fff;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .2rem;
                text-decoration: none;
                text-transform: lowercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .container {
                justify-content: center;
            }
        </style>
    </head>
<body>
    <div class="col-xs-12">
        <div class="flex-center">
            <div class="content">
                <div class="title">    
                   milesfowler
                </div>
            </div>
        </div>
    </div>
@include('new1')


    <div class="col-xs-12 col-md-4 col-md-offset-0">
        <div class="container">
            <div class="flex-center">
                <div class="links">
                <a href="https://www.facebook.com/milesjulianfowler"> <i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/_kilometers/"> <i class="fa fa-instagram"></i></a>
                <a href="mailto:milesjulianfowler@gmail.com" target="_blank"> <i class="fa fa-envelope"></i></a>
            </div>
        </div>
    </div>
       
    <div class="col-xs-12 col-md-4 col-md-offset-0">

@include('skills')
    </div>







        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
