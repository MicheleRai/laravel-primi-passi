<?php
$myArray = ['Hello', 'World'];
$myLinkArry = ['ciao1', 'ciao2', 'ciao3']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
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
        @foreach ($myArray as $parola)

            <span class="{{$loop->first ? 'red' : 'blue'}}">{{$parola}}</span>

        @endforeach
    </h1>
    <h2>
        <ol>
            @foreach ($myLinkArry as $link)
                <li>
                    <a href="http://127.0.0.1:8000/{{$link}}">ciao</a>
                </li>
            @endforeach
        </ol>
    </h2>
</body>
</html>
