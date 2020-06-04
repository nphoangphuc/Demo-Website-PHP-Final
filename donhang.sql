-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2020 at 02:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `MA` varchar(999) NOT NULL,
  `USERNAME` varchar(999) NOT NULL,
  `PASSWORD` varchar(999) NOT NULL,
  `EMAIL` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`MA`, `USERNAME`, `PASSWORD`, `EMAIL`) VALUES
('9619', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'nphoangphuc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

DROP TABLE IF EXISTS `chitietdathang`;
CREATE TABLE IF NOT EXISTS `chitietdathang` (
  `SOHOADON` varchar(100) NOT NULL,
  `MAHANG` int(11) NOT NULL,
  `GIABAN` float DEFAULT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `MUCGIAMGIA` float DEFAULT NULL,
  PRIMARY KEY (`SOHOADON`,`MAHANG`),
  KEY `MAHANG` (`MAHANG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdathang`
--

INSERT INTO `chitietdathang` (`SOHOADON`, `MAHANG`, `GIABAN`, `SOLUONG`, `MUCGIAMGIA`) VALUES
('10148', 3, 220, 2000, 1),
('10148', 4, 16.5, 30, 2),
('10148', 9, 13.2, 20, 1),
('10150', 2, 44, 22, 3),
('10150', 4, 16.5, 10, 2),
('10156', 8, 68.75, 20, 4),
('10157', 3, 2.2, 4, 3),
('10157', 4, 16.5, 50, 1),
('10159', 1, 253.55, 30, 1),
('10159', 7, 5.2, 2, 2),
('10162', 1, 253.55, 5, 1),
('10162', 2, 44, 10, 3),
('10172', 5, 1.1, 25, 4),
('10175', 8, 68.75, 20, 1),
('10183', 4, 16.5, 12, 2),
('10183', 5, 1.1, 20, 1),
('10196', 4, 16.5, 12, 1),
('10207', 5, 1.1222, 15, 1.1),
('2020021011', 1, 230.5, 1, 0),
('2020021011', 3, 2, 2, 0),
('2020021011', 4, 15, 1, 0),
('2020021011', 5, 1, 1, 0),
('2020021011', 7, 5, 2, 0),
('20200210121255', 1, 230.5, 1, 0),
('20200210121255', 7, 5, 1, 0),
('20200210122255', 1, 230.5, 1, 0),
('20200210122255', 7, 5, 2, 0),
('20200210122401', 1, 230.5, 1, 0),
('20200210122401', 7, 5, 2, 0),
('20200210122515', 1, 230.5, 1, 0),
('20200210122515', 7, 5, 2, 0),
('20200210122546', 1, 230.5, 1, 0),
('20200210122546', 7, 5, 2, 0),
('20200216081612', 1, 230.5, 1, 0),
('20200216081612', 3, 2, 1, 0),
('20200218164200', 1, 230.5, 1, 0),
('20200218164200', 33, 333, 1, 0),
('20200218165126', 1, 230.5, 1, 0),
('20200218165126', 33, 333, 1, 0),
('20200218165216', 1, 230.5, 1, 0),
('20200218165344', 33, 333, 1, 0),
('20200219141217', 3, 2, 1, 0),
('222', 123, 22222, 212, 22);

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhkhuyenmai`
--

DROP TABLE IF EXISTS `chuongtrinhkhuyenmai`;
CREATE TABLE IF NOT EXISTS `chuongtrinhkhuyenmai` (
  `MACHUONGTRINH` varchar(555) NOT NULL,
  `TENCHUONGTRINH` text NOT NULL,
  `NOIDUNG` text NOT NULL,
  `THOIGIANBATDAU` date NOT NULL,
  `THOIGIANKETTHUC` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuongtrinhkhuyenmai`
--

INSERT INTO `chuongtrinhkhuyenmai` (`MACHUONGTRINH`, `TENCHUONGTRINH`, `NOIDUNG`, `THOIGIANBATDAU`, `THOIGIANKETTHUC`) VALUES
('12', 'KM12', 'CHƯƠNG TRÌNH KHUYẾN MÃI 1', '2020-12-10', '2020-12-20'),
('2', 'KM2', 'CHƯƠNG TRÌNH KHUYẾN MÃI 2', '2020-10-19', '2020-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

DROP TABLE IF EXISTS `dondathang`;
CREATE TABLE IF NOT EXISTS `dondathang` (
  `SOHOADON` varchar(100) NOT NULL,
  `MAKHACHHANG` varchar(10) DEFAULT NULL,
  `MANHANVIEN` int(11) DEFAULT NULL,
  `NGAYDATHANG` date DEFAULT NULL,
  `NGAYGIAOHANG` date DEFAULT NULL,
  `NGAYCHUYENHANG` date DEFAULT NULL,
  `NOIGIAOHANG` varchar(50) DEFAULT NULL,
  `TRANGTHAIDONHANG` int(11) NOT NULL,
  PRIMARY KEY (`SOHOADON`),
  KEY `MAKHACHHANG` (`MAKHACHHANG`),
  KEY `MANHANVIEN` (`MANHANVIEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`SOHOADON`, `MAKHACHHANG`, `MANHANVIEN`, `NGAYDATHANG`, `NGAYGIAOHANG`, `NGAYCHUYENHANG`, `NOIGIAOHANG`, `TRANGTHAIDONHANG`) VALUES
('10148', 'FISC', 1, '2001-10-04', '2020-02-11', '2020-02-04', 'TPHCM', 1),
('10150', 'HUNSA', 4, '2010-03-04', '0002-02-04', NULL, NULL, 0),
('10156', 'FISC', 4, '2010-12-12', '0002-02-04', NULL, NULL, 0),
('10157', 'SAFICO', 2, '2010-10-04', '0002-02-04', NULL, NULL, 0),
('10158', 'HUNSA', 5, '2010-11-04', '0002-02-04', NULL, NULL, 0),
('10159', 'COMECO', 8, '2010-04-04', '0002-02-04', NULL, NULL, 0),
('10160', 'THADACO', 11, '0000-00-00', '0002-02-04', NULL, NULL, 0),
('10162', 'TRANACO', 7, '0000-00-00', '0002-02-04', NULL, NULL, 0),
('10163', 'TRACODI', 3, '2010-02-04', '0002-02-04', NULL, NULL, 0),
('10166', 'SJC', 9, '0000-00-00', '0002-02-04', NULL, NULL, 0),
('10172', 'TAFACO', 9, '2010-12-04', '0002-02-04', NULL, NULL, 0),
('10175', 'TRANACO', 9, '2010-03-04', '0002-02-04', NULL, NULL, 0),
('10177', 'COMECO', 2, '0000-00-00', '0002-02-04', NULL, NULL, 0),
('10183', 'SAFICO', 2, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10186', 'TRACODI', 11, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10202', 'COMECO', 4, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10207', 'SJC', 2, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10208', 'TRACODI', 8, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10210', 'SJC', 1, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10214', 'HUNSA', 6, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10221', 'TRACODI', 11, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10223', 'SJC', 8, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10224', 'SAFICO', 7, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10225', 'COMECO', 2, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10226', 'FAHASA', 3, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('10227', 'SAFICO', 8, '2010-01-04', '2020-01-15', '2020-01-01', '', 0),
('10228', 'HUNSA', 2, '2010-01-04', '2020-01-21', '2020-01-13', 'TPHCM', 0),
('10230', 'HUNSA', 2, '2010-01-04', '0002-02-04', NULL, NULL, 0),
('2020021011', 'CINOTEC', 11, '2020-02-19', '2020-02-20', '2020-02-19', 'TPHCM', 0),
('20200210121244', 'CINOTEC', 11, '2020-02-26', '2020-02-20', '2020-02-28', 'TPHCM', 0),
('20200210121638', 'CINOTEC', 11, '2020-02-20', '2020-02-20', '2020-02-24', 'TPHCM', 0),
('20200210121931', 'CINOTEC', 11, '2020-02-19', '2020-02-20', '2020-02-26', 'TPHCM', 0),
('20200210122246', 'CINOTEC', 11, '2020-02-12', '2020-02-20', '2020-02-20', 'TPHCM', 0),
('20200210122354', 'CINOTEC', 11, '2020-02-12', '2020-02-20', '2020-02-26', 'TPHCM', 0),
('20200210122515', 'CINOTEC', 11, '2020-02-12', '2020-02-20', '2020-02-26', 'TPHCM', 0),
('20200210122546', 'CINOTEC', 11, '2020-02-04', '2020-02-20', '2020-02-11', 'TPHCM', 0),
('20200216081332', 'CINOTEC', 11, '2020-02-04', '2020-02-26', '2020-02-16', 'TPHCM', 0),
('20200216081514', 'CINOTEC', 11, '2020-02-04', '2020-02-26', '2020-02-16', 'TPHCM', 0),
('20200216081612', 'CINOTEC', 11, '2020-02-04', '2020-02-26', '2020-02-16', 'TPHCM', 0),
('20200218164135', 'CINOTEC', 1, '2020-02-18', '2020-02-28', '2020-02-12', 'TPHCM', 2),
('20200218164200', 'CINOTEC', 1, '2020-02-18', '2020-02-28', '2020-02-12', 'TPHCM', 2),
('20200218165126', 'CINOTEC', 1, '2020-02-18', '2020-02-28', '2020-02-11', 'TPHCM', 2),
('20200218165216', 'CINOTEC', 1, '2020-02-18', '2020-02-28', '2020-02-19', 'TPHCM', 2),
('20200218165312', 'CINOTEC', 1, '2020-02-18', '2020-02-28', '2020-02-19', 'TPHCM', 2),
('20200218165344', 'CINOTEC', 1, '2020-02-18', '2020-02-28', '2020-02-12', 'TPHCM', 1),
('20200219141217', 'PHUC', 1, '2020-02-19', '2020-02-19', '2020-02-12', 'TPHCM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `MAKHACHHANG` varchar(10) NOT NULL,
  `TENCONGTY` varchar(35) DEFAULT NULL,
  `TENGIAODICH` varchar(10) DEFAULT NULL,
  `DIACHI` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `DIENTHOAI` varchar(12) DEFAULT NULL,
  `FAX` varchar(12) DEFAULT NULL,
  `USER` varchar(100) NOT NULL,
  `PASS` varchar(100) NOT NULL,
  PRIMARY KEY (`MAKHACHHANG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKHACHHANG`, `TENCONGTY`, `TENGIAODICH`, `DIACHI`, `EMAIL`, `DIENTHOAI`, `FAX`, `USER`, `PASS`) VALUES
('11', '11', '22', '33', '111@gmail.com', '323', '2323', 'PHUC', '202cb962ac59075b964b07152d234b70'),
('12', '2277', '777', '777', 'aaa@gmail.com', '7772', '777', '77', 'f1c1592588411002af340cbaedd6fc33'),
('333', '33333', '33333', '3333', '333@gmail.com', '333', '212', '1', 'd41d8cd98f00b204e9800998ecf8427e'),
('3333', '33333', '33333', '33333', '333@gmail.com', '3333', '333333', '33', '182be0c5cdcd5072bb1864cdee4d3d6e'),
('44', '44', '44', '44', '44@gmail.com', '44', '44', '44', 'f7177163c833dff4b38fc8d2872f1ec6'),
('555', '55', '5555', '555', '333@gmail.com', '666', '66', '6', '3295c76acbf4caaed33c36b1b5fc2cb1'),
('CINOTEC', 'ĐIỆN TOÁN SÀI GÒ', '', '43 YẾT KIÊU P6 Q3', '222222@gmail.com', '', '', 'CINOTEC', '123456'),
('COMECO', 'VẬT TƯ THIẾT BỊ GTVT', NULL, '226 THUẬN KIỀU Q11', 'COMECO@gmail.com', '() 8456781', NULL, 'COMECO', '1234567'),
('FAHASA', 'PHÁT HÀNH SÁCH SÀI GÒ', NULL, '12 THUẬN KIỀU Q5', 'FAHASA@gmail.com', '() 8452792', NULL, 'FAHASA', '12345'),
('FISC', 'DỊCH VỤ ĐẦU TƯ NƯỚC NGOÀI', NULL, '31 TRƯƠNG ĐỊNH P6 Q1', 'nphoangphuc@gmail.com', ' ', NULL, 'FISC', '12345678'),
('HUNSA', 'HỪNG SÁNG', NULL, '175 LÝ THƯỜNG KIỆT', NULL, '() 5465478', NULL, '', ''),
('LIXCO', 'BỘT GIẶT LIX', NULL, '79 BÀN CỜ P3 Q5', NULL, '() 8952187', NULL, '', ''),
('SAFICO', 'THỦY SẢN XUẤT KHẨU', NULL, '47 BÃI SẬY P1 Q11', NULL, '', NULL, '', ''),
('SJC', 'VÀNG BẠC ĐÁ QUÝ TPHCM', NULL, '350 CÁCH MẠNG THÁNG 8 P12 Q3', NULL, '() 8543543', NULL, '', ''),
('TAFACO', 'THƯƠNG MẠI TẤN PHÁT', NULL, '4 TRẦN PHÚ P4 Q5', NULL, '() 8754875', NULL, '', ''),
('THADACO', 'THƯƠNG MẠI THÀNH ĐẠT', NULL, '6E BÌNH AN Q5', NULL, '() 5465454', NULL, '', ''),
('TRACODI', 'ĐẦU TƯ PHÁT TRIỂN GTVT', NULL, '343 NHẬT TẢO Q10', NULL, '() 5321321', NULL, '', ''),
('TRANACO', 'DỊCH VỤ VẬN TẢI Q3', NULL, '156 LÊ ĐẠI HÀNH P7 Q10', NULL, '() 8654635', NULL, '', ''),
('VIETTIE', 'CTY DỆT MAY VIỆT TIẾ', NULL, '24 KHU A - CN TÂN TẠO', NULL, '() 4565670', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

DROP TABLE IF EXISTS `loaihang`;
CREATE TABLE IF NOT EXISTS `loaihang` (
  `MALOAIHANG` varchar(3) NOT NULL,
  `TENLOAIHANG` varchar(50) DEFAULT NULL,
  `HINH` varchar(100) NOT NULL,
  PRIMARY KEY (`MALOAIHANG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`MALOAIHANG`, `TENLOAIHANG`, `HINH`) VALUES
('BK', 'BÁNH KẸO 32', '../uploads/BK_keo3.jpg '),
('TC', 'TRÁI CÂY', '../uploads/TC_keo43.jpg '),
('TP', 'THỰC PHẨM', '../uploads/TP_keo3 (2).jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

DROP TABLE IF EXISTS `mathang`;
CREATE TABLE IF NOT EXISTS `mathang` (
  `MAHANG` int(11) NOT NULL AUTO_INCREMENT,
  `TENHANG` varchar(50) DEFAULT NULL,
  `MACONGTY` varchar(10) DEFAULT NULL,
  `MALOAIHANG` varchar(3) DEFAULT NULL,
  `SOLUONG` float DEFAULT NULL,
  `DONVITINH` varchar(7) DEFAULT NULL,
  `GIAHANG` float DEFAULT NULL,
  `HINH` varchar(100) NOT NULL,
  PRIMARY KEY (`MAHANG`),
  KEY `MACONGTY` (`MACONGTY`,`MALOAIHANG`),
  KEY `MALOAIHANG` (`MALOAIHANG`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`MAHANG`, `TENHANG`, `MACONGTY`, `MALOAIHANG`, `SOLUONG`, `DONVITINH`, `GIAHANG`, `HINH`) VALUES
(1, 'RƯỢU222', 'DOM', 'BK', 4, 'CHAI', 230.5, '../uploads/BK_tao.jpg '),
(2, 'GIA VỊ', 'HEC', 'TP', 2, 'THÙNG', 40, '../uploads/TP_giavi.jpg '),
(3, 'BÁNH KEM', 'HEC', 'BK', 15, 'CÁI', 2, '../uploads/BK_banhkem.jpg '),
(4, 'BƠ', 'HEC', 'BK', 5, 'KG', 15, '../uploads/BK_bo.jpg '),
(5, 'BÁNH MÌ', 'HEC', 'BK', 20, 'CÁI', 1, '../uploads/BK_banh mi.jpg '),
(6, 'NEM', 'DOM', 'TP', 20, 'KG', 10, '../uploads/TP_nem.jpg '),
(7, 'TÁO', 'DOM', 'TC', 28, 'KG', 5, '../uploads/TC_tao.jpg '),
(8, 'CÁ HỘP', 'HEC', 'TP', 5, 'THÙNG', 62.5, '../uploads/TP_cahop.jpg '),
(9, 'KẸO', 'DOM', 'BK', 10, 'THÙNG', 12, '../uploads/BK_keo2.jpg '),
(10, 'GẠO', 'DOM', 'TP', 50, 'KG', 2, '../uploads/TP_gao.jpg '),
(11, 'NẾP', 'DOM', 'TP', 60, 'KG', 3, '../uploads/TP_nep.jpg '),
(13, 'Hàng', 'aaa', 'BK', 68, 'KG', 12, '../uploads/BK_aosomi.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

DROP TABLE IF EXISTS `nhacungcap`;
CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `MACONGTY` varchar(10) NOT NULL,
  `TENCONGTY` varchar(50) DEFAULT NULL,
  `TENGIAODICH` varchar(50) DEFAULT NULL,
  `DIACHI` varchar(50) DEFAULT NULL,
  `DIENTHOAI` varchar(12) DEFAULT NULL,
  `FAX` varchar(12) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`MACONGTY`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`MACONGTY`, `TENCONGTY`, `TENGIAODICH`, `DIACHI`, `DIENTHOAI`, `FAX`, `EMAIL`) VALUES
('DOM', 'CÔNG TY THỰC PHẨM', 'DOMEC', '23 NGUYỄN TRỌNG TUYỂ', '3456678', NULL, NULL),
('HEC', 'CÔNG TY TRÁCH NHIỆM HỮU HẠN LAN HÀ', 'HECCO', '12 NGUYỄN THÁI SƠ', '4554678', NULL, NULL),
('VIETTIE', 'CÔNG TY MAY VIỆT TIẾ', 'VIETEC', 'KHU A - CN TÂN TẠO', '4574789', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `MANHANVIEN` int(11) NOT NULL AUTO_INCREMENT,
  `HO` varchar(20) DEFAULT NULL,
  `TEN` varchar(50) DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `NGAYLAMVIEC` date DEFAULT NULL,
  `DIACHI` varchar(50) DEFAULT NULL,
  `DIENTHOAI` varchar(12) DEFAULT NULL,
  `LUONGCOBAN` float DEFAULT NULL,
  `PHUCAP` float DEFAULT NULL,
  PRIMARY KEY (`MANHANVIEN`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MANHANVIEN`, `HO`, `TEN`, `NGAYSINH`, `NGAYLAMVIEC`, `DIACHI`, `DIENTHOAI`, `LUONGCOBAN`, `PHUCAP`) VALUES
(13, 'NGUYỄN LỆ', 'NGA', '1964-01-01', '1994-12-01', '13 HÙNG VƯƠNG P4 Q5', '456456456', 543654, 99999),
(14, 'HÀ VĨNH', 'PHÁT', '1979-02-02', '2002-02-02', '81 ĐỒNG KHỞI Q1', '()8767461', NULL, NULL),
(15, 'TRẦN TUYẾT', 'OANH', '1967-02-02', '1991-02-02', '45 LÊ QUÝ ĐÔN Q3', '()5465465', NULL, NULL),
(16, 'NGUYỄN KIM', 'NGỌC', '1980-02-02', '2007-02-02', '187 HẬU GIANG P5 Q6', '()554654', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

DROP TABLE IF EXISTS `products_list`;
CREATE TABLE IF NOT EXISTS `products_list` (
  `id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` text NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_image` varchar(60) NOT NULL,
  `product_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`id`, `product_name`, `product_desc`, `product_code`, `product_image`, `product_price`) VALUES
(1, 'Cool T-shirt', 'Cool T-shirt, Cotton Fabric. Wash in normal water with mild detergent.', 'TSH1', 'tshirt-1.jpg', '8.50'),
(2, 'HBD T-Shirt', 'Cool Happy Birthday printed T-shirt.Crafted from light, breathable cotton.', 'TSH2', 'tshirt-2.jpg', '7.40'),
(3, 'Survival of Fittest', 'Yellow t-shirt makes the perfect addition to your casual wardrobe.', 'TSH3', 'tshirt-3.jpg', '9.50'),
(4, 'Love Hate T-shirt', 'Stylish and trendy, this crew neck short sleeved t-shirt is made with 100% pure cotton.', 'TSH4', 'tshirt-4.jpg', '10.80'),
(1, 'Cool T-shirt', 'Cool T-shirt, Cotton Fabric. Wash in normal water with mild detergent.', 'TSH1', 'tshirt-1.jpg', '8.50'),
(2, 'HBD T-Shirt', 'Cool Happy Birthday printed T-shirt.Crafted from light, breathable cotton.', 'TSH2', 'tshirt-2.jpg', '7.40'),
(3, 'Survival of Fittest', 'Yellow t-shirt makes the perfect addition to your casual wardrobe.', 'TSH3', 'tshirt-3.jpg', '9.50'),
(4, 'Love Hate T-shirt', 'Stylish and trendy, this crew neck short sleeved t-shirt is made with 100% pure cotton.', 'TSH4', 'tshirt-4.jpg', '10.80');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `gia` float NOT NULL DEFAULT 0,
  `mota` varchar(200) NOT NULL,
  PRIMARY KEY (`masp`,`tensanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensanpham`, `gia`, `mota`) VALUES
(1, 'dien thoai', 10000000, '122'),
(2, 'laptop', 10000000, 'lap top');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
