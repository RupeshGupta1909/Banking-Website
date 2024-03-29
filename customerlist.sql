-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 03:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'pawan', 'nimlesh', 3456, '2021-03-20 06:46:25'),
(2, 'komal', 'mrunal', 23634, '2021-03-20 05:19:00'),
(3, 'krishna', 'pawan', 23880, '2021-03-20 04:50:25'),
(4, 'komal', 'ramu', 12000, '2021-03-20 03:19:15'),
(5, 'pawan', 'mrunal', 53020, '2021-03-20 06:19:25'),
(6, 'aryan', 'krishna', 53020, '2021-03-20 06:19:25'),
(7, 'ramu', 'aryan', 23400, '2021-03-20 06:23:46'),
(8, 'ramu', 'krishna', 85000, '2021-03-20 06:25:07'),
(9, 'jhon', 'komal', 450, '2021-03-20 17:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Nimlesh', 'nimlesh@gmail.com', 6632),
(2, 'Komal', 'konal@gmail.com', 87400),
(3, 'Abishek', 'abhi@gmail.com', 3456),
(4, 'Pawan', 'pk@gmail.com', 23868),
(5, 'Krishna', 'krishna@gmail.com', 23430),
(6, 'Jhon', 'jhon@gmail.com', 12000),
(7, 'Sunil', 'sunil@gmail.com', 53020),
(8, 'Aryan', 'aryan@gmail.com', 23850),
(9, 'Mrunal', 'mrunal@gmail.com', 85000),
(10, 'Ramu', 'ramu@gmail.com', 7320);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
