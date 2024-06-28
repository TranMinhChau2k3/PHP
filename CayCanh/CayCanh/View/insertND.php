<h2>Thêm Người Dùng</h2>
<form action="#" method='post' enctype="multipart/form-data" width='100%' class = 'tblCate '>
    <table>
        <tr>
            <td>Tên Người Dùng</td>
            <td>
                <input type="text" name="TenND" required>
            </td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td>
                <input type="pass" name="txtMK" required>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="txtEmail" required>
            </td>
        </tr>
        <tr>
            <td>Vai Trò</td>
            <td>
                <input type="number" name="txtVaiTro" required>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btnThem" value="Thêm Người Dùng">
                <input type="reset" value="Hủy">
            </td>
        </tr>
    </table>
</form>

<?php
    include_once("Controller/cNguoiDung.php");
    $p = new controlNguoiDung();
    if(isset($_REQUEST['btnThem'])){
        $matkhau = md5($_REQUEST['txtMK']);
        $kq = $p->insertNguoiDung($_REQUEST['TenND'],$matkhau,$_REQUEST['txtEmail'],$_REQUEST['txtVaiTro']);        
        if($kq){
            echo "<script>alert('Thêm Người dùng thành công')</script>";
        }else{
            echo "<script>alert('Thêm người dùng thất bại')</script>";
        }
    }
?>