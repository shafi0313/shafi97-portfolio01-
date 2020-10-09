<?php
    if(isset($_GET['p_id'])){
        $the_post_id =  $_GET['p_id'];
    }

    $result_id = mysqli_query($cont, "SELECT * FROM testimonial WHERE id_testimonial = $the_post_id");
    while($show = mysqli_fetch_array($result_id)){
        $id_testimonial      = $show['id_testimonial'];
        $name_testimonial    = $show['name_testimonial'];
        $text_testimonial    = $show['text_testimonial'];
        $image_testimonial   = $show['image_testimonial'];
    }

    if(isset($_POST['update_post'])){    
        $name_testimonial        = v($_POST['name_testimonial']);
        $text_testimonial        = v($_POST['text_testimonial']);            
        $image_testimonial       = $_FILES['image']['name'];
        $image_testimonial_temp  = $_FILES['image']['tmp_name'];  

        move_uploaded_file($image_testimonial_temp, "../img/testimonial/$image_testimonial");    
        
        $query  = "UPDATE testimonial SET ";
        $query .= "name_testimonial       = '{$name_testimonial}', "; 
        $query .= "text_testimonial       = '{$text_testimonial}', ";       
        $query .= "image_testimonial      = '{$image_testimonial}' "; 
        $query .= "WHERE id_testimonial   = '{$the_post_id}' ";
        
        $update_post = mysqli_query($cont,$query);
    }
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Edit Intro</li>
</ol>
<hr>
         <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name of Client</label>
                <input class="form-control" type="text" value="<?php echo $name_testimonial; ?>" name="name_testimonial" placeholder="">
            </div>                    
            <div class="form-group">
                <label for="">Comment</label>
                <input class="form-control" type="text" name="text_testimonial" value="<?php echo $text_testimonial; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="">image Sizw: 150 * 150 px</label><br>
                <input type="file" name="image">
                <img src="../img/testimonial/<?php echo $image_testimonial; ?>    " alt="">
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