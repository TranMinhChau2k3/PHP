<h2>Thêm Đơn hàng</h2>
<form action="#" method='post' enctype="multipart/form-data" width='100%' class = 'tblCate '>
    <table>
        <tr>
            <td>Mã Chi Tiết</td>
            <td>
                <input type="text" name="MaCT" required>
            </td>
        </tr>
        <tr>
            <td>Mã đơn hàng</td>
            <td>
                <input type="text" name="txtMDH" required>
            </td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td>
                <input type="text" name="txtMSP" required>
            </td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td>
                <input type="text" name="txtSL" required>
            </td>
        </tr>
        <tr>
            <td>Đơn giá</td>
            <td>
                <input type="text" name="txtDG" required>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btnThem" value="Thêm Chi tiết đơn hàng">
                <input type="reset" value="Hủy">
            </td>
        </tr>
    </table>
</form>

<?php
    include_once("Controller/cCTDH.php");
    $p = new controlChiTietDonHang();
    if(isset($_REQUEST['btnThem'])){
        $kq = $p->insertChiTietDonHang($_REQUEST['MaCT'],$_REQUEST['txtMDH'],$_REQUEST['txtMSP'],$_REQUEST['txtSL'],$_REQUEST['txtDG']);        
        if($kq){
            echo "<script>alert('Thêm Đơn hàng thành công')</script>";
        }else{
            echo "<script>alert('Thêm Đơn hàng thất bại')</script>";
        }
    }
?>