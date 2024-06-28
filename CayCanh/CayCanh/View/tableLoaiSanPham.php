<?php

    if (!isset($_SESSION["dn"]) || $_SESSION["dn"] != 2) {
        echo "<script>alert('Bạn không có quyền truy cập');</script>";
        header("refresh:0;url='index.php'");
        exit(); 
    }
    include("Controller/cLoaiSanPham.php");
    $p = new controlLoaiSanPham();
    $con = $p -> getAllLoaiSanPham();
    if(!$con){
        echo "no DaTa";
    }else{
        echo "<table border='1' width='100%'>";
        echo "<tr>
                <td colspan='7' align='center'><a href='?action=insert'>Thêm Loại sản phẩm</a></td>
            </tr>";
        echo "
                <tr>
                    <th>Mã Loại</th>
                    <th>Tên Loại Sản Phẩm</th>
                    <th>Thao tác</th>
                </tr>
        ";
        while($r = mysqli_fetch_assoc($con)){
            echo "
                <tr>
                    <td>".$r["MaLoai"]."</td>
                    <td>".$r["TenLoai"]."</td>
                    <td><a href='?action=update&id=".$r["MaLoai"]."'>Sửa</a> | <a href='?action=delete&id=".$r["MaLoai"]."'>Xóa</a> </td>
                </tr>
            ";
        }
        echo "</table>";
    }

?>
<a href=""></a>

