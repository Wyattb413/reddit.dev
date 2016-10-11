<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 30px;
            }

            a {
                text-decoration: none;
                font-size: 32px;
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">You Guessed: {{$guess}}</div>
                <hr>
                @foreach ($dice_rolls as $dice_roll)
                    @if ($dice_roll == $guess)
                        <div class="title">The Roll Was: {{$dice_roll}}...You are Psychic¿</div>
                        @else
                            <div class="title">The Roll Was: {{$dice_roll}}</div>
                    @endif
                @endforeach
                <br>
                <div class="title">Make Another Guess</div>
                <hr>
                @for ($i = 1; $i <= 6; $i ++)
                    <ul>
                        <li><a href="{{ action('HomeController@rolldice', $i)}}">Guess: {{$i}}</li>
                    </ul>
                @endfor
            </div>
        </div>
    </body>
</html>
