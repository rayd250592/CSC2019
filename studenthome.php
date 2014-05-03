<?php

session_start();

if (!isset($_SESSION['csc2019_40043298']))

{

$URL = 'login.php';
header ("Location: $URL");
}

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
                <li><a href="login.php">Home</a></li>
                <li><a href="#portfolio">Change Password</a></li>
                <li><a href="process_logout.php">Logout</a></li>
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

            <h1>QOL Student Homepage</h1>
            
                
             
              <ul class="folio-list clearfix">

                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/timetable.jpg" title="Timetable" ><img src="images/timetable.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Time Table</h3>
                </li>

                <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="images/library.jpg" title="Library"><img src="images/library.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Library</h3>
                </li>

      <li class="folio-thumb last">
                    <div class="thumb">
                        <a class="lightbox" href="https://qmail.qub.ac.uk/CookieAuth.dll?GetLogon?curl=Z2Fowa&reason=0&formdir=1" title="Library"><img src="images/email.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Email</h3>
                </li>

               
                <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="student_modules.php" title="Modules" ><img src="images/modules.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Modules</h3>
                </li>
                
                 <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="images/smart_card.jpg" title="Smart Card" ><img src="images/smart_card.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Smart Card</h3>
                </li>


 <li class="folio-thumb">
                    <div class="thumb">
                        <a class="lightbox" href="https://qsis.qub.ac.uk/psp/cs91prd/?cmd=login&languageCd=ENG&" title="Qsis" ><img src="images/images/qsis.jpg" alt="" /> </a>
                    </div>
                    <h3 class="entry-title">Qsis</h3>
                </li>


             
            </ul>



          
      <!-- about us -->
      
      <!-- Styles -->
     
      <!-- contact -->
      



<!-- footer -->
<footer>
    <div class="footer-content">
        <ul class="footer-menu">
            <li><a href="http://www.qub.ac.uk/home/TheUniversity/GeneralServices/Quicklinks/EmailUs/">Email Us</a></li>
            <li><a href="http://www.qub.ac.uk/home/TheUniversity/AboutQueens/KeyContacts/">Contacts</a></li>
            <li><a href="http://www.qub.ac.uk/home/Legal">Legal</a></li>
            <li><a href="http://www.qub.ac.uk/home/Accessibility/">Accessibility</a></li>
            <li><a href="http://www.qub.ac.uk">www.qub.ac.uk</a></li>
            <!-- <li class="rss-feed"><a href="#">RSS Feed</a></li> -->
        </ul>

        <p class="footer-text">Copyright 2014 Queens University Belfast. &nbsp;&nbsp;&nbsp; Template from <a href="http://www.styleshout.com/">Styleshout</a></p>
    </div>

</footer>

</body>
</html>
