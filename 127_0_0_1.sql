-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 04:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--
CREATE DATABASE IF NOT EXISTS `blood_bank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blood_bank`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `admin_blood` varchar(5) NOT NULL,
  `admin_gender` varchar(10) NOT NULL,
  `admin_birth` varchar(25) NOT NULL,
  `admin_phone` varchar(11) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_blood`, `admin_gender`, `admin_birth`, `admin_phone`, `admin_address`, `admin_email`, `admin_password`, `admin_image`) VALUES
(1, 'Rakib Alom', 'A(+)', 'Male', '1997-10-05', '01623405027', '127/Block-A,Sobujsena,Ghasitula,Sylhet', 'rakibalom17@gmail.com', 'rakibalom', '');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donator`
--

CREATE TABLE `blood_donator` (
  `donar_id` int(11) NOT NULL,
  `donar_name` varchar(25) NOT NULL,
  `donar_birth` date NOT NULL,
  `donar_gender` varchar(20) NOT NULL,
  `donar_blood` varchar(5) NOT NULL,
  `donar_phone` varchar(11) NOT NULL,
  `donar_address` varchar(100) NOT NULL,
  `donar_password` varchar(30) NOT NULL,
  `donar_confirm_password` varchar(25) NOT NULL,
  `donar_status` varchar(50) NOT NULL,
  `donar_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donator`
--

INSERT INTO `blood_donator` (`donar_id`, `donar_name`, `donar_birth`, `donar_gender`, `donar_blood`, `donar_phone`, `donar_address`, `donar_password`, `donar_confirm_password`, `donar_status`, `donar_image`) VALUES
(1, 'Reyad Alom', '1997-10-05', 'Male', 'A(+)', '01777424393', 'Microniyan', 'rakibalom', 'rakibalom', '', 'passport-2.jpg'),
(2, 'Rafayel', '2018-10-30', 'Male', 'B(-)', '01623405027', 'out world', '1234', '1234', '', 'abandoned-architecture-art-1209926.jpg'),
(3, 'Mira', '2018-10-30', 'Female', 'B(+)', '01623405027', 'out world', '1234', '1234', '', 'apartment-architecture-art-276724.jpg'),
(4, 'Rubaiya', '2000-11-08', 'Female', 'A(-)', '01777424393', 'Microniya', '1234', '1234', '', 'book_heart_page_120859_3000x2100.jpg'),
(7, 'Radid', '2018-11-07', 'Male', 'O(-)', '01777424393', 'Microniya', '1234', '1234', '', 'couch-decor-decoration-373578.jpg'),
(8, 'Henri Hegard Ridar', '1878-09-17', 'Male', 'AB(-)', '01777424393', 'England', '1234', '1234', '', 'abstract-architecture-building-207153.jpg'),
(9, 'MD Rakibul Alom', '1997-10-05', 'Male', 'A(+)', '01623405027', 'Sylhet,Bangladesh', 'rakibalom', 'rakibalom', '', 'passport-1.jpg'),
(10, 'Fariha', '2004-10-12', 'Female', 'A(+)', '01623405027', 'Out World', '1234', '1234', '', 'art-black-and-white-collage-383568.jpg'),
(11, 'Rafsan Ema', '2003-10-14', 'Female', 'A(-)', '01777424393', 'Facebook', '1234', '1234', '', 'fall-autumn-red-season.jpg'),
(12, 'Sumona Akter Mohini', '2018-11-21', 'Male', 'A(-)', '01623405027', 'Facebook', '1234', '1234', '', 'book_heart_page_120859_3000x2100.jpg'),
(13, 'Sanjida Akhter', '1998-01-13', 'Female', 'B(+)', '01777424393', 'India', '1234', '1234', '', 'book_heart_page_120859_3000x2100.jpg'),
(14, 'Rafayel Sabatini', '1927-10-05', 'Male', 'B(-)', '01623405027', 'England', '1234', '1234', '', 'blur-bokeh-dark-8395.jpg'),
(15, 'Tanijila Akter', '2018-11-28', 'Female', 'O(+)', '01623405027', 'Facebook', '1234', '1234', '', 'pexels-photo-730662.jpeg'),
(16, 'Ruhan Ruhan', '2018-11-20', 'Male', 'O(+)', '01777424393', 'Science Fiction Story', '1234', '1234', '', 'apartment-architecture-art-276724.jpg'),
(17, 'Ihita', '1999-09-14', 'Male', 'AB(+)', '01777424393', 'Reyad Alom Rafkhata', '1234', '1234', '', 'cabinet_table_book_globe_lamp_books_library_54332_1920x1080.jpg'),
(18, 'Oishi', '2018-11-20', 'Female', 'AB(+)', '01777424393', 'Reyad Alom Rafkhata', '1234', '1234', '', 'art-blur-cement-253905.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `location` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `message` varchar(780) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Rakib Alom', 'rakibalom17@gmail.com', 'Test', 'I am testing here for this php code is right or no...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blood_donator`
--
ALTER TABLE `blood_donator`
  ADD PRIMARY KEY (`donar_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blood_donator`
--
ALTER TABLE `blood_donator`
  MODIFY `donar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
