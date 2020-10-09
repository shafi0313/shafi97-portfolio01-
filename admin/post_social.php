<?php
include 'includes/header.php';
include '../includes/config.php';
?>

<h3 class="p-2">All Social</h3>

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
    case 'add_social';
        include 'add_social.php';
        break;

    case 'edit_social';
        include 'edit_social.php';
        break;

    default:
        include 'view_all_social.php';
        break;
}
?>

<?php
include 'includes/footer.php';
?>