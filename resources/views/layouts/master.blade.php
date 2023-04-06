<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
        .main-title{
            text-align: center;
        }
        ul{
            width: 100%;
            background-color: #0d6efd;
        }
        li{

            display: inline;
        }
        a{
            text-decoration: none;
            padding:0 20px;
            margin: 10px;
            color: #a0d3e8;
        }
        a:hover{
            background-color: #2a5d84;
        }
        footer{
            width: 100%;
            height: 10vh;
            display: block;
            background-color:#7d7d7d;
            clear: both;
        }
    </style>
</head>
<body>
{{--<nav>--}}
{{--    <h2 class="main-title">A fancy Title</h2>--}}
{{--    <ul>--}}
{{--        <li><a href="#">Home</a></li>--}}
{{--        <li><a href="#">Categories</a></li>--}}
{{--        <li><a href="#">Contact</a></li>--}}
{{--        <li><a href="#">About</a></li>--}}
{{--    </ul>--}}
{{--</nav>--}}
@include('layouts.header')
@yield('content')
@include('layouts.footer')
{{--<footer></footer>--}}
@php
$i= 10;
echo $i

@endphp
{{--@empty()--}}
{{--@switch()--}}
{{--@isset()--}}
</body>
</html>
