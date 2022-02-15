<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="/css/state.css" type="text/css">
    <link rel="stylesheet" href="/css/layout.css" type="text/css">
    <link rel="stylesheet" href="/css/theme.css" type="text/css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Portfolio Webkay</title>
</head>
<body>
<div class="header flex flex-row justify-content-space-between">
    <a href="/"><div class="logo">Webkay</div></a>
    <nav class="flex flex-row justify-content-space-around align-items-center">
        <a href="/" class="{{ Request::is('/')?'current':'' }} text-link">Home</a>
        <a href="/projects/index" class="{{ Request::is('/projects/index')?'current-page':'' }} text-link">Projects</a>
        <a href="https://github.com/yazky-droid" class="social-media-link">
            <img src="https://img.icons8.com/fluent/28/000000/github.png" alt="logo-github">
        </a>
        <a href="https://www.linkedin.com/in/yazkymaulanafas/">
            <img src="https://img.icons8.com/metro/28/000000/linkedin.png" alt="">
        </a>
    </nav>
</div>

    @yield('content')

<div class="footer flex flex-row justify-content-space-between">
    <nav class="flex flex-row justify-content-space-around align-center">
        <a href="/" class="{{ Request::is('/')?'current':'' }} text-link">Home</a>
        <a href="/projects/index" class="{{ Request::is('/projects/index')?'current-page':'' }} text-link">Projects</a>
        <a href="https://icons8.com/"><cite>Icons</cite></a>
        <a href="https://github.com/yazky-droid" class="social-media-link">
            <img src="https://img.icons8.com/fluent/28/000000/github.png" alt="logo-github">
        </a>
        <a href="https://www.linkedin.com/in/yazkymaulanafas/">
            <img src="https://img.icons8.com/metro/28/000000/linkedin.png" alt="">
        </a>
    </nav>
    <a href="/"><div class="logo">Webkay</div></a>
</div>

</body>
</html>
