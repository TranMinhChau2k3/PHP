<?php
    include_once("Controller/cVaiTro.php");
    $p = new controlVaiTro();
    $mavt = $_REQUEST["id"];
    $sp = $p->deleteVaiTro($mavt);
    if($sp){
        echo "<script>alert('Xóa thành công')</script>";
        header("refresh:0.5; url=admin.php?type=VaiTro");
    }else{
        echo "<script>alert('Xóa thất bại!')</script>";
        header("refresh:0.5; url=admin.php?type=VaiTro");   
    }
?>
