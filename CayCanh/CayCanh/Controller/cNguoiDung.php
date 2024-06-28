<?php
    // session_start();
    include_once("Model/mNguoiDung.php");
    class controlNguoiDung{
        public function get01NguoiDung($TND,$MK){
            $MK = md5($MK);
            $p = new modelNguoiDung();
            $ketqua = $p -> select01NguoiDung($TND, $MK);
            if(mysqli_num_rows($ketqua)>0){
                while($r = mysqli_fetch_assoc($ketqua)){
                    $_SESSION["dn"] = $r["MaVaiTro"];
                }
                echo "<script>alert('Bạn đã đăng nhập thành công!')</script>";
                header("refresh:0; url = 'admin.php'");
            }else{
                echo "<script>alert('Thông tin đăng nhập không khớp!')</script>";
                header("refresh:0; url = ?dangnhap");
            }
        }
        public function getAllNguoiDung() {
            $p = new modelNguoiDung();
            $kq = $p->SelectAllNguoiDung();
            if ($kq && mysqli_num_rows($kq) > 0) {
                return $kq;
            } else {
                return false;
            }
        }
        public function getOneNguoiDung($mand){
            $p = new modelNguoiDung();
            $kq = $p -> selectOneNguoiDung($mand);
            if(mysqli_num_rows($kq)>0){
                return $kq;
            }else{
                return false;
            }
        }

        public function updateNguoiDung($mand,$tennd,$email,$vaitro){
            $p = new modelNguoiDung();
            $kq = $p ->updateNguoiDung($mand,$tennd,$email,$vaitro);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        public function insertNguoiDung($tennd,$matkhau,$email,$vaitro){
            $p = new modelNguoiDung();
            $kq = $p -> insertNguoiDung($tennd,$matkhau,$email,$vaitro);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        
        public function deleteNguoiDung($mand){
            $p = new modelNguoiDung();
            $kq = $p -> deleteNguoiDung($mand);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
    }
?>