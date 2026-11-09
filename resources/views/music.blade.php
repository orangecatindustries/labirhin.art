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
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=Vesh2adg2kI&list=OLAK5uy_l-twUs8cpE71eDV1MD3Nw4UfFM8ozx8Ag">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/psychological-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>PSYCHOLOGICAL HORROR EXPERIMENT WITH ELECTRIC TOOTHBRUSH PRICE</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=bLoK8VpnYZc&list=OLAK5uy_lUfW0eSRupA5OCStM9TgcYK0BrkOAL_mY">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/catastrophic-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>CATASTOPHIC FAILURE OF IMITATION CRAB MEAT</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=CjrhsBESurY&list=OLAK5uy_lwT2z31yZxSTiz4ArYyH6mLH5uoHwcKQg">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="second-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/runway-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>RUNWAY OF CATALOG HORROR</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/playlist?list=OLAK5uy_my29LV4QuKywvXN7KDWPOnj5aASXEbCGQ">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/dawn-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>DAWN IN LAWU CITY</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=9lvuiIsbuI4&list=OLAK5uy_nnFG-_C3O-jFXFnTmPSshSGjrq2l0McIo">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/going-back-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>GOING BACK TO WHERE I BEGIN</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=iiGu5hsQ-yE&list=OLAK5uy_krvpp76Sg3VLwJ5rzrG12Wpg9Sqs4mFVw">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="third-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/mma-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>MAU MAKAN APA? [OST]</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/playlist?list=OLAK5uy_my29LV4QuKywvXN7KDWPOnj5aASXEbCGQ">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/ini-lagi-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>INI LAGI</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=mzpDb-Puiog&list=OLAK5uy_my29LV4QuKywvXN7KDWPOnj5aASXEbCGQ&index=6&pp=8AUB">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/stop-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>STOP (FT.BATU GINJAL 55)</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=6dSgJIDNgbA&list=OLAK5uy_my29LV4QuKywvXN7KDWPOnj5aASXEbCGQ&index=15&pp=8AUB">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fourth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/salamat-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>SELAMAT BERBELANJA</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=JM1pStmpI1I&list=OLAK5uy_nBMVoVpKYVCpB-d5A2OTTaHWAO5-dYj4E">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/need-someone-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>NEED SOMEONE LIKE YOU</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=FlgQF9le4lE&list=OLAK5uy_lZ86I0zEvjB_quYdtFn9-MLm9ps3EZbJo">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/bambang-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>BAMBANG'S NEW FACE</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=sdutJqrPFBQ&list=OLAK5uy_ku-PBV8-cGN8v4xACWLrycC8l88VHFoIc">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fifth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/kandang-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>KANDANG KERUATAN SUPER</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=tC_Ttn1wtto&list=OLAK5uy_lYDBvHHIaeU7qDRejbhbpWluLQpw5X_Lw">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/apa-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>APA MAKNA NYA</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=uv1FWq34w1E&list=OLAK5uy_m_zzkkPQKUDCjZmZcPzVNbNfiYALkju7A&pp=0gcJCWYDOCosWNin">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/not-as-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>NOT AS GOOD AS I USED TO BE</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=mmwEgrfvFuY&list=OLAK5uy_leEEX-AfTfcOKso2IHegVbfE960CqPL5A">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sixth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/moving-away-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>MOVING AWAY FROM PERFECT</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=mNnNFEJ-6f8&list=OLAK5uy_k2AKFoeWGOYkJRupdSCVZacy_O8vqrndU">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/hurt-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>HURT OVERLAY</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=SBPLEAVyA-s&list=OLAK5uy_m-D4HH8T83RRO_OMM_TVX-ApfF2KLDSao">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/the-stars-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>THE STARS ARE FALLING</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=mNnNFEJ-6f8&list=OLAK5uy_n2pbwDvCm6g-gTQuoEHLNVNZgNDbJPUJ0">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="seventh-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/going-to-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>GOING TO PUNCH YOU</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=gkY8xV16QcM&list=OLAK5uy_kAY01P8ckAHAKTFiWEqhJgXhTtnqhlEUE">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/deus-ex-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>DEUS EX MACHINA</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=MfYxlLJjCXw&list=OLAK5uy_mzJhP-gg9NpD86A84jfj1nHLywqUamWXY">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/late-night-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>LATE NIGHT WORK</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=HFYpxbBrk48&list=OLAK5uy_nua9S4dIZwv4MLNEAjNakfiNb_uYCxFV4">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eigth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/sahabat-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>SAHABAT TERBAIK SEDUNIA</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=mIjsABMqvl0&list=OLAK5uy_lqjpXtqS8IoRegWm6XUq3xVkdtmn-FP1M">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/fight-over-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>FIGHT OVER</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=GyJpbAgOWSw&list=OLAK5uy_m6AkxlzAavka35ztG1vYlFOu2pSwlog_Y">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/revisi-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>REVISI SETELAH REVISI</h3>
                            <a style="text-decoration: none;"
                                href="https://www.youtube.com/watch?v=sCLJ_k6q0dQ&list=OLAK5uy_kb5Zt4WCYcvJJctLilCqQ5LZK3ANDxTjQ">
                                <div class="info-buttons">Youtube Music</div>
                                <div class="info-buttons">Bandcamp</div>
                                <div class="info-buttons">Spotify</div>
                                <div class="info-buttons">Apple Music</div>
                                <div class="info-buttons">Soundcloud</div>
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/canva.js') }}"></script>
    <script src="{{ asset("js/tilt.js") }}"></script>
</x-layout>