<?php
include_once("ketnoi.php");

class modelVaiTro {
    public function selectAllVaiTro() {
        $p = new clsKetNoi();
        $truyvan = "select * FROM vaitro";
        $con = $p->MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p->DongKetNoi($con);
        return $kq;
    }
    public function selectOneVaiTro($mavt){
        $p = new clsKetNoi();
        $truyvan = "Select * from VaiTro where MaVaiTro = $mavt";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function updateVaiTro($mavt, $tenvt,$mota){
        $p = new clsKetNoi();
        $truyvan = "update VaiTro set TenVaiTro = N'$tenvt' ,MoTa = '$mota' where MaVaiTro = $mavt";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function insertVaiTro($tenvt,$mota){
        $p = new clsKetNoi();
        $truyvan = "insert into VaiTro(TenVaiTro,MoTa) values(N'$tenvt','$mota')";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }

    public function deleteVaiTro($mavt){
        $p = new clsKetNoi();
        $truyvan = "delete from VaiTro where MaVaiTro = $mavt";
        $con = $p -> MoKetNoi();
        $kq = mysqli_query($con, $truyvan);
        $p -> DongKetNoi($con);
        return $kq;
    }
}
?>