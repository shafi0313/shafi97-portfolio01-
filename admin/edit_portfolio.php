<?php
    if(isset($_GET['p_id'])){
        $the_post_id =  $_GET['p_id'];
    }

    $result_id = mysqli_query($cont, "SELECT * FROM portfolio WHERE id_portfolio = $the_post_id");
    while($show = mysqli_fetch_array($result_id)){
        $id_portfolio       = $show['id_portfolio'];
        $title_portfolio    = $show['title_portfolio'];
        $work_portfolio     = $show['work_portfolio'];
        $link_portfolio     = $show['link_portfolio'];
        $date_portfolio     = date('d/m/y');
        $image_portfolio    = $show['image_portfolio'];   
    }

    if(isset($_POST['update_post'])){
        $title_portfolio        = v($_POST['title_portfolio']);
        $work_portfolio         = v($_POST['work_portfolio']); 
        $link_portfolio         = v($_POST['link_portfolio']); 
        $date_portfolio         = v($_POST['date_portfolio']);                
        $image_portfolio        = $_FILES['image']['name'];
        $image_portfolio_temp   = $_FILES['image']['tmp_name'];  

        move_uploaded_file($image_portfolio_temp, "../img/portfolio/$image_portfolio");
        
        $query  = "UPDATE portfolio SET ";
        $query .= "title_portfolio      = '{$title_portfolio}', "; 
        $query .= "work_portfolio       = '{$work_portfolio}', "; 
        $query .= "link_portfolio       = '{$link_portfolio}', "; 
        $query .= "date_portfolio       = '{$date_portfolio}', "; 
        $query .= "image_portfolio      = '{$image_portfolio}' "; 
        $query .= "WHERE id_portfolio   = '{$the_post_id}' ";
        
        $update_post = mysqli_query($cont,$query);
    }
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb bg-success">
    <li class="breadcrumb-item text-primary">Edit Intro</li>
</ol>
<hr>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input value="<?php echo $title_portfolio;?>"  class="form-control" type="text" name="title_portfolio" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Work</label>
                <input value="<?php echo $work_portfolio;?>"  class="form-control" type="text" name="work_portfolio" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Web Link</label>
                <input value="<?php echo $link_portfolio;?>"  class="form-control" type="text" name="link_portfolio" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Date</label>
                <input value="<?php echo $date_portfolio;?>"  class="form-control" type="date" name="date_portfolio" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Image Size: 960 * 600 px</label><br>                   
                <input type="file" name="image">                        
                <img src="../img/portfolio/<?php echo $image_portfolio;?>" height="80" width="100" alt="">
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