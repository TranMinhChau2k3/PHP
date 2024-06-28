<?php
    include_once("Model/mCTDH.php");
    class controlChiTietDonHang{
        public function getAllChiTietDonHang(){
            $p = new modelChiTietDonHang();
            $tbl = $p->SelectAllChiTietDonHang();
            if(mysqli_num_rows($tbl)){
                return $tbl;
            }else
            {
                return false;
            }
        }

        public function getOneChiTietDonHang($mactdh){
            $p = new modelChiTietDonHang();
            $kq = $p -> selectOneChiTietDonHang($mactdh);
            if(mysqli_num_rows($kq)>0){
                return $kq;
            }else{
                return false;
            }
        }

        public function updateChiTietDonHang($mactdh, $madh,$masp,$soluong,$dongia){
            $p = new modelChiTietDonHang();
            $kq = $p -> updateChiTietDonHang($mactdh, $madh,$masp,$soluong,$dongia);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        public function insertChiTietDonHang($madh,$masp,$soluong,$dongia){
            $p = new modelChiTietDonHang();
            $kq = $p -> insertChiTietDonHang($madh,$masp,$soluong,$dongia);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        
        public function deleteChiTietDonHang($mactdh){
            $p = new modelChiTietDonHang();
            $kq = $p -> deleteChiTietDonHang($mactdh);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
    }
?>