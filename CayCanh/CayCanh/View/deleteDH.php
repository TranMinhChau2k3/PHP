<?php
    include_once("Controller/cDonHang.php");
    $p = new controlDonHang();
    $madh = $_REQUEST["id"];
    $sp = $p->deleteDonHang($madh);
    if($sp){
        echo "<script>alert('Xóa thành công')</script>";
        header("refresh:0.5; url=admin.php?type=DonHang");
    }else{
        echo "<script>alert('Xóa thất bại!')</script>";
        header("refresh:0.5; url=admin.php?type=DonHang");   
    }
?>
