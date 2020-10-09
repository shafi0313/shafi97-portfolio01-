<?php
include 'includes/header.php';
include '../includes/config.php';
?>


<h3 class="p-2">All Skills</h3>

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
    case 'add_skill';
        include 'add_skill.php';
        break;

    case 'edit_skill';
        include 'edit_skill.php';
        break;

    default:
        include 'view_all_skill.php';
        break;
}
?>

<?php
include 'includes/footer.php';
?>