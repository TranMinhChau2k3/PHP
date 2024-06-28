<?php
    include_once('Controller/cLoaiSanPham.php');
    $p = new controlLoaiSanPham();
    $maloai = $_REQUEST["id"];
    $th = $p -> getOneLoaiSanPham($maloai);
    if($th){
        while($r = mysqli_fetch_assoc($th)){
            $tenloai = $r['TenLoai'];
        }
    }else{
        echo "<script>alert('Mã Loại sản phẩm Không Tồn Tại !!!')</script>";
        header("refresh:0; url='admin.php'");
    }
?>

<h2>Cập nhật loại sản phẩm</h2>
<form action="#" method="post" enctype="multipart/form-data" width='100px' class='tblCate'>
    <table>
        <tr>
            <td>Tên Loại</td>
            <td><input type="text" name='TenLoai' required value="<?php if(isset($tenloai)) echo $tenloai;?>"></td>
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
        $kq = $p->updateLoaiSanPham($maloai, $_REQUEST['TenLoai']);        
        if($kq){
            echo "<script>alert('Update thành công')</script>";
        }else{
            echo "<script>alert('Update thất bại')</script>";
        }
    }
?>