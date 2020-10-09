<?php

include 'includes/header.php';
include '../includes/config.php';
?>
<h3 class="p-2">All Testimonoial</h3>

<?php
if (isset($_GET['p_id'])) {
    $the_post_id = $_GET['p_id'];
}
?>


<?php
if (isset($_GET['source'])) {
    $source = $_GET['source'];
} else {
    $source = '';
}

switch ($source) {
    case 'add_testimonial';
        include 'add_testimonial.php';
        break;

    case 'edit_testimonial';
        include 'edit_testimonial.php';
        break;

    default:
        include 'view_all_testimonial.php';
        break;
}
?>

<?php
include 'includes/footer.php';
?>