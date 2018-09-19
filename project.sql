-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2016 at 04:19 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `a_status`
--

CREATE TABLE IF NOT EXISTS `a_status` (
  `fir_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area_id` varchar(30) NOT NULL,
  `date_time` datetime NOT NULL,
  `crime_title` varchar(50) NOT NULL,
  `fir_description` varchar(100) NOT NULL,
  `remark` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `a_ps` varchar(30) NOT NULL,
  `lawyer_name` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_status`
--

INSERT INTO `a_status` (`fir_id`, `name`, `phone`, `mail`, `address`, `area_id`, `date_time`, `crime_title`, `fir_description`, `remark`, `gender`, `a_ps`, `lawyer_name`, `time`, `status`) VALUES
(113, 'swati choudhary', '67843242', 'ch@gmail.com', 'nradium road', 'rnc01', '0000-00-00 00:00:00', 'stolen of cycle', 'dfgfhsdjfsdkjfhdgsjfsdg', '                    ', 'female', 'ps1', 'mr. abc', '2 days', 'In process'),
(114, 'priyanka', '436456745', 'pk@gmail.com', 'kkgkg', 'rnc01', '0000-00-00 00:00:00', 'stolen of cycle', 'fwkgfkwfgfidfhudghhdb', '                    ', 'female', 'ps2', 'mr. xyz', '3 days', 'In process'),
(115, 'prashant ', '546745754', 'pr@gmail.com', 'namkum', 'rnc01', '0000-00-00 00:00:00', 'stolen of laptop', 'ogforegkerojusfghjsghrj', '                    ', 'male', 'ps1', 'mr. pqr', '4 days', 'complete'),
(113, 'swati choudhary', '67843242', 'ch@gmail.com', 'nradium road', 'rnc01', '0000-00-00 00:00:00', 'stolen of cycle', 'dfgfhsdjfsdkjfhdgsjfsdg', '                    ', 'female', 'ps11', 'fgfgfg', '45782931', 'complete'),
(113, 'swati choudhary', '67843242', 'ch@gmail.com', 'nradium road', 'rnc01', '0000-00-00 00:00:00', 'stolen of cycle', 'dfgfhsdjfsdkjfhdgsjfsdg', '                    ', 'female', 'ps1', '', '', 'In process'),
(124, 'prashant ', '46778989', 'pr@gmail.com', 'ehfgsjfeh', 'rnc01', '0000-00-00 00:00:00', 'jkafhsejfhajdfhfaksj', 'dsfkjhsdkjfhfjsdkgndkf,', '                    ', 'female', 'ps1', 'hgfdg', '2 days', 'complete'),
(120, 'ritesh', '45788933', 'ri@gmail.com', 'djsfsdjkfjsfd', 'rnc04', '0000-00-00 00:00:00', 'dsfhdsf', 'ufyoiwerhtffflklgjkgh', '                    ', 'male', 'ps1', 'ins. thapa', '1 month', 'In process');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `fir_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phn_number` varchar(20) NOT NULL,
  `complain` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`fir_id`, `name`, `address`, `phn_number`, `complain`, `date`) VALUES
(113, 'fdydtftf', 'hfytfh\r\nvjhgbjk\r\nbjbjbkj', '456756678', 'tyfgjhg\r\nbnbnbn\r\nnb,mnm,\r\n    ', '2-4-2014'),
(120, 'ritesh', 'kgkfd', '56789765', 'not yet taken action', '3-4-2014'),
(121, 'roshan', 'tfghvfh', '786543213', 'not taking action after 1 month', ''),
(121, 'roshan', 'jfkdfkfd', '567897273', 'not taking action after 1 month', '4-7-2014');

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE IF NOT EXISTS `criminal` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(500) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `crime_type` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `a_date` date NOT NULL,
  `a_area` varchar(50) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`sl_no`, `photo`, `c_name`, `age`, `adress`, `color`, `crime_type`, `description`, `a_date`, `a_area`) VALUES
(6, 'chor.jpg', 'surendra gupta', 32, '2012-07-01', 'wheatish', 'murder', 'he murdered a bussiness man. ', '2012-07-01', 'kokar'),
(7, 'chor2.jpg', 'vinesh binesh', 20, '2014-07-09', 'black', 'robbrey', 'he robed the sbi bank.', '2014-07-09', 'katchhari'),
(8, 'chor3.jpg', 'Ramnek yadav', 23, '2012-07-23', 'fair', 'theif', 'he stole many laptop,mobile etc.', '2012-07-23', 'jaganathpur'),
(9, 'chor4.jpg', 'Ramesh peela', 18, '2011-07-13', 'fair', 'serial killer', 'he killed many individuals', '2011-07-13', 'katchari'),
(10, 'chor5.jpg', 'surendra binesh', 45, '2010-04-21', 'fair', 'murder', 'he murdered a bjp leader.', '2010-04-21', 'jagnathpur');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`feed_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_no`, `name`, `gender`, `address`, `email`, `message`, `date`) VALUES
(1, 'swati', 'female', 'radium road', 'ch@gmail.com', 'good job', '4-7-2014'),
(2, 'richa', 'female', 'tata', 'ri@gmail.com', 'nice software', '4-7-2014'),
(3, '', '', '', '', '', ''),
(4, 'prashant ', 'male', 'lowadih', 'pa@gmail.com', 'good job', '8-7-2014'),
(5, 'shankr', 'male', 'lalpur', 'sh@gmail.com', 'nice software', '8-7-2014'),
(6, 'benu', 'female', 'katchhari', 'b@gmail.com', 'like ur effort', '9-7-2014'),
(7, 'reshma', 'female', 'ranchi', 'rs@gmail.com', 'nice software', '10-7-2014');

-- --------------------------------------------------------

--
-- Table structure for table `firregister`
--

CREATE TABLE IF NOT EXISTS `firregister` (
  `fir_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `area_id` varchar(25) NOT NULL,
  `time_date` datetime NOT NULL,
  `Crime_Title` varchar(20) NOT NULL,
  `fir_description` varchar(25) NOT NULL,
  `fir_remark` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`fir_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `firregister`
--

INSERT INTO `firregister` (`fir_id`, `name`, `password`, `phone`, `email`, `address`, `area_id`, `time_date`, `Crime_Title`, `fir_description`, `fir_remark`, `gender`) VALUES
(120, 'ritesh', '421990', '45788933', 'ri@gmail.com', 'djsfsdjkfjsfd', 'rnc04', '0000-00-00 00:00:00', 'dsfhdsf', 'ufyoiwerhtf\r\nfflklgjkgh\r\n', '***', 'male'),
(121, 'nitesh', '11oct', '64787364', 'ni@gmail.com', 'dvnsdnv', 'rnc01', '2029-05-14 00:00:00', 'dehfighf', 'sdfjkslkgjksfg\r\nddbfjfsdn', '***', 'male'),
(122, 'manoni', 'ma123', '6789543', 'ma@gmail.com', 'fhofhgf', 'rnc02', '0000-00-00 00:00:00', 'kgjkg', 'gfkgj\r\ngjklgktgrj\r\nfbmlkd', '***', 'female'),
(123, 'roshan', '1234', '4789877543', 'ro@gmail.com', 'jefefhfkfej', 'rnc03', '2029-05-14 11:46:00', 'sadhliasdh', 'sahflkafkaf\r\nfkdfnkdsfjld', '**', 'male'),
(124, 'prashant ', '1234', '46778989', 'pr@gmail.com', 'ehfgsjfeh', 'rnc01', '0000-00-00 00:00:00', 'jkafhsejfhajdfhfaksj', 'dsfkjhsdkjfh\r\nfjsdkgndkf,', '***', 'female'),
(125, 'swati', 'swati1', '5467322', 'sw@gmail.com', 'hsdfghbfds', 'rnc02', '0000-00-00 00:00:00', 'dghsfghsdf', 'hfdgsdhfbshkdf\r\nfnsdfnsfd', 'gfshdgfsdf', 'female'),
(126, 'shankr', '1234', '65344236734', 'sw@gmail.com', 'sdgchjsd', 'rnc02', '0000-00-00 00:00:00', 'adghsadgkjdsakjd', 'dsbkajdbda\r\ndhajknfckdaj', 'dga', 'male'),
(127, 'sweeti', 'swati', '632452743', 'sw1@gmail.com', 'sjfdhkds', 'rnc03', '0000-00-00 00:00:00', 'robbery', 'fhsdjhgf\r\nsjgskg', '3', 'female'),
(128, 'nazia', '1234', '5678987654', 'na@gmai.com', 'hghbh', 'rnc03', '2014-07-04 00:00:00', 'hghjb', 'hgkjh\r\nhb,n,m', '***', 'female'),
(129, 'swati', '1234', '654422', 'sw@gmail.com', 'rqdium road', 'rnc03', '0000-00-00 00:00:00', 'stolen of bike', 'this stolen from my home', '***', 'female'),
(130, 'raj', 'kumar', '9898', 'raj', 'deg', 'rnc01', '0000-00-00 00:00:00', 'jo', 'dkfjd', 'fdfjdfkldsfj', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `missing_person`
--

CREATE TABLE IF NOT EXISTS `missing_person` (
  `serial_no` int(11) NOT NULL AUTO_INCREMENT,
  `miss_date` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `age_s` varchar(150) NOT NULL,
  `age_e` varchar(150) NOT NULL,
  `m_height` varchar(150) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `p_station` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`serial_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `missing_person`
--

INSERT INTO `missing_person` (`serial_no`, `miss_date`, `name`, `gender`, `photo`, `age_s`, `age_e`, `m_height`, `religion`, `p_station`, `status`) VALUES
(1, '', '', '', '', '', '', '', '', '', 'found'),
(11, '2014-07-02', 'sanju kumari', 'female', 'sanju.jpg', '35', '40', '5.2 feet', 'hinduism', 'Sukhdev Nagar', 'missing'),
(12, '2013-07-01', 'mhadev peasad', 'male', 'mp prasad.jpg', '65', '70', '5feet', 'hinduism', 'Gonda', 'found'),
(13, '2014-07-03', 'ramni devi', 'female', 'ramni.jpg', '60', '65', '5 feet', 'hinduism', 'Hindipiri', 'missing'),
(14, '2014-07-03', 'sudrshan ji', 'male', 'sudarshan.jpg', '60', '65', '5 feet', 'hinduism', 'Hindipiri', 'missing');

-- --------------------------------------------------------

--
-- Table structure for table `senior_citizen`
--

CREATE TABLE IF NOT EXISTS `senior_citizen` (
  `regd_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `d_o_b` date NOT NULL,
  `age` int(150) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `tel_no` varchar(30) NOT NULL,
  `mb_no` varchar(30) NOT NULL,
  `dist` varchar(30) NOT NULL,
  `p_station` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `y_o_retair` varchar(40) NOT NULL,
  `no_of_child` int(15) NOT NULL,
  `family` varchar(50) NOT NULL,
  `health` varchar(40) NOT NULL,
  `residing` varchar(40) NOT NULL,
  `rel_name` varchar(50) NOT NULL,
  `relation` varchar(60) NOT NULL,
  `r_address` varchar(100) NOT NULL,
  `r_tel_no` int(30) NOT NULL,
  `servent` varchar(40) NOT NULL,
  `driver` varchar(40) NOT NULL,
  `watchman` varchar(40) NOT NULL,
  `tenant` varchar(40) NOT NULL,
  PRIMARY KEY (`regd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `senior_citizen`
--

INSERT INTO `senior_citizen` (`regd_id`, `name`, `d_o_b`, `age`, `address`, `gender`, `religion`, `tel_no`, `mb_no`, `dist`, `p_station`, `email`, `y_o_retair`, `no_of_child`, `family`, `health`, `residing`, `rel_name`, `relation`, `r_address`, `r_tel_no`, `servent`, `driver`, `watchman`, `tenant`) VALUES
(23, 'dkdnfvkdf', '2014-07-08', 65, 'cnjxcvnvn', 'female', 'R002', '4567653214', '1234567898', 'd1', '3', 'ff@gmail.com', 'y16', 2, 'joint', 'vg', '1', 'fmdkfmgkfdm', 'R3', 'kfvdfbggb;gbm', 456678788, '', '', '', ''),
(24, 'ldf,sldf,lsd', '2014-07-08', 45, 'cv,vl, bl ,', 'female', 'R005', '456788', '345678', 'd1', '1', 'aa@gmail.com', '', 3, 'joint', 'vg', '1', 'kvdfkmvdkf', 'R1', 'fdkvdkfmvdfkv', 345678912, 'ft', '', '', ''),
(25, 'fdhknglkhflj', '2014-07-07', 55, 'gmd,fhm.,ghm', 'female', 'R002', '12344556', '4567888', 'd1', '3', 'nn@gmail.com', 'y03', 2, 'joint', 'vg', '1', 'etghyryutr', 'R1', 'rtyruyjvbvjhg', 3456777, 'ft', 'dft', '', ''),
(26, 'dshfckjsdvhkjfsd', '2014-07-16', 66, 'vnfmdnvmdbv', 'female', 'R003', '56784321', '1234567898', 'd1', '10', 'ss@gmail.com', '', 3, 'joint', 'vg', '1', 'dfmfvmfd,v', 'R1', 'kfvmkkfdmvfdkv', 34567898, 'ft', 'dft', 'wpt', 'family'),
(27, 'swati', '2014-07-07', 33, 'dkfnkdn', 'female', 'R002', '678543219', '56789361534', 'd1', '3', 'gg@gmail.com', 'y16', 2, 'joint', 'vg', '1', 'ejiewjr', 'R1', 'hfkjefhrejg', 1425367, 'pt', 'dpt', 'wft', 'family'),
(28, 'mp choudhary', '2014-07-08', 69, 'djfhkjdfhjdf', 'male', 'R001', '567829378', '45636283746', 'd1', '5', 'tt@gmail.com', '', 1, 'joint', 'vg', '1', 'mk choudhary', 'R1', 'hfdfhjgf', 678476253, 'ft', 'dft', 'wpt', 'single'),
(29, 'mp choudhary', '2014-07-07', 66, 'jdnfkjdsfnd', 'male', 'R001', '567482654', '6547898356', 'd1', '2', 'gg@gmail.com', 'y02', 2, 'single', 'vg', '1', 'mk choudhary', 'R1', 'dhfjgnfdg', 2147483647, 'ft', 'dft', 'wpt', 'single'),
(30, 'kdhkjwefne', '2014-07-02', 34, 'hejehrej', 'male', 'R001', '546273216', '476823456234', 'd1', '2', 'tt@gmail.com', 'y02', 1, 'joint', 'vg', '1', 'yutryutyuty', 'R1', 'hgfghv', 2147483647, 'ft', 'dft', 'wft', 'single'),
(31, 'mp choudhary', '2014-07-01', 34, 'gfegfhfgbh', 'female', 'R001', '4353754325', '634764237', 'd1', '5', 'ss@gmail.com', 'y03', 2, 'joint', 'vg', '1', 'fhkjfhejrg', 'R1', 'hfejrhjerg', 2147483647, 'ft', 'dpt', 'wpt', 'family'),
(32, 'swati', '2014-07-29', 65, 'fgdfgdfg', 'female', 'R003', '665656768', '84738957435', 'd1', '3', 'yy@gmail.com', 'y04', 3, 'joint', 'vg', '1', 'jdfhjksdfhdkjg', 'R1', 'fdbsdkjfbdjkgb', 2147483647, 'pt', 'dpt', 'wpt', 'family'),
(33, 'sahdev', '1948-07-07', 65, 'ratu road', 'male', 'R001', '4356789543', '3245678987', 'd1', '2', 'ch@gmail.com', 'y02', 2, 'nuclear', 'p', '2', 'mhadev', 'R2', 'hatia', 2147483647, 'ft', 'dpt', 'wpt', 'family'),
(34, 'swati kumari', '2014-07-01', 64, 'hatia', 'female', 'R001', '1234567898', '12345678', 'd1', '3', 'sk@gmail.com', 'y02', 1, 'joint', 'vg', '1', 'bubli', 'R1', 'hinu', 2147483647, 'pt', 'dft', 'wn', 'none'),
(35, 'ramni', '1989-07-08', 64, 'jaganathpur', 'female', 'R001', '9876543212', '12345678980', 'd1', '2', 'rn@gmail.com', 'y13', 2, 'joint', 'vg', '1', 'mhamaya', 'R4', 'hinu', 2147483647, 'ft', 'dft', 'wpt', 'family'),
(36, 'uygjknjk', '2014-07-01', 66, 'radium', 'male', 'R001', '5432167876', '8765432134', 'd1', '2', 's@gmail.com', '', 0, 'joint', 'vg', '1', '', 'R1', '', 0, '', '', '', ''),
(37, 'manju', '1974-07-08', 60, 'radium road', 'female', 'R002', '4321678765', '1234567', 'd1', '2', 'ch@gmail.com', 'y03', 3, 'joint', 'vg', '1', 'sanju', 'R4', 'hinu', 2147483647, 'ft', 'dft', 'wpt', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `telephone`
--

CREATE TABLE IF NOT EXISTS `telephone` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `p_station` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `mobile` int(12) NOT NULL,
  `fax_no` int(11) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `telephone`
--

INSERT INTO `telephone` (`sl_no`, `p_station`, `phone`, `mobile`, `fax_no`) VALUES
(1, 'kotwali', 2200968, 0, 0),
(2, 'sadar', 2544625, 0, 0),
(3, 'sukhdev nagar', 2284509, 0, 0),
(4, 'gonda', 2232166, 0, 0),
(5, 'hindipiri', 2205409, 0, 0),
(6, 'kanke', 2230734, 0, 0),
(7, 'bariatu', 2542660, 0, 0),
(8, 'doranda', 2481057, 0, 0),
(9, 'dhurwa', 2408299, 0, 0),
(10, 'jagannathpur', 2442692, 0, 0),
(11, 'argora', 2242132, 0, 0),
(12, 'kdfjkdf', 765437, 235426345, 0),
(13, 'dsisigdh', 2147483647, 123416524, 0),
(14, 'namkum', 2468234, 2147483647, 0),
(15, 'kotwali', 5475467, 546567, 0);

-- --------------------------------------------------------

--
-- Table structure for table `traffic`
--

CREATE TABLE IF NOT EXISTS `traffic` (
  `challan_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` varchar(150) NOT NULL,
  `vehicle_no` varchar(2000) NOT NULL,
  `licence_no` varchar(2000) NOT NULL,
  `comp_issue` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`challan_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `traffic`
--

INSERT INTO `traffic` (`challan_no`, `name`, `gender`, `age`, `vehicle_no`, `licence_no`, `comp_issue`, `date`) VALUES
(3, 'swati', 'female', '56', '6787854', '877655', 'hgvhvbkb', '7-1-2014'),
(5, 'fghdf', 'female', '33', 'jh 546', '3456', 'breaking traffic rule', '8-1-2014'),
(6, 'abhishek', 'male', '28', 'jh 0987', 'th765y', 'drive when drunk', '2014-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `registration_no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sign_up` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `areaid` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `photo` blob NOT NULL,
  PRIMARY KEY (`registration_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`registration_no`, `fname`, `lname`, `sign_up`, `email`, `password`, `confirm_password`, `country`, `state`, `city`, `areaid`, `address`, `designation`, `mobileno`, `phoneno`, `photo`) VALUES
(100, 'ufhudfhkkfklrf', 'ewkfgrwke', 'efgrwjekwehwer', 'hfrwje', 'ewrhwer', 'ewhrwe', 'jewhrwejk', 'fhwejh', 'kfhwh', 'fhwerh', 'fhierh', 'fhwrehf', 'khfwrkjf', 'kfnwklf', ''),
(101, 'swati', 'choudhary', 'user', 'swch@gmail.com', '1234', '1234df', 'India', 'Jharkhand', 'Chaibasa', 'rnc1', 'kfjsalkfn\r\nhfgsakjf\r\ndkhgakfhba\r\nfbsakdjagfb.sp', 'sp', '2346767678', '7645238756349', 0x6d6f64692e6a7067),
(102, 'Akash', 'Makhotra', 'user', 'am@gmail.com', 'akash', 'akash', 'India', 'Jharkhand', 'Ranchi', 'rnc1', 'radium road', 'sub-inspector', '896758345', '456498678945', 0x7072617368616e742e6a7067),
(103, 'Akash', 'Makhotra', 'user', 'am@gmail.com', '', '', 'India', 'Jharkhand', 'Ranchi', 'rnc1', 'radium road', 'sub-inspector', '896758345', '456498678945', 0x7072617368616e742e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE IF NOT EXISTS `women` (
  `comp_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phn_no` varchar(20) NOT NULL,
  `complain` varchar(200) NOT NULL,
  `p_station` varchar(100) NOT NULL,
  PRIMARY KEY (`comp_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`comp_no`, `name`, `address`, `phn_no`, `complain`, `p_station`) VALUES
(1, 'swati', 'fkkdlfmgkldfm\r\ng;ldmfglgmf\r\nfgm;ldmfglfdg\r\ngmfg', '67543218796', 'lkblbmfmb\r\ngfkfldm,fdb\r\nfdgvkdfmvgb,fdmb\r\nnf.,mb,fdmgbd', 'Kotwali'),
(2, 'sanjay', 'hgfjkdjg\r\ngfnkdfngfdkhm\r\nngkfdngdfgh\r\n', '4356789234', 'kvm;fgmfd,mg\r\ndfm,dsmgfdjghdfm\r\nsdcnbsufhsmdvg', 'Gonda'),
(3, 'priyanka', 'egehjsdfbhdsjf\r\nfksdnfksdfnf\r\nmfdsmf,df', '5467898', 'dsbfkjsdfhbsdf\r\ndfjksdmgfs,g\r\nsdfnsdkmvdfm,b\r\n', 'Hindipiri'),
(4, 'jdsfkjf', 'jfeknfekgf', '362456', 'dhfjddkjngdjfgn', 'Kotwali');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
