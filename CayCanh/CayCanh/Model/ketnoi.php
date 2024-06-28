<?php
    class clsKetNoi{
        public function MoKetNoi(){
            $con = mysqli_connect("localhost", "bdv", "123456", "caycanhdb");
            mysqli_set_charset($con,'utf8');
            return $con;
        }

        public function DongKetNoi($con){
            mysqli_close($con);
        }
    }
?>