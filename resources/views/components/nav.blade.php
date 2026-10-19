@php
    $links = [
        ['/', 'home', 'Home'],
        ['https://maumakanapa.art', 'comic', 'Mau Makan Apa'],
        ['/about', 'person', 'About'],
        ['', 'camera-reels', 'English Dub'],
        ['/#stuff', 'pen', 'Animations'],
        ['', 'music-note', 'Music'],
        ['https://shop.labirhin.art', 'shop', 'Shop'],
        ['https://maumakanapa.wiki.gg', 'wiki', 'Wiki'],
        ['https://discord.gg/labirhin', 'discord', 'Discord'],
        ['https://patreon.com/@labirhin', 'patreon-icon', 'Patreon'],
    ];

    $linksFirst = [
        ['/', 'home', 'Home'],
        ['https://maumakanapa.art', 'comic', 'Mau Makan Apa'],
        ['/about', 'person', 'About'],
        ['', 'camera-reels', 'English Dub'],
        ['/#stuff', 'pen', 'Animations'],
    ];

    $linksSecond = [
        ['https://shop.labirhin.art', 'shop', 'Shop'],
        ['https://maumakanapa.wiki.gg', 'wiki', 'Wiki'],
        ['', 'music-note', 'Music'],
        ['https://discord.gg/labirhin', 'discord', 'Discord'],
        ['https://patreon.com/@labirhin', 'patreon-icon', 'Patreon'],
    ];
@endphp

<header>
    <div class="navwrap">
        <div class="nav">
            <div class="main-nav">
                <a href="https://labirhin.art">
                    <div class="logo2">
                        <img class="labirhin" src="{{ asset('imgs/labiPoint.webp') }}" alt="">
                    </div>
                </a>
                <div class="navright">
                    <div id="ham-expand" class="hamburgermenu">
                        <img src="{{ asset('svg/list.svg') }}" alt="">
                    </div>
                    @foreach ($links as [$href, $icon, $label])
                        <a href="{{ $href }}" alt="{{ $label }}">
                            <div class="logo">
                                <img src="{{ asset("svg/{$icon}.svg") }}" alt="">
                                <h2>{{ $label }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="hamburger-expand">
                <div class="first-header">
                @foreach ($linksFirst as [$href, $icon, $label])
                    <a href="{{ $href }}" alt="{{ $label }}">
                        <div class="logo-expand">
                            <img src="{{ asset("svg/{$icon}.svg") }}" alt="">
                            <h2>{{ $label }}</h2>
                        </div>
                    </a>
                @endforeach
                </div>
                <div class="second-header">
                @foreach ($linksSecond as [$href, $icon, $label])
                    <a href="{{ $href }}" alt="{{ $label }}">
                        <div class="logo-expand">
                            <img src="{{ asset("svg/{$icon}.svg") }}" alt="">
                            <h2>{{ $label }}</h2>
                        </div>
                    </a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    const dropdownbtn = document.getElementById("ham-expand");
    const navdrop = document.querySelector(".nav");

    dropdownbtn.addEventListener("click", (event) => {
        event.stopPropagation();
        navdrop.classList.toggle("open");
    });
    document.addEventListener("click", () => navdrop.classList.remove("open"));
</script>