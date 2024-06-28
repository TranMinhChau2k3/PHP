<?php
    include_once("Model/mLoaisanPham.php");
    class controlLoaiSanPham{
        public function getAllLoaiSanPham(){
            $p = new modelLoaiSanPham();
            $tbl = $p->SelectAllLoaiSanPham();
            if(mysqli_num_rows($tbl)){
                return $tbl;
            }else
            {
                return false;
            }
        }

        public function getOneLoaiSanPham($maloai){
            $p = new modelLoaiSanPham();
            $kq = $p -> selectOneLoaiSanPham($maloai);
            if(mysqli_num_rows($kq)>0){
                return $kq;
            }else{
                return false;
            }
        }

        public function updateLoaiSanPham($maloai, $tenloai){
            $p = new modelLoaiSanPham();
            $kq = $p -> updateLoaiSanPham($maloai, $tenloai);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        public function insertLoaiSanPham($tenloai){
            $p = new modelLoaiSanPham();
            $kq = $p -> insertLoaiSanPham($tenloai);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        
        public function deleteLoaiSanPham($maloai){
            $p = new modelLoaiSanPham();
            $kq = $p -> deleteLoaiSanPham($maloai);
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
    }
?>