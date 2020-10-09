<?php

include '../includes/config.php';
include 'includes/header.php';
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Add Portfolio</li>
</ol>
<hr>

<?php
if (isset($_POST['submit'])) {
    $title_portfolio        = v($_POST['title_portfolio']);
    $work_portfolio         = v($_POST['work_portfolio']);
    $link_portfolio         = v($_POST['link_portfolio']);
    $date_portfolio         = v($_POST['date_portfolio']);
    $image_portfolio        = $_FILES['image']['name'];
    $image_portfolio_temp   = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_portfolio_temp, "../img/portfolio/$image_portfolio");

    if (empty($title_portfolio) || empty($work_portfolio) || empty($date_portfolio) || empty($image_portfolio)) {
        echo "<div class='btn btn-primary btn-block'>Data Inserted</div>";
    } else {
        $query = "INSERT INTO portfolio (title_portfolio, work_portfolio, date_portfolio, image_portfolio, link_portfolio) ";
        $query .= "VALUE ('{$title_portfolio}','{$work_portfolio}','{$date_portfolio}','{$image_portfolio}',{$link_portfolio}) ";
        $create_counter = mysqli_query($cont, $query);

        if ($create_counter) {
            echo "<div class='btn btn-primary btn-block'>Data Inserted</div>";
        }

        if (!$create_counter) {
            die('QUERY FAILDE' . mysqli_error($cont));
        }
    }
}
?>


<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="title_portfolio" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Work</label>
        <input class="form-control" type="text" name="work_portfolio" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Web Link</label>
        <input class="form-control" type="text" name="link_portfolio" placeholder="">
    </div>
    <div class="form-group">
        <label for="">date</label>
        <input class="form-control" type="date" name="date_portfolio">
    </div>
    <div class="form-group">
        <label for="">Image Size: 960 * 600 px</label><br>
        <input type="file" name="image">
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    <button class="btn btn-danger" type="reset">Reset</button>
</form>
</div>
</div>
</div>
</div>

<?php
function v($post)
{
    $post = trim($post);
    $post = stripcslashes($post);
    $post = htmlspecialchars($post);

    return $post;
}
?>

<?php
include 'includes/footer.php';
?>