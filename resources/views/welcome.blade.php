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

        html,
        body {
            overflow-x: clip;
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

        header a {
            text-decoration: none;
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
        .changables,
        .logofoot,
        .hamburgermenu {
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
            transition: 0.2s;
        }

        .hamburgermenu {
            display: none;
        }

        .logo2:hover {
            background-color: #3b3b3b;
            transform: scale(1.03);
            transition: 0.2s;
        }

        .logo:hover {
            padding: .55rem .55rem 1rem .55rem;
            background-color: #3b3b3b;
            transition: 0.2s;
        }

        .logo img,
        .logofoot img,
        .hamburgermenu img {
            margin-top: 5px;
            filter: invert();
            height: 20px;
        }

        .hamburgermenu img {
            display: block;
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
            max-height: 108px;
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
        .mmacon,
        .merchwrap {
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
            font-size: clamp(60px, 8vw, 160px);
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
            margin-top: 45px;
            align-items: center;
        }

        .mainstuff {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
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

        .xenobotshare {
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .xenobotshare img {
            height: 320px;
            margin-top: -13em;
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
            margin-top: 45px;
        }

        .mmacon {
            display: flex;
            flex-direction: column;
            position: relative;
            align-items: center;
        }

        .mmalogo {
            width: 60%;
            margin-bottom: 3rem;
            margin-top: 1rem;
            filter: drop-shadow(0px 0px 6px rgba(255, 151, 32, 1));
        }

        .mmabackimage {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .mmaimg {
            width: clamp(360px, 87%, 1325px);
            height: 100%;
            border-radius: 18px;
            opacity: 0.4;
        }

        .charimages {
            position: absolute;
            height: 100%;
            bottom: 15%;
            left: 0;
            transform: rotateY(180deg);
        }

        .charimages img {
            height: 140%;
        }

        .mmainfo {
            position: absolute;
            left: 40%;
            transform-style: preserve-3d;
            top: 8%;
            overflow: hidden;
        }

        .mmainfowrap * {
            box-sizing: border-box;
        }

        .carousel {
            height: 18vw;
            width: 32vw;
            max-width: 37rem;
            max-height: 21rem;
            position: absolute;
            border-radius: 18px;
            opacity: 0;
            margin: auto;
            margin: 1rem 4rem;
            z-index: 100;
            transition: transform .5s, opacity .5s, z-index .5s;
            box-shadow: 0 0 15px;
        }

        .carousel.initial,
        .carousel.active {
            opacity: 1;
            position: relative;
            z-index: 900;
        }

        .carousel.prev,
        .carousel.next {
            z-index: 800;
        }

        .carousel.prev {
            transform: translateX(-100%);
        }

        .carousel.next {
            transform: translateX(100%);
        }

        .carouselprev,
        .carouselnext {
            position: absolute;
            top: 43%;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1001;
            background-color: rgb(49, 49, 49);
            border-style: solid;
            border-width: 1px;
            border-color: rgb(83, 83, 83);
            transition: 0.2s;
            margin-top: -100px;
        }

        .carouselprev:hover,
        .carouselnext:hover {
            transform: scale(1.03);
        }

        .carouselprev {
            left: 0%;
        }

        .carouselnext {
            right: 0%;
        }

        .carouselprev::after,
        .carouselnext::after {
            content: " ";
            position: absolute;
            width: 10px;
            height: 10px;
            top: 50%;
            left: 54%;
            border-right: 2px solid white;
            border-bottom: 2px solid white;
            transform: translate(-50%, -50%) rotate(135deg);
        }

        .carouselnext::after {
            left: 47%;
            transform: translate(-50%, -50%) rotate(-45deg);
        }

        .mmatext {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .mmatext h2 {
            margin-top: 6px;
            font-size: clamp(10px, 3.5vw, 58px);
            font-family: "Jaya", sans-serif;
            text-shadow: rgba(0, 0, 0, 1) 0px 0px 20px;
        }

        .mma-art-button {
            background-image: url("{{ asset("imgs/mma.art.png") }}");
            background-size: cover;
            height: 8vw;
            width: 39vw;
            max-width: 700px;
            max-height: 148px;
            border-radius: 18px;
            margin-top: -16px;
            border-color: #909090;
            border-style: solid;
            border-width: 1px;
            transition: 0.2s;
            background-position: center;
        }

        .mma-art-button:hover {
            transform: scale(1.03);
            cursor: pointer;
        }

        .mmaguyswrap {
            position: absolute;
            bottom: 100%;
            right: 10%;
            height: 15.3vw;
            max-height: 280px;
            transform: translateY(8%);
            z-index: 999;
            pointer-events: none;
        }

        .sillyguys {
            height: 100%;
            width: auto;
            display: block;
        }

        /* merch */

        #merch {
            display: flex;
            justify-content: center;
            margin-top: 45px;
        }

        .merchwrap {
            display: flex;
            justify-content: center;
            flex-direction: column;
            max-height: none;
        }

        .merchtext {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: auto;
        }

        .merchtext h1 {
            text-align: center;
            font-family: "Jaya", sans-serif;
            color: white;
            font-size: 9rem;
            text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
            margin-top: 15px;
        }

        .merchtext img {
            height: 250px;
        }

        .merchbackimage {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            height: 900px;
        }

        .merchimg {
            width: clamp(360px, 87%, 1325px);
            height: 900px;
            border-radius: 18px;
            object-fit: cover;
        }

        /* footer */

        footer {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #1b1b1d;
            border-style: solid;
            border-width: 1px;
            border-color: rgb(83, 83, 83);
            width: 98%;
            border-radius: 18px;
            margin: 15px auto 15px;
            position: relative;
            align-items: center;
        }

        footer h3 {
            filter: opacity(0.5);
        }

        .extlinks {
            display: flex;
            justify-content: center;
        }

        .logofoot {
            padding: 10px;
            box-shadow: rgba(255, 151, 32, 0.2) 0px 0px 12px;
            transition: 0.2s;
        }

        .logofoot:hover {
            transform: scale(1.03);
            transition: 0.2s;
            background-color: #3b3b3b;
        }

        .logofoot img {
            margin: 0;
        }

        @media screen and (max-width: 600px) {
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .video,
            .mainstuff,
            .mmacon,
            .merchwrap {
                padding: 1.5em;
            }

            header {
                position: fixed;
                top: 15px;
                left: 50%;
                transform: translateX(-50%);
                width: 90vw;
                max-width: 800px;
                z-index: 9999;
                box-sizing: border-box;
            }

            .logo {
                display: none;
            }

            .logo2 {
                width: 40px;
                height: 40px;
                padding: .15rem;
            }

            .labirhin {
                width: 100%;
                height: 100%;
                object-fit: contain;
            }

            .hamburgermenu {
                display: flex;
                width: 40px;
                height: 40px;
            }

            .hamburgermenu img {
                height: 20px;
                margin-top: 0;
            }

            .nav,
            .navright {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .video {
                margin-top: 26%;
                height: 600px;
                justify-content: center;
            }

            .video video {
                object-fit: cover;
            }

            .sorbitolimg {
                display: flex;
                height: 50%;
                left: 0%;
                justify-content: center;
            }

            .mainstuff {
                max-height: fit-content;
            }

            .mainstuff h1 {
                font-size: 15vw;
                margin-top: 0;
            }

            .xenobotshare {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .xenobotshare img {
                height: 135px;
                margin-top: -5em;
            }

            .maintext {
                position: absolute;
                display: flex;
                flex-direction: column;
                align-items: center;
                top: 8%;
                z-index: 999;
            }

            .t1,
            .t2,
            .t3,
            .maintext img,
            .maintext p {
                position: unset;
            }

            .maintext p {
                width: 180px;
                text-align: center;
                margin: 0;
            }

            .maintext img {
                margin-top: -10px;
                height: 18vw;
            }

            .content {
                align-items: center;
                padding: 0em 1em 1em 1em;
            }

            .buttons {
                font-size: 1rem;
            }

            .btn {
                font-size: 0.8rem;
            }

            .buttonarea h2 {
                font-size: 6vw;
            }

            .carouselcon {
                flex-direction: column;
            }

            .changables {
                width: 64vw;
                height: 36vw;
            }

            .charimages {
                display: none;
            }

            .mmalogo {
                width: 82vw;
            }

            .mmaguyswrap {
                bottom: 100%;
                right: 3%;
                top: auto;
                height: 33vw;
                transform: translateY(33%);
            }

            .mmainfo {
                left: 0;
            }

            .carousel {
                height: 36vw;
                width: 64vw;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="navwrap">
            <div class="nav">
                <a href="">
                    <div class="logo2">
                        <img class="labirhin" src="{{ asset('imgs/labiPoint.png') }}" alt="">
                    </div>
                </a>
                <div class="navright">
                    <div class="hamburgermenu">
                        <img class="home-svg" src="{{ asset('svg/list.svg') }}" alt="">
                    </div>
                    <a href="">
                        <div class="logo">
                            <img class="home-svg" src="{{ asset('svg/home.svg') }}" alt="">
                            <h2>Home</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="logo">
                            <img class="comic-svg" src="{{ asset('svg/comic.svg') }}" alt="">
                            <h2>Mau Makan Apa</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="logo">
                            <img class="pen-svg" src="{{ asset('svg/pen.svg') }}" alt="">
                            <h2>Animations</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="logo">
                            <img class="music-svg" src="{{ asset('svg/music-note.svg') }}" alt="">
                            <h2>Music</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="logo">
                            <img class="shop-svg" src="{{ asset('svg/shop.svg') }}" alt="">
                            <h2>Shop</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="logo">
                            <img class="wiki-svg" src="{{ asset('svg/wiki.svg') }}" alt="">
                            <h2>Wiki</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="logo">
                            <img class="discord-svg" src="{{ asset('svg/discord.svg') }}" alt="">
                            <h2>Discord</h2>
                        </div>
                    </a>
                    <a href="">
                        <div class="logo">
                            <img class="patreon-svg" src="{{ asset('svg/patreon-icon.svg') }}" alt="">
                            <h2>Patreon</h2>
                        </div>
                    </a>
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
                        <button class="btn" id="btn">Videos</button>
                        <button class="btn" id="btn2">Animations</button>
                        <button class="btn" id="btn3">Tracks</button>
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
                <div class="mmaguyswrap">
                    <img class="sillyguys" src="{{ asset("imgs/exogixgigo.png") }}" alt="">
                </div>
                <img class="mmaimg" src="{{ asset("imgs/background-mma.png") }}" alt="">
                <div class="charimages">
                    <img src="{{ asset("imgs/exoworomma.png") }}" alt="">
                </div>
                <div class="mmainfo">
                    <div class="carouselprev"></div>
                    <iframe class="carousel carousel-inicial"
                        src="https://www.youtube.com/embed/KxKA8qY0Shs?si=8mlVh86oWe-hFBcb" frameborder="0"
                        allowfullscreen="true"></iframe>
                    <iframe class="carousel" src="https://www.youtube.com/embed/nULDCRuoCx0?si=dL3_Zc52fzghALma"
                        frameborder="0" allowfullscreen="true"></iframe>
                    <iframe class="carousel" src="https://www.youtube.com/embed/FMm5TtjC5LE?si=7W-KyADnFYXdpgfk"
                        frameborder="0" allowfullscreen="true"></iframe>
                    <iframe class="carousel" src="https://www.youtube.com/embed/FVEOZCu91i8?si=_xjOUFerXCmaTwJY"
                        frameborder="0" allowfullscreen="true"></iframe>
                    <div class="carouselnext"></div>
                    <div class="mmatext">
                        <h2>WANT TO SEE THE COMIC?</h2>
                        <a href="https://maumakanapa.art"><button class="mma-art-button"></button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="merch">
        <div class="merchwrap">
            <div class="merchtext">
                <img src="{{ asset("imgs/xenobotpoint.png") }}" alt="">
                <h1>MERCH</h1>
            </div>
            <div class="merchbackimage">
                <img class="merchimg" src="{{ asset("imgs/meow.webp") }}" alt="">
            </div>
        </div>
    </section>
    <footer>
        <div class="footertext">
            <h3>labirhin - 2026</h3>
        </div>
        <div class="extlinks">
            <a href="">
                <div class="logofoot">
                    <img class="home-svg" src="{{ asset('svg/home.svg') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="logofoot">
                    <img class="comic-svg" src="{{ asset('svg/comic.svg') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="logofoot">
                    <img class="pen-svg" src="{{ asset('svg/pen.svg') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="logofoot">
                    <img class="music-svg" src="{{ asset('svg/music-note.svg') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="logofoot">
                    <img class="shop-svg" src="{{ asset('svg/shop.svg') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="logofoot">
                    <img class="wiki-svg" src="{{ asset('svg/wiki.svg') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="logofoot">
                    <img class="discord-svg" src="{{ asset('svg/discord.svg') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="logofoot">
                    <img class="patreon-svg" src="{{ asset('svg/patreon-icon.svg') }}" alt="">
                </div>
            </a>
        </div>
        <h3>made with love, by laurah ♥</h3>
    </footer>
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
                var next = d.getElementsByClassName('carouselnext')[0],
                    prev = d.getElementsByClassName('carouselprev')[0];
                next.addEventListener('click', moveNext);
                prev.addEventListener('click', movePrev);
            }

            function moveNext() {
                if (!moving) {
                    if (slide === (totalItems - 1)) {
                        slide = 0;
                    } else {
                        slide++;
                    }
                    moveCarouselTo(slide);
                }
            }
            function movePrev() {
                if (!moving) {
                    if (slide === 0) {
                        slide = (totalItems - 1);
                    } else {
                        slide--;
                    }

                    moveCarouselTo(slide);
                }
            }

            function disableInteraction() {
                moving = true;
                setTimeout(function () {
                    moving = false
                }, 500);
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
</body>

</html>

</script>
</body>

</html>