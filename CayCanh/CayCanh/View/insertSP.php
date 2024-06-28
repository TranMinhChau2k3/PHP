<h2>Thêm sản phẩm</h2>
<form action="#" method='post' enctype="multipart/form-data" width='100%' class = 'tblProd '>
    <table>
        <tr>
            <td>Tên Sản Phẩm</td>
            <td>
                <input type="text" name="TenSanPham" required>
            </td>
        </tr>
        <tr>
            <td>Giá Bán</td>
            <td>
                <input type="number" name="txtGiaBan" required>
            </td>
        </tr>
        <tr>
            <td>Giá Gốc</td>
            <td>
                <input type="number" name="txtGiaGoc" required>
            </td>
        </tr>
        <tr>
            <td>Ảnh sản phẩm</td>
            <td>
                <input type="file" name="txtHinhAnh">
            </td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td>
                <input type="text" name="txtMoTa" required >
            </td>
        </tr>
        <tr>
            <td>Tên loại sản phẩm</td>
            <td>
                <?php
                    include_once("Controller/cLoaiSanPham.php");
                    $pt = new controlLoaiSanPham();
                    $kq = $pt -> getAllLoaiSanPham();
                    if(!$kq){
                        echo "No data!";
                    }else{
                        echo "<select name='cboLoaiSanPham'>";
                        while($r = mysqli_fetch_assoc($kq)){
                            if($r['TenLoai']==$loaisanpham){
                                echo "<option value=".$r['MaLoai']." selected>".$r['TenLoai']."</option>";
                            }else{
                                echo "<option value=".$r['MaLoai'].">".$r['TenLoai']."</option>";
                            }
                        }
                        echo "</select>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btnThem" value="Thêm sản phẩm">
                <input type="reset" value="Hủy">
            </td>
        </tr>
    </table>
</form>

<?php
    include_once("Controller/cSanPham.php");
    $p = new controlSanPham();
    if(isset($_REQUEST['btnThem'])){
        $kq = $p->insertSanPham($_REQUEST['TenSanPham'], $_REQUEST['txtGiaBan'],$_REQUEST['txtGiaGoc'], $_FILES['txtHinhAnh'], $_REQUEST['txtMoTa'], $_REQUEST['cboLoaiSanPham']);               
        if($kq){
            echo "<script>alert('Thêm SP thành công')</script>";
        }else{
            echo "<script>alert('Thêm SP thất bại')</script>";
        }
    }
?>
