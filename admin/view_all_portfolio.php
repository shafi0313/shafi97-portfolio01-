<?php

include 'delete_model.php';
?>
<table id="table_id" class="table table-light table-hover table-bordered">
    <thead class="text-center">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Work</th>
            <th>Web Link</th>
            <th>Date</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">

        <?php
        if (isset($_GET['p_id'])) {
            $the_post_id =  $_GET['p_id'];
        }

        $query = "SELECT * FROM portfolio";
        $select_service = mysqli_query($cont, $query);

        while ($show = mysqli_fetch_array($select_service)) {
            $id_portfolio       = $show['id_portfolio'];
            $title_portfolio    = $show['title_portfolio'];
            $work_portfolio     = $show['work_portfolio'];
            $link_portfolio     = $show['link_portfolio'];
            $date_portfolio     = date('d/m/y');
            $image_portfolio    = $show['image_portfolio'];
        ?>

            <tr>
                <td><?php echo $id_portfolio; ?></td>
                <td><?php echo $title_portfolio; ?></td>
                <td><?php echo $work_portfolio; ?></td>
                <td><?php echo $link_portfolio; ?></td>
                <td><?php echo $date_portfolio; ?></td>
                <td><img src="../img/portfolio/<?php echo $image_portfolio; ?>" alt="" height="50" width="100"></td>
                <td><?php echo "<a class='btn btn-warning' href='post_portfolio.php?source=edit_portfolio&p_id={$id_portfolio}'>Edit</a>"; ?> || <?php echo "<a class='btn btn-danger delete_link' rel='$id_portfolio' href='javascript:void(0)'>Delete</a>"; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM portfolio WHERE id_portfolio = {$the_post_id} ";
    $delete_query = mysqli_query($cont, $query);
    header("Location: post_portfolio.php");
}
?>
</div>
</div>
</div>
</div>

<script>
    $(document).ready(function() {
        $(".delete_link").on('click', function() {
            var id = $(this).attr("rel");
            var delete_url = "post_portfolio.php?delete=" + id + " ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#exampleModalCenter").modal('show');
        });
    });
</script>