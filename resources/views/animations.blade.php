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
            <div class="gradients">
                <div class="box1"></div>
                <div class="box2"></div>
            </div>
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
    <section id="music-list">
        <div class="music-wrap reusables">
            <div class="gradients">
                <div class="box3"></div>
                <div class="box4"></div>
            </div>
            <h1>MUSIC VIDEOS</h1>
            <div class="music-video-wrap wrapped">
                <div class="first-videos video-column">
                    <div class="newmenu-video">
                        <img data-tilt data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.8"
                            src="{{ asset("imgs/newmenu.avif") }}" alt="">
                        <div class="info-wrap">
                            <h2>NEW MENU</h2>
                            <a href="/music">
                                <div class="info-buttons">Youtube</div>
                            </a>
                        </div>
                    </div>
                    <div class="stop-video">
                        <img data-tilt data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.8"
                            src="{{ asset("imgs/STOP.webp") }}" alt="">
                        <div class="info-wrap">
                            <h2>STOP</h2>
                            <a href="/music">
                                <div class="info-buttons">Youtube</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="second-videos video-column">
                    <div class="tsrf-video">
                        <img data-tilt data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.8"
                            src="{{ asset("imgs/thestarsarefalling.avif") }}" alt="">
                        <div class="info-wrap">
                            <h2>THE STARS<br>ARE FALLING</h2>
                            <a href="/music">
                                <div class="info-buttons">Youtube</div>
                            </a>
                        </div>
                    </div>
                    <div class="sts-video">
                        <img data-tilt data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.8"
                            src="{{ asset("imgs/sas.avif") }}" alt="">
                        <div class="info-wrap">
                            <h2>SAHABAT<br>TERBAIK SEDUNIA</h2>
                            <a href="/music">
                                <div class="info-buttons">Youtube</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset("js/canva.js") }}"></script>
    <script src="{{ asset("js/tilt.js") }}"></script>
</x-layout>