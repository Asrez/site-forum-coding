-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 11:03 AM
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
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) NOT NULL,
  `answer` mediumint(9) NOT NULL,
  `question_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext NOT NULL,
  `date` date NOT NULL,
  `content` mediumint(9) NOT NULL,
  `image` mediumtext NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `state` int(11) NOT NULL,
  `viewcount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) NOT NULL,
  `key_setting` mediumtext NOT NULL,
  `value_setting` mediumtext NOT NULL,
  `link` mediumtext DEFAULT NULL,
  `title` mediumtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `state` varchar(5000) NOT NULL DEFAULT 'setting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key_setting`, `value_setting`, `link`, `title`, `content`, `state`) VALUES
(1, 'logo', 'logo-small.svg', '/', '   ', '     ', 'setting'),
(2, 'footer', 'Asrez', 'https://asrez.com', '', 'Nine out of ten doctors recommend Laracasts over competing                     brands. Come inside, see for yourself, and massively level up your development skills in the                     process.', 'setting'),
(3, 'adver1', 'sidebar-join-laracasts-robot.webp', 'https://google.com', 'Level Up Your\n                        Programming with Laracasts', 'with                         a computer, some git knowledge, and an idea, any of us can contribute to the frameworks and                         packages                         that we use every day. Cool as that may be, it can initially be a daunting experience.&nbsp;So                         let\'s                         go on a journey together, as we take an idea for Laravel Prompts from musings to merging.                         Learning                         the basic processes will put you in good stead for contributing your own ideas.', 'adver'),
(4, 'adver2', 'how-to-contribute-to-open-source.svg', '#', '', 'computer, some git knowledge, and an idea, any of us can contribute to the frameworks and                         packages                         that we use every day. Cool as that may be, it can initially be a daunting experience.&nbsp;So                         let\'s                         go on a journey together, as we take an idea for Laravel Prompts from musings to merging.                         Learning                         the basic processes will put you in good stead for contributing your own ideas.', 'adver'),
(5, 'adver3', 'd2ce9d569f5af686a03dfbebb343f38eb801fe67.jfif', '#', 'Contribute\r\n                        to Open Source', 'computer, some git knowledge, and an idea, any of us can contribute to the frameworks and\r\n                        packages\r\n                        that we use every day. Cool as that may be, it can initially be a daunting experience.&nbsp;So\r\n                        let\'s\r\n                        go on a journey together, as we take an idea for Laravel Prompts from musings to merging.\r\n                        Learning\r\n                        the basic processes will put you in good stead for contributing your own ideas', 'adver'),
(6, 'title', 'tabler', '/', NULL, NULL, 'setting'),
(7, 'github', ' ', 'https://github.com/Asrez', NULL, NULL, 'setting'),
(8, 'twitter', ' ', 'https://twitter.com', NULL, NULL, 'setting'),
(9, 'youtube', ' ', 'https://www.youtube.com', NULL, NULL, 'setting'),
(10, 'logo_footer', 'logo.svg', '/', NULL, NULL, 'setting');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` mediumtext NOT NULL,
  `username` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `image`, `email`, `state`) VALUES
(1, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', '003f.jpg', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` mediumtext NOT NULL,
  `question_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key_setting` (`key_setting`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
