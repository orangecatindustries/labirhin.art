<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>labirhin.art</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');

        @font-face {
            font-family: "Jaya";
            src: url("{{ asset('fonts/everything.otf') }}") format("truetype");
            font-style: normal;
            font-display: swap;
            font-weight: 400;
        }

        @font-face {
            font-family: "Labirhin";
            src: url("{{ asset('fonts/labirhin.otf') }}") format("truetype");
            font-style: normal;
            font-display: swap;
            font-weight: 400;
        }

        body {
            background-color: #0c0c0c;
            font-family: "Outfit", sans-serif;
            margin: 0;
        }

        h1,
        h2,
        h3,
        button {
            font-family: "Outfit", sans-serif;
            font-weight: 400;
            color: white;
        }

        header {
            position: fixed;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            height: auto;
            width: 60px;
            box-shadow: rgba(0, 0, 0, 0.5) 0 0 4px;
            border-style: solid;
            border-color: rgb(59, 59, 59);
            border-width: 1px;
            border-radius: 18px;
            background-color: #1b1b1d;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: 999;
        }

        .nav {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .labirhin {
            width: 100%;
        }

        .logo,
        .logo2,
        .btn,
        .changables {
            padding: .15rem;
            background-color: rgb(49, 49, 49);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 10px;
            transition: padding 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-style: solid;
            border-width: 1px;
            border-color: rgb(59, 59, 59);
            overflow: hidden;
            cursor: pointer;
        }

        .logo:hover {
            padding: .55rem .55rem 1rem .55rem;
        }

        .logo img {
            margin-top: 5px;
            filter: invert();
            height: 20px;
        }

        .logo h2 {
            margin-top: 6px;
            color: white;
            font-size: 15px;
            font-weight: 500;
            writing-mode: vertical-rl;
            white-space: nowrap;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, opacity 0.2s ease, margin-top 0.3s ease;
        }

        .logo:hover h2 {
            max-height: 100px;
            opacity: 1;
        }

        /* main section */

        #main {
            display: flex;
            flex-direction: column;
            height: max-content;
            overflow-x: hidden;
        }

        .maintopic {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .video,
        .mainstuff,
        .mmacon {
            margin-top: 2%;
            width: 80%;
            max-width: 1600px;
            max-height: 900px;
            height: 40%;
            padding: 2em;
            border-radius: 18px;
            box-shadow: rgba(0, 0, 0, 0.5) 0 0 4px;
            border-style: solid;
            border-color: rgb(59, 59, 59);
            border-width: 1px;
            background-color: #1b1b1d;
            position: relative;
            display: flex;
            overflow: hidden;
        }

        .video video {
            width: 100%;
            height: 100%;
            border-radius: 18px;
            opacity: 0.4;
        }

        .maintext h1,
        .maintext h2,
        .maintext p {
            color: white;
        }

        .maintext h1,
        .maintext h3 {
            font-family: "Jaya", sans-serif;
            font-size: clamp(16px, 8vw, 160px);
            font-weight: 800;
            margin: 0;
            text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
        }

        .maintext p {
            font-size: clamp(16px, 1.3vw, 26px);
            position: absolute;
            left: 25%;
            font-weight: 700;
            text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
            font-family: "Labirhin", sans-serif;
        }

        .maintext h3 {
            background: linear-gradient(to right,
                    #ffad41 20%,
                    #ffa722 30%,
                    #ff9101 70%,
                    #fa9d23 80%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            background-size: 500% auto;
            animation: textShine 3s ease-in-out infinite alternate;
        }

        .maintext img {
            position: absolute;
            top: 78%;
            left: 12%;
            height: 10%;
        }

        @keyframes textShine {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        .t1,
        .t2,
        .t3 {
            position: absolute;
            left: 12%;
        }

        .t1 {
            top: 14%;
        }

        .t2 {
            top: 35%;
        }

        .t3 {
            top: 56%;
        }

        .t4 {
            top: 78%;
        }

        .sorbitolimg {
            position: absolute;
            height: 100%;
            bottom: 0;
            right: 0;
        }

        .sorbitolimg img {
            height: 100%;
        }

        /* animations */

        #stuff {
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            margin-top: 70px;
            align-items: center;
        }

        .mainstuff {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            margin-top: 30px;
            background: linear-gradient(180deg, rgba(27, 27, 29, 1) 0%, rgba(156, 93, 16, 1) 50%, rgba(255, 151, 32, 1) 100%);
        }

        .mainstuff h1 {
            text-align: center;
            font-family: "Jaya", sans-serif;
            color: white;
            font-size: 9rem;
            text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
            margin-top: 15px;
        }

        .xenobotshare img {
            height: 400px;
            margin-top: -15em;
        }

        .content {
            margin-top: -5px;
            padding: 0em 2em 2em 2em;
            border-radius: 18px;
            box-shadow: rgba(0, 0, 0, 0.5) 0 0 4px;
            border-style: solid;
            border-color: rgb(59, 59, 59);
            border-width: 1px;
            background-color: #1b1b1dc4;
            position: relative;
            display: flex;
            backdrop-filter: blur(10px);
        }

        .buttons {
            display: flex;
            justify-content: center;
            margin-top: -10px;
            margin-bottom: 20px;
        }

        .btn {
            padding: .55rem 1rem;
            border-radius: 12px;
            font-size: 1.3rem;
            transition: 0.2s;
            box-shadow: rgba(255, 151, 32, 0.2) 0px 0px 12px;
        }

        .btn:hover {
            transform: scale(1.05);
            transition: 0.2s;
            background-color: rgba(255, 151, 32, 1);
        }

        .btn.hovering {
            background-color: rgba(255, 151, 32, 1);
        }

        .btn.clicked {
            transform: scale(0.95);
        }

        .buttonarea h2 {
            font-family: "Indie Flower", cursive;
            font-size: 3rem;
            text-align: center;
            margin: 20px;
            text-shadow: rgba(0, 0, 0, 1) 0px 0px 15px;
        }

        .content {
            display: flex;
            flex-direction: column;
        }

        .carouselcon {
            display: flex;
            flex-direction: row
        }

        .changables {
            width: 24vw;
            max-width: 426px;
            max-height: 240px;
            height: 15vw;
            transition: 0.2s;
            border-style: solid;
            border-width: 1px;
            border-color: rgb(80, 80, 80);
            display: flex;
            justify-content: flex-end;
            box-shadow: rgba(0, 0, 0, 1) 0px 0px 3px;
        }

        .changables h2 {
            opacity: 0;
            transition: 0.2s;
        }

        .carouselcon a {
            text-decoration: none;
            text-shadow: rgba(0, 0, 0, 1) 0px 0px 20px;
        }

        .changables:hover {
            transform: scale(1.02);
            transition: 0.2s;
            border-color: rgb(100, 100, 100);
            box-shadow: inset 0 -33px 18px -11px #0000008a;
        }

        .changables:hover h2 {
            opacity: 1;
        }

        /* maumakanapa */

        #mma {
            display: flex;
            justify-content: center;
        }

        .mmacon {
            display: flex;
            flex-direction: column;
            position: relative;
            align-items: center;
        }

        .mmalogo {
            width: 60%;
        }
    </style>
</head>

<body>
    <header>
        <div class="navwrap">
            <div class="nav">
                <div class="logo2">
                    <img class="labirhin" src="{{ asset('imgs/labiPoint.png') }}" alt="">
                </div>
                <div class="navright">
                    <div class="logo">
                        <img class="home-svg" src="{{ asset('svg/home.svg') }}" alt="">
                        <h2>Home</h2>
                    </div>
                    <div class="logo">
                        <img class="comic-svg" src="{{ asset('svg/comic.svg') }}" alt="">
                        <h2>Comic</h2>
                    </div>
                    <div class="logo">
                        <img class="shop-svg" src="{{ asset('svg/shop.svg') }}" alt="">
                        <h2>Shop</h2>
                    </div>
                    <div class="logo">
                        <img class="wiki-svg" src="{{ asset('svg/wiki.svg') }}" alt="">
                        <h2>Wiki</h2>
                    </div>
                    <div class="logo">
                        <img class="discord-svg" src="{{ asset('svg/discord.svg') }}" alt="">
                        <h2>Discord</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="main">
        <div class="maintopic">
            <div class="video">
                <video src="{{ asset('imgs/preview.mp4') }}" autoplay loop muted playsinline alt=""></video>
                <div class="maintext">
                    <h1 class="t1">ART</h1>
                    <h1 class="t2">MUSIC</h2>
                        <h3 class="t3">ANIMATION</h3>
                        <img src="{{  asset('imgs/markiplier.png') }}" alt="">
                        <p class="t4">CREATOR OF ‘MAU MAKAN APA?’ COMIC, SOUNDTRACK & SERIES</p>
                </div>
                <div class="sorbitolimg">
                    <img src="{{  asset('imgs/SORBITOL.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="stuff">
        <div class="mainstuff">
            <div class="xenobotshare">
                <h1>ANIMATIONS</h1>
                <img src="{{ asset('imgs/xenobot 2.png') }}" alt="">
            </div>
            <div class="content">
                <div class="buttonarea">
                    <h2>Check out Labirhin's work here!</h2>
                    <div class="buttons">
                        <button class="btn" id="btn">Music Videos</button>
                        <button class="btn" id="btn2">Animations</button>
                        <button class="btn" id="btn3">Music</button>
                    </div>
                </div>
                <div class="carouselcon">
                    <a href="">
                        <div class="changables change1">
                            <h2>Placeholder Text</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="changables change1">
                            <h2>Placeholder Text</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="changables change1">
                            <h2>Placeholder Text</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="mma">
        <div class="mmacon">
            <img class="mmalogo" src="{{ asset("imgs/mmalogo.png") }}" alt="">
            <div class="mmabackimage">
                
            </div>
        </div>
</section>
    <script>

        const btn = document.getElementById("btn");
        const btn2 = document.getElementById("btn2");
        const btn3 = document.getElementById("btn3");

        document.addEventListener('mousedown', function (event) {
            if (event.target.classList.contains("btn")) {
                const isClicked = document.querySelector('.btn.clicked')

                if (isClicked && isClicked !== event.target) {
                    isClicked.classList.remove('clicked');
                    isClicked.classList.remove('hovering');
                }

                event.target.classList.add("clicked");


                setInterval(() => {
                    if (event.target.classList.contains("clicked")) {
                        event.target.classList.add("hovering");
                    }
                }, 201);;
            }
        });


    </script>
</body>

</html>