-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 03:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `form_number` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `domicile` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `degree2` varchar(255) NOT NULL,
  `year2` varchar(255) NOT NULL,
  `institute2` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `degree3` varchar(255) NOT NULL,
  `year3` varchar(255) NOT NULL,
  `institute3` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contact_mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `e_address` varchar(255) NOT NULL,
  `contact_e` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `role` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `form_number`, `first_name`, `last_name`, `father_name`, `birthday`, `gender`, `nationality`, `domicile`, `cnic`, `email`, `user_password`, `course`, `degree`, `year`, `institute`, `img`, `degree2`, `year2`, `institute2`, `img2`, `degree3`, `year3`, `institute3`, `img3`, `mail`, `contact_mail`, `address`, `contact_no`, `e_address`, `contact_e`, `occupation`, `income`, `created_at`, `role`) VALUES
(18, '0', 'Admin', 'Admin', '', '', '', '', '', '', 'admin@admin.com', '12345', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00.000000', 2),
(47, 'S-20-47', 'Ali', 'Khan', 'Tamim', '2020-07-27', 'other', 'Pakistan', 'Punjab', '363023427882', 'a@a.com', 'uyik', 'BSCS', 'matric', '2010', 'AIM', 'img1.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bzu', 'logo.png', 'MTN', '03236767898', 'jgkkjk', '03236767879', 'MTN', '03236767898', 'welder', '20000', '2020-07-08 15:54:18.660381', 0),
(48, 'S-20-48', 'Ali', 'Khan', 'Anwar', '2020-06-30', 'male', 'Pakistan', 'Punjab', '3630234277878', 'bbb@mm', '2345', 'BSCS', 'matric', '2010', 'AIM', 'img1.png', 'matric', '2010', 'aim', 'img1.png', 'matric', '2010', 'bz', 'img3.png', 'MTN', '03236767898', 'jhkh', '03112345286', 'MTN', '03236767898', 'welder', '20000rs', '2020-07-08 15:58:15.625481', 0),
(49, 'S-20-49', 'Ali', 'Khan', 'Anwar', '2020-06-30', 'male', 'Pakistan', 'Punjab', '3630234277878', 'bbb@mm', 'bnm', 'BSCS', 'matric', '2010', 'AIM', 'img1.png', 'matric', '2010', 'aim', 'img1.png', 'matric', '2010', 'bz', 'img3.png', 'MTN', '03236767898', 'jhkh', '03112345286', 'MTN', '03236767898', 'welder', '20000rs', '2020-07-08 16:05:26.365503', 0),
(50, 'S-20-50', 'Ali', 'Khan', 'Anwar', '2020-06-09', 'male', 'Pakistan', 'Punjab', '3630234278824', 'a@a.com', '567', 'BSCS', 'matric', '2010', 'tryu', 'img2.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 's3.png', 'MTN', '03236767898', 'bmm', '03112345286', 'MTN', '03236767898', 'welder', '20000', '2020-07-08 16:07:44.484262', 0),
(51, 'S-20-51', 'Ali', 'Khan', 'Anwar', '2020-06-29', 'male', 'Pakistan', 'Punjab', '3630234278828', 'bbb@mm', 'qwe', 'BSCS', 'matric', '2010', 'AIM', 's4.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 'slide_img.png', 'MTN', '03236767898', 'bmm', '03112345286', 'MTN', '03236767898', 'welder', '20000', '2020-07-08 16:28:17.532712', 0),
(52, 'S-20-52', 'Ali', 'Khan', 'Anwar', '2020-06-29', 'male', 'Pakistan', 'Punjab', '3630234278828', 'bbb@mm', 'ert', 'BSCS', 'matric', '2010', 'AIM', 's4.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 'slide_img.png', 'MTN', '03236767898', 'bmm', '03112345286', 'MTN', '03236767898', 'welder', '20000', '2020-07-08 16:30:04.075966', 0),
(53, 'S-20-52', 'Ali', 'Khan', 'Anwar', '2020-06-29', 'male', 'Pakistan', 'Punjab', '3630234278828', 'bbb@mm', 'ert', 'BSCS', 'matric', '2010', 'AIM', 's4.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 'slide_img.png', 'MTN', '03236767898', 'bmm', '03112345286', 'MTN', '03236767898', 'welder', '20000', '2020-07-08 16:35:45.336028', 0),
(54, 'S-20-54', 'Ali', 'Khan', 'Anwar', '2020-06-29', 'male', 'Pakistan', 'Punjab', '3630234278828', 'bbb@mm', 'okm', 'BSCS', 'matric', '2010', 'AIM', 's4.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 'slide_img.png', 'MTN', '03236767898', 'bmm', '03112345286', 'MTN', '03236767898', 'welder', '20000', '2020-07-08 16:37:59.674526', 0),
(55, 'S-20-55', 'Ali', 'Khan', 'Anwar Shah', '2020-06-29', 'male', 'Pakistan', 'Punjab', '3630234278528', 'a@aa.com', 'asdf', 'BSCS', 'matric', '2010', 'AIM', '1426881.jpg', 'matric', '2010', 'aim', 'contact_bg.png', 'matric', '2010', 'bz', 'footer_logo.png', 'MTN', '03236767898', 'MTN', '03236767879', 'MTN', '03236767898', 'welder', '20000', '2020-07-08 16:48:55.133266', 0),
(57, 'S-20-57', 'Ali', 'Khan', 'Tahir aslam', '2014-01-14', 'male', 'Pakistan', 'Punjab', '3630234278824', 'bbb@mm', '4567', 'BSCS', 'matric', '2010', 'AIM', '1426881 - Copy.jpg', 'inter', '2012', 'BSS', 'i7.png', 'bachelor', '2013', 'bzu', 'img1.png', 'MTN', '03236767898', 'MTN', '03236767879', 'MTN', '03236767898', 'welder', '20000', '2020-07-16 13:03:06.210745', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_qualification`
--

CREATE TABLE `student_qualification` (
  `qid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `degree2` varchar(255) NOT NULL,
  `year2` varchar(255) NOT NULL,
  `institute2` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `degree3` varchar(255) NOT NULL,
  `year3` varchar(255) NOT NULL,
  `institute3` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_qualification`
--

INSERT INTO `student_qualification` (`qid`, `sid`, `course`, `degree`, `year`, `institute`, `img`, `degree2`, `year2`, `institute2`, `img2`, `degree3`, `year3`, `institute3`, `img3`) VALUES
(1, 0, 'BSCS', 'matric', '2010', 'AIM', '1426881 - Copy.jpg', 'inter', '2018', 'aim', '1426881.jpg', 'matric', '2010', 'bz', 'phone_icon.png'),
(2, 32, 'BSCS', 'inter', '2011', 'AIM', 'course02.jpg', 'matric', '2010', 'aim', 'course04.jpg', 'matric', '2010', 'bz', 'course06.jpg'),
(3, 33, 'BSCS', 'bachelor', '2011', 'AIM', 'course02.jpg', 'matric', '2010', 'aim', 'course04.jpg', 'matric', '2010', 'bz', 'course06.jpg'),
(4, 34, 'BSIT', 'matric', '2010', 'hj', 'module_table_top.png', 'matric', '2010', 'fghjk', 'module_table_top.png', 'matric', '2010', 'ghj', 'module_table_bottom.png'),
(5, 35, 'BSIT', 'matric', '2010', 'hj', 'module_table_top.png', 'matric', '2010', 'fghjk', 'module_table_top.png', 'matric', '2010', 'ghj', 'module_table_bottom.png'),
(6, 36, 'BSCS', 'matric', '2010', 'A', 'module_table_top.png', 'matric', '2010', '8j', 'module_table_bottom.png', 'matric', '2010', 'bz', 'module_table_top.png'),
(7, 37, 'BSCS', 'matric', '2010', 'A', 'module_table_top.png', 'matric', '2010', '8j', 'module_table_bottom.png', 'matric', '2010', 'bz', 'module_table_top.png'),
(8, 38, 'BSCS', 'matric', '2010', 'A', 'module_table_top.png', 'matric', '2010', '8j', 'module_table_bottom.png', 'matric', '2010', 'bz', 'module_table_top.png'),
(9, 39, 'BSCS', 'matric', '2010', 'A', 'module_table_top.png', 'matric', '2010', '8j', 'module_table_bottom.png', 'matric', '2010', 'bz', 'module_table_top.png'),
(10, 40, 'BSCS', 'matric', '2010', 'A', 'module_table_top.png', 'matric', '2010', '8j', 'module_table_bottom.png', 'matric', '2010', 'bz', 'module_table_top.png'),
(11, 41, 'BSCS', 'matric', '2010', 'A', 'module_table_top.png', 'matric', '2010', '8j', 'module_table_bottom.png', 'matric', '2010', 'bz', 'module_table_top.png'),
(12, 42, 'BSCS', 'matric', '2010', 'A', 'module_table_top.png', 'matric', '2010', '8j', 'module_table_bottom.png', 'matric', '2010', 'bz', 'module_table_top.png'),
(13, 43, 'BSCS', 'matric', '2010', 'A', 'module_table_top.png', 'matric', '2010', '8j', 'module_table_bottom.png', 'matric', '2010', 'bz', 'module_table_top.png'),
(14, 44, 'BSCS', 'matric', '2010', 'AIM', 'module_table_top.png', 'matric', '2010', 'aim', 'module_table_bottom.png', 'matric', '2010', 'ghj', 'module_table_bottom.png'),
(15, 45, 'BSCS', 'matric', '2010', 'AIM', '1426881 - Copy.jpg', 'inter', '2010', 'aim', 'b1.png', 'matric', '2010', 'bzu', 'img1.png'),
(16, 46, 'BSCS', 'matric', '2010', 'AIM', '1426881 - Copy.jpg', 'inter', '2010', 'aim', 'b1.png', 'matric', '2010', 'bzu', 'img1.png'),
(17, 47, 'BSCS', 'matric', '2010', 'AIM', 'img1.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bzu', 'logo.png'),
(18, 48, 'BSCS', 'matric', '2010', 'AIM', 'img1.png', 'matric', '2010', 'aim', 'img1.png', 'matric', '2010', 'bz', 'img3.png'),
(19, 49, 'BSCS', 'matric', '2010', 'AIM', 'img1.png', 'matric', '2010', 'aim', 'img1.png', 'matric', '2010', 'bz', 'img3.png'),
(20, 50, 'BSCS', 'matric', '2010', 'tryu', 'img2.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 's3.png'),
(21, 51, 'BSCS', 'matric', '2010', 'AIM', 's4.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 'slide_img.png'),
(22, 52, 'BSCS', 'matric', '2010', 'AIM', 's4.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 'slide_img.png'),
(23, 53, 'BSCS', 'matric', '2010', 'AIM', 's4.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 'slide_img.png'),
(24, 54, 'BSCS', 'matric', '2010', 'AIM', 's4.png', 'matric', '2010', 'aim', 'img3.png', 'matric', '2010', 'bz', 'slide_img.png'),
(25, 55, 'BSCS', 'matric', '2010', 'AIM', '1426881.jpg', 'matric', '2010', 'aim', 'contact_bg.png', 'matric', '2010', 'bz', 'footer_logo.png'),
(26, 56, 'BSCS', 'matric', '2010', 'AIM', '1426881 - Copy.jpg', 'inter', '2012', 'BSS', 'i7.png', 'bachelor', '2013', 'bzu', 'img1.png'),
(27, 57, 'BSCS', 'matric', '2010', 'AIM', '1426881 - Copy.jpg', 'inter', '2012', 'BSS', 'i7.png', 'bachelor', '2013', 'bzu', 'img1.png');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `marital` varchar(255) NOT NULL,
  `edu_level` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `cnic`, `first_name`, `last_name`, `gender`, `nationality`, `city`, `email`, `contact_no`, `marital`, `edu_level`, `occupation`, `cv`, `created_at`) VALUES
(2, '3630234278824', 'Ali', 'Paaan', 'male', 'Pakistan', 'jjhkjh', 'UsamaAhmed@gmail.com', '03236767877', 'Married', 'Graduation', 'Full Time', 'details.docx', '2020-07-02 09:46:42.994238'),
(3, '3630234278824', 'Ali', 'Khan', 'male', 'Pakistan', 'Multan', 'bbb@mm', '67698797', 'Single', 'MS/MPhil', 'Part Time', 'cv.docx', '2020-07-03 18:59:41.425050'),
(4, '3630234278824', 'salman', 'Khan', 'male', 'Pakistan', 'Multan', 'bbb@mm', '67698797', 'Single', 'MS/MPhil', 'Part Time', 'cv.docx', '2020-07-03 19:00:06.503421'),
(5, '3630234278824', 'Ali', 'Akhtar', 'male', 'Pakistan', 'Multan', 'bbb@mm', '67698797', 'Single', 'MS/MPhil', 'Part Time', 'cv.docx', '2020-07-03 19:00:19.212718'),
(6, '3630234278824', 'Safdar', 'usman', 'male', 'Pakistan', 'Multan', 'bbb@mm', '67698797', 'Single', 'PhD', 'Part Time', 'cv.docx', '2020-07-03 19:00:43.426501'),
(7, '3333333333333', 'Ali', 'Ahmed', 'male', 'Pakistan', 'mnbnnm', 'UsamaAhmed@gmail.com', '67698797', 'Married', 'Masters', 'Full Time', 'module_table_top.png', '2020-07-07 18:12:18.362012'),
(8, '22222222222222', 'Ali', 'Khannn', 'male', 'Pakistan', 'Multan', 'a@a.com', '67698797', 'Single', 'Graduation', 'Full Time', 'module_table_top.png', '2020-07-07 18:14:00.338888'),
(9, '2222222224444', 'Ali', 'Khannn', 'male', 'Pakistan', 'Multan', 'a@a.com', '67698797', 'Single', 'Graduation', 'Full Time', 'module_table_top.png', '2020-07-07 18:15:42.085635'),
(10, '55555555678', 'Ali', 'Paaan', 'male', 'Pakistan', 'mnbnnm', 'alikhan@gmail.com', '03112345286', 'Married', 'Intermediate', 'Full Time', 'module_table_top.png', '2020-07-07 18:20:21.214141'),
(11, '5555555567', 'Ali', 'Paaan', 'male', 'Pakistan', 'mnbnnm', 'alikhan@gmail.com', '03112345286', 'Married', 'Intermediate', 'Full Time', 'module_table_top.png', '2020-07-07 18:22:56.894939'),
(12, '3630234278825', 'Salmana', 'Shoukat', 'male', 'Pakistan', 'Multan', 'a@a.com', '03112345287', 'Married', 'MS/MPhil', 'Part Time', 'module_table_top.png', '2020-07-08 14:52:42.670348');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_qualification`
--
ALTER TABLE `student_qualification`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `student_qualification`
--
ALTER TABLE `student_qualification`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
