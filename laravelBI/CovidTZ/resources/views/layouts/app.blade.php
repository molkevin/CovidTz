<!DOCTYPE html>


<html lang="hu">
<head>
    <title>COVID és a gazdaság viszonya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/covid.css')}}">
</head>
<body>



<div class="container">
    <div class="jumbotron bg-fej text-center" style="background-image: url('{{asset("img/covid.jpg")}}');">
        <h1>COVID</h1>
        <h3>Külkereskedelmi folyamatok 2020. január–május</h3>
    </div>
    <div class="row">

@yield('content')
