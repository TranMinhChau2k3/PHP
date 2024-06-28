<?php
include_once("ketnoi.php");

class modelLoaiSanPham {
    public function selectAllLoaiSanPham() {
        $p = new clsKetNoi();
        $truyvan = "select * FROM loaisanpham";
        $con = $p->MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p->DongKetNoi($con);
        return $kq;
    }

    public function selectOneLoaiSanPham($maloai){
        $p = new clsKetNoi();
        $truyvan = "Select * from loaisanpham where MaLoai = $maloai";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function updateLoaiSanPham($maloai, $tenloai){
        $p = new clsKetNoi();
        $truyvan = "update loaisanpham set TenLoai = N'$tenloai' where MaLoai = $maloai";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function insertLoaiSanPham($tenloai){
        $p = new clsKetNoi();
        $truyvan = "insert into loaisanpham(TenLoai) values(N'$tenloai')";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function deleteLoaiSanPham($maloai){
        $p = new clsKetNoi();
        $truyvan = "delete from loaisanpham where MaLoai = $maloai";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }
}
?>
