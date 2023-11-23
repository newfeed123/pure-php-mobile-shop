<?php
if(!defined('SECURITY')){
    die('Bạn không có quyền truy cập file này!');
}
$connect = mysqli_connect('localhost','root','','phpk179');
if($connect){
    mysqli_query($connect, "SET NAMES 'utf8'");
    //print_r('kết nối csdl thành công');
}else{
    die('Kết nối thất bại');
}
?>