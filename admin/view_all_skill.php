<?php

include 'delete_model.php';
?>
<table id="table_id" class="table table-light table-hover table-bordered">
    <thead class="text-center">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">

        <?php
        if (isset($_GET['p_id'])) {
            $the_post_id =  $_GET['p_id'];
        }

        $query = "SELECT * FROM skill";
        $select_skill = mysqli_query($cont, $query);

        while ($show = mysqli_fetch_array($select_skill)) {
            $id_skill       = $show['id_skill'];
            $title_skill    = $show['title_skill'];
            $level_skill    = $show['level_skill'];
        ?>

            <tr>
                <td><?php echo $id_skill; ?></td>
                <td><?php echo $title_skill; ?></td>
                <td><?php echo $level_skill; ?>%
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $level_skill; ?>%" aria-valuenow="10" aria-valuemin="<?php echo $level_skill; ?>" aria-valuemax="100"></div>
                    </div>
                </td>
                <td><?php echo "<a class='btn btn-warning' href='post_skill.php?source=edit_skill&p_id={$id_skill}'>Edit</a>"; ?> || <?php echo "<a class='btn btn-danger delete_link' rel='$id_skill' href='javascript:void(0)'>Delete</a>"; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM skill WHERE id_skill = {$the_post_id} ";
    $delete_query = mysqli_query($cont, $query);
    header("Location: post_skill.php");
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
            var delete_url = "post_skill.php?delete=" + id + " ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#exampleModalCenter").modal('show');
        });
    });
</script>