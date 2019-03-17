-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 09:10 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roadsafety`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `Id` int(255) NOT NULL,
  `Oneline` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`Id`, `Oneline`, `Details`, `image`) VALUES
(1, 'A pothole nearly of about 50cm which whose Image is provided', 'A pothole nearly of about 50cm which whose Image is providedA pothole nearly of about 50cm which whose Image is providedA pothole nearly of about 50cm which whose Image is providedA pothole nearly of about 50cm which whose Image is provided', 'img/13.png'),
(2, 'A pothole nearly of about 50cm which whose Image is providedA pothole nearly of about 50cm which whose Image is provided', 'A pothole nearly of about 50cm which whose Image is providedA pothole nearly of about 50cm which whose Image is providedA pothole nearly of about 50cm which whose Image is providedA pothole nearly of about 50cm which whose Image is provided', 'img/14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `userID` int(100) DEFAULT '1',
  `oneline` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `userID`, `oneline`, `detail`, `lat`, `lon`) VALUES
(1, 1, 'kkj', 'kjkj', '19.2072981', '73.1858611'),
(2, 1, 'gjhjhj', 'jhk', '19.2091173', '73.1991224'),
(3, 1, 'thiooppp', 'kjkjk', '19.0811189', '72.8884903');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(255) NOT NULL,
  `desc_id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `desc_id`, `img`) VALUES
(1, 2, 'index11.html'),
(2, 3, 'contactus.html');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `contact`, `password`) VALUES
(1, '0', '0', '2147483647', '0'),
(2, '0', '0', '2147483647', '0'),
(3, '0', '0', '2147483647', '0'),
(4, '0', '0', '2147483647', '0'),
(5, '0', '0', '2147483647', '0'),
(6, '0', '0', '0', '0'),
(7, '0', '0', '0', '0'),
(8, '0', '0', '0', '0'),
(9, '0', '0', '0', '0'),
(10, '0', '0', '0', '0'),
(11, '0', '0', '0', '0'),
(12, '0', '0', '2147483647', '0'),
(13, '0', '0', '2147483647', '0'),
(14, '0', '0', '2147483647', '0'),
(15, '0', '0', '2147483647', '0'),
(16, '0', '0', '2147483647', '0'),
(17, '0', '0', '2147483647', '0'),
(21, 'Shakthi', 'shakthi.mudaliar16@siesgst.ac.in', '8149071084', '12345'),
(22, 'Sabestin', 'Sabestin.nadar16@siesgst.ac.in', '17687298911', '12345'),
(23, 'jhk', 'Shakti.mudaliar.sm@gmail.com', '7981989100', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
