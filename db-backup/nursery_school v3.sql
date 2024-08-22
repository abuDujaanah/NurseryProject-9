-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 02:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nursery_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nursery_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `nursery_id`, `name`, `date`, `status`, `phone`) VALUES
(1, 3, 2, 'abdilahi haruna juma', '2024-07-19', 1, 0),
(2, 2, 2, 'Abdulwahab', '2024-07-21', 0, 718880710),
(3, 2, 2, 'Abdulwahab', '2024-07-22', 0, 718880710),
(5, 1, 2, 'badru', '2024-07-22', 1, 629763287),
(6, 1, 2, 'godson', '2024-07-22', 0, 629763287),
(7, 1, 20, 'admin', '2024-07-22', 0, 7777),
(8, 2, 2, 'Abdulwahab', '2024-07-22', 0, 7777),
(9, 2, 29, 'Abdulwahab', '2024-07-23', 1, 777444555);

-- --------------------------------------------------------

--
-- Table structure for table `nursery`
--

CREATE TABLE `nursery` (
  `nursery_id` int(11) NOT NULL,
  `nursery_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_information` varchar(100) NOT NULL,
  `staff_id` int(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nursery`
--

INSERT INTO `nursery` (`nursery_id`, `nursery_name`, `address`, `contact_information`, `staff_id`, `img`) VALUES
(2, 'Al-Falah Nursery', 'MOMBASA', '629763287', 1, '1.jpg'),
(20, 'Al- Huda Nursery', 'Bweleo', '773720436', 2, '4.jpg'),
(22, 'Al- Huda Nursery', 'KIBWEN', '718880710', 2, '1.jpg'),
(23, 'Al- Huda Nursery', 'KIBWEN', '718880710', 2, '3.jpg'),
(24, 'SUZA BABY BOY', 'Jumbi', '773720436', 1, '3.jpg'),
(25, 'SUA Nursery School', 'Fuoni Mambosasa', '0123-456-789', 3, 'Swim with Turtles at Baraka Aquarium.jpg'),
(29, 'Chekechea Nursery ', 'Kwerekwe', '0123-456-789', 2, 'Tanzania-Balloon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `email`, `password`) VALUES
(1, 'habibu', 'habibu@gmail.com', '123'),
(2, 'ABDY', 'abdy1@gmail.com', '123'),
(3, 'osama', 'osama@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `street_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `date`, `street_name`, `phone`, `email`, `role`, `password`) VALUES
(1, 'Admin', '2024-07-17 19:36:41', 'Zanzibar', '0123 457 789', 'admin@test.com', 1, '$2y$10$bWCc5n1WdMo1.4.0Nf27wO5qccGXc3wRXg3rO6i.WeYTpshHAvhRS'),
(2, 'Abdulwahab', '2024-07-18 05:34:17', 'Machomane', '0123 457 789', 'abdul@gmail.com', 2, '$2y$10$8K3Wr9A1tPxXy5gLlbtFv.anAIyXXJsifC5CKqpXBd8vhE58uTNRa'),
(3, 'abdilahi haruna juma', '2024-07-18 09:04:17', 'bubub', '0629763287', 'abillahi14@gmail.com', 2, '$2y$10$di1pdn7OVlWxV9RlgkxpyOJUR5O42IWcyNtIO.z51fiYNIE4nU1.6'),
(4, 'godson', '2024-07-18 09:18:40', 'mjini', '0629763278', 'abillahi14@gmail.com', 2, '$2y$10$L9WZbypr7ozI.dVD1JS8UOkcfO9YVWFkna69yjmKVrv6YWGoo/mli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_booking_fk` (`user_id`),
  ADD KEY `nursery_booking_fk` (`nursery_id`);

--
-- Indexes for table `nursery`
--
ALTER TABLE `nursery`
  ADD PRIMARY KEY (`nursery_id`),
  ADD KEY `staff_nursery-fk` (`staff_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nursery`
--
ALTER TABLE `nursery`
  MODIFY `nursery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `nursery_booking_fk` FOREIGN KEY (`nursery_id`) REFERENCES `nursery` (`nursery_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_booking_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nursery`
--
ALTER TABLE `nursery`
  ADD CONSTRAINT `staff_nursery-fk` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
