-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 11:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lecture`
--

CREATE TABLE `tbl_lecture` (
  `lecture_id` varchar(255) NOT NULL,
  `lecture_name` varchar(255) NOT NULL,
  `lecture_email` varchar(255) NOT NULL,
  `lecture_faculty` varchar(255) NOT NULL,
  `lecture_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lecture_subject`
--

CREATE TABLE `tbl_lecture_subject` (
  `data_id` varchar(255) NOT NULL,
  `lecture_id` varchar(255) NOT NULL,
  `lecture_name` varchar(255) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scholar`
--

CREATE TABLE `tbl_scholar` (
  `scholar_id` varchar(255) NOT NULL,
  `scholar_name` varchar(255) NOT NULL,
  `scholar_email` varchar(255) NOT NULL,
  `scholar_ipk` double NOT NULL,
  `scholar_ips` double NOT NULL,
  `scholar_faculty` varchar(255) NOT NULL,
  `scholar_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scholar_subject`
--

CREATE TABLE `tbl_scholar_subject` (
  `scholar_id` varchar(255) NOT NULL,
  `scholar_name` varchar(255) NOT NULL,
  `scholar_score` double NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_faculty` varchar(255) NOT NULL,
  `subject_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` blob NOT NULL,
  `user_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lecture`
--
ALTER TABLE `tbl_lecture`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `tbl_lecture_subject`
--
ALTER TABLE `tbl_lecture_subject`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `tbl_scholar`
--
ALTER TABLE `tbl_scholar`
  ADD PRIMARY KEY (`scholar_id`);

--
-- Indexes for table `tbl_scholar_subject`
--
ALTER TABLE `tbl_scholar_subject`
  ADD PRIMARY KEY (`scholar_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
