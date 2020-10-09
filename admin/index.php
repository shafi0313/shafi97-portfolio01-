<?php

include '../includes/config.php';
include 'includes/header.php';
?>

<!-- Icon Cards-->
<div class="row">
  <div class="col-md-6">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>
        <div class="row">
          <div class="col-xs-8 mr-auto">
            <div>Skills</div>
          </div>
          <div class="col-xs-4 text-right mr-lg-5">
            <?php
            $query = "SELECT * FROM skill";
            $select_all_service = mysqli_query($cont, $query);
            $post_count = mysqli_num_rows($select_all_service);

            echo "<h1 class='card bg-success p-1'>{$post_count}</h1>"
            ?>
          </div>
        </div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="post_skill.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>
        <div class="row">
          <div class="col-xs-8 mr-auto">
            <div>Service</div>
          </div>
          <div class="col-xs-4 text-right mr-lg-5">
            <?php
            $query = "SELECT * FROM service";
            $select_all_service = mysqli_query($cont, $query);
            $post_count = mysqli_num_rows($select_all_service);

            echo "<h1 class='card bg-success p-1'>{$post_count}</h1>"
            ?>
          </div>
        </div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="post_service.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-md-6">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>
        <div class="row">
          <div class="col-xs-8 mr-auto">
            <div>Counter</div>
          </div>
          <div class="col-xs-4 text-right mr-lg-5">
            <?php
            $query = "SELECT * FROM counter";
            $select_all_service = mysqli_query($cont, $query);
            $post_count = mysqli_num_rows($select_all_service);

            echo "<h1 class='card bg-success p-1'>{$post_count}</h1>"
            ?>
          </div>
        </div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="post_counter.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>
        <div class="row">
          <div class="col-xs-8 mr-auto">
            <div>Portfolio</div>
          </div>
          <div class="col-xs-4 text-right mr-lg-5">
            <?php
            $query = "SELECT * FROM portfolio";
            $select_all_service = mysqli_query($cont, $query);
            $post_count = mysqli_num_rows($select_all_service);

            echo "<h1 class='card bg-success p-1'>{$post_count}</h1>"
            ?>
          </div>
        </div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="post_portfolio.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-md-6">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>
        <div class="row">
          <div class="col-xs-8 mr-auto">
            <div>Testimonial</div>
          </div>
          <div class="col-xs-4 text-right mr-lg-5">
            <?php
            $query = "SELECT * FROM testimonial";
            $select_all_service = mysqli_query($cont, $query);
            $post_count = mysqli_num_rows($select_all_service);

            echo "<h1 class='card bg-success p-1'>{$post_count}</h1>"
            ?>
          </div>
        </div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="post_testimonial.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>
        <div class="row">
          <div class="col-xs-8 mr-auto">
            <div>Social</div>
          </div>
          <div class="col-xs-4 text-right mr-lg-5">
            <?php
            $query = "SELECT * FROM social";
            $select_all_service = mysqli_query($cont, $query);
            $post_count = mysqli_num_rows($select_all_service);

            echo "<h1 class='card bg-success p-1'>{$post_count}</h1>"
            ?>
          </div>
        </div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="post_social.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
<?php
include 'includes/footer.php';
?>