-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 04:41 PM
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
(4, 'Tissot');

-- --------------------------------------------------------

--
-- Table structure for table `dt_order`
--

CREATE TABLE `dt_order` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dt_order`
--

INSERT INTO `dt_order` (`orderID`, `productID`, `quantity`, `price`) VALUES
(1, 1, 1, 1000000);

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
  `username` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `time` date NOT NULL,
  `paymentBy` int(11) NOT NULL,
  `is_success` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `userID`, `orderID`, `username`, `time`, `paymentBy`, `is_success`) VALUES
(1, 1, 1, 'Le Lu Thien Nhan', '2022-10-09', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `productName` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `price` float NOT NULL,
  `amount` int(11) NOT NULL,
  `origin` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brandID`, `productName`, `price`, `amount`, `origin`, `image`, `description`) VALUES
(1, 1, 'Product Test', 1000000, 5, 'Việt Nam', 'image/test.png', 'Sản phẩm thử'),
(2, 1, 'Casio nam EQS', 4534000, 10, 'Nhật Bản', 'img/casio nam eqs.jpg', 'Phong cách thiết kế ấn tượng nhờ vào lớp viền đen nổi bật ngay trên mặt số, bên dưới nền là bộ vỏ bạc trắng khiến sản phẩm trở thành chiếc đồng hồ nam cứng cáp\r\n'),
(3, 1, 'Casio BEM\r\n', 2996000, 10, 'Nhật Bản', 'img/casio bem.jpg', 'Đồng hồ Casio BEM-150D-1AVDF có vỏ và dây đeo kim loại màu bạc, nền số màu đen cùng kim chỉ và vạch số được dát mỏng nổi bât, còn có ô lịch ngày vị trí 12h, mang lại cho phái mạnh sự thanh lịch.\r\n'),
(4, 1, 'Casio SGW', 2791000, 10, 'Nhật Bản', 'img/casio sgw.jpg', 'Đồng hồ Casio SGW-400H-1B2VDR có viền kim loại bằng nhôm tinh tế, dây đeo cao su màu đen cá tính, mặt số hiện đại với sự kết hợp giữa kim chỉ và số điện tử tạo nên phong cách thể thao cá tính.\r\n'),
(5, 1, 'Casio GBA', 5436000, 10, 'Nhật Bản', 'img/casio gba.jpg', 'Đồng hồ G-Shock GBA-400-1ADR có thiết kế thời trang cá tính năng động, với cấu tạo độc đáo khi mặt đồng hồ được làm nổi ba chiều đem đến nhiều đặc tính, đèn LED có độ chiếu sáng cao giúp nhìn rõ trong'),
(6, 2, 'Seiko SPC\r\n', 5346000, 10, 'Nhật Bản', 'img/seiko spc.jpg', 'Đồng hồ thời trang cao cấp Seiko SPC087P1 mang phong cách thanh lịch cho nam giới, mặt nền trắng kết hợp với các chi tiết mạ vàng, dây da chính hãng có vân.\r\n'),
(7, 2, 'Seiko SRP', 7929000, 10, 'Nhật Bản', 'img/seiko srp.jpg', 'Mẫu Seiko SRPD67K1 phiên bản dây lưới mạ bạc thời trang nam tính đi kèm với thiết kế dày dặn phần vỏ máy cơ độ dày 13,4mm nổi bật với khả năng chống nước 10ATM.\r\n'),
(8, 2, 'Seiko SSB', 5103000, 10, 'Nhật Bản', 'img/seiko ssb.jpg', 'Mẫu Seiko SSB317P1 thiết kế trẻ trung nam tính với kiểu dáng 6 kim đi kèm chức năng Chronograph trên nền mặt trắng size 44mm, vẻ ngoài sang trọng với phần dây vỏ kim loại mạ bạc.\r\n'),
(9, 2, 'Seiko SRPC', 6336000, 10, 'Nhật Bản', 'img/seiko srpc.jpg', 'Mẫu Seiko SRPC67K1 với phiên bản dây đeo chất liệu vải đậm chất thể thao cá tính, đặc điểm nổi trội như phần vỏ viền ngoài tạo hình viền số chữ trắng nổi bật trên tông nền đen mạnh cùng khả năng chịu '),
(10, 3, 'Calvin Klein  K3M', 4878000, 10, 'Thụy Sĩ', 'img/ck k3m.jpg', 'Mẫu Calvin Klein K3M21BZ6 đơn giản 2 kim phong cách trẻ trung cùng với logo chữ CK được in nổi bật tone vàng hồng trên nền mặt số size 40mm.\r\n'),
(11, 3, 'Calvin Klein  K9R', 5091000, 10, 'Thụy Sĩ', 'img/ck k9r.jpg', '\"Mẫu Calvin Klein K9R31CD6 phiên bản dây đeo cao su với vẻ ngoài trẻ trung năng động với nền cọc \r\nsố tạo hình dày dặn nổi bật trên phần vỏ viền bezel.\"\r\n'),
(12, 3, 'Calvin Klein K8Q\r\n', 6120000, 10, 'Thụy Sĩ', 'img/ck k3m.jpg', 'Mẫu Calvin Klein K8Q316C3 phiên bản dây da thời trang kiểu da trơn đơn giản với thiết kế mặt số 3 kim cùng các chi tiết vạch số được phối tone màu vàng hồng.\r\n'),
(13, 3, 'Calvin Klein K9Q', 7758000, 10, 'Thụy Sĩ', 'img/ck k9q.jpg', 'Mẫu Calvin Klein K9Q125Z1 phiên bản kim chỉ đỏ trẻ trung nổi bật trên mặt số vuông size 38mm, vỏ máy pin với thiết kế mỏng cách tân độ dày chỉ 7mm.\r\n'),
(14, 4, 'Tissot T055', 11702000, 10, 'Thụy Sĩ', 'img/tissot t055.jpg', 'Mẫu Tissot T055.417.16.057.00 nổi bật tính năng Chronograph đo thời gian với kiểu dáng đồng hồ 6 kim tạo nên phong cách nam tính lịch lãm đi kèm mẫu dây da đen có vân.'),
(15, 4, 'Tissot T101', 14512000, 10, 'Thụy Sĩ', 'img/tissot t101.jpg', 'Đồng hồ nam Tissot T101.207.11.051.00 với thiết kế dành cho nam theo phong cách mạnh mẽ, kim chỉ và vạch số to rõ nổi bật trên nền đen nam tính, kết hợp với dây đeo kim loại màu bạc tạo vẻ sang trọng.'),
(16, 4, 'Tissot T095', 9344000, 10, 'Thụy Sĩ', 'img/tissot t095.jpg', 'Đồng hồ nam Tissot T095.417.17.037.07 với kiểu dáng thể thao, vỏ máy bằng kim loại màu bạc tạo vẻ chắc chắn nam tính, 3 ô phụ với 3 chức năng khác nhau tạo nên vẻ hiện đại, kết hợp với dây đeo vải màu'),
(17, 4, 'Tissot T109', 5848000, 10, 'Thụy Sĩ', 'img/tissot t109.jpg', 'Mẫu Tissot T109.610.36.032.00 phiên bản cọc số học trò phối cùng mẫu dây da tone nâu trẻ trung lịch lãm dành cho phái mạnh, vỏ máy vàng hồng sang trọng thiết kế mỏng 6mm.\r\n');

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
(1, 'user1', '123', 'Le Lu Thien Nhan', '16 TVN, LT, TD, HCM', 902485213, 'leluthiennhan31@gmail.com'),
(2, 'tester2', '123', 'Lê Quan Nghĩa', 'XX, YY , ZZ', 123456, 'nghia@gmail.com'),
(8, 'testerupdate', '123', 'Updater', 'XXx, YY , ZZ', 1234567, 'updater@gmail.com');

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
  ADD KEY `orderID` (`orderID`),
  ADD KEY `productID` (`productID`);

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
  ADD KEY `userID` (`userID`),
  ADD KEY `orderID` (`orderID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dt_order`
--
ALTER TABLE `dt_order`
  ADD CONSTRAINT `dt_order_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `dt_order_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brandID`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
