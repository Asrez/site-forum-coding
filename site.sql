-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 11:11 AM
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer` mediumtext NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` bigint(20) NOT NULL,
  `ip` mediumtext NOT NULL,
  `question_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(5000) NOT NULL,
  `date` date NOT NULL,
  `content` longtext NOT NULL,
  `image` mediumtext NOT NULL DEFAULT 'nullimage.jpg',
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `state` int(10) NOT NULL DEFAULT 0,
  `likes` bigint(20) NOT NULL,
  `viewcount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `date`, `content`, `image`, `admin_id`, `state`, `likes`, `viewcount`) VALUES
(1, 'post 1', '2024-08-29', 'gsdvchszafdcu\r\ndfjgdxgfvjd\r\nkdfjgvkjbfckvg\r\njcfvhjfvgjf\r\nfcjkgf\r\nggggg\r\ndfuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu\r\ndddddddddddddddddddddddddddddgf\r\nddddddddddddddddddddddddddgj\r\nfffffffffffffffffffffffffffg\r\nffffffffffffffffffffffffffg', 'a-woman-works-at-a-desk-with-a-laptop-and-a-cup-of-coffee.jpg', 1, 1, 0, 0),
(2, 'post 2', '2024-08-30', '                    content 2                  ', 'cup-of-coffee-on-table-in-cafe-2.jpg', 1, 1, 0, 0),
(3, 'v', '2024-08-17', '\r\n                  v', '1.jpg', 1, 0, 0, 0),
(4, 'c', '2024-08-17', '\r\n                  c', 'finances-us-dollars-and-bitcoins-currency-money-2.jpg', 1, 0, 0, 0),
(5, 'ccc', '2024-08-17', '\r\n                  cccc', 'stylish-workplace-with-computer-at-home.jpg', 1, 1, 0, 0),
(6, 'ccc', '2024-08-17', '\r\n                  ccc', 'young-entrepreneur-working-from-a-modern-cafe.jpg', 1, 0, 0, 0),
(7, 'hhh', '2024-08-17', '\r\n                  hh', 'workplace-with-laptop-on-table-at-home-3.jpg', 1, 0, 0, 0),
(8, 'gg', '2024-08-17', '\r\n                  gg', 'stylish-workspace-with-macbook-pro.jpg', 1, 0, 0, 0),
(9, 'll', '2024-08-17', '\r\n                  ll', 'stylish-workplace-with-computer-at-home.jpg', 1, 0, 0, 0),
(10, 'v', '2024-08-17', '\r\n                  v', 'tropical-palm-leaves-floral-pattern-background.jpg', 1, 0, 0, 0),
(11, 'hgd', '2024-08-17', '\r\n                  hh', 'young-entrepreneur-working-from-a-modern-cafe.jpg', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) NOT NULL,
  `key_setting` mediumtext NOT NULL,
  `value_setting` mediumtext NOT NULL,
  `link` mediumtext NOT NULL,
  `title` mediumtext DEFAULT NULL,
  `content` longtext NOT NULL,
  `state` varchar(5000) NOT NULL DEFAULT 'setting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `key_setting`, `value_setting`, `link`, `title`, `content`, `state`) VALUES
(1, 'logo', 'logo.svg', '/', '', '', 'setting'),
(2, 'footer', 'Asrez', 'https://asrez.com', '', '', 'setting'),
(3, 'adver1', 'sidebar-join-laracasts-robot.webp', '#', 'Level Up Your\n                        Programming with Laracasts', 'with                         a computer, some git knowledge, and an idea, any of us can contribute to the frameworks and                         packages                         that we use every day. Cool as that may be, it can initially be a daunting experience.&nbsp;So                         let\'s                         go on a journey together, as we take an idea for Laravel Prompts from musings to merging.                         Learning                         the basic processes will put you in good stead for contributing your own ideas.', 'adver'),
(4, 'adver2', 'how-to-contribute-to-open-source.svg', '#', '', 'computer, some git knowledge, and an idea, any of us can contribute to the frameworks and                         packages                         that we use every day. Cool as that may be, it can initially be a daunting experience.&nbsp;So                         let\'s                         go on a journey together, as we take an idea for Laravel Prompts from musings to merging.                         Learning                         the basic processes will put you in good stead for contributing your own ideas.', 'adver'),
(5, 'adver3', 'd2ce9d569f5af686a03dfbebb343f38eb801fe67.jfif', '#', 'Contribute\r\n                        to Open Source', 'computer, some git knowledge, and an idea, any of us can contribute to the frameworks and\r\n                        packages\r\n                        that we use every day. Cool as that may be, it can initially be a daunting experience.&nbsp;So\r\n                        let\'s\r\n                        go on a journey together, as we take an idea for Laravel Prompts from musings to merging.\r\n                        Learning\r\n                        the basic processes will put you in good stead for contributing your own ideas', 'adver');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(5000) NOT NULL,
  `username` varchar(5000) NOT NULL,
  `password` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `state` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `image`, `email`, `state`) VALUES
(1, 'admin 1', 'admin', '123', 'default.png', 'admin@gmail.com', 1),
(2, 'user1', 'user1', '12345', '018f.jpg', 'user1@gmail.com', 0),
(3, 'user2', 'user2', '444', '006m.jpg', 'fff@gmail.com', 0),
(4, 'user3', 'user3', '123245', '019f.jpg', 'user2@gmail.com', 0),
(6, 'user4', 'user4', '123', '018m.jpg', 'c@gmail.com', 0),
(7, 'user5', 'user5', '123', '035f.jpg', 'rr@gmai.com', 0),
(8, 'user6', 'user6', '111', '018f.jpg', 'ijdij@gmail.com', 0),
(9, 'admin2', 'adminn', '1888', '053f.jpg', 'arr@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` bigint(20) NOT NULL,
  `ip` mediumtext NOT NULL,
  `question_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `admin_id_2` (`admin_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key_setting` (`key_setting`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH,
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
