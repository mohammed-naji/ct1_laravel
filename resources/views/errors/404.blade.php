<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #dfaa4eff;
            background-image: linear-gradient(147deg, #fdaa4eff 25%, #fac07e 50%, #dfaa4eff 80%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .main {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .main h1 {
            font-size: 10em;
        }

        .main h1.X {
            width: 110px;
            margin: 0 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .caution__tape.text {
            width: 200%;
            height: 10px;
        }

        .caution__tape.text:nth-child(1) {
            transform: rotateZ(45deg);
        }


        .caution__tape.text:nth-child(2) {
            transform: rotateZ(-45deg);
        }

        .background {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
        }

        .caution__tape {
            position: absolute;
            z-index: 3;
            width: 105%;
            height: 40px;
            user-select: none;
            background-color: #f8b930;
            background-image: linear-gradient(#ffb700 0%, #ffc600 100%);
            color: #0a0a0a;
            display: flex;
            align-items: center;
            justify-content: space-around;
            font-weight: bolder;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
            border: 1px rgba(0, 0, 0, 0.9) solid;
        }

        .caution__tape.center {
            bottom: 20%;
            transform: scale(1.5) rotateZ(5deg);
            -webkit-animation: show_tape_center 500ms cubic-bezier(0.18, 0.89, 0.32, 1.28) both;
            -o-animation: show_tape_center 500ms cubic-bezier(0.18, 0.89, 0.32, 1.28) both;
            animation: show_tape_center 500ms cubic-bezier(0.18, 0.89, 0.32, 1.28) both;
        }

        .caution__tape.left {
            top: 10%;
            left: -20%;
            transform: rotateZ(-45deg);
            -webkit-animation: show_tape_left 500ms cubic-bezier(0.18, 0.89, 0.32, 1.28) both;
            -o-animation: show_tape_left 500ms cubic-bezier(0.18, 0.89, 0.32, 1.28) both;
            animation: show_tape_left 500ms cubic-bezier(0.18, 0.89, 0.32, 1.28) both;
        }

        .btn {
            background: #000;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            position: absolute;
            z-index: 55555;
            margin-top: 200px
        }

        .btn:hover {
            background: #f00
        }

        @keyframes show_tape_left {
            0% {
                top: 0;
            }
        }

        @keyframes show_tape_center {
            0% {
                bottom: 0;
            }
        }

        @media (max-height: 320px) {
            .caution__tape.center {
                display: none;
            }
        }

        @media (max-width: 768px) {
            main h1 {
                font-size: 7em;
            }

            .caution__tape {
                width: 130%;
            }

            .caution__tape.left {
                top: 10%;
                left: -35%;
            }
        }
    </style>
</head>

<body id="body">
    <main class="main">
        <h1>4</h1>
        <h1 class="X">
            <span class="caution__tape text"></span>
            <span class="caution__tape text"></span>
        </h1>
        <h1>4</h1>

        <a class="btn" href="{{ url('/') }}">Back To Homepage</a>
    </main>
    <section class="background">
        <div id="caution__tape__left" class="caution__tape left">
            <p class="ERROR">ERROR</p>
        </div>
        <div id="caution__tape__center" class="caution__tape center">
            <p class="PAGE_NOT_FOUND">PAGE NOT FOUND!</p>
        </div>
    </section>

    <script>
        let PAGE_NOT_FOUND = document.querySelector(".caution__tape .PAGE_NOT_FOUND")
        let tape__center = document.getElementById("caution__tape__center")
        let tape__left = document.getElementById("caution__tape__left")
        let ERROR = document.querySelector(".caution__tape .ERROR")
        let body_Width = document.getElementById("body").clientWidth
        let warning_len = ((body_Width / PAGE_NOT_FOUND.clientWidth) / 1.8) - 1;
        let caution_len = ((body_Width / ERROR.clientWidth) / 1.8) - 1;
        for (let i = 0; i < warning_len; i++) {
            tape__center.innerHTML += PAGE_NOT_FOUND.outerHTML;
        }
        for (let i = 0; i < caution_len; i++) {
            tape__left.innerHTML += ERROR.outerHTML;
        }
        window.addEventListener("deviceorientation", function(e) {
            tape__left.style.transform = "translate(" + (e.gamma / 3) + "px ," + (e.beta / 3) +
                "px) rotateZ(-45deg)"
            tape__center.style.transform = "translate(" + (e.gamma / 2) + "px ," + (e.beta / 2) +
                "px) scale(1.5) rotateZ(5deg)"
        })
        window.addEventListener("mousemove", function(e) {
            tape__left.style.transform = "translate(" + e.pageX / 30 + "px ," + e.pageY / 30 + "px) rotateZ(-45deg)"
            tape__center.style.transform = "translate(" + e.pageX / 10 + "px ," + e.pageY / 10 +
                "px) scale(1.5) rotateZ(5deg)"
        })
    </script>
</body>

</html>
