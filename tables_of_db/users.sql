-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 10:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `user_pass`, `timestamp`, `user_email`) VALUES
(3, 'aur', '$2y$10$zZrPISLi4Oamx.n8WiKwxu2rVg5chNFqST9ZSEN6lqzYbvsZzte3S', '2024-08-02 21:44:01', 'aur@gmail.com'),
(4, 'aurni', '$2y$10$iiiCyf/XSljwHCc7kLiByekYzfFLfXbUuU347n80hVT5BMqvMypMm', '2024-08-02 21:44:48', 'aurni@gmail.com'),
(5, 'mao', '$2y$10$26vXKutWVh7Jg3ZWtZgBt.wwYjEACarrd38P5KxYvT./zEIKTJQTW', '2024-08-02 21:47:43', 'mao@gmail.com'),
(6, 'jaben', '$2y$10$DEJvliz.zIz5sn6nCGgiD.z4XdKS5mcYVpoxNcAL1bml4NOW/Yw1m', '2024-08-03 13:38:42', 'jaben@gmail.com'),
(7, 'we', '$2y$10$yPLlFH/prsfboQqcX588d.M32QlWoY4vhLYjuVfsWJpI4iMJMIhyK', '2024-08-03 14:20:32', 'we@gmail.com'),
(8, 'nushrat', '$2y$10$otyDEptNUTbV31sikus6keomIr6jJFLYIOrhzNZKT3FG4AsTChUwK', '2024-08-04 19:55:03', 'nushrat@gmail.com'),
(9, 'nust', '$2y$10$Q45qwKmBbPc1pLK2UD2FKeOJWbWRDovaVV3/gRyfJyh/Woz8NlZH.', '2024-08-04 19:55:27', 'nust@gmail.com'),
(10, 'k', '$2y$10$KCfV1Kmwz10BllpzUrtQZuxauFSL.ti9hbNehn4WfgrAW2BCPHICq', '2024-08-08 21:49:26', 'k@gmail.com'),
(11, 'Aurnima', '$2y$10$t7pYAe3n/.g9wtd7VGYP2.UA7ngdXrumdt/m13QB10oyF/Zfz0v52', '2024-08-15 20:47:14', 'njaben72@gmail.com'),
(19, 'Bushra', '$2y$10$lEfiiAWVJSeDVZ4gVTxjMOsdG75TscV8j4zRI/dIyJE.J2F6hJGKm', '2024-08-17 02:07:52', 'ishratbushra02@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `user_email` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
