<?php
include '../includes/config.php';
include 'includes/header.php';
?>
<?php
$result_id = mysqli_query($cont, "SELECT * FROM intro WHERE id_intro = id_intro");

while ($show = mysqli_fetch_array($result_id)) {
    $id_intro     = $show['id_intro'];
    $name_intro   = $show['name_intro'];
    $skill_intro  = $show['skill_intro'];
}

if (isset($_POST['update_post'])) {
    $name_intro   = $_POST['name_intro'];
    $skill_intro  = $_POST['skill_intro'];

    $query  = "UPDATE intro SET ";
    $query .= "name_intro       = '{$name_intro}', ";
    $query .= "skill_intro      = '{$skill_intro}' ";
    $query .= "WHERE id_intro   = id_intro ";

    $update_post = mysqli_query($cont, $query);
}
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Edit intro</li>
</ol>
<hr>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Name</label>
        <input value="<?php echo $name_intro; ?>" class="form-control" type="text" name="name_intro" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="">Skill</label>
        <input value="<?php echo $skill_intro; ?>" class="form-control" type="text" name="skill_intro" placeholder="Enter Profile">
    </div>
    <button class="btn btn-secondary" type="submit" name="update_post">Update Post</button>
</form>

<?php
include 'includes/footer.php';
?>