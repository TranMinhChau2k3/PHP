<?php
    include_once('Controller/cNguoiDung.php');
    $p = new controlNguoiDung();
    $mand = $_REQUEST["id"];
    $th = $p -> getOneNguoiDung($mand);
    if($th){
        while($r = mysqli_fetch_assoc($th)){
            $tennd = $r['TenNguoiDung'];
            $email = $r['Email'];
            $vaitro = $r['MaVaiTro'];
            $matkhau = $r['MatKhau'];
        }
    }else{
        echo "<script>alert('Mã Người dùng Không Tồn Tại !!!')</script>";
        header("refresh:0; url='admin.php'");
    }
?>

<h2>Cập nhật Người Dùng</h2>
<form action="#" method="post" enctype="multipart/form-data" width='100px' class='tblCate'>
    <table>
        <tr>
            <td>Tên Người Dùng</td>
            <td><input type="text" name='TenND' required value="<?php if(isset($tennd)) echo $tennd;?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name='txtEmail' required value="<?php if(isset($email)) echo $email;?>"></td>
        </tr>
        <tr>
            <td>Vai Trò</td>
            <td><input type="text" name='txtVaiTro' required value="<?php if(isset($vaitro)) echo $vaitro;?>"></td>
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
        $kq = $p->updateNguoiDung($mand, $_REQUEST['TenND'],$_REQUEST['txtEmail'],$_REQUEST['txtVaiTro']);        
        if($kq){
            echo "<script>alert('Update thành công')</script>";
        }else{
            echo "<script>alert('Update thất bại')</script>";
        }
    }
?>