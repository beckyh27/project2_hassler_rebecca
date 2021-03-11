<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VNFDGEZCKX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VNFDGEZCKX');
    </script>

    <meta name="keywords" content="portfolio website web design becky hassler">
    <meta name="description" content="See the web and graphic design portfolio of Becky Hassler.">

    <meta charset="utf-8">
    <title>Becky Hassler Design Portfolio</title>

    <!-- Stylesheet -->
    <link href="lightbox/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/styles.css">

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/scripts.js" type="text/javascript"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- FAVIcon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="img/ico">

    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/1c337c1bea.js" crossorigin="anonymous"></script>

  </head>

  <body>
    <style type="text/css">
      /*========================================================
    *
    *
    *                      Universal Styling
    *
    *
    ===========================================================*/
      * {
        margin: 0;
        padding: 0;
        border: 0;
      }

      body {
        background-image: linear-gradient(#0051e5, #02aee0);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        overflow-x: hidden;
        color: #fbfbfb;
      }

      /*========================================================
      *
      *
      *                      Header
      *
      *
      ===========================================================*/
      header {
        position: fixed;
        text-align: right;
        left: 0;
        right: 0;
        margin: 40px 20px 0;
        z-index: 99;
      }

      header nav ul li {
        display: inline;
        text-align: right;
        padding: 12px 0 7px;
        border-radius: 4px;
        transition: 1s ease-in-out;
      }

      header nav ul li:hover {
        background-image: linear-gradient(#f77c2a, #fad126);
        transition: 1s ease-in-out;
      }

      header nav a {
        text-decoration: none;
        color: #fbfbfb;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: .05rem;
        font-weight: 500;
        font-size: 20px;
        margin: 20px 15px 0;
      }

      .logo {
        float: left;
      }

      .logo-div {
        position: relative;
        top: -35px;
        background-image: url('images/logo.png');
        width: 75px;
        height: 75px;
        background-repeat: no-repeat;
        background-size: 75px 75px;
        transition: 0.5s ease-in-out;
      }

      .logo-div:hover {
        background-image: url('images/reverse-logo.png');
        transition: 0.5s ease-in-out;
      }
      /*========================================================
      *
      *
      *                      Main
      *
      *
      ===========================================================*/

      .container {
        max-width: 900px;
        padding: 300px 0px;
        text-align: center;
        margin: 0 auto;
      }

      h1 {
        font-family: 'Comfortaa', cursive;
        font-size: 30px;
        line-height: 1.6rem;
        letter-spacing: .05rem;
      }

      .container p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        line-height: 1.6rem;
        padding-top: 30px;
      }

      /*========================================================
      *
      *
      *                      Footer
      *
      *
      ===========================================================*/
      footer {
        text-align: center;
        height: 100px;
      }

      footer p {
        font-size: 16px;
        padding: 100px 0 100px;
        font-family: 'Montserrat', sans-serif;
      }
    </style>

    <!--Header-->
    <header>
      <nav>
        <ul>
  				<li><a href="../index.html#home" class="logo">
  						<div class="logo-div"></div>
  					</a></li>
  				<li><a href="../index.html#about">About</a></li>
  				<li><a href="../index.html#work">Work</a></li>
  				<li><a href="../index.html#contact">Contact</a></li>
        </ul>
      </nav>
    </header>

    <!--Main-->
    <main>
  		<div class="container">
  			<h1>Missing fields</h1>
  			<p>Sorry, you have not completed all of the required fields.</p>
  			<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

  			<ul>
  			<?php
  				for($i=0; $i<count($this->missing_required_fields); $i++){
  					echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
  				}
  			?>
  			</ul>

  			<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
  		</div>
  	</main>

  	<!--Footer-->
  	<footer>
  		<p>
  			Website by Becky Hassler
  		</p>
  	</footer>

  </body>
</html>
