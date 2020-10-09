<?php

include 'includes/header.php';
include '../includes/config.php';
?>

<h3 class="p-2">All Counter</h3>

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
    case 'add_counter';
        include 'add_counter.php';
        break;

    case 'edit_counter';
        include 'edit_counter.php';
        break;

    default:
        include 'view_all_counter.php';
        break;
}
?>

<?php
include 'includes/footer.php';
?>