<?php
include '../includes/config.php';
include 'includes/header.php';
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Add Service</li>
</ol>
<hr>

<?php
if (isset($_POST['submit'])) {
    $icon_service   = v($_POST['icon_service']);
    $title_service  = v($_POST['title_service']);
    $text_service   = v($_POST['text_service']);
    $date_service   = date("d.m.y");

    if (empty($icon_service) || empty($title_service) || empty($text_service)) {
        echo "All Fild Requard";
    } else {
        $query = "INSERT INTO service (icon_service, title_service, text_service, date_service) ";
        $query .= "VALUE ('{$icon_service}', '{$title_service}', '{$text_service}',now()) ";
        $create_service = mysqli_query($cont, $query);

        if ($create_service) {
            echo "<div class='btn btn-primary btn-block'>Data Inserted</div>";
        }

        if (!$create_service) {
            die('QUERY FAILDE ' . mysqli_error($cont));
        }
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="title_service" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="">Icon (Fontawesome Class)</label>
        <input class="form-control" type="text" name="icon_service" placeholder="fa fa-facebook">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <textarea class="form-control" type="text" name="text_service" id="body" placeholder="Text" cols="30" rows="7"></textarea>
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