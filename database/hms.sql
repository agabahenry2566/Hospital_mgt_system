-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 09:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `profile`) VALUES
(1, 'admin', 'ADMIN', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `appointment_date` varchar(100) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_booked` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `firstname`, `surname`, `gender`, `phone`, `appointment_date`, `symptoms`, `status`, `date_booked`) VALUES
(1, 'solomon', 'kit', 'Male', '+256774029720', '2021-01-04', 'Headache', '', '2021-01-05 16:17:03'),
(2, 'solomon', 'kit', 'Male', '+256774029720', '2021-01-04', 'Headache', 'Discharge', '2021-01-05 16:21:34'),
(3, 'solomon', 'kit', 'Male', '+256774029720', '2021-01-14', 'Head ache', 'Discharge', '2021-01-12 11:20:05'),
(4, 'solomon', 'kit', 'Male', '+256774029720', '2021-01-23', 'chronic', 'Pendding', '2021-01-12 13:01:49'),
(5, 'solomon', 'kit', 'Male', '+256774029720', '2021-01-14', 'cold flex with , darmy bones', 'Pendding', '2021-01-14 17:58:24'),
(6, 'edith', 'kash', 'Female', '0776853222', '2021-01-14', 'severe headache', 'Pendding', '2021-01-14 18:06:03'),
(7, 'edith', 'kash', 'Female', '0776853222', '2021-01-14', 'severe head ache', 'Pendding', '2021-01-14 18:12:04'),
(8, 'solomon', 'kit', 'Male', '+256774029720', '2021-02-02', 'head ache', 'Discharge', '2021-02-02 14:33:35'),
(9, 'Agaba', 'Henry', 'Female', '0782956915', '2021-02-20', 'headache', 'Discharge', '2021-02-20 11:59:39'),
(10, 'Agaba', 'Henry', 'Male', '0788877', '2021-02-28', 'head ache', 'Discharge', '2021-02-20 13:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `date_reg` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `firstname`, `surname`, `username`, `email`, `gender`, `phone`, `password`, `salary`, `date_reg`, `status`, `profile`) VALUES
(1, 'slomon', 'keyz', 'keyz', 'keyz@gmail.com', 'Male', '256774029720', '123', '0', '2020-12-22 16:21:32', 'Approved', 'FB_IMG_1591520895640.jpg'),
(2, 'ky', 'kik', 'kik', 'kik@gmail.com', 'Male', '25646569', '123456', '0', '2020-12-22 18:04:52', 'Approved', 'doctor.jpg'),
(3, 'klerk', 'klock', 'klock', 'klock@gmail.com', 'Male', '234565433', '123456', '0', '2020-12-28 04:32:00', 'Pendding', 'doctor.jpg'),
(4, 'harry', 'hix', 'hix', 'agabahenrybriggs2@gmail.com', 'Male', '8887898', '123', '0', '2021-01-04 16:00:52', 'Pendding', 'doctor.jpg'),
(5, 'Leticia', 'Ampiire', 'tish', 'ttish1@gmail.com', 'Male', '0784158864', '123', '0', '2021-01-14 16:28:47', 'Approved', 'doctor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `patient` varchar(100) NOT NULL,
  `date_discharge` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `doctor`, `patient`, `date_discharge`, `amount_paid`, `description`) VALUES
(1, 'keyz', 'solomon', '2021-01-07 10:26:03', '5039', 'Bed Ridden for more than two Days'),
(2, 'keyz', 'solomon', '2021-01-07 10:31:04', '600', 'Checking Discharge'),
(3, 'keyz', 'solomon', '2021-01-12 13:00:48', '20000', 'prescibed as 3*2 by keyz'),
(4, 'keyz', 'solomon', '2021-02-02 14:35:14', '2000000', 'come on monday'),
(5, 'keyz', 'Agaba', '2021-02-20 13:37:58', '20000', 'wednesday'),
(6, 'keyz', 'Agaba', '2021-03-09 12:57:57', '5000', 'jgfgfjh');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_reg` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `firstname`, `surname`, `username`, `email`, `phone`, `gender`, `password`, `date_reg`, `profile`) VALUES
(1, 'solomon', 'kit', 'kit', 'kit@gmail.com', '+256774029720', 'Male', '123', '21/12/2020', 'patient.jpg'),
(2, 'edith', 'kash', 'kash', '123', '0776853222', 'Female', '123', '2021-01-14 17:14:15', 'patient.jpg'),
(3, 'Agaba', 'Henry', 'henry', 'sdfhj@gmail.com', '0782956915', 'Female', '123', '2021-02-20 11:58:44', 'patient.jpg'),
(4, 'Agaba', 'Henry', 'mr', 'aasdd@gmail.com', '0788877', 'Male', '123', '2021-02-20 13:35:21', 'patient.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_send` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
