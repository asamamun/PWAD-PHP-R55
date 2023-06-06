-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 10:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r55_php`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_product` (IN `s` VARCHAR(8), IN `n` VARCHAR(100), IN `d` TEXT, IN `p` FLOAT(9,2), IN `i` VARCHAR(60))   BEGIN
    insert into products values(null,s,n,d,p,i,current_timestamp());
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_inventory` (IN `product` CHAR(8), OUT `count` INT)   SELECT 45 INTO count$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `calculate_bonus` (`eid` INT) RETURNS DECIMAL(10,2)  begin
declare total decimal(10,2);
DECLARE bonus DECIMAL(10,2);
select sum(revenue) into total from sales where empid=eid;
set bonus = total * 0.05;
return bonus;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `stid` int(11) NOT NULL,
  `stclass` int(2) NOT NULL,
  `sub_id` int(3) NOT NULL,
  `exam_id` int(3) NOT NULL,
  `marks` float(5,2) NOT NULL,
  `grade` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`stid`, `stclass`, `sub_id`, `exam_id`, `marks`, `grade`) VALUES
(101, 5, 2, 3, 68.50, NULL),
(101, 5, 2, 4, 88.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `markscopy`
--

CREATE TABLE `markscopy` (
  `stid` int(11) NOT NULL,
  `stclass` int(2) NOT NULL,
  `sub_id` int(3) NOT NULL,
  `exam_id` int(3) NOT NULL,
  `marks` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markscopy`
--

