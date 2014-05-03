<?php

$modules = $_GET['Modules'];
$number = $_GET['Questions'];
$options = $_GET['options'];

echo $modules;
echo $number;



?>


<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Queens Online </title>

    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css" />

    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.6.1.min.js"><\/script>')</script>

    <script src="js/jquery.smoothscroll.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/jquery.easing-1.3.pack.js"></script>
    <script src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <script src="js/init.js"></script>

</head>

<body>

<!-- header-wrap -->
<div id="header-wrap">
    <header>

        <hgroup>
            <h1><a href="index.html">QOL</a></h1>
            <h3>Welcome To Queens University Belfast Virtual Learning Environment</h3>
        </hgroup>

        <nav>
            <ul>
                <li><a href="#main">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Our Works</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#styles">Styles</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>

    </header>
</div>

<!-- content-wrap -->
<div class="content-wrap">

    <!-- main -->
    <section id="main">

       



	      
              
             



      <!-- portfolio -->
      <section id="portfolio">

            <h1>Create Quiz</h1>
           <form action="staffprocessquiz.php">
            
            
            <?php

$modules = $_GET['Modules'];
$number = $_GET['Questions'];
$options = $_GET['options'];

//echo $modules;
//echo $number;

for ($i = 1; $i <= $number; $i++) {
    echo $i . ":  ";
    echo "<input name='Text$i' type='text'  size='100' />";
    echo "<br>";
    echo "<br>";
    
    for ($j = 1; $j <= $options; $j++)
    {
    
    echo "<input name='c$i$j' type='checkbox' />";
    
     echo "<input name='qstatus$i$j' type='text' value='Incorrect'/>";
     
     echo "<input name='Texta$i$j' type='text'  size='50' />";
     
    echo "<br>";
    echo "<br>";
    
    }
    
    echo "<input name='numbers' type='hidden' value='$number' />";
echo "<br>";
echo "<input name='options' type='hidden' value='$options' />";
echo "<br>";
echo "<input name='modules' type='hidden' value='$modules' />";


    
    
    
  
}

?>

    <input name="btnSubmit" type="submit" value="Submit" />
            </form>
            

       

      <!-- about us -->
      
      <!-- Styles -->
     
      <!-- contact -->
      



<!-- footer -->
<footer>
    <div class="footer-content">
        <ul class="footer-menu">
            <li><a href="#main">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#about-us">About</a></li>
            <li><a href="http://www.qub.ac.uk">www.qub.ac.uk</a></li>
            <!-- <li class="rss-feed"><a href="#">RSS Feed</a></li> -->
        </ul>

        <p class="footer-text">Copyright 2014 Queens University Belfast. &nbsp;&nbsp;&nbsp; Template from <a href="http://www.styleshout.com/">Styleshout</a></p>
    </div>

	</footer>

</body>
</html>
	
