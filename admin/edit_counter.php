<?php

    if(isset($_GET['p_id'])){
    $the_post_id =  $_GET['p_id'];
    }

    $result_id = mysqli_query($cont, "SELECT * FROM counter WHERE id_counter = $the_post_id ");

    while($show = mysqli_fetch_array($result_id)){
        $id_counter     = $show['id_counter'];
        $icon_counter   = $show['icon_counter'];
        $title_counter  = $show['title_counter'];        
        $count_counter  = $show['count_counter'];        
    }

    if(isset($_POST['update_post'])){
        $title_counter          = v($_POST['title_counter']);     
        $icon_counter           = v($_POST['icon_counter']);
        $count_counter          = v($_POST['count_counter']);
       
        
        $query  = "UPDATE counter SET ";
        $query .= "icon_counter     = '{$icon_counter}', "; 
        $query .= "title_counter    = '{$title_counter}', "; 
        $query .= "count_counter    = '{$count_counter}' ";
        $query .= "WHERE id_counter = '{$the_post_id}' ";
        
        $update_post = mysqli_query($cont,$query);
    }
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Edit Counter</li>
</ol>
<hr>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title_counter">Title</label>
                <input value="<?php echo $title_counter; ?>" class="form-control" type="text" name="title_counter" placeholder="Title">
            </div> 
            <div class="form-group">
                <label for="icon_counter">Icon</label>
                <input value="<?php echo $icon_counter; ?>"  class="form-control" type="text" name="icon_counter" placeholder="Icon">
            </div>
            <div class="form-group">
                <label for="title_counter">Count</label>
                <input value="<?php echo $count_counter; ?>" class="form-control" type="number" name="count_counter" style="width: 150px;">
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
                