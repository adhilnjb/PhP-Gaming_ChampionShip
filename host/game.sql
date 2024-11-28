-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 12:44 PM
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
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(100) NOT NULL,
  `player_id` int(100) NOT NULL,
  `game_id` int(100) NOT NULL,
  `host_id` int(100) NOT NULL,
  `participants` int(100) NOT NULL,
  `game_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `player_id`, `game_id`, `host_id`, `participants`, `game_status`) VALUES
(1, 2, 1, 3, 1, 'ready'),
(2, 6, 1, 3, 1, 'ready'),
(3, 5, 1, 3, 1, 'ready'),
(22, 8, 1, 3, 1, 'ready'),
(23, 6, 16, 3, 1, 'active'),
(24, 8, 17, 9, 1, 'active'),
(25, 10, 18, 9, 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(100) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `game_type` varchar(100) NOT NULL,
  `players` int(100) NOT NULL,
  `date` date NOT NULL,
  `login_id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `fee` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_name`, `game_type`, `players`, `date`, `login_id`, `image`, `fee`) VALUES
(1, 'War Of Battlegrounds', 'PUBG', 4, '2023-10-12', 3, 'RU4MNctN.png', 100),
(16, 'PES Champions League', 'PES', 11, '2023-10-14', 3, 'wallpaper_pro_evolution_soccer_4_02_1600.jpg', 50),
(17, 'coc', 'war', 50, '2023-10-15', 9, 'u.jpg', 45),
(18, 'among', 'Among Us', 15, '2023-10-15', 9, 'd96d1-16008022829964-800.avif', 70);

-- --------------------------------------------------------

--
-- Table structure for table `game_code`
--

CREATE TABLE `game_code` (
  `code_id` int(100) NOT NULL,
  `game_id` int(100) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_code`
--

INSERT INTO `game_code` (`code_id`, `game_id`, `code`) VALUES
(1, 1, 'hjhadg'),
(3, 17, 'aaaaaa'),
(4, 17, '1235');

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `host_id` int(100) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `login_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`host_id`, `h_name`, `email`, `phone`, `login_id`) VALUES
(1, 'ben', 'ben@gmail.com', '7894561230', 3),
(2, 'ajith', 'ccc@gmail.com', '34576534554', 9);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `login_status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `user_type`, `login_status`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'anu', 'anu1', 'player', 1),
(3, 'ben', 'ben1', 'host', 1),
(5, 'vinu', 'vinu1', 'player', 1),
(6, 'manu', 'manu1', 'player', 1),
(7, 'ginu', 'ginu', 'player', 1),
(8, 'roy', 'roy1', 'player', 1),
(9, 'sss', 'ben1', 'host', 1),
(10, 'adhi', 'adhi1', 'player', 1);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `login_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `p_name`, `email`, `phone`, `login_id`) VALUES
(1, 'anu', 'anu@gmail.com', '9685741230', 2),
(2, 'vinu', 'vinu@gmail.com', '8965741230', 5),
(3, 'manu', 'manu@gmail.com', '7598463210', 6),
(4, 'ginu', 'ginu@gmail.com', '6589742130', 7),
(5, 'roy', 'roy@gmail.com', '5874693210', 8),
(6, 'adhil', 'ccc@gmail.com', '8281291154', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `game_ibfk_1` (`login_id`);

--
-- Indexes for table `game_code`
--
ALTER TABLE `game_code`
  ADD PRIMARY KEY (`code_id`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`host_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `login_id` (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `game_code`
--
ALTER TABLE `game_code`
  MODIFY `code_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `host_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`);

--
-- Constraints for table `host`
--
ALTER TABLE `host`
  ADD CONSTRAINT `host_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`);

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
