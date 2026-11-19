@php
    $groups = [
        [
            ['https://youtube.com/@labirhin', 'youtube'],
            ['https://bsky.app/profile/labirhin.art', 'bluesky'],
            ['https://x.com/LabiLabirhin/with_replies?lang=en', 'twitter'],
        ],
        [
            ['https://www.reddit.com/r/MauMakanApa/', 'reddit'],
            ['https://labilabirhin.bandcamp.com', 'bandcamp'],
            ['https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ', 'spotify'],
        ],
        [
            ['https://music.apple.com/us/artist/labirhin/1711481933', 'apple-music'],
            ['https://www.tiktok.com/@labirhin_fr', 'tiktok'],
            ['https://discord.gg/labirhin', 'discord'],
        ],
    ];
    $classes = ['footer-first', 'footer-second', 'footer-third'];
@endphp

<footer>
    <script src="{{ asset("js/reveal.js") }}"></script>
    <div class="footer-image">
        <img class="together" src="{{ asset("imgs/footer-down.png") }}" alt="">
    </div>
    <div class="footer-nav">
        <div class="footer-text">
            <h3 style="margin-top: 20px;">check out the socials!</h3>
        </div>
        <div class="ext-links">
            @foreach ($groups as $i => $group)
                <div class="{{ $classes[$i] }}">
                    @foreach ($group as [$href, $icon])
                        <a href="{{ $href }}">
                            <div class="logo-foot">
                                <img src="{{ asset("svg/{$icon}.svg") }}" alt="">
                            </div>
                        </a>
                    @endforeach
                </div>
            @endforeach
        </div>
        <h3 style="margin: 10px; margin-top: 12px;">©2021-2026 Bajra Gadha Panglima Balangga a.k.a. Labirhin - All Rights Reserved</h3>
        <h3 style="margin: 10px;">for contact: <b>hi@scraper.die</b></h3>
        <h3 style="margin: 10px; margin-bottom: 15px;">website made with love, by laurah ♥</h3>
    </div>
    <!-- Privacy-friendly analytics by Plausible -->
    <script async src="https://plausible.io/js/pa-p40KZmZbH_7mjpUwXOph3.js"></script>
    <script>
        window.plausible = window.plausible || function () { (plausible.q = plausible.q || []).push(arguments) }, plausible.init = plausible.init || function (i) { plausible.o = i || {} };
        plausible.init()
    </script>
</footer>