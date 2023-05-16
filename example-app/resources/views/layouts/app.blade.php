<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="header-elements">
        <h1>Sport</h1>
        <div class="header-nav">
            <a href="<?php echo url('sportmenu')?>">Home</a>
            <a href="<?php echo url('players')?>">Players</a>
            <a href="<?php echo url('teams')?>">Teams</a>
            <a href="<?php echo url('leagues')?>">Leagues</a>
        </div>
    </div>
</div>

<div class="cont-player">
    @yield('arr_api')
</div>

<div class="cont-teams">
    @yield('teams_api')
</div>

<div class="cont-leagues">
    @yield('leagues_api')
</div>

<footer>
    <h2 class="footer-title">Sports Website</h2>
    <p class="footer-description">Stay up-to-date with the latest sports news and events.</p>

    <ul class="footer-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Teams</a></li>
        <li><a href="#">Players</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <ul class="footer-social">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    </ul>

    <p class="footer-disclaimer">© 2023 Sports Website. All rights reserved.</p>
</footer>
</body>
</html>
