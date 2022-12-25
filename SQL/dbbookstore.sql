-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 25, 2022 at 06:11 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `dbbookstore`
--
CREATE DATABASE IF NOT EXISTS `dbbookstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbbookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `author_name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_published` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `author_name`, `price`, `ISBN`, `category`, `date_created`, `date_published`) VALUES
(1, 'C++ By Example', 'Best book on C++', 'John', '500', 'PR-123-A1', 'Programming', '2022-11-01 18:50:39', NULL),
(2, 'Java Book', 'Java book for professionals', 'Jane davis', '450', 'PR-456-A2', 'Programming', '2022-11-01 18:50:39', NULL),
(3, 'Database Management Systems', '', 'Mark', '300', 'DB-123-ASD', 'Database', '2022-11-01 18:50:39', NULL),
(4, 'Harry Potter and the Order of the Phoenix', '', 'J.K. Rowling', '650', 'FC-123-456', 'Novel', '2022-11-01 18:50:39', NULL),
(5, 'Pride and Prejudice', '', 'Jane Austen', '450', 'FC-456-678', 'Novel', '2022-11-01 18:50:39', NULL),
(6, 'Learning Web Development for beginners', '', 'Michael', '300', 'ABC-123-456', 'Web Development', '2022-11-01 18:50:39', NULL),
(7, 'Professional PHP & MYSQL', '', 'Programmer Blog', '340', 'PR-123-456', 'Web Development', '2022-11-01 18:50:39', NULL),
(8, 'PHP MySQL Book', 'A Book on PHP MySQL Book web development', 'Author', '100', '123-ABC-456', 'Web Development', '2022-11-05 16:37:41', NULL),
(9, 'Java Programming for Beginners', 'Java Programming for Beginners book.\nLearn Java by developing example projects', 'author 1', '34', '123-TYU-456', 'programming', '2022-11-05 18:41:13', NULL),
(11, 'Advanced PHP MySQL Book', 'An advanced Book on PHP MySQL Book web development', 'Author 1', '100', '123-ABC-4987', 'Web Development', '2022-11-05 16:37:41', NULL),
(13, 'Web development Made Easy', 'Web development Made Easy book for beginners', 'author ', '35', '123-ABC-4980', 'programming', '2022-11-12 20:30:41', '2022-11-01 20:29:40');
COMMIT;
