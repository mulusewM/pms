-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2019 at 08:15 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmacyfinall`
--
CREATE DATABASE IF NOT EXISTS `pharmacyfinall` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pharmacyfinall`;
-- --------------------------------------------------------

--
-- Table structure for table `customer_bill`
--

CREATE TABLE IF NOT EXISTS `customer_bill` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `total` float NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cus_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customer_bill`
--

INSERT INTO `customer_bill` (`cus_id`, `Fname`, `Lname`, `date`, `total`, `user_id`) VALUES
(1, 'ghjk', 'jhkjk', '2018-06-21', 10, 26),
(2, 'fghg', 'vcbvb', '2018-06-21', 20, 26),
(3, 'bcb', 'bvcvc', '2018-06-19', 20, 26),
(4, 'sdf', 'dsgs', '2018-06-23', 10, 26),
(5, '3224', 'uu', '2018-06-23', 7, 26),
(6, 'sdf', 'asd', '2018-06-23', 7, 26),
(7, 'ddd', 'ccc', '2018-06-23', 7, 26),
(8, 'fff', 'aaa', '2018-06-23', 7, 26),
(9, 'abere', 'belew', '2019-04-10', 49, 26),
(10, 'ayisheshim', 'birihanie', '2019-05-15', 10, 26),
(11, 'aysheshim', 'bru', '2019-05-15', 10, 26),
(12, 'abebe', 'bru', '2019-05-20', 10, 26);

-- --------------------------------------------------------

--
-- Table structure for table `customer_buy_drugs`
--

CREATE TABLE IF NOT EXISTS `customer_buy_drugs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuss_id` int(11) NOT NULL,
  `solddrug_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cus_id` (`cuss_id`),
  KEY `solddrug_id` (`solddrug_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customer_buy_drugs`
--

INSERT INTO `customer_buy_drugs` (`id`, `cuss_id`, `solddrug_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 4),
(5, 3, 5),
(6, 8, 10),
(7, 9, 11),
(8, 10, 12),
(9, 11, 13),
(10, 12, 14);

-- --------------------------------------------------------

--
-- Table structure for table `expired_drugs`
--

