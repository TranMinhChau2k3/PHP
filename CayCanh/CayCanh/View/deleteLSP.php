<?php
    include_once("Controller/cLoaiSanPham.php");
    $p = new controlLoaiSanPham();
    $maloai = $_REQUEST["id"];
    $sp = $p->deleteLoaiSanPham($maloai);
    if($sp){
        echo "<script>alert('Xóa thành công')</script>";
        header("refresh:0.5; url=admin.php?type=loaisanpham");
    }else{
        echo "<script>alert('Xóa thất bại!')</script>";
        header("refresh:0.5; url=admin.php?type=loaisanpham");   
    }
?>
