<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    </head>
    <body>
        <nav>
            <div class="name">
                <a href="{{ route('witch.index') }}" class="logo"><img src="{{ asset('images/recipe-keeper.svg') }}"></a>
                <p >ВІДЬОМСЬКІ РЕЦЕПТИ</p>
            </div>

            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="{{ route('witch.index') }}">ГОЛОВНА</a></li>
                    <li><a href="{{ route('witch.recipes') }}">РЕЦЕПТИ</a></li>
                    <li><a href="">МАГАЗИН</a></li>
                    <li><a href="{{ route('witch.about') }}">ПРО НАС</a></li>
                    <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <!--------Javascript for Toggle Menu---------->
        <script>
            var NavLinks = document.getElementById("navLinks")
            function showMenu(){
                NavLinks.style.right = "0";
            }
            function hideMenu(){

                NavLinks.style.right = "-200px";
            }
        </script>
    @yield('content')

    <div class="footr">
        <div class="social-media">
            <a href=""><img src="{{ asset('images/instagram.svg') }}" alt="Instagram logo"></a>
            <a href=""><img src="{{ asset('images/facebook-logo.svg') }}" alt="Facebook logo"></a>
            <a href=""><img src="{{ asset('images/youtube-play.svg') }}" alt="Youtube logo"></a>
        </div>
        <div class="lineHorizontal__container">
            <div class="lineHorizontal"></div>
        </div>
        <div class="info">
            <a href="">TERMS & CONDITIONS</a>
            <a href="">CONTACTS</a>
            <a href="">PRIVACY & COOKIE POLICY</a>
            <a href="">DELIVERY & RETURNS</a>
        </div>
    </div>
    </body>
