<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <style>
        .img{
            background-image: url("{{asset('img/backimg.jpg')}}");
        }
    </style>
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
</head>
<body class="img bg-no-repeat bg-cover bg-center;">
    <!-- header -->
    <!-- nav -->
    @yield('content')
    <!-- footer -->
    <!-- script -->
</body>
</html>