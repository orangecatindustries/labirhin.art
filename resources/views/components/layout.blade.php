<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>labirhin.art</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{ $head ?? '' }}
</head>

<body>
    <x-nav/>

    {{ $slot }}

    <x-footer/>

    {{ $scripts ?? '' }}
</body>

</html>