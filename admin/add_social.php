<?php
include '../includes/config.php';
include 'includes/header.php';
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Add Social</li>
</ol>
<hr>


<?php
if (isset($_POST['submit'])) {
    $icon_social    = v($_POST['icon_social']);
    $link_social    = v($_POST['link_social']);

    if (empty($icon_social) || empty($link_social)) {
        echo "All Fild Requard";
    } else {
        $query  = "INSERT INTO social (icon_social, link_social) ";
        $query .= "VALUE ('{$icon_social}', '{$link_social}' ) ";
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
        <label for="">Icon</label>
        <input class="form-control" type="text" name="icon_social" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Link</label>
        <input class="form-control" type="text" name="link_social" placeholder="">
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