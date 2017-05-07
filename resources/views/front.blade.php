<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script
            src="https://code.jquery.com/jquery-1.12.4.js"
            integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="/js/semantic.min.js"></script>
    <script src="/js/map-manager.js"></script>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/front/style.css">
</head>
<body>
<div class="container">
    <div class="header">LOOOOOGO</div>

    <form>
        <div data-role="rangeslider">
            <label for="range-1a">Rangeslider:</label>
            <input onchange="setMinRange(this)" type="range" name="range-1a" id="range-1a" min="0" max="3000" value="400">
            <label for="range-1b">Rangeslider:</label>
            <input onchange="setMaxRange(this)" type="range" name="range-1b" id="range-1b" min="0" max="3000" value="800">
        </div>
    </form>

    @yield('body')

    </div>
    <div class="footer">
        Zajebista strona pozdrawiam
    </div>
</div>
</body>
</html>