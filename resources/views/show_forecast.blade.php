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
        

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
            .hero {
              position: absolute;
              min-height: 100vh;
              min-width: 100vw;
              top: 0;
              bottom: 0;
              background-color: rgba(31, 34, 118, 0.5);
              z-index: -5;
            }

            .navbar {
              background-color: rgb(69, 106, 171);
            }

            .navbar a {
              color: white;
              font-size: 25px;
            }

            .weather {
              border: 1px solid white;
              height: 30rem;
              margin-top: 10rem;
              background-color: rgba(0, 0, 0, 0.5);
              border-radius: 20px;
              color: white;
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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h2>
                    {{$city.', '.$name}}
                </h2>

                <div class="links">

                    <div id="icon"><img id="wicon" src="http://openweathermap.org/img/w/{{$weather->icon}}.png" alt="Weather icon">
                        <p>{{$weather->main}}</p>
                        <p>{{$weather->description}}</p>
                    </div>

                    <!-- //main -->
                    <!-- {{var_dump($wind)}}<br> -->
                    <!-- {{var_dump($rain)}}<br> -->
                    <!-- {{var_dump($sys)}}<br> -->
                    <p>Sunrise Time </p>{{date("Y-m-d H:i:s a", $sys->sunrise)}}
                    <p>Sunset Time </p>{{date("Y-m-d H:i:s a", $sys->sunset)}}

                    <p>Date Time </p>{{date("Y-m-d H:i:s a", $date_time)}}
                </div>
            </div>
        </div>
    </body>
</html>
