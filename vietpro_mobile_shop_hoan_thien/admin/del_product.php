<?php
session_start();
define('SECURITY', true);
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
    $prd_id=$_GET['prd_id'];
    include_once('../config/connect.php');
    $sql = "DELETE FROM product WHERE prd_id=$prd_id";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=product');
}
?>