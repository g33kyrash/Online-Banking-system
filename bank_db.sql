-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2015 at 10:35 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
`id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `gender`, `dob`, `relationship`, `department`, `address`, `mobile`, `login_id`, `pwd`, `lastlogin`) VALUES
(1, 'admin', 'M', '1994-01-01', 'unmarried', 'developer', 'globsyn kolkata', '18003004000', 'admin', 'admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

DROP TABLE IF EXISTS `atm`;
CREATE TABLE IF NOT EXISTS `atm` (
`id` int(10) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `account_no` int(10) NOT NULL,
  `atm_status` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`id`, `cust_name`, `account_no`, `atm_status`) VALUES
(15, 'Rashid feroz', 34, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary1`
--

DROP TABLE IF EXISTS `beneficiary1`;
CREATE TABLE IF NOT EXISTS `beneficiary1` (
`id` int(10) NOT NULL,
  `sender_id` int(10) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `reciever_id` int(10) NOT NULL,
  `reciever_name` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `beneficiary1`
--

INSERT INTO `beneficiary1` (`id`, `sender_id`, `sender_name`, `reciever_id`, `reciever_name`, `status`) VALUES
(21, 34, 'Rashid feroz', 35, 'Deepak rajwar', 'ACTIVE'),
(22, 34, 'Rashid feroz', 36, 'Shailesh kumar', 'ACTIVE'),
(23, 36, 'Shailesh kumar', 34, 'Rashid feroz', 'ACTIVE'),
(24, 35, 'Deepak rajwar', 34, 'Rashid feroz', 'ACTIVE'),
(25, 34, 'Rashid feroz', 38, 'isha dey', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `cheque_book`
--

DROP TABLE IF EXISTS `cheque_book`;
CREATE TABLE IF NOT EXISTS `cheque_book` (
`id` int(10) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `account_no` int(10) NOT NULL,
  `cheque_book_status` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cheque_book`
--

INSERT INTO `cheque_book` (`id`, `cust_name`, `account_no`, `cheque_book_status`) VALUES
(8, 'Rashid feroz', 34, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
`id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `nominee` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `accstatus` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `dob`, `nominee`, `account`, `address`, `mobile`, `email`, `password`, `branch`, `ifsc`, `lastlogin`, `accstatus`) VALUES
(34, 'Rashid feroz', 'M', '1993-12-30', 'ramu', 'savings', 'agapara', '9999955555', 'rashid@gmail.com', '28a1b310b43643306f560bb161ff6b67f763c576', 'KOLKATA', 'K421A', '2015-01-11 10:29:30', 'ACTIVE'),
(35, 'Deepak rajwar', 'M', '1990-12-26', 'ramu', 'savings', 'agarpara', '9999955556', 'deepak@gmail.com', '28a1b310b43643306f560bb161ff6b67f763c576', 'DELHI', 'D30AC', '2015-01-11 10:11:07', 'ACTIVE'),
(36, 'Shailesh kumar', 'M', '1993-06-26', 'ramu', 'savings', 'sodepur', '9999955556', 'shailesh@gmail.com', '28a1b310b43643306f560bb161ff6b67f763c576', 'BANGALORE', 'B6A9E', '0000-00-00 00:00:00', 'ACTIVE'),
(37, 'Ravi nandan', 'M', '0000-00-00', 'ramu', 'savings', 'durgapur', '9999955556', 'ravi@gmail.com', '28a1b310b43643306f560bb161ff6b67f763c576', 'DELHI', 'D30AC', '2015-01-11 10:18:57', 'ACTIVE'),
(38, 'Isha dey', 'F', '1990-12-26', 'ramu', 'savings', 'agarpara', '9999955556', 'isha@gmail.com', '28a1b310b43643306f560bb161ff6b67f763c576', 'KOLKATA', 'K421A', '0000-00-00 00:00:00', 'ACTIVE'),
(39, 'sunny kumar', 'M', '2015-01-14', 'ramu', 'savings', 'agarpara', '9804381248', 'sunny@gmail.com', '28a1b310b43643306f560bb161ff6b67f763c576', 'DELHI', 'D30AC', '2015-01-11 10:09:36', 'ACTIVE'),
(40, 'Pankaj kumar', 'M', '1996-02-18', 'Deepak', 'savings', 'agarpara', '8956231245', 'pankaj@gmail.com', '28a1b310b43643306f560bb161ff6b67f763c576', 'DELHI', 'D30AC', '2015-01-11 09:42:43', 'ACTIVE'),
(41, 'Sharique hassan', 'M', '1993-12-26', 'ramu', 'savings', 'sodepur', '8956231245', 'sarik@gmail.com', 'b638866443ed874cd5a9449a090cb8dce66e4a3a', 'KOLKATA', 'K421A', '2015-01-11 10:27:48', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `passbook34`
--

DROP TABLE IF EXISTS `passbook34`;
CREATE TABLE IF NOT EXISTS `passbook34` (
`transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `passbook34`
--

INSERT INTO `passbook34` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2015-01-08', 'Rashid feroz', 'KOLKATA', 'K421A', 13000, 0, 13000.00, 'Account Open'),
(9, '2015-01-09', 'Rashid feroz', 'KOLKATA', 'K421A', 0, 500, 12500.00, 'TO Deepak rajwar'),
(10, '2015-01-10', 'Rashid feroz', 'KOLKATA', 'K421A', 100, 0, 12600.00, 'BY Deepak rajwar'),
(11, '2015-01-10', 'Rashid feroz', 'KOLKATA', 'K421A', 2593, 0, 15193.00, 'BY Deepak rajwar');

-- --------------------------------------------------------

--
-- Table structure for table `passbook35`
--

DROP TABLE IF EXISTS `passbook35`;
CREATE TABLE IF NOT EXISTS `passbook35` (
`transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `passbook35`
--

INSERT INTO `passbook35` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2015-01-09', 'Deepak rajwar', 'DELHI', 'D30AC', 10002, 0, 10002.00, 'Account Open'),
(7, '2015-01-09', 'Deepak rajwar', 'DELHI', 'D30AC', 500, 0, 10502.00, 'BY Rashid feroz'),
(8, '2015-01-10', 'Deepak rajwar', 'DELHI', 'D30AC', 0, 100, 10402.00, 'TO Rashid feroz'),
(9, '2015-01-10', 'Deepak rajwar', 'DELHI', 'D30AC', 0, 2593, 7809.00, 'TO Rashid feroz');

-- --------------------------------------------------------

--
-- Table structure for table `passbook36`
--

DROP TABLE IF EXISTS `passbook36`;
CREATE TABLE IF NOT EXISTS `passbook36` (
`transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passbook36`
--

INSERT INTO `passbook36` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2015-01-09', 'Shailesh kumar', 'BANGALORE', 'B6A9E', 95621, 0, 95621.00, 'Account Open');

-- --------------------------------------------------------

--
-- Table structure for table `passbook37`
--

DROP TABLE IF EXISTS `passbook37`;
CREATE TABLE IF NOT EXISTS `passbook37` (
`transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passbook37`
--

INSERT INTO `passbook37` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2015-01-09', 'Ravi nandan', 'DELHI', 'D30AC', 9000, 0, 9000.00, 'Account Open');

-- --------------------------------------------------------

--
-- Table structure for table `passbook38`
--

DROP TABLE IF EXISTS `passbook38`;
CREATE TABLE IF NOT EXISTS `passbook38` (
`transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passbook38`
--

INSERT INTO `passbook38` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2015-01-09', 'Isha dey', 'KOLKATA', 'K421A', 10000, 0, 10000.00, 'Account Open');

-- --------------------------------------------------------

--
-- Table structure for table `passbook39`
--

DROP TABLE IF EXISTS `passbook39`;
CREATE TABLE IF NOT EXISTS `passbook39` (
`transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passbook39`
--

INSERT INTO `passbook39` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2015-01-10', 'sunny kumar', 'DELHI', 'D30AC', 1000, 0, 1000.00, 'Account Open');

-- --------------------------------------------------------

--
-- Table structure for table `passbook40`
--

DROP TABLE IF EXISTS `passbook40`;
CREATE TABLE IF NOT EXISTS `passbook40` (
`transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passbook40`
--

INSERT INTO `passbook40` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2015-01-11', 'Pankaj kumar', 'DELHI', 'D30AC', 1000, 0, 1000.00, 'Account Open');

-- --------------------------------------------------------

--
-- Table structure for table `passbook41`
--

DROP TABLE IF EXISTS `passbook41`;
CREATE TABLE IF NOT EXISTS `passbook41` (
`transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passbook41`
--

INSERT INTO `passbook41` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2015-01-11', 'Sharique hassan', 'KOLKATA', 'K421A', 1000, 0, 1000.00, 'Account Open');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
`id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `doj` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `gender` char(1) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `dob`, `relationship`, `department`, `doj`, `address`, `mobile`, `email`, `pwd`, `gender`, `lastlogin`) VALUES
(1, 'sunil', '1990-05-05', 'married', 'revenue', '1999-11-11', 'kestopur12', 'sunil@gmail', 'kul@gmail.com', 'wew', 'M', '2015-01-11 10:29:48'),
(2, 'akash', '1998-08-21', 'unmarried', 'revenue', '2013-08-03', 'kolkata', '9635722546', 'akash@gmail.com', '125', 'M', '2015-01-10 21:22:59'),
(4, 'pankaj', '1989-05-31', 'married', 'revenue', '2015-01-04', 'bhagalpur13', 'pankaj@gmai', 'pankaj@gmail.com', '789', 'M', '0000-00-00 00:00:00'),
(5, 'sharma', '1980-04-21', 'married', 'revenue', '1991-01-01', 'khidirpur', '9876543210', 'sharma@gmail.com', 'sharma', 'M', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`login_id`);

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cheque_book`
--
ALTER TABLE `cheque_book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `passbook34`
--
ALTER TABLE `passbook34`
 ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `passbook35`
--
ALTER TABLE `passbook35`
 ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `passbook36`
--
ALTER TABLE `passbook36`
 ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `passbook37`
--
ALTER TABLE `passbook37`
 ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `passbook38`
--
ALTER TABLE `passbook38`
 ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `passbook39`
--
ALTER TABLE `passbook39`
 ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `passbook40`
--
ALTER TABLE `passbook40`
 ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `passbook41`
--
ALTER TABLE `passbook41`
 ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `atm`
--
ALTER TABLE `atm`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `cheque_book`
--
ALTER TABLE `cheque_book`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `passbook34`
--
ALTER TABLE `passbook34`
MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `passbook35`
--
ALTER TABLE `passbook35`
MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `passbook36`
--
ALTER TABLE `passbook36`
MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `passbook37`
--
ALTER TABLE `passbook37`
MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `passbook38`
--
ALTER TABLE `passbook38`
MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `passbook39`
--
ALTER TABLE `passbook39`
MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `passbook40`
--
ALTER TABLE `passbook40`
MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `passbook41`
--
ALTER TABLE `passbook41`
MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
