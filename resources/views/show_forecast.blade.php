<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                font-size: 84px;
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
            .bg-header {
                height: 70vh;
                background-image: url('../image/bg-image.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                color: white;
                background-position: center;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="bg-header">
                <h2>
                    <img id="wicon" src="http://openweathermap.org/img/w/{{$weather->icon}}.png" alt="Weather icon">
                    <small> {{$weather->main}} ( {{$weather->description}} )</small><br>

                    {{ date("D, M")}} <br>
                    {{$city.', '.$name}}
                    {{$celsius}}  °C | {{$fahrenheit}} F
                </h2>
            </div>

                

            </div>
            <div style="display: flex; justify-content: center; width: 100%; background: #66ccff; border-bottom: 5px solid #3399ff">
                <!-- {{var_dump($wind)}}<br> -->
                <div style="margin: 20px">Sunrise  <br>
                    <i class="fa fa-sun"></i>
                    {{date("H:i:s a", $sys->sunrise)}}
                </div>
                <div style="margin: 20px">Sunset <br>
                    {{date("H:i:s a", $sys->sunset)}} 
                </div>
                <div style="margin: 20px">Current Time <br>
                    {{date("H:i:s a", $date_time)}}
                </div>

            </div>

        </div>
    </body>
</html>
