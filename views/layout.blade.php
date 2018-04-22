<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Главная</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css?v={{ time() }}">
</head>
<body>
    <div class="wrapper">
        <header @if ($page == "main") class="main-banner" @endif>
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">

                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img @if ($page == "main") src="/images/background/logo.svg"
                             @else src="/images/background/logoBlack.svg"
                             @endif
                             class="d-inline-block align-top" alt="XDogs">
                        XDogs
                    </a>
                    <button class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarTogglerDemo01"
                            aria-controls="navbarTogglerDemo01"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=catalog">Каталог</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=contacts">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @if ($page == "main")
                <div class="container center"><h1>Одежда для собак</h1></div>
            @endif
        </header>

        {{--@if($page != 'main')--}}
            {{--<header class="header">--}}
                {{--<div class="container">--}}
                    {{--<a href="/index.php" class="header__logo-link">--}}
                        {{--<div class="header__logo"></div>--}}
                        {{--<div class="header__brand">XDogs</div>--}}
                    {{--</a>--}}
                    {{--<ul class="menu">--}}
                        {{--@include('links')--}}
                    {{--</ul>--}}
                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
            {{--</header>--}}
        {{--@else--}}
            {{--<div class="main-banner">--}}
                {{--<header class="header">--}}
                    {{--<div class="container">--}}
                        {{--<a href="/index.php" class="header__logo-link header__logo-link--banner">--}}
                            {{--<div class="header__logo header__logo--banner"></div>--}}
                            {{--<div class="header__brand header__brand--banner">XDogs</div>--}}
                        {{--</a>--}}
                        {{--<ul class="menu menu--banner">--}}
                            {{--@include('links')--}}
                        {{--</ul>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                {{--</header>--}}
                {{--<div class="container center"><h1>Одежда для собак</h1></div>--}}
            {{--</div>--}}
        {{--@endif--}}
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p>&copy; &quot;Все права защищены&quot;</p>
            </div>
        </footer>
    </div>

    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>