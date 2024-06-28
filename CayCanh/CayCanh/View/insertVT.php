<h2>Thêm Vai Trò</h2>
<form action="#" method='post' enctype="multipart/form-data" width='100%' class = 'tblCate '>
    <table>
        <tr>
            <td>Tên Vai trò</td>
            <td>
                <input type="text" name="TenVT" required>
            </td>
        </tr>
        <tr>
            <td>Mô Tả</td>
            <td>
                <input type="text" name="txtMoTa" required>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btnThem" value="Thêm Vai trò">
                <input type="reset" value="Hủy">
            </td>
        </tr>
    </table>
</form>

<?php
    include_once("Controller/cVaiTro.php");
    $p = new controlVaiTro();
    if(isset($_REQUEST['btnThem'])){
        $kq = $p->insertVaiTro($_REQUEST['TenVT'],$_REQUEST['txtMoTa']);        
        if($kq){
            echo "<script>alert('Thêm Vai Trò thành công')</script>";
        }else{
            echo "<script>alert('Thêm Vai Trò thất bại')</script>";
        }
    }
?>