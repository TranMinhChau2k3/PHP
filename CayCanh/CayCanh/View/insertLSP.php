<h2>Thêm Loại Sản phẩm</h2>
<form action="#" method='post' enctype="multipart/form-data" width='100%' class = 'tblCate '>
    <table>
        <tr>
            <td>Tên Loại sản phẩm</td>
            <td>
                <input type="text" name="TenLSP" required>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btnThem" value="Thêm loại sản phẩm">
                <input type="reset" value="Hủy">
            </td>
        </tr>
    </table>
</form>

<?php
    include_once("Controller/cLoaiSanPham.php");
    $p = new controlLoaiSanPham();
    if(isset($_REQUEST['btnThem'])){
        $kq = $p->insertLoaiSanPham($_REQUEST['TenLSP']);        
        if($kq){
            echo "<script>alert('Thêm Loại sản phẩm thành công')</script>";
        }else{
            echo "<script>alert('Thêm Loại sản phẩm thất bại')</script>";
        }
    }
?>