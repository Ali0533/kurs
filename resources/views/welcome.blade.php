<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../wow-animation/animate.min.css">
    <meta name="description" content="Щебень и песок доставка по Александрову и области"/>
    <title>Щебень Песок Александров</title>
</head>
<body>
<div class="header">
    <div class="header-inner">
        <div class="header-left">
            <img src="../resources/media/img/logo.png" alt="Logo" class="header-logo">
            <h3>ДОСТАВКА ЩЕБНЯ И ПЕСКА</h3>
        </div>
        <div class="header-nav">
            <a href="{{ route('main') }}">Главная</a>
            <a href="{{ route('payAndShip') }}">Оплата/Доставка</a>
            @auth()
                @if(Auth::user()->role == 'admin')
                    <a href="{{ route('adminAccount') }}">Товары</a>
                    <a href="{{ route('create') }}">Добавить товар</a>
                @endif
                @if(Auth::user()->role == 'user')
                    <a href="{{ route('account') }}">Личный кабинет</a>
                @endif
                <a href="{{ route('logout') }}">Выйти</a>
            @endauth
        </div>
            <a href="tel:89209098997" class="call">+7 (920) 909 89 97</a>
    </div>
</div>

@yield('content')
@yield('footer')

<script src="../wow-animation/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
