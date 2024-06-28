<?php
    include_once("Controller/cSanPham.php");
    $p = new controlSanPham();
    $maSP = $_REQUEST["id"];
    $sp = $p->getOneSanPham($maSP);
    if($sp){
        while($r = mysqli_fetch_assoc($sp)){
            $tensp = $r['TenSanPham'];
            $giaban = $r['GiaBan'];
            $giagoc = $r['GiaGoc'];
            $hinhanh = $r['HinhAnh'];
            $mota = $r['MoTa'];
            $loaisanpham = $r['MaLoai'];
        }
    }else{
        echo "<script>alert('Mã Sản Phẩm Không Tồn Tại !!!')</script>";
        header("refresh:0; url='admin.php'");
    }
?>
<h2>Cập nhật sản phẩm</h2>
<form action="#" method='post' enctype="multipart/form-data" width='100%' class = 'tblProd '>
    <table>
        <tr>
            <td>Tên Sản Phẩm</td>
            <td>
                <input type="text" name="TenSP" required value="<?php if(isset($tensp)) echo $tensp; ?>">
            </td>
            <td rowspan = "5" style="text-align:center">
                <img src="image/sanpham/<?php if(isset($hinhanh)) echo $hinhanh ?>" width="150px">
            </td>
        </tr>
        <tr>
            <td>Giá bán</td>
            <td>
                <input type="number" name="txtGiaBan" required value="<?php if(isset($giaban)) echo $giaban; ?>">
            </td>
        </tr>
        <tr>
            <td>Giá Gốc</td>
            <td>
                <input type="number" name="txtGiaGoc" required value="<?php if(isset($giagoc)) echo $giagoc; ?>">
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
                <input type="text" name="txtMoTa" required value="<?php if(isset($mota)) echo $mota; ?>">
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
                            if($r['MaLoai']==$loaisanpham){
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
                <input type="submit" name="btnCapNhat" value="Cập nhật">
                <input type="reset" value="Hủy">
            </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_REQUEST['btnCapNhat'])){
        $kq = $p->updateSanPham($maSP, $_REQUEST['TenSP'], $_REQUEST['txtGiaBan'], $_REQUEST['txtGiaGoc'], $_FILES['txtHinhAnh'], $hinhanh, $_REQUEST['txtMoTa'], $_REQUEST['cboLoaiSanPham']);        
        if($kq){
            echo "<script>alert('Upload thành công')</script>";
        }else{
            echo "<script>alert('Upload thất bại')</script>";
        }
    }
?>