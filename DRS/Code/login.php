<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DRS - Diabetic Retinopathy Screening</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(
                135deg,
                #ffffff 0%,
                #f5fbff 55%,
                #e8f8ff 100%
            );

            overflow: hidden;
        }


        /* ================= MAIN CONTAINER ================= */

        .container {
            width: 100%;
            min-height: 100vh;

            display: flex;
        }


        /* ================= LEFT SIDE ================= */

        .left-section {

            width: 55%;
            min-height: 100vh;

            padding: 70px 0 30px 7%;

            position: relative;
        }


        /* ================= LOGO ================= */

        .brand {

            display: flex;
            align-items: center;

            gap: 28px;
        }


        /* BIGGER EYE LOGO */

        .logo {

            width: 210px;
            height: 135px;

            object-fit: contain;
        }


        /* DRS TEXT */

        .brand-text h1 {

            font-size: 68px;

            line-height: 1;

            font-weight: 800;

            letter-spacing: -3px;

            /* Same colour for D R S */

            color: #169ddd;
        }


        .brand-text p {

            margin-top: 12px;

            font-size: 19px;

            color: #66839b;

            letter-spacing: 1px;
        }


        /* ================= MAIN HEADING ================= */

        .headline {

            position: absolute;

            left: 7%;

            top: 52%;

            transform: translateY(-50%);
        }


        .headline h2 {

            font-size: 48px;

            line-height: 1.15;

            font-weight: 700;

            color: #173147;
        }


        .headline h3 {

            font-size: 48px;

            line-height: 1.15;

            font-weight: 700;

            color: #169ddd;

            margin-top: 3px;
        }


        .small-line {

            width: 70px;

            height: 5px;

            background: #169ddd;

            margin-top: 25px;
        }


        /* ================= BOTTOM TEXT ================= */

        .bottom-text {

            position: absolute;

            bottom: 28px;

            left: 7%;

            display: flex;

            align-items: center;

            gap: 22px;

            color: #88a2b8;

            font-size: 12px;

            letter-spacing: 5px;
        }


        .bottom-text::before,
        .bottom-text::after {

            content: "";

            width: 22px;

            height: 1px;

            background: #88a2b8;
        }


        /* ================= RIGHT SIDE ================= */

        .right-section {

            width: 45%;

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 25px 6% 25px 20px;
        }


        /* ================= LOGIN CARD ================= */

        .login-card {

            width: 100%;

            max-width: 500px;

            min-height: 600px;

            background: rgba(255,255,255,0.96);

            border: 1px solid #d8e7f0;

            border-radius: 26px;

            box-shadow:
                0 10px 35px rgba(40,120,160,0.08);

            padding: 55px 45px;

            text-align: center;
        }


        /* ================= WELCOME ================= */

        .welcome {

            font-size: 25px;

            color: #66839c;

            margin-bottom: 5px;
        }


        /* ================= LOGIN DRS ================= */

        .login-logo {

            font-size: 65px;

            font-weight: 800;

            letter-spacing: -3px;

            color: #169ddd;

            margin-bottom: 55px;
        }


        /* ================= INPUT ================= */

        .input-box {

            width: 100%;

            height: 65px;

            border: 1px solid #c8ddea;

            border-radius: 15px;

            display: flex;

            align-items: center;

            padding: 0 20px;

            margin-bottom: 20px;

            background: #ffffff;
        }


        .input-icon {

            font-size: 20px;

            width: 42px;

            text-align: left;
        }


        .input-box input {

            flex: 1;

            height: 100%;

            border: none;

            outline: none;

            font-size: 18px;

            color: #45677f;

            background: transparent;
        }


        .input-box input::placeholder {

            color: #8aa1b4;
        }


        .eye-icon {

            font-size: 18px;

            color: #7594aa;

            cursor: pointer;
        }


        /* ================= LOGIN BUTTON ================= */

        .login-btn {

            width: 100%;

            height: 65px;

            border: none;

            border-radius: 15px;

            background: #28a9df;

            color: #001fc4;

            font-size: 23px;

            font-weight: 700;

            text-decoration: underline;

            cursor: pointer;

            margin-top: 8px;

            transition: 0.3s;
        }


        .login-btn:hover {

            background: #169ddd;

            transform: translateY(-2px);
        }


        /* ================= FORGOT PASSWORD ================= */

        .forgot {

            display: block;

            margin-top: 22px;

            font-size: 17px;

            color: #58768d;

            text-decoration: none;
        }


        .forgot:hover {

            text-decoration: underline;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 1100px) {

            body {
                overflow: auto;
            }

            .container {
                flex-direction: column;
            }

            .left-section,
            .right-section {
                width: 100%;
            }

            .left-section {

                min-height: 500px;

                padding-top: 45px;
            }

            .right-section {

                min-height: auto;

                padding: 30px 7% 50px;
            }

            .headline {

                top: 55%;
            }
        }


        /* ================= MOBILE ================= */

        @media (max-width: 600px) {

            .left-section {

                padding-left: 25px;

                min-height: 430px;
            }


            .brand {

                gap: 12px;
            }


            .logo {

                width: 125px;

                height: 90px;
            }


            .brand-text h1 {

                font-size: 45px;
            }


            .brand-text p {

                font-size: 11px;

                margin-top: 7px;
            }


            .headline {

                left: 25px;

                top: 65%;
            }


            .headline h2,
            .headline h3 {

                font-size: 34px;
            }


            .small-line {

                width: 55px;

                height: 4px;

                margin-top: 18px;
            }


            .bottom-text {

                left: 25px;

                font-size: 9px;

                letter-spacing: 3px;
            }


            .right-section {

                padding: 20px;
            }


            .login-card {

                padding: 40px 22px;

                min-height: auto;

                border-radius: 22px;
            }


            .welcome {

                font-size: 23px;
            }


            .login-logo {

                font-size: 52px;

                margin-bottom: 40px;
            }


            .input-box {

                height: 58px;
            }


            .input-box input {

                font-size: 16px;
            }


            .login-btn {

                height: 58px;

                font-size: 20px;
            }


            .forgot {

                font-size: 15px;
            }
        }

    </style>

