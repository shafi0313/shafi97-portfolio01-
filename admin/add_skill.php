<?php
include '../includes/config.php';
include 'includes/header.php';
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Add Skill</li>
</ol>
<hr>

<?php
if (isset($_POST['submit'])) {
    $title_skill    = v($_POST['title_skill']);
    $level_skill    = v($_POST['level_skill']);

    if (empty($title_skill) || empty($level_skill)) {
        echo "<div class='btn btn-primary btn-block'>Data Inserted</div>";
    } else {
        $query  = "INSERT INTO skill (title_skill, level_skill) ";
        $query .= "VALUE ('{$title_skill}', {$level_skill} ) ";

        $create_skill = mysqli_query($cont, $query);

        if ($create_skill) {
            echo "<div class='btn btn-primary btn-block'>Data Inserted</div>";
        }

        if (!$create_skill) {
            die('QUERY FAILDE' . mysqli_error($cont));
        }
    }
}
?>


<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="title_skill" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Level</label>
        <input class="form-control" type="text" name="level_skill" placeholder="">
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