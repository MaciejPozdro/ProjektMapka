<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="/js/semantic.min.js"></script>
</head>
<body>
<div class="container">
    <div class="ui fluid three item menu">
        <a href="{{route('cities.index')}}" class="item">Miasta</a>
        <a href="{{route('announcements.index')}}" class="item">Ogłoszenia</a>
        <a href="{{route('photos.index')}}" class="item">Zdjecia</a>
    </div>
    @yield('body')
</div>
</body>
</html>