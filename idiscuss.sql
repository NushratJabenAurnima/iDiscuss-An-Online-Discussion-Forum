-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 06:58 PM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(1, 'Python', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically typed and garbage-collected.', '2024-07-31 13:47:07'),
(2, 'JavaScript', 'JavaScript, often abbreviated as JS, is a programming language and core technology of the Web, alongside HTML and CSS.', '2024-07-31 13:49:00'),
(3, 'C', 'C is one of the foundational programming languages used in the development of compilers, operating systems, and embedded systems where speed and efficiency matter.', '2024-08-01 13:17:21'),
(4, 'C++', 'C++ is a high-level and object-oriented programming language. This language allows developers to write clean and efficient code for large applications and software development, game development, and operating system programming. ', '2024-08-01 13:20:14'),
(5, 'C#', 'C# is a general-purpose high-level programming language supporting multiple paradigms like static typing, strong typing, lexically scoped, functional, generic, object-oriented, and component-oriented programming disciplines.', '2024-08-01 13:21:45'),
(6, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed for general-purpose so that programmers write once, run anywhere, meaning that compiled Java code can run on all platforms that support Java.', '2024-08-01 13:26:41');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
