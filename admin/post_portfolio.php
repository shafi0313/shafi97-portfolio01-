<?php
include 'includes/header.php';
include '../includes/config.php';
?>

<h3 class="p-2">All Portfolio</h3>

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
    case 'add_portfolio';
        include 'add_portfolio.php';
        break;

    case 'edit_portfolio';
        include 'edit_portfolio.php';
        break;

    default:
        include 'view_all_portfolio.php';
        break;
}
?>

<?php
include 'includes/footer.php';
?>