<?php
    include_once("Controller/cLoaiSanPham.php");
    $p = new controlLoaiSanPham();
    $kq = $p -> getAllLoaiSanPham();
    echo"<div id = 'menu'>";
    if(!$kq){
        echo "No data!";
    }else{
        echo "<ul>";
        while($r = mysqli_fetch_assoc($kq)){
            echo "<li><a href='?th=".$r['MaLoai']."'>".$r['TenLoai']."</a></li>";
        }
        echo "</ul>";
        echo "</div>";
    }
?>