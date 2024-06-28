<?php
    if (!isset($_SESSION["dn"]) || $_SESSION["dn"] != 3) {
        echo "<script>alert('Bạn không có quyền truy cập');</script>";
        header("refresh:0;url='index.php'");
        exit(); 
    }
    include("Controller/cDonHang.php");
    $p = new controlDonHang();
    $con = $p -> getAllDonHang();
    if(!$con){
        echo "no DaTa";
    }else{
        echo "<table border='1' width='100%'>";
        echo "<tr>
                <td colspan='7' align='center'><a href='?action=insert'>Thêm Đơn hàng</a></td>
            </tr>";
        echo "
                <tr>
                    <th>Mã Đơn hàng</th>
                    <th>Mã người dùng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
        ";
        while($r = mysqli_fetch_assoc($con)){
            echo "
                <tr>
                    <td>".$r["MaDonHang"]."</td>
                    <td>".$r["MaNguoiDung"]."</td>
                    <td>".$r["NgayDatHang"]."</td>
                    <td>".$r["TrangThai"]."</td>
                    <td><a href='?action=update&id=".$r["MaDonHang"]."'>Sửa</a> | <a href='?action=delete&id=".$r["MaDonHang"]."'>Xóa</a> </td>
                </tr>
            ";
        }
        echo "</table>";
    }

?>
<a href=""></a>

