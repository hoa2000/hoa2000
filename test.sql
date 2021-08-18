-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 08:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_brand`
--

CREATE TABLE `tb_brand` (
  `id_brand` int(10) NOT NULL,
  `ten` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `ghichu` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `trangthai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tb_brand`
--

INSERT INTO `tb_brand` (`id_brand`, `ten`, `img`, `ghichu`, `trangthai`) VALUES
(1, 'Rolex', '', '', 0),
(2, 'casio', '', '', 1),
(3, 'CITIZEN', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitiet_hoadon`
--

CREATE TABLE `tb_chitiet_hoadon` (
  `id_ct_hoadon` int(5) NOT NULL,
  `id_hoadon` int(5) NOT NULL,
  `id_sp` int(5) NOT NULL,
  `so_luong` int(5) NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hoadon`
--

CREATE TABLE `tb_hoadon` (
  `id_hd` int(10) NOT NULL,
  `id_kh` int(10) NOT NULL,
  `ngay_dat` date NOT NULL,
  `ngay_nhan` date NOT NULL,
  `ghi_chu` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `trang_thai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_loai`
--

CREATE TABLE `tb_loai` (
  `id_loai` int(10) NOT NULL,
  `Ten_loai` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `ghichu` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tb_loai`
--

INSERT INTO `tb_loai` (`id_loai`, `Ten_loai`, `ghichu`, `img`) VALUES
(0, 'Đồng hồ nữ', '', ''),
(1, 'Đồng hồ nam', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `MaSP` int(30) NOT NULL,
  `TenSP` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `img_1` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `img_2` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `Gia` float NOT NULL,
  `MoTa` varchar(3000) COLLATE utf8_vietnamese_ci NOT NULL,
  `loai` int(10) NOT NULL,
  `So_luong` int(3) NOT NULL,
  `content` int(3) NOT NULL,
  `sale` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `hot` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`MaSP`, `TenSP`, `img_1`, `img_2`, `Gia`, `MoTa`, `loai`, `So_luong`, `content`, `sale`, `brand`, `hot`) VALUES
(1, 'BIG BANG MXM18 SANG BLEU 39', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/21-480x480.jpg', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/product-16_1024x1024-480x480.jpg', 739370000, 'Floating like a balloon and as blue as the cabochon safely nestled in its side, the Ballon Bleu watch by Cartier adds a dash of elegance to male and female wrists alike. Roman numerals are guided on their path by a deep blue winding mechanism. With the convex curves of the case, guilloché dial, sword-shaped hands, and polished or satin-finish links of the bracelet…the Ballon Bleu watch by Cartier floats through the world of Cartier watchmaking.\r\nBallon Bleu de Cartier watch.\r\nMechanical movement with automatic winding.\r\nSteel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial, Roman numerals, blued-steel sword-shaped hands.\r\nSapphire crystal.\r\nSteel bracelet.\r\nCase dimensions diameter: 33 mm.\r\nThickness: 9.96 mm.\r\nWater-resistant to 3 bar (approx. 30 meters/100 feet).', 1, 0, 1, 0, 1, 0),
(2, 'BULOVA CORPORATION AUTOMATIC MEN’S WATCH 49MM', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/product-11_large-480x480.jpg', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/product-25_large-480x480.jpg', 14000000, 'Floating like a balloon and as blue as the cabochon safely nestled in its side, the Ballon Bleu watch by Cartier adds a dash of elegance to male and female wrists alike. Roman numerals are guided on their path by a deep blue winding mechanism. With the convex curves of the case, guilloché dial, sword-shaped hands, and polished or satin-finish links of the bracelet…the Ballon Bleu watch by Cartier floats through the world of Cartier watchmaking.\r\nBallon Bleu de Cartier watch.\r\nMechanical movement with automatic winding.\r\nSteel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial, Roman numerals, blued-steel sword-shaped hands.\r\nSapphire crystal.\r\nSteel bracelet.\r\nCase dimensions diameter: 33 mm.\r\nThickness: 9.96 mm.\r\nWater-resistant to 3 bar (approx. 30 meters/100 feet).', 0, 0, 1, 0, 1, 0),
(3, 'MICHAEL KORS BRECKEN CHRONOGRAPH WATCH 44MM', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/product-23_large-480x480.jpg', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/product6_20a32b81-5765-41f0-96da-606bb1ce5ed8_large-480x480.jpg', 6470000, 'Floating like a balloon and as blue as the cabochon safely nestled in its side, the Ballon Bleu watch by Cartier adds a dash of elegance to male and female wrists alike. Roman numerals are guided on their path by a deep blue winding mechanism. With the convex curves of the case, guilloché dial, sword-shaped hands, and polished or satin-finish links of the bracelet…the Ballon Bleu watch by Cartier floats through the world of Cartier watchmaking.\r\nBallon Bleu de Cartier watch.\r\nMechanical movement with automatic winding.\r\nSteel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial, Roman numerals, blued-steel sword-shaped hands.\r\nSapphire crystal.\r\nSteel bracelet.\r\nCase dimensions diameter: 33 mm.\r\nThickness: 9.96 mm.\r\nWater-resistant to 3 bar (approx. 30 meters/100 feet).', 0, 10, 1, 0, 2, 1),
(4, 'MICHAEL KORS BRECKEN CHRONOGRAPH WATCH 40MM', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/product-21_large-480x480.jpg', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/product-13_large-480x480.jpg', 6470000, 'Floating like a balloon and as blue as the cabochon safely nestled in its side, the Ballon Bleu watch by Cartier adds a dash of elegance to male and female wrists alike. Roman numerals are guided on their path by a deep blue winding mechanism. With the convex curves of the case, guilloché dial, sword-shaped hands, and polished or satin-finish links of the bracelet…the Ballon Bleu watch by Cartier floats through the world of Cartier watchmaking.\r\nBallon Bleu de Cartier watch.\r\nMechanical movement with automatic winding.\r\nSteel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial, Roman numerals, blued-steel sword-shaped hands.\r\nSapphire crystal.\r\nSteel bracelet.\r\nCase dimensions diameter: 33 mm.\r\nThickness: 9.96 mm.\r\nWater-resistant to 3 bar (approx. 30 meters/100 feet).', 0, 10, 1, 0, 2, 1),
(5, 'MICHAEL KORS LAURYN CELESTIAL PAVÉ PLUM-TONE 38MM', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/12-480x480.jpg', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/24-480x480.jpg', 819000, 'Floating like a balloon and as blue as the cabochon safely nestled in its side, the Ballon Bleu watch by Cartier adds a dash of elegance to male and female wrists alike. Roman numerals are guided on their path by a deep blue winding mechanism. With the convex curves of the case, guilloché dial, sword-shaped hands, and polished or satin-finish links of the bracelet…the Ballon Bleu watch by Cartier floats through the world of Cartier watchmaking.\r\nBallon Bleu de Cartier watch.\r\nMechanical movement with automatic winding.\r\nSteel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial, Roman numerals, blued-steel sword-shaped hands.\r\nSapphire crystal.\r\nSteel bracelet.\r\nCase dimensions diameter: 33 mm.\r\nThickness: 9.96 mm.\r\nWater-resistant to 3 bar (approx. 30 meters/100 feet).', 0, 5, 1, 0, 3, 1),
(6, 'OMEGA DE VILLE PRESTIGE WATCH 39.5MM', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/16-480x480.jpg', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/18-480x480.jpg', 11900000, 'Floating like a balloon and as blue as the cabochon safely nestled in its side, the Ballon Bleu watch by Cartier adds a dash of elegance to male and female wrists alike. Roman numerals are guided on their path by a deep blue winding mechanism. With the convex curves of the case, guilloché dial, sword-shaped hands, and polished or satin-finish links of the bracelet…the Ballon Bleu watch by Cartier floats through the world of Cartier watchmaking.\r\nBallon Bleu de Cartier watch.\r\nMechanical movement with automatic winding.\r\nSteel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial, Roman numerals, blued-steel sword-shaped hands.\r\nSapphire crystal.\r\nSteel bracelet.\r\nCase dimensions diameter: 33 mm.\r\nThickness: 9.96 mm.\r\nWater-resistant to 3 bar (approx. 30 meters/100 feet).', 0, 7, 1, 0, 3, 1),
(7, 'VERSACE VANITAS ROSE GOLD WATCH 40MM', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/13-480x480.jpg', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/24-480x480.jpg', 38100000, 'Floating like a balloon and as blue as the cabochon safely nestled in its side, the Ballon Bleu watch by Cartier adds a dash of elegance to male and female wrists alike. Roman numerals are guided on their path by a deep blue winding mechanism. With the convex curves of the case, guilloché dial, sword-shaped hands, and polished or satin-finish links of the bracelet…the Ballon Bleu watch by Cartier floats through the world of Cartier watchmaking.\r\nBallon Bleu de Cartier watch.\r\nMechanical movement with automatic winding.\r\nSteel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial, Roman numerals, blued-steel sword-shaped hands.\r\nSapphire crystal.\r\nSteel bracelet.\r\nCase dimensions diameter: 33 mm.\r\nThickness: 9.96 mm.\r\nWater-resistant to 3 bar (approx. 30 meters/100 feet).', 0, 4, 0, 0, 0, 1),
(8, 'FOSSIL ME3104 TOWNSMAN AUTOMATIC LEATHER WATCH 44MM', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/5-480x480.jpg', 'http://mauweb.monamedia.net/rolex/wp-content/uploads/2018/11/product-25_large-480x480.jpg', 5800000, 'Floating like a balloon and as blue as the cabochon safely nestled in its side, the Ballon Bleu watch by Cartier adds a dash of elegance to male and female wrists alike. Roman numerals are guided on their path by a deep blue winding mechanism. With the convex curves of the case, guilloché dial, sword-shaped hands, and polished or satin-finish links of the bracelet…the Ballon Bleu watch by Cartier floats through the world of Cartier watchmaking.\r\nBallon Bleu de Cartier watch.\r\nMechanical movement with automatic winding.\r\nSteel case, fluted crown decorated with a synthetic spinel cabochon, silvered guilloché opaline dial, Roman numerals, blued-steel sword-shaped hands.\r\nSapphire crystal.\r\nSteel bracelet.\r\nCase dimensions diameter: 33 mm.\r\nThickness: 9.96 mm.\r\nWater-resistant to 3 bar (approx. 30 meters/100 feet).', 0, 3, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_taikoan`
--

CREATE TABLE `tb_taikoan` (
  `id_tk` int(5) NOT NULL,
  `ho_ten` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `SDT` text COLLATE utf8_vietnamese_ci NOT NULL,
  `user` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `hieu_luc` int(5) NOT NULL,
  `cap_quyen` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tb_taikoan`
--

INSERT INTO `tb_taikoan` (`id_tk`, `ho_ten`, `dia_chi`, `email`, `SDT`, `user`, `pass`, `hieu_luc`, `cap_quyen`) VALUES
(1, 'Hoàng Văn Hòa', 'Hà Nội', 'hoathan2000a4@gmail.com', '0328392783', 'hoathan', '210920', 1, 1),
(2, '', '', '', '', 'admin', 'admin', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_brand`
--
ALTER TABLE `tb_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tb_chitiet_hoadon`
--
ALTER TABLE `tb_chitiet_hoadon`
  ADD PRIMARY KEY (`id_ct_hoadon`);

--
-- Indexes for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD PRIMARY KEY (`id_hd`);

--
-- Indexes for table `tb_loai`
--
ALTER TABLE `tb_loai`
  ADD PRIMARY KEY (`id_loai`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`MaSP`);

--
-- Indexes for table `tb_taikoan`
--
ALTER TABLE `tb_taikoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_brand`
--
ALTER TABLE `tb_brand`
  MODIFY `id_brand` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_chitiet_hoadon`
--
ALTER TABLE `tb_chitiet_hoadon`
  MODIFY `id_ct_hoadon` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id_hd` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_loai`
--
ALTER TABLE `tb_loai`
  MODIFY `id_loai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `MaSP` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_taikoan`
--
ALTER TABLE `tb_taikoan`
  MODIFY `id_tk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
