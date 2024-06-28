<?php
    include_once("ketnoi.php");
    class modelSanPham{
        public function selectAllSanPham(){
            $p = new clsKetNoi();
            $truyvan = "Select s.* from sanpham s join loaisanpham t on s.MaLoai = t.MaLoai";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }

        public function selectAllSanPhamByType($th){
            $p = new clsKetNoi();
            $truyvan = "Select s.* from sanpham s join loaisanpham t on s.MaLoai = t.MaLoai where s.MaLoai=$th";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }

        public function selectAllSanPhamByName($ten){
            $p = new clsKetNoi();
            $truyvan = "Select s.* from sanpham s join loaisanpham t on s.MaLoai = t.MaLoai where s.TenSanPham like N'%$ten%'";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }

        public function selectOneSanPham($maSP){
            $p = new clsKetNoi();
            $truyvan = "Select s.* from sanpham s join loaisanpham t on s.MaLoai = t.MaLoai where MaSanPham=$maSP";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }

        public function updateSanPham($maSP, $tenSP, $giaban,$giagoc, $hinhAnh,$mota, $loaisanpham){
            $p = new clsKetNoi();
            $truyvan = "UPDATE sanpham SET TenSanPham = N'$tenSP',GiaBan = '$giaban',GiaGoc = '$giagoc',  HinhAnh = '$hinhAnh',MoTa = '$mota',MaLoai = '$loaisanpham'WHERE MaSanPham = $maSP";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }
        
        

        public function insertSanPham($tenSP, $giaban,$giagoc, $hinhAnh,$mota, $loaisanpham){
            $p = new clsKetNoi();
            $con = $p -> MoKetNoi();
            $truyvan = "insert into sanpham(TenSanPham, GiaBan,GiaGoc, HinhAnh,MoTa, MaLoai) values (N'$tenSP','$giaban','$giagoc','$hinhAnh','$mota','$loaisanpham')";
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }

        public function deleteSanPham($maSP){
            $p = new clsKetNoi();
            $truyvan = "delete from sanpham where MaSanPham = $maSP";
            $con = $p -> MoKetNoi();
            $kq = mysqli_query($con, $truyvan);
            $p -> DongKetNoi($con);
            return $kq;
        }
    }
?>