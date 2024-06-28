<?php
include_once("ketnoi.php");

class modelDonHang {
    public function selectAllDonHang() {
        $p = new clsKetNoi();
        $truyvan = "select * FROM DonHang";
        $con = $p->MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p->DongKetNoi($con);
        return $kq;
    }

    public function selectOneDonHang($madh){
        $p = new clsKetNoi();
        $truyvan = "Select * from DonHang where MaDonHang = $madh";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function updateDonHang($madh, $mand,$ndh,$trangthai){
        $p = new clsKetNoi();
        $truyvan = "update DonHang set MaNguoiDung = N'$mand', NgayDatHang='$ndh',TrangThai ='$trangthai' where MaDonHang = $madh";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function insertDonHang($mand,$ndh,$trangthai){
        $p = new clsKetNoi();
        $truyvan = "insert into DonHang(MaNguoiDung,NgayDatHang,TrangThai) values('$mand','$ndh','$trangthai')";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function deleteDonHang($madh){
        $p = new clsKetNoi();
        $truyvan = "delete from DonHang where MaDonHang = $madh";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }
}
?>
