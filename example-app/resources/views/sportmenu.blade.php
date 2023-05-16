<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport</title>
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
<div>
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

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="https://rare-gallery.com/mocahbig/392954-fifa-22-football-game-football-player-4k-pc-wallpaper.jpg"
                    class="d-block w-100"
                    alt="photo1"
                    style="height: 500px; width: 200px;padding: 50px; margin-top: 1%">
            </div>
            <div class="carousel-item">
                <img
                    src="https://4kwallpapers.com/images/wallpapers/vinicius-junior-brazilian-football-player-vini-jr-soccer-3840x2160-7795.jpg"
                    class="d-block w-100" alt="..." style="height: 500px;padding: 50px; width: 200px; margin-top: 1%">
            </div>
            <div class="carousel-item">
                <img
                    src="https://free4kwallpapers.com/uploads/originals/2016/07/22/cristiano-ronaldo-portuguese-football-player-4k-wallpaper.jpg"
                    class="d-block w-100" alt="..." style="height: 500px;padding: 50px; width: 200px; margin-top: 1%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" ching
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="venues">
        <h1>Venues</h1>
        <div class="venues-container">
            @foreach(array_slice($api_arr['venues'], 0, 9) as $venue)
                <div class="venues-card">
                    <img src="{{$venue['image_path']}}">
                    <p>City: {{$venue['city']}}</p>
                    <p>Name: {{$venue['name']}}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="fixtures">
        <h1>Fixtures</h1>
        <div class="fixtures-container">
            @foreach(array_slice($api_arr['fixtures'], 0, 10) as $fixture)
                <div class="fixtures-results">
                    <p>Round: {{$fixture['round']}}</p>
                    <p>Starting: {{$fixture['starting_at']}}</p>
                    <p>Status: {{$fixture['status']}}</p>
                    <p>People of match: {{$fixture['man_of_match_id']}}</p>
                    <p>Note: {{$fixture['note']}}</p>
                </div>
            @endforeach
        </div>
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
</div>
</body>
</html>
