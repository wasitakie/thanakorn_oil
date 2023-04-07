-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 07, 2023 at 08:35 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thanakorn_oil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_user` varchar(50) NOT NULL,
  `ad_pass` varchar(50) NOT NULL,
  `ad_check` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_user`, `ad_pass`, `ad_check`) VALUES
(1, 'admin', 'happyu', '1');

-- --------------------------------------------------------

--
-- Table structure for table `grop_1`
--

CREATE TABLE `grop_1` (
  `g1_id` int(11) NOT NULL,
  `g1_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grop_1`
--

INSERT INTO `grop_1` (`g1_id`, `g1_name`) VALUES
(1, '1.  ฝ่ายจัดการ'),
(2, '2.  ที่ปรึกษา'),
(3, '3.  สกัดน้ำมันพืช'),
(4, '4.  กลั่นและบรรจุน้ำมันพืช'),
(5, '5.  บริการวิศวกรรม'),
(6, '6.  พลังงานและดิจิทัลเทคโนโลยี'),
(7, '7.   บริหารซัพพลายเชน'),
(8, '8.   ประกันคุณภาพ'),
(9, '9.   วิจัยและพัฒนา'),
(10, '10.  บริหารระบบคุณภาพ'),
(11, '11.  วางแผนและควบคุมการผลิต'),
(12, '12.  จัดซื้อและธุรการ'),
(13, '13.  จัดซื้อวัตถุดิบและขายผลิตภัณฑ์'),
(14, '14.  การตลาด'),
(15, '15.  วิจัยและวางแผน'),
(16, '16.  กฎหมาย'),
(17, '17.   การเงิน'),
(18, '18.   ควบคุมเครดิตและตรวจสอบภายใน');

-- --------------------------------------------------------

--
-- Table structure for table `grop_2`
--

CREATE TABLE `grop_2` (
  `g2_id` int(11) NOT NULL,
  `g2_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grop_2`
--

INSERT INTO `grop_2` (`g2_id`, `g2_name`) VALUES
(1, '1.  SKJ'),
(2, '2.  STMS'),
(3, '3.  THE PET'),
(4, '4.  วิทูรย์รวยทรัพย์'),
(5, '5.  รุ่งอนันต์'),
(6, '6.  ธราวุธ'),
(7, '7.  รปภ. เพอร์เฟค เซฟตี้ แอนด์ เซอร์วิส คอร์ปอเรชั่นปอเรชั่น'),
(8, '8.  โพไลท์ แมสเซนเจอร์ เซอร์วิส จำกัด'),
(9, '9.  รปภ. ไจแอ้นท์ กรุ๊ป');

-- --------------------------------------------------------

--
-- Table structure for table `insert_data`
--

CREATE TABLE `insert_data` (
  `id` int(11) NOT NULL,
  `group_name` varchar(250) NOT NULL,
  `group_list` varchar(250) NOT NULL,
  `sex` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `q2_3` int(11) NOT NULL,
  `q2_4` int(11) NOT NULL,
  `q2_5_1` int(11) DEFAULT NULL,
  `q2_5_2` int(11) DEFAULT NULL,
  `q2_5_3` int(11) DEFAULT NULL,
  `q2_5_4` int(11) DEFAULT NULL,
  `q2_5_5` int(11) DEFAULT NULL,
  `q2_5_6` int(11) DEFAULT NULL,
  `q2_5_7` int(11) DEFAULT NULL,
  `q2_5_8` int(11) DEFAULT NULL,
  `q2_5_9` int(11) DEFAULT NULL,
  `q2_5_10` int(11) DEFAULT NULL,
  `q2_5t` varchar(250) DEFAULT NULL,
  `q2_6` int(11) NOT NULL,
  `q2_6t` varchar(250) DEFAULT NULL,
  `q2_7` int(11) NOT NULL,
  `q2_8` int(11) NOT NULL,
  `q2_9` int(11) NOT NULL,
  `q2_10` int(11) NOT NULL,
  `q2_10t` varchar(250) DEFAULT NULL,
  `q2_11` int(11) NOT NULL,
  `q2_11t` varchar(250) DEFAULT NULL,
  `q2_12` int(11) NOT NULL,
  `q2_12t` varchar(250) DEFAULT NULL,
  `q2_13` int(11) NOT NULL,
  `q2_14` int(11) NOT NULL,
  `q2_15` int(11) NOT NULL,
  `q2_16` int(11) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `waist` varchar(3) NOT NULL,
  `height` varchar(3) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `cv1` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `cv2` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `cv3` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `q26` int(11) NOT NULL,
  `cv4` int(11) NOT NULL,
  `q27` int(11) NOT NULL,
  `q28` int(11) NOT NULL,
  `q29` int(11) NOT NULL,
  `cv5` int(11) NOT NULL,
  `q30` int(11) NOT NULL,
  `q31` int(11) NOT NULL,
  `q32` int(11) NOT NULL,
  `q33` int(11) NOT NULL,
  `q34` int(11) NOT NULL,
  `q35` int(11) NOT NULL,
  `cv6` int(11) NOT NULL,
  `q36` int(11) NOT NULL,
  `q37` int(11) NOT NULL,
  `q38` int(11) NOT NULL,
  `cv7` int(11) NOT NULL,
  `q39` int(11) NOT NULL,
  `q40` int(11) NOT NULL,
  `q41` int(11) NOT NULL,
  `q42` int(11) NOT NULL,
  `cv8` int(11) NOT NULL,
  `q43` int(11) NOT NULL,
  `q44` int(11) NOT NULL,
  `q45` int(11) NOT NULL,
  `q46` int(11) NOT NULL,
  `q47` int(11) NOT NULL,
  `q48` int(11) NOT NULL,
  `q49` int(11) NOT NULL,
  `q50` int(11) NOT NULL,
  `q51` int(11) NOT NULL,
  `q52` int(11) NOT NULL,
  `q53` int(11) NOT NULL,
  `q54` int(11) NOT NULL,
  `q55` int(11) NOT NULL,
  `q56` int(11) NOT NULL,
  `q57` int(11) NOT NULL,
  `q58` int(11) NOT NULL,
  `q59` int(11) NOT NULL,
  `cv9` int(11) NOT NULL,
  `q60` int(11) NOT NULL,
  `q61` int(11) NOT NULL,
  `q62` int(11) NOT NULL,
  `q63` int(11) NOT NULL,
  `q64` int(11) NOT NULL,
  `q65` int(11) NOT NULL,
  `q66` int(11) NOT NULL,
  `q67` int(11) NOT NULL,
  `q68` int(11) NOT NULL,
  `q69` int(11) NOT NULL,
  `q70` int(11) NOT NULL,
  `q71` int(11) NOT NULL,
  `q72` int(11) NOT NULL,
  `q73` int(11) NOT NULL,
  `q74` varchar(10) NOT NULL,
  `q75` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `idcode` varchar(200) NOT NULL,
  `groups` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `grop_1`
--
ALTER TABLE `grop_1`
  ADD PRIMARY KEY (`g1_id`);

--
-- Indexes for table `grop_2`
--
ALTER TABLE `grop_2`
  ADD PRIMARY KEY (`g2_id`);

--
-- Indexes for table `insert_data`
--
ALTER TABLE `insert_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grop_1`
--
ALTER TABLE `grop_1`
  MODIFY `g1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `grop_2`
--
ALTER TABLE `grop_2`
  MODIFY `g2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `insert_data`
--
ALTER TABLE `insert_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
