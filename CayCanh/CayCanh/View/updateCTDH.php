<?php
    include_once('Controller/cChiTietDonHang.php');
    $p = new controlChiTietDonHang();
    $mactdh = $_REQUEST["id"];
    $th = $p -> getOneChiTietDonHang($mactdh);
    if($th){
        while($r = mysqli_fetch_assoc($th)){
            $madh = $r['MaDonHang'];
            $masp = $r['MaSanPham'];
            $soluong = $r['SoLuong'];
            $dongia = $r['DonGia'];

        }
    }else{
        echo "<script>alert('Mã Loại sản phẩm Không Tồn Tại !!!')</script>";
        header("refresh:0; url='admin.php'");
    }
?>

<h2>Cập nhật Chi Tiết Đơn hàng</h2>
<form action="#" method="post" enctype="multipart/form-data" width='100px' class='tblCate'>
    <table>
        <tr>
            <td>Mã Đơn hàng</td>
            <td><input type="text" name='MaDH' required value="<?php if(isset($madh)) echo $madh;?>"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name='txtMSP' required value="<?php if(isset($masp)) echo $masp;?>"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name='txtSL' required value="<?php if(isset($soluong)) echo $soluong;?>"></td>
        </tr>
        <tr>
            <td>Đơn giá</td>
            <td><input type="text" name='txtDG' required value="<?php if(isset($dongia)) echo $dongia;?>"></td>
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
        $kq = $p->updateChiTietDonHang($mactdh, $_REQUEST['MaDH'],$_REQUEST['txtMSP'],$_REQUEST['txtSL'],$_REQUEST['txtDG']);        
        if($kq){
            echo "<script>alert('Update thành công')</script>";
        }else{
            echo "<script>alert('Update thất bại')</script>";
        }
    }
?>