<?php
include 'utils.inc.php';
start_page();
session_start();
?>

<?php
$_SESSION['suid'] = session_id();
?>

<?php
end_page();
?>