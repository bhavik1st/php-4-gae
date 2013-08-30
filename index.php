<?php 
   include('header.php');
?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/images/clouds.jpg" alt="PHP4GAE">
          <div class="container">
            <div class="carousel-caption">
              <h1>PHP 4 GAE</h1>
              <p>Experimental PHP support in Google Cloud</p>
              <p><a class="btn btn-large btn-primary" href="http://goo.gl/KaBiwy">More Details</a></p>
            </div>
          </div>
        </div>
        <div class="item">
		  <img src="assets/images/four-wheel-driving.jpg" alt="PHP4GAE">
          <div class="container">
            <div class="carousel-caption">
              <h1>Step by Step Guide</h1>
              <p>Article demonstrating use of PHP on Google Cloud</p>
              <p><a class="btn btn-large btn-primary" href="http://goo.gl/Y0dSzP">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/cloudsIreland2.jpg" alt="PHP4GAE">
          <div class="container">
            <div class="carousel-caption">
              <h1>About Me</h1>
              <p>Software Architect with passion for cutting edge technology</p>
              <p><a class="btn btn-large btn-primary" href="http://www.linkedin.com/in/bhavik1st">My Profile</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	  
	  
    </div><!-- /.carousel -->
	
	
<?php 
   include('footer.php');
?>
