<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Social networking for pets" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title> Photo Album | My Photo Gallery </title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    	<link rel="stylesheet" href="css/font-awesome.min.css" />
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-register.html"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="petlist.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
              </li>
              <li class="dropdown">
                <a href="newfeed.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
              </li>
              <li class="dropdown">
                <a href="pet_timeline.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
              </li>
              <li class="dropdown"><a href="contact.html">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="images/ownerpic1.jpg" alt="" class="img-responsive profile-photo" />
                  <h3>Nujal Raya</h3>
                  <p class="text-muted">Works at Kullabs.com</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="petlist.html" class="active">My Pets</a></li>
                  <li><a href="pet_timeline-about.html">About</a></li>
                </ul>
                <ul class="follow-me list-inline">
                 <li><a href ="addpet.html"><button class="btn-primary">Add Pets</button></a></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/ownerpic1.jpg" alt="" class="img-responsive profile-photo" />
              <h4>Nujal Raya</h4>
              <p class="text-muted">Works at Kullabs.com</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
              <li><a href="petlist.html" class="active">My Pets</a></li>
                  <li><a href="pet_timeline-about.html">About</a></li>
                </ul>
                <ul class="follow-me list-inline">
                 <li><a href ="addpet.html"><button class="btn-primary">Add Pets</button></a></li>
                </ul>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

            <div class="friend-list">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/dogcover.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/dog3.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">Dog</a>
                          <h5><a href="newsfeed.html" class="profile-link">Jimmy the Superdog</a></h5>
                          <p>Owner: Nujal Raya</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>

             <h1> <p> ----------------------- </p> </h1>
             <br><br><br><br><br><br><br><br><br><br>


            <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href=""><img src="images/logo-black.png" alt="" class="footer-logo" /></a>
              <ul class="list-inline social-icons">
                <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
             <div class="col-md-2 col-sm-2">
              <h6>About</h6>
              <ul class="footer-links">
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms</a></li>
                <li><a href="">Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h6>Contact Us</h6>
                <ul class="contact">
                  <li><i class="icon ion-ios-telephone-outline"></i>984469187</li>
                  <li><i class="icon ion-ios-email-outline"></i>manish.dangi@deerwalk.edu.np</li>
                  <li><i class="icon ion-ios-location-outline"></i>Goushala, Kathmandu</li>
                </ul> 
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>Pet Profiler© 2016. All rights reserved</p>
      </div>
    </footer>
    
  
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
