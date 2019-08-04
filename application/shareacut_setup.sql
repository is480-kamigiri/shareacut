SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shareacut`
--
CREATE DATABASE IF NOT EXISTS `shareacut` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shareacut`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `username` varchar(32) NOT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`username`, `gender`, `password`, `name`) VALUES
('cindytan', 'female', 'cindytan123', 'Cindy TAN');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (  
  `customer_id` int(10) NOT NULL,
  `name_prefix` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postal_code` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name_prefix`, `first_name`, `last_name`, `gender`, `phone_number`, `address`, `postal_code`, `email`, `password`) VALUES
('1', 'Mr.', 'Bing Mok', 'TAN', 'male', '91234567', 'Bukit Purmei Road, Block 123, #01-135', '090101', 'tanbingmok@gmail.com', 'bmtan123');

-- --------------------------------------------------------

--
-- Table structure for table `hairdresser`
--

DROP TABLE IF EXISTS `hairdresser`;
CREATE TABLE `hairdresser` (  
  `hairdresser_id` int(10) NOT NULL,
  `name_prefix` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hairdresser`
--

INSERT INTO `hairdresser` (`hairdresser_id`, `name_prefix`, `first_name`, `last_name`, `gender`, `phone_number`, `email`, `password`) VALUES
('1', 'Ms.', 'Celia', 'LIM', 'female', '80001200', 'celialim@shareacut.com', 'celialim123');

-- --------------------------------------------------------

--
-- Table structure for table `hairdresser_availability`
--

DROP TABLE IF EXISTS `hairdresser_availability`;
CREATE TABLE `hairdresser_availability` (
  `customer_id` int(10) NOT NULL,
  `hairdresser_id` int(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Dumping data for table `hairdresser_availability`
--

INSERT INTO `hairdresser_availability` (`customer_id`, `hairdresser_id`, `day`, `starttime`, `endtime`) VALUES
(1, 1, 'Monday', '11:00:00', '18:00:00'),
(1, 1, 'Tuesday', '11:00:00', '18:00:00'),
(1, 1, 'Wednesday', '11:00:00', '18:00:00'),
(1, 1, 'Thursday', '11:00:00', '18:00:00'),
(1, 1, 'Friday', '11:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `price` int(6) NOT NULL,
  `duration` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `price`, `duration`) VALUES
('1', 'Normal Haircut', '20', '3600');


-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `hairdresser_id` int(10) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `service_id` int(19) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_id`,`hairdresser_id`, `booking_date`, `booking_time`, `service_id`) VALUES
('1', '1', '1', '2019-08-30', '12:00:00', '1');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);
  
--
-- Indexes for table `hairdresser`
--
ALTER TABLE `hairdresser`
  ADD PRIMARY KEY (`hairdresser_id`);

--
-- Indexes for table `hairdresser_availability`
--
ALTER TABLE `hairdresser_availability`
  ADD PRIMARY KEY (`customer_id`, `hairdresser_id`, `start_time`, `end_time`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`, `customer_id`,`hairdresser_id`, `booking_date`, `booking_time`, `service_id`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;