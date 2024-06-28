<?php
    include_once("Model/mVaiTro.php");
    class controlVaiTro{
        public function getAllVaiTro(){
            $p = new modelVaiTro();
            $tbl = $p->SelectAllVaiTro();
            if(mysqli_num_rows($tbl)){
                return $tbl;
            }else
            {
                return false;
            }
        }
        public function getOneVaiTro($mavt){
            $p = new modelVaiTro();
            $kq = $p -> selectOneVaiTro($mavt);
            if(mysqli_num_rows($kq)>0){
                return $kq;
            }else{
                return false;
            }
        }

        public function updateVaiTro($mavt, $tenvt,$mota){
            $p = new modelVaiTro();
            $kq = $p -> updateVaiTro($mavt, $tenvt,$mota);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        public function insertVaiTro($tenvt,$mota){
            $p = new modelVaiTro();
            $kq = $p -> insertVaiTro($tenvt,$mota);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        
        public function deleteVaiTro($mavt){
            $p = new modelVaiTro();
            $kq = $p -> deleteVaiTro($mavt);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
    }
?>