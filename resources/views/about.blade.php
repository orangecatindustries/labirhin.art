<x-layout>
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    </x-slot:head>
    <section id="about">
        <div class="main-about">
            <div class="background-video">
                <video src="{{ asset("imgs/aboutbackground.mp4") }}" id="js-video" autoplay loop muted
                    playsinline></video>
                <canvas aria-hidden="true" class="canvas" id="js-canvas"></canvas>
                <div class="main-info">
                    <div class="hanging-gix">
                        <img src="{{ asset("imgs/gixhold.png") }}" alt="">
                    </div>
                    <div class="info">
                        <div class="text">
                            <div class="top-text">
                                <h1>ABOUT ME</h1>
                                <h2>(about me)</h2>
                            </div>
                            <h2 class="h2-below">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since 1966, when designers at Letraset
                                and James Mosley, the librarian at St Bride Printing Library in London, took a 1914
                                Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets.
                                It has survived not only many decades, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised thanks to these sheets and more
                                recently with desktop publishing software like Aldus PageMaker and Microsoft Word
                                including versions of Lorem Ipsum.</h2>
                        </div>
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