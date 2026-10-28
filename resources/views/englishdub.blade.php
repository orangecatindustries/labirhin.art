<x-layout>
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset('css/englishdub.css') }}">
    </x-slot:head>
    <section id="info-top">
        <div class="video">
            <div class="video-wrap">
                <video src="{{ asset('imgs/pantai2.mp4') }}" id="js-video" autoplay loop muted playsinline
                    alt=""></video>
            </div>
            <canvas aria-hidden="true" class="canvas" id="js-canvas"></canvas>
            <div class="info-content">
                <img class="engdubleft" src="{{ asset("imgs/engdubleft.png") }}" alt="">
                <h1>SUPPORT THE<br>OFFICIAL ENGLISH DUB!</h1>
                <img class="engdubright" src="{{ asset("imgs/engdubright.png") }}" alt="">
            </div>
        </div>
    </section>
    <section id="english-dub">
        <div class="reusables english-wrap">
            <div class="first-tab">
                <div class="top-english-info">
                    <iframe src="https://www.youtube.com/embed/KxKA8qY0Shs?feature=oembed" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""
                        title="MAU MAKAN APA | Official Trailer"></iframe>
                </div>
                <div class="side-english-info">
                    <div class="first-info">
                        <div class="info-text">
                            <h3>ORGANIZED BY:</h1>
                                <h3><a href="">AWOOMINATI<br>RECORDS</a></h3>
                        </div>
                        <div class="info-image">
                            <img src="{{ asset("imgs/awoominatirecords.png") }}" alt="">
                        </div>
                    </div>
                    <div class="second-info">
                        <div class="info-text">
                            <h3>CASTING BY:</h1>
                                <h3><a href="">CASE JACKAL<br>/ JP BAAS</a></h3>
                        </div>
                        <div class="info-image">
                            <img src="{{ asset("imgs/imageCase.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reusables english-actors">
            <div class="actors-wrap">
                <h3 class="starring-text" >STARRING:</h3>
                <div class="column-wrap">
                    <div class="first-column">
                        <a href="">
                            <h3>JP BAAS</h3>
                        </a>
                        <a href="">
                            <h3>KYLEE HENKE</h3>
                        </a>
                        <a href="">
                            <h3>ZACH HOLZMAN</h3>
                        </a>
                        <a href="">
                            <h3>KIRA BUCKLAND</h3>
                        </a>
                        <a href="">
                            <h3>STUART A. HUTSON</h3>
                        </a>
                        <a href="">
                            <h3>SEAN CHIPLOCK</h3>
                        </a>
                        <a href="">
                            <h3>LU WALL</h3>
                        </a>
                    </div>
                    <div class="second-column">
                        <a href="">
                            <h3>SIMON DAVISON</h3>
                        </a>
                        <a href="">
                            <h3>RED HUNT</h3>
                        </a>
                        <a href="">
                            <h3>ANTHONY STEIGER</h3>
                        </a>
                        <a href="">
                            <h3>NICK CARRY</h3>
                        </a>
                        <a href="">
                            <h3>KAI CLAVIER</h3>
                        </a>
                        <a href="">
                            <h3>TAMARA FRITZ</h3>
                        </a>
                        <h4>and more to come!</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const video = document.getElementById("js-video");
        const canvas = document.getElementById("js-canvas");
        const ctx = canvas.getContext("2d");
        let step;
        canvas.width = 32;
        canvas.height = 18;

        const draw = () => ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
        const drawLoop = () => {
            draw();
            step = window.requestAnimationFrame(drawLoop);
        };

        const start = () => {
            if (!step) drawLoop();
        };

        const stop = () => {
            cancelAnimationFrame(step); step = null;
        };

        video.addEventListener("play", start);
        video.addEventListener("pause", stop);

        new IntersectionObserver(([event]) => {
            event.isIntersecting ? video.play().catch(() => { }) : video.pause();
        }).observe(video);
    </script>
</x-layout>