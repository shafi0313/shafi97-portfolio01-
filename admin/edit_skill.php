<?php
    if(isset($_GET['p_id'])){
        $the_post_id =  $_GET['p_id'];
    }

    $result_id = mysqli_query($cont, "SELECT * FROM skill WHERE id_skill = $the_post_id");
    while($show = mysqli_fetch_array($result_id)){
        $id_skill       = $show['id_skill'];
        $title_skill    = $show['title_skill'];
        $level_skill    = $show['level_skill'];
    }

    if(isset($_POST['update_post'])){
        $title_skill    = v($_POST['title_skill']);
        $level_skill    = v($_POST['level_skill']);

        $query  = "UPDATE skill SET ";
        $query .= "title_skill      = '{$title_skill}', "; 
        $query .= "level_skill       = '{$level_skill}' ";
        $query .= "WHERE id_skill   = '{$the_post_id}' ";
        
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
                <label for="">Title</label>
                <input value="<?php echo $title_skill;?>"  class="form-control" type="text" name="title_skill" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Work</label>
                <input value="<?php echo $level_skill;?>"  class="form-control" type="text" name="level_skill" placeholder="Enter Name">
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