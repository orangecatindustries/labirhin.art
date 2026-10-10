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

        :root {
            --header-size: clamp(60px, 8vw, 160px);
            --main-orange-color: rgba(255, 151, 32, 1);
            --main-border-color: rgb(83, 83, 83);
            --main-border-radius: 18px;
            --main-background-color: rgb(49, 49, 49);
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

        /* essential loading */

        .loading-meow {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 9999;
            backdrop-filter: blur(10px);
            background-color: #0c0c0cc0;
            opacity: 1;
            transition: 0.5s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .loading-meow img {
            animation: rotation infinite 3s;
            height: 150px;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* moving on */

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
            border: 1px solid var(--main-border-color);
            border-radius: var(--main-border-radius);
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

        .hamburger-expand {
            display: none;
        }

        .labirhin {
            width: 100%;
        }

        .logo,
        .logo2,
        .btn,
        .changables,
        .logo-foot,
        .hamburgermenu {
            padding: .15rem;
            background-color: var(--main-background-color);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 10px;
            transition: padding 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--main-border-color);
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
        .logo-foot img,
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

        .main-topic {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .video,
        .main-stuff,
        .mma-con,
        .merch-wrap,
        .community-wrap {
            margin-top: 2%;
            width: 80%;
            max-width: 1600px;
            height: 40%;
            padding: 2em;
            border-radius: var(--main-border-radius);
            box-shadow: rgba(0, 0, 0, 0.5) 0 0 4px;
            border: 1px solid var(--main-border-color);
            background-color: #1b1b1d;
            position: relative;
            display: flex;
            overflow: hidden;
        }

        .video video {
            width: 100%;
            height: 100%;
            border-radius: var(--main-border-radius);
            opacity: 0.4;
        }

        .main-text h1,
        .main-text h2,
        .main-text p {
            color: white;
        }

        .main-text h1,
        .main-text h3 {
            font-family: "Jaya", sans-serif;
            font-size: var(--header-size);
            font-weight: 800;
            margin: 0;
            filter: drop-shadow(2px 4px 3px rgba(0, 0, 0, 0.8));
        }

        .main-text p {
            font-size: clamp(12px, 1.3vw, 26px);
            position: absolute;
            left: 25%;
            font-weight: 700;
            text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
            font-family: "Labirhin", sans-serif;
        }

        .main-text h3 {
            color: var(--main-orange-color);
        }

        .main-text img {
            position: absolute;
            top: 78%;
            left: 12%;
            height: 10%;
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

        .sorbitol-img {
            position: absolute;
            height: 100%;
            bottom: 0;
            right: 0;
        }

        .sorbitol-img img {
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

        .main-stuff {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            background: linear-gradient(180deg, rgba(27, 27, 29, 1) 0%, rgba(156, 93, 16, 1) 50%, rgba(255, 151, 32, 1) 100%);
        }

        .main-stuff h1 {
            text-align: center;
            font-family: "Jaya", sans-serif;
            color: white;
            font-size: clamp(60px, 8vw, 160px);
            text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
            margin-top: 15px;
        }

        .xenobot-share {
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .xenobot-share img {
            height: 24vw;
            max-height: 310px;
            margin-top: -22%;
        }

        .content {
            margin-top: -5px;
            padding: 0em 1em 2em 1em;
            border-radius: var(--main-border-radius);
            box-shadow: rgba(0, 0, 0, 0.5) 0 0 4px;
            border: 1px solid var(--main-border-color);
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
            background-color: var(--main-orange-color);
        }

        .btn.hovering {
            background-color: var(--main-orange-color);
        }

        .btn.clicked {
            transform: scale(0.95);
        }

        .button-area h2 {
            font-family: "Indie Flower", cursive;
            font-size: 3rem;
            text-align: center;
            margin: 20px;
            text-shadow: rgba(0, 0, 0, 1) 0px 0px 15px;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: 0.4s ease;
        }

        .carousel-con {
            display: flex;
            flex-direction: row
        }

        .changables {
            width: 24vw;
            max-width: 426px;
            max-height: 240px;
            height: 15vw;
            transition: 0.2s;
            border: 1px solid var(--main-border-color);
            display: flex;
            justify-content: flex-end;
            box-shadow: rgba(0, 0, 0, 1) 0px 0px 3px;
        }

        .changables img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.2s;
            border-radius: 12px;
            transition: opacity 0.25s ease, filter 0.2s;
        }

        .changables.fading img {
            opacity: 0;
        }

        .changables.fading h2 {
            opacity: 0 !important;
        }

        .changables:hover img {
            transition: 0.2s;
            filter: brightness(0.6);
        }

        .changables h2 {
            opacity: 0;
            transition: 0.2s;
            position: absolute;
            font-size: clamp(16px, 1.4vw, 25px);
            bottom: 10%;
            left: 0;
            right: 0;
            text-align: center;
        }

        .carousel-con a {
            text-decoration: none;
            text-shadow: rgba(0, 0, 0, 1) 0px 0px 10px;
        }

        .changables:hover {
            transform: scale(1.02);
            transition: 0.2s;
            border-color: rgb(100, 100, 100);
        }

        .changables:hover h2 {
            opacity: 1;
        }

        .patreon-support {
            max-width: 300px;
            max-height: 86px;
            margin-top: 25px;
            transition: 0.2s;
            width: 33vw;
            height: 9vw;
        }

        .patreon-support:hover {
            transform: scale(1.03);
            transition: 0.2s;
        }

        /* maumakanapa */

        #mma {
            display: flex;
            justify-content: center;
            margin-top: 45px;
        }

        .mma-con {
            display: flex;
            flex-direction: column;
            position: relative;
            align-items: center;
        }

        .mma-logo {
            width: 60%;
            margin-bottom: 3rem;
            margin-top: 1rem;
            filter: drop-shadow(0px 0px 6px var(--main-orange-color));
        }

        .mma-back-image {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .mma-img {
            width: 100%;
            height: 100%;
            border-radius: var(--main-border-radius);
            opacity: 0.4;
            filter: blur(3px) saturate(2);
        }

        .char-images {
            position: absolute;
            height: 100%;
            bottom: 15%;
            left: 0;
            transform: rotateY(180deg);
        }

        .char-images img {
            height: 140%;
        }

        .mma-info {
            position: absolute;
            left: 46%;
            transform-style: preserve-3d;
            top: 10%;
            overflow: hidden;
            padding: 1em;
        }

        .mma-infowrap * {
            box-sizing: border-box;
        }

        .carousel-wrap {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .carousel {
            display: block;
            height: 18vw;
            width: 32vw;
            max-width: 37rem;
            max-height: 21rem;
            position: absolute;
            border-radius: var(--main-border-radius);
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

        .carousel-prev,
        .carousel-next {
            position: absolute;
            top: 50%;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1001;
            background-color: var(--main-background-color);
            border: 1px solid var(--main-border-color);
            transition: 0.2s;
            transform: translateY(-50%);
        }

        .carousel-prev:hover,
        .carousel-next:hover {
            transform: scale(1.03) translateY(-50%);
        }

        .carousel-prev {
            left: 0%;
        }

        .carousel-next {
            right: 0%;
        }

        .carousel-prev::after,
        .carousel-next::after {
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

        .carousel-next::after {
            left: 47%;
            transform: translate(-50%, -50%) rotate(-45deg);
        }

        .mma-text,
        .merch-button-area {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .mma-text h2,
        .merch-button-area h2,
        .community-button-area h2 {
            margin-top: 6px;
            font-size: clamp(10px, 3.5vw, 58px);
            font-family: "Jaya", sans-serif;
            text-shadow: rgba(0, 0, 0, 1) 0px 0px 20px;
        }

        .mma-text h2 {
            margin: 1.5rem 0 3.5rem 0;
        }

        .mma-art-button,
        .mma-merch-button,
        .mma-community-button {
            background-image: url("{{ asset("imgs/mma.art.webp") }}");
            background-size: cover;
            height: 8vw;
            width: 39vw;
            max-width: 700px;
            max-height: 148px;
            border-radius: var(--main-border-radius);
            margin-top: -16px;
            border: 1px solid #909090;
            transition: 0.2s;
            background-position: center;
            box-shadow: 0 0 2px white;
        }

        .mma-art-button:hover,
        .mma-merch-button:hover,
        .mma-community-button:hover {
            transform: scale(1.03);
            cursor: pointer;
        }

        .mma-guys-wrap {
            position: absolute;
            bottom: 100%;
            right: 10%;
            height: 15.3vw;
            max-height: 280px;
            transform: translateY(33%);
            z-index: 999;
            pointer-events: none;
        }

        .silly-guys {
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

        .merch-wrap {
            height: auto;
            flex-direction: column;
        }

        .merch-text {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: auto;
        }

        .merch-text h1 {
            text-align: center;
            font-family: "Jaya", sans-serif;
            color: white;
            font-size: var(--header-size);
            text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.8);
            margin: 0;
            margin-top: -50px;
        }

        .merch-text img {
            height: 16vw;
            max-height: 400px;
        }

        .merch-back-image {
            position: relative;
            display: flex;
            align-items: center;
            border-radius: var(--main-border-radius);
            overflow: hidden;
        }

        .merch-img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.4;
            border-radius: var(--main-border-radius);
            filter: saturate(2);
        }

        .merch-promo {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 3rem;
            box-sizing: border-box;
        }

        .merch-stuff {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            left: 2%;
        }

        .merch-promo-image {
            width: 47vw;
            height: 27vw;
            border-radius: var(--main-border-radius);
            box-shadow: white 0 0 10px;
            max-width: 43rem;
            max-height: 25rem;
        }

        .merch-button-area h2 {
            margin-top: revert-layer;
        }

        .merch-button-area a {
            margin-top: 1rem;
        }

        .mma-merch-button {
            background-image: url({{ asset("imgs/merchbutton.webp") }});
        }

        .merch-character {
            position: absolute;
            flex-shrink: 0;
            right: -6%;
            bottom: 0;
            width: 59%;
        }

        .merch-character img {
            display: block;
            width: 100%;
            max-width: 51rem;
        }

        /* community */

        #community {
            display: flex;
            justify-content: center;
            margin-top: 45px;
        }

        .community-wrap {
            height: auto;
            flex-direction: column;
        }

        .community-text {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: auto;
        }

        .community-text h1 {
            text-align: center;
            font-family: "Jaya", sans-serif;
            color: white;
            font-size: var(--header-size);
            text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.8);
            margin-bottom: 30px;
            margin-top: -4px;
        }

        .community-text img {
            height: 250px;
        }

        .community-back-image {
            position: relative;
            display: flex;
            align-items: center;
            border-radius: var(--main-border-radius);
            overflow: hidden;
        }

        .community-img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.4;
            border-radius: var(--main-border-radius);
            filter: saturate(4) blur(3px);
        }

        .community-promo {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 1rem;
            box-sizing: border-box;
        }

        .community-stuff {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            left: 2%;
            gap: 2rem;
        }

        .community-image img {
            height: 30vw;
            max-height: 700px;
            transform: rotateY(180deg);
        }

        .community-button-area {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .community-button-area a {
            margin-top: 1rem;
        }

        .mma-community-button {
            background-image: url({{ asset("imgs/communitybutton.webp") }});
            background-size: 130%;
            background-position-y: 48%;
        }

        /* footer */

        footer {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #1b1b1d;
            border: 1px solid var(--main-border-color);
            width: 98%;
            border-radius: var(--main-border-radius);
            margin: 15px auto 15px;
            position: relative;
            align-items: center;
        }

        footer h3 {
            filter: opacity(0.5);
        }

        .ext-links {
            display: flex;
            justify-content: center;
        }

        .logo-foot {
            padding: 10px;
            box-shadow: rgba(255, 151, 32, 0.2) 0px 0px 12px;
            transition: 0.2s;
        }

        .ext-links a {
            transition: 0.2s;
        }

        .logo-foot:hover {
            transition: 0.2s;
            background-color: #3b3b3b;
        }

        .ext-links a:hover {
            transform: scale(1.10);
            transition: 0.2s;
        }

        .logo-foot img {
            margin: 0;
        }

        footer {
            margin-top: 45px;
        }

        .footer-first,
        .footer-second,
        .footer-third {
            display: flex;
        }

        @media screen and (max-width: 800px) {
            body {
                align-items: stretch;
            }

            .main-nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 98%;
            }

            .hamburger-expand {
                display: flex;
                margin-bottom: 6px;
            }

            .logo-expand {
                display: flex;
                gap: 5px;
                background-color: var(--main-background-color);
                border-radius: 12px;
                align-items: center;
                width: 37vw;
                max-width: 160px;
                margin: 5px;
                padding: 0.65rem 0.2rem;
                margin-bottom: 8px;
                border: 1px solid var(--main-border-color);
            }

            .logo-expand img {
                filter: invert();
                height: 16px;
                margin-top: 1px;
                margin-left: 11px;
            }

            .logo-expand h2 {
                font-size: 0.9rem;
                margin: 0;
                margin-left: 3px;
            }

            .video,
            .main-stuff,
            .mma-con,
            .merch-wrap,
            .community-wrap {
                box-sizing: border-box;
                max-width: none;
                padding: 1rem;
                width: 90vw;
            }

            header {
                position: fixed;
                top: 15px;
                left: 50%;
                transform: translateX(-50%);
                width: 90vw;
                max-width: 370px;
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
                align-items: center;
            }

            .nav {
                flex-direction: column;
                justify-content: flex-start;
                max-height: 68px;
                overflow-y: hidden;
                transition: max-height 0.5s ease;
            }

            .nav.open {
                max-height: 300px;
            }

            .video,
            .mma-con {
                margin-top: 6rem;
                height: 600px;
                justify-content: center;
            }

            .video video,
            .mma-img {
                object-fit: cover;
            }

            .sorbitol-img {
                display: flex;
                height: 50%;
                left: 0%;
                justify-content: center;
            }

            .main-stuff {
                max-height: fit-content;
            }

            .main-stuff h1,
            .merch-text h1 {
                font-size: 15vw;
                margin-top: 0;
                margin-bottom: 30px;
            }

            .xenobot-share {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .xenobot-share img {
                height: 35vw;
                margin-top: -5em;
            }

            .main-text {
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
            .main-text img,
            .main-text p {
                position: unset;
            }

            .main-text p {
                width: 180px;
                text-align: center;
                margin: 0;
                font-size: 16px;
            }

            .main-text img {
                margin-top: -10px;
                height: 18vw;
                max-height: 64px;
            }

            .content {
                align-items: center;
                padding: 0;
            }

            .buttons {
                font-size: 1rem;
            }

            .btn {
                font-size: 0.8rem;
            }

            .button-area h2 {
                font-size: 6vw;
            }

            .carousel-con {
                flex-direction: column;
            }

            .changables {
                width: 64vw;
                height: 36vw;
            }

            .patreon-support {
                width: 230px;
                height: 66px;
                margin-bottom: 25px;
            }

            .char-images {
                display: none;
            }

            .mma-con,
            .merch-wrap {
                height: auto;
                max-height: none;
                margin-top: 0%;
                justify-content: flex-start;
            }

            .mma-back-image,
            .merch-back-image {
                position: relative;
                width: 100%;
                height: auto;
                max-height: none;
                padding: 1rem 0 2rem;
                border-radius: var(--main-border-radius);
            }

            .mma-logo {
                width: 82vw;
            }

            .mma-img,
            .merch-img {
                position: absolute;
                inset: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .mma-guys-wrap {
                bottom: 100%;
                left: 0;
                top: auto;
                height: 33vw;
            }

            .mma-info,
            .merch-promo {
                position: relative;
                left: auto;
                right: auto;
                top: auto;
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .carousel {
                width: 70vw;
                height: 40vw;
                margin: 1rem 0;
            }

            .carousel-prev,
            .carousel-next {
                top: 110%;
                bottom: 0;
                transform: none;
            }

            .carousel-prev:hover,
            .carousel-next:hover {
                transform: scale(1.03);
            }

            .carousel-prev {
                left: 30%;
            }

            .carousel-next {
                right: 30%;
            }

            .mma-text {
                margin-top: 86px;
            }

            .merch-button-area {
                margin-top: 6%;
            }

            .mma-text h2,
            .merch-button-area h2,
            .community-button-area h2 {
                font-size: clamp(16px, 8vw, 38px);
                width: clamp(16px, 57vw, 350px);
                text-align: center;
            }

            .mma-art-button,
            .mma-merch-button,
            .mma-community-button {
                height: 15vw;
                width: 70vw;
                max-width: 100%;
            }

            .merch-text img {
                display: none;
            }

            .merch-stuff {
                left: 0;
            }

            .merch-promo {
                position: relative;
                left: auto;
                right: auto;
                top: auto;
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 1.5rem;
            }

            .merch-promo-image {
                width: 71vw;
                height: 40vw;
            }

            .merch-character {
                position: relative;
                transform: translateY(40px);
                width: auto;
                right: 0;
                margin-top: -2rem;
            }

            .merch-character img {
                width: 71vw;
            }

            .community-stuff {
                flex-direction: column-reverse;
                left: 0;
                width: 100%;
                gap: 0;
            }

            .community-button-area {
                width: 100%;
            }

            .community-stuff img {
                height: 90vw;
            }

            footer {
                width: 92%;
            }

            .footer-first,
            .footer-second,
            .footer-third {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="loading-meow">
        <img id="loading-image" src="{{ asset("imgs/labiPoint.webp") }}" alt="">
        <h2>we're loading sum epikness....</h2>
    </div>
    <header>
        <div class="navwrap">
            <div class="nav">
                <div class="main-nav">
                    <a href="https://labirhin.art">
                        <div class="logo2">
                            <img class="labirhin" src="{{ asset('imgs/labiPoint.webp') }}" alt="">
                        </div>
                    </a>
                    <div class="navright">
                        <div id="ham-expand" class="hamburgermenu">
                            <img class="home-svg" src="{{ asset('svg/list.svg') }}" alt="">
                        </div>
                        <a href="https://labirhin.art">
                            <div class="logo">
                                <img class="home-svg" src="{{ asset('svg/home.svg') }}" alt="">
                                <h2>Home</h2>
                            </div>
                        </a>
                        <a href="https://maumakanapa.art">
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
                        <a href="https://shop.labirhin.art">
                            <div class="logo">
                                <img class="shop-svg" src="{{ asset('svg/shop.svg') }}" alt="">
                                <h2>Shop</h2>
                            </div>
                        </a>
                        <a href="https://maumakanapa.wiki.gg">
                            <div class="logo">
                                <img class="wiki-svg" src="{{ asset('svg/wiki.svg') }}" alt="">
                                <h2>Wiki</h2>
                            </div>
                        </a>
                        <a href="https://discord.gg/labirhin">
                            <div class="logo">
                                <img class="discord-svg" src="{{ asset('svg/discord.svg') }}" alt="">
                                <h2>Discord</h2>
                            </div>
                        </a>
                        <a href="https://patreon.com/@labirhin">
                            <div class="logo">
                                <img class="patreon-svg" src="{{ asset('svg/patreon-icon.svg') }}" alt="">
                                <h2>Patreon</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="hamburger-expand">
                    <div class="first-header">
                        <a href="https://labirhin.art">
                            <div class="logo-expand">
                                <img class="home-svg" src="{{ asset('svg/home.svg') }}" alt="">
                                <h2>Home</h2>
                            </div>
                            <a href="https://maumakanapa.art">
                                <div class="logo-expand">
                                    <img class="comic-svg" src="{{ asset('svg/comic.svg') }}" alt="">
                                    <h2>Mau Makan Apa</h2>
                                </div>
                            </a>
                            <a href="">
                                <div class="logo-expand">
                                    <img class="pen-svg" src="{{ asset('svg/pen.svg') }}" alt="">
                                    <h2>Animations</h2>
                                </div>
                            </a>
                            <a href="">
                                <div class="logo-expand">
                                    <img class="music-svg" src="{{ asset('svg/music-note.svg') }}" alt="">
                                    <h2>Music</h2>
                                </div>
                            </a>
                        </a>
                    </div>
                    <div class="second-header">
                        <a href="https://shop.labirhin.art">
                            <div class="logo-expand">
                                <img class="shop-svg" src="{{ asset('svg/shop.svg') }}" alt="">
                                <h2>Shop</h2>
                            </div>
                        </a>
                        <a href="https://maumakanapa.wiki.gg">
                            <div class="logo-expand">
                                <img class="wiki-svg" src="{{ asset('svg/wiki.svg') }}" alt="">
                                <h2>Wiki</h2>
                            </div>
                        </a>
                        <a href="https://discord.gg/labirhin">
                            <div class="logo-expand">
                                <img class="discord-svg" src="{{ asset('svg/discord.svg') }}" alt="">
                                <h2>Discord</h2>
                            </div>
                        </a>
                        <a href="https://patreon.com/@labirhin">
                            <div class="logo-expand">
                                <img class="patreon-svg" src="{{ asset('svg/patreon-icon.svg') }}" alt="">
                                <h2>Patreon</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="main">
        <div class="main-topic">
            <div class="video">
                <video src="{{ asset('imgs/preview.mp4') }}" autoplay loop muted playsinline alt=""></video>
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
                        <div class="carousel-prev"></div>
                        <iframe class="carousel carousel-inicial"
                            src="https://www.youtube.com/embed/KxKA8qY0Shs?si=8mlVh86oWe-hFBcb" frameborder="0"
                            allowfullscreen="true"></iframe>
                        <iframe class="carousel" src="https://www.youtube.com/embed/nULDCRuoCx0?si=dL3_Zc52fzghALma"
                            frameborder="0" allowfullscreen="true"></iframe>
                        <iframe class="carousel" src="https://www.youtube.com/embed/FMm5TtjC5LE?si=7W-KyADnFYXdpgfk"
                            frameborder="0" allowfullscreen="true"></iframe>
                        <iframe class="carousel" src="https://www.youtube.com/embed/FVEOZCu91i8?si=_xjOUFerXCmaTwJY"
                            frameborder="0" allowfullscreen="true"></iframe>
                        <div class="carousel-next"></div>
                    </div>
                    <div class="mma-text">
                        <h2>WANT TO SEE THE COMIC?</h2>
                        <a href="https://maumakanapa.art"><button class="mma-art-button"></button></a>
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
                            <a href="https://shop.labirhin.com"><button class="mma-merch-button"></button></a>
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
                            <a href="https://discord.gg/labirhin"><button class="mma-community-button"></button></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer>
        <div class="footer-text">
            <h3>labirhin - 2026</h3>
        </div>
        <div class="ext-links">
            <div class="footer-first">
                <a href="https://youtube.com/@labirhin">
                    <div class="logo-foot">
                        <img class="youtube-svg" src="{{ asset('svg/youtube.svg') }}" alt="">
                    </div>
                </a>
                <a href="https://bsky.app/profile/labirhin.art">
                    <div class="logo-foot">
                        <img class="bluesky-svg" src="{{ asset('svg/bluesky.svg') }}" alt="">
                    </div>
                </a>
                <a href="https://x.com/LabiLabirhin/with_replies?lang=en">
                    <div class="logo-foot">
                        <img class="twitter-svg" src="{{ asset('svg/twitter.svg') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="footer-second">
                <a href="https://www.reddit.com/r/MauMakanApa/">
                    <div class="logo-foot">
                        <img class="reddit-svg" src="{{ asset('svg/reddit.svg') }}" alt="">
                    </div>
                </a>
                <a href="https://labilabirhin.bandcamp.com">
                    <div class="logo-foot">
                        <img class="bandcamp-svg" src="{{ asset('svg/bandcamp.svg') }}" alt="">
                    </div>
                </a>
                <a href="https://open.spotify.com/artist/2rYGNtQDYXTIbFHWYUCFqJ">
                    <div class="logo-foot">
                        <img class="spotify-svg" src="{{ asset('svg/spotify.svg') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="footer-third">
                <a href="https://music.apple.com/us/artist/labirhin/1711481933">
                    <div class="logo-foot">
                        <img class="apple-music-svg" src="{{ asset('svg/apple-music.svg') }}" alt="">
                    </div>
                </a>
                <a href="https://www.tiktok.com/@labirhin_fr">
                    <div class="logo-foot">
                        <img class="tiktok-svg" src="{{ asset('svg/tiktok.svg') }}" alt="">
                    </div>
                </a>
                <a href="https://discord.gg/labirhin">
                    <div class="logo-foot">
                        <img class="discord-svg" src="{{ asset('svg/discord.svg') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <h3>made with love, by laurah ♥</h3>
    </footer>
    <!-- i.. could be your exo <3 -->
    <script>

        function stuffChange() {
            const images = [
                "{{ asset('imgs/WEEWEE.webp') }}",
                "{{ asset('imgs/kepala_loby.webp') }}",
                "{{ asset('imgs/EXOHEAD.webp') }}",
                "{{ asset('imgs/GIXHEAD.webp') }}",
                "{{ asset('imgs/ERIKAHEAD.webp') }}",
            ];

            const diceroll = Math.floor(Math.random() * 10);

            if (diceroll < images.length) {
                const imgElement = document.getElementById("loading-image");
                imgElement.src = images[diceroll];
            }
        }

        stuffChange();

        const loadingscreen = document.querySelector(".loading-meow");

        window.addEventListener('load', (event) => {
            console.log('website finished loading!');
            loadingscreen.style.opacity = "0";
            setTimeout(function () {
                loadingscreen.style.display = "none";
            }, 1000);
        });

        document.addEventListener('mousedown', function (event) {
            if (event.target.classList.contains("btn")) {
                const isClicked = document.querySelector('.btn.clicked');

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

        const dropdownbtn = document.getElementById("ham-expand");
        const navdrop = document.querySelector(".nav");

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

        dropdownbtn.addEventListener("click", (event) => {
            event.stopPropagation();
            navdrop.classList.toggle("open");
        });

        document.addEventListener("click", () => {
            navdrop.classList.remove("open");
        });

        const btn = document.getElementById("btn");
        const btn2 = document.getElementById("btn2");
        const btn3 = document.getElementById("btn3");

        let changables = document.querySelectorAll(".changables");

        let changable1 = document.getElementById("changable1");
        let changable2 = document.getElementById("changable2");
        let changable3 = document.getElementById("changable3");

        function swapContent(owo, html) {
            owo.classList.add("fading");
            setTimeout(() => {
                owo.innerHTML = html;
                void owo.offsetWidth;
                owo.classList.remove("fading");
            }, 250);
        }

        btn.addEventListener("mousedown", (event) => {
            swapContent(changable1, '<img src="{{ asset("imgs/advertisement.webp") }}" alt=""><h2>TUGAS BAHASA INGGRIS</h2>');
            swapContent(changable2, '<img src="{{ asset("imgs/mereka.webp") }}" alt=""><h2>MEREKA NYATA?</h2>');
            swapContent(changable3, '<img src="{{ asset("imgs/blender.webp") }}" alt=""><h2>RGB LED Monitor Tutorial</h2>');
            links.forEach((link, index) => {
                if (videoLinks[index]) {
                    link.href = videoLinks[index];
                }
            })
        });


        btn2.addEventListener("mousedown", (event) => {
            swapContent(changable1, '<img src="{{ asset("imgs/fightover.webp") }}" alt=""><h2>Fight Over! Scene from MMA4</h2>');
            swapContent(changable2, '<img src="{{ asset("imgs/thestarsarefalling.webp") }}" alt=""><h2>The Stars Are Falling</h2>');
            swapContent(changable3, '<img src="{{ asset("imgs/revisionafterrevision.webp") }}" alt=""><h2>Revision After Revision</h2>');
            links.forEach((link, index) => {
                if (animationLinks[index]) {
                    link.href = animationLinks[index];
                }
            })
        });

        btn3.addEventListener("mousedown", (event) => {
            swapContent(changable1, '<img src="{{ asset("imgs/newmenu.webp") }}" alt=""><h2>New Menu</h2>');
            swapContent(changable2, '<img src="{{ asset("imgs/runaway.webp") }}" alt=""><h2>Runway of Catalog Horror</h2>');
            swapContent(changable3, '<img src="{{ asset("imgs/STOP.webp") }}" alt=""><h2>STOP</h2>');
            links.forEach((link, index) => {
                if (musicLinks[index]) {
                    link.href = musicLinks[index];
                }
            })
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
                var next = d.getElementsByClassName('carousel-next')[0],
                    prev = d.getElementsByClassName('carousel-prev')[0];
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

</body>

</html>