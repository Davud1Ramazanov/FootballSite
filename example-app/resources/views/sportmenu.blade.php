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

    <div class="greetengs">
        <h1>Welcome to our football family!</h1>
        <p>
            Welcome to the ultimate destination for football enthusiasts! Whether you're a die-hard fan, a passionate
            player, or simply someone who appreciates the beautiful game, you've come to the right place.
            Our football website is your go-to resource for all things related to the world's most popular sport. From
            the latest news and match analyses to insightful interviews with players and coaches, we strive to bring you
            comprehensive coverage that keeps you in the loop.
        </p>
    </div>

    <div class="banner">
        <img src="https://www.japantimes.co.jp/wp-content/uploads/2023/02/np_file_211769.jpeg" alt="Football"
             class="banner-image">
        <div class="banner-content">
            <h1 class="banner-title">Get Ready for the Ultimate Football Experience!</h1>
            <p class="banner-description">Explore the latest news, scores, and highlights.</p>
            <a href="https://www.sportmonks.com/football-api/free-plan/" class="banner-button">Visit Now</a>
        </div>
    </div>


    <div class="countries">
        <h1>Countries</h1>
        <div class="countries-container">
            @foreach(array_slice($api_arr['countries'], 0, 10) as $country)
                <div class="countries-card">
                    <img src="{{ $country['image_path'] }}">
                    <p>Country: {{ $country['name'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="quote">
        <h2>Always stay with us to get the latest news</h2>
    </div>

    <div class="carousel">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
             data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="https://rare-gallery.com/mocahbig/392954-fifa-22-football-game-football-player-4k-pc-wallpaper.jpg"
                        class="d-block w-100"
                        alt="photo1"
                        style="height: 600px; width: 200px;padding: 30px">
                </div>
                <div class="carousel-item">
                    <img
                        src="https://4kwallpapers.com/images/wallpapers/vinicius-junior-brazilian-football-player-vini-jr-soccer-3840x2160-7795.jpg"
                        class="d-block w-100" alt="..."
                        style="height: 600px;padding: 30px; width: 200px">
                </div>
                <div class="carousel-item">
                    <img
                        src="https://free4kwallpapers.com/uploads/originals/2016/07/22/cristiano-ronaldo-portuguese-football-player-4k-wallpaper.jpg"
                        class="d-block w-100" alt="..."
                        style="height: 600px;padding: 30px; width: 200px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                    ching
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
            @foreach(array_slice($api_arr['fixtures'], 0, 12) as $fixture)
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
