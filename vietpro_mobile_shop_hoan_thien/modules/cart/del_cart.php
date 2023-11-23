<?php // xóa sản phẩm trong cart
    session_start();
    $prd_id = $_GET['prd_id'];
    unset($_SESSION['cart'][$prd_id]);
    if(count($_SESSION['cart']) == 0){
        session_destroy();
    }
    header('location: ../../index.php?page_layout=cart'); // sau khi xóa xong thì cần chuyển hướng
?>