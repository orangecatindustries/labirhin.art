<x-layout>
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset('css/englishdub.css') }}">
        <link rel="stylesheet" href="{{ asset('css/music.css') }}">
    </x-slot:head>
    <section id="info-top">
        <div class="video">
            <div class="video-wrap">
                <video src="{{ asset('imgs/angkasa.mp4') }}" id="js-video" autoplay loop muted playsinline
                    alt=""></video>
            </div>
            <canvas aria-hidden="true" class="canvas" id="js-canvas"></canvas>
            <div class="info-content">
                <h1>MUSIC</h1>
            </div>
        </div>
    </section>
    <section id="music-section">
        <div class="music-wrap reusables">
            <div class="music-wrap-wrap">
                <div class="first-column music-column">
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/newmenu.webp") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/psychological-music.png") }}" alt="">
                    </div>
                </div>
                <div class="second-column music-column">
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/catastrophic-music.png") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/runway-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/going-back-music.jpg") }}" alt="">
                    </div>
                </div>
                <div class="third-column music-column">
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/mma-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/ini-lagi-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/stop-music.jpg") }}" alt="">
                    </div>
                </div>
                <div class="fourth-column music-column">
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/salamat-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/need-someone-music.png") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/bambang-music.jpg") }}" alt="">
                    </div>
                </div>
                <div class="fifth-column music-column">
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/kandang-music.png") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/apa-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/not-as-music.jpg") }}" alt="">
                    </div>
                </div>
                <div class="sixth-column music-column">
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/moving-away-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/hurt-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/the-stars-music.png") }}" alt="">
                    </div>
                </div>
                <div class="seventh-column music-column">
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/going-to-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/deus-ex-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/late-night-music.jpg") }}" alt="">
                    </div>
                </div>
                <div class="eigth-column music-column">
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/sahabat-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/fight-over-music.jpg") }}" alt="">
                    </div>
                    <div class="wrapped-music">
                        <img src="{{ asset("imgs/revisi-music.jpg") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/canva.js') }}"></script>
</x-layout>