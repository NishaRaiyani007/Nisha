-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2015 at 01:00 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ice_cream`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_no` double NOT NULL,
  `credit_no` double NOT NULL,
  `name` varchar(100) NOT NULL,
  `contactno` double NOT NULL,
  `address` mediumtext NOT NULL,
  `city` varchar(100) NOT NULL,
  `totalamountt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_no`, `credit_no`, `name`, `contactno`, `address`, `city`, `totalamountt`) VALUES
(11, 52, 'ms', 0, '9978675654', 'mnnb', 120),
(9, 8521, 'payal', 98754, 'mnjnj', 'hbn', 600),
(9, 52, 'payal', 98754, 'mnjnj', 'hbn', 600),
(7, 8522, 'shar', 9877655, 'nbvbv', 'rajkot', 360),
(2, 111, 'nkn', 3330202, 'jbhbh', 'bhb', 600),
(5, 258, 'kajal', 898658979, 'raiya road', 'rajkot', 1200),
(5, 8676, 'mnbn', 87451, 'uggh', 'rajkot', 720),
(57575, 451, 'fhgfg', 75752, 'fhgfgf', 'gthytfghy', 720),
(5365, 64654, 'hghd', 5445, 'yytyu', 'tyt', 480),
(12333, 12333333332, 'jksajksjakss', 9090909090, 'nskjaskajsk', 'kjksjakjska', 2547960),
(23, 7585525, 'payal', 9662402562, 'jdhsfusdf', 'jfgd', 240),
(12, 921321, 'chiragi', 9555654466, 'ewfjkwebfwj', 'dejkkfwek', 480);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` mediumtext NOT NULL,
  `phone_no` double NOT NULL,
  `email` varchar(1000) NOT NULL,
  `suggestion` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`first_name`, `last_name`, `address`, `phone_no`, `email`, `suggestion`) VALUES
('ddc', 'cxx', 'c cx xc cxx', 878461, 'xncx@bhb.com', 'ccxcc'),
('ddc', 'cxx', 'c cx xc cxx', 878461, 'xncx@bhb.com', 'ccxcc'),
('gfv', 'vgvgf', 'fguhdfu', 987654, 'ffuh@mm.com', 'yuu'),
('gfv', 'vgvgf', 'fguhdfu', 987654, 'ffuh@mm.com', 'yuu'),
('javiya', 'mn', 'jghh', 976665, 'ma@fg.com', 'hi'),
('manali', 'kkn', 'ihjhb', 978676, 'hjb@gmail.com', 'kjnjnj'),
('nikita', 'jhb', 'hbhbh', 97665, 'nnn@gmail.com', 'hbhgfgcc'),
('mbb', 'njb', 'yyftft', 8454511, 'mnbh@gmail.com', 'hghvv'),
('nbb', 'hjjb', 'yujyj', 45461, 'uyjy@gmail.com', 'juyj'),
('mnmbn', 'jbjb', 'jhjh', 977564, '  bnv/@g.com', 'jhjg'),
('yyug', 'yuguy', 'fyuyf', 45864986, 'gyug.@gmail.com', 'gjhgj'),
('mbjb', 'knjnj', 'njnj', 51516121, '  bnv/@g.com', 'knj'),
('nisha', 'raiyani', 'sdfbkjfbsdkj', 9998418111, 'nishuraiyani7@gmail.com', 'dfsdj');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`, `path`, `price`) VALUES
(1, 'Strawberry-delight', 'images/23.jpg', 120),
(2, 'Chocolate', 'images/d.jpg', 120),
(3, 'Orange', 'images/h1.jpg', 120),
(4, 'Venila', 'images/vbnm.jpg', 120),
(5, 'CoconutPleasure', 'images/r.jpg', 120),
(6, 'Choco&Wefars', 'images/g.jpg', 120),
(7, 'Passionfruit&mango', 'images/3.jpg', 120),
(8, 'MapleWalnut', 'images/h.jpg', 120),
(9, 'Caremelita', 'images/e.jpg', 120),
(10, 'Pistachio', 'images/1111.jpg', 120),
(11, 'Swischocolate', 'images/sc.jpg', 120),
(12, 'Choconuts', 'images/cup.jpg', 120);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('test', 'test'),
('aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cps` varchar(10) NOT NULL,
  `fn` varchar(20) NOT NULL,
  `ln` varchar(20) NOT NULL,
  `ad` mediumtext NOT NULL,
  `pno` double NOT NULL,
  `emid` mediumtext NOT NULL,
  `ead` varchar(100) NOT NULL,
  `ct` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `coun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`username`, `password`, `cps`, `fn`, `ln`, `ad`, `pno`, `emid`, `ead`, `ct`, `pincode`, `coun`) VALUES
('mnnnnnn', 'bhvbvb', 'mhjb', 'bbh', 'jbjb', 'hhhvv', 98765, 'jknvdb', 'gmail.com', ' rajkotw', 98784, 'india'),
('aaaa', 'aaaa', 'aaaa', 'hjshj', 'jhdjsh', 'jhhdjsh', 9662402562, 'sss', '', ' sjakjska', 909090, 'india');
