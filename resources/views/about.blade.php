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
                                    <button id="langswitch">Change to Indonesian!</button>
                                    <div class="langdrop">
                                        <a class="English" href="#">English</a>
                                        <a class="Indonesian" href="#">Indonesian</a>
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

        const labiclick = document.getElementById("meow");

        labiclick.addEventListener("click", (event) => {
            new Audio("{{ asset("sound/xeno3.mp3") }}").play();
        })

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