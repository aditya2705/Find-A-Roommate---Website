-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2014 at 10:53 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bs`
--

CREATE TABLE IF NOT EXISTS `bs` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roomAddress` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `furniture` varchar(255) NOT NULL,
  `sell_particulars` varchar(255) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL,
  `image_4` varchar(100) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bs`
--

INSERT INTO `bs` (`bid`, `name`, `roomAddress`, `price`, `city`, `type`, `furniture`, `sell_particulars`, `image_1`, `image_2`, `image_3`, `image_4`) VALUES
(1, 'Anurag Kash', 'C-2/ 103, Som Shivam, Jalgaon', 8900000, 'jalgaav', '2 BHK', 'Fully-furnished', 'Contract cost not included', 'images/Vastu-for-room-size.jpg', 'images/images(1).jpg', 'images/images(2).jpg', 'images/images(3).jpg'),
(2, 'Sajid Khan', 'B-4, Thomas Palace, Amboli', 4000000, 'Chandrapur', '1 RK', 'Semi-furnished', 'Property in legal issues', 'images/Vastu-for-room-size.jpg', 'images/images(1).jpg', 'images/images(2).jpg', 'images/images(3).jpg'),
(3, 'Rajkumar Yadav', 'A-8/103,Mansarovar Complex, Dhamankar Naka', 700000, 'Bhiwandi', '3 BHK', 'Non-furnished', 'Price inclusive of contract cost', 'images/Vastu-for-room-size.jpg', 'images/images(1).jpg', 'images/images(2).jpg', 'images/images(3).jpg'),
(4, 'Rohit Shetty', '102, Baba Amte Nagar', 4500000, 'Chennai', '1 BHK', 'Fully-furnished', 'Property in legal issues', 'images/Vastu-for-room-size.jpg', 'images/images(1).jpg', 'images/images(2).jpg', 'images/images(3).jpg'),
(5, 'Dibakar Rai', '405, Bengal Nagar', 7500000, 'Mumbai', '3 BHK', 'Non-furnished', 'Price inclusive of contract cost', 'images/Vastu-for-room-size.jpg', 'images/images(1).jpg', 'images/images(2).jpg', 'images/images(3).jpg'),
(6, 'Karan Johar', '205, Narmada Apt., Near electric Hole', 2000000, 'Nagpur', '2 BHK', 'Fully-furnished', 'Contract cost not included', 'images/Vastu-for-room-size.jpg', 'images/images(1).jpg', 'images/images(2).jpg', 'images/images(3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `username`, `password`, `rid`, `oid`, `bid`) VALUES
(3, 'surbhi mantri', 'surbhi', 'f10803b91250c4cb67e6c8e1b438310f', 1, 0, 0),
(5, 'pratik panjwani', 'pratik.panjwani94@gmail.com', '0646ea030838b39dc93cac1f1c15d7ba', 4, 0, 0),
(13, 'anurag kashyap', 'anu@manu.com', '8a29772fc03e2506bb9648445049b6b2', 0, 0, 1),
(14, 'sajid khan', 'sajid@b.com', 'f10803b91250c4cb67e6c8e1b438310f', 0, 0, 2),
(15, 'rajkumar yadav', 'r@y.com', '47c35440cd7a7eb4776a0dafb0c2b50a', 0, 0, 3),
(16, 'rohit shetty', 'r@yuy.com', '47c35440cd7a7eb4776a0dafb0c2b50a', 0, 0, 4),
(17, 'dibakar banerjee', 'dib@kar.gmail.com', 'c82d2bdbcc107c370ff82f064e7efe1c', 0, 0, 5),
(18, 'karan johar', 'k@run.com', 'ffbf569f5e8532e7d96217bf89a4df55', 0, 0, 6),
(19, 'sanjay ambekar', 'sanjay@s.com', 'f10803b91250c4cb67e6c8e1b438310f', 0, 1, 0),
(20, 'premnarayan rai', 'prem@bhaiyaa.com', '0646ea030838b39dc93cac1f1c15d7ba', 0, 2, 0),
(21, 'sabrina almeida', 's@al.com', 'f10803b91250c4cb67e6c8e1b438310f', 0, 3, 0),
(22, 'salman khan', 'sallu@bhai.com', 'f10803b91250c4cb67e6c8e1b438310f', 0, 4, 0),
(23, 'rahul rai', 'rahu94@gmail.com', '47c35440cd7a7eb4776a0dafb0c2b50a', 5, 0, 0),
(24, 'aditya rathi', 'aditya95@gmail.com', '8a29772fc03e2506bb9648445049b6b2', 2, 0, 0),
(25, 'soumil rao', 'soumil94@gmail.com', 'f10803b91250c4cb67e6c8e1b438310f', 3, 0, 0),
(26, '', 'pratik.panjwani94@gmail.com', 'c82d2bdbcc107c370ff82f064e7efe1c', 0, 0, 0),
(27, 'ef', 'asd@gmail.com', '9c73d8a08fc3dd3b9209dc2b1e91ff40', 0, 0, 0),
(28, 'aditya', 'pratik.panjwani94@gmail.com', '2a1b5704c633a3add3d3786488c92e1c', 0, 0, 0),
(29, 'acs', 'pratik.panjwani94@gmail.com', 'abc311bd52b27ed8147ce15d69a0c82e', 0, 0, 0),
(30, 'pratik', 'pratik.panjwani94@gmail.com', 'abc311bd52b27ed8147ce15d69a0c82e', 0, 0, 0),
(31, 'asd', 'asfasf@gmail.com', '9c73d8a08fc3dd3b9209dc2b1e91ff40', 0, 0, 0),
(32, 'asd', 'asd@gmail.com', '8a29772fc03e2506bb9648445049b6b2', 0, 0, 0),
(33, 'asfag', 'pratik.panjwani94@gmail.com', '53e8992db45e7bd1aa59f253387a69d8', 0, 0, 0),
(34, 'a', 'pratik.panjwani94@gmail.com', '8a29772fc03e2506bb9648445049b6b2', 0, 0, 0),
(35, 'a', 'pratik.panjwani94@gmail.com', '8a29772fc03e2506bb9648445049b6b2', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `permanent_address` varchar(100) DEFAULT NULL,
  `qual_degree` varchar(100) DEFAULT NULL,
  `culture_religion` varchar(100) DEFAULT NULL,
  `culture_marital` varchar(100) DEFAULT NULL,
  `culture_language` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`permanent_address`, `qual_degree`, `culture_religion`, `culture_marital`, `culture_language`) VALUES
('asdhjbsadjb, ,wqef ,werf wqf, Bhiwandi', 'Student', 'Hindu', 'Single', 'English, Hindi'),
('avsdkjb, qdf ,q qf qrg, Nashik', 'Student', '-', 'Single', 'English, Hindi'),
('Amravati-gaav', 'EEshtudent', 'Indian Jew', 'Its Complicated', 'Sindhi, Hindi, Marathi(Specialization)');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE IF NOT EXISTS `rent` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roomAddress` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `furniture` varchar(255) NOT NULL,
  `rental_particulars` varchar(255) NOT NULL,
  `clauses` varchar(255) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`oid`, `name`, `roomAddress`, `price`, `city`, `type`, `furniture`, `rental_particulars`, `clauses`) VALUES
