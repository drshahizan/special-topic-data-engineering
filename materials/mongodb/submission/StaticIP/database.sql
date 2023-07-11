-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 01:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fbc_reviewer`
--

-- --------------------------------------------------------

--
-- Table structure for table `examproper`
--

CREATE TABLE `examproper` (
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `passing_rate` int(11) NOT NULL,
  `time_limit` int(11) NOT NULL,
  `access_code` text NOT NULL,
  `test_desc` text NOT NULL,
  `category_exam` text NOT NULL,
  `date_time` datetime NOT NULL,
  `date_expired` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `examproper`
--

INSERT INTO `examproper` (`test_id`, `user_id`, `total_questions`, `passing_rate`, `time_limit`, `access_code`, `test_desc`, `category_exam`, `date_time`, `date_expired`) VALUES
(98, 25, 4, 50, 60, '12345', ' DATA ENGINEERING', 'SPECIAL TOPIC IN DATA ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question_desc` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `attachment_file` varchar(90) NOT NULL,
  `difficulty_id` int(11) NOT NULL,
  `subject` varchar(90) NOT NULL,
  `Course` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `test_id`, `question_desc`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `user_id`, `attachment_file`, `difficulty_id`, `subject`, `Course`) VALUES
(233, 0, 'Data science is the process of diverse set of data through ?', 'organizing data', 'processing data', 'analysing data', 'All of the above', 'All of the above', 25, 'files/', 2, 'SPECIAL TOPIC IN DATA ENGINEERING', 'DATA ENGINEERING'),
(234, 0, 'Which of the following is correct skills for a Data Scientist?', 'Probability & Statistics', 'Machine Learning / Deep Learning', 'Data Wrangling', 'All of the above', 'All of the above', 25, 'files/', 2, 'SPECIAL TOPIC IN DATA ENGINEERING', 'DATA ENGINEERING'),
(235, 0, 'Which of the following are correct component for data science?', 'Data Engineering', 'Advanced Computing', 'Domain expertise', 'All of the above', 'Data Engineering', 25, 'files/', 1, 'SPECIAL TOPIC IN DATA ENGINEERING', 'DATA ENGINEERING'),
(237, 0, 'Which of the following is not a part of data science process?', 'Discovery', 'Model Planning', 'Communication Building', 'Operationalize', 'Communication Building', 25, 'files/', 3, 'SPECIAL TOPIC IN DATA ENGINEERING', 'DATA ENGINEERING');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata_exams`
--

CREATE TABLE `studentdata_exams` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `status` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `access_code` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `studentdata_exams`
--

INSERT INTO `studentdata_exams` (`id`, `test_id`, `q_id`, `answer`, `status`, `student_id`, `access_code`) VALUES
(7, 98, 234, 'All of the above', 1, 55, '12345'),
(8, 98, 235, 'All of the above', 0, 55, '12345'),
(9, 98, 237, 'Operationalize', 0, 55, '12345'),
(10, 98, 233, 'All of the above', 1, 55, '12345'),
(11, 98, 233, 'All of the above', 1, 56, '12345'),
(12, 98, 234, 'All of the above', 1, 56, '12345'),
(13, 98, 237, 'Communication Building', 1, 56, '12345'),
(14, 98, 235, 'Data Engineering', 1, 56, '12345'),
(15, 98, 233, 'All of the above', 1, 57, '12345'),
(16, 98, 234, 'Data Wrangling', 0, 57, '12345'),
(17, 98, 235, 'Data Engineering', 1, 57, '12345'),
(18, 98, 237, 'Communication Building', 1, 57, '12345'),
(19, 98, 233, 'organizing data', 0, 58, '12345'),
(20, 98, 237, 'Communication Building', 1, 58, '12345'),
(21, 98, 235, 'Advanced Computing', 0, 58, '12345'),
(22, 98, 234, 'Probability & Statistics', 0, 58, '12345'),
(23, 98, 233, 'All of the above', 1, 59, '12345'),
(24, 98, 235, 'Data Engineering', 1, 59, '12345'),
(25, 98, 234, 'All of the above', 1, 59, '12345'),
(26, 98, 237, 'Communication Building', 1, 59, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `studentresult_exams`
--

CREATE TABLE `studentresult_exams` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `date_taken` text NOT NULL,
  `access_code` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `studentresult_exams`
--

INSERT INTO `studentresult_exams` (`id`, `student_id`, `test_id`, `score`, `percentage`, `remarks`, `date_taken`, `access_code`) VALUES
(212, 55, 98, 2, 50, 'PASSED', 'Jul, 11 2023', ''),
(213, 56, 98, 4, 100, 'PASSED', 'Jul, 11 2023', ''),
(214, 57, 98, 3, 75, 'PASSED', 'Jul, 11 2023', ''),
(215, 58, 98, 1, 25, 'FAILED', 'Jul, 11 2023', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblexamquestion`
--

CREATE TABLE `tblexamquestion` (
  `eq_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `access_code` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblexamquestion`
--

INSERT INTO `tblexamquestion` (`eq_id`, `q_id`, `access_code`) VALUES
(14, 233, '12345'),
(15, 234, '12345'),
(16, 235, '12345'),
(17, 237, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usertype_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL,
  `course` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `usertype_id`, `fname`, `mname`, `lname`, `username`, `password`, `user_type`, `course`, `year`) VALUES
(25, 1, 'admin', '', 'admin', 'admin', 'admin', 'Admin', '', ''),
(55, 3, 'Chloe', 'Racquelmae', 'Kennedy', 'Chloe', '123', 'Student', 'DATA ENGINEERING', '1ST SEMESTER'),
(56, 3, 'Lee', 'Cai', 'Xuan', 'Lucy', '123', 'Student', 'DATA ENGINEERING', '1ST SEMESTER'),
(57, 3, 'Kong', 'Jia ', 'Rou', 'Kong', '123', 'Student', 'DATA ENGINEERING', '1ST SEMESTER'),
(58, 3, 'Singthai', '', 'Srisoi', 'Aloysius', '123', 'Student', 'DATA ENGINEERING', '1ST SEMESTER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examproper`
--
ALTER TABLE `examproper`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `studentdata_exams`
--
ALTER TABLE `studentdata_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentresult_exams`
--
ALTER TABLE `studentresult_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblexamquestion`
--
ALTER TABLE `tblexamquestion`
  ADD PRIMARY KEY (`eq_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examproper`
--
ALTER TABLE `examproper`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `studentdata_exams`
--
ALTER TABLE `studentdata_exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `studentresult_exams`
--
ALTER TABLE `studentresult_exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `tblexamquestion`
--
ALTER TABLE `tblexamquestion`
  MODIFY `eq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
