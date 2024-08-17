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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_time` datetime NOT NULL,
  `comment_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_time`, `comment_by`) VALUES
(2, 'Ensure the function is defined before it is called. Check for typos in the function name and make sure the script containing the function is properly loaded and executed before the function call.', 12, '2024-08-02 19:40:32', 5),
(3, 'This error means you\'re trying to access a property of an undefined object. Ensure the object is defined and not null. Use optional chaining (\'object?.property\') or check for the object\'s existence before accessing its properties.', 13, '2024-08-02 19:42:07', 9),
(4, 'Optimize JavaScript performance by minimizing DOM manipulation, deferring or asynchronously loading scripts using \'defer\' or \'async\' attributes, and reducing the size of your scripts. Use tools like Lighthouse for performance analysis and recommendations.', 14, '2024-08-02 19:43:13', 8),
(5, 'Use tools like \'objgraph\' and \'tracemalloc\' to identify memory leaks. Review your code for unreferenced objects and circular references, and ensure proper resource management.', 11, '2024-08-04 21:18:53', 7),
(6, 'Use \'python -m venv env\' to create a virtual environment and activate it with \'env\\Scripts\\activate (Windows)\' or \'source env/bin/activate\' (Unix). Ensure dependencies are installed within the activated environment.', 10, '2024-08-04 21:22:41', 7),
(8, 'Use tools like \'valgrind\' to detect memory leaks. Ensure every \'malloc\'/\'calloc\' has a corresponding \'free\', and avoid losing pointers to dynamically allocated memory without freeing them.\r\n\r\n', 16, '2024-08-04 21:31:00', 6),
(13, 'hello', 18, '2024-08-12 14:07:14', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
