-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 06:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'Deep Shikha', '000000'),
(3, 'Monika Kumari', '000000'),
(4, 'Sanobar Praveen', '000000'),
(2, 'Srishti Kankane', '000000');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `username`, `email`, `message`) VALUES
(1, '', 'zxcvber@gmail.com', 'THANK YOU'),
(3, '', 'srishty@gmail.com', 'I\'m not able to download notes.'),
(4, 'srish66', 'srishty@gmail.com', '..'),
(5, 'srish66', 'srishty@gmail.com', 'bnm'),
(6, 'monika', 'monika@gmail.com', 'educatalysts'),
(7, 'shashank', 'shekharshashank30@gmail.com', '7890'),
(8, 'deepshi', 'deepshi@gmail.com', 'i\'m not able to login'),
(9, 'deepshi', 'deep.shikhash2219@gmail.com', 'I\'m not able to view any courses');

-- --------------------------------------------------------

--
-- Table structure for table `jeeadvncnotes`
--

CREATE TABLE `jeeadvncnotes` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jeeadvncnotes`
--

INSERT INTO `jeeadvncnotes` (`id`, `filename`, `size`, `downloads`) VALUES
(1, 'relations and functions.pdf', 820533, 0),
(2, 'matrices.pdf', 317075, 0),
(3, 'haloalkanes.pdf', 453332, 0),
(4, 'electrochemistry.pdf', 656424, 0),
(5, 'electric charge and field.pdf', 785167, 0),
(6, 'magnetism.pdf', 886058, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jeeadvncsamplepaper`
--

CREATE TABLE `jeeadvncsamplepaper` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jeefiles`
--

CREATE TABLE `jeefiles` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jeefiles`
--

INSERT INTO `jeefiles` (`id`, `filename`, `size`, `downloads`) VALUES
(1, 'newton.pdf', 531491, 0),
(2, 'electrostatics and capacitance .pdf', 820276, 1),
(3, 'solutions.pdf', 556244, 0),
(4, 'solid states.pdf', 668760, 0),
(5, 'vector algebra.pdf', 218441, 0),
(6, 'set theory.pdf', 286795, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jeesamplepaper`
--

CREATE TABLE `jeesamplepaper` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ndanotes`
--

CREATE TABLE `ndanotes` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ndanotes`
--

INSERT INTO `ndanotes` (`id`, `filename`, `size`, `downloads`) VALUES
(1, 'haloalkanes (2).pdf', 453332, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ndasamplepaper`
--

CREATE TABLE `ndasamplepaper` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `neetnotes`
--

CREATE TABLE `neetnotes` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neetnotes`
--

INSERT INTO `neetnotes` (`id`, `filename`, `size`, `downloads`) VALUES
(1, 'newton (1).pdf', 531491, 1),
(2, 'reproduction in organisms.pdf', 983172, 0),
(3, 'evolution.pdf', 794976, 1),
(4, 'magnetism.pdf', 886058, 0),
(5, 'chemical kinetics.pdf', 682024, 0),
(6, 'solid states.pdf', 668760, 0),
(7, 'human reproduction.pdf', 546799, 1);

-- --------------------------------------------------------

--
-- Table structure for table `neetsamplepaper`
--

CREATE TABLE `neetsamplepaper` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `programnotes`
--

CREATE TABLE `programnotes` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programnotes`
--

INSERT INTO `programnotes` (`id`, `filename`, `size`, `downloads`) VALUES
(1, 'C++.pdf', 2844293, 0),
(2, 'JAVA.pdf', 1256832, 0);

-- --------------------------------------------------------

--
-- Table structure for table `programsamplepaper`
--

CREATE TABLE `programsamplepaper` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `username`, `password`, `age`, `email`) VALUES
(7, 'Deep Shikha', 'deepshi', '909090', '21', 'deep.shikhash2219@gmail.com'),
(3, 'Monika Kumari', 'monika', 'qwerty', '21', 'monika@gmail.com'),
(6, 'priya kumari', 'priya00', 'zxcvbn', '20', 'priya@gmail.com'),
(4, 'Sahil', 'sahil', '123456', '22', 'sahil@gmail.com'),
(2, 'Shashank Shekhar', 'shashank', 'zxcvbn', '25', 'shekharshashank30@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `jeeadvncnotes`
--
ALTER TABLE `jeeadvncnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeeadvncsamplepaper`
--
ALTER TABLE `jeeadvncsamplepaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeefiles`
--
ALTER TABLE `jeefiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeesamplepaper`
--
ALTER TABLE `jeesamplepaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ndanotes`
--
ALTER TABLE `ndanotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ndasamplepaper`
--
ALTER TABLE `ndasamplepaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neetnotes`
--
ALTER TABLE `neetnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neetsamplepaper`
--
ALTER TABLE `neetsamplepaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programnotes`
--
ALTER TABLE `programnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programsamplepaper`
--
ALTER TABLE `programsamplepaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jeeadvncnotes`
--
ALTER TABLE `jeeadvncnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jeeadvncsamplepaper`
--
ALTER TABLE `jeeadvncsamplepaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jeefiles`
--
ALTER TABLE `jeefiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jeesamplepaper`
--
ALTER TABLE `jeesamplepaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ndanotes`
--
ALTER TABLE `ndanotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ndasamplepaper`
--
ALTER TABLE `ndasamplepaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `neetnotes`
--
ALTER TABLE `neetnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `neetsamplepaper`
--
ALTER TABLE `neetsamplepaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programnotes`
--
ALTER TABLE `programnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programsamplepaper`
--
ALTER TABLE `programsamplepaper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
