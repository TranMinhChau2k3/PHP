<?php
    include_once("Model/mDonHang.php");
    class controlDonHang{
        public function getAllDonHang(){
            $p = new modelDonHang();
            $tbl = $p->SelectAllDonHang();
            if(mysqli_num_rows($tbl)){
                return $tbl;
            }else
            {
                return false;
            }
        }

        public function getOneDonHang($madh){
            $p = new modelDonHang();
            $kq = $p -> selectOneDonHang($madh);
            if(mysqli_num_rows($kq)>0){
                return $kq;
            }else{
                return false;
            }
        }

        public function updateDonHang($madh, $mand,$ndh,$trangthai){
            $p = new modelDonHang();
            $kq = $p -> updateDonHang($madh, $mand,$ndh,$trangthai);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        public function insertDonHang($mand,$ndh,$trangthai){
            $p = new modelDonHang();
            $kq = $p -> insertDonHang($mand,$ndh,$trangthai);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        
        public function deleteDonHang($madh){
            $p = new modelDonHang();
            $kq = $p -> deleteDonHang($madh);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
    }
?>