<?php
$api;
if(isset($_GET['Source'])) {
    $api = $_GET['Source'];
} else {
    $api = 'Lost Connection';
}
echo $api;
?>
