<?php
    include_once('Controller/cDonHang.php');
    $p = new controlDonHang();
    $madh = $_REQUEST["id"];
    $th = $p -> getOneDonHang($madh);
    if($th){
        while($r = mysqli_fetch_assoc($th)){
            $mand = $r['MaNguoiDung'];
            $ndh = $r['NgayDatHang'];
            $trangthai = $r['TrangThai'];

        }
    }else{
        echo "<script>alert('Mã Đơn hàng Không Tồn Tại !!!')</script>";
        header("refresh:0; url='admin.php'");
    }
?>

<h2>Cập nhật Đơn hàng</h2>
<form action="#" method="post" enctype="multipart/form-data" width='100px' class='tblCate'>
    <table>
        <tr>
            <td>Mã Người dùng</td>
            <td><input type="text" name='MaND' required value="<?php if(isset($mand)) echo $mand;?>"></td>
        </tr>
        <tr>
            <td>Ngày Đặt Hàng</td>
            <td><input type="text" name='txtNDH' required value="<?php if(isset($ndh)) echo $ndh;?>"></td>
        </tr>
        <tr>
            <td>Trạng Thái</td>
            <td><input type="text" name='txtTT' required value="<?php if(isset($trangthai)) echo $trangthai;?>"></td>
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
        $kq = $p->updateDonHang($madh, $_REQUEST['MaND'],$_REQUEST['txtNDH'],$_REQUEST['txtTT']);        
        if($kq){
            echo "<script>alert('Update thành công')</script>";
        }else{
            echo "<script>alert('Update thất bại')</script>";
        }
    }
?>