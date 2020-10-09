<?php

include 'delete_model.php';
?>
<table id="table_id" class="table table-light table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Text</th>
            <th>Icon</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $result = mysqli_query($cont, "SELECT * FROM service order by id_service DESC");

        while ($show = mysqli_fetch_array($result)) {
            $id_service     = $show['id_service'];
            $icon_service   = $show['icon_service'];
            $title_service  = $show['title_service'];
            $text_service   = $show['text_service'];
            $date_service   = date('d-m-y');
        ?>

            <tr>
                <td><?php echo $id_service; ?></td>
                <td><?php echo $title_service; ?></td>
                <td><?php echo $text_service; ?></td>
                <td><i class="<?php echo $icon_service; ?>"></i></td>
                <td><?php echo $date_service; ?></td>

                <td><?php echo "<a class='btn btn-warning' href='post_service.php?source=edit_service&p_id={$id_service}'>Edit</a>"; ?> || <?php echo "<a rel='$id_service' href='javascript:void(0)' class='delete_link btn btn-danger'>Delete</a>"; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM service WHERE id_service = {$the_post_id} ";
    $delete_query = mysqli_query($cont, $query);
    header("Location: post_service.php");
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
            var delete_url = "post_service.php?delete=" + id + " ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#exampleModalCenter").modal('show');
        });
    });
</script>