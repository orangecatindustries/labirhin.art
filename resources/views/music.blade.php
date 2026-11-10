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
                            <div class="expand-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                </svg><p>click to expand</p></div>
                            <h3>NEW MENU</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://www.youtube.com/watch?v=Vesh2adg2kI" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/new-menu-single/6797647330" target="_blank"
                                rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-new-menu" target="_blank" rel="noopener"
                                class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/1045413502" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/new-menu" target="_blank" rel="noopener"
                                class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/psychological-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>PSYCHOLOGICAL HORROR EXPERIMENT WITH ELECTRIC TOOTHBRUSH PRICE</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://www.youtube.com/watch?v=bLoK8VpnYZc" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/psychological-horror-experiment-with-electric/6788134324"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/checkpoint-krema" target="_blank" rel="noopener"
                                class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/1022510171" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/psychological-horror-experiment-with-electric-toothbrush-price"
                                target="_blank" rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/catastrophic-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>CATASTROPHIC FAILURE OF IMITATION CRAB MEAT</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://www.youtube.com/watch?v=CjrhsBESurY" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/catastrophic-failure-of-imitation-crab-meat-from/6797647359"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/failed-imitation-crab-meat" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/1045413472" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/catastrophic-failure-of-imitation-crab-meat"
                                target="_blank" rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="second-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/runway-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>RUNWAY OF CATALOG HORROR</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://www.youtube.com/watch?v=I0MUW5PIEno" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/runway-of-catalog-horror-single/1895444533"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/runway-of-catalog-horror" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/969113501" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/runway-of-catalog-horror" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/dawn-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>DAWN IN LAWU CITY</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://www.youtube.com/watch?v=9lvuiIsbuI4" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/dawn-in-lawu-city-single/1876369479"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-dawn-in-lawu-city" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/916257591" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/dawn-in-lawu-city" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/going-back-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>GOING BACK TO WHERE I BEGIN</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://www.youtube.com/watch?v=iiGu5hsQ-yE" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/going-back-to-where-i-begin-single/1876373335"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-going-back-to-where-i-begin"
                                target="_blank" rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/916265761" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/going-back-to-where-i-begin"
                                target="_blank" rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="third-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/mma-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>MAU MAKAN APA? [OST]</h3>
                            <a href="https://open.spotify.com/album/6ZB19k7qtZaTV3t9agXh53" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://music.apple.com/us/album/mau-makan-apa-original-soundtrack/1866725601"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/891485252" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/album/mau-makan-apa-ost" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/ini-lagi-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>INI LAGI</h3>
                            <a href="https://open.spotify.com/track/0p1FkRJzFOf6845wuQFpOY" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/mzpDb-Puiog" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/ini-lagi/1866725601?i=1866725907" target="_blank"
                                rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-kanjut-lagi" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/887302032" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/ini-lagi" target="_blank" rel="noopener"
                                class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/stop-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>STOP (FT.BATU GINJAL 55)</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/1nF75s7xESk" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/stop/1854851803" target="_blank" rel="noopener"
                                class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/stop-ft-batu-ginjal-55" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fourth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/salamat-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>SELAMAT BERBELANJA</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/JM1pStmpI1I" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/selamat-berbelanja/1866725601?i=1866725905"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/selamat-berbelanjam" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/884991712" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/selamat-berbelanja" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/need-someone-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>NEED SOMEONE LIKE YOU</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/FlgQF9le4lE" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/912862871" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/need-someone-like-you" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/need-someone-like-you" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/bambang-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>BAMBANG'S NEW FACE</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/sdutJqrPFBQ" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/bambangs-new-face-single/1875106522"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-bambangs-new-face" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/912862901" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/bambangs-new-face" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fifth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/kandang-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>KANDANG KERUATAN SUPER</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/tC_Ttn1wtto" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/kandang-kekuatan-super/1864208901" target="_blank"
                                rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-kandang-kekuatan-super" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/884990192" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/kandang-kekuatan-super" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/apa-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>APA MAKNA NYA</h3>
                            <a href="https://open.spotify.com/track/0p1FkRJzFOf6845wuQFpOY" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/uv1FWq34w1E" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/884990132" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/track/apa-makna-nya" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-apa-makna-nya" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/not-as-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>NOT AS GOOD AS I USED TO BE</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/mmwEgrfvFuY" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/not-as-good-as-i-used-to-be" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sixth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/moving-away-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>MOVING AWAY FROM PERFECT</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/x_fbWMbSa2g" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/moving-away-from-perfect/1854319628"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-moving-away-from" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/859930962" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/album/moving-away-from-perfect" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/hurt-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>HURT OVERLAY</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/SBPLEAVyA-s" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/hurt-overlay/1854319628?i=1854319633"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-hurt-overlay" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/track/3666242522" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/album/hurt-overlay" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/the-stars-music.png") }}" alt="">
                        <div class="music-info">
                            <h3>THE STARS ARE FALLING</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/mNnNFEJ-6f8" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/the-stars-are-falling/1854319628?i=1854319629"
                                target="_blank" rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/the-stars-are-falling" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/track/3666242482" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/album/the-stars-are-falling" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="seventh-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/going-to-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>GOING TO PUNCH YOU</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/gkY8xV16QcM" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-going-to-punch-you" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/deus-ex-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>DEUS EX MACHINA</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/MfYxlLJjCXw" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/deus-ex-machina/1735595391" target="_blank"
                                rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-deus-ex-machina-pilot-eps-1-mau-makan-apa"
                                target="_blank" rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/559406792" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/album/deus-ex-machina" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/late-night-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>LATE NIGHT WORK</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/0GfD5rJEMYY" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://www.deezer.com/en/album/510038161" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://labilabirhin.bandcamp.com/album/late-night-work" target="_blank"
                                rel="noopener" class="platform-btn bandcamp">
                                <div class="info-buttons">Bandcamp</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-late-night-work" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="eigth-column music-column">
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/sahabat-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>SAHABAT TERBAIK SEDUNIA</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/pZh5Leex0qw" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://www.deezer.com/en/track/3757581402" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/labirhin-sahabat-terbaik-sedunia" target="_blank"
                                rel="noopener" class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/fight-over-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>FIGHT OVER</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/GyJpbAgOWSw" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://music.apple.com/us/album/fight-over/1711482202" target="_blank"
                                rel="noopener" class="platform-btn apple">
                                <div class="info-buttons">Apple Music</div>
                            </a>
                            <a href="https://soundcloud.com/0281947365/fight-over" target="_blank" rel="noopener"
                                class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
                            </a>
                            <a href="https://www.deezer.com/en/track/3757581482" target="_blank" rel="noopener"
                                class="platform-btn deezer">
                                <div class="info-buttons">Deezer</div>
                            </a>
                        </div>
                    </div>
                    <div class="wrapped-music">
                        <img data-tilt data-tilt-scale="1.05" src="{{ asset("imgs/revisi-music.jpg") }}" alt="">
                        <div class="music-info">
                            <h3>REVISI SETELAH REVISI</h3>
                            <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ" target="_blank"
                                rel="noopener" class="platform-btn spotify">
                                <div class="info-buttons">Spotify</div>
                            </a>
                            <a href="https://youtu.be/sCLJ_k6q0dQ" target="_blank" rel="noopener"
                                class="platform-btn youtube">
                                <div class="info-buttons">YouTube Music</div>
                            </a>
                            <a href="https://soundcloud.com/auralalliance/revisi" target="_blank" rel="noopener"
                                class="platform-btn soundcloud">
                                <div class="info-buttons">SoundCloud</div>
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