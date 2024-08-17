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
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'Unable to install pyaudio', 'I am unable to install pyaudio on window. What should I do? Tell me please. --', 1, 3, '2024-08-01 20:15:11'),
(6, 'TypeError: unsupported operand type(s)', 'I\'m encountering a TypeError stating that unsupported operand types are being used. What does this mean, and how can I fix it?', 1, 6, '2024-08-02 14:24:42'),
(7, 'Slow Performance in Python Script', 'My Python script is running slower than expected. What are some common reasons for this, and how can I optimize the performance?', 1, 7, '2024-08-02 14:46:28'),
(9, 'Pandas DataFrame Operations Failing', 'I\'m having trouble performing operations on a Pandas DataFrame. Some functions aren\'t working as expected. What could be the reason, and how can I troubleshoot this?', 1, 8, '2024-08-02 14:48:31'),
(10, 'Python Virtual Environment Issues', 'I\'m having trouble setting up and using virtual environments in Python. Can you provide guidance on how to manage virtual environments effectively?', 1, 9, '2024-08-02 14:50:48'),
(11, 'Debugging Memory Leaks in Python', 'My Python application seems to have a memory leak. How can I identify and fix memory leaks in Python code?', 1, 9, '2024-08-02 14:52:14'),
(12, 'Uncaught ReferenceError: function is not defined', 'I\'m trying to call a function in my JavaScript code, but I keep getting an \"Uncaught ReferenceError\" saying the function is not defined. What could be causing this?', 2, 8, '2024-08-02 19:27:12'),
(13, 'Cannot read property \'X\' of undefined', 'I\'m getting an error saying \"Cannot read property \'X\' of undefined\" when trying to access an object\'s property. How can I fix this issue?\r\n', 2, 7, '2024-08-02 19:28:09'),
(14, 'Slow Page Load Due to JavaScript', 'My web page is loading slowly, and I suspect it\'s due to the JavaScript code. What can I do to optimize the performance?', 2, 4, '2024-08-02 19:28:53'),
(16, 'Memory Leak in C Program', 'My C program uses more and more memory over time and eventually crashes. How can I detect and fix memory leaks?', 3, 8, '2024-08-04 21:26:07'),
(18, 'Learn Java', 'Where I can learn it fast?', 6, 7, '2024-08-10 18:20:49'),
(19, 'Segmentation Fault (Segfault)', 'My C program crashes with a segmentation fault. How can I identify the cause and fix it?', 3, 7, '2024-08-10 19:00:05'),
(21, 'Undefined Reference to Function', 'When compiling my C program, I get an \"undefined reference to function\" error. What does this mean, and how can I resolve it?\r\n\r\n', 3, 7, '2024-08-10 19:08:37'),
(33, '3', 'checking...><..twsting 123', 5, 7, '2024-08-12 13:51:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
