<x-layout title="labirhin.art">

    <x-slot:head>
        <link rel="preload" as="image" href="{{ asset('imgs/WEEWEE.webp') }}">
        <link rel="preload" as="image" href="{{ asset('imgs/kepala_lobi.webp') }}">
        <link rel="preload" as="image" href="{{ asset('imgs/EXOHEAD.webp') }}">
        <link rel="preload" as="image" href="{{ asset('imgs/GIXHEAD.webp') }}">
        <link rel="preload" as="image" href="{{ asset('imgs/ERIKAHEAD.webp') }}">
    </x-slot:head>

    <x-loading />

    <section id="main">
        <div class="main-topic">
            <div class="video">
                <video src="{{ asset('imgs/preview.mp4') }}" id="js-video" autoplay loop muted playsinline
                    alt=""></video>
                <canvas aria-hidden="true" class="canvas" id="js-canvas"></canvas>
                <div class="main-text">
                    <h1 class="t1">ART</h1>
                    <h1 class="t2">MUSIC</h2>
                        <h3 class="t3">ANIMATION</h3>
                        <img src="{{  asset('imgs/markiplier.webp') }}" alt="">
                        <p class="t4">CREATOR OF ‘MAU MAKAN APA?’ COMIC, SOUNDTRACK & SERIES</p>
                </div>
                <div class="sorbitol-img">
                    <img src="{{  asset('imgs/SORBITOL.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="stuff">
        <div class="main-stuff">
            <div class="xenobot-share">
                <h1>ANIMATIONS</h1>
                <img src="{{ asset('imgs/xenobot 2.webp') }}" alt="">
            </div>
            <div class="content">
                <div class="button-area">
                    <h2>Check out Labirhin's work here!</h2>
                    <div class="buttons">
                        <button class="btn" id="btn">Videos</button>
                        <button class="btn" id="btn2">Animations</button>
                        <button class="btn" id="btn3">Tracks</button>
                    </div>
                </div>
                <div class="carousel-con">
                    <a class="links" href="">
                        <div id="changable1" class="changables change1">
                            <img src="{{ asset("imgs/fightover.webp") }}" alt="">
                            <h2>Fight Over! Scene from MMA4</h2>
                        </div>
                    </a>
                    <a class="links" href="">
                        <div id="changable2" class="changables change2">
                            <img src="{{ asset("imgs/thestarsarefalling.webp") }}" alt="">
                            <h2>The Stars Are Falling</h2>
                        </div>
                    </a>
                    <a class="links" href="">
                        <div id="changable3" class="changables change3">
                            <img src="{{ asset("imgs/revisionafterrevision.webp") }}" alt="">
                            <h2>Revision After Revision</h2>
                        </div>
                    </a>
                </div>
                <a href="https://patreon.com/@labirhin">
                    <img class="patreon-support" src="{{ asset("imgs/patreon-support.webp") }}" alt="">
                </a>
            </div>
        </div>
    </section>
    <section id="mma">
        <div class="mma-con">
            <img class="mma-logo" src="{{ asset("imgs/mmalogo.webp") }}" alt="">
            <div class="mma-back-image">
                <div class="mma-guys-wrap">
                    <img class="silly-guys" src="{{ asset("imgs/exogixgigo.webp") }}" alt="">
                </div>
                <img class="mma-img" src="{{ asset("imgs/background-mma.webp") }}" alt="">
                <div class="char-images">
                    <img src="{{ asset("imgs/exoworomma.webp") }}" alt="">
                </div>
                <div class="mma-info">
                    <div class="carousel-wrap">
                        <button class="carousel-prev"></button>
                        <iframe class="carousel carousel-inicial"
                            src="https://www.youtube.com/embed/KxKA8qY0Shs?si=8mlVh86oWe-hFBcb" frameborder="0"
                            allowfullscreen="true"></iframe>
                        <iframe class="carousel" src="https://www.youtube.com/embed/nULDCRuoCx0?si=dL3_Zc52fzghALma"
                            frameborder="0" allowfullscreen="true"></iframe>
                        <iframe class="carousel" src="https://www.youtube.com/embed/FMm5TtjC5LE?si=7W-KyADnFYXdpgfk"
                            frameborder="0" allowfullscreen="true"></iframe>
                        <iframe class="carousel" src="https://www.youtube.com/embed/FVEOZCu91i8?si=_xjOUFerXCmaTwJY"
                            frameborder="0" allowfullscreen="true"></iframe>
                        <button class="carousel-next"></button>
                    </div>
                    <div class="mma-text">
                        <h2>WANT TO SEE THE COMIC?</h2>
                        <a href="https://maumakanapa.art" alt="Read the Webcomic here"><button
                                class="mma-art-button"></button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="merch">
        <div class="merch-wrap">
            <div class="merch-text">
                <img src="{{ asset("imgs/xenobotpoint.webp") }}" alt="">
                <h1>MERCH</h1>
            </div>
            <div class="merch-back-image">
                <img class="merch-img" src="{{ asset("imgs/meow.webp") }}" alt="">
                <div class="merch-promo">
                    <div class="merch-stuff">
                        <img class="merch-promo-image" src="{{ asset("imgs/merchpromo.webp") }}" alt="">
                        <div class="merch-button-area">
                            <h2>CHECK OUT THE SHOP HERE!</h2>
                            <a href="https://shop.labirhin.com" alt="Labirhin Shop Merchandise"><button
                                    class="mma-merch-button"></button></a>
                        </div>
                    </div>
                    <div class="merch-character">
                        <img src="{{ asset("imgs/merchcharacters.webp") }}" alt="">
                    </div>
                </div>
            </div>
    </section>
    <section id="community">
        <div class="community-wrap">
            <div class="community-text">
                <h1>COMMUNITY</h1>
            </div>
            <div class="community-back-image">
                <img class="community-img" src="{{ asset("imgs/background-community.webp") }}" alt="">
                <div class="community-promo">
                    <div class="community-stuff">
                        <div class="community-image">
                            <img src="{{ asset("imgs/communitypic.webp") }}" alt="">
                        </div>
                        <div class="community-button-area">
                            <h2>JOIN THE COMMUNITY HERE!</h2>
                            <a href="https://discord.gg/labirhin" alt="Discord Server"><button
                                    class="mma-community-button"></button></a>
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

        document.addEventListener('mousedown', function (event) {
            if (event.target.classList.contains("btn")) {
                const isClicked = document.querySelector('.btn.clicked');
                if (isClicked && isClicked !== event.target) {
                    isClicked.classList.remove('clicked');
                    isClicked.classList.remove('hovering');
                }
                event.target.classList.add("clicked");

                setTimeout(() => {
                    if (event.target.classList.contains("clicked")) {
                        event.target.classList.add("hovering");
                    }
                }, 201);
            }
        });

        const animationLinks = [
            "https://youtu.be/Y5hOaY8GwMY?si=QJ5UFIlyrKnYUVKZ",
            "https://youtu.be/mNnNFEJ-6f8?si=pCfXgWymlDxrdyA0",
            "https://youtu.be/oUMFNhB4dK8?si=t0jwgmwTcjFGfTeR"
        ];
        const musicLinks = [
            "https://youtu.be/Vesh2adg2kI?si=tXeOJLAfvy2EnqWe",
            "https://youtu.be/I0MUW5PIEno?si=YzI4jIOcUZjZhnkk",
            "https://youtu.be/6dSgJIDNgbA?si=r2v3WdLgph3tqL37"
        ];
        const videoLinks = [
            "https://youtu.be/zEls1QXNgV8?si=kC89S6U6hQsdEuGw",
            "https://youtu.be/TwZo7bzVfoo?si=hcP1MUj5MtbObvhV",
            "https://youtu.be/3MwTd8UIJTM?si=-gSnNHujc74nML4Z"
        ];

        const links = document.querySelectorAll(".links");
        const btn = document.getElementById("btn");
        const btn2 = document.getElementById("btn2");
        const btn3 = document.getElementById("btn3");
        const changable1 = document.getElementById("changable1");
        const changable2 = document.getElementById("changable2");
        const changable3 = document.getElementById("changable3");

        function swapContent(el, html) {
            el.classList.add("fading");
            setTimeout(() => {
                el.innerHTML = html;
                void el.offsetWidth;
                el.classList.remove("fading");
            }, 250);
        }

        btn.addEventListener("mousedown", () => {
            swapContent(changable1, '<img src="{{ asset("imgs/advertisement.webp") }}" alt=""><h2>TUGAS BAHASA INGGRIS</h2>');
            swapContent(changable2, '<img src="{{ asset("imgs/mereka.webp") }}" alt=""><h2>MEREKA NYATA?</h2>');
            swapContent(changable3, '<img src="{{ asset("imgs/blender.webp") }}" alt=""><h2>RGB LED Monitor Tutorial</h2>');
            links.forEach((link, i) => { if (videoLinks[i]) link.href = videoLinks[i]; });
        });

        btn2.addEventListener("mousedown", () => {
            swapContent(changable1, '<img src="{{ asset("imgs/fightover.webp") }}" alt=""><h2>Fight Over! Scene from MMA4</h2>');
            swapContent(changable2, '<img src="{{ asset("imgs/thestarsarefalling.webp") }}" alt=""><h2>The Stars Are Falling</h2>');
            swapContent(changable3, '<img src="{{ asset("imgs/revisionafterrevision.webp") }}" alt=""><h2>Revision After Revision</h2>');
            links.forEach((link, i) => { if (animationLinks[i]) link.href = animationLinks[i]; });
        });

        btn3.addEventListener("mousedown", () => {
            swapContent(changable1, '<img src="{{ asset("imgs/newmenu.webp") }}" alt=""><h2>New Menu</h2>');
            swapContent(changable2, '<img src="{{ asset("imgs/runaway.webp") }}" alt=""><h2>Runway of Catalog Horror</h2>');
            swapContent(changable3, '<img src="{{ asset("imgs/STOP.webp") }}" alt=""><h2>STOP</h2>');
            links.forEach((link, i) => { if (musicLinks[i]) link.href = musicLinks[i]; });
        });

        !(function (d) {
            var itemClassName = "carousel",
                items = d.getElementsByClassName(itemClassName),
                totalItems = items.length,
                slide = 0,
                moving = true;

            function setInitialClasses() {
                items[totalItems - 1].classList.add("prev");
                items[0].classList.add("active");
                items[1].classList.add("next");
            }
            function setEventListeners() {
                d.getElementsByClassName('carousel-next')[0].addEventListener('click', moveNext);
                d.getElementsByClassName('carousel-prev')[0].addEventListener('click', movePrev);
            }
            function moveNext() {
                if (!moving) {
                    slide = (slide === totalItems - 1) ? 0 : slide + 1;
                    moveCarouselTo(slide);
                }
            }
            function movePrev() {
                if (!moving) {
                    slide = (slide === 0) ? totalItems - 1 : slide - 1;
                    moveCarouselTo(slide);
                }
            }
            function disableInteraction() {
                moving = true;
                setTimeout(function () { moving = false; }, 500);
            }
            function moveCarouselTo(slide) {
                if (moving) return;
                disableInteraction();
                var prev = (slide - 1 + totalItems) % totalItems,
                    next = (slide + 1) % totalItems;
                for (var i = 0; i < totalItems; i++) {
                    items[i].className = itemClassName;
                }
                items[prev].className = itemClassName + " prev";
                items[slide].className = itemClassName + " active";
                items[next].className = itemClassName + " next";
            }
            function initCarousel() {
                setInitialClasses();
                setEventListeners();
                moving = false;
            }
            initCarousel();
        }(document));
    </script>
</x-layout>