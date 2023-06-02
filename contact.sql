-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 05:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Nazifa', 'nazifa@gmail.com', 'To take service', '                                                                This is Test message', '2023-06-01 09:50:04', '2023-06-01 09:50:04'),
(2, 'Rokon', 'rokon@gmail.com', 'Hi', 'Test Message', '2023-06-01 09:50:18', '2023-06-01 09:50:18'),
(3, 'Sumon', 'sumon@gmail.com', 'Hello', 'Test message', '2023-06-01 09:51:05', '2023-06-01 09:51:05'),
(4, 'Robin', 'robin@gmail.com', 'Hello', 'For Test', '2023-06-01 09:52:00', '2023-06-01 09:52:00'),
(5, 'Fatiha', 'fatiha@gmail.com', 'Hello', 'Test Message', '2023-06-01 10:07:32', '2023-06-01 10:07:32'),
(6, 'Aayat', 'aayat@gmail.com', 'Need Service', 'Hello!', '2023-06-02 09:23:38', '2023-06-02 09:23:38'),
(10, 'Falak', 'falak@gmail.com', 'Need Help', 'Test Message', '2023-06-02 15:00:37', '2023-06-02 15:00:37'),
(11, 'Tuli Rahman', 'tuli98@gmail.com', 'Test subject', '                                Test Message1', '2023-06-02 15:01:17', '2023-06-02 15:01:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
