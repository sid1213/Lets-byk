<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>LetsByk/pricing</title>
    <link rel="ICON" ; href="logo.png" ;>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        /* ---------------------------------------------------Navigation Bar----------------------------------------------------------------- */
        header {
            float: left;
            width: 100%;
            height: 100px;
            position: fixed;
            background: rgb(0 54 75);
        }

        .logo {
            color: white;
            float: left;
            width: 40%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .f-content img,
        .logo img {
            height: 80%;
            clip-path: circle(70% at 50% 50%);
        }

        header ul {
            width: 60%;
            height: inherit;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        header ul li a {
            font-size: 25px;
            font-weight: lighter;
            padding: 0px 5px;
            text-decoration: none;
            color: rgb(230, 229, 227);
        }

        header ul li a[href="pricing.php"] {
            font-size: 27px;
            font-weight: bold;
            border: 2px solid rgb(245 100 42);
            border-radius: 5px;
        }

        header ul li a:hover {
            color: rgb(245 100 42);
        }

        .openMenu {
            /*----------------------------------------------------- humburger---------------------------------------------------------*/
            padding-right: 10px;
            padding-top: 30px;
            text-align: right;
            color: white;
            height: 100px;
            font-size: 30px;
            display: none;
            cursor: pointer;
        }


        /*-------------------------------------------------PRICE SECTION------------------------------------------------------------------------*/
        .price-sec {
            width: 100%;
            height: 900px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-image: url(priceimg.jpg);
            background-repeat: no-repeat;
            background-color: rgba(220, 232, 235, 0.801);
            background-blend-mode: multiply;
            background-size: 46% 67%;
            background-position: center right;
        }

        .price-sec .table {
            width: 60%;
            height: 600px;
            padding: 30px 12px 0 20px;
            margin-top: 10px;
            margin-left: 35px;
            cursor: pointer;
        }

        h2 {
            color: rgb(3, 25, 34);
            padding-bottom: 24px;
            font-size: 28px;
        }

        .table table {
            width: 100%;
            padding: 12px 20px;
            border-collapse: collapse;
            cursor: pointer;
            box-shadow: 8px 8px 7px rgb(175, 199, 206);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .table th {
            width: 50%;
            height: 50px;
            background-color: rgba(5, 5, 5, 0.952);
            color: whitesmoke;
            text-align: center;
            font-size: 23px;
            border-bottom: 1px solid;
        }

        .table tr {
            vertical-align: middle;
            background-color: transparent;
        }

        .table td {
            color: white;
            height: 55px;
            font-size: 17px;
            text-align: center;
            padding-left: 30px;
            border-right: 1px solid;
            background-color: rgba(15, 15, 15, 0.918);
            border-bottom: 1px inset rgba(15, 16, 17, 0.39);
        }

        .table tr:nth-child(odd) {
            background-color: rgba(44, 46, 48, 0.842);
        }

        /* ---------------------------------------------------Footer ----------------------------------------------------------------- */
        footer {
            width: 100%;
            height: 300px;
            background: rgb(0 54 75);
            float: left;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
        }

        .f-content,
        .f-logo,
        .f-copyright {
            width: 15%;
            height: 80%;
            font-size: 15px;
            font-weight: lighter;
            line-height: 40px;
            color: rgb(196, 202, 204);
            text-align: left;
        }

        .f-content p {
            line-height: 20px;
        }

        .f-logo img {
            padding: 10px;
            width: 30%;
        }

        .f-content ul {
            list-style: none;
        }

        .f-content ul li a,
        .f-content div a {
            list-style: none;
            text-decoration: none;
            color: rgb(196, 202, 204);
        }

        .f-copyright {
            width: 100%;
            height: auto;
            padding: 5px;
            text-indent: 50px;
        }

        /*-----------------------------------------------MEDIA QUERIES(FOR MOBILE)----------------------------------------------------*/
        @media only screen and (max-width:480px) {
            .logo {
                width: 12px;
            }

            .logo img {
                height: 50%;

            }

            header .logo h1 {
                display: none;
            }

            .logo::after {
                content: "Let'sBYK";
                font-size: 20px;
            }

            .openMenu {
                padding-right: 20px;
                padding-top: 31px;
            }

            .price-sec {
                background-image: none;
                height: 100vh;
                max-width: 100%;
                justify-content: center;
                align-items: center;

            }

            .price-sec .table {
                padding: 20px 0px 0 0px;
                margin: 12px 0px;
                width: 90%;
                top: 50vh;

            }

            .table table {
                width: 100%;
                box-shadow: none;
                background-image: url(boy.gif);
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center center;
            }

            .table h2 {
                font-size: 25px;
            }

            .table th {
                font-size: 20px;
            }

            .table td {
                font-size: 15px;
            }

            footer {
                height: 75vh;
                flex-direction: row;
                justify-content: flex-start;
                align-items: center;

            }

            .f-logo img {
                padding-top: 44px;
                width: 19%;
            }

            .f-logo {
                line-height: 10px;
            }

            .f-content ul li {
                padding-bottom: 12px;
            }

            .f-logo,
            .f-content,
            .f-copyright {
                width: 100%;
                height: 26%;
            }

            .f-content h4,
            p {
                padding: 7px 0px;

            }

            .f-content p {
                line-height: 20px;
            }

            .f-copyright {
                margin-left: 0px;
                text-align: center;
                height: 2px;
                padding: 0px;
            }
        }

        /*-----------------------------------------------------------------MEDIA QUERIES(FOR TABLET)---------------------------------------------------*/
        @media only screen and (max-width:768px) {
            .logo {
                padding-left: 14px;
            }

            .logo img {
                height: 75%;
            }

            header .logo h1 {
                display: none;
            }

            .logo::after {
                content: "Let'sBYK";
                font-size: 20px;
            }

            .price-sec .table {
                width: 100%;
                height: 640px;
                margin-top: 30px;
                padding: 40px 15px 0 10px;
            }

            .table table {
                width: 100%;
                padding: 12px 20px;
            }

            table {

                box-shadow: 8px 8px 7px rgb(102, 113, 209);
            }

            footer {
                height: 50vh;
            }

            .f-logo {
                width: 26%;
                height: 60%;
                margin-top: 12px;
                position: relative;
                left: -109px;
            }

            .f-logo img {
                width: 8vh;
            }

            .f-content,
            .f-copyright {
                width: 30%;
                height: 60%;
                margin-top: 15px;

            }

            .f-content ul li {
                padding-bottom: 4px;
            }

            .f-content p {
                line-height: 25px;
            }

            .f-follow,
            .f-copyright {
                width: 100%;
                height: 20%;
            }

            .f-follow {
                padding-left: 51px;
            }
        }


        @media only screen and (max-width:1167px) {

            .logo {
                padding-left: 94px;
                width: 20%;
                height: 100%;
            }

            header {
                height: 100px;
            }

            header h1 {
                font-size: 18px;
            }

            .navList {
                display: block;
                transition: all 1s ease-out;
                flex-direction: column;
                padding-top: 20px;
                text-align: center;
                background-color: rgb(0 54 75);
                width: 100%;
                height: 350px;
            }

            li {
                padding-bottom: 20px;

            }

            .openMenu {
                display: block;
            }

            .v-class-resp {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <section>
        <header>
            <figure class="logo">
                <img src="logo.png" alt="logo">&nbsp;
                <h1>Let's Byk</h1>
            </figure>
            <div class="openMenu">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="navList v-class-resp">
                <li><a href="Home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="locate.php">Locate</a></li>
                <li><a href="log-in.php">Login</a></li>
                <li><a href="sign-up.php">Sign-up </a></li>
            </ul>
        </header>
    </section>
    </section>
    <script>

        const navList = document.querySelector('.navList');
        const closeMenu = document.querySelector('.v-class-resp');
        const openMenu = document.querySelector('.openMenu');


        openMenu.addEventListener('click', () => {

            navList.classList.toggle('openMenu');
            navList.classList.toggle('v-class-resp');


        })
    </script>

    <section>
        <div class="price-sec">
            <div class="table">
                <h2>FARE CHARGES</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Riding Time</th>
                            <th style="border-right:2px solid rgba(4,45,70,0.397)">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0 min-10 min</td>
                            <td>FREE</td>
                        </tr>
                        <tr>
                            <td>10 min-30 min</td>
                            <td>5rs/-</td>
                        </tr>
                        <tr>
                            <td>30 min-1hour</td>
                            <td>10rs/-</td>
                        </tr>
                        <tr>
                            <td>1 hour-2hour</td>
                            <td>20rs/-</td>
                        </tr>
                        <tr>
                            <td>2 hour-4hour</td>
                            <td>35rs/-</td>
                        </tr>
                        <tr>
                            <td>4 hour-10hour</td>
                            <td>60rs/-</td>
                        </tr>
                        <tr>
                            <td>10 hour-15hour</td>
                            <td>80rs/-</td>
                        </tr>
                        <tr>
                            <td>15hour-1day</td>
                            <td>150rs/-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section>
        <footer>
            <div class="f-logo">
                <img src="logo.png" alt="logo" align="right">
            </div>
            <div class="f-content">
                <ul>
                    <li><a href="about.php">Our Team</a> </li>
                    <li><a href=""> Contect Us</a></li>
                    <li> <a href=""> Privacy policy</a></li>
                    <li><a href="">User ageement</a> </li>
                    <li><a href=""> FAQ's</a></li>
                    <li> <a href=""> Blogs</a></li>
                </ul>
            </div>
            <div class="f-content">
                <h4>Address</h4>
                <p><i class="fa fa-home"></i> Dpt.of Computer Science Indira Gandhi National Tribal University,
                    Amarkantak, Village-Lalpur, Distt-Anuppur (M.P.), Pin -484887</p>
            </div>
            <div class="f-content f-follow">
                <h4> Follow us on </h4>
                <div>
                    <a href="#"> <i class="fa fa-instagram fa-2x"></i></a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="#"> <i class="fa fa-linkedin-square fa-2x"></i></a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="#"> <i class="fa fa-facebook-square fa-2x"></i></a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="#"> <i class="fa fa-twitter-square fa-2x"></i></a>
                </div>
            </div>
            <div class="f-copyright">
                <hr>
                <i class="fa fa-copyright"> Copyright 2021 Let's byk Pvt Ltd</i>

            </div>
        </footer>
    </section>
</body>

</html>