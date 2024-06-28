<?php
    include_once("Controller/cSanPham.php");
    $p = new controlSanPham();
    $maSP = $_REQUEST["id"];
    $sp = $p->deleteSanPham($maSP);
    if($sp){
        echo "<script>alert('Xóa thành công')</script>";
        header("refresh:0.5; url=admin.php");
    }else{
        echo "<script>alert('Xóa thất bại!')</script>";
        header("refresh:0.5; url=admin.php");   
    }
?>

