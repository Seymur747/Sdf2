<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Essence - Bootstrap 4 Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>

       <?php
              $servername = "localhost";
              $username = "root";
              $password = "123";
              $conn = new mysqli($servername, $username, $password,"sdf2");
            

           
              ?>
  
  <body>
    <!-- Header Section Start -->
    <header id="slider-area">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">          
          <a class="navbar-brand" href="index.html"><span class="lni-bulb"></span>ESSENCE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
             <!-- 
             
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Features</a>
              </li>          -->        

                  <?php 




                    $query="SELECT * from menu ";

                    $row= $conn->query($query);

                      while ( $netice = mysqli_fetch_assoc($row))
                       {
                        
                    echo      $netice['name']."        ";


                     



                      }



                    ?>
         

              
            </ul>              
          </div>
        </div>
      </nav> 

    

    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">      

    
     

          <h2 class="section-title">Our Services</h2>
          <span>Services</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
        </div>
        <div class="row">



              <?php 



              $query2="SELECT * from apps";
              $row2= $conn->query($query2);



 while ( $netice2 = mysqli_fetch_assoc($row2)){
?>
  <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <i class="lni-pencil"></i>
              </div>
              <h4>Content Writing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div> 
          <?
         

 }
               ?>

      




        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Call to Action Start -->
    <section class="call-action section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="cta-trial text-center">
              <h3>Are You Ready To Get Started?</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod<br> Lorem ipsum dolor sit amet, consectetuer</p>
              <a href="#" class="btn btn-common btn-effect">Purchase Now!</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action End -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/wow.js"></script> 
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>
    
  </body>
</html>