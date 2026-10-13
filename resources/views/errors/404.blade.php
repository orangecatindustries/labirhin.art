<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page not found!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Blinker:wght@100;200;300;400;600;700;800;900&display=swap');

        body {
            background-color: #0150ff;
            color: white;
            font-family: "Blinker", sans-serif;
            font-weight: 600;
            justify-content: center;
            height: 90vh;
            animation: expand 1s ease forwards;
        }

        @keyframes expand {
            0% {
                letter-spacing: -7px;
            }
            100% {
                letter-spacing: 2px;
            }
        }

        @keyframes expandbig {
            0% {
                letter-spacing: -50px;
            }
            100% {
                letter-spacing: 2px;
            }
        }

        @keyframes left {
            0% {
                margin-left: 0px;
            }
            100% {
                margin-left: 9px;
            }
        }

        @keyframes right {
            0% {
                margin-right: 0px;
            }
            100% {
                margin-right: 12px;
            }
        }

        body,
        .main-error,
        .eas-tiny,
        .eas-text {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-error {
            margin-top: -8rem;
        }

        h1 {
            font-size: 8rem;
            font-weight: 600;
            margin-bottom: 6rem;
            animation: expandbig 1s ease forwards;
        }

        h2 {
            margin: 0;
        }

        h2,
        p {
            font-weight: 500;
        }

        a {
            color: white;
        }

        .diff {
            margin-top: 3rem;
        }

        .eas-tiny {
            position: absolute;
            bottom: 2%;
        }

        .eas-tiny p {
            margin-bottom: 3rem;
        }

        .jaya {
            animation: right 1s ease forwards;
            height: 45px;
        }

        .atomo {
            animation: left 1s ease forwards;
            margin-top: 10px;
            height: 35px;
        }

        .eas-images {
            display: flex;
        }

        .seperator {
            height: 50px;
            width: 1px;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="main-error">
        <h1>PAGE NOT FOUND!</h1>
        <div class="eas-text">
            <h2>WE APOLOGIZE FOR ANY INCOVENIENCE FROM THE INTERRUPTION OF YOUR STAY</h2>
            <h2>YOU CAN CLICK <a href="https://labirhin.art">HERE</a> TO GO BACK TO THE MAIN PAGE</h2>
            <h2 class="diff">THANK YOU FOR YOUR PATIENCE</h2>
        </div>
        <div class="eas-tiny">
            <p>FOR TECHNICAL ASSISTANCE PLEASE CONTACT AT LAURAH@MAUMAKANAPA.ART</p>
            <div class="eas-images">
                <img class="jaya" src="{{ asset("imgs/jayaimage.png") }}" alt="">
                <div class="seperator"></div>
                <img class="atomo" src="{{ asset("imgs/atomologo.png")}}" alt="">
            </div>
        </div>
    </div>
</body>

</html>