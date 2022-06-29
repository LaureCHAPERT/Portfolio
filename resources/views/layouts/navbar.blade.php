<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Portfolio" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mon Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body class="antialiased">

    <nav id="mainNav" class="navbar navbar-expand-lg py-lg-4 navbar-dark" style="padding: 23px 0px;">
                <div class="container">
                    <img class="logo-img " src="{{ asset('images/logo.png') }}" alt="logo ">
                    <button class="navbar-toggler navbar-toggler-right" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
                <div id="navbarResponsive" class="collapse navbar-collapse">
                <ul class="navbar-nav flex-grow-1 justify-content-evenly">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects">Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                        </ul>
                    </div>

                </div>
            </nav>