(1, 'sanjay ambekar', 'b/4, blue diamond building, near bhavans college, andheri west', 30000, 'Mumbai', '2 BHK', 'Fully-furnished', 'Deposit:50,000; Contract:3000;Brokerage:30000', 'No bachelors allowed'),
(2, 'Premnarayan rai', 'b/4, rosebud society, rathi nagar', 20000, 'nashik', '1 BHK', 'Semi-furnished', 'Deposit:75,000; Contract:3000;Brokerage:20000', 'Condititon of the house must be maintained throughout the period'),
(3, 'sabrina almeida', 'f-2, Bramha Suncity, vile parle', 25000, 'pune', '1 RK', 'Non-furnished', 'Deposit:1,00,000; Contract:3000;Brokerage:25000', 'Min. contract of 2 years'),
(4, 'Salman khan', 'T-2, rahul palace, rai garden', 10000, 'jalgaav', '3 BHK', 'Non-furnished', 'Deposit:50,000; Contract:3000;Brokerage:30000', 'No bachelors allowed; No non-veg food allowed in the house'),
(5, 'pratik panjwani', 'b/4', 20000, '$city', '2 BHK', 'Fully-furnished', 'no broker', ''),
(6, 'pratik panjwani', 'b/4', 20000, 'mumbai', '2 HK', 'Fully-furnished', 'Broker involved in transaction ', ''),
(7, 'ajay sakpal', 'kl;lkblv', 1000000, 'mumbai', '1 HK', 'Fully-furnished', 'No Broker involved', ''),
(8, 'mihir kale', 'lonavala', 10000, 'mumbai', '1 HK', 'Fully-furnished', 'No Broker involved', ''),
(9, 'asdf asf', 'zdfdf sg', 10000000, 'mumbai', '1 HK', 'Fully-furnished', 'No Broker involved', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `location`, `owner`, `price`, `description`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'mumbai', 'pratik', 2500, 'sexy house!', 'images/images.jpg', 'images/rooms_bg.jpg', 'images/Single_Room_resized.jpg', 'images/download.jpg'),
(2, 'mum', 'rai', 8999, 'vjhckhck', 'images/images.jpg', 'images/rooms_bg.jpg', 'images/Single_Room_resized.jpg', 'images/download.jpg'),
(3, 'bhiwandi', 'aditya', 6767, 'jvkjvljvlj,v lj,', 'images/images.jpg', 'images/rooms_bg.jpg', 'images/Single_Room_resized.jpg', 'images/download.jpg'),
(4, 'nashik', 'jg.v.v.', 86859, 'jvljvljcl,ck', 'images/images.jpg', 'images/rooms_bg.jpg', 'images/Single_Room_resized.jpg', 'images/download.jpg'),
(5, 'jalGAAAV', 'mantri', 75, 'hut!', 'images/images.jpg', 'images/rooms_bg.jpg', 'images/Single_Room_resized.jpg', 'images/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roomates`
--

CREATE TABLE IF NOT EXISTS `roomates` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `dob` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `affordance` int(11) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `permanentAddress` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `culture` varchar(255) NOT NULL,
  `maritalStatus` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `roomates`
--

INSERT INTO `roomates` (`rid`, `dob`, `name`, `affordance`, `profession`, `location`, `gender`, `permanentAddress`, `qualification`, `culture`, `maritalStatus`, `language`, `img`) VALUES
(1, '2009-09-02', 'surbhi', 1000, 'teacher', 'jalgaon', 'female', 'ghar!', 'B.E Computers', 'Marwari', 'Single', 'english', 'images/blender1.jpg'),
(2, '2014-09-04', 'rathi', 6000, 'doctor', 'nashik', 'male', 'A-8/103, Ashok Nagar', 'MBA', 'Sindhi', 'Married', 'Hindi, English', 'images/download(1).jpg'),
(3, '2014-09-01', 'soumil', 9000, 'other', 'mumbai', 'male', 'Borivali', 'BA', 'Marathi', 'Married', 'English', 'images/download(2).jpg'),
(4, '2014-09-18', 'pratik', 9999, 'engineer', 'pune', 'male', 'Amravati', 'B.Com', 'Assamese', 'Single', 'Hindi,Assamese', 'images/download(3).jpg'),
(5, '1995-01-02', 'bhaiya', 5000, 'student', 'bhiwandi', 'male', 'Bhiwandi', 'MBA', 'Gujurathi', 'Single', 'Bhojpuri, Hindi', 'images/download(4).jpg'),
(6, '2014-09-09', 'oye hoe!', 8000, 'other', 'pune', 'female', 'Orissa', '12th pass', 'Bihari', 'Married', 'hindi', 'images/images(4).jpg'),
(7, '0000-00-00', 'fdghfdwrety', 1000, 'Single', 'mumbai', 'Female', '', '', 'Hindu', 'Single', 'hindi', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `samsung` int(11) NOT NULL,
  `motorola` int(11) NOT NULL,
  `tp` int(11) NOT NULL,
  `mp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`samsung`, `motorola`, `tp`, `mp`) VALUES
(1, 0, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
