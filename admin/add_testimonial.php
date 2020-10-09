<?php
include '../includes/config.php';
include 'includes/header.php';
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Add Testimonial</li>
</ol>
<hr>

<?php
if (isset($_POST['submit'])) {
    $name_testimonial        = v($_POST['name_testimonial']);
    $text_testimonial        = v($_POST['text_testimonial']);
    $image_testimonial       = $_FILES['image']['name'];
    $image_testimonial_temp  = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_testimonial_temp, "../img/portfolio/$image_testimonial");

    if (empty($name_testimonial) || empty($text_testimonial) || empty($image_testimonial)) {
        echo "All Fild Requard";
    } else {
        $query = "INSERT INTO testimonial (name_testimonial, text_testimonial, image_testimonial) ";
        $query .= "VALUE ('{$name_testimonial}','{$text_testimonial}','{$image_testimonial}' ) ";
        $create_testimonial = mysqli_query($cont, $query);

        if ($create_testimonial) {
            echo "<div class='btn btn-primary btn-block'>Data Inserted</div>";
        }

        if (!$create_testimonial) {
            die('QUERY FAILDE ' . mysqli_error($cont));
        }
    }
}
?>


<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Name of Client</label>
        <input class="form-control" type="text" name="name_testimonial" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Comment</label>
        <textarea class="form-control" name="text_testimonial" cols="30" rows="7"></textarea>

    </div>
    <div class="form-group">
        <label for="">Image Size: 150 * 150 px</label><br>
        <label for="">image</label>
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