<?php
include 'includes/config.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Md. Shafiul Hasan</title>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="">
  <meta name="author" content="Md. Shafiul Hasan">

  <!--Favicon-->
  <link href="img/favicon.png" rel="icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="lib/fontawesome/css/brands.css" rel="stylesheet">
  <link href="lib/fontawesome/css/solid.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#home">SHAFI</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          <!-- <li class="nav-item">
                        <a class="nav-link js-scroll" href="#blog">Blog</a>
                    </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Intro Star -->
  <div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <?php
          $result = mysqli_query($cont, "SELECT * FROM intro");
          while ($show = mysqli_fetch_array($result)) {
            $id_intro     = $show['id_intro'];
            $name_intro   = $show['name_intro'];
            $skill_intro  = $show['skill_intro'];
          ?>
            <h1 class="intro-title mb-4">I am <?php echo $name_intro; ?></h1>
            <p class="intro-subtitle"><span class="text-slider-items"><?php echo $skill_intro; ?></span><strong class="text-slider"></strong></p>
            <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
  <!-- Intro End -->

  <!-- About Start -->
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row about_text">
              <div class="col-md-6 wow slideInLeft" data-wow-delay="0.2s" data-wow-duration="2s">
                <div class="row">
                  <div class="col-sm-6 col-md-5 wow slideInLeft" data-wow-delay="0.3s" data-wow-duration="2s">
                    <?php
                    $result = mysqli_query($cont, "SELECT * FROM about");
                    while ($show = mysqli_fetch_array($result)) {
                      $id_about       = $show['id_about'];
                      $name_about     = $show['name_about'];
                      $profile_about  = $show['profile_about'];
                      $email_about    = $show['email_about'];
                      $phone_about    = $show['phone_about'];
                      $text_about     = $show['text_about'];
                      $image_about    = $show['image_about'];
                    ?>
                      <div class="about-img">
                        <img src="img/about/<?php echo $image_about; ?>" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span><?php echo $name_about; ?></span></p>
                      <p><span class="title-s">Profile: </span> <span><?php echo $profile_about; ?></span></p>
                      <p><span class="title-s">Email: </span> <span><?php echo $email_about; ?></span></p>
                      <p><span class="title-s">Phone: </span> <span><?php echo $phone_about; ?></span></p>
                    </div>
                  </div>
                </div>
                <p><?php echo $text_about; ?></p>
              </div>
            <?php } ?>
            <div class="col-md-6">
              <div class="skill-mf">
                <p class="title-s wow slideInRight" data-wow-delay="0.2s" data-wow-duration="2s">Skills</p>
                <?php
                $result = mysqli_query($cont, "SELECT * FROM skill");
                while ($show = mysqli_fetch_array($result)) {
                  $id_skill = $show['id_skill'];
                  $title_skill = $show['title_skill'];
                  $level_skill = $show['level_skill'];
                ?>
                  <span><?php echo $title_skill; ?></span> <span class="pull-right"><?php echo $level_skill; ?>% </span>
                  <div class="progress wow slideInRight" data-wow-delay="0.3s" data-wow-duration="2s">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $level_skill; ?>%" aria-valuenow="10" aria-valuemin="<?php echo $level_skill; ?>" aria-valuemax="100"></div>
                  </div>
                <?php } ?>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Start -->

  <!-- Services Area Starts -->
  <div id="service" class="services-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
            <p class="line-one"></p>
            <h2>What I Offer</h2>
            <p class="line-one"></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="services-carousel" class="owl-carousel owl-theme">
          <?php
          $result = mysqli_query($cont, "SELECT * FROM service ORDER BY id_service ASC");
          while ($show = mysqli_fetch_array($result)) {
            $id_service     = $show['id_service'];
            $icon_service   = $show['icon_service'];
            $title_service  = $show['title_service'];
            $text_service   = $show['text_service'];
          ?>
            <div class="single-services text-center item">
              <div class="services-icon">
                <i class="<?php echo $icon_service; ?>"></i>
              </div>
              <div class="services-content">
                <h3><?php echo $title_service; ?></h3>
                <p><?php echo $text_service; ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Services Area Ends -->

  <!-- Counter -->
  <div class="section-counter paralax-mf-work bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <?php
        $result = mysqli_query($cont, "SELECT * FROM counter ORDER BY id_counter ASC");
        while ($show = mysqli_fetch_array($result)) {
          $id_counter             = $show['id_counter'];
          $icon_counter           = $show['icon_counter'];
          $count_counter          = $show['count_counter'];
          $title_counter          = $show['title_counter'];
        ?>
          <div class="col-sm-4 col-lg-4 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="2s">
            <div class="counter-box">
              <div class="counter-ico">
                <span class="ico-circle"><i class="<?php echo $icon_counter; ?>"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter"><?php echo $count_counter; ?></p>
                <span class="counter-text"><?php echo $title_counter; ?></span>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>

  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="2s">
              Portfolio
            </h3>
            <!--
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
-->
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php
        $result = mysqli_query($cont, "SELECT * FROM portfolio ORDER BY id_portfolio DESC");
        while ($show = mysqli_fetch_array($result)) {
          $title_portfolio    = $show['title_portfolio'];
          $work_portfolio     = $show['work_portfolio'];
          $link_portfolio     = $show['link_portfolio'];
          $date_portfolio     = date('d M. Y');
          $image_portfolio    = $show['image_portfolio'];
        ?>
          <div class="col-md-4">
            <div class="work-box">
              <a href="img/portfolio/<?php echo $image_portfolio; ?>" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="img/portfolio/<?php echo $image_portfolio; ?>" alt="" class="img-fluid">
              </a>
            </div>
            <div class="work-content">
              <div class="row">
                <div class="col-sm-12">
                  <a href="<?php echo $link_portfolio; ?>" target="_blank">
                    <h2 class="w-title"><?php echo $title_portfolio; ?></h2>
                  </a>
                  <div class="w-more">
                    <span class="w-ctegory"><?php echo $work_portfolio; ?></span> / <span class="w-date"><?php echo $date_portfolio; ?></span>
                  </div>
                </div>
              </div>
            </div>

          </div>
      </div>
    <?php } ?>
    </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->


  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf-client bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <?php
            $result = mysqli_query($cont, "SELECT * FROM testimonial");
            while ($show = mysqli_fetch_array($result)) {
              $name_testimonial    = $show['name_testimonial'];
              $text_testimonial    = $show['text_testimonial'];
              $image_testimonial   = $show['image_testimonial'];
            ?>
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="img/testimonial/<?php echo $image_testimonial; ?>" alt="" class="rounded-circle b-shadow-a">
                  <span class="author"><?php echo $name_testimonial; ?></span>
                </div>
                <div class="content-test">
                  <p class="description lead"><?php echo $text_testimonial; ?>
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Blog Star /-->
  <!--
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Blog
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="img/post-1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Travel</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
              <p class="card-description">
                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                a pellentesque nec,
                egestas non nisi.
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">Morgan Freeman</span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 10 min
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="img/post-2.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Web Design</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
              <p class="card-description">
                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                a pellentesque nec,
                egestas non nisi.
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">Morgan Freeman</span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 10 min
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="img/post-3.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Web Design</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
              <p class="card-description">
                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                a pellentesque nec,
                egestas non nisi.
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">Morgan Freeman</span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 10 min
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
  <!--/ Section Blog End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/cotact-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message Us
                    </h5>
                  </div>
                  <div>
                    <?php

                    if (isset($_POST['submit'])) {
                      $to      = "msh.shafiul@gmail.com";
                      $subject = wordwrap($_POST['subject'], 70);
                      $message = $_POST['message'];
                      $header  = "From: " . $_POST['email'];

                      mail($to, $subject, $message, $header);
                    }
                    ?>
                    <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="2s" name="submit">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">

                    <!-- <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                      expedita aperiam aliquid at.
                      Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                      mollitia inventore?
                    </p> -->

                    <ul class="list-ico">
                      <?php
                      $result = mysqli_query($cont, "SELECT * FROM address");
                      while ($show = mysqli_fetch_array($result)) {
                        $text_address       = $show['text_address'];
                        $font_icon_address  = $show['font_icon_address'];
                      ?>
                        <li><i class="<?php echo $font_icon_address; ?> wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s"></i> <?php echo $text_address; ?></li>
                      <?php } ?>

                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <?php
                      $result = mysqli_query($cont, "SELECT * FROM social");
                      while ($show = mysqli_fetch_array($result)) {
                        $icon_social   = $show['icon_social'];
                        $link_social       = $show['link_social'];
                      ?>
                        <li><a href="<?php echo $link_social; ?>"><span class="ico-circle wow fadeIn" data-wow-delay="0.3s" data-wow-duration="3s"><i class="<?php echo $icon_social; ?>"></i></span></a></li>
                      <?php } ?>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>SHAFI</strong>. All Rights Reserved</p>
              <div class="credits">
                Designed by <a href="#">SHAFI</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  <script src="lib/wow/wow.min.js"></script>

  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <script src="lib/mixitup/dist/mixitup.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
    var wow = new WOW({
      boxClass: 'wow', // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset: 0, // distance to the element when triggering the animation (default is 0)
      mobile: true, // trigger animations on mobile devices (default is true)
      live: true, // act on asynchronously loaded content (default is true)
      callback: function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
      },
      scrollContainer: null // optional scroll container selector, otherwise use window
    });
    wow.init();
  </script>

  <?php
  function v($post)
  {
    $post = trim($post);
    $post = stripcslashes($post);
    $post = htmlspecialchars($post);

    return $post;
  }
  ?>
</body>

</html>