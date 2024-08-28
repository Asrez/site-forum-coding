-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 01:56 PM
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
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `question_id`, `user_id`, `date`) VALUES
(1, 'fdsjgkjvkerksdv', 1, 2, '2024-08-15'),
(2, 'hhhhhhhhhhhhhh', 1, 8, '2024-08-21'),
(3, 'hhhhhhhhhhhhhh', 1, 8, '2024-08-21'),
(4, 'use try catch\r\n', 15, 3, '2024-08-22');

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
  `viewcount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `date`, `content`, `image`, `admin_id`, `state`, `viewcount`) VALUES
(1, 'post 1', '2024-08-29', '                    gsdvchszafdcu\r\ndfjgdxgfvjd\r\nkdfjgvkjbfckvg\r\njcfvhjfvgjf\r\nfcjkgf\r\nggggg\r\ndfuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu\r\ndddddddddddddddddddddddddddddgf\r\nddddddddddddddddddddddddddgj\r\nfffffffffffffffffffffffffffg\r\nffffffffffffffffffffffffffg                  ', 'a-woman-works-at-a-desk-with-a-laptop-and-a-cup-of-coffee.jpg', 1, 1, 3),
(2, 'post 2', '2024-08-30', '                    content 2                  ', 'cup-of-coffee-on-table-in-cafe-2.jpg', 1, 1, 3),
(3, 'v', '2024-08-17', '                    \r\n                  v                  hfkcvkfdhgdfjkgdf\r\ndfxjvhkjgbd\'\r\nfglvfvhjnf\r\nbdgblfldf\r\ndfogkf;kdgf;kdvbfgdjgdslnlvb d\r\ngb;dfkjgldkfjg;lriejflkc', '1.jpg', 1, 1, 2),
(4, 'c', '2024-08-17', '\r\n                  c', 'finances-us-dollars-and-bitcoins-currency-money-2.jpg', 1, 1, 3),
(5, 'ccc', '2024-08-17', '\r\n                  cccc', 'stylish-workplace-with-computer-at-home.jpg', 1, 1, 1),
(6, 'ccc', '2024-08-17', '\r\n                  ccc', 'young-entrepreneur-working-from-a-modern-cafe.jpg', 1, 0, 1),
(7, 'hhh', '2024-08-17', '\r\n                  hh', 'workplace-with-laptop-on-table-at-home-3.jpg', 1, 0, 0),
(8, 'gg', '2024-08-17', '\r\n                  gg', 'stylish-workspace-with-macbook-pro.jpg', 1, 1, 1),
(9, 'll', '2024-08-17', '\r\n                  ll', 'stylish-workplace-with-computer-at-home.jpg', 1, 0, 0),
(10, 'v', '2024-08-17', '\r\n                  v', 'tropical-palm-leaves-floral-pattern-background.jpg', 1, 1, 1),
(11, 'hgd', '2024-08-17', '\r\n                  hh', 'young-entrepreneur-working-from-a-modern-cafe.jpg', 1, 0, 0),
(14, 'hello', '2024-08-20', 'i have a new question\r\nwhy ..... ?', 'finances-us-dollars-and-bitcoins-currency-money-2.jpg', 3, 0, 1),
(15, 'php error', '2024-08-22', 'how can manage error in php ?\r\n                  ', 'young-entrepreneur-working-from-a-modern-cafe-2.jpg', 1, 1, 1),
(16, 'java', '2024-08-22', 'how can manage error in java?\r\n                  ', 'a-woman-works-at-a-desk-with-a-laptop-and-a-cup-of-coffee.jpg', 1, 1, 1),
(17, 'sql', '2024-08-22', 'whats sql delete code?', '1.jpg', 1, 0, 0),
(18, 'ff', '2024-08-22', 'fffffffff', 'everything-you-need-to-work-from-your-bed.jpg', 1, 0, 0),
(19, 'sfdv', '2024-08-22', 'ssssssssssssssssss', 'cup-of-coffee-on-table-in-cafe.jpg', 1, 0, 0),
(20, ' hi', '2024-08-24', 'please help me to learn javascript\r\ni realy love to learn but i dont no what site or chanel learn carefully ', 'colorful-exotic-flowers-and-greenery.jpg', 10, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) NOT NULL,
  `key_setting` mediumtext NOT NULL,
  `value_setting` mediumtext NOT NULL,
  `link` mediumtext DEFAULT NULL,
  `title` mediumtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `state` varchar(5000) NOT NULL DEFAULT 'setting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `key_setting`, `value_setting`, `link`, `title`, `content`, `state`) VALUES
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
(1, 'admin 1', 'admin', '123', '025f.jpg', 'admin@gmail.com', 1),
(2, 'user1', 'user1', '12345', '018f.jpg', 'user1@gmail.com', 0),
(3, 'user2', 'user2', '444', '026m.jpg', 'fff@gmail.com', 0),
(4, 'user3', 'user3', '123245', '019f.jpg', 'user2@gmail.com', 0),
(6, 'user4', 'user4', '123', '018m.jpg', 'c@gmail.com', 0),
(7, 'user5', 'user5', '123', '035f.jpg', 'rr@gmai.com', 0),
(8, 'emi', 'user6', '111', '035f.jpg', 'tt@gmail.com', 0),
(9, 'admin2', 'adminn', '1888', '053f.jpg', 'arr@gmail.com', 1),
(10, 'ttt', 'ttt', '55555', '004m.jpg', 'tt@gmail.com', 0),
(11, 'ali', 'ali33', '111', '009m.jpg', 'ali@gmail.com', 0),
(12, 'wwwww', 'wwww', 'www', '015m.jpg', 'ww@gmail.com', 0),
(13, 'admin3', 'admin3', '1233', '003f.jpg', 'admin3@gmail.com', 1);

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
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `ip`, `question_id`) VALUES
(1, '::1', 1),
(2, '66:88:69', 2),
(3, '66:88:69', 3),
(4, '66:88:69', 4),
(5, '67:88:69', 4),
(6, '67:88:69', 1),
(7, '55:77:99', 1),
(8, '22:4:1', 2),
(9, '::1', 3),
(10, '::1', 5),
(11, '::1', 2),
(12, '::1', 4),
(13, '::1', 10),
(14, '::1', 15),
(15, '::1', 14),
(16, '::1', 16),
(17, '::1', 13),
(18, '::1', 6),
(19, '::1', 8),
(20, '::1', 20);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
