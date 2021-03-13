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
    main h2 {
      font-family: kansasnew, serif;
  		font-weight: 600;
  		font-style: normal;
      font-size: 2rem;
    }

    main p {
      font-family: 'Montserrat', sans-serif;
    	font-weight: 300;
      font-size: 1rem;
    }

    strong {
      padding-top: 20px;
      text-align: center;
    }

    strong a {
      cursor: pointer;
      background-color: #f04c1f;
      opacity: .8;
      color: white;
      padding: 9px 24px;
      border-radius: 5px;
      font-size: 18px;
      letter-spacing: .05rem;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
      width: 250px;
      height: 55px;
      margin: 0 auto;
    }

    strong a:hover {
      opacity: 1;
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
  </style>


	<header>
		<div class="logo">
			<a href="#home"><img src="images/home-logo.png" alt="Home Icon" title="Home Icon"></a>
			<a href="#home"><h5>Becky Hassler</h5></a>
		</div>

		<div class="bg-cover"></div>
		<div role="button" class="hamburger-shell" aria-expanded="false">
			<div class="top"></div>
			<div class="middle"></div>
		</div>

		<nav class="menu" id="menu">
			<ul>
				<li class="mobile-link"><a href="#home">Home</a></li>
				<li class="mobile-link"><a href="#about">About</a></li>
				<li class="mobile-link"><a href="#work">Work</a></li>
				<li class="mobile-link"><a href="#contact">Contact</a></li>
			</ul>
		</nav>

		<nav class="desktop-nav">
			<ul>
				<li class="link"><a href="#home">Home</a></li>
				<li class="link"><a href="#about">About</a></li>
				<li class="link"><a href="#work">Work</a></li>
				<li class="link"><a href="#contact">Contact</a></li>
			</ul>
		</nav>
	</header>

    <!--Main-->
    <main class="container site-content">
        <h2>Sorry!</h2>
        <p> Something went wrong with your submission. Please try again.</p>
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
