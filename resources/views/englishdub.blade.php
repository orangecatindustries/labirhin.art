<x-layout>
    <x-slot:head>
        <link rel="stylesheet" href="{{ asset('css/englishdub.css') }}">
    </x-slot:head>
    <section id="info-top">
            <div class="video">
                <div class="video-wrap">
                    <video src="{{ asset('imgs/pantai2.mp4') }}" id="js-video" autoplay loop muted playsinline
                    alt=""></video>
                <canvas aria-hidden="true" class="canvas" id="js-canvas"></canvas>
                </div>
                <div class="info-content">
                    <img class="engdubleft" src="{{ asset("imgs/engdubleft.png") }}" alt="">
                    <h1>SUPPORT THE<br>OFFICIAL ENGLISH DUB!</h1>
                    <img class="engdubright" src="{{ asset("imgs/engdubright.png") }}" alt="">
                </div>
            </div>
    </section>
    <section id="english-dub">

    </section>
</x-layout>