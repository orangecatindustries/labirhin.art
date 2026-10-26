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
            <div class="top-english-info">
                <iframe src="https://www.youtube.com/embed/KxKA8qY0Shs?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" title="MAU MAKAN APA | Official Trailer"></iframe>
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