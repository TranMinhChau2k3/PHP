<?php
    if (!isset($_SESSION["dn"]) || $_SESSION["dn"] != 2) {
        echo "<script>alert('Bạn không có quyền truy cập');</script>";
        header("refresh:0;url='index.php'");
        exit(); 
    }
    include("Controller/cSanPham.php");
    $p = new controlSanPham();
    $con = $p -> getAllSanPham();
    if(!$con){
        echo "error";
    }else{
        echo "<table border='1' width='100%'>";
        echo "<tr>
                <td colspan='8' align='center'><a href='?action=insert'>Thêm sản phẩm</a></td>
            </tr>";
        echo "
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá Bán</th>
                    <th>Giá gốc</th>
                    <th>Hình Ảnh</th>
                    <th>Mô tả</th>
                    <th>Tên Loại SP</th>
                    <th>Thao tác</th>
                </tr>
        ";
        while($r = mysqli_fetch_assoc($con)){
            echo "
                <tr>
                    <td>".$r["MaSanPham"]."</td>
                    <td>".$r["TenSanPham"]."</td>
                    <td width='150px'style=' color:red;'>".number_format($r["GiaBan"],0,',','.')." VNĐ</td>
                    <td width='150px'style=' color:red;'>".number_format($r["GiaGoc"],0,',','.')." VNĐ</td>
                    <td>"."<img src='image/sanpham/".$r["HinhAnh"]."' alt='' width='100px' /> <br>"."</td>
                    <td width='560px'>".$r["MoTa"]."</td>
                    <td>".$r["MaLoai"]."</td>
                    <td width='100px'><a href='?action=update&id=".$r["MaSanPham"]."'>Sửa</a> | <a href='?action=delete&id=".$r["MaSanPham"]."'>Xóa</a></td>
                </tr>
            ";
        }
        echo "</table>";
    }

?>


