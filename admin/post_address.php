<?php

include 'includes/header.php';
include '../includes/config.php';
?>

<h3 class="p-2">All Address</h3>

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
    case 'add_address';
        include 'add_address.php';
        break;

    case 'edit_address';
        include 'edit_address.php';
        break;

    default:
        include 'view_all_address.php';
        break;
}
?>

<?php
include 'includes/footer.php';
?>