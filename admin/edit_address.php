<?php

    if(isset($_GET['p_id'])){
    $the_post_id =  $_GET['p_id'];
    }

    $result_id = mysqli_query($cont, "SELECT * FROM address WHERE id_address = $the_post_id ");

    while($show = mysqli_fetch_array($result_id)){
        $id_address         = $show['id_address'];
        $text_address       = $show['text_address'];
        $font_icon_address  = $show['font_icon_address']; 
    }

    if(isset($_POST['update_post'])){        
        $text_address       = v($_POST['text_address']);
        $font_icon_address  = v($_POST['font_icon_address']);
       
        
        $query  = "UPDATE address SET ";
        $query .= "text_address     = '{$text_address}', "; 
        $query .= "font_icon_address    = '{$font_icon_address}' ";         
        $query .= "WHERE id_address = '{$the_post_id}' ";
        
        $update_post = mysqli_query($cont,$query);
    }
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Edit address</li>
</ol>
<hr>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="text_address">Text</label>
                <input value="<?php echo $text_address; ?>"  class="form-control" type="text" name="text_address" placeholder="Icon">
            </div>
            <div class="form-group">
                <label for="font_icon_address">Icon</label>
                <input value="<?php echo $font_icon_address; ?>" class="form-control" type="text" name="font_icon_address" placeholder="Title">
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
                