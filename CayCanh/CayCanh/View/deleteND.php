<?php
    include_once("Controller/cNguoiDung.php");
    $p = new controlNguoiDung();
    $mand = $_REQUEST["id"];
    $sp = $p->deleteNguoiDung($mand);
    if($sp){
        echo "<script>alert('Xóa thành công')</script>";
        header("refresh:0.5; url=admin.php?type=nguoidung");
    }else{
        echo "<script>alert('Xóa thất bại!')</script>";
        header("refresh:0.5; url=admin.php?type=nguoidung");   
    }
?>
