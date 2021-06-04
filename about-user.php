<?php
session_start();
if( ! isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true)
{
    header("location:home.php");
    exit;
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="ICON" ; href="logo.png" ;>
    <title>LET'sBYK | About</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
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
            color: white;
        }

        header ul li a[href="about-user.php"] {
            font-size: 27px;
            font-weight: bold;
            border: 2px solid rgb(245 100 42);
            border-radius: 5px;
        }

        header ul li a:hover {
            color: rgb(245 100 42);
        }

        .openMenu {
            padding-right: 10px;
            padding-top: 30px;
            text-align: right;
            color: white;
            height: 100px;
            font-size: 30px;
            display: none;
            cursor: pointer;
        }


        /*------------------------------------------------------------ABOUT_LET'S BYK--------------------------------------------------------*/
        .about-section1 {
            width: 100%;
            height: 850px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-section1 .m-content {
            width: 50%;
            height: 650px;
            padding: 12px 60px;
            margin-left: 40px;
            margin-top: 42px;
            text-transform: capitalize;
            text-align: justify;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            justify-content: center;
        }

        .about-section1 .m-content h1 {
            text-transform: capitalize;
            font-size: 37px;
            padding-top: 23px;
            padding-bottom: 20px;
        }

        .about-section1 .m-content p {
            text-transform: capitalize;
            text-align: justify;
            font-size: 14px;
            line-height: 20px;
        }

        .about-section1 .m-img {
            width: 50%;
            height: 650px;
            margin-left: 20px;
            background-image: url(about.jpg);
            background-repeat: no-repeat;
        }

        /*-----------------------------------------------------------OUR_TEAMMATES--------------------------------------------------------*/
        .about-section2 {
            width: 100%;
            height: 880px;
            background-color: beige;
            padding: 30px 30px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: justify;

        }

        .about-section2 h1 {
            font-size: 43px;
            padding-left: 70px;
        }

        .about-section2 p {
            text-align: left;
            padding-left: 70px;
            margin-bottom: 20px;
        }

        .about-section2 .card {
            width: 24%;
            height: 460px;
            margin: 57px 0 0 5px;
            float: left;
        }

        .about-section2 .card .card-img {
            width: 300px;
            height: 300px;
            margin-left: 50px;
        }

        .about-section2 .card .card-img img {
            width: 300px;
            height: 300px;
            margin: 0;
            padding: 0;
        }

        .about-section2 .card .card-con {
            width: 300px;
            height: 100px;
            background-color: rgba(235, 235, 217, 0.911);
            margin-left: 50px;
        }

        .about-section2 .card .card-con h3 {
            text-align: center;
            padding-top: 8px;
            padding-left: 13px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .about-section2 .card .card-con p {
            text-align: center;
            overflow: hidden;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding-left: 10px;
        }

        .about-section2 .card .card-con .hidden-cont {
            display: none;
        }

        .about-section2 .card .card-img img:hover {
            width: 300px;
            height: 309px;
            border-radius: 0;
            cursor: pointer;
            transition: all .4s ease-in;
        }

        .about-section2 .card .card-con:hover {
            width: 300px;
            height: 250px;
            cursor: pointer;
            transition: all .5s ease-in;
            border-bottom: 1px solid hsla(195, 74%, 29%, 0.993);
            border-radius: 2px;
            background-color: hsla(195, 73%, 29%, 0.993);
            color: white;
        }

        .about-section2 .card .card-con:hover .hidden-cont {
            display: block;
            transition: all .5s ease-in;
            cursor: pointer;
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

        /*---------------------------MEDIA QUERIES(FOR MOBILE)---------------------*/
        @media only screen and (max-width:468px) {
            .logo {
                width: 12px;
                padding-left: 59px;
            }

            .logo img {
                height: 50%;
                padding-left: 59px;
            }

            .logo h1 {
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

            .about-section1 {
                flex-direction: column;
                height: 100vh
            }

            .about-section1 .m-content {
                width: 100%;
                height: 650px;
                padding: 61px 28px;
                margin-left: 0px;
                margin-top: 10vh;
            }

            .about-section1 .m-content h1 {
                font-size: 31px;
                padding-top: 23px;
                padding-bottom: 20px;
            }

            .about-section1 .m-content p {
                font-size: 14px;
                line-height: 17px;
            }

            .about-section1 .m-img {
                background-image: none;

            }

            .about-section2 {
                height: 256vh;
                padding: 30px 1px;
            }

            .about-section2 h1 {
                font-size: 38px;
                padding-left: 21px;
            }

            .about-section2 p {
                padding-left: 27px;
                margin-bottom: 12px;
            }

            .about-section2 .card {
                width: 100%;
                height: 480px;
                margin: 50px 0 0 0px;

            }

            .about-section2 .card .card-img {
                width: 292px;
                margin-left: 37px;
            }

            .about-section2 .card .card-img img {
                width: 353px;
                margin: 0;
                padding: 0;
            }

            .about-section2 .card .card-con {
                width: 353px;
                height: 100px;
                margin-left: 37px;
            }

            .about-section2 .card .card-con h3,
            p {
                text-align: center;
                padding-top: 8px;
            }

            .about-section2 .card .card-con:hover {
                height: 200px;
                width: 353px;
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

        /*--------------------------MEDIA QUERIES(FOR TABLET)---------------------*/
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
                padding-bottom: 1px;
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

        /*--------------- MEDIA QUERIES(NAVIGATION FOR ALL DEVICE)--------------------*/
        @media only screen and (max-width:1167px) {

            .logo {
                padding-left: 20px;
                width: 20%;
                height: 100%;
            }

            header {
                height: 100px;
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
        /*php nav*/
.php{
    padding-left:5px;
    color:rgb(238,224,98);
    font-size:20px;
    text-align:center;
    font-weight:bold;
    border-left:2px solid white;
    padding-top:2px;
 }
 .logout{
    font-size:17px; 
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
                <li ><a href="home-user.php">Home</a></li>
                <li><a href="about-user.php">About</a></li>
                <li><a href="pricing-user.php">Pricing</a></li>
                <li><a href="locate-user.php">Locate</a></li>
                <li class="php">
                <?php  echo"<i class='fa fa-user-circle-o fa-2x'></i><br>";echo $_SESSION['uname'];
                       echo "<br><a href='logout.php' class='logout'>&nbsp;Logout <i class='fa fa-arrow-right'></i></a>"
                ?></li>
               
            </ul>
        </header>
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
        <div class="about-section1">
            <div class="m-content">

                <h1 style="color: black;">about let's byk</h1>
                <p>LET's BYk offers mobility solution by connecting biycles to students .
                    let’s BYk is looking to build mobility for next billion indians.
                    its was founded on 2021 .LET'S BYK is part of india 's online travel resources
                    by providing widest choies, lower price , unmatched benefits.
                    <br><br>The journey started in 2021 witha small investiment and a plenty of experience.
                    LET'S BYK mission is to make urban mobility in India seamless,
                    <br> shareable and sustainable. What started off as an initiative to reduce traffic
                    <br> congestion and pollution in IGNTU, is now redefining urban mobility across
                    the country.We are driven by three guiding principles of urban mobility – Accessibility,
                    Availability, and Affordability.
                    <br><br>
                    We are empowering residents in IGNTU to create a paradigm shift in the mobility
                    industry, by making the LET'S BYK commute more efficient and eco-friendly.
                    <br><br>
                    LET'S BYK is a technology-driven mobility platform that enables Integrated Urban Mobility across
                    public and private modes of transport.
                    <br> We are an India-based with a founding team that is deeply passionate about
                    creating positive social impact. This mindset is instilled in each and every member of our
                    team, and we are dedicated to making a difference in the lives of people around us. So, if
                    you are passionate about the challenges of urban mobility, chaotic congestion, and
                    sustainable living, let’s have a conversation and make a difference together!

                <h3>#Let'sBYK</h3>
                </p>
            </div>
            <div class="m-img">
            </div>
        </div>
    </section>
    <section>
        <div class="about-section2">
            <h1>Our Teammates</h1>
            <p>let's byk is co-founded by our team of
                serial
                <br> entrepreneurs with solid professional and global experience.
            </p>
            <div class="card">
                <div class="card-img">
                    <img src="boys.gif" alt="siddhi">
                </div>
                <div class="card-con">
                    <h3>Siddharth Soni</h3>
                    <p>BCA(2nd Year)</p>
                    <br>
                    <p class="hidden-cont">Indira Gandhi National Tribal University
                        <br> Amarkantak <br>( A Central University by an Act of Parliament )
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="girl.png" alt="jaggu">
                </div>
                <div class="card-con">
                    <h3>Jagrati Gupta</h3>
                    <p>BCA(2nd Year)</p>
                    <br>
                    <p class="hidden-cont">Indira Gandhi National Tribal University
                        <br> Amarkantak <br>( A Central University by an Act of Parliament )
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="girl.png" alt="shanya">
                </div>
                <div class="card-con">
                    <h3>Shanya Sahu</h3>
                    <p>BCA(2nd Year)</p>
                    <br>
                    <p class="hidden-cont">Indira Gandhi National Tribal University
                        <br> Amarkantak <br>( A Central University by an Act of Parliament )
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="girl.png" alt="riya">
                </div>
                <div class="card-con">
                    <h3>Riya Keshware</h3>
                    <p>BCA(2nd Year)</p>
                    <br>
                    <p class="hidden-cont">Indira Gandhi National Tribal University
                        <br> Amarkantak <br>( A Central University by an Act of Parliament )
                    </p>
                </div>
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
                    <li><a href="about-user.php">Our Team</a> </li>
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