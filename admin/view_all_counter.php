<?php

include 'delete_model.php';
?>
<table id="table_id" class="text-center table table-light table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Icon</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php

        $query = "SELECT * FROM counter";
        $select_service = mysqli_query($cont, $query);

        while ($show = mysqli_fetch_array($select_service)) {
            $id_counter             = $show['id_counter'];
            $icon_counter           = $show['icon_counter'];
            $count_counter          = $show['count_counter'];
            $title_counter          = $show['title_counter'];
        ?>

            <tr>
                <td><?php echo $id_counter; ?></td>
                <td><?php echo $title_counter; ?></td>
                <td><i class="<?php echo $icon_counter; ?>"></i></td>

                <td><?php echo "<a class='btn btn-warning' href='post_counter.php?source=edit_counter&p_id={$id_counter}'>Edit</a>"; ?></td>
                <td><?php echo "<a class='btn btn-danger delete_link' rel='$id_counter' href='javascript:void(0)'>Delete</a>"; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM counter WHERE id_counter = {$the_post_id} ";
    $delete_query = mysqli_query($cont, $query);
    header("Location: post_counter.php");
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
            var delete_url = "post_counter.php?delete=" + id + " ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#exampleModalCenter").modal('show');
        });
    });
</script>