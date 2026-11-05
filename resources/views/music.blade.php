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
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/new-menu-music.webp") }}" alt="">
                        <div class="music-info">
                            <h3>NEW MENU</h3>
                            
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/psychological-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>PSYCHOLOGICAL HORROR EXPERIMENT WITH ELECTRIC TOOTHBRUSH PRICE</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/catastrophic-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>CATASTOPHIC FAILURE OF IMITATION CRAB MEAT</h3>
                        </div>
                    </div>
                </div>
                <div class="second-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/runway-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>RUNWAY OF CATALOG HORROR</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/dawn-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>DAWN IN LAWU CITY</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/going-back-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>GOING BACK TO WHERE I BEGIN</h3>
                        </div>
                    </div>
                </div>
                <div class="third-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/mma-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>MAU MAKAN APA? [OST]</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/ini-lagi-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>INI LAGI</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/stop-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>STOP (FT.BATU GINJAL 55)</h3>
                        </div>
                    </div>
                </div>
                <div class="fourth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/salamat-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>SELAMAT BERBELANJA</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/need-someone-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>NEED SOMEONE LIKE YOU</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/bambang-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>BAMBANG'S NEW FACE</h3>
                        </div>
                    </div>
                </div>
                <div class="fifth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/kandang-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>KANDANG KERUATAN SUPER</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/apa-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>APA MAKNA NYA</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/not-as-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>NOT AS GOOD AS I USED TO BE</h3>
                        </div>
                    </div>
                </div>
                <div class="sixth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/moving-away-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>MOVING AWAY FROM PERFECT</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/hurt-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>HURT OVERLAY</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/the-stars-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>THE STARS ARE FALLING</h3>
                        </div>
                    </div>
                </div>
                <div class="seventh-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/going-to-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>GOING TO PUNCH YOU</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/deus-ex-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>DEUS EX MACHINA</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/late-night-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>LATE NIGHT WORK</h3>
                        </div>
                    </div>
                </div>
                <div class="eigth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/sahabat-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>SAHABAT TERBAIK SEDUNIA</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/fight-over-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>FIGHT OVER</h3>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/revisi-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>REVISI SETELAH REVISI</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/canva.js') }}"></script>
    <script src="{{ asset("js/tilt.js") }}"></script>
</x-layout>