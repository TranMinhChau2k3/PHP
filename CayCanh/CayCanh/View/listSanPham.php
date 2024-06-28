<?php
    include_once("Controller/cSanPham.php");
    $p = new controlSanPham();
    if(isset($_REQUEST["th"])){
        $kq = $p->getAllSanPhamByType($_REQUEST["th"]);
    }elseif(isset($_REQUEST["btnTimKiem"])){
        $kq = $p->getAllSanPhamByName($_REQUEST["txtTuKhoa"]);
    }else{
        $kq = $p->getAllSanPham();
    }
    
    if($kq){
        echo'<table class="list_sp">';
        echo"<tr>";
        $dem=0;
        while($r = mysqli_fetch_assoc($kq)){
            echo'<td class="sp">';
            echo"<img src='image/sanpham/".$r["HinhAnh"]."' alt='' width='100%' /> <br>";
            echo $r["TenSanPham"]."<br>";
            echo'<div class="gia">';
            if($r["GiaBan"]==null){
                echo number_format($r['GiaGoc'],0,",",".")." VNĐ";
            }else{
                echo number_format($r['GiaBan'],0,",",".")." VNĐ<br><s>".number_format($r['GiaGoc'],0,",",".")." VNĐ"."</s>";
            }
            echo'</div>';
            echo"</td>";
            $dem++;
            if($dem%5==0){
                echo"</tr><tr> ";
            }
        }
        echo'</tr>';
        echo'</table>';
    }
    
?>


        
