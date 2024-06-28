<h2>Thêm Đơn hàng</h2>
<form action="#" method='post' enctype="multipart/form-data" width='100%' class = 'tblCate '>
    <table>
        <tr>
            <td>Mã Người Dùng</td>
            <td>
                <input type="text" name="MaND" required>
            </td>
        </tr>
        <tr>
            <td>Ngày Đặt Hàng</td>
            <td>
                <input type="text" name="txtNDH" required>
            </td>
        </tr>
        <tr>
            <td>Trạng Thái</td>
            <td>
                <input type="text" name="txtTT" required>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="btnThem" value="Thêm đơn hàng">
                <input type="reset" value="Hủy">
            </td>
        </tr>
    </table>
</form>

<?php
    include_once("Controller/cDonHang.php");
    $p = new controlDonHang();
    if(isset($_REQUEST['btnThem'])){
        $kq = $p->insertDonHang($_REQUEST['MaND'],$_REQUEST['txtNDH'],$_REQUEST['txtTT']);        
        if($kq){
            echo "<script>alert('Thêm Đơn hàng thành công')</script>";
        }else{
            echo "<script>alert('Thêm Đơn hàng thất bại')</script>";
        }
    }
?>