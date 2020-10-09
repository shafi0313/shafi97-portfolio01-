<?php

    if(isset($_GET['p_id'])){
    $the_post_id =  $_GET['p_id'];
    }

    $result_id = mysqli_query($cont, "SELECT * FROM service WHERE id_service = $the_post_id ");

    while($show = mysqli_fetch_array($result_id)){
        $id_service     = $show['id_service'];
        $icon_service   = $show['icon_service'];
        $title_service  = $show['title_service'];
        $text_service   = $show['text_service'];
    }

    if(isset($_POST['update_post'])){
        $icon_service   = v($_POST['icon_service']);
        $title_service  = $_POST['title_service'];
        $text_service   = v($_POST['text_service']); 
        
        move_uploaded_file($article_image_temp, "../image/article_image/$article_image");
        
        $query  = "UPDATE service SET ";
        $query .= "icon_service = '{$icon_service}', "; 
        $query .= "title_service = '{$title_service}', "; 
        $query .= "text_service = '{$text_service}' ";
        
        $update_post = mysqli_query($cont,$query);
    }
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Edit Service</li>
</ol>
<hr>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title_service">Title</label>
                <input value="<?php echo $title_service; ?>" class="form-control" type="text" name="title_service" placeholder="Title">
            </div>  
            <div class="form-group">
                <label for="icon_service">Icon</label>
                <input value="<?php echo $icon_service; ?>"  class="form-control" type="text" name="icon_service" placeholder="Icon">
            </div>   
            <div class="form-group">
                <label for="text_service">Text</label>
                <textarea class="form-control" type="text" name="text_service" id="body" placeholder="Text" cols="30" rows="10"><?php echo $text_service; ?></textarea>
            </div>
            <button class="btn btn-secondary" type="submit" name="update_post">Update Post</button>
        </form>
                