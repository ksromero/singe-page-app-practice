<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <title>Laravel</title>
    </head>
    <body>
       <div id="app">
           @include('layouts.nav')
           <div class="container">
                <router-view></router-view>
           </div>
       </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
