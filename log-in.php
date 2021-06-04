<?php
$login=false;
$show_error=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'data/dbconnect.php';
$username=$_POST["uname"];
$ps=$_POST["ps"];

$sql="SELECT * FROM `users` WHERE `user-name`='$username'AND  `password`='$ps'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==1)
{
$login=true;
session_start();
$_SESSION['loggedin']=true;
$_SESSION['uname']=$username;
header("location: home-user.php");
}
else
{ 
    $show_error=true;
    $show_error="<i class='fa fa-exclamation-triangle'></i>  incorrect username password!!!!!";
}
 }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="ICON" ; href="logo.png";>
  <title>LetsByk/Log-in</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    /* ---------------------------------------------------Navigation Bar----------------------------------------------------------------- */
    .container {
      float: left;
      width: 100%;
      height: 100px;
    }

    header {
      float: left;
      width: 100%;
      height: 100px;
      position: fixed;
      z-index: 1;
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

    header ul li a[href="log-in.php"] {
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

    /* ---------------------------------------------------form----------------------------------------------------------------- */

    .main {
      width: 100%;
      height: 72vh;
      background: rgb(169, 242, 255);
      flex-direction:column;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .main-content {
      width: 500px;
      color: white;
      background: url(login3.jfif), rgba(0, 0, 0, 0.8);
      background-blend-mode: overlay;
      background-size: cover;
      margin: 30px;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 5px 5px 5px rgb(77, 22, 204);
    }

    .main-content h1 {
      text-align: center;
      color: rgb(245, 100, 42);
      ;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    input[type="email"],
    input[type="password"] {
      background: transparent;
      width: 100%;
      height: 100%;
      margin: 5px;
      padding: 5px;
      overflow: hidden;
      border: 2px solid black;
      font-size: 20px;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    input[type="email"],
    input[type="password"] :focus {
      color: white;
    }
    input[type="password"]{
      color:white;
    }
    .button {
      width: 100%;
      height: 50px;
      margin: 5px;
      border: none;
      border-radius: 3px;
      background: rgb(245, 100, 42);
      box-shadow: 2px 2px 2px rgb(77, 22, 204);
      font-size: 20px;
      font-weight: bold;
    }

    .button:active {
      transform: translateY(10px);
      box-shadow: 4px 5px 10px rgb(77, 22, 204);
    }

    ::placeholder {
      color: rgb(94, 94, 110);
      opacity: 0.9;
    }

    a {
      color: rgb(245, 160, 3);
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

      .main-content {
        width: 350px;
        padding: 34px;
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
    /*alrt */
    .alrt{
    width:100%;
    background: #c52c2c;
    text-align:center;
    color:white;
    font-size:20px;
    display: block;
}
  </style>
</head>

<body>
  <section>
    <div class="container">
      <header>
        <figure class="logo">
          <img src="logo.png" alt="logo">&nbsp;
          <h1>Let's Byk</h1>
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
    </div>
  </section>

  <script>

    const navList = document.querySelector('.navList');
    const closeMenu = document.querySelector('.v-class-resp');
    const openMenu = document.querySelector('.openMenu');


    openMenu.addEventListener('click', () => {

      navList.classList.toggle('openMenu');
      navList.classList.toggle('v-class-resp');


    }
    )
  </script>



  <section>
    <div class="main">
  <?php  if($show_error)
 {
 echo '<div class="alrt" style="background:#red;"><h3>'.$show_error.'</h3></div>';
 }?>
      <form action="log-in.php" method="POST">
        <div class="main-content">
          <h1>LOG-IN</h1>
          <h3>Username <input type="text" name="uname" required placeholder="@sid123"></h3>
          <h3>Password<input type="Password" name="ps" placeholder="*********"></h3>
          <button type="submit" name="login" class="button">log-in</button>

          <p><br>Create account <a href="sign-up.php">click here</a> </p>
        </div>
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
        <p><i class="fa fa-home"></i> Dpt.of Computer Science Indira Gandhi National Tribal University, Amarkantak,
          Village-Lalpur, Distt-Anuppur (M.P.), Pin -484887</p>
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