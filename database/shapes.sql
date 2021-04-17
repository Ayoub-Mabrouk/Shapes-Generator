-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 08:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shapes`
--

-- --------------------------------------------------------

--
-- Table structure for table `circle`
--

CREATE TABLE `circle` (
  `Xaxes` int(11) DEFAULT NULL,
  `Yaxes` int(11) DEFAULT NULL,
  `R` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`Xaxes`, `Yaxes`, `R`) VALUES
(12, 2, 9),
(4, 2, 3),
(2, 3, 12),
(2, 3, 12),
(12, 12, 33),
(29, 29, 33);

-- --------------------------------------------------------

--
-- Table structure for table `rect`
--

CREATE TABLE `rect` (
  `Xaxes` int(11) DEFAULT NULL,
  `Yaxes` int(11) DEFAULT NULL,
  `Width` int(11) DEFAULT NULL,
  `Height` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rect`
--

INSERT INTO `rect` (`Xaxes`, `Yaxes`, `Width`, `Height`) VALUES
(2, 3, 4, 4),
(2, 3, 4, 5),
(2, 3, 4, 5),
(2, 3, 4, 5),
(2, 3, 4, 5),
(2, 3, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `square`
--

CREATE TABLE `square` (
  `Xaxes` int(11) DEFAULT NULL,
  `Yaxes` int(11) DEFAULT NULL,
  `Width` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `square`
--

INSERT INTO `square` (`Xaxes`, `Yaxes`, `Width`) VALUES
(4, 2, 3),
(2, 3, 4),
(2, 3, 4),
(29, 29, 80);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
