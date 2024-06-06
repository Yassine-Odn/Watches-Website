-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 03:43 PM
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
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `brand` text NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `price`, `description`, `category`, `brand`, `meta_description`, `meta_keywords`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(1, '1.png', 'Rolex M SCL-9801', 11000, 'exclusive ', 'men', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '2_1.webp', '2_2.webp', '2_3.jpg', '2_4.webp', '2_5.jpg'),
(2, '3.png', 'Omegaz', 25000, 'latest from omega', 'men', 'omega', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(3, 'w11.png', 'Omegat', 999, 'delux', 'women', 'omega', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(4, '4.png', 'Rolexr', 9100, 'date-just', 'men', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(5, '5.png', 'Rolexux', 850, 'jubilee', 'men', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(6, '6.png', 'Rolexxu', 84900, 'mechanical', 'men', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(7, '1.png', 'Rolexiy', 1500, 'copy', 'men', 'Rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(8, 'w66.png', 'Rolex^^', 1500, 'date just', 'women', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(9, '7.png', 'Rolex-9', 9850, 'Daytona', 'men', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(10, '8.png', 'Rolex-10', 45500, 'DateJust', 'men', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(11, '9.png', 'Tissot-11', 850, 'Vintage Collection', 'men', 'tissot', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(12, '10.png', 'Omega-12', 4550, 'Red Dial', 'men', 'omega', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(13, '11.png', 'Rolex-13', 1600, 'Daytona green dial', 'men', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(14, '12.png', 'Hublot-14', 7800, 'Mechanical engine', 'men', 'hublot', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(15, '13.png', 'AP-14', 599, 'Brushed steel bracelet', 'men', 'AP', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(16, '14.png', 'Rolex-16', 19500, 'Blue Dial 2 Tone ', 'men', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(17, '15.png', 'AP-17', 6800, 'Automatic', 'men', 'ap', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(18, 'w7.png', 'Bvlgart-18', 14800, 'Crystal Ring', 'women', 'bvlgart', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(19, 'w8.png', 'Citizen-19', 37800, 'Daytona Collection', 'women', 'citizen', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(20, 'w9.png', 'Tissot-20', 29800, 'Split bracelet ', 'women', 'tissot', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(21, 'w10.png', 'Tissot-21', 6870, 'Vintage', 'women', 'tissot', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(22, 'w11.png', 'Omega-22', 890, 'Rose Gold plate', 'women', 'omega', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(23, 'w12.png', 'Rolex-23', 3100, 'Olive green dial', 'women', 'rolex', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '', '', '', '', '', ''),
(24, 'w13.png', '', 9100, 'Discontinued Dial', 'women', 'omega', '', '', '', '', '', '', ''),
(25, 'w14.png', 'Citizen-25', 37600, 'Vintage', 'women', 'citizen', '', '', '', '', '', '', ''),
(26, 'w15.png', 'Calvink-26', 899, 'Exclusive', 'women', 'calvin klein', '', '', '', '', '', '', ''),
(27, 'w16.png', 'Citizen-27', 8000, 'Daytona', 'women', 'citizen', '', '', '', '', '', '', ''),
(28, 'w17.png', 'Omega-28', 1899, 'Exclusive', 'women', 'omega', '', '', '', '', '', '', ''),
(29, 'w18.png', 'Rolex-29', 799, 'Starbucks Dial/Ring', 'women', 'rolex', '', '', '', '', '', '', ''),
(30, 'w19.png', 'Hamilton-30', 599, 'Vintage', 'women', 'hamilton', '', '', '', '', '', '', ''),
(31, 'w20.png', 'Bvlgart-31', 350, 'Vintage', 'women', 'bvlgart', '', '', '', '', '', '', ''),
(32, 'w22.png', 'Citizen-32', 3000, 'Rose Gold PLating', 'women', 'citizen', '', '', '', '', '', '', ''),
(33, 'w23.png', 'Bvlgart-33', 799, 'Vintage', 'women', 'bvlgart', '', '', '', '', '', '', ''),
(34, 'w24.png', 'Omega-34', 4800, 'Exclusive 32mm', 'women', 'omega', '', '', '', '', '', '', ''),
(35, 'w25.png', 'Citizen-35', 499, 'New release', 'women', 'citizen', '', '', '', '', '', '', ''),
(36, 'w26.png', 'Rolex-36', 49800, 'Diamond Ring', 'women', 'rolex', '', '', '', '', '', '', ''),
(37, 'w27.png', 'MK-37', 1500, 'New release ', 'women', 'MK', '', '', '', '', '', '', ''),
(38, 'w28.png', 'Rolex-38', 4800, 'Discontinued green dial', 'women', 'rolex', '', '', '', '', '', '', ''),
(39, 'w29.png', 'Bvlgart-39', 599, 'New release', 'women', 'bvlgart', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
