-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 12:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facultyeval`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`id`, `year`, `semester`, `created_at`, `updated_at`) VALUES
(8, '2021-2022', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '2020-2022', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `schoolid` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `uploaded_flleinfo` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `schoolid`, `first_name`, `last_name`, `email`, `password`, `uploaded_flleinfo`, `role`, `created_at`, `updated_at`) VALUES
(31, 'Galena Burns', 'Mark', 'Peterson', 'jbareta2@gmail.com', '$2y$10$FnDBh7GWxnQddguAmN/XGO3R8hZorJEmhW8YQLS7FcpYMwPWXgyLC', '', 'admin', '2022-05-17 17:51:52', '2022-05-17 17:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answers` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bureau` varchar(255) NOT NULL,
  `textarea` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answers`, `email`, `name`, `age`, `gender`, `bureau`, `textarea`) VALUES
(248, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(249, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(250, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(251, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(252, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(253, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(254, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(255, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(256, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(257, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(258, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(259, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta'),
(260, '5', 'jbareta2@gmail.com', 'Benedict Areta', '20-29', 'Male', 'BFP', 'benedict areta');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `year_level`, `section`, `created_at`, `updated_at`) VALUES
(17, 'BSIT', '2', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_answers`
--

CREATE TABLE `evaluation_answers` (
  `id` int(11) NOT NULL,
  `answers` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `schoolid` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `clear_text` varchar(255) NOT NULL,
  `uploaded_flleinfo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `schoolid`, `first_name`, `last_name`, `email`, `password`, `clear_text`, `uploaded_flleinfo`, `created_at`, `updated_at`) VALUES
(40, 'Roanna Alvarado', 'Ria', 'Harper', 'hizi@mailinator.com', '$2y$10$ddoBLuRW.roCvazeV/iaTOhE/WuUGYZZbL8hEBJH/wLS6QJF7NtYy', 'YUH3EMaH', '', '2022-05-17 11:45:17', '2022-05-17 11:45:17'),
(41, 'Kyla Livingston', 'Brenna', 'Foreman', 'suwyfupa@mailinator.com', '$2y$10$5xzbIDzTYIG6hcP0WPzUyOyWQ.Xxw7FDyo3EcdgcyDn3Uw49zinhO', '4D54DAF2', '', '2022-05-17 11:45:29', '2022-05-17 11:45:29'),
(42, 'Summer Camacho', 'Christian', 'Fleming', 'fadoga@mailinator.com', '$2y$10$/FaVV.SaH.C6tMiVLKvLZuevpSwjo7pHCR8khfdKJDes9rcdIuYzW', 'dXXa4fsQ', '', '2022-05-17 14:12:01', '2022-05-17 14:12:01'),
(43, 'Gareth Tyler', 'Portia', 'Montgomery', 'myhibobup@mailinator.com', '$2y$10$cZfXUI/oFrM1wi5VmFs9J.7TEbYa/t9lzsNkBHXusgQim36XpBlVC', 'b659dtOK', '', '2022-05-17 14:12:05', '2022-05-17 14:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `academic_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `academic_id`, `question`, `created_at`) VALUES
(267, 4, 'Quidem tempora nesci', '2022-05-06 15:11:39'),
(268, 4, 'Non voluptas ullam e', '2022-05-06 15:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `schoolid` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `clear_text` varchar(255) NOT NULL,
  `uploaded_flleinfo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `schoolid`, `first_name`, `last_name`, `email`, `course`, `password`, `clear_text`, `uploaded_flleinfo`, `created_at`, `updated_at`) VALUES
(29, 'Brett Mcfadden', 'Katelyn', 'Jones', 'woxala@mailinator.com', 'BSIT-2-A', '$2y$10$ZXF.EbK0Czt.tgmVAkpEv.gnLImzpUhmMk.qnkfqdStFN.RZCVKDq', 'GNqCahl0', '', '2022-05-17 11:45:35', '2022-05-17 11:45:35'),
(30, 'Juliet York', 'Kadeem', 'Richmond', 'jbareta2@gmail.com', 'BSIT-2-A', '$2y$10$/4nCNp.vkmujM6yWF8FDT.8zQte2ZHoEFM.ICyKBXu0lWwzkQDHh2', 'XG1ZZD7T', '', '2022-05-17 17:49:19', '2022-05-17 17:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_code`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Whitney Knowles', 'hyxukedovi@mailinator.com', 'Galvin Phillips', '2022-05-17 11:45:56', '2022-05-17 11:45:56'),
(8, 'Adrienne Marquez', 'wyvodyfawo@mailinator.com', 'Abbot Burks', '2022-05-17 11:46:01', '2022-05-17 11:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `clear_text` varchar(255) NOT NULL,
  `uploaded_flleinfo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `email`, `name`, `password`, `clear_text`, `uploaded_flleinfo`, `created_at`, `updated_at`) VALUES
(6, 'jbareta2@gmail.com', 'Benedict Areta', '$2y$10$VcjQZh4PdRm/g5rF/ncnyOBZPG3NKdjpvVz9rL3VdeFMEucribTWW', 'qwerty', '1652775458_d0175586a34ed4926302.jpg', '2022-05-05 13:43:56', '2022-05-05 13:43:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
