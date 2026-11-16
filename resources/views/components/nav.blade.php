@php
    $links = [
        ['/', 'home', 'Home'],
        ['/about', 'person', 'About'],
        ['/animation', 'pen', 'Animations'],
        ['/music', 'comic', 'Mau Makan Apa'],
        ['/engdub', 'camera-reels', 'English Dub'],
        ['https://maumakanapa.art', 'comic', 'Mau Makan Apa'],
        ['https://shop.labirhin.com', 'shop', 'Shop'],
        ['https://maumakanapa.wiki.gg', 'wiki', 'Wiki'],
        ['https://patreon.com/@labirhin', 'patreon-icon', 'Patreon'],
        ['https://discord.gg/labirhin', 'discord', 'Discord'],
    ];

    $linksFirst = [
        ['/', 'home', 'Home'],
        ['/about', 'person', 'About'],
        ['/animation', 'pen', 'Animations'],
        ['/music', 'comic', 'Mau Makan Apa'],
        ['/engdub', 'camera-reels', 'English Dub'],
    ];

    $linksSecond = [
        ['https://maumakanapa.art', 'comic', 'Mau Makan Apa'],
        ['https://shop.labirhin.com', 'shop', 'Shop'],
        ['https://maumakanapa.wiki.gg', 'wiki', 'Wiki'],
        ['https://patreon.com/@labirhin', 'patreon-icon', 'Patreon'],
        ['https://discord.gg/labirhin', 'discord', 'Discord'],
    ];
@endphp

<header>
    <div class="navwrap">
        <div class="nav">
            <div class="main-nav">
                <a href="/">
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
    const nav = document.querySelector("header");

    if (screen.height <= "600") {
        setTimeout(() => {
            nav.classList.add("hidden");
            console.log("removed!");
        }, 1500);
    }

    navdrop.addEventListener("mouseenter", () => {
        if (screen.height <= "600") {
            nav.classList.remove("hidden");
            nav.classList.add("shown");
        }
    });

    navdrop.addEventListener("mouseleave", () => {
        console.log("meow")
        if (screen.height <= "600") {
            setTimeout(() => {
                nav.classList.remove("shown");
                nav.classList.add("hidden");
            }, 2500);
        }
    });

    dropdownbtn.addEventListener("click", (event) => {
        event.stopPropagation();
        navdrop.classList.toggle("open");
    });
    document.addEventListener("click", () => navdrop.classList.remove("open"));
</script>