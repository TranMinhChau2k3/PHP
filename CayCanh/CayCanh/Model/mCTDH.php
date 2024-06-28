<?php
include_once("ketnoi.php");

class modelChiTietDonHang {
    public function selectAllChiTietDonHang() {
        $p = new clsKetNoi();
        $truyvan = "select * FROM ChiTietDonHang";
        $con = $p->MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p->DongKetNoi($con);
        return $kq;
    }

    public function selectOneChiTietDonHang($madh){
        $p = new clsKetNoi();
        $truyvan = "Select * from ChiTietDonHang where MaChiTiet = $mactdh";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function updateChiTietDonHang($mactdh, $madh,$masp,$soluong,$dongia){
        $p = new clsKetNoi();
        $truyvan = "update ChiTietDonHang set MaDonHang = $madh, MaSanPham='$masp',SoLuong ='$soluong',DonGia='$dongia' where MaChiTiet = $mactdh";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function insertChiTietDonHang($madh,$masp,$soluong,$dongia){
        $p = new clsKetNoi();
        $truyvan = "insert into ChiTietDonHang(MaDonHang,MaSanPham,SoLuong,DonGia) values('$madh','$masp','$soluong','$dongia')";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function deleteChiTietDonHang($madh){
        $p = new clsKetNoi();
        $truyvan = "delete from ChiTietDonHang where MaChiTiet = $mactdh";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }
}
?>
