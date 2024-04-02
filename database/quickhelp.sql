-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2024 at 06:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `title`, `message`, `user_id`, `status`, `created_at`) VALUES
(1, 'Request for Appointment with VC', 'Please i will like to meet with the VC tomorrow for very important meeting.\r\nTogether with all my staffs', 1, 0, '2024-03-21 11:43:30'),
(2, 'school fees receipt request', 'pls i need receipt for my school fees by next week, my reg no is 20/csc/114', 1, 0, '2024-03-22 12:42:28'),
(3, 'test', 'hello we\'re testing here\r\n', 1, 0, '2024-03-22 12:46:25'),
(4, 'hey test', 'just  testing this', 1, 0, '2024-03-22 12:47:08'),
(5, 'testing the software', 'hello we\'re testing', 1, 0, '2024-03-22 12:48:46'),
(6, 'test again', 'im testing again', 1, 0, '2024-03-22 12:50:08'),
(7, 'hello test', 'final test', 1, 0, '2024-03-22 12:51:24'),
(8, 'request to register for receipt', 'please i wish to register for receipt', 3, 0, '2024-03-22 14:57:27'),
(9, 'hello', 'eirerkr fjdfnd', 1, 0, '2024-03-22 14:58:01'),
(10, 'request for admission', 'please i kindly want to request for admission', 4, 0, '2024-03-22 15:00:15'),
(11, 'testd f ', 'tdg kdfmdkf dsds', 4, 0, '2024-03-22 21:34:50'),
(12, 'tjje', 'xskddsds', 2, 0, '2024-03-22 23:23:57'),
(13, 'Request for accomodation', 'Hey Admin, I need help on finding out details for hostel accomodation', 5, 0, '2024-04-02 04:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`) VALUES
(1, 'test', 'testlast', 'test@test.com', '08100000000', '12345'),
(2, 'mike', 'asuquo', 'mike@gmail.com', '09047447474747', '12345'),
(3, 'solo', 'solomon', 'solo@gmail.com', '0902323232', '12345'),
(4, 'sarah', 'mikel', 'sarah@gmail.com', '09347349348389', '12345'),
(5, 'dev', 'las', 'devlas@gmail.com', '090522322323', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `helps`
--
ALTER TABLE `helps`
  ADD CONSTRAINT `helps_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
