<?php
    if($_SESSION["dn"]>1){
        echo "<script>alert('Bạn Không có quyền truy cập')</script>";
        header("refresh:0;url='admin.php'");
    }
    include("Controller/cNguoiDung.php");
    $p = new controlNguoiDung();
    $con = $p -> getAllNguoiDung();
    if(!$con){
        echo "error";
    }else{
        echo "<table border='1' width='100%'>";
        echo "<tr>
                <td colspan='8' align='center'><a href='?action=insert'>Thêm người dùng</a></td>
            </tr>";
        echo "
                <tr>
                    <th>Mã Người dùng</th>
                    <th>Tên Người Dùng</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Thao tác</th>
                </tr>
        ";
        while($r = mysqli_fetch_assoc($con)){
            echo "
                <tr>
                    <td>".$r["MaNguoiDung"]."</td>
                    <td>".$r["TenNguoiDung"]."</td>
                    <td>".$r["Email"]."</td>
                    <td>".$r["MaVaiTro"]."</td>
                    <td width='100px'><a href='?action=update&id=".$r["MaNguoiDung"]."'>Sửa</a> | <a href='?action=delete&id=".$r["MaNguoiDung"]."'>Xóa</a></td>
                </tr>
            ";
        }
        echo "</table>";
    }

?>


