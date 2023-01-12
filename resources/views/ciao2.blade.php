<?php
$ciaoTxtArry = ['Ri', 'Ciao', 'A', 'Tutti']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1, h2{
            text-align: center
        }
        .red{
            color: red;
        }
        .blue{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>
        @foreach ($ciaoTxtArry as $parola)

            <span class="{{$loop->first ? 'red' : 'blue'}}">{{$parola}}</span>

        @endforeach
    </h1>
</body>
</html>
