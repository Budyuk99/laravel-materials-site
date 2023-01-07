<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="image/x-icon" href="img/favicon.png" rel="shortcut icon">
    <link type="Image/x-icon" href="img/favicon.png" rel="icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">

    <title>Главная страница</title>
</head>

<body>
    @yield('modal_window_desktop')

    @yield('modal_window_mobile')

    @yield('header')

    @yield('mobile_menu')

    @yield('banner_section')

    @yield('content')

    @yield('footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="swiper.js"></script>
    <script src="script.js"></script>
</body>

</html>