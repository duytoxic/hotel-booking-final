-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 01:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` text DEFAULT NULL,
  `address` longtext NOT NULL,
  `gender` enum('nam','nu','khac') NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `password`, `mobile`, `address`, `gender`, `picture`) VALUES
(1, 'About Us Services', 'duy.cm1010@gmail.com', '10102000', '', '', '', ''),
(2, 'Cao Mạnh Duy', 'thongthoathich24h@gmail.com', '10102000', '+84987007985', '33 Phan Huy Ích', '', 'download (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `room_id` int(10) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `check_in_date` date NOT NULL,
  `check_in_time` text NOT NULL,
  `occupancy` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `username`, `room_id`, `email`, `phone`, `address`, `check_in_date`, `check_in_time`, `occupancy`) VALUES
(8, 'Duy Cao Mạnh', 5, 'info@invigroup.com', '', '33 Phan Huy Ích', '2022-01-19', '09:44', 'three'),
(9, 'Duy Cao Mạnh', 4, 'info@invigroup.com', '', '33 Phan Huy Ích', '2022-01-10', '15:35', 'three'),
(10, 'Duy Cao Mạnh', 1, 'info@invigroup.com', '', '33 Phan Huy Ích', '2022-01-19', '16:08', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `country` varchar(50) NOT NULL,
  `pictrure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`id`, `name`, `email`, `password`, `mobile`, `address`, `gender`, `country`, `pictrure`) VALUES
(4, 'sunil Vishwakarma', 'amitvish9999@gmail.com', '8190', 7275308190, 'kolpanday,azamgarh', 'male', 'China', 'img2.png'),
(7, 'suraj vishwakarma', 'suraj@gmail.com', '8190', 9120140055, 'kolpanday,azamgarh', 'male', 'India', 'Capture.PNG'),
(8, 'Om', 'om@gmail.com', '8090', 7890809, 'bnjkghjbjb', 'male', 'india', ''),
(9, 'Ragini Vishwakarma', 'ragini@gmail.com', '1234`', 7275540965, 'kolpanday(Kolgghat),Azamgarh', 'male', 'India', '6cy5bLaei.jpg'),
(10, 'Anjali Vishwakarma', 'anjali@gmail.com', '123', 7275308190, 'kolpanday azamgarh', 'male', 'India', 'God_Shiva_Wallpaper.jpg'),
(11, 'mrityunjai', 'mr8090@gmail.com', '8190', 71727534567, 'kolpghta', 'male', 'India', 'amazing-shiv-shankar-images-3d-shiva-on-pinterest-shiv-shankar-images-3d.jpg'),
(12, 'sanjeev', 'sanjeevtech2@gmail.com', '1234', 9015501897, 'Noida', 'male', 'India', '20171120_175518.jpg'),
(13, 'Duy Cao M?nh', 'duy.cm1010@gmail.com', '', 0, '', 'male', 'China', 'daruma-dolls_750_500.jpg'),
(14, 'Duy Cao M?nh', 'duy2kruoiw@gmail.com', '10102000', 987007985, '33 Phan Huy Ích', 'male', 'Pakistan', '50df9f0121138a0a37b4640cb1d7d2cf.jpg'),
(15, 'duytoxic', 'thongthoathich24h@gmail.com', '', 0, '', 'male', 'China', '1200-1200x676-49.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `details_slider`
--

CREATE TABLE `details_slider` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `caption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Amit', 'amitvish9999@gmail.com', 7275308190, 'Nice'),
(2, 'Duy Cao M?nh', 'info@invigroup.com', 987007985, 'dadad');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(10) NOT NULL,
  `room_number` int(10) NOT NULL,
  `room_cat` int(10) DEFAULT NULL,
  `price` bigint(10) NOT NULL DEFAULT 0,
  `address` text DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_number`, `room_cat`, `price`, `address`, `details`, `image`, `status`) VALUES
(1, 10, 1, 1000000, '104 Số 1Phường Bình Trưng Tây, Quận 2Thành phố Hồ Chí Minh', 'cadfada', '8b190fa848fd5329dc76752881ebcd4b.jpg', 1),
(2, 407, 1, 10000, 'Vinh', 'adafaf', '16.12.23.e06076035d.Ca-ngua-ru-ngu-thong-minh-Fisher-Price-Soothe-Glow-Seahorse-DGH82.jpg', 1),
(3, 407, 5, 7252525, 'Đồng Hợp, Quỳ Hợp, Nghệ An', 'fafaf', 'download.jpg', 1),
(4, 407, 5, 63636, 'Đồng Hợp Quỳ Hợp Nghệ An', 'fafafaf', 'hand-fan_750_563.jpg', 1),
(5, 407, 5, 63636, 'Đồng Hợp Quỳ Hợp Nghệ An', 'fafafaf', 'hand-fan_750_563.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_booking_details`
--

CREATE TABLE `room_booking_details` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(20) NOT NULL,
  `contry` varchar(50) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_in_time` varchar(6) NOT NULL,
  `check_out_date` date NOT NULL,
  `Occupancy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `room_booking_details`
--

INSERT INTO `room_booking_details` (`id`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `contry`, `room_type`, `check_in_date`, `check_in_time`, `check_out_date`, `Occupancy`) VALUES
(7, 'Ragini Vishwakarma', 'ragini@gmail.com', 727550965, 'Kolpanday,Kolghat,Azamgarh', 'Azamgarh', 'U.P', 276001, 'India', 'Standard Room', '2019-12-06', '08:00', '2019-12-06', 'single'),
(8, 'Anlaji viahwakarma', 'anjali@gmail.com', 7275308190, 'kolpanday azamgarh', 'azamgarh', 'U.P', 276001, 'India', 'Standard Room', '2019-12-06', '08:00', '2019-12-06', 'single'),
(12, 'sanjeev', 'sanjeevtech2@gmail.com', 0, 'dfjdlfj', '', '', 0, '', 'Suite Room', '2019-05-22', '22:57', '2017-10-31', 'single'),
(13, '', '', 0, '', '', '', 0, '', 'Deluxe Room', '2022-01-04', '02:56', '2022-01-04', 'single'),
(14, '', '', 0, '', '', '', 0, '', 'Standard Room', '2022-01-20', '00:18', '2022-01-19', 'dubble');

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

CREATE TABLE `room_categories` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`id`, `name`, `slug`) VALUES
(1, 'Sapa 5sao', '5-sao');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `caption`) VALUES
(3, 'img3.jpg', ''),
(6, 'img2.jpg', ''),
(8, 'img1.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_slider`
--
ALTER TABLE `details_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_booking_details`
--
ALTER TABLE `room_booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_categories`
--
ALTER TABLE `room_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `create_account`
--
ALTER TABLE `create_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `details_slider`
--
ALTER TABLE `details_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `room_booking_details`
--
ALTER TABLE `room_booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `room_categories`
--
ALTER TABLE `room_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
