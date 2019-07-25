<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <title>@yield('title')</title>

        <!-- font-icon -->
        <!-- <script src="https://unpkg.com/@ionic/core@latest/dist/ionic.js"></script>
        <link href="https://unpkg.com/@ionic/core@latest/css/ionic.bundle.css" rel="stylesheet"> -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #B0BEC5;
                font-family: 'Lato';
                font-weight: 350;
                height: 100vh;
                margin: 0;
            }
            .titi{
              background-color: #444444;
            }
            .forest{
              color: forestgreen!important;
              font-family:serif;
              font-size: 1.0rem !important;
              font-weight: bold !important;
            }
            i:hover{
              font-size: 10%;
            }
            .whitten{
              background: white;
              -moz-box-shadow: 1px 1px 1px 1px #666666;
              -webkit-box-shadow: 1px 1px 1px 1px #666666;
              box-shadow: 1px 1px 1px 1px #666666  !important;
              padding:1.2%;
            }
            .cap{
              text-transform:uppercase;
              font-weight: 900;
              color: #333333;
            }
            .success{
              background-color: forestgreen;
              color: #fff;
              font-weight: 600;
              border-radius: 10px !important;
            }
            .danger{
              background-color: rgba(190,0,0,0.6);
              color: #fff;
              font-weight: 600;
              border-radius: 10px !important;
            }
            .whoos{
              -moz-box-shadow: 5px 5px 5px 5px #777777;
              -webkit-box-shadow: 5px 5px 5px 5px #777777;
              box-shadow: 5px 5px 5px 5px #777777  !important;
              background-color: #fff !important;
              padding:0.5em;
              color: #333333;
            }

            .header{
                font-family: arial,sans-serif;
                font-weight: 500;
            }
            .moos{
              -moz-box-shadow: 1px 1px 1px 1px #777777;
              -webkit-box-shadow: 1px 1px 1px 1px #777777;
              box-shadow: 1px 1px 1px 1px #777777  !important;
              background-color: #fff !important;
              padding:0.5em;
              color: #333333;
            }
            .blacked{
              color:#333333;
              font-weight: 600;
            }

            .full-height {
                height: 100vh;
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
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .mamber{
              font-family: sans-serif;
              color: forestgreen;
              font-weight: bold;
              font-size: 27px;
            }
        </style>
    </head>
    <body>

      @include('shared.navbar')

@yield('content')

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    </body>
</html>
