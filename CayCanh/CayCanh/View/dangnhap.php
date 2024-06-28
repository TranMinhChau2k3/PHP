<form name="frmDangNhap" method="POST" action="#">
    <table>
        <tr>
            <td>Tên Đăng Nhập</td>
            <td><input type="text" name="txtTDN" id="" required></td>
        </tr>
        <tr>
            <td>Mật Khẩu</td>
            <td><input type="password" name="txtMK" id="" required></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btnDN" value="Đăng nhập">
                <input type="reset" value="Nhập lại">
            </td>
        </tr>
    </table>
</form>
<?php
if(isset($_REQUEST["btnDN"])){
    include_once("Controller/cNguoiDung.php");
    $p=new controlNguoiDung();
    $kq=$p->get01NguoiDung($_REQUEST["txtTDN"], $_REQUEST["txtMK"]);
}
?>