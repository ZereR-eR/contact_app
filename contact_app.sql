-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 06:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `photo`, `created_at`) VALUES
(1, 'Kaung Sithu', '09960708124', 'store/5fb541d55a623_FB_IMG_1603984671137.jpg', '2020-11-18 15:46:29'),
(2, 'Sithu Aung', '09798523641', 'store/5fb541e7458fa_FB_IMG_1603892716087.jpg', '2020-11-18 15:46:47'),
(3, 'Kyaw Kyaw', '09421049492', 'store/5fb541f5e5c6e_FB_IMG_1603892737746.jpg', '2020-11-18 15:47:01'),
(4, 'Maw Maw', '09695236475', 'store/5fb54209133c7_FB_IMG_1603984669101.jpg', '2020-11-18 15:47:21'),
(5, 'Aye Aye', '09972634981', 'store/5fb542219c7e4_FB_IMG_1603892714143.jpg', '2020-11-18 15:47:45'),
(6, 'Su Su', '09762456982', 'store/5fb54233dae7c_FB_IMG_1603892735921.jpg', '2020-11-18 15:48:03'),
(7, 'Shwe Sin', '09250123684', 'store/5fb544dfbf646_FB_IMG_1603984669101.jpg', '2020-11-18 15:59:27'),
(8, 'Kyaw Gyi', '09550052000', 'store/5fb54f507d4e8_122884797_2784243008519847_2232918337926956639_n.jpg', '2020-11-18 16:44:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
