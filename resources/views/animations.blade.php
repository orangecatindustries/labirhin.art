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