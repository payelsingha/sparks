
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>test</title>
  <!-- <meta content="" name="description">
  <meta content="" name="keywords"> -->

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Payel</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <!-- <li><a href="#cta">User</a></li> -->
          <a data-toggle="modal" data-target="#myModal" class="get-started-btn scrollto">Pay Now</a>
          
           
      </nav><!-- .nav-menu -->

      <a href="#cta" class="get-started-btn scrollto">User</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div class="d-lg-flex">
            <a data-toggle="collapse" data-target="#mydemo" class="btn-get-started scrollto">Get Started</a>
           
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->



    

    

   

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div id="mydemo" class="container-fluid table-responsive collapse">
                                       <p class="text-light">Customer List:</p>
                                    <!-- <form action="<?php //base_url();?>welcome/get_landing_data" method="post"> -->
                                    <table class="table table-striped table-bordered table-hover table-sm shadow rounded">
                                    <thead class="thead thead-sm" style="background-image: linear-gradient(-1deg, #020024 0%, #090979 35%, #00d4ff 100%); color:seashell;">
                                        <tr>
                                        
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Ammount</th>
                                         <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="rounded shadow-lg" style="background-color: #ECFDFF;">
                                        
                                    <?php
                                    
                                    foreach($show_name as $row)
                                    {
                                ?>
                                    <tr style="font-size: 80%;">
                                        
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->ammount; ?></td>
                                        <td><?php echo $row->transaction_time; ?></td>
                                    </tr>
                                    <?php
                                    }
                            
                                   
                                ?>
                                    </tbody>
                                    </table>
                                    <!-- </form> -->
                                </div>


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" data-toggle="collapse" data-target="#demo" href="">User Detail</a>
          </div>
        </div>

         
 <div id="demo" class="container-fluid table-responsive collapse">
                                       <p class="text-light">Customer List:</p>
                                    <!-- <form action="<?php //base_url();?>welcome/get_landing_data" method="post"> -->
                                    <table class="table table-striped table-bordered table-hover table-sm shadow rounded">
                                    <thead class="thead thead-sm" style="background-image: linear-gradient(-1deg, #020024 0%, #090979 35%, #00d4ff 100%); color:seashell;">
                                        <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">balance</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody class="rounded shadow-lg" style="background-color: #ECFDFF;">
                                        
                                    <?php
                                    
                                    foreach($show_datas as $row)
                                    {
                                ?>
                                    <tr style="font-size: 80%;">
                                        <td><?php echo $row->id; ?></td>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->balance; ?></td>
                                    </tr>
                                    <?php
                                    }
                            
                                   
                                ?>
                                    </tbody>
                                    </table>
                                    <!-- </form> -->
                                </div>


                                
  

      </div>
    </section><!-- End Cta Section -->

   
 <!-- The Modal -->
                                  <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Make Your Patment</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                         
                                             <form action="<?php base_url()?>welcome/put_data" method="post">
                                                <div class="form-group">
                                                  <label for="email">Name:</label>
                                                  <select class="form-control" name="name" id="business_bid" required>
                                                         <option selected required>select name</option>
                                                    <?php
                                                        foreach($show_datas as $row)
                                                        {
                                                        echo '<option value="'.$row->name.'">'.$row->name.'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                  <label for="email">Email:</label>
                                                  <select class="form-control" name="email" id="business_bid" required>
                                                         <option selected required>select name</option>
                                                    <?php
                                                        foreach($show_datas as $row)
                                                        {
                                                        echo '<option value="'.$row->email.'">'.$row->email.'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                  <label for="email">Ammount:</label>
                                                  <input type="text" class="form-control" name="ammount" placeholder="enter ammount" require>
                                                </div>
                                                <button type="submit" class="btn btn-info">Submit</button>
                                             </form>
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <!-- <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div> -->
                                        
                                      </div>
                                    </div>
                                  </div>
   
   

  

  <!-- ======= Footer ======= -->
  <footer id="footer">

  

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Payel</h3>
           
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
           
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
           
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>