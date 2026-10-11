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
    <div class="footer-text">
        <h3>labirhin - 2026</h3>
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
    <h3>made with love, by laurah ♥</h3>
</footer>