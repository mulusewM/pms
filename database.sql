-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2019 at 02:02 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `water44`
--
create dataBase IF NOT EXISTS `water44` DEFAULT CHARACTER SET latin1
COLLATE latin1_swedish_ci;
USE `water44`;
-- --------------------------------------------------------

--
-- Table structure for table `bankaccount`
--

CREATE TABLE IF NOT EXISTS `bankaccount` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `bank_Name` varchar(100) NOT NULL,
  `bank_Branch` varchar(100) NOT NULL,
  `BankCode` int(200) NOT NULL,
  `accountnumber` int(100) NOT NULL,
  `account_password` varchar(100) NOT NULL,
  `balance` double NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `customer_id` int(50) NOT NULL,
  PRIMARY KEY (`accountnumber`),
  UNIQUE KEY `id` (`id`,`account_password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4567 ;

--
-- Dumping data for table `bankaccount`
--

INSERT INTO `bankaccount` (`id`, `bank_Name`, `bank_Branch`, `BankCode`, `accountnumber`, `account_password`, `balance`, `first_name`, `last_name`, `customer_id`) VALUES
(4566, '', '', 0, 0, '', 0, '', '', 0),
(4559, 'yhjkk', 'xsdfdg', 78, 1234567, '12345', 8976, 'wertyjj', 'dfghjkj', 679),
(3, 'CBE', 'burie_damot', 2214, 100006436, '2214', 5191.5, 'abaynesh', 'berie', 2214),
(2, 'cbe', 'mehal_burie', 12345, 2147483647, '2220', 9998900, 'shegaw', 'yibeltal', 2220);

-- --------------------------------------------------------

--
-- Table structure for table `consumtionpayedcustomer`
--

CREATE TABLE IF NOT EXISTS `consumtionpayedcustomer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `customerfirstname` varchar(300) NOT NULL,
  `customerlastname` varchar(300) NOT NULL,
  `meterid` varchar(30) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `housenumber` varchar(20) NOT NULL,
  `kebele` varchar(10) NOT NULL,
  `Date` varchar(2) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `previous_Reading` int(100) NOT NULL,
  `present_Reading` int(100) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `consumtionpayedcustomer`
--

INSERT INTO `consumtionpayedcustomer` (`id`, `customerfirstname`, `customerlastname`, `meterid`, `customer_id`, `housenumber`, `kebele`, `Date`, `Month`, `Year`, `previous_Reading`, `present_Reading`, `price`) VALUES
(34, 'melkamu', 'degu', '22', '1212', '2323', '05', '1', '01', '2011', 45, 650, 6),
(35, 'frfcf', 'dcs', '13', '43', '432', '05', '21', '09', '2009', 25, 26, 6),
(36, 'mwe', 'wee', '43', '674', '456', '02', '4', '05', '2011', 43, 34, 199);

-- --------------------------------------------------------

--
-- Table structure for table `creataccountadmin`
--

CREATE TABLE IF NOT EXISTS `creataccountadmin` (
  `id` int(30) NOT NULL,
  `employeeid` int(200) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `pinnumber` int(200) NOT NULL,
  PRIMARY KEY (`employeeid`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creataccountadmin`
--

INSERT INTO `creataccountadmin` (`id`, `employeeid`, `first_name`, `last_name`, `email`, `user_name`, `password`, `pinnumber`) VALUES
(2, 62, 'melkamu', 'deguale', 'melkamu062@gmail.com', 'melkamu', '12345', 12347),
(0, 70, 'shegaw', 'yibeltal', 'shegiz070@gmail.com', 'shegaw', '123456', 12347),
(1, 6789, 'abaynesh', 'berie', 'abaynesh037@gmail.com', 'abaynesh', '12345', 253507);

-- --------------------------------------------------------

--
-- Table structure for table `creataccountbillofficer`
--

CREATE TABLE IF NOT EXISTS `creataccountbillofficer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `employeeid` int(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `pinnumber` int(200) NOT NULL,
  PRIMARY KEY (`employeeid`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `creataccountbillofficer`
--

INSERT INTO `creataccountbillofficer` (`id`, `employeeid`, `first_name`, `last_name`, `email`, `password`, `user_name`, `pinnumber`) VALUES
(5, 1234, 'abaynesh', 'berie', 'abay@gmail.com', '12345', 'abaynesh', 12345),
(6, 4555234, 'melkaa', 'degie', 'mel@gmail.com', '654321', 'melkamu', 98883234);

-- --------------------------------------------------------

--
-- Table structure for table `creataccountmanager`
--

CREATE TABLE IF NOT EXISTS `creataccountmanager` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `employeeid` int(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `pinnumber` int(200) NOT NULL,
  PRIMARY KEY (`employeeid`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `creataccountmanager`
--

INSERT INTO `creataccountmanager` (`id`, `employeeid`, `first_name`, `last_name`, `email`, `password`, `user_name`, `pinnumber`) VALUES
(8, 24, 'alemts', 'atalay', 'alem@gmail.com', '12345', 'alemata', 231),
(5, 1234, 'abaynesh', 'berie', 'abaynesh037@gmail.com', '098765', 'abaynesh', 91234),
(6, 9999, 'melkamu', 'deguale', 'melkamu@gmail.com', '12345', 'melkamu', 3344);

-- --------------------------------------------------------

--
-- Table structure for table `creataccounttechnicalsupervisor`
--

CREATE TABLE IF NOT EXISTS `creataccounttechnicalsupervisor` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `employeeid` int(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `pinnumber` int(200) NOT NULL,
  PRIMARY KEY (`employeeid`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `creataccounttechnicalsupervisor`
--

INSERT INTO `creataccounttechnicalsupervisor` (`id`, `employeeid`, `first_name`, `last_name`, `email`, `password`, `user_name`, `pinnumber`) VALUES
(1, 62, 'melkamu', 'deguale', 'melkamu062@gmail.com', '12345', 'melkamu', 12345),
(7, 1234, 'abaynesh', 'berie', 'abaynesh037@gmail.com', '12345', 'abaynesh', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(50) NOT NULL,
  `customerfirstname` varchar(50) NOT NULL,
  `customerlastname` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `Kebele` varchar(50) NOT NULL,
  `housenumber` varchar(50) NOT NULL,
  `pinnumber` int(200) NOT NULL,
  `meterid` varchar(100) NOT NULL,
  `Day` varchar(2) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `Year` varchar(5) NOT NULL,
  `metersize` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `customerfirstname`, `customerlastname`, `password`, `user_name`, `Kebele`, `housenumber`, `pinnumber`, `meterid`, `Day`, `Month`, `Year`, `metersize`) VALUES
(16, '4343', 'reee', 'rtttt', '12345', 'debasu', '02', '343', 23423, '32', '', '07', '2011', '1/2'),
(11, '7271', 'abaynesh', 'berie', '0931', 'user', '01', '4545', 1111, '2233', '02', '01', '2009', '1/2"'),
(12, '7341', 'melkamu', 'deguale', '0929', 'mel', '02', '4455', 1122, '2223', '02', '03', '20011', '1/2"');

-- --------------------------------------------------------

--
-- Table structure for table `newcustomerlineconection`
--

CREATE TABLE IF NOT EXISTS `newcustomerlineconection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(33) NOT NULL,
  `lastname` varchar(33) NOT NULL,
  `kebele` varchar(2) NOT NULL,
  `housenumber` int(7) NOT NULL,
  `idnumber` int(7) NOT NULL,
  `phonenumber` int(12) NOT NULL,
  `metersize` varchar(6) NOT NULL,
  `request` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `newcustomerlineconection`
--

INSERT INTO `newcustomerlineconection` (`id`, `firstname`, `lastname`, `kebele`, `housenumber`, `idnumber`, `phonenumber`, `metersize`, `request`) VALUES
(1, 'abaynesh', 'berie', '03', 7777, 898989, 99999999, '1/2', 'please send water'),
(62, 'melkamu1', 'deguale1', '04', 4325, 12345, 929322585, '', 'please install water service in my house');

-- --------------------------------------------------------

--
-- Table structure for table `oldcustomeordermaintenance`
--

CREATE TABLE IF NOT EXISTS `oldcustomeordermaintenance` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(44) NOT NULL,
  `lastname` varchar(44) NOT NULL,
  `kebele` varchar(2) NOT NULL,
  `housenumber` int(7) NOT NULL,
  `customerid` int(10) NOT NULL,
  `meterid` varchar(20) NOT NULL,
  `phonenumber` varchar(555) NOT NULL,
  `request` varchar(555) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `oldcustomeordermaintenance`
--

INSERT INTO `oldcustomeordermaintenance` (`id`, `firstname`, `lastname`, `kebele`, `housenumber`, `customerid`, `meterid`, `phonenumber`, `request`) VALUES
(7, 'abaynesh', 'berie', '01', 4545, 2214, '2220444', '090444', 'please send water'),
(78, 'hghjyg', 'dsgfhgf', '03', 8909, 56, '56', '35465768', 'bhjhk');

-- --------------------------------------------------------

--
-- Table structure for table `organizationaccount`
--

CREATE TABLE IF NOT EXISTS `organizationaccount` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `accountnumber` int(30) NOT NULL,
  `balance` float NOT NULL,
  `orginazationname` varchar(200) NOT NULL,
  PRIMARY KEY (`accountnumber`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `organizationaccount`
--

INSERT INTO `organizationaccount` (`id`, `accountnumber`, `balance`, `orginazationname`) VALUES
(1, 123456789, 7008.5, 'Burie City Water Supply Service');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(33) NOT NULL,
  `last_name` varchar(33) NOT NULL,
  `kebele` varchar(2) NOT NULL,
  `house_number` int(5) NOT NULL,
  `user_name` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `kebele`, `house_number`, `user_name`, `password`) VALUES
(1, 'melkamu', 'deguale', '01', 12, 'melkamu', '12345'),
(7, 'abaynesh', 'berie', '01', 12, 'abaynesh', '12345'),
(8, 'tesfa', 'bnayew', '02', 632, 'tesfa', '123456'),
(12, 'kebede', 'ayehush', '02', 2334, 'ayehush', '12345'),
(13, 'melkamu', '1/2', '01', 33, 'melkamu', '12345'),
(14, 'shegawe', 'yibeltale', '02', 125, 'shegawe', '1478'),
(15, 'gerr', 'wwww', '02', 8788, 'kasawu', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `replyforcustomer`
--

CREATE TABLE IF NOT EXISTS `replyforcustomer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(44) NOT NULL,
  `lastname` varchar(44) NOT NULL,
  `phonenumber` int(14) NOT NULL,
  `customerid` int(10) NOT NULL,
  `replay_text` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `replyforcustomer`
--

INSERT INTO `replyforcustomer` (`id`, `firstname`, `lastname`, `phonenumber`, `customerid`, `replay_text`) VALUES
(1, 'abaynesh', 'berie', 12345785, 2214, 'i will come tomorow'),
(2, 'abaynesh', 'degu', 925754, 12333, 'saaaaaaaaaaaaaaaaaa'),
(3, 'rrrrrrrrrrrrrr', 'yyyyyyyyyyyyy', 932759789, 78, 'sadfuyksldj');

-- --------------------------------------------------------

--
-- Table structure for table `reportconsumtionpayedcustomer`
--

CREATE TABLE IF NOT EXISTS `reportconsumtionpayedcustomer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `customerfirstname` varchar(300) NOT NULL,
  `customerlastname` varchar(300) NOT NULL,
  `meterid` varchar(30) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `Date` varchar(2) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `reportconsumtionpayedcustomer`
--

INSERT INTO `reportconsumtionpayedcustomer` (`id`, `customerfirstname`, `customerlastname`, `meterid`, `customer_id`, `Date`, `Month`, `Year`, `price`) VALUES
(25, 'abaynesh', 'berie', '2212', '2212', '02', '02', '2010', 854);

-- --------------------------------------------------------

--
-- Table structure for table `technicalreport`
--

CREATE TABLE IF NOT EXISTS `technicalreport` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `customerfirstname` varchar(55) NOT NULL,
  `customerlastname` varchar(55) NOT NULL,
  `Kebele` int(4) NOT NULL,
  `housenumber` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `meterid` int(50) NOT NULL,
  `Date` varchar(2) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `task` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `technicalreport`
--

INSERT INTO `technicalreport` (`id`, `firstname`, `lastname`, `customerfirstname`, `customerlastname`, `Kebele`, `housenumber`, `customer_id`, `meterid`, `Date`, `Month`, `Year`, `task`) VALUES
(6, 'abaynesh', 'berie', 'Shegaw', 'Yibeltal', 1, 4545, 37, 1, '1', '01', '2011', 'finish my work');

-- --------------------------------------------------------

--
-- Table structure for table `waterconsumtion`
--

CREATE TABLE IF NOT EXISTS `waterconsumtion` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `MRfirstname` varchar(100) NOT NULL,
  `MRlastname` varchar(100) NOT NULL,
  `customerfirstname` varchar(100) NOT NULL,
  `customerlastname` varchar(100) NOT NULL,
  `kebele` varchar(10) NOT NULL,
  `housenumber` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `meterid` int(100) NOT NULL,
  `Date` varchar(2) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `previous_Reading` int(100) NOT NULL,
  `present_Reading` int(100) NOT NULL,
  `consumtion` float NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `waterconsumtion`
--

INSERT INTO `waterconsumtion` (`id`, `MRfirstname`, `MRlastname`, `customerfirstname`, `customerlastname`, `kebele`, `housenumber`, `customer_id`, `meterid`, `Date`, `Month`, `Year`, `previous_Reading`, `present_Reading`, `consumtion`, `price`) VALUES
(29, 'abaynesh', 'melkamu', 'Shegaw', 'ayehush', '01', 4545, 2214, 2214, '08', '08', '2011', 900, 950, 50, 350);
