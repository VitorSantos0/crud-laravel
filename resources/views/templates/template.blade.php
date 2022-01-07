<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD com Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" https="https//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark" style="font-family: 'Nunito', sans-serif">
        <div class="container-fluid">            
            <a class="navbar-brand text-danger" href="{{"/laravel"}}">
                <img src="https://laravel.com/img/logomark.min.svg" 
                alt="Laravel" width="50" height="52">                 
                <b style="font-size: 1.6rem">Laravel</b>                                
            </a>
        </div>
    </nav>
    @yield('content')

    <script src="{{url("assets/js/javascript.js")}}"></script>
</body>
</html>