<?php 
@include('db.php');
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$artist = _GET['artist'];
if (isset($_POST['submit'])) {
    $selected_val = $_POST['select-artist'];
    json_encode($selected_val);
}else {
    echo json_encode($database);
}
?>