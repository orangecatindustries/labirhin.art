<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>labirhin.art</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <meta property="og:title" content="labirhin.art // labirhin's official website!">
    <meta property="og:description"
        content="check out labirhin's work, such as: animations, music, videos, and much more!">
    <meta name="description"
        content="check out labirhin's work, such as: animations, music, videos, and much more!">
    <meta name="twitter:card" content="summary_large_image">
    <!--<meta property="og:image" content="https://maumakanapa.art/static/imgs/maumakanapathumbnail.webp">-->
    <meta name="theme-color" content="#ff9900">
    {{ $head ?? '' }}
</head>

<body>
    <x-nav/>

    {{ $slot }}

    <x-footer/>

    {{ $scripts ?? '' }}
</body>

</html>