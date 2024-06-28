<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<header>
  <h2>Shop Cây Cảnh</h2>
</header>
<section>
    <div id="navngang">
        <a href="index.php">Trang Chủ</a>    | 
        <?php
        if(isset($_SESSION["dn"])){
            echo '<a href="admin.php">Quản Lý</a> |';
            echo '<a href="View/dangxuat.php" onclick="return confirm(\'Are you sure to logout?\');">Đăng Xuất</a>';
        }else{
            echo '<a href="?dangnhap">Đăng Nhập</a>';
        }
        ?>
    </div>
    <div id="search">
        <form method="Get" action="">
            <input type="text" name="txtTuKhoa" placeholder="Tìm Theo Tên Sản Phẩm"/>
            <input type="submit" value="Tìm" name="btnTimKiem"/>
        </form> 
    </div>
</section>
<section>
  <nav>
    <ul>
      <?php
        include_once('View/menuLSP.php');
      ?>
    </ul>
  </nav>
  <article>
      <?php
        if(isset($_GET["dangnhap"])){
            include_once("View/dangnhap.php");
        }elseif(isset($_GET["dangxuat"])){
            include_once("View/dangxuat.php");
        }else{
          include_once("View/listSanPham.php");
        }
      ?>
  </article>
</section>
<footer>
</footer>
</body>
</html>