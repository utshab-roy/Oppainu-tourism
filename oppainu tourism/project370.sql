-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2015 at 04:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project370`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `pass`, `phone`, `add`) VALUES
(1, 'romy', '', 'admin', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `cart1`
--

CREATE TABLE IF NOT EXISTS `cart1` (
  `c1_ID` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `ncp_id` int(30) NOT NULL,
  PRIMARY KEY (`c1_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cart2`
--

CREATE TABLE IF NOT EXISTS `cart2` (
  `c2_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `hotel_id` int(30) NOT NULL,
  `place_id` int(30) NOT NULL,
  `departure_date` date NOT NULL,
  `end_date` date NOT NULL,
  `comments` varchar(50) NOT NULL,
  `approval` varchar(50) NOT NULL,
  `total_cost` int(30) NOT NULL,
  `approve_date` date NOT NULL,
  `apply_date` date NOT NULL,
  PRIMARY KEY (`c2_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cart2`
--

INSERT INTO `cart2` (`c2_id`, `user_id`, `hotel_id`, `place_id`, `departure_date`, `end_date`, `comments`, `approval`, `total_cost`, `approve_date`, `apply_date`) VALUES
(1, 0, 3, 1, '0000-00-00', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00'),
(2, 0, 3, 1, '0000-00-00', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00'),
(3, 0, 3, 1, '0000-00-00', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00'),
(4, 0, 3, 1, '0000-00-00', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00'),
(5, 0, 3, 1, '0000-00-00', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00'),
(6, 0, 3, 1, '0000-00-00', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00'),
(7, 0, 3, 1, '0000-00-00', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00'),
(8, 0, 3, 1, '0000-00-00', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00'),
(9, 0, 3, 1, '0000-00-00', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `representative_name` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `name`, `representative_name`, `designation`, `email`, `pass`) VALUES
(1, 'romy tours', 'major tom', 'ceo', 'major.tom@warrior.net', 'abc'),
(2, 'telot bonvojon corporation', 'sir telot', 'ceo', 'sir.telot@miliif.com', 'abc'),
(3, 'ashik vaccation house', 'ashik vai', 'genarel mannager', 'halim.kalu@halua.com', 'abc'),
(4, 'telot tours', 'telot', 'ceo', 'telot@gmail.com', 'telot');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `hotel_id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `place_ID` varchar(10) NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `name`, `address`, `phone`, `type`, `cost`, `email`, `place_ID`) VALUES
(2, 'dfsd', 'dsg', 'adgDG', 'double', 'SDAGS', 'ASG', '1'),
(3, 'wratwe', 'asdfads', 'adsfasd', 'single', '3000', 'asdg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `htl_temp`
--

CREATE TABLE IF NOT EXISTS `htl_temp` (
  `htl_temp_id` int(50) NOT NULL AUTO_INCREMENT,
  `htl_id` int(50) NOT NULL,
  `rooms` int(50) NOT NULL,
  `place_id` int(50) NOT NULL,
  PRIMARY KEY (`htl_temp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `htl_temp`
--

INSERT INTO `htl_temp` (`htl_temp_id`, `htl_id`, `rooms`, `place_id`) VALUES
(29, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ncp`
--

CREATE TABLE IF NOT EXISTS `ncp` (
  `ncp_id` int(30) NOT NULL AUTO_INCREMENT,
  `headline` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `departure_date` date NOT NULL,
  `end_date` date NOT NULL,
  `cost` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `about` varchar(500) NOT NULL,
  `picture_ncp` varchar(50) NOT NULL,
  `company_id` int(10) NOT NULL,
  PRIMARY KEY (`ncp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ncp`
--

INSERT INTO `ncp` (`ncp_id`, `headline`, `place`, `departure_date`, `end_date`, `cost`, `time`, `about`, `picture_ncp`, `company_id`) VALUES
(1, 'river cruise in burganga', 'sadarghat,buriganga', '2015-07-23', '2015-07-25', 500, '5.00pm', 'tour contains breakfast and lunch . enjoy beautiful buriganga river . we will be riding a big speed boat. dont miss this !!!!', 'buriganga1.jpg', 1),
(2, 'visit moynamoti', 'Dhaka-Comillah-Dhaka', '2015-06-28', '2015-06-08', 500, '10.00am', 'hey hey hey !!! if you want a quick refrehing tour please join us and click for booking this tour.tour includes : sight seeing , museum visit , world war graveyard visit , lunch and our very own tour guide. come along. ', 'moynamoti1.jpg', 2),
(3, 'visit coxsbazar', 'Dhaka - coxs bazar- Dhaka', '2015-07-24', '2015-07-30', 7000, '8.00 am', ' Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release', 'cox1.jpg', 1),
(4, 'Saint Martin''s island is Waiting for you !!!', 'Dhaka -Coxs bazar - SaintMartin-Dhaka', '2015-07-22', '2015-07-30', 10000, '8.00 am', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas', 'saint1.jpg', 3),
(6, 'happy tours in dhaka', 'dgaka to dhaka', '2015-07-29', '2015-07-31', 500, '8.00am', 'jhasgfhkgkjfhkdf', 'romy.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `place_id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `attractions` varchar(200) NOT NULL,
  `about` varchar(2000) NOT NULL,
  `picture_plc` varchar(20) NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `name`, `genre`, `attractions`, `about`, `picture_plc`) VALUES
(1, 'Sundarbans', 'adventure,nature', 'mangrove forest,Royal Bengal Tiger , Rivers , Spotted deer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'sundarban1.jpg'),
(2, 'Saint martins island', 'honeymoon,adventure,nature', 'beach,sea,sun bathing,speedboat ride,exotic seafood ,local handicraft ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'saint2.jpg'),
(3, 'Moynamoti', 'cultural,nature', 'monastery,museum,picnic spot, natural forest', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'moynamoti2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tns_temp`
--

CREATE TABLE IF NOT EXISTS `tns_temp` (
  `tns_temp_id` int(50) NOT NULL AUTO_INCREMENT,
  `tns_id` int(50) NOT NULL,
  `tns_sdl_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `seats` int(50) NOT NULL,
  PRIMARY KEY (`tns_temp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tns_temp`
--

INSERT INTO `tns_temp` (`tns_temp_id`, `tns_id`, `tns_sdl_id`, `date`, `seats`) VALUES
(14, 1, 2, '2015-07-29', 11);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `transport_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `way` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `place_ID` int(10) NOT NULL,
  PRIMARY KEY (`transport_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`transport_id`, `name`, `address`, `way`, `type`, `cost`, `email`, `place_ID`) VALUES
(1, 'motalib poribahan', 'Dhaka', 'road', 'bus-Ac', '3000', 'sdhf', 1),
(2, 'motalib poribahan', 'Dhaka', 'road', 'bus-NonAc', '2000', 'ZXC', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transport_schedule`
--

CREATE TABLE IF NOT EXISTS `transport_schedule` (
  `ts_id` int(30) NOT NULL AUTO_INCREMENT,
  `departure_date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `seat_status` varchar(50) NOT NULL,
  `transport_ID` int(20) NOT NULL,
  PRIMARY KEY (`ts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transport_schedule`
--

INSERT INTO `transport_schedule` (`ts_id`, `departure_date`, `time`, `comment`, `seat_status`, `transport_ID`) VALUES
(1, '2015-07-29', '23:47', 'eqwd', '50', 1),
(2, '2015-07-29', '5.00am', 'jb,m,', '55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`) VALUES
(2, 'asdasd', 'zasd'),
(3, 'dgdf', 'dgdgdfgd'),
(4, '4', '45454545'),
(5, 'fgjhfgh', 'ghfgh'),
(6, 'fdjdj', 'fgjfj'),
(7, 'xcvbxcvbcvb', 'vbcxvb'),
(8, 'ghfjjghfgh', 'fjfhj'),
(9, 'gdhdsx', 'xghxgh'),
(10, 'aSFASASF', 'ASFASF'),
(11, 'eysy', 'sydfy'),
(12, 'fgjhfgh', 'dhgh'),
(13, 'zsdg', 'sdg'),
(14, 'erysdfyh', 'dfhdfh'),
(15, 'zsdg', 'zcxv'),
(16, 'fg', 'fgfzdg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
