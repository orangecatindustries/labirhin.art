<x-layout>
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    </x-slot:head>
    <section id="about">
        <div class="main-about">
            <div class="background-video">
                <video src="{{ asset("imgs/aboutbackground.mp4") }}" id="js-video" autoplay loop muted playsinline></video>
                <canvas aria-hidden="true" class="canvas" id="js-canvas"></canvas>
            </div>
            <div class="main-info">
                <div class="hanging-gix">
                    <img src="" alt="">
                </div>
                <div class="info">
                    <div class="text">

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

        const draw = () => ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
        const drawLoop = () => {
            draw();
            step = window.requestAnimationFrame(drawLoop);
        };
        video.addEventListener("play", drawLoop, false);
    </script>
</x-layout>