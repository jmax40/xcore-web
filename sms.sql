-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 01:24 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `outaccount`
--

CREATE TABLE IF NOT EXISTS `outaccount` (
  `id` int(11) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `mname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `birthdate` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outaccount`
--

INSERT INTO `outaccount` (`id`, `fname`, `mname`, `lname`, `gender`, `birthdate`, `contact`, `username`, `password`, `address`) VALUES
(1, 'jeff', 'abella ', 'oderio', 'Male', '', '', 'admin', 'admin', 'surallah'),
(2, 'James', 'net', 'webb', 'M', '000', '000', 'member', 'member', 'surallah');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `itemcode` int(11) NOT NULL,
  `productname` varchar(225) NOT NULL,
  `brand` varchar(225) NOT NULL,
  `purchaseprice` int(11) NOT NULL,
  `sellingprice` int(11) NOT NULL,
  `supplier` varchar(225) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date` varchar(250) NOT NULL,
  `partno` varchar(225) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `subname` varchar(100) NOT NULL,
  `user` varchar(250) NOT NULL,
  `totalRP` int(11) NOT NULL,
  `dateissue` varchar(100) NOT NULL,
  `receiptno` varchar(100) NOT NULL,
  PRIMARY KEY (`itemcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`itemcode`, `productname`, `brand`, `purchaseprice`, `sellingprice`, `supplier`, `quantity`, `description`, `date`, `partno`, `total`, `status`, `size`, `subname`, `user`, `totalRP`, `dateissue`, `receiptno`) VALUES
(1, 'CLUTCH BREAK', 'YAMAHA', 200, 250, 'SUP 1', 17, 'CB 1', '', '', 0, 'IN', 'size 5', '', '', 0, '', '001'),
(2, 'tension wire', 'yamaha', 5, 10, 'norallah', 0, 'des1', '01/02/2024', '123', 100, 'IN', '15', '1212', 'jeffrey', 12, '12', '15');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseitem`
--

CREATE TABLE IF NOT EXISTS `purchaseitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemcode` int(11) NOT NULL,
  `productname` varchar(225) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` float NOT NULL,
  `customer` varchar(225) NOT NULL,
  `date` varchar(250) NOT NULL,
  `month` varchar(225) NOT NULL,
  `year` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `casher` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `invoiceid` varchar(250) NOT NULL,
  `status` varchar(225) NOT NULL,
  `discount` varchar(225) NOT NULL,
  `void` varchar(225) NOT NULL,
  `tax` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `purchaseitem`
--

INSERT INTO `purchaseitem` (`id`, `itemcode`, `productname`, `price`, `qty`, `total`, `customer`, `date`, `month`, `year`, `type`, `casher`, `time`, `invoiceid`, `status`, `discount`, `void`, `tax`) VALUES
(106, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:25:33', 'MMM', 'DONED', '', '', ''),
(107, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:26:05', 'xasdas', 'DONED', '', '', ''),
(108, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:26:10', 'xasdas', 'DONED', '', '', ''),
(109, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:26:24', 'xasdas', 'DONED', '', '', ''),
(110, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:30:15', 'qqq', 'DONED', '', '', ''),
(111, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:32:24', 'xxxx', 'DONED', '', '', ''),
(112, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:35:08', 'OP', 'DONED', '', '', ''),
(113, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:36:39', 'ccc', 'DONED', '', '', ''),
(114, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:38:04', 'dsdsa', 'DONED', '', '', ''),
(115, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:38:54', '232323', 'DONED', '', '', ''),
(116, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:40:11', 'wew', 'DONED', '', '', ''),
(117, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:40:17', 'wew', 'DONED', '', '', ''),
(118, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:40:24', 'wew', 'DONED', '', '', ''),
(119, 1, 'CLUTCH BREAK', 250, 2, 500, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:40:32', 'wew', 'DONED', '', '', ''),
(120, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '09:42:31', '4', 'DONED', '', '', ''),
(121, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '23-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '22:53:09', 'sdsas', 'DONED', '', '', ''),
(122, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '23-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '22:53:41', 'aaa', 'DONED', '', '', ''),
(123, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '23-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '22:54:07', '5', 'DONED', '', '', ''),
(124, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '18:29:28', 'werty', 'DONED', '', '', ''),
(125, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '18:31:11', 'werty', 'DONED', '', '', ''),
(126, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '24-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '19:27:42', '132', 'DONED', '', '', ''),
(127, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '25-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '17:49:35', '1322', 'DONED', '', '', ''),
(128, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '25-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '17:50:15', '23424', 'DONED', '', '', ''),
(129, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '25-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '19:45:11', '31232131', 'DONED', '', '', ''),
(130, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '25-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '19:49:58', '555545', 'DONED', '', '', ''),
(131, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '25-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '21:05:07', '23232', 'DONED', '', '', ''),
(132, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '26-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '18:08:43', '78878', 'DONED', '', '', ''),
(133, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '26-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '18:14:13', 'sdadas', 'DONED', '', '', ''),
(134, 1, 'CLUTCH BREAK', 250, 1, 250, 'WALK-IN', '26-04-2024', '04-2024', '2024', 'RETAIL', 'jeff abella  oderio', '21:45:15', 'adasdas', 'IN', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
