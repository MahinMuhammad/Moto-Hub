-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2022 at 08:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MotoHub`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartTab`
--

CREATE TABLE `cartTab` (
  `cart_id` datetime NOT NULL DEFAULT current_timestamp(),
  `Email` varchar(50) NOT NULL,
  `Product_Id` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `msgTab`
--

CREATE TABLE `msgTab` (
  `msg_id` datetime NOT NULL DEFAULT current_timestamp(),
  `content` varchar(500) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `rec_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderTab`
--

CREATE TABLE `orderTab` (
  `oder_id` datetime NOT NULL DEFAULT current_timestamp(),
  `ser_email` varchar(50) NOT NULL,
  `req_email` varchar(50) NOT NULL,
  `Timeline` varchar(20) NOT NULL,
  `service_id` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payTab`
--

CREATE TABLE `payTab` (
  `payment_id` datetime NOT NULL DEFAULT current_timestamp(),
  `amount` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `rec_email` varchar(50) NOT NULL,
  `Product_Id` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prodTab`
--

CREATE TABLE `prodTab` (
  `Price` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `new_used` varchar(10) NOT NULL,
  `Product_Id` datetime NOT NULL DEFAULT current_timestamp(),
  `Availability` varchar(10) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `model_Year` year(4) NOT NULL,
  `Brand_Name` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `black_list` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `revTab`
--

CREATE TABLE `revTab` (
  `rev_id` datetime NOT NULL DEFAULT current_timestamp(),
  `content` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Product_Id` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `servTab`
--

CREATE TABLE `servTab` (
  `service_id` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `availability` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servTab`
--

INSERT INTO `servTab` (`service_id`, `name`, `price`, `description`, `availability`, `Email`) VALUES
('2022-08-09 14:57:46', 'Cycle', 5000, 'Very good cycle', 'yes', 'mahin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `starTab`
--

CREATE TABLE `starTab` (
  `star_id` datetime NOT NULL DEFAULT current_timestamp(),
  `num` tinyint(4) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Product_Id` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userTab`
--

CREATE TABLE `userTab` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `UserType` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userTab`
--

INSERT INTO `userTab` (`Name`, `Email`, `Pass`, `UserType`, `DOB`, `Gender`, `Address`, `Phone`) VALUES
('Mahinur', 'mahin@gmail.com', '123', 'Customer', '1997-05-05', 'Male', 'Dhanmondi, Dhaka', '01302607858');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartTab`
--
ALTER TABLE `cartTab`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cartTab_email_fk` (`Email`),
  ADD KEY `cartTab_prodid_fk` (`Product_Id`);

--
-- Indexes for table `msgTab`
--
ALTER TABLE `msgTab`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `msgTab_email_fk` (`Email`),
  ADD KEY `msgTab_recemail_fk` (`rec_email`);

--
-- Indexes for table `orderTab`
--
ALTER TABLE `orderTab`
  ADD PRIMARY KEY (`oder_id`),
  ADD KEY `orderTab_seremail_fk` (`ser_email`),
  ADD KEY `orderTab_reqemail_fk` (`req_email`),
  ADD KEY `orderTab_serviceid_fk` (`service_id`);

--
-- Indexes for table `payTab`
--
ALTER TABLE `payTab`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payTab_email_fk` (`Email`),
  ADD KEY `payTab_recemail_fk` (`rec_email`),
  ADD KEY `payTab_prodid_fk` (`Product_Id`);

--
-- Indexes for table `prodTab`
--
ALTER TABLE `prodTab`
  ADD PRIMARY KEY (`Product_Id`),
  ADD KEY `prodTab_email_fk` (`Email`);

--
-- Indexes for table `revTab`
--
ALTER TABLE `revTab`
  ADD PRIMARY KEY (`rev_id`),
  ADD KEY `revTab_email_fk` (`Email`),
  ADD KEY `revTab_prodid_fk` (`Product_Id`);

--
-- Indexes for table `servTab`
--
ALTER TABLE `servTab`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `servTab_email_fk` (`Email`);

--
-- Indexes for table `starTab`
--
ALTER TABLE `starTab`
  ADD PRIMARY KEY (`star_id`),
  ADD KEY `startab_email_fk` (`Email`),
  ADD KEY `startab_prodid_fk` (`Product_Id`);

--
-- Indexes for table `userTab`
--
ALTER TABLE `userTab`
  ADD PRIMARY KEY (`Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartTab`
--
ALTER TABLE `cartTab`
  ADD CONSTRAINT `cartTab_email_fk` FOREIGN KEY (`Email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cartTab_prodid_fk` FOREIGN KEY (`Product_Id`) REFERENCES `prodTab` (`Product_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `msgTab`
--
ALTER TABLE `msgTab`
  ADD CONSTRAINT `msgTab_email_fk` FOREIGN KEY (`Email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `msgTab_recemail_fk` FOREIGN KEY (`rec_email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderTab`
--
ALTER TABLE `orderTab`
  ADD CONSTRAINT `orderTab_reqemail_fk` FOREIGN KEY (`req_email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderTab_seremail_fk` FOREIGN KEY (`ser_email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderTab_serviceid_fk` FOREIGN KEY (`service_id`) REFERENCES `servTab` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payTab`
--
ALTER TABLE `payTab`
  ADD CONSTRAINT `payTab_email_fk` FOREIGN KEY (`Email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payTab_prodid_fk` FOREIGN KEY (`Product_Id`) REFERENCES `prodTab` (`Product_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payTab_recemail_fk` FOREIGN KEY (`rec_email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodTab`
--
ALTER TABLE `prodTab`
  ADD CONSTRAINT `prodTab_email_fk` FOREIGN KEY (`Email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `revTab`
--
ALTER TABLE `revTab`
  ADD CONSTRAINT `revTab_email_fk` FOREIGN KEY (`Email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `revTab_prodid_fk` FOREIGN KEY (`Product_Id`) REFERENCES `prodTab` (`Product_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `servTab`
--
ALTER TABLE `servTab`
  ADD CONSTRAINT `servTab_email_fk` FOREIGN KEY (`Email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `starTab`
--
ALTER TABLE `starTab`
  ADD CONSTRAINT `startab_email_fk` FOREIGN KEY (`Email`) REFERENCES `userTab` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `startab_prodid_fk` FOREIGN KEY (`Product_Id`) REFERENCES `prodTab` (`Product_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
