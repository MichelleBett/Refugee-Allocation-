
<?php
include "includes/dbconnect.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RIZIKI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">









  <!-- Favicons -->
  <link href="assets/img/" rel="icon">
  <link href="assets/img/" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
 
 


</head>

<body>


<!--Header -->
<?php include('includes/header.php');?>
<!-- /Header--> 





  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">

    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Lets Find You<br>a Home</h2>
          <p data-aos="fade-up" data-aos-delay="100"></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="donorpage.php" class="btn-book-a-table">Get Involved</a>
            <a href="https://youtu.be/N6LaqNtslwo" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/f9eff774333ac76a36b92dbaaa82990c--refugee-camps-beautiful-children.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="50">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/camp.jpg) ;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                RIZIKI is a national organization dedicated in improving the lives of refugees by helping them secure a
                home. This serves as starting point for building a better future for refugees and also helps protect their rights to 
                good shelter.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> We help Look for a home for the displaced.</li>
                <li><i class="bi bi-check2-all"></i> Offer a platform for donation.</li>
                <li><i class="bi bi-check2-all"></i> Education</li>
              </ul>
              <p>

              </p>
              <a class="btn-book-a-table" href="#about">Read More</a>
              <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
              <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->





    <!-- ======= Testimonials Section ======= -->
    <!--Testimonial -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
    <h2>Testimonials</h2>
    <p>What Are They <span>Saying About Us</span></p>
    </div>

    
    <div class="swiper-wrapper">
      <div id="testimonial-slider">
                                     <?php 
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial from tbltestimonial where tbltestimonial.status=:tid";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


             <div class="testimonial-m">
              <div class="testimonial-content">
             <div class="testimonial-heading">
              <h5>Anonymous</h5>
              
              <p><?php echo htmlentities($result->Testimonial);?></p>
              
              </div>
               </div>
                 </div>
           <?php }} ?>
        
       
  
                                    </div>
                                   </div>
            </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 


    <!-- ======= Donor Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Donors</h2>
          <p>Check <span>Our Donors</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/unicef-1-1.jpg"><img src="assets/img/unicef-1-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/unicef-1-1.jpg"><img src="assets/img/refugeesathome.jfif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/unicef-1-1.jpg"><img src="assets/img/unhcr.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/unicef-1-1.jpg"><img src="assets/img/whofallback.webp" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/unicef-1-1.jpg"><img src="assets/img/car_mofa.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/unicef-1-1.jpg"><img src="assets/img/Untitled-41.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/unicef-1-1.jpg"><img src="assets/img/download (1).jfif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/unicef-1-1.jpg"><img src="assets/img/hias.png" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Donor Section -->

   

    

  </main><!-- End #main -->



<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>