<?php
include_once 'FirsApi.php';
$token = '';
$action = '';
if (isset($_POST['token'])) {
    $token = $_POST['token'];
    $action = $_POST['action'];
} else {
    $token = $_GET['token'];
    $action = $_GET['action'];
}

$api = new FirsApi($token, $action);
if($api->checkToken()) {
   echo json_encode($api->returnResponse());
} else {
    echo 'false';
}
