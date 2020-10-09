<?php

    if(isset($_GET['p_id'])){
    $the_post_id =  $_GET['p_id'];
    }

    $result_id = mysqli_query($cont, "SELECT * FROM social WHERE id_social = $the_post_id ");

    while($show = mysqli_fetch_array($result_id)){
        $id_social      = $show['id_social'];
        $icon_social    = $show['icon_social'];
        $link_social    = $show['icon_social']; 
    }

    if(isset($_POST['update_post'])){        
        $icon_social    = v($_POST['icon_social']);
        $link_social    = v($_POST['link_social']);
       
        
        $query  = "UPDATE social SET ";
        $query .= "icon_social     = '{$icon_social}', "; 
        $query .= "link_social    = '{$link_social}' ";         
        $query .= "WHERE id_social = '{$the_post_id}' ";
        
        $update_post = mysqli_query($cont,$query);
    }
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Edit Social</li>
</ol>
<hr>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="icon_social">Icon</label>
                <input value="<?php echo $icon_social; ?>"  class="form-control" type="text" name="icon_social" placeholder="Icon">
            </div>
            <div class="form-group">
                <label for="icon_social">Link</label>
                <input value="<?php echo $link_social; ?>" class="form-control" type="text" name="link_social" placeholder="Title">
            </div>            
            <button class="btn btn-secondary" type="submit" name="update_post">Update Post</button>
        </form>

<?php 
    function v($post){
        $post = trim($post);
        $post = stripcslashes($post);
        $post = htmlspecialchars($post);
        
        return $post;
    }
 ?>
                