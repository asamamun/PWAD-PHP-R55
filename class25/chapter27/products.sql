-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 11:18 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `description`, `price`, `image`, `created_at`) VALUES
(1, 'ip234876', 'iphone', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '555.00', '1685336952_nice_sunset_hdr_514537.jpg', '2023-05-29 05:09:12'),
(2, 'aple313', 'Apple', 'lorem', '200.00', '1685337071_download.jfif', '2023-05-29 05:11:11'),
(3, 'DP14511', 'Dibjol', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '999.99', '1685337074_download.jpg', '2023-05-29 05:11:14'),
(4, 'ip343432', 'MD.SAJIB', 'this is product ', '999.99', '1685337083_ppznq8RvxqI.jpg', '2023-05-29 05:11:23'),
(5, 'tr345543', 'sorifa', 'product add', '555.00', '1685337085_gettyimages-157382018-612x612.jpg', '2023-05-29 05:11:25'),
(6, 'car25034', 'car', 'y text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and', '200.00', '1685337092_17.jpg', '2023-05-29 05:11:32'),
(7, 'id222222', 'Arafat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '999.99', '1685337115_phir-hera-pheri-akshay-waiting-pose-.jpg', '2023-05-29 05:11:55'),
(8, 'hfg', 'dfg', 'fghnjfh', '10.00', '1685337140_download (1).jfif', '2023-05-29 05:12:20'),
(9, '12836947', 'i phone 12', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', '999.99', '1685337142_IPHONE121_COLOR-PURPLE_CAPACITY-ALL_700x700.webp', '2023-05-29 05:12:22'),
(10, 'rj23493', 'hello', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '999.99', '1685337149_pexels-photo-674010.jpeg', '2023-05-29 05:12:29'),
(11, 'HPEB-844', 'HP Elitebook 8440p', 'jkasdbjkhnam,xbjskdb', '999.99', '1685337161_54238871.webp', '2023-05-29 05:12:41'),
(12, '13254354', 'sunglass', 'Since the word \"sunglasses\" is always used in a plural form, it\'s incorrect to say \"a sunglasses\". She\'s wearing a new pair of sunglasses. She\'s wearing a new sunglasses. My husband likes wearing sunglasses in summer.', '999.99', '1685337189_download.jpeg', '2023-05-29 05:13:09'),
(14, 'utyu', 'ytt', 'tu66u8', '10.00', '1685337264_bappara-sad-face.webp', '2023-05-29 05:14:24'),
(16, 'sadfgdfg', 'test product', 'some desc', '777.00', '1685337480_nonte.jpg', '2023-05-29 05:18:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
