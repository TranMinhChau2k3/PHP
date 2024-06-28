<?php
include("upload.php");
include_once("Model/mSanPham.php");
class controlSanPham {
    public function getAllSanPham() {
        $p = new modelSanPham();
        $kq = $p->SelectAllSanPham();
        if ($kq && mysqli_num_rows($kq) > 0) {
            return $kq;
        } else {
            return false;
        }
    }

    public function getAllSanPhamByType($th) {
        $p = new modelSanPham();
        $kq = $p->selectAllSanPhamByType($th);
        if ($kq && mysqli_num_rows($kq) > 0) {
            return $kq;
        } else {
            return false;
        }
    }

    public function getAllSanPhamByName($ten) {
        $p = new modelSanPham();
        $kq = $p->selectAllSanPhamByName($ten);
        if ($kq && mysqli_num_rows($kq) > 0) {
            return $kq;
        } else {
            return false;
        }
    }

    public function getOneSanPham($maSP) {
        $p = new modelSanPham();
        $kq = $p->selectOneSanPham($maSP);
        if ($kq && mysqli_num_rows($kq) > 0) {
            return $kq;
        } else {
            return false;
        }
    }

    public function updateSanPham($maSP, $tenSP, $giaban,$giagoc, $fileHinh, $hinhAnh,$mota, $loaisanpham) {
        if ($fileHinh["tmp_name"] != "") {
            $pu = new uploadHinhSP();
            $kq = $pu->uploadAnh($fileHinh, $tenSP, $hinhAnh);
            if (!$kq) {
                return false;
            }
        }
        $p = new modelSanPham();
        $kq = $p->updateSanPham($maSP, $tenSP, $giaban,$giagoc, $hinhAnh,$mota, $loaisanpham);
        return $kq;
    }

    public function insertSanPham($tenSP, $giaban,$giagoc, $fileHinh,$mota, $loaisanpham){
        if($fileHinh['tmp_name']!=""){
            $pn = new uploadHinhSP();
            $kq = $pn -> uploadAnh($fileHinh, $tenSP, $hinh);
            if(!$kq){
                return false;
            }
        }
        $p = new modelSanPham();
        $kq = $p ->insertSanPham($tenSP, $giaban,$giagoc, $hinh,$mota, $loaisanpham);
        return $kq;
    }

    public function deleteSanPham($maSP){
        $p = new modelSanPham();
        $kq = $p -> deleteSanPham($maSP);
        if($kq){
            return $kq;
        }else{
            return false;
        }
    }
}
?>
