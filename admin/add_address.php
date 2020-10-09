<?php
include '../includes/config.php';
include 'includes/header.php';
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Add Address</li>
</ol>
<hr>


<?php
if (isset($_POST['submit'])) {
    $text_address       = v($_POST['text_address']);
    $font_icon_address  = v($_POST['font_icon_address']);

    if (empty($text_address) || empty($font_icon_address)) {
        echo "All Fild Requard";
    } else {
        $query = "INSERT INTO address (text_address, font_icon_address ) ";
        $query .= "VALUE ('{$text_address}', '{$font_icon_address}' ) ";
        $create_address = mysqli_query($cont, $query);

        if ($create_address) {
            echo "<div class='btn btn-primary btn-block'>Data Inserted</div>";
        }

        if (!$create_address) {
            die('QUERY FAILDE' . mysqli_error($cont));
        }
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Text</label>
        <input class="form-control" type="text" name="text_address" placeholder="Address Or Phone etc.">
    </div>
    <div class="form-group">
        <label for="">Icon</label>
        <input class="form-control" type="text" name="font_icon_address" placeholder="">
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