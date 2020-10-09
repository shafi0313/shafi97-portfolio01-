<?php
include 'includes/header.php';
include '../includes/config.php';
?>

<h3 class="p-2">All Service</h3>

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
    case 'add_service';
        include 'add_service.php';
        break;

    case 'edit_service';
        include 'edit_service.php';
        break;

    default:
        include 'view_all_service.php';
        break;
}
?>

<?php
include 'includes/footer.php';
?>