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
                    <div class="wrap-first">
                        <div class="hanging-gix">
                            <img src="{{ asset("imgs/gixhold.png") }}" alt="">
                        </div>
                        <div class="info">
                            <div class="text">
                                <div class="top-text">
                                    <div class="text-again">
                                        <h1>ABOUT ME</h1>
                                        <h2>(about me)</h2>
                                    </div>
                                    <div class="button-wrap">
                                        <button id="langswitch">Language</button>
                                        <div id="langdrop" class="langdrop">
                                            <a href="#" data-value="english">English</a>
                                            <a href="#" data-value="indonesian">Indonesian</a>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="h2-below">I'm <strong>Bajra Gadha Panglima Balangga</strong>, but most people
                                    call me <span id="meow">Labirhin</span>. <br>
                                    I
                                    got myself the nickname after watching The Maze Runner. I just really like Mazes.
                                    Born
                                    in 2006 in Indonesia, I now live in Yogyakarta, sharing a birthday with the city's
                                    celebration day.<br>

                                    I'm passionate about movies and animation. Though I’m selective with anime, I do
                                    enjoy
                                    classics like Akira and Doraemon.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="info2">
                        <div class="text">
                            <h2 class="bottom-text">My favorite movie, surprisingly, is Bullet Train —
                                it’s not too deep but it just gets me locked in. For animation, Isle of Dogs holds a
                                special place for inspiring my love for whimsical, talking-animal stories.<br>

                                Music has been a passion since I was young. I started with FL Studio, influenced by my
                                early obsession with dubstep and artists like Eliminate. After struggling with loudness
                                issues in my tracks, I transitioned to creating soundtrack-style music, appreciating its
                                depth and how it enhances a story without overwhelming it.<br>

                                I’m not too huge of a Gamer but I enjoy Drawing Attack on Roblox a lot. :D<br>

                                I’m excited to keep exploring music, animation, and storytelling.
                                Thanks for getting to know a bit about me!</h2>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="xenobotlittle">
        <img src="{{ asset("imgs/kepala_lobi.webp") }}" alt="">
    </div>
    <script>

        const topText = document.querySelector(".h2-below");
        const bottomText = document.querySelector(".bottom-text");
        const langSwitch = document.getElementById("langswitch");
        const langDrop = document.getElementById("langdrop");

        const text = {
            english: {
                top: topText.innerHTML,
                bottom: bottomText.innerHTML
            },
            indonesian: {
                top: `Aku <strong>Bajra Gadha Panglima Balangga</strong>, tapi kebanyakan orang mengenalku sebagai <span id="meow">Labirhin</span>.<br> Aku mendapat nickname itu setelah aku menonton The Maze Runner, trus aku jadi suka labirin.<br>Aku lahir tahun 2006 di Indonesia, sekarang aku tinggal di Yogyakarta, Ulang tahun ku bersamaan dengan ulang tahun kota. Aku suka film dan animasi, tapi aku milih-milih kalo sama anime, aku suka anime klasik seperti Akira dan Doraemon.`,
                bottom: `Film kesukaanku, Bullet Train -- bukan film yang deep, tapi berhasil bikin lock in. Untuk animasi, Isle of Dogs punya tempat special untuk menginspirasi kecintaanku terhadap cerita tentang hewan yang bisa berbicara.<br>Aku suka musik dari waktu aku masih kecil. Aku mulai dari FL Studio, terpengaruh dari kesukaanku terhadap Dubstep dan artist seperti Eliminate. Setelah suara keras menjadi masalah di musik musikku, aku bertransisi untuk membuat musik dengan style soundtrack, menghargai mendalamnya dan bagaimana itu meningkatkan cerita tanpa harus berlebihan.<br>Aku bukanlah penggemar game, tapi aku suka sekali Drawing Attack di Roblox. Aku tidak sabar untuk menjelajahi musik, animasi, dan bercerita.<br>Terima kasih untuk mengenal sedikit hal tentang aku!`,
            }
        };

        langSwitch.addEventListener("click", (event) => {
            langDrop.classList.toggle("show");
        });

        langDrop.addEventListener("click", (event) => {
            const selChoice = event.target.closest("a");
            if (!selChoice) return;
            event.preventDefault();

            const lang = text[selChoice.dataset.value];
            topText.innerHTML = lang.top;
            bottomText.innerHTML = lang.bottom;
            langDrop.classList.remove("show");
        })

        document.addEventListener("click", (event) => {
            if (event.target.closest("#meow")) {
                new Audio("{{ asset('sound/xeno3.mp3') }}").play();
            }
        });

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

        const move = document.getElementById("xenobotlittle");

        let animOut;

        document.body.addEventListener("click", (event) => {
            const { clientX, clientY } = event;
            if (!move) return;
            clearTimeout(animOut);
            move.classList.remove("animate")
            void move.offsetWidth;
            move.classList.add("animate");
            move.style.display = "block";
            move.style.left = `calc(${clientX}px - 20px)`;
            move.style.top = `calc(${clientY}px - 40px)`;
            animOut = setTimeout(() => {
                move.style.display = "none";
            }, 500);
        })

    </script>
</x-layout>