-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2023 at 05:57 AM
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
-- Database: `news_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(13) NOT NULL,
  `name_ad` varchar(150) NOT NULL,
  `user_ad` varchar(50) NOT NULL,
  `Pass_ad` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name_ad`, `user_ad`, `Pass_ad`) VALUES
(123456789, 'Admin Admin', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id_journal` int(20) NOT NULL,
  `admin_id` int(13) NOT NULL,
  `name_journal` varchar(100) NOT NULL,
  `img_journal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id_journal`, `admin_id`, `name_journal`, `img_journal`) VALUES
(1, 123456789, '1', '975372325.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(20) NOT NULL,
  `admin_id` int(13) NOT NULL,
  `hade_news` varchar(200) NOT NULL,
  `name_news` varchar(1000) NOT NULL,
  `datesave` date NOT NULL,
  `img_news` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `admin_id`, `hade_news`, `name_news`, `datesave`, `img_news`) VALUES
(2, 123456789, 'แจ้งเปลี่ยนกำหนดการจัดค่าย 2 ปีการศึกษา 2565 ในโครงการโอลิมปิกวิชาการ สอวน.', ' ตามที่ คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี ประกาศรายชื่อนักเรียนที่มีสิทธิ์เข้าค่าย 2 ปีการศึกษา 2565 ในโครงการโอลิมปิกวิชาการ สอวน. ฉบับที่ 95/2565 ลงวันที่ 18 พฤศจิกายน 2565 และ กำหนดการจัดค่าย 2 ปีการศึกษา 2565 ดังต่อไปนี้          \r\n          ช่วงที่ 1 ระหว่างวันที่ 10 – 24 มีนาคม 2566 ค่ายชีววิทยาโอลิมปิก ค่ายเคมีโอลิมปิก ค่ายคณิตศาสตร์โอลิมปิก ค่ายฟิสิกส์โอลิมปิก\r\n          ช่วงที่ 2 ระหว่างวันที่ 22 เมษายน – 4 พฤษภาคม 2566 ค่ายคอมพิวเตอร์โอลิมปิก ค่ายดาราศาสตร์โอลิมปิก ระดับระดับ                        มัธยมศึกษาตอนต้น และค่ายดาราศาสตร์โอลิมปิก ระดับมัธยมศึกษาตอนปลาย   \r\n          เนื่องจาก ศูนย์เจ้าภาพการแข่งขันคอมพิวเตอร์โอลิมปิกระดับชาติ ครั้งที่ 19 และ ศูนย์เจ้าภาพการแข่งขันดาราศาสตร์โอลิมปิกระดับชาติ ครั้งที่ 20 กำหนดให้ส่งรายชื่อผู้แทนศูนย์ในช่วงเดือนเมษายน 2566 ดังนั้น คณะวิทยาศาสตร์จึงแจ้งเปลี่ยนกำหนดการจัดค่าย 2 ปีการศึกษา 2565 ในโครงการโอลิมปิกวิชาการ สอวน. ค่ายคอมพิวเตอร์โอลิมปิก ค่ายดาราศาสตร์โอลิมปิก ระดับมัธยมศึกษาตอนต้น และ ค่ายดาราศาสตร์โอลิมปิก ระดับมัธยมศึกษ', '2022-12-09', '949952390.jpg'),
(3, 123456789, ' สโมสรนักศึกษา คณะวิทยาศาสตร์ จัดกิจกรรม Science Atomic Ambassador 2022', 'เมื่อวันเสาร์ที่ 26 พฤศจิกายน 2565 สโมสรนักศึกษา คณะวิทยาศาสตร์ จัดกิจกรรม Science Atomic Ambassador 2022 ใน Concept \"Self-Confident\" (ความมั่นใจในตนเอง) ณ ชั้น 1 ลานกิจกรรม อาคารวิจัย คณะวิทยาศาสตร์ โดยมี ดร.สมปอง เวฬุวนาธร ผู้ช่วยคณบดีฝ่ายพัฒนานักศึกษาและวิชาชีพ คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธานี ให้เกียรติเป็นประธานพิธีเปิด และ นายเจษฎาพร พิมพ์สระ นายกสโมสรนักศึกษาคณะวิทยาศาสตร์ และประธานการจัดกิจกรรม Science Atomic Ambassador 2022 กล่าวรายงานและวัตถุประสงค์การจัดกิจกรรมครั้งนี้ เพื่อเป็นการสริมสร้างความเป็นหนึ่งเดียว รวมทั้งเป็นการส่งเสริมให้นักศึกษาพัฒนาบุคลิกภาพ ทักษะการพูดในเชิงสร้างสรรค์ผ่านกิจกรรมที่จัดขึ้น ฝึกการแสดงออก และส่งเสริมความเท่าเทียมในทุก ๆ ด้าน เพื่อเป็นกระบอกเสียงในการประชาสัมพันธ์คณะ เพื่อเป็นแบบอย่างในการส่งเสริมให้นักศึกษามีความมั่นใจ กล้าคิด กล้าทำ กล้าแสดงออก การเป็นผู้นำและผู้ตามที่ดี สร้างความรักสามัคคี ร่วมแรงร่วมใจของนักศึกษาทุกคน ทุกสาขาในคณะ', '2022-12-09', '353321977.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `paper_id` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `id_journal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id_sec` int(20) NOT NULL,
  `admin_id` int(13) NOT NULL,
  `text_section` varchar(1000) NOT NULL,
  `name_sec` varchar(100) NOT NULL,
  `date_sec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slide` int(20) NOT NULL,
  `admin_id` int(13) NOT NULL,
  `name_slide` varchar(100) NOT NULL,
  `img_slide` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slide`, `admin_id`, `name_slide`, `img_slide`) VALUES
(9, 123456789, '1', '515202500.jpg'),
(10, 123456789, '2', '1676157301.png'),
(11, 123456789, '3', '1454266.png');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sec`
--

CREATE TABLE `sub_sec` (
  `id_subsec` int(20) NOT NULL,
  `id_sec` int(20) NOT NULL,
  `img_sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sun_news`
--

CREATE TABLE `sun_news` (
  `id_sub_news` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `img_news_sub` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sun_news`
--

INSERT INTO `sun_news` (`id_sub_news`, `id_news`, `img_news_sub`) VALUES
(5, 3, 'sub_3259.jpg'),
(6, 3, 'sub_3260.jpg'),
(7, 3, 'sub_3262.jpg'),
(8, 3, 'sub_3263.jpg'),
(9, 3, 'sub_3267.jpg'),
(10, 3, 'sub_3270.jpg'),
(11, 3, 'sub_3272.jpg'),
(12, 3, 'sub_3277.jpg'),
(13, 3, 'sub_3278.jpg'),
(14, 3, 'sub_3283.jpg'),
(15, 3, 'sub_3289.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_user` int(13) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Userlevel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `Username`, `Password`, `Firstname`, `Lastname`, `Tel`, `Userlevel`) VALUES
(1, 'nishi', '1234', 'เอดีเอ็กซ์', 'เอดีเอ็กซ์', '0952872216', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id_journal`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id_sec`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `sub_sec`
--
ALTER TABLE `sub_sec`
  ADD PRIMARY KEY (`id_subsec`);

--
-- Indexes for table `sun_news`
--
ALTER TABLE `sun_news`
  ADD PRIMARY KEY (`id_sub_news`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id_journal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id_sec` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slide` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_sec`
--
ALTER TABLE `sub_sec`
  MODIFY `id_subsec` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sun_news`
--
ALTER TABLE `sun_news`
  MODIFY `id_sub_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
