<?php

include 'delete_model.php';
?>
<table id="table_id" class="text-center table table-light table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Text</th>
            <th>Icon</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php

        $query = "SELECT * FROM address";
        $select_service = mysqli_query($cont, $query);

        while ($show = mysqli_fetch_array($select_service)) {
            $id_address         = $show['id_address'];
            $text_address       = $show['text_address'];
            $font_icon_address  = $show['font_icon_address'];
        ?>

            <tr>
                <td><?php echo $id_address; ?></td>
                <td><?php echo $text_address; ?></td>
                <td><i class="<?php echo $font_icon_address; ?>"></i></td>

                <td><?php echo "<a class='btn btn-warning' href='post_address.php?source=edit_address&p_id={$id_address}'>Edit</a>"; ?></td>
                <td><?php echo "<a class='btn btn-danger delete_link' rel='$id_address' href='javascript:void(0)'>Delete</a>"; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM address WHERE id_address = {$the_post_id} ";
    $delete_query = mysqli_query($cont, $query);
    header("Location: post_address.php");
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
            var delete_url = "post_address.php?delete=" + id + " ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#exampleModalCenter").modal('show');
        });
    });
</script>