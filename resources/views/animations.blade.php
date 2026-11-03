<x-layout>
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset('css/englishdub.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    </x-slot:head>
    <section id="info-top">
        <div class="video">
            <div class="video-wrap">
                <video src="{{ asset('imgs/visualloop.mov') }}" id="js-video" autoplay loop muted playsinline
                    alt=""></video>
            </div>
            <canvas aria-hidden="true" class="canvas" id="js-canvas"></canvas>
            <div class="info-content">
                <h1>ANIMATIONS</h1>
            </div>
        </div>
    </section>
    <section id="animations-list">
        <div class="animations-wrap reusables">
            <div class="tsrf wrapped">
                <h2>THE STARS<br>ARE FALLING</h2>
                <div class="tsrf-wrap wrapped-wrap">
                    <img data-tilt data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.8"
                        src="{{ asset("imgs/postertsrf.jpg") }}" alt="">
                    <div class="info-wrap">
                        <a href="https://letterboxd.com/film/the-stars-are-falling/">
                            <div class="info-buttons">Letterboxd</div>
                        </a>
                        <a href="https://www.imdb.com/title/tt34613483/?ref_=nm_knf_t_3">
                            <div class="info-buttons">IMDB</div>
                        </a>
                        <a href="/music">
                            <div class="info-buttons">Sound Tracks</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mma wrapped">
                <h2>MAU<br>MAKAN APA?</h2>
                <div class="mma-wrap wrapped-wrap">
                    <img data-tilt data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.8"
                        src="{{ asset("imgs/postermma.jpg") }}" alt="">
                    <div class="info-wrap">
                        <a href="https://www.youtube.com/watch?v=KxKA8qY0Shs">
                            <div class="info-buttons">Trailer</div>
                        </a>
                        <a href="https://www.imdb.com/title/tt37536894/?ref_=nm_knf_t_2">
                            <div class="info-buttons">IMDB</div>
                        </a>
                        <a href="/music">
                            <div class="info-buttons">Sound Tracks</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="rar wrapped">
                <h2>REVISION<br>AFTER REVISION</h2>
                <div class="rar-wrap wrapped-wrap">
                    <img data-tilt data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.8"
                        src="{{ asset("imgs/posterrar.png") }}" alt="">
                    <div class="info-wrap">
                        <a href="https://letterboxd.com/film/revision-after-revision/">
                            <div class="info-buttons">Letterboxd</div>
                        </a>
                        <a href="https://www.imdb.com/title/tt37536912/?ref_=nm_knf_t_1">
                            <div class="info-buttons">IMBD</div>
                        </a>
                        <a href="/music">
                            <div class="info-buttons">Sound Tracks</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset("js/canva.js") }}"></script>
    <script src="{{ asset("js/tilt.js") }}"></script>
</x-layout>