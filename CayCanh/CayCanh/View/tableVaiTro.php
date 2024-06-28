<?php
 if($_SESSION["dn"]>1){
    echo "<script>alert('Bạn Không có quyền truy cập')</script>";
    header("refresh:0;url='admin.php'");
}
    include("Controller/cVaiTro.php");
    $p = new controlVaiTro();
    $con = $p -> getAllVaiTro();
    if(!$con){
        echo "error";
    }else{
        echo "<table border='1' width='100%'>";
        echo "<tr>
                <td colspan='8' align='center'><a href='?action=insert'>Thêm Vai Trò</a></td>
            </tr>";
        echo "
                <tr>
                    <th>Mã Vai Trò</th>
                    <th>Tên Vai Trò</th>
                    <th>Mô Tả</th>
                    <th>Thao tác</th>
                </tr>
        ";
        while($r = mysqli_fetch_assoc($con)){
            echo "
                <tr>
                    <td>".$r["MaVaiTro"]."</td>
                    <td>".$r["TenVaiTro"]."</td>
                    <td>".$r["MoTa"]."</td>
                    <td width='100px'><a href='?action=update&id=".$r["MaVaiTro"]."'>Sửa</a> | <a href='?action=delete&id=".$r["MaVaiTro"]."'>Xóa</a></td>
                </tr>
            ";
        }
        echo "</table>";
    }

?>


