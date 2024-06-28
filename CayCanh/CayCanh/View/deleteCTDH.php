<?php
    include_once("Controller/cCTDH.php");
    $p = new controlChiTietDonHang();
    $mactdh = $_REQUEST["id"];
    $sp = $p->deleteChiTietDonHang($mactdh);
    if($sp){
        echo "<script>alert('Xóa thành công')</script>";
        header("refresh:0.5; url=admin.php?type=chitietdonhang");
    }else{
        echo "<script>alert('Xóa thất bại!')</script>";
        header("refresh:0.5; url=admin.php?type=chitietdonhang");   
    }
?>
