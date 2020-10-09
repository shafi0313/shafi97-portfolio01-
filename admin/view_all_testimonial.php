<?php
include 'delete_model.php';
?>
<table id="table_id" class="table table-light table-hover table-bordered">
    <thead class="text-center">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Comment</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">

        <?php
        if (isset($_GET['p_id'])) {
            $the_post_id =  $_GET['p_id'];
        }

        $query = "SELECT * FROM testimonial";
        $select_testimonial = mysqli_query($cont, $query);

        while ($show = mysqli_fetch_array($select_testimonial)) {
            $id_testimonial      = $show['id_testimonial'];
            $name_testimonial    = $show['name_testimonial'];
            $text_testimonial    = $show['text_testimonial'];
            $image_testimonial   = $show['image_testimonial'];
        ?>
            <tr>
                <td><?php echo $id_testimonial; ?></td>
                <td><?php echo $name_testimonial; ?></td>
                <td><?php echo $text_testimonial; ?></td>
                <td><img src="../img/testimonial/<?php echo $image_testimonial; ?>" alt="" height="50" width="100"></td>
                <td><?php echo "<a class='btn btn-warning' href='post_testimonial.php?source=edit_testimonial&p_id={$id_testimonial}'>Edit</a>"; ?> || <?php echo "<a class='btn btn-danger delete_link' rel='$id_testimonial' href='javascript:void(0)'>Delete</a>"; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM testimonial WHERE id_testimonial = {$the_post_id} ";
    $delete_query = mysqli_query($cont, $query);
    header("Location: post_testimonial.php");
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
            var delete_url = "post_testimonial.php?delete=" + id + " ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#exampleModalCenter").modal('show');
        });
    });
</script>