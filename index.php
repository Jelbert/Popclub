<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <style>
.phone {
  background: url("assets/graphics/iphone4.gif") no-repeat;
  position: relative;
  display: block;
  width: 280px;
  height: 600px;
  overflow: hidden;
  margin: 0px auto;
}
.screens1 {
  position: absolute;
  margin-left: 120%;
  -webkit-animation:slidein 16s ;
  animation:slidein 16s ;
}
#img1:nth-child(1) {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  z-index: -1;
  overflow: hidden;
  animation-iteration-count: infinite;
}
#img1:nth-child(2) {
  -webkit-animation-delay: 5s;
  animation-delay: 5s;
  z-index: -1;
  animation-iteration-count: infinite;
}
#img1:nth-child(3) {
  -webkit-animation-delay: 10s;
  animation-delay: 10s;
  z-index: -1;
  animation-iteration-count: infinite;
}
#img1:nth-child(4) {
  -webkit-animation-delay: 15s;
  animation-delay: 15s;
  z-index: -1;
  animation-iteration-count: infinite;
}
@-webkit-keyframes slidein {
  0% {
    margin-left: 100%;
  }
  20% {
    margin-left: 0.001%;
  }
  100% {
    margin-left: 0%;
  }
}
@keyframes slidein {
  0% {
    margin-left: 100%;
  }
  20% {
    margin-left: 0.001%;
  }
  100% {
    margin-left: 0%;
  }
}

.container1 {
 position: relative; 
  width: 220px;
  height: 100%;
  padding-top: 83px;
  padding-left: 22px;
  padding-right: 24px;
}
</style>
    <title>Taters Popclub</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Taters Popclub</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#faq">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
                            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    

    <header>
        <div class="header-content" ">
            <div class="header-content-inner">
                
                <div class="row"> 
                    <div class="container image-container ">
                        <img src="assets/graphics/header.png" class="img-responsive" alt="taters">
                   </div>
                    
                    <div class="col-lg-2">
                    <a href="https://itunes.apple.com/ph/app/taters-popclub/id1075802545?mt=8&ign-mpt=uo%3D4" class="portfolio-box ">
                        <img src="assets/graphics/itunes.png" class="img-responsive" alt="" >
                    </a>
                </div>
                    <div class="col-lg-2">
                    <a href="https://play.google.com/store/apps/details?id=com.appsolutely.taterspopclub" class="portfolio-box">
                        <img src="assets/graphics/google play.png" class="img-responsive" alt="">
                    </a>                    
                </div>
                </div> 
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 embed-responsive embed-responsive-16by9 loop">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XYQ8aVV141U?rel=0&autoplay=1&controls=0&showinfo=0&loop=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                
                <div class="">
                    <div class="hug">
                          <div class="phone">
                            <div class="container1 loop">
                                <img id="img1" class="screens1" src="assets/graphics/Home Page.jpg" alt="third" style="width: 238px; height: 450px;">
                                <img id="img1" class="screens1" src="assets/graphics/Popclub Raffle Poster.jpg" alt="fourth" style="   width: 238px; height: 450px;">
                                <img id="img1" class="screens1" src="assets/graphics/3.1.1 Superpop.jpg" alt="first" style="width: 238px; height: 430px;" >
                                <img id="img1" class="screens1" src="assets/graphics/C&C.jpg" alt="second" style="width: 238px; height: 450px;">
                            </div>
                          </div>
                        </div>
                </div>
            </div>
                </div>
        </div>
    </header>

    <section class="bg-primary" id="faq" style="background: #ffffff">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading" style="color: #cc0000">FAQ</h2>
                    <hr>
                    <hr class="light">
                    <h3 style="color: #cc0000">What is the Popclub App?</h3>
                    <p class="text-faded" style="color: #000">The Popclub App is Taters at your fingertips! Earn points, get exclusive discounts and more when you download the app today.</p>
                    <h3 style="color: #cc0000">Why should I download it?</h3>
                    <p class="text-faded" style="color: #000">Downloading the Popclub App and registering automatically earns you 50 Popclub Points that you can use to purchase your favorite Taters treats! Best of all, the Popclub App is 100% FREE.</p>
                    <h3 style="color: #cc0000">How do I register?</h3>
                    <p class="text-faded" style="color: #000">Registering is easy! Once you download the app from the App Store or from Google Play, just click the register tab and fill out the necessary details. Once you confirm your account via email, you automatically get 50 FREE Popclub Points!</p>
                    <h3 style="color: #cc0000">How do I earn points?</h3>
                    <p class="text-faded" style="color: #000">Every P100 spent in any Taters branch earns you 1 Popclub Points. Each Popclub Point is equivalent to P1 and may be used to purchase any of our great products.</p>
                    <h3 style="color: #cc0000">Can I still use my old Popclub card?</h3>
                    <p class="text-faded" style="color: #000">You can exchange your old Popclub Card for a new Popclub Card, just give us your old one and we will replace it with the all-new Popclub Card free of charge! Alternatively, you may download the Popclub App for a better overall experience!</p>                   
                </div>
            </div>
        </div>
    </section>

    <section id="features" style="background-color: #cc0000; color: #ffffff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Features</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="assets/graphics/points.png">
                        <h3>Earn Points!</h3>
                        <p class="text-muted" style="color: #ffffff">Every P100 purchases earn one Popclub points.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="assets/graphics/promos.png">
                        <h3>Exclusive Promos!</h3>
                        <p class="text-muted" style="color: #ffffff">Get exclusive deals only for Popclub members.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="assets/graphics/discounts.png">
                        <h3>Great Discounts</h3>
                        <p class="text-muted" style="color: #ffffff">Get to know the latest Taters promo.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="assets/graphics/taterseverywhere.png">
                        <h3>Taters Everywhere!</h3>
                        <p class="text-muted" style="color: #ffffff">Get all things Taters anytime, anywhere.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="no-padding" id="portfolio">
        
    </section>

    <section id="contact" style="background: #000;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center" style="color: #ffffff">
                    <h2 class="section-heading">We want to hear from you!</h2>
                    <hr class="primary">
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center " style="color: #ffffff">
                    <i class="fa fa-facebook-official fa-3x wow bounceIn"></i>
                    <p><a href="https://www.facebook.com/taters.snackleague">taters.snackleague</a></p>
                </div>
                <div class="col-lg-4 text-center" style="color: #ffffff">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s" ></i>
                    <p><a href="mailto:popclub@tatersgroup.com">popclub@tatersgroup.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
   
    <script>
    $('.ring-preview').children('img').each(function(i) { 
    $(this).rotate(ring.stones[i].stone_rotation);
    });
    </script>

</body>

</html>
