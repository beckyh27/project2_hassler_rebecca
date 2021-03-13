<!DOCTYPE html>
<html lang="en">

  <head>

  	<meta charset="utf-8">

  	<title>Becky Hassler's Portfolio</title>

  	<!-- Stylesheets -->
  	<link type="text/css" rel="stylesheet" href="/styles.css" />
  	<link type="text/css" rel="stylesheet" href="/flickity.css" />
  	<link rel="stylesheet" type="text/css" href="/jquery.fancybox.css">

  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!--Adobe Font-->
  	<link rel="stylesheet" href="https://use.typekit.net/txh3wkz.css">


  	<!--Google Fonts-->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Roboto:wght@100&display=swap" rel="stylesheet">

  	<!-- FAVIcon -->
  	<link rel="shortcut icon" href="images/favicon.ico" type="img/ico">

  	<!--[if lt IE 9]>
  				<script src="js/html5shiv-printshiv.min.js"></script>
  			<![endif]-->

  </head>

  <body class="site">

    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
        border: 0;
      }

      article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
        display: block;
      }

      /************************* STICKY FOOTER  *************************/
      .site {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
      }

      .site-content {
        flex: 1;
      }

      .container {
        padding: 0 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
      /************************* STICKY FOOTER  *************************/
      body {
        background-color: #fcf1e7;
        font-family: 'Montserrat', sans-serif;
        font-weight: 300;
        color: #292324!important;
      }

      header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        position: fixed;
        z-index: 99;
        background-color: #fcf1e7;
        height: 90px;
        width: 100%;
      }

      header img {
        width: 75px;
        padding: 10px 0 0 10px;
      }

      .logo {
        display: flex;
        align-items: center;
      }

      h5 {
        display: none;
      }

      .desktop-nav {
        display: none;
      }

      /***************************HAMBURGER MENU STYLES*******************************/
      .bg-cover {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #292324;
        z-index: 0;
        transition: all 350ms ease;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
      }

      .reveal {
        opacity: .85;
        display: block;
        pointer-events: auto;
        visibility: visible;
      }

      .hamburger-shell {
        margin: 0;
        position: fixed;
        overflow: hidden;
        width: 65px;
        height: 75px;
        overflow: auto;
        left: calc(100% - 85px);
        top: 0;
        cursor: pointer;
        padding: 0;
        background: transparent;
        border: none;
      }

      .top, .middle {
        position: absolute;
        width: 62px;
        height: 10px;
        background-color: #f04c1f;
        opacity: 70%;
        transition: all 350ms ease-in-out;
        top: 20px;
      }

      .middle {
        top: 40px;
      }

      #menu {
        position: fixed;
        left: calc(100% - 292px);
        top: 10px;
        color: #292324;
        display: none;
        margin: 120px 5%;
        text-decoration: none;
        font-weight: 300;
        font-size: 1.5rem;
        color: #fcf1e7;
        padding: 24px;
        width: 200px;
        text-align: right;
      }

      /***************************** NAV UNDERLINE EFFECT *****************************/
      .mobile-link {
        list-style-type: none;
        padding-top: 40px;
      }

      .mobile-link a {
        color: #fcf1e7;
        font-weight: 400;
      }

      .mobile-link>a {
        position: relative;
        text-decoration: none;
      }

      .mobile-link>a:hover {
        transition: all 0.3s ease-in-out 0s;
      }

      .mobile-link>a::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 10px;
        bottom: -13px;
        left: 0;
        background-color: #f6ad9b;
        visibility: hidden;
        transform: scaleX(0);
        transition: all 0.3s ease-in-out 0s;
      }

      .mobile-link>a:hover::before {
        visibility: visible;
        transform: scaleX(1);
      }

      /***************************** NAV UNDERLINE EFFECT *****************************/
      .menu-open .top {
        transform: rotate(225deg);
        -webkit-transform: rotate(225deg);
        top: 30px;
        background-color: #f6a894;
        height: 10px;
        opacity: 100%;
      }

      .menu-open .middle {
        transform: rotate(-225deg);
        -webkit-transform: rotate(-225deg);
        top: 30px;
        background-color: #f6a894;
        height: 10px;
        opacity: 100%;
      }

      /*************************** HAMBURGER MENU STYLES *******************************/
      /**** MAIN ****/

      ul {
        padding: 15px 0 15px 21px;
      }

      main h2 {
        font-family: kansasnew, serif;
    		font-weight: 600;
    		font-style: normal;
        font-size: 2rem;
      }

      main p {
        padding: 20px 0;
        font-family: 'Montserrat', sans-serif;
      	font-weight: 300;
        font-size: 1.1rem;
      }

      /* .missing-fields-flex {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: space-around;
      } */

      .return-button {
        padding-top: 20px;
      }

      .return-button h6 {
        cursor: pointer!important;
        background-color: #f04c1f;
        opacity: .75;
        color: white!important;
        padding: 5px 0;
        border-radius: 5px;
        font-size: 1.1rem;
        letter-spacing: .05rem;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        width: 210px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: .3s;
      }

       .return-button h6:hover {
        opacity: 1;
        transition: .3s;
      }

      .return-button h6 a {
      color: white!important;
      text-decoration: none;
      }
      /**** FOOTER ****/
      footer {
        text-align: center;
        color: #fcf1e7;
        background-color: #292324;
        height: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      footer p {
        padding: 10px 15px;
      }
      /************************* START 500PX MEDIA QUERY *************************/
      @media (min-width: 500px) {
        /**** HEADER ****/

        h5 {
          display: inline-block;
          font-family: kansasnew, serif;
          font-weight: 600;
          font-style: normal;
          font-size: 2.2rem;
          padding-left: 5px;
          color: #292324;
        }

        .logo a {
          text-decoration: none;
        }
      }
        /************************* END 500PX MEDIA QUERY *************************/
      /*************************  START 630PX MEDIA QUERY *************************/
      @media (min-width: 630px) {
        .container {
          max-width: 600px;
          margin: 0 auto;
        }
      }
      /************************* END 630PX MEDIA QUERY *************************/
      /************************* START 850PX MEDIA QUERY *************************/
      @media (min-width: 850px) {

        /* DESKTOP-NAV STYLES START*/
        .hamburger-shell {
          display: none;
        }

        .desktop-nav {
          display: block;
          text-align: right;
          padding-top: 23px;
          font-size: 1.3rem;
        }

        .desktop-nav ul li {
          display: inline-block;
          margin-right: 45px;
        }

        .desktop-nav ul li a {
          color: #292324;
          text-decoration: none;
          font-weight: 400;
        }

        /***************************** NAV UNDERLINE EFFECT *****************************/
        .link>a {
          position: relative;
          color: #292324;
          text-decoration: none;
        }

        .link>a:hover {
          color: #292324;
          transition: all 0.3s ease-in-out 0s;
        }

        .link>a::before {
          content: "";
          position: absolute;
          width: 100%;
          height: 10px;
          bottom: -13px;
          left: 0;
          background-color: #f6ad9b;
          visibility: hidden;
          transform: scaleX(0);
          transition: all 0.3s ease-in-out 0s;
        }

        .link>a:hover::before {
          visibility: visible;
          transform: scaleX(1);
        }

        /***************************** NAV UNDERLINE EFFECT *****************************/
        /* DESKTOP-NAV STYLES END*/
      }

    </style>


  	<header>
  		<div class="logo">
  			<a href="../index.html#home"><img src="images/home-logo.png" alt="Home Icon" title="Home Icon"></a>
  			<a href="../index.html#home"><h5>Becky Hassler</h5></a>
  		</div>

  		<div class="bg-cover"></div>
  		<div role="button" class="hamburger-shell" aria-expanded="false">
  			<div class="top"></div>
  			<div class="middle"></div>
  		</div>

  		<nav class="menu" id="menu">
  			<ul>
  				<li class="mobile-link"><a href="../index.html#home">Home</a></li>
  				<li class="mobile-link"><a href="../index.html#about">About</a></li>
  				<li class="mobile-link"><a href="../index.html#work">Work</a></li>
  				<li class="mobile-link"><a href="../index.html#contact">Contact</a></li>
  			</ul>
  		</nav>

  		<nav class="desktop-nav">
  			<ul>
  				<li class="link"><a href="../index.html#home">Home</a></li>
  				<li class="link"><a href="../index.html#about">About</a></li>
  				<li class="link"><a href="../index.html#work">Work</a></li>
  				<li class="link"><a href="../index.html#contact">Contact</a></li>
  			</ul>
  		</nav>
  	</header>

      <!--Main-->
    <main class="container site-content">
      <h2>Missing fields</h1>
      <p>Sorry! You haven't completed all of the required fields. Please go back to the form and complete the following required fields:
      </p>

      <div class="missing-fields-flex">
        <ul>
          <?php
          for($i=0; $i<count($this->missing_required_fields); $i++){
          echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
          }
          ?>
        </ul>
        <button class="return-button" type="button">
          <h6><a href="#" onClick="history.go(-1)">Return to form</a></h6>
        </button>
      </div>
    </main>

    <footer>
      <p>This website was designed and developed by Becky Hassler.</p>
      <p>Copyright 2021</p>
    </footer>

    <!-- Slider -->
    <script type="text/javascript" src="js/flickity.pkgd.js"></script>

    <!-- FancyBox JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Smooth Scroll -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- Hamburger Menu -->
    <script type="text/javascript" src="js/hamburger.js"></script>
  </body>

</html>
