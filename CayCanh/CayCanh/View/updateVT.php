<?php
    include_once('Controller/cVaiTro.php');
    $p = new controlVaiTro();
    $mavt = $_REQUEST["id"];
    $th = $p -> getOneVaiTro($mavt);
    if($th){
        while($r = mysqli_fetch_assoc($th)){
            $tenvt = $r['TenVaiTro'];
            $mota = $r['MoTa'];
        }
    }else{
        echo "<script>alert('Mã vai trò Không Tồn Tại !!!')</script>";
        header("refresh:0; url='admin.php'");
    }
?>

<h2>Cập nhật Vai trò</h2>
<form action="#" method="post" enctype="multipart/form-data" width='100px' class='tblCate'>
    <table>
        <tr>
            <td>Tên Vai Trò</td>
            <td><input type="text" name='TenVT' required value="<?php if(isset($tenvt)) echo $tenvt;?>"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><input type="text" name='txtMoTa' required value="<?php if(isset($mota)) echo $mota;?>"></td>
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
        $kq = $p->updateVaiTro($mavt, $_REQUEST['TenVT'],$_REQUEST['txtMoTa']);        
        if($kq){
            echo "<script>alert('Update thành công')</script>";
        }else{
            echo "<script>alert('Update thất bại')</script>";
        }
    }
?>