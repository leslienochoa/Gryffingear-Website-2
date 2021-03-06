<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Gryffingear Team 5012 | TPAA Robotics</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-47254316-1', 'auto');
    ga('send', 'pageview');

  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
  
<!-- Start Header -->
  <div class="header">

    <!-- Start Social Buttons -->
    <div class="social">
        <ul>
          <li>
            <a class="facebook-hover" href="https://www.facebook.com/Team5012Gryffingear" target="_blank" title="Facebook | Team 5012 Gryffingear">Facebook</a>
          </li>
          <li>
            <a class="google-hover" href="https://plus.google.com/u/0/+Gryffingear5012" target="_blank" title="Google+ | Team 5012 Gryffingear">Google+</a>
          </li>
          <li>
            <a class="instagram-hover" href="http://instagram.com/gryffingear5012" target="_blank" title="Instagram | Team 5012 Gryffingear">Instagram</a>
          </li>
          <li>
            <a class="twitter-hover" href="https://twitter.com/Gryffingear5012" target="_blank" title="Twitter | Team 5012 Gryffingear">Twitter</a>
          </li>
          <li>
            <a class="youtube-hover" href="https://www.youtube.com/user/Gryffingear5012" target="_blank" title="YouTube | Team 5012 Gryffingear">YouTube</a>
          </li>
          <li>
            <a class="shutterfly-hover" href="https://team5012.shutterfly.com/" target="_blank" title="Shutterfly | Team 5012 Gryffingear">Shutterfly</a>
          </li>
        </ul>
    </div> <!-- End Social Buttons -->

    <a href="http://www.gryffingear.com/" title="gryffingear.com"><img class="logo" src="images/logo.png"></a>

    <!-- Start Navigation Menu -->
    <div class="nav">
      <ul class="nul">
        <a href="http://www.gryffingear.com/"><li>Home</li></a>
        <a href="About.html"><li>Our Team</li></a>
        <a href="Awards.html"><li>Awards</li></a>
        <a href="Events.html"><li>Event Info</li></a>
        <a href="Sponsors.html"><li>Sponsors</li></a>
        <a href="Resources.html"><li>Resources</li></a>
        <a href="FIRST.html"><li>About FIRST</li></a>
        <a href="ContactUs.html"><li>Contact Us</li></a>
      </ul>
      <div class="mobilenav">&#9776; Menu</div>
    </div>
    <script>
      $('.mobilenav').on('click', function(){
      $('.nul').toggleClass('showing'); 
      });
    </script> <!-- End Navigation Menu -->
  </div> <!-- End Header -->

  <!-- Start Website Content -->
  <div class="content">

    <!-- Start Wrapper -->
    <div class="wrapper">
      <center>
        <h2>Thanks!</h2>
        <p class="links">If you made it here, it means we've gotten your request. We will contact you as soon as possible.</p><br>
        <a href="#" onclick='redirectToHomePage();' title="Home Page">Home Page</a>
      </center>
    </div> <!-- End Wrapper -->

    <!-- Start Home Page Redirect Script -->
    <script>
      redirectToHomePage = function() {
        window.location.href = "http://" + window.location.hostname;
      }
    </script><!-- End Home Page Redirect Script -->
  </div> <!-- End Website Content -->

  <!-- Start Footer -->
  <div class="footer">
    <div class="wrapper">
      <p>&#169;2014 Team 5012 Gryffingear | Designed by: <a href="https://github.com/nats-ohchewy/Gryffingear-Website-2" target="_blank" title="View Website Code">Leslie Ochoa</a><a href="Sitemap.html" style="float: right;" title="Sitemap | Gryffingear Team 5012">Sitemap</a></p>
    </div>
  	<a href="#" class="go-top"><img src="images/backtotop.png"></a>

    <!-- Start Back to Top JavaScript -->
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	  <script>
		  $(document).ready(function() {
			 // Show or hide the sticky footer button
			 $(window).scroll(function() {
				  if ($(this).scrollTop() > 200) {
					 $('.go-top').fadeIn(200);
				  } else {
					 $('.go-top').fadeOut(200);
				  }
			 });
			
			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();
				
				$('html, body').animate({scrollTop: 0}, 300);
			})
		});
	  </script> <!-- End Back to Top JavaScript -->
  </div> <!-- End Footer -->
</body>
</html>
