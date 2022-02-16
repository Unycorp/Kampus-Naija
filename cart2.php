<?php
session_start();

if(isset($_POST['cid'])){
$id = $_POST['cid'];

$array = array();

$array = array_push($array, $id);

$_SESSION['cart'] = $array;

echo $array;
}
?>