<?php
$alrt=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'data/dbconnect.php';

$email=$_POST["email"];
$sql="INSERT INTO `stay-in-touch` ( `mail`) VALUES ('$email')";
$result=mysqli_query($conn,$sql);
if($result)
	{
		$alrt=true;
		}
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
				<title>letsbyk</title>
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
												color: white;
								}

								header ul li a[href="home.php"] {
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

								/* ---------------------------------------------------Poster Part----------------------------------------------------------------- */
								.poster {
												width: 100%;
												height: 760px;
												background: url(poster1.gif), rgba(0, 0, 0, 0.7);
												background-repeat: no-repeat;
												background-size: 100% 760px;
												background-blend-mode: darken;
												display: flex;
												flex-direction: column;
												justify-content: center;
												align-items: center;
												text-align: center;
								}

								.poster h1 {
												color: white;
												font-size: 50px;
								}

								.poster h1 span {
												color: rgb(245 100 42);
								}

								.poster p {
												font-size: 20px;
												color: rgb(189, 255, 241);
								}

								.btn {
												width: 40%;
												height: 80px;
												margin: 20px;
								}

								.main1-content button,
								.btn button,
								input[type="submit"] {
												width: 200px;
												height: 50px;
												border: none;
												border-radius: 3px;
												margin: 20px;
												background: rgb(245, 100, 42);
												box-shadow: 2px 2px 2px rgb(77, 22, 204);
												font-size: 15px;
												font-weight: bold;
								}

								/* ---------------------------------------------------How it works ----------------------------------------------------------------- */
								.main2 {
												width: 100%;
												height: 750px;
												float: left;
												background: rgb(169, 242, 255);
								}

								.main2-content,
								.main2-img {
												width: 40%;
												height: 750px;
												display: flex;
												flex-direction: column;
												justify-content: center;
												align-items: center;
												float: left;
								}

								.main2-img img {
												width: 100%;
												height: inherit;
												padding: 100px;
												object-fit: contain;
												align-self: flex-end;

								}

								.main2-content {
												width: 60%;
												background: url(poster2.gif), rgba(0, 0, 0, 0.8);
												background-blend-mode: overlay;
												background-size: cover;
								}

								.main2-content h1 {
												font-size: 30px;
												padding: 5px;
												margin: 5px 10px;
												color: blanchedalmond;
												border: 2px solid rgb(245, 100, 42);
												border-radius: 10px;
												font-weight: bolder;
												font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
								}

								.main2-content ul li {
												height: 95px;
												margin: 10px;
												color: rgb(0, 232, 248);
												background: rgba(0, 0, 0, 0.4);
												border-radius: 10px;
												text-align: center;
												font-size: 20px;
												padding: 10px;
												box-shadow: 5px 5px 5px rgb(214, 129, 72);
												border: 2px solid black;
								}

								.main2-content ul li i {
												color: white;

								}

								.main2-content ul li:hover {
												color: rgb(3, 31, 48);
												background: rgb(255, 103, 42);
												box-shadow: 5px 5px 5px rgb(77, 22, 204);
								}

								/* ---------------------------------------------------Why lets byk ----------------------------------------------------------------- */
								.main1 {
												width: 100%;
												height: 750px;
												background: white;
												text-align: center;

								}

								.main1-content {
												width: 50%;
												height: 750px;
												float: left;
												display: flex;
												flex-direction: column;
												justify-content: center;
												align-items: center;
												font-size: 28px;
												font-weight: bold;
												padding: 25px;
												text-align: justify;
												color: rgb(26, 134, 161);

								}

								.main1-content h1 {
												margin: 10px 10px 50px;
												font-size: 50px;
												color: black;
												align-self: flex-start;
								}

								.main1 figure img {
												width: 50%;
												height: 750px;
												float: left;
								}

								/* ---------------------------------------------------Stay in touch ----------------------------------------------------------------- */
								.stay-in-touch {
												width: 100%;
												height: 250px;
												float: left;
												font-size: 25px;
												font-weight: bold;
												font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
												background: rgb(169, 242, 255);
												font-size: 40px;
												display: flex;
												flex-direction: column;
												justify-content: center;
												align-items: center;
								}

								.stay-in-touch p {
												font-size: 25px;
												font-weight: lighter;
								}

								.stay-in-touch form {
												padding: 50px;
												width: 100%;
								}

								input[ type="email"] {
												width: 30%;
												border-radius: 5px;
												height: 80%;
								}

								input[ type="email"]:focus,
								input[ type="email"]::placeholder {
												font-family: Verdana, Geneva, Tahoma, sans-serif;
												font-size: 20px;
												color: rgb(59, 62, 63);
												text-indent: 15px;
								}

								input[type="submit"] {
												margin: 5px;
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
								button:active,input[type="submit"]:active {
						transform: translateY(10px);
						box-shadow: 4px 5px 10px rgb(77, 22, 204);
				}

								/*-------------------------------------MEDIA QUERIES (FOR MOBILE)---------------------------*/
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
												.poster {
												width: 100%;
												height: 800px;
												background-size: 100% 800px;
												}

												.poster h1 {
																padding: 8px 70px;
												}

												.poster p {
																font-size: 22px;
																margin-bottom: 14px;
												}

												.main1-content button,
												.btn button
													{
																width: 161px;
																height: 55px;
												}

												.main2 {
																height: 123vh;
																display: flex;
																flex-direction: column-reverse;
												}

												.main2 .main2-img img {
																width: 100%;
																padding: 91px;
																height: 515px;
												}

												.main2-img,
												.main2-content {
																width: 100%;
																height: 447px;
												}

												.main2-content {
																padding-top: 50px;
																background-size: cover;
																background-image: none;
																height: 990px;
												}

												.main2-content ul {
																background: rgba(71, 70, 70, 0.349);

												}

												.main2-content ul li {
																font-size: 15px;
																height: 95px;
												}

												.main1 .main1-content {
																height: 547px;
																width: 100%;
																font-size: 21px;
																font-weight: bold;
																padding: 17px;
												}

												.main1 figure img {
																display: none;
												}

												.main1-content button {
																height: 46px;
												}

												.stay-in-touch {
																height: 300px;
												}

												.stay-in-touch p {
																font-size: 20px;
												}

												.stay-in-touch form input[ type="email"] {

																width: 90%;
																height: 47%;

												}

												form input[ type="submit"] {
																width: 148px;
																height: 45px;
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

								/*-----------------------------------------------MEDIA QUERIES (FOR TABLET)-----------------------------------------*/
								@media only screen and (max-width:768px) {
												.logo {
																padding-left: 14px;
												}

												.logo img {
																height: 75%;
																padding-left: 33px;
												}

												header .logo h1 {
																display: none;
												}

												.logo::after {
																content: "Let'sBYK";
																font-size: 20px;
												}


												.poster h1 {
																font-size: 40px;
												}

												.poster p {

																padding-top: 12px;
												}

												.btn {
																margin: 0px;
												}

												.main1-content button,
												.btn button {
																margin: 10px;
												}

												.main2-content {
																background-size: 100% 100%;
																background-repeat: no-repeat;
												}

												.main2-content h1 {
																font-size: 28px;
																padding: 12px;
												}

												.main2-content ul li {
																height: 94px;
																margin: 19px;
																font-size: 17px;
																padding: 12px;
												}

												.main2-img img {
																padding: 65px;
												}

												.main1-content {
																font-size: 25px;

												}

												.main1-content h1 {
																font-size: 42px;
																margin: 16px 19px 53px;
												}

												.main1 figure img {
																height: 700px;
												}

												.main1-content button {
																margin-top: 30px;
																width: 156px;
												}

												.stay-in-touch {
																font-size: 24px;
												}

												input[type="submit"] {
																margin: 10px;
																width: 150px;
																height: 50px;
												}

												input[ type="email"] {
																height: 75%;
												}

												footer {
																height: 50vh;
												}

												.f-logo {
																width: 26%;
																height: 48%;
																margin-top: 12px;
																position: relative;
																left: -109px;
												}

												.f-logo img {
																width: 8vh;
												}

												.f-content {
																width: 30%;
																height: 50%;
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


								/*------------------------- MEDIA QUERIES (NAVIGATION FOR ALL DIVICE)---------------*/
								@media only screen and (max-width:1167px) {

												.logo {
																padding-left: 50px;
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
				</style>
</head>

<body>

				<section>
								<header>
											<figure class="logo">
																<img src="logo.png" alt="logo">&nbsp;
																<h1>&nbsp;Let's Byk</h1>
												</figure>
												<div class="openMenu">
																<i class="fa fa-bars"></i>
												</div>
												<ul class="navList v-class-resp">
																<li><a href="home.php">Home</a></li>
																<li><a href="about.php">About</a></li>
																<li><a href="pricing.php">Pricing</a></li>
																<li><a href="locate.php">Locate</a></li>
																<li><a href="log-in.php">Login</a></li>
																<li><a href="sign-up.php">Sign-up </a></li>
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
								<div class="poster">
												<h1>When it double ,<span> Pedal it out</span></h1>
												<p> Life is like riding a bicycle.To keep your balance you must keep moving<br>
																It's help reduce traffic congestion and air pollution...
												</p>
												<div class="btn">
																<button onclick='window.location.href="log-in.php"'>Get Started!...</button> <button onclick='window.location.href="https://youtu.be/l2w1vjkg-qg"'>Watch Intro &nbsp;<i class="fa fa-play-circle"></i></button>
												</div>
								</div>
				</section>

				<section>
								<div class="main2">
												<figure class="main2-img">
																<img src="mobile.png" alt=" img">
												</figure>
												<div class="main2-content">
																<h1>How it Works</h1>
																<ul type="none">
																				<li><i class=" fa fa-user-circle-o" style="font-size: 30px;">&nbsp;Log-in</i>
																								<p class="para">Log-in and Recharge .</p><br>
																				</li>
																				<li>
																								<h3><i class="fa fa-map-pin" style="font-size: 30px;">&nbsp;Locate</i> </h3>
																								<p class="para">Locate your bicycle via map.</p><br>
																				</li>
																				<li> 
																								<h3><i class="fa fa-bicycle" style="font-size: 35px; ">&nbsp;Start Ride</i> </h3>
																								<p class="para">Request for ride .you i'll get an Otp enter and start your ride.</p><br>
																				</li>
																				<li>
																								<h3><i class="fa fa-road" style="font-size: 30px;">&nbsp;Enjoy The Ride</i> </h3>
																								<p class="para">Enjoy the ride, follow rules and ride safely.</p>
																				</li>
																				<li>
																								<h3><i class="fa fa-steam" style="font-size: 30px;">&nbsp;End your Ride</i> </h3>
																								<p class="para">Park the Bicycle at nearest Lets Byk Zone.</p>
																				</li>
																</ul>
												</div>
								</div>
				</section>

				<section>
								<div class="main1">
												<div class="main1-content">
																<h1>Why lets byk ?</h1>
																<p>A perfect solution to protect yourself from a heavy sunlight, Letsbyk is a easy healthy and pocket
																				Friendly service .
																				the number of times you i'll use me the features and sustainablity will be make you fan of me.
																				now what are you wating for Let's go and Letsbyk try it out you will be proud!!....
																</p>
																<button onclick='window.location.href="about.php"'>know more</button>
												</div>
												<figure>
																<img src="poster3.png" alt="IMG">
												</figure>
								</div>
				</section>

				<section>
								<div class="stay-in-touch">Stay in Touch!.....
												<p>Join us we will Keep you updated.</p>
												<form align="center" action="home.php" method="POST"><input type="email" name="email" id="email" placeholder="Email"
																				required> <input type="submit" value="submit">
												</form>
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

												</div> <?php
						if($alrt)
					echo include 'data/alrt.php';
							?>
								</footer>
				</section>
</body>
</html>