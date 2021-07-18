<?php


session_start();
session_unset();
session_destroy(); 

$u = $_POST['logout'];
echo json_encode($u);




?>