CREATE TABLE IF NOT EXISTS `expired_drugs` (
  `expire_drug_id` int(11) NOT NULL AUTO_INCREMENT,
  `manuDate` date NOT NULL,
  `expireDate` date NOT NULL,
  `expire_drug_quantity` int(11) NOT NULL,
  `removed_date` date NOT NULL,
  `drug_id` int(11) NOT NULL,
  `removedby_id` int(11) NOT NULL,
  PRIMARY KEY (`expire_drug_id`),
  KEY `expired_drugs_ibfk_1` (`drug_id`),
  KEY `expired_drugs_ibfk_2` (`removedby_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `expired_drugs`
--

INSERT INTO `expired_drugs` (`expire_drug_id`, `manuDate`, `expireDate`, `expire_drug_quantity`, `removed_date`, `drug_id`, `removedby_id`) VALUES
(1, '2018-06-04', '2018-06-28', 84, '2019-05-08', 65, 27),
(2, '2018-06-04', '2018-06-28', 11, '2019-05-25', 65, 41),
(3, '2018-06-12', '2018-06-27', 69, '2019-05-25', 72, 41);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` varchar(30) NOT NULL,
  `drugname` varchar(30) NOT NULL,
  `drugtype` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `drugname`, `drugtype`, `quantity`, `orderdate`, `user_id`) VALUES
('o1', 'amoxy', 'solid', 80, '2019-05-25', 25);

-- --------------------------------------------------------

--
-- Table structure for table `sold_drugs`
--

CREATE TABLE IF NOT EXISTS `sold_drugs` (
  `sold_drug_id` int(11) NOT NULL AUTO_INCREMENT,
  `sold_drug_quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `sold_date` date NOT NULL,
  `soldby_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  PRIMARY KEY (`sold_drug_id`),
  KEY `soldby_id` (`soldby_id`),
  KEY `sold_drugs_ibfk_2` (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sold_drugs`
--

INSERT INTO `sold_drugs` (`sold_drug_id`, `sold_drug_quantity`, `price`, `sold_date`, `soldby_id`, `stock_id`) VALUES
(1, 1, 10, '2018-06-21', 26, 60),
(2, 1, 10, '2018-06-21', 26, 60),
(3, 1, 10, '2018-06-21', 26, 60),
(4, 1, 10, '2018-06-21', 26, 60),
(5, 1, 10, '2018-06-21', 26, 60),
(6, 1, 10, '2018-06-23', 26, 60),
(7, 1, 7, '2018-06-23', 26, 60),
(8, 1, 7, '2018-06-23', 26, 60),
(9, 1, 7, '2018-06-23', 26, 60),
(10, 1, 7, '2018-06-23', 26, 60),
(11, 7, 49, '2019-04-10', 26, 60),
(12, 1, 10, '2019-05-15', 26, 68),
(13, 1, 10, '2019-05-15', 26, 68),
(14, 1, 10, '2019-05-20', 26, 68);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `transfer_quantity` text NOT NULL,
  `manuDate` date NOT NULL,
  `expireDate` date NOT NULL,
  `transfered_date` date NOT NULL,
  `drugID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`stock_id`),
  KEY `stock_ibfk_1` (`user_id`),
  KEY `drugID` (`drugID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `transfer_quantity`, `manuDate`, `expireDate`, `transfered_date`, `drugID`, `user_id`) VALUES
(60, 'null', '0000-00-00', '0000-00-00', '2018-06-23', 65, 24),
(67, 'null', '0000-00-00', '0000-00-00', '0000-00-00', 72, 24),
(68, '3', '2019-02-15', '2019-08-28', '2019-04-10', 73, 25),
(69, '9', '2019-03-15', '2019-08-28', '2019-05-15', 74, 27),
(70, '33', '2019-02-24', '2019-08-26', '2019-05-25', 75, 41),
(71, 'null', '0000-00-00', '0000-00-00', '0000-00-00', 76, 41),
(72, 'null', '0000-00-00', '0000-00-00', '0000-00-00', 77, 41);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `drugID` int(11) NOT NULL AUTO_INCREMENT,
  `drugName` varchar(100) NOT NULL,
  `drugType` varchar(100) NOT NULL,
  `manuDate` date NOT NULL,
  `expireDate` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitCost` float NOT NULL,
  `sellingPrice` float NOT NULL,
  `recordedDate` date NOT NULL,
  `recorder_id` int(11) NOT NULL,
  PRIMARY KEY (`drugID`),
  KEY `recorder_id` (`recorder_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`drugID`, `drugName`, `drugType`, `manuDate`, `expireDate`, `quantity`, `unitCost`, `sellingPrice`, `recordedDate`, `recorder_id`) VALUES
(65, '    paracetamol', 'solid', '0000-00-00', '0000-00-00', 0, 6, 7, '2018-06-23', 24),
(72, 'paracetamol', 'solid', '0000-00-00', '0000-00-00', 0, 8, 10, '2018-06-23', 24),
(73, 'metrondazol', 'solid', '2019-06-12', '2019-06-27', 69, 8, 10, '2019-04-10', 25),
(74, 'amox', 'solid', '2019-03-15', '2019-08-28', 19, 10, 12, '2019-05-07', 27),
(75, 'amoxe', 'DD', '2019-02-24', '2019-08-26', 987, 12, 15, '2019-05-25', 41),
(76, 'derr', 'MMM', '2019-02-25', '2019-08-26', 1000, 12, 15, '2019-05-24', 41),
(77, 'pepciline', 'solid', '2019-03-24', '2019-08-26', 48, 12, 15, '2019-05-24', 41);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `sex` varchar(24) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Fname`, `Lname`, `sex`, `phoneNumber`) VALUES
(24, 'ayisheshim', 'Birihanie', 'male', 12345678),
(25, 'melese', 'ebabu', 'male', 1234567),
(26, 'Gebrye', 'Desse', 'male', 23456789),
(27, 'Yishamu', 'Getnet', 'Female', 234567),
(38, 'Fasil', 'birihanu', 'male', 2147483647),
(41, 'aster', 'adbaru', 'Female', 2147483647),
(42, 'ayisheshim', 'Birihanie', 'male', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`account_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`account_id`, `userName`, `password`, `role`, `user_id`, `status`) VALUES
(30, 'aaaaa', 'admin', 'Admin', 25, 0),
(31, 'ccccc', 'cashier', 'Cashier', 26, 0),
(32, 'ppppp', 'pharmacy', 'pharmacist', 27, 0),
(35, 'sssss', 'supplier', 'supplier', 38, 0),
(38, 'ssss', 'storer', 'storecordinator', 41, 0),
(39, 'mmmm', 'manager', 'manage', 42, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_bill`
--
ALTER TABLE `customer_bill`
  ADD CONSTRAINT `customer_bill_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `customer_buy_drugs`
--
ALTER TABLE `customer_buy_drugs`
  ADD CONSTRAINT `customer_buy_drugs_ibfk_1` FOREIGN KEY (`cuss_id`) REFERENCES `customer_bill` (`cus_id`),
  ADD CONSTRAINT `customer_buy_drugs_ibfk_2` FOREIGN KEY (`solddrug_id`) REFERENCES `sold_drugs` (`sold_drug_id`);

--
-- Constraints for table `expired_drugs`
--
ALTER TABLE `expired_drugs`
  ADD CONSTRAINT `expired_drugs_ibfk_1` FOREIGN KEY (`removedby_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `expired_drugs_ibfk_2` FOREIGN KEY (`removedby_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `sold_drugs`
--
ALTER TABLE `sold_drugs`
  ADD CONSTRAINT `sold_drugs_ibfk_1` FOREIGN KEY (`soldby_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `sold_drugs_ibfk_2` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`stock_id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`drugID`) REFERENCES `store` (`drugID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`recorder_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
