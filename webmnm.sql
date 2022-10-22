-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 01:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmnm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `pasword` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pasword`, `permission`) VALUES
(1, 'admin', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nameBrand` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nameBrand`) VALUES
(1, 'Casio'),
(2, 'Seiko'),
(3, 'Calvin Klein'),
(4, 'Tissot'),
(5, 'Orient'),
(6, 'Citizen'),
(7, 'Fossil'),
(8, 'Candino');

-- --------------------------------------------------------

--
-- Table structure for table `dt_order`
--

CREATE TABLE `dt_order` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dt_order`
--

INSERT INTO `dt_order` (`orderID`, `productID`, `quantity`, `price`) VALUES
(1, 2, 1, 4334000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `totalQuantity` int(11) NOT NULL,
  `totalPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userID`, `username`, `date`, `totalQuantity`, `totalPrice`) VALUES
(1, 1, 'user1', '2022-10-09', 1, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `time` date NOT NULL,
  `paymentBy` int(11) NOT NULL,
  `is_succcess` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `productName` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `price` float NOT NULL,
  `priceAfter` float NOT NULL,
  `amount` int(11) NOT NULL,
  `origin` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brandID`, `productName`, `price`, `priceAfter`, `amount`, `origin`, `image`, `description`, `title`) VALUES
(1, 1, 'CASIO MTP-1215A-7B2DF – NAM – QUARTZ (PIN) – DÂY KIM LOẠI', 1086000, 1000000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2017/08/MTP-1215A-7B2DF.jpg', 'Đồng hồ Casio MTP-1215A-7B2DF với mặt số tròn truyền thống, kim chỉ được phủ phản quang dễ nhìn trong đêm, vạch chỉ giờ phủ màu đen nổi bật, dây đeo kim loại nam tính lịch lãm.', 'Hot'),
(2, 1, 'CASIO EQS -920DB-1BVUDF – SOLAR  – DÂY KIM LOẠI', 4534000, 4334000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2019/07/150_EQS-920DB-1BVUDF-699x699.jpg', 'Phong cách thiết kế ấn tượng nhờ vào lớp viền đen nổi bật ngay trên mặt số, bên dưới nền là bộ vỏ bạc trắng khiến sản phẩm trở thành chiếc đồng hồ nam cứng cáp\r\n', 'Hot'),
(3, 1, 'CASIO BEM-150D-1AVDF – QUARTZ (PIN) – DÂY KIM LOẠI', 2996000, 2796000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2017/08/BEM-150D-1AVDF-699x699.jpg', 'Đồng hồ Casio BEM-150D-1AVDF có vỏ và dây đeo kim loại màu bạc, nền số màu đen cùng kim chỉ và vạch số được dát mỏng nổi bât, còn có ô lịch ngày vị trí 12h, mang lại cho phái mạnh sự thanh lịch.\r\n', 'Hot'),
(4, 1, 'CASIO SGW-400H-1B2VDR – QUARTZ (PIN) – DÂY CAO SU', 2791000, 2591000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2017/08/SGW-400H-1B2VDR-699x699.jpg', 'Đồng hồ Casio SGW-400H-1B2VDR có viền kim loại bằng nhôm tinh tế, dây đeo cao su màu đen cá tính, mặt số hiện đại với sự kết hợp giữa kim chỉ và số điện tử tạo nên phong cách thể thao cá tính.\r\n', 'Hot'),
(5, 1, 'G-SHOCK GBA-400-1ADR – QUARTZ (PIN) – DÂY CAO SU', 5436000, 5036000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2016/12/119_GBA-400-1ADR-699x699.jpg', 'Đồng hồ G-Shock GBA-400-1ADR có thiết kế thời trang cá tính năng động, với cấu tạo độc đáo khi mặt đồng hồ được làm nổi ba chiều đem đến nhiều đặc tính, đèn LED có độ chiếu sáng cao giúp nhìn rõ trong', 'Hot'),
(6, 2, 'SEIKO SPC087P1 – QUARTZ (PIN) – DÂY DA', 5346000, 5246000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2017/06/SPC087P1.jpg', 'Đồng hồ thời trang cao cấp Seiko SPC087P1 mang phong cách thanh lịch cho nam giới, mặt nền trắng kết hợp với các chi tiết mạ vàng, dây da chính hãng có vân.\r\n', 'Hot'),
(7, 2, 'SEIKO SRPD67K1 – AUTOMATIC (TỰ ĐỘNG)  – DÂY KIM LOẠI', 7929000, 7729000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2019/12/13_SRPD67K1-699x699.jpg', 'Mẫu Seiko SRPD67K1 phiên bản dây lưới mạ bạc thời trang nam tính đi kèm với thiết kế dày dặn phần vỏ máy cơ độ dày 13,4mm nổi bật với khả năng chống nước 10ATM.\r\n', 'New'),
(8, 2, 'SEIKO SSB317P1 – NAM – QUARTZ (PIN) – DÂY KIM LOẠI', 5103000, 5003000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2019/10/35_SSB317P1-699x699.jpg', 'Mẫu Seiko SSB317P1 thiết kế trẻ trung nam tính với kiểu dáng 6 kim đi kèm chức năng Chronograph trên nền mặt trắng size 44mm, vẻ ngoài sang trọng với phần dây vỏ kim loại mạ bạc.\r\n', 'New'),
(9, 2, 'SEIKO SRPC67K1 – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY VẢI', 6336000, 6136000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2018/10/64_SRPC67K1-699x699.jpg', 'Mẫu Seiko SRPC67K1 với phiên bản dây đeo chất liệu vải đậm chất thể thao cá tính, đặc điểm nổi trội như phần vỏ viền ngoài tạo hình viền số chữ trắng nổi bật trên tông nền đen mạnh cùng khả năng chịu ', 'New'),
(10, 3, 'CALVIN KLEIN K3M21BZ6 – QUARTZ (PIN) – DÂY KIM LOẠI', 4878000, 4778000, 10, 'Thụy Sĩ', 'https://cdn3.dhht.vn/wp-content/uploads/2020/02/21_K3M21BZ6-699x699.jpg\r\n', 'Mẫu Calvin Klein K3M21BZ6 đơn giản 2 kim phong cách trẻ trung cùng với logo chữ CK được in nổi bật tone vàng hồng trên nền mặt số size 40mm.\r\n', ''),
(11, 3, 'CALVIN KLEIN K9R31CD6 – QUARTZ (PIN) – DÂY CAO SU', 5091000, 5000000, 10, 'Thụy Sĩ', 'https://cdn3.dhht.vn/wp-content/uploads/2020/02/110_K9R31CD6-699x699.jpg', '\"Mẫu Calvin Klein K9R31CD6 phiên bản dây đeo cao su với vẻ ngoài trẻ trung năng động với nền cọc \r\nsố tạo hình dày dặn nổi bật trên phần vỏ viền bezel.\"\r\n', ''),
(12, 3, 'CALVIN KLEIN K8Q316C3 – QUARTZ (PIN) – DÂY DA', 6120000, 6020000, 10, 'Thụy Sĩ', 'https://cdn3.dhht.vn/wp-content/uploads/2020/02/87_K8Q316C3-699x699.jpg\r\n', 'Mẫu Calvin Klein K8Q316C3 phiên bản dây da thời trang kiểu da trơn đơn giản với thiết kế mặt số 3 kim cùng các chi tiết vạch số được phối tone màu vàng hồng.\r\n', ''),
(13, 3, 'CALVIN KLEIN K9Q125Z1  – QUARTZ (PIN) – DÂY KIM LOẠI', 7758000, 7558000, 10, 'Thụy Sĩ', 'https://cdn3.dhht.vn/wp-content/uploads/2020/02/109_K9Q125Z1-699x699.jpg', 'Mẫu Calvin Klein K9Q125Z1 phiên bản kim chỉ đỏ trẻ trung nổi bật trên mặt số vuông size 38mm, vỏ máy pin với thiết kế mỏng cách tân độ dày chỉ 7mm.\r\n', ''),
(14, 4, 'TISSOT T055.417.16.057.00  – QUARTZ (PIN) – DÂY DA', 11702000, 10000000, 10, 'Thụy Sĩ', 'https://cdn3.dhht.vn/wp-content/uploads/2018/03/384_T055.417.16.057.00-1-699x699.jpg', 'Mẫu Tissot T055.417.16.057.00 nổi bật tính năng Chronograph đo thời gian với kiểu dáng đồng hồ 6 kim tạo nên phong cách nam tính lịch lãm đi kèm mẫu dây da đen có vân.', ''),
(15, 4, 'TISSOT T101.451.11.051.00  – QUARTZ (PIN) – DÂY KIM LOẠI', 14512000, 14000000, 10, 'Thụy Sĩ', 'https://cdn3.dhht.vn/wp-content/uploads/2017/07/T101.451.11.051.00-699x699.jpg', 'Đồng hồ nam Tissot T101.207.11.051.00 với thiết kế dành cho nam theo phong cách mạnh mẽ, kim chỉ và vạch số to rõ nổi bật trên nền đen nam tính, kết hợp với dây đeo kim loại màu bạc tạo vẻ sang trọng.', ''),
(16, 4, 'TISSOT T095.417.36.037.00   – QUARTZ (PIN) – DÂY DA', 9344000, 8000000, 10, 'Thụy Sĩ', 'https://cdn3.dhht.vn/wp-content/uploads/2017/09/T095.417.36.037.00-699x699.jpg\r\n', 'Đồng hồ nam Tissot T095.417.17.037.07 với kiểu dáng thể thao, vỏ máy bằng kim loại màu bạc tạo vẻ chắc chắn nam tính, 3 ô phụ với 3 chức năng khác nhau tạo nên vẻ hiện đại, kết hợp với dây đeo vải màu', ''),
(17, 4, 'TISSOT T109.610.36.032.00   – QUARTZ (PIN) – DÂY DA\r\n', 5848000, 4444000, 10, 'Thụy Sĩ', 'https://cdn3.dhht.vn/wp-content/uploads/2019/05/236_T109.610.36.032.00-699x699.jpg', 'Mẫu Tissot T109.610.36.032.00 phiên bản cọc số học trò phối cùng mẫu dây da tone nâu trẻ trung lịch lãm dành cho phái mạnh, vỏ máy vàng hồng sang trọng thiết kế mỏng 6mm.\r\n', ''),
(18, 5, 'ORIENT FAC0000BW0  – AUTOMATIC (TỰ ĐỘNG) – DÂY DA', 7510000, 7110000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2017/12/FAC0000BW0-699x699.jpg\r\n', 'Giản dị của mẫu đồng hồ 3 kim kiểu dáng mỏng của sự tinh tế cùng với sự kết hợp giữa vỏ máy mạ vàng phối cùng mẫu dây da đen tạo nên yếu tố lịch lãm nam tính đầy sang trọng đến từ mẫu Orient FAC0000BW', 'New'),
(19, 5, 'ORIENT OPEN HEART RA-AR0001S10B – AUTOMATIC – \r\n', 11760000, 10060000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2019/04/36_RA-AR0001S10B-699x699.jpg\r\n', 'Mẫu Orient RA-AR0001S10B thiết kế đặc trưng Open Heart với ô chân kính lộ ra 1 phần của bô máy cơ tạo nên vẻ độc đáo trước mặt kính Sapphire.', 'New'),
(20, 5, 'ORIENT FAA02009D9 – AUTOMATIC (TỰ ĐỘNG) – DÂY KIM LOẠI', 8600000, 8000000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2017/05/FAA02009D9-2-699x699.jpg\r\n', 'Đồng hồ nam Orient Mako 2 Pepsi FAA02009D9 với trải nghiệm bộ máy cơ dành cho nam, các vạch số với thiết kế dày dặn nam tính trên nền mặt số với tông màu xanh tạo nên vẻ trẻ trung, ấn tượng với khả nă', 'New'),
(21, 5, 'ORIENT SK RA-AA0B02R19B –  AUTOMATIC \r\n', 7800000, 7000000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2019/07/RA-AA0B02R19B-699x699.jpg\r\n', 'Mẫu Orient RA-AA0B02R19B phiên bản mạ vàng với mẫu kim chỉ nổi bật trên mặt số size 41.7mm đi kèm thiết kế 2 núm vặn điều chỉnh, vỏ máy kim loại mạ bạc kiểu dáng dày dặn của bô máy cơ.', 'New'),
(22, 6, 'CITIZEN C7 NH8390-11X – AUTOMATIC', 8177000, 8000000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2020/10/NH8390-11X-699x699.jpg', 'Mẫu Citizen C7 NH8390-11X phiên bản da nâu trơn lịch lãm trẻ trung kết hợp cùng thiết kế đơn giản 3 kim trên nền mặt số size 40mm phối tone màu đỏ nổi bật.', ''),
(23, 6, 'CITIZEN BI5054-53L – QUARTZ (PIN) – DÂY KIM LOẠI', 4270000, 4000000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2018/03/177_BI5054-53L-699x699.jpg\r\n', 'Mẫu Citizen BI5054-53L không khỏi ngước nhìn khi mang trên mình một vẻ ngoài mặt số tông nền xanh của sự trẻ trung kèm theo vạch số tạo hình dày dặn đầy vẻ nam tính.', ''),
(24, 6, 'CITIZEN BI5072-01A  – QUARTZ (PIN) – MẶT SỐ 40 MM, LỊCH NGÀY, CHỐNG NƯỚC 5 ATM', 3685000, 3600000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2018/09/212_BI5072-01A-699x699.jpg\r\n', 'Ẩn chứa dưới vẻ ngoài giản dị của mẫu Citizen BI5072-01A với mẫu dây da lịch lãm tông màu nâu, các chi tiết vạch số tạo hình mỏng chứa đựng sự tinh tế sang trọng khi được bao phủ tông màu vàng nổi bật', ''),
(25, 6, 'CITIZEN NH8350-59L – AUTOMATIC (TỰ ĐỘNG) – DÂY KIM LOẠI', 5785000, 5005000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2017/11/NH8350-59L.jpg\r\n', 'Đồng hồ nam Citizen NH8350-59L với thiết kế dành cho nam phong cách thời trang, kim chỉ và vạch số to rõ nổi bật trên nền xanh trẻ trung, ô lịch ngày lịch thứ vị trí 3 giờ, phối cùng dây đeo kim loại ', ''),
(26, 6, 'CITIZEN BI5000-87L –QUARTZ (PIN) – DÂY KIM LOẠI', 4285000, 4005000, 10, 'Nhật Bản', 'https://cdn3.dhht.vn/wp-content/uploads/2018/11/181_BI5000-87L-699x699.jpg\r\n', 'Giản dị và sang trọng với mẫu Citizen BI5000-87L phiên bản nền mặt số xanh thời trang với kiểu dáng 3 kim cùng với các chi tiết đồng hồ tạo nét mỏng của sự tinh tế trẻ trung dành cho phái mạnh.\r\n', ''),
(27, 7, 'FOSSIL FS5325  – QUARTZ (PIN) – DÂY DA', 3210000, 3000000, 10, 'Mỹ', 'https://cdn3.dhht.vn/wp-content/uploads/2017/08/12_FS5325.jpg', 'Mẫu Fossil FS5325 với nền mặt số được phối tông màu xanh mang lại làng gió mới tạo nên vẻ thời trang cho phái nam, phối cùng bộ dây đeo chất liệu bằng da nâu trơn tăng thêm vẻ trẻ trung.', 'Hot'),
(28, 8, 'CANDINO C4429/3  – QUARTZ (PIN) – DÂY DA ', 8910000, 8010000, 10, 'Thụy Sĩ', 'https://cdn3.dhht.vn/wp-content/uploads/2021/03/15_C4429-3-699x699.jpg', 'Mẫu Candino C4429/3 phiên bản Chronograph thiết kế 3 núm điều chỉnh tính năng đo thời gian với kiểu dáng đồng hồ 6 kim tạo nên vẻ thời trang nam tính.\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `numberPhone` int(50) NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `address`, `numberPhone`, `email`) VALUES
(1, 'user1', '$2y$10$AYWR0xY9FBFEBoTFHpjwNuh9f9Qv96TrO/z3ufZyG4rDst11N0IYS', 'Le Lu Thien Nhan', '16 TVN, LT, TD, HCM', 902485213, 'leluthiennhan31@gmail.com'),
(2, 'tester2', '$2y$10$Jr/ZciYyk4E9LNDP9UG0N.xK.R49E5IJxIPhmzzYVvIQ6/aqLkWcu', 'Lê Quan Nghĩa', 'XX, YY , ZZ', 123456, 'nghia@gmail.com'),
(8, 'testerupdate', '$2y$10$hn94Hs4IoFvRA.Gju3t.Z.ye.8ZclzbfgiCC4DFsiOO0sIIEE8hLG', 'Updater', 'XXx, YY , ZZ', 1234567, 'updater@gmail.com'),
(13, 'AAA', '$2y$10$HJ3L.tPkr8SWVtdJ3O7z3uCJzmMGHB1qV6VxMsrM05B819gmlLdGG', '', '', 0, ''),
(14, 'tester22', '$2y$10$UUwfgAe8s.w4T3GlN3HmUuAC792G.vPBC6V8cN6uOL9zAD74eIwi6', 'The Tester', 'NO.22', 22, '123@gmail.com'),
(15, 'tester23', '$2y$10$qfRUbpkdBXGXsYL/tbQsk.bQHlwoCUNYidihCfJSdodf07b2mwX0y', 'The Tester', 'NO.223', 223, '1233@gmail.com'),
(16, 'tester24', '$2y$10$0vLXBD8ECCuMHNc3aY/lhOzZCI5EKILVzHacSXpNd/qA3kYiOHw2i', 'U9d9jNz', '', 123456789, 'aaa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_order`
--
ALTER TABLE `dt_order`
  ADD KEY `productID` (`productID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brandID` (`brandID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dt_order`
--
ALTER TABLE `dt_order`
  ADD CONSTRAINT `dt_order_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dt_order_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dt_order_ibfk_3` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brandID`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