INSERT INTO `markscopy` (`stid`, `stclass`, `sub_id`, `exam_id`, `marks`) VALUES
(101, 5, 2, 3, 68.50);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `description`, `price`, `image`, `created_at`) VALUES
(1, 'ip234876', 'iphone 3334', ' 123               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n                ', '998.99', '1685513823_1 (15).jpg', '2023-05-29 05:09:12'),
(3, 'DP14511', 'Dibjol', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '999.99', '1685337074_download.jpg', '2023-05-29 05:11:14'),
(4, 'ip343432', 'MD.SAJIB 123', '        this is product         ', '999.99', '1685422043_DSC_0358.jpg', '2023-05-29 05:11:23'),
(5, 'tr345543', 'sorifa 1', 'product add    123                                     ', '999.99', '1685422527_d0059J9Qz9A.jpg', '2023-05-29 05:11:25'),
(6, 'car25034', 'car', 'y text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and', '200.00', '1685337092_17.jpg', '2023-05-29 05:11:32'),
(7, 'id222222', 'Arafat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '999.99', '1685337115_phir-hera-pheri-akshay-waiting-pose-.jpg', '2023-05-29 05:11:55'),
(8, 'joba123', 'Joba Ful 123', ' some desc                ', '15.00', '1685421765_DSC_0020.jpg', '2023-05-29 05:12:20'),
(9, '12836947', 'i phone 12', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', '999.99', '1685337142_IPHONE121_COLOR-PURPLE_CAPACITY-ALL_700x700.webp', '2023-05-29 05:12:22'),
(10, 'rj23493', 'hello', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '999.99', '1685337149_pexels-photo-674010.jpeg', '2023-05-29 05:12:29'),
(11, 'HPEB-844', 'HP Elitebook 8440p', 'jkasdbjkhnam,xbjskdb', '999.99', '1685337161_54238871.webp', '2023-05-29 05:12:41'),
(12, '13254354', 'sunglass', 'Since the word \"sunglasses\" is always used in a plural form, it\'s incorrect to say \"a sunglasses\". She\'s wearing a new pair of sunglasses. She\'s wearing a new sunglasses. My husband likes wearing sunglasses in summer.', '999.99', '1685337189_download.jpeg', '2023-05-29 05:13:09'),
(14, 'utyu', 'ytt', 'tu66u8', '10.00', '1685337264_bappara-sad-face.webp', '2023-05-29 05:14:24'),
(16, 'sadfgdfg', 'test product', 'some desc', '777.00', '1685337480_nonte.jpg', '2023-05-29 05:18:00'),
(21, 'ipl420', 'আইপিএলে পুরস্কার জিতে কে কত টাকা পেল', 'এটাই কি আইপিএল ইতিহাসের সেরা মৌসুম? এটাই কি আইপিএল ইতিহাসের সেরা ফাইনাল? পুরো টুর্নামেন্টের খোঁজখবর রাখলে আর গত রাতের রুদ্ধশ্বাস ফাইনাল দেখে থাকলে দুটি প্রশ্নের উত্তরে বেশির ভাগ ক্রিকেটপ্রমীই হয়তো ‘হ্যাঁ’ বলবেন।\r\n\r\nকরোনার ধাক্কা সামলে ৪ বছর পর হোম-অ্যাওয়ে পদ্ধতিতে ফেরা, রিংকু সিংয়ের শেষ পাঁচ বলে পাঁচ ছক্কা মেরে দলকে জেতানো, বিরাট কোহলির নিজেকে ফিরে পাওয়া, ফাফ ডু প্লেসির বুড়ো হাড়ের ভেলকি, যশস্বী জয়সোয়াল-আকাশ মাধওয়ালদের উত্থান, শুবমান গিলের অবিশ্বাস্য ফর্ম, তৃতীয় দিনে গড়ানো ফাইনালের শেষ ২ বলে ১০ রান নিয়ে রবীন্দ্র জাদেজার ইস্পাতদৃঢ় স্নায়ুর আরেক দফা জানান দেওয়া আর শিরোপা জিতে মহেন্দ্র সিং ধোনির চমক—কী ছিল না এবারের আইপিএলে?', '999.99', '1685428529_ipl.webp', '2023-05-30 06:35:29'),
(22, 'testfl00', 'test folwer', 'lorem ipsum', '777.00', '1685506991_DSC_6857.jpg', '2023-05-31 04:23:11'),
(23, 'gfdsg', 'dgf', 'dsfgdsfg', '123.00', '1685507497_DSC_0020.jpg', '2023-05-31 04:31:37'),
(24, 'ertger', '3rtert', 'dsfgdfsg dfsg', '444.00', '1685507555_1 (12).jpg', '2023-05-31 04:32:35'),
(25, '3654654g', 'erwret', 'dsfgd ', '234.00', '1685507723_1 (12).jpg', '2023-05-31 04:35:23'),
(26, 'wqer', 'wqer', 'sdf', '55.00', '1685507864_1 (11).jpg', '2023-05-31 04:37:44'),
(27, 'sdag', 'dsag', 'dsfgdfsg', '234.00', '1685507885_1 (12).jpg', '2023-05-31 04:38:05'),
(28, '346456', 'asfd', 'asdfgdsvb', '111.00', '1685509405_1 (6).jpg', '2023-05-31 05:03:25'),
(29, 'test567', 'test', 'dsfgdsfg', '222.00', '1685509529_1 (7).jpg', '2023-05-31 05:05:29'),
(30, 'test1', 'name test1', 'test description', '567.99', 'imagetest.jpg', '2023-06-01 04:20:48'),
(31, 'ttt', 'ttt', 'ttt', '8765.00', '1685593468_1 (11).jpg', '2023-06-01 04:24:28'),
(32, 'ip999999', 'php', 'php', '9999.00', '1685593514_pexels-christina-morillo-1181675.jpg', '2023-06-01 04:25:14'),
(33, '156165ea', 'Smart boy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '9999.00', '1685593818_memelate-new-temp-1.webp', '2023-06-01 04:30:18'),
(34, 'iphone15', 'Apple iPhone 15', '        NETWORK	Technology	\r\nGSM / CDMA / HSPA / EVDO / LTE / 5G\r\nLAUNCH	Announced	2022, September 07\r\nStatus	Available. Released 2022, September 16\r\nBODY	Dimensions	146.7 x 71.5 x 7.8 mm (5.78 x 2.81 x 0.31 in)\r\nWeight	172 g (6.07 oz)\r\nBuild	Glass front (Corning-made glass), glass back (Corning-made glass), aluminum frame\r\nSIM	Nano-SIM and eSIM - International\r\nDual eSIM with multiple numbers - USA\r\nDual SIM (Nano-SIM, dual stand-by) - China\r\n 	IP68 dust/water resistant (up to 6m for 30 min)\r\nApple Pay (Visa, MasterCard, AMEX certified)\r\nDISPLAY	Type	Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak)\r\nSize	6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio)\r\nResolution	1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)\r\nProtection	Ceramic Shield glass\r\nPLATFORM	OS	iOS 16, upgradable to iOS 16.4.1\r\nChipset	Apple A15 Bionic (5 nm)\r\nCPU	Hexa-core (2x3.23 GHz Avalanche + 4x1.82 GHz Blizzard)\r\nGPU	Apple GPU (5-core graphics)\r\nMEMORY	Card slot	No\r\nInternal	128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM\r\n 	NVMe\r\nMAIN CAMERA	Dual	12 MP, f/1.5, 26mm (wide), 1/1.7\", 1.9µm, dual pixel PDAF, sensor-shift OIS\r\n12 MP, f/2.4, 13mm, 120˚ (ultrawide)\r\nFeatures	Dual-LED dual-tone flash, HDR (photo/panorama)\r\nVideo	4K@24/25/30/60fps, 1080p@25/30/60/120/240fps, HDR, Dolby Vision HDR (up to 60fps), Cinematic mode (4K@30fps), stereo sound rec.\r\nSELFIE CAMERA	Single	12 MP, f/1.9, 23mm (wide), 1/3.6\", PDAF\r\nSL 3D, (depth/biometrics sensor)\r\nFeatures	HDR, Cinematic mode (4K@30fps)\r\nVideo	4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS\r\nSOUND	Loudspeaker	Yes, with stereo speakers\r\n3.5mm jack	No\r\nCOMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\r\nBluetooth	5.3, A2DP, LE\r\nPositioning	GPS, GLONASS, GALILEO, BDS, QZSS\r\nNFC	Yes\r\nRadio	No\r\nUSB	Lightning, USB 2.0\r\nFEATURES	Sensors	Face ID, accelerometer, gyro, proximity, compass, barometer\r\n 	Ultra Wideband (UWB) support\r\nEmergency SOS via satellite (SMS sending/receiving)\r\nBATTERY	Type	Li-Ion 3279 mAh, non-removable (12.68 Wh)\r\nCharging	Wired, PD2.0, 50% in 30 min (advertised)\r\n15W wireless (MagSafe)\r\n7.5W wireless (Qi)\r\nMISC	Colors	Midnight, Purple, Starlight, Blue, Red, Yellow\r\nModels	A2882, A2649, A2881, A2884, A2883, iphone14,7\r\nSAR	1.15 W/kg (head)     1.16 W/kg (body)    \r\nSAR EU	0.98 W/kg (head)     0.98 W/kg (body)    \r\nPrice	$ 710.00 / € 823.00 / £ 764.00 / ₹ 70,999\r\nTESTS	Performance	AnTuTu: 817125 (v9)\r\nGeekBench: 4761 (v5.1)\r\nGFXBench: 60fps (ES 3.1 onscreen)\r\nDisplay	Contrast ratio: Infinite (nominal)\r\nCamera	Photo / Video\r\nLoudspeaker	-25.2 LUFS (Very good)\r\nBattery life	\r\nEndurance rating 90h        ', '71000.00', '1685593912_apple-iphone-14.jpg', '2023-06-01 04:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `empid` int(5) NOT NULL,
  `revenue` float(10,2) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `empid`, `revenue`, `created`) VALUES
(1, 1, 5000.00, '2019-10-09 12:33:51'),
(2, 2, 10000.00, '2019-10-09 12:34:10'),
(3, 1, 15000.00, '2019-10-09 12:34:10'),
(4, 2, 2500.00, '2019-10-09 12:34:28'),
(5, 2, 30000.00, '2019-10-09 12:34:28'),
(6, 3, 15000.00, '2019-10-09 12:34:46'),
(7, 4, 25000.00, '2019-10-09 12:34:46'),
(8, 2, 25000.00, '2019-10-13 09:42:15'),
(9, 4, 45000.00, '2019-10-13 09:42:15'),
(10, 10, 50000.00, '2019-10-13 10:57:45'),
(11, 123, 5000.00, '2019-10-21 12:37:24'),
(12, 123, 5500.00, '2019-10-21 12:39:35'),
(13, 123, 5000.00, '2019-10-21 12:39:36'),
(14, 2, 150000.00, '2023-01-22 12:43:15'),
(15, 12, 1200000.00, '2023-01-22 12:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `blood_group` varchar(3) NOT NULL DEFAULT 'B+',
  `class` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subact`
--

CREATE TABLE `subact` (
  `id` int(5) NOT NULL,
  `name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subact`
--

INSERT INTO `subact` (`id`, `name`) VALUES
(1, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$b1a061THRo4IeVztAxMtq.QnXP9xY1VZQygg4mhI6fcW3yncCyK96', 2, 1, '2023-06-03 04:08:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`stid`,`stclass`,`sub_id`,`exam_id`);

--
-- Indexes for table `markscopy`
--
ALTER TABLE `markscopy`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subact`
--
ALTER TABLE `subact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subact`
--
ALTER TABLE `subact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
