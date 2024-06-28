<?php
    if (!isset($_SESSION["dn"]) || $_SESSION["dn"] != 3) {
        echo "<script>alert('Bạn không có quyền truy cập');</script>";
        header("refresh:0;url='index.php'");
        exit(); 
    }
    include("Controller/cCTDH.php");
    $p = new controlChiTietDonHang();
    $con = $p -> getAllChiTietDonHang();
    if(!$con){
        echo "no DaTa";
    }else{
        echo "<table border='1' width='100%'>";
        echo "<tr>
                <td colspan='7' align='center'><a href='?action=insert'>Thêm Chi tiết Đơn hàng</a></td>
            </tr>";
        echo "
                <tr>
                    <th>Mã chi tiết</th>
                    <th>Mã đơn hàng</th>
                    <th>Mã sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thao tác</th>
                </tr>
        ";
        while($r = mysqli_fetch_assoc($con)){
            echo "
                <tr>
                    <td>".$r["MaChiTiet"]."</td>
                    <td>".$r["MaDonHang"]."</td>
                    <td>".$r["MaSanPham"]."</td>
                    <td>".$r["SoLuong"]."</td>
                    <td>".$r["DonGia"]."</td>
                    <td><a href='?action=update&id=".$r["MaChiTiet"]."'>Sửa</a> | <a href='?action=delete&id=".$r["MaChiTiet"]."'>Xóa</a> </td>
                </tr>
            ";
        }
        echo "</table>";
    }

?>
<a href=""></a>

