<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SkateSpace</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('css/app.css')}}">


    </head>
    <body>
        <!-- navbar  -->
        <ul class="tabs group">
            <li class="active"><a href="#one">One</a></li> 
            <li><a href="#two">Two</a></li> 
            <li><a href="#three">Three</a></li>
            <li><a href="#three">Four</a></li> 
        </ul>

        <!-- Main Content  -->
        <div id="app">

        </div>

        
    </body>
</html>
