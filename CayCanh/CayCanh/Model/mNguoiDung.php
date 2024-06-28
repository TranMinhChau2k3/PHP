
<?php
    include_once("ketnoi.php");
    class modelNguoiDung{
        public function select01NguoiDung($TenND, $MatKhau){
            $p = new clsKetNoi();
            $con = $p->MoKetNoi();
            $truyvan = "Select * from NguoiDung where TenNguoiDung = '$TenND' and MatKhau = '$MatKhau'";
            $ketqua = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $ketqua;
        }
        public function selectAllNguoiDung(){
            $p = new clsKetNoi();
            $truyvan = "Select * from NguoiDung n join vaitro v on n.MaVaiTro = v.MaVaiTro";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }
        public function selectOneNguoiDung($mand){
            $p = new clsKetNoi();
            $truyvan = "Select * from nguoidung where MaNguoiDung = $mand";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }
        public function updateNguoiDung($mand,$tennd,$email,$vaitro){
            $p = new clsKetNoi();
            $truyvan = "update nguoidung set TenNguoiDung = N'$tennd', Email = '$email',MaVaiTro = $vaitro where MaNguoiDung = $mand";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }
        public function insertNguoiDung($tennd,$matkhau,$email,$vaitro){
            $p = new clsKetNoi();
            $truyvan = "insert into NguoiDung(TenNguoiDung,MatKhau,Email,MaVaiTro) values(N'$tennd','$matkhau','$email','$vaitro')";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }
    
        public function deleteNguoiDung($mand){
            $p = new clsKetNoi();
            $truyvan = "delete from NguoiDung where MaNguoiDung = $mand";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }
    }
?>