</head>


<body>


<div class="container">


    <!-- ================= LEFT SECTION ================= -->

    <section class="left-section">


        <div class="brand">


            <!-- YOUR DRS EYE LOGO -->

            <img
                src="logo5.jpeg"
                class="logo"
                alt="DRS Eye Logo"
            >


            <div class="brand-text">

                <h1>DRS</h1>

                <p>
                    Diabetic Retinopathy Screening
                </p>

            </div>


        </div>



        <!-- MAIN TITLE -->

        <div class="headline">

            <h2>
                Early Detection
            </h2>

            <h3>
                Healthier Tomorrows
            </h3>

            <div class="small-line"></div>

        </div>



        <!-- BOTTOM TEXT -->

        <div class="bottom-text">

            <span>
                VISION FOR A BRIGHTER INDIA
            </span>

        </div>


    </section>



    <!-- ================= RIGHT SECTION ================= -->

    <section class="right-section">


        <div class="login-card">


            <div class="welcome">

                Welcome to

            </div>



            <div class="login-logo">

                DRS

            </div>



            <!-- USERNAME -->

            <div class="input-box">

                <div class="input-icon">
                    👤
                </div>

                <input
                    type="text"
                    id="username"
                    placeholder="Username"
                >

            </div>



            <!-- PASSWORD -->

            <div class="input-box">

                <div class="input-icon">
                    🔒
                </div>

                <input
                    type="password"
                    id="password"
                    placeholder="Password"
                >

                <div
                    class="eye-icon"
                    onclick="togglePassword()"
                    id="eye"
                >
                    👁
                </div>

            </div>



            <!-- LOGIN BUTTON -->

            <button
                class="login-btn"
                onclick="login()"
            >

                <a href="upload.html" class="btn create-btn">
                   
                Login
                </a>


            </button>



            <!-- FORGOT PASSWORD -->

            <a
                href="#"
                class="forgot"
            >

                Forgot Password?

            </a>


        </div>


    </section>


</div>



<script>


    /* ================= PASSWORD SHOW/HIDE ================= */

    function togglePassword() {

        const password =
            document.getElementById("password");

        const eye =
            document.getElementById("eye");


        if (password.type === "password") {

            password.type = "text";

            eye.textContent = "🙈";

        }

        else {

            password.type = "password";

            eye.textContent = "👁";

        }

    }



    /* ================= LOGIN ================= */

    function login() {

        const username =
            document
                .getElementById("username")
                .value
                .trim();


        const password =
            document
                .getElementById("password")
                .value
                .trim();


        if (
            username === "" ||
            password === ""
        ) {

            alert(
                "Please enter username and password."
            );

            return;
        }



        /*
            To open your next page,
            replace the alert above with:

            window.location.href = "home.html";
        */

    }

</script>


</body>
</html>