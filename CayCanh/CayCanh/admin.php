<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["dn"])){
    echo "<script>alert('Bạn Không có quyền truy cập')</script>";
    header("refresh:0;url='index.php'");
} elseif($_SESSION["dn"] >= 4){
    echo "<script>alert('Bạn Không có quyền truy cập')</script>";
    header("refresh:0;url='index.php'");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Page</title>
</head>
<body>

<header>
<h2>Shop Cây Cảnh</h2>
</header>
<section>
  <div id="navngang">
    <a href="index.php">Trang Chủ</a> | <a href="View/dangxuat.php" onclick="return confirm('Are you sure to logout?');">Đăng Xuất</a>
  </div>
  <div id="search">
    <form method="GET" action="#">
      <input type="text" name="txtTuKhoa" placeholder="Tìm Theo Tên Sản Phẩm" />
      <input type="submit" name="btnTimKiem" value="Tìm" />
    </form>
  </div>
</section>
<section>
  <nav>
    <ul id="menu">
    <?php
    if ($_SESSION["dn"] <= 1) {
        echo '<li><a href="?type=nguoidung">Quản Lý Người Dùng</a></li>';
        echo '<li><a href="?type=vaitro">Quản Lý Vai Trò</a></li>';
    } elseif ($_SESSION["dn"] == 2) {
        echo '<li><a href="?type=loaisanpham">Quản Lý Loại Sản Phẩm</a></li>';
        echo '<li><a href="?type=sanpham">Quản Lý Sản Phẩm</a></li>';
    } elseif ($_SESSION["dn"] == 3) {
        echo '<li><a href="?type=donhang">Quản Lý Đơn Hàng</a></li>';
        echo '<li><a href="?type=chitietdonhang">Quản Lý Chi tiết Đơn Hàng</a></li>';
    }
  ?>



  </nav>
  <article>

  <?php
        if (isset($_REQUEST["type"])) {
          $_SESSION['type'] = $_REQUEST["type"];
          switch ($_SESSION['type']) {
              case 'loaisanpham':
                  include_once("View/tableLoaiSanPham.php");
                  break;
              case 'sanpham':
                  include_once("View/tableSanPham.php");
                  break;
              case 'nguoidung':
                  include_once("View/tableNguoiDung.php");
                  break;
              case 'vaitro':
                  include_once("View/tableVaiTro.php");
                  break;
              case 'donhang':
                  include_once("View/tableDonHang.php");
                  break;
              case 'chitietdonhang':
                  include_once("View/tableCTDH.php");
                  break;
              default:
                  echo "<h1>Trang Admin</h1>";
                  break;
          }
      } elseif (isset($_REQUEST["action"])) {
          switch ($_REQUEST["action"]) {
              case 'update':
                  if ($_SESSION['type'] == 'loaisanpham') {
                      include_once("View/updateLSP.php");
                  } elseif ($_SESSION['type'] == 'sanpham') {
                      include_once("View/updateSP.php");
                  } elseif ($_SESSION['type'] == 'nguoidung') {
                      include_once("View/updateND.php");
                  }elseif ($_SESSION['type'] == 'vaitro') {
                    include_once("View/updateVT.php");
                  }
                  elseif ($_SESSION['type'] == 'donhang') {
                    include_once("View/updateDH.php");
                  }
                  elseif ($_SESSION['type'] == 'chitietdonhang') {
                    include_once("View/updateCTDH.php");
                  }
                  break;
              case 'delete':
                  if ($_SESSION['type'] == 'loaisanpham') {
                      include_once("View/deleteLSP.php");
                  } elseif ($_SESSION['type'] == 'sanpham') {
                      include_once("View/deleteSP.php");
                  } elseif ($_SESSION['type'] == 'nguoidung') {
                      include_once("View/deleteND.php");
                  } elseif ($_SESSION['type'] == 'vaitro') {
                      include_once("View/deleteVT.php");
                  } elseif ($_SESSION['type'] == 'donhang') {
                      include_once("View/deleteDH.php");
                  }elseif ($_SESSION['type'] == 'chitietdonhang') {
                    include_once("View/deleteCTDHDH.php");
                }
                  
                  break;
              case 'insert':
                  if ($_SESSION['type'] == 'loaisanpham') {
                      include_once("View/insertLSP.php");
                  } elseif ($_SESSION['type'] == 'sanpham') {
                      include_once("View/insertSP.php");
                  } elseif ($_SESSION['type'] == 'nguoidung') {
                      include_once("View/insertND.php");
                  } elseif ($_SESSION['type'] == 'vaitro') {
                      include_once("View/insertVT.php");
                  } elseif ($_SESSION['type'] == 'donhang') {
                    include_once("View/insertDH.php");
                  }elseif ($_SESSION['type'] == 'chitietdonhang') {
                    include_once("View/insertCTDH.php");
                  }
                  break;
              default:
                  echo "<h1>Trang Admin</h1>";
                  break;
          }
      } else {
          echo "<h1>Trang Admin</h1>";
      }
      
      
      ?>
  </article>
</section>
<footer>
  <p></p>
</footer>
</body>
</html>
