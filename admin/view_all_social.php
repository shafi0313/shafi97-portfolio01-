<?php

include 'delete_model.php';
?>
<table id="table_id" class="text-center table table-light table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Link</th>
            <th>Icon</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php

        $query = "SELECT * FROM social";
        $select_service = mysqli_query($cont, $query);

        while ($show = mysqli_fetch_array($select_service)) {
            $id_social      = $show['id_social'];
            $icon_social    = $show['icon_social'];
            $link_social    = $show['link_social'];
        ?>

            <tr>
                <td><?php echo $id_social; ?></td>
                <td><?php echo $link_social; ?></td>
                <td><span class="ico-circle"><i class="<?php echo $icon_social; ?>"></i></td>

                <td><?php echo "<a class='btn btn-warning' href='post_social.php?source=edit_social&p_id={$id_social}'>Edit</a>"; ?></td>
                <td><?php echo "<a class='btn btn-danger delete_link' rel='$id_social' href='javascript:void(0)'>Delete</a>"; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM social WHERE id_social = {$the_post_id} ";
    $delete_query = mysqli_query($cont, $query);
    header("Location: post_social.php");
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
            var delete_url = "post_social.php?delete=" + id + " ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#exampleModalCenter").modal('show');
        });
    });
</script>