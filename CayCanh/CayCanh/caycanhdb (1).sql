-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 01:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caycanhdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaChiTiet` int(11) NOT NULL,
  `MaDonHang` int(11) DEFAULT NULL,
  `MaSanPham` int(11) DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` int(11) NOT NULL,
  `MaNguoiDung` int(11) DEFAULT NULL,
  `NgayDatHang` datetime NOT NULL,
  `TrangThai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoai`, `TenLoai`) VALUES
(1, 'Cây Cảnh Để Bàn'),
(2, 'Cây Cảnh Văn Phòng'),
(3, 'Cây Trong Bếp & Nhà Tắm'),
(4, 'Cây Trước Cửa & Hành Lang'),
(5, 'Cây Trồng Ban Công');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(11) NOT NULL,
  `TenNguoiDung` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MaVaiTro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `TenNguoiDung`, `MatKhau`, `Email`, `MaVaiTro`) VALUES
(1, 'levanvinh', 'e10adc3949ba59abbe56e057f20f883e', 'vinh2003@gmail.com', 1),
(2, 'buiducvinh', 'e10adc3949ba59abbe56e057f20f883e', 'ducvinh@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `Gia` float NOT NULL,
  `HinhAnh` varchar(150) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `MaLoai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `Gia`, `HinhAnh`, `MoTa`, `MaLoai`) VALUES
(1, 'Cây tùng bồng lai ', 500000, '1a.jpg', 'Cây Tùng Bông Lai là một loài cây mang vẻ đẹp trang nhã, với tán lá dầy xanh mướt trông giống như những đám mây và có kích thước nhỏ gọn nên rất thích hợp để bàn làm việc. Chúng là loài cây dễ trồng nên không cần phải tốn công chăm sóc, tuy nhiên cần đặt tại nơi có nhiều ánh sáng.\r\n*Giá bao gồm chậu, đĩa lót và sỏi rải mặt', 1),
(2, 'Cây kim ngân ba thân', 280000, '2a.jpg', 'Cây Kim Ngân là loại cây cảnh trong nhà được trồng phổ biến trên khắp thế giới, nó có sức ảnh hưởng tới mức mà hầu như ai cũng tin rằng khi trồng có thể mang lại nhiều may mắn trong cuộc sống, công việc hoặc làm ăn.', 1),
(3, 'Cây kim ngân một thân ', 450000, '3a.jpg', 'Cây Kim Ngân là loại cây cảnh trong nhà được trồng phổ biến trên khắp thế giới, nó có sức ảnh hưởng tới mức mà hầu như ai cũng tin rằng khi trồng có thể mang lại nhiều may mắn trong cuộc sống, công việc hoặc làm ăn.', 1),
(4, 'Cây tùng bồng lai bonsai', 2800000, '4a.jpg', 'Cây Tùng Bông Lai là một loài cây mang vẻ đẹp trang nhã, với tán lá dầy xanh mướt trông giống như những đám mây và có kích thước nhỏ gọn nên rất thích hợp để bàn làm việc. Chúng là loài cây dễ trồng nên không cần phải tốn công chăm sóc, tuy nhiên cần đặt tại nơi có nhiều ánh sáng.', 1),
(5, 'Cây may mắn ', 290000, '5a.jpg', 'Cây cỏ may mắn là một loại cây đặc biệt, được ươm từ những hạt thanh long và tạo hình bởi bàn tay khéo léo của người nghệ nhân. Trên những quả cầu màu xanh xanh là hàng vạn cây non được ươm trổ trông rất bắt mắt và độc đáo. Chúng được xem là biểu tượng cho tình yêu, hy vọng và sự may mắn nên thường được lựa chọn để làm quà tặng vào dịp đặc biệt.', 1),
(6, 'Cây đuôi công ‘Network’ ', 280000, '1b.jpg', 'Với những vân lá tạo nên hoạ tiết ô lưới ngẫu nhiên độc đáo như một bức tranh mosaic kì công. Calathea Network tạo nên sự khác biệt không thể tìm thấy với bất kỳ loại cây nào', 2),
(7, 'Cây đuôi công sọc ', 450000, '2b.jpg', 'Calathea ornata Sanderiana là loài thực vật thân thảo, có lá hình thuôn tròn, sọc trắng xanh. Loài này rất dễ sống, thường được trồng để trang trí trong nhà, thanh lọc không khí và mang ý nghĩa đem lại may mắn, thành công và thịnh vượng.', 2),
(8, 'Cây vạn lộc son', 360000, '3b.jpg', 'Cô tòng đuôi lươn sở hữu bộ lá nhiều màu sắc rực rỡ, cùng những đường viền hoa văn độc đáo, chúngthường được trồng trang trí cho bồn hoa, ban công hoặc trước hiên nhà. Loại cây này đôi lúc được trồng trong nhà, nhưng đòi hỏi phải trồng nơi có nhiều ánh sáng, gần cửa sổ.', 2),
(9, 'Cây trúc bách hợp ', 950000, '4b.jpg', 'Còn được gọi là trúc phất dụ, mọc thành bụi sum sê, ở chính giữa tạo thành hình hoa thị và tua tủa ra xung quanh. Cây có thân cứng, lá thuôn nhọn ở đầu, mép nguyên, màu xanh bóng xen lần dải màu vàng tươi từ gốc tới ngọn', 2),
(10, 'Chậu cây nội thất mix ', 960000, '5b.jpg', 'Chậu cây nội thất được mix các loại cây dễ chăm sóc, thích nghi tốt với điều kiện thiếu sáng trong nhà. Sản phẩm được mix các loại cây Hạnh Phúc, Vạn lộc, Ngọc ngân, Thường Xuân thích hợp thể đặt tại phòng khách, lối hành lang, văn phòng làm việc, sảnh nhà hàng, khách sạn hoặc làm quà tặng.', 2),
(11, 'Cây trầu bà Brasil ', 345000, '1c.jpg', 'Trầu bà tỷ phú là loại cây nội thất cao cấp với những chiếc lá to có hình trái tim, màu cẩm thạch sang trọng luôn được săn đón trong giới mê cây cảnh. Trầu bà tỷ phú còn được xem là loại cây phong thủy, mang ý nghĩa về sự thành đạt và trù phú.', 3),
(12, 'Cây dương xỉ Hà Lan ', 120000, '2c.jpg', 'Dương xỉ Hà Lan là một loại cây trong nhà có sức sống rất bền bỉ, bộ lá cứng cáp, kháng bệnh tốt và dễ chăm sóc. Nó còn nổi tiếng với khả năng lọc không khí giúp môi trường sống thêm trong lạnh. loại bỏ các chất khí độc hại trong không khí.', 3),
(13, 'Cây Trầu bà MONS011', 500000, '3c.jpg', 'Là loài cây sở hữu cho mình những chiếc lá được tạo nét như trái tim, càng lớn lá bắt đầu xuất hiện các đường xẻ một cách ngẫu nhiên.\r\n\r\n', 3),
(14, 'Cây Trầu bà MONS010', 7550000, '4c.jpg', 'Là loài cây sở hữu cho mình những chiếc lá được tạo nét như trái tim, càng lớn lá bắt đầu xuất hiện các đường xẻ một cách ngẫu nhiên.', 3),
(15, 'Cây Ngọc Ngân Trung\n', 500000, '5c.jpg', 'Cây ngọc ngân thuộc dòng thân thảo, họ nhà Araceae, lá hình bầu, thuôn nhọn dần về đuôi. Lá cây mềm, màu xanh đốm trắng khá đặc trưng, viền lá màu xanh đậm và mướt. Cây ngọc ngân thuộc giống cây ưa bóng và sinh trưởng mạnh ở nơi mát mẻ rất thích hợp trồng cửa sổ phòng ngủ, phòng khách và trang trí cho cảnh quan văn phòng, quán cafe.', 3),
(16, 'Cây phát tài ', 500000, '1d.jpg', 'Cây phát tài núi rất thường được lựa chọn để làm quà tặng vào những dịp khai trương, lên nhà mới, văn phòng mới… với mong muốn đem lại nhiều tài lộc và may mắn cho người được tặng.', 4),
(17, 'Cây bàng Đài Loan ', 1200000, '2d.jpg', 'Cây Bàng Đài Loan Cẩm Thạch có lá nhỏ xinh và sắc xanh, viền trắng hồng rất khác biệt và nổi bật, giúp không gian trở nên độc đáo và sang trọng', 4),
(18, 'Cây cau vàng', 5000000, '3d.jpg', 'Cau vàng Nhật Bản là dòng cau cảnh chịu bóng râm rất tốt, có chiều cao chỉ từ 80~100cm, tán lá gọn gàng nên rất thích hợp để trưng bày trong không gian nội thất. Là một trong những loại cau kiểng được ưu chuộng bởi khả năng mang lại không gian xanh mát, lọc không khí và ý nghĩa tốt trong phong thủy.', 4),
(19, 'Cây kim ngân 3 thân ', 280000, '4d.jpg', 'Cây Kim Ngân là loại cây cảnh trong nhà được trồng phổ biến trên khắp thế giới, nó có sức ảnh hưởng tới mức mà hầu như ai cũng tin rằng khi trồng có thể mang lại nhiều may mắn trong cuộc sống, công việc hoặc làm ăn.', 4),
(20, 'Cây cọ nhật ', 450000, '5d.jpg', 'Cây cọ nhật là loại cây trong nhà có kiểu lá xòe rộng như những cánh quạt, giúp trang trí không gian thêm xanh mát. Nó còn là loại cây phong thủy tượng trưng cho sự giàu sang và tiền tài nên rất đáng trồng trên bàn làm việc.\r\n\r\n', 4),
(21, 'Cây kim tiền ', 235000, '1e.jpg', 'Cây kim tiền là loài thực vật họ nhà Araceae, có lá hình xương cá màu xanh mướt. Loài này rất dễ sống phát triển mạnh ở những nơi có độ ẩm cao, thường được trồng để trang trí trong phòng khách, làm quà tặng tân gia, khai trương cửa hàng. Chúng được đặt tại trước đại sảnh, lối ra vào cổng chính hoặc trưng bày vào những dịp', 5),
(22, 'Cây Tuyết sơn ', 280000, '2e.jpg', 'Thuộc loại cây bụi, còn có tên gọi khác là Bạch Tuyết Sơn, Tuyết Sơn Phi Hồ', 5),
(23, 'Cây trầu bà đế vương', 500000, '3e.jpg', 'Cây Trầu Bà Đế Vương được xem là biểu tượng của bậc đế vương, mang ý nghĩa giúp đem lại sự thịnh vượng, may mắn, thành công tới cho gia chủ. Bên cạnh đó, nó còn có khả năng hấp thu các loại khí thải … giúp không khi trong lành hơn', 5),
(24, 'Cây Trầu Bà Đế Vương Xanh', 400000, '4e.jpg', 'Trầu Bà Đế Vương có tên tiếng Anh là Philodendron Imperial thuộc họ Araceae (Ráy). Nguồn gốc của cây từ đảo Solomon, nguyên sinh ở Indonesia, là dòng cây thân thảo, trong tự nhiên dòng cây này có thể cao hơn 1.5m, nhưng với mục đích trang trí thì MOW sẽ gửi đến các bạn cây với kích cỡ nhỏ để tiện đặt ở bất cứ đâu mình thích.\r\n\r\nNgay từ cái tên thì chúng ta đã hiểu được phần nào ý nghĩa của loài cây này, chúng không những thể hiện sự quyết tâm, ý chí vươn lên đến đỉnh cao nhất mà còn mang đến nhiều may mắn, tài lộc đến cho người trồng.', 5),
(25, 'Cây ráng tổ yến ', 900000, '5e.jpg', 'Tổ yến góp phần lọc không khí, tạo mảng xanh trong ngôi nhà, khu vườn của bạn.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE `vaitro` (
  `MaVaiTro` int(11) NOT NULL,
  `TenVaiTro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`MaVaiTro`, `TenVaiTro`) VALUES
(1, 'NguoiDung1'),
(2, 'NguoiDung2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaChiTiet`),
  ADD KEY `MaDonHang` (`MaDonHang`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`),
  ADD KEY `MaVaiTro` (`MaVaiTro`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Indexes for table `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`MaVaiTro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `MaChiTiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `MaVaiTro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaVaiTro`) REFERENCES `vaitro` (`MaVaiTro`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loaisanpham` (`MaLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
