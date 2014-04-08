<?php 
session_start();
include 'connect.php'; 
$uname = $_POST['user'];
$pass = $_POST['userpassword'];

//echo $uname;
//echo $pass;

//echo $uname;
//echo $pass;

//include('connect.php');

$query = "select * FROM user WHERE user='$uname' and pass='$pass'";
//echo $query;
$result = mysql_query($query) or die(mysql_error());
//echo $result;

$count = mysql_num_rows($result);
//echo $query;
//echo $count;

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


            
     		<?php 
		
		
		if($count > 0)
{

if ($uname == 'staff')

{

$_SESSION['csc2019_40043298'] = $uname;
 header('Location: staffhome.php');

}

elseif ($uname == 'student')

{


 header('Location: studenthome.php');
}

elseif ($uname != 'staff' || $uname != 'student')

{

echo "<h1>Incorrect Password</h1>";

echo "</br>Your password or username is incorrect, click <a href='login.php'>here</a> to try again.";

}

		}
		
		?>


      <!-- about us -->
      
      <!-- Styles -->
     
      <!-- contact -->
      
<h1>Incorrect Password</h1>
</br>
<p>Your password or username is incorrect, click <a href='login.php'>here</a> to try again.</p>

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
