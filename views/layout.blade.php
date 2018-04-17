<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" href="styles/style.css?v={{ time() }}">
</head>
<body>
    <div class="wrapper">
        @if($page != 'main')
            <header class="header">
                <div class="container">
                    <a href="/index.php" class="header__logo-link">
                        <div class="header__logo"></div>
                        <div class="header__brand">XDogs</div>
                    </a>
                    <ul class="menu">
                        @include('links')
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </header>
        @else
            <div class="main-banner">
                <header class="header">
                    <div class="container">
                        <a href="/index.php" class="header__logo-link header__logo-link--banner">
                            <div class="header__logo header__logo--banner"></div>
                            <div class="header__brand header__brand--banner">XDogs</div>
                        </a>
                        <ul class="menu menu--banner">
                            @include('links')
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </header>
                <div class="container center"><h1>Одежда для собак</h1></div>
            </div>
        @endif
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
</body>
</html>