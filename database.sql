-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2016 at 10:57 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `henryfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `image_id`) VALUES
(20, 10, 'You are just the greatest', 8),
(22, 10, 'Nice photo!', 8),
(23, 10, 'Saweeeet', 8),
(27, 10, 'Nice!', 8);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `title`, `description`, `path`) VALUES
(8, 2, 'Horse', 'It''s a horse!', 'https://pbs.twimg.com/profile_images/623474281293459456/68YWo9hq.jpg'),
(12, 10, 'Trees', 'What A Tree', 'http://www.web3d.org/x3d/content/examples/Vrml2.0Sourcebook/Siggraph98Course/tree1.png'),
(13, 10, 'Flowers', 'Some Real Pretty Flowers', 'http://fabiozardi.com/content/wp-content/uploads/2016/01/Icondrawer-Gifts-Rose.ico'),
(14, 7, 'Frog', 'Cool Frog', 'http://animaliaz-life.com/image.php?pic=/data_images/frog/frog2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_id`) VALUES
(7, 'emma', 'emma2', 0),
(8, 'hey', 'uou', 0),
(9, 'hey', 'you', 0),
(10, 'emma', 'emma', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`,`image_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
