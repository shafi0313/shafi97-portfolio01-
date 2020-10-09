<?php
include '../includes/config.php';
include 'includes/header.php';
?>
<?php
$result_id = mysqli_query($cont, "SELECT * FROM about WHERE id_about = id_about");

while ($show = mysqli_fetch_array($result_id)) {
    $id_about       = $show['id_about'];
    $name_about     = $show['name_about'];
    $profile_about  = $show['profile_about'];
    $email_about    = $show['email_about'];
    $phone_about    = $show['phone_about'];
    $text_about     = $show['text_about'];
    $image_about    = $show['image_about'];
}

if (isset($_POST['update_post'])) {
    $name_about         = $_POST['name_about'];
    $profile_about      = $_POST['profile_about'];
    $email_about        = $_POST['email_about'];
    $phone_about        = $_POST['phone_about'];
    $image_about        = $_FILES['image']['name'];
    $image_about_temp   = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_about_temp, "../img/about/$image_about");

    $query  = "UPDATE about SET ";
    $query .= "name_about       = '{$name_about}', ";
    $query .= "profile_about    = '{$profile_about}', ";
    $query .= "email_about      = '{$email_about}', ";
    $query .= "phone_about      = '{$phone_about}', ";
    $query .= "text_about       = '{$text_about}' ";
    $query .= "WHERE id_about   = id_about ";

    $update_post = mysqli_query($cont, $query);
}
?>


<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Edit About</li>
</ol>
<hr>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Name</label>
        <input value="<?php echo $name_about; ?>" class="form-control" type="text" name="name_about" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="">Profile</label>
        <input value="<?php echo $profile_about; ?>" class="form-control" type="text" name="profile_about" placeholder="Enter Profile">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input value="<?php echo $email_about; ?>" class="form-control" type="text" name="email_about" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input value="<?php echo $phone_about; ?>" class="form-control" type="text" name="phone_about" placeholder="Enter Phone">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <textarea class="form-control" type="text" name="text_about" id="body" placeholder="About" cols="30" rows="7"><?php echo $text_about; ?></textarea>
    </div>

    <!--  <div class="form-group">
                <label for="date">Date*</label>
                <input class="form-control" type="date" name="date" placeholder="Enter Date Name" style="max-width: 180px">
            </div>           -->
    <div class="form-group">
        <label for="">Image Size: 400px * 400px</label><br>
        <input type="file" name="image">
        <img src="../img/about/<?php echo $image_about; ?>" width="100" alt="">
    </div>
    <button class="btn btn-secondary" type="submit" name="update_post">Update Post</button>
</form>

<?php
include 'includes/footer.php';
?>