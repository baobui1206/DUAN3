<?php
include "../model/cart.php";
include "../global.php";

session_start();
$index = $_POST['index'];
$sl = $_POST['sl'];
$_SESSION['mycart'][$index][4] = $sl;

viewcart($_SESSION['mycart']);

?>
