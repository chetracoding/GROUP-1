-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 09:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concert_db`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `customer_tickets`
-- (See below for the actual view)
--
CREATE TABLE `customer_tickets` (
`user_id` int(11)
,`ticket_id` int(11)
,`release_date_id` int(11)
,`date` date
,`start_time` time
,`end_time` time
,`show_id` int(11)
,`title` varchar(100)
,`description` varchar(300)
,`image` varchar(200)
,`duration` time
,`video_trailer` varchar(1000)
,`action` varchar(100)
,`price` float
,`venue_id` int(11)
,`type_id` int(11)
,`name` varchar(100)
,`venue_address` varchar(500)
,`seat_id` int(11)
,`seat_name` varchar(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `release_dates`
--

CREATE TABLE `release_dates` (
  `release_date_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `release_dates`
--

INSERT INTO `release_dates` (`release_date_id`, `date`, `start_time`, `end_time`, `show_id`) VALUES
(15, '2024-02-20', '19:55:00', '20:25:00', 12),
(16, '2024-02-22', '17:56:00', '19:56:00', 13),
(17, '2024-02-23', '20:56:00', '22:26:00', 14),
(18, '2024-02-26', '19:56:00', '22:56:00', 15),
(19, '2024-02-23', '18:03:00', '21:33:00', 16),
(20, '2024-02-27', '18:00:00', '20:00:00', 17),
(21, '2024-02-25', '18:50:00', '19:20:00', 18),
(22, '2024-02-24', '16:00:00', '17:30:00', 18),
(25, '2024-02-21', '19:00:00', '21:00:00', 17),
(29, '2024-02-21', '15:00:00', '19:24:00', 19),
(30, '2024-02-21', '20:00:00', '00:24:00', 19),
(31, '2024-02-22', '17:30:00', '21:54:00', 19),
(32, '2024-02-25', '18:00:00', '19:40:00', 21),
(33, '2024-02-26', '20:00:00', '21:40:00', 21),
(34, '2024-02-26', '17:00:00', '19:00:00', 20),
(35, '2024-02-27', '18:00:00', '20:00:00', 20),
(36, '2024-02-21', '18:00:00', '19:30:00', 12),
(37, '2024-02-23', '07:30:00', '09:30:00', 13),
(38, '2024-02-24', '19:15:00', '21:45:00', 14),
(39, '2024-02-27', '19:12:00', '22:12:00', 15),
(40, '2024-02-25', '17:15:00', '20:15:00', 15),
(41, '2024-02-26', '16:00:00', '19:00:00', 15);

-- --------------------------------------------------------

--
-- Stand-in structure for view `release_date_shows`
-- (See below for the actual view)
--
CREATE TABLE `release_date_shows` (
`release_date_id` int(11)
,`date` date
,`start_time` time
,`end_time` time
,`show_id` int(11)
,`title` varchar(100)
,`description` varchar(300)
,`image` varchar(200)
,`duration` time
,`video_trailer` varchar(1000)
,`action` varchar(100)
,`price` float
,`venue_id` int(11)
,`type_id` int(11)
,`name` varchar(100)
,`venue_address` varchar(500)
);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL,
  `seat_name` varchar(5) NOT NULL,
  `ticket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `seat_name`, `ticket_id`) VALUES
(368, 'L1', 89),
(369, 'L2', 89),
(370, 'L3', 89),
(371, 'L4', 89),
(372, 'G1', 90),
(373, 'G2', 90),
(374, 'G3', 90),
(375, 'G4', 90),
(376, 'G5', 90),
(377, 'G6', 90),
(378, 'G14', 91),
(379, 'G15', 91),
(380, 'G16', 91),
(381, 'G17', 91),
(382, 'G18', 91),
(383, 'G19', 91),
(384, 'G20', 91),
(385, 'A1', 92),
(386, 'A2', 92),
(387, 'A3', 92),
(388, 'A4', 92),
(389, 'A5', 92),
(390, 'A6', 92),
(391, 'A7', 92),
(392, 'A1', 93),
(393, 'A2', 93),
(394, 'A3', 93),
(395, 'A4', 93),
(396, 'A5', 93),
(397, 'A6', 93),
(398, 'A7', 93),
(399, 'A8', 93),
(400, 'A9', 93),
(401, 'L24', 94),
(402, 'L25', 94),
(403, 'L26', 94),
(404, 'L27', 94),
(405, 'L28', 94),
(406, 'L29', 94),
(407, 'L30', 94),
(408, 'L1', 95),
(409, 'L2', 95),
(410, 'L3', 95),
(411, 'L4', 95),
(412, 'G15', 96),
(413, 'G16', 96),
(414, 'G17', 96),
(415, 'G18', 96),
(416, 'G19', 96),
(417, 'G20', 96),
(422, 'L5', 98),
(423, 'L6', 98),
(424, 'L7', 98),
(425, 'K1', 99),
(426, 'K2', 99),
(427, 'K3', 99),
(428, 'K4', 99),
(429, 'J1', 100),
(430, 'J2', 100),
(431, 'J3', 100),
(432, 'J4', 100),
(433, 'L1', 101),
(434, 'L2', 101),
(435, 'L3', 101),
(436, 'L4', 101),
(437, 'L5', 101),
(438, 'L6', 101),
(439, 'L7', 101);

-- --------------------------------------------------------

--
-- Stand-in structure for view `seat_ticket`
-- (See below for the actual view)
--
CREATE TABLE `seat_ticket` (
`ticket_id` int(11)
,`credit_card` varchar(16)
,`card_expiration` date
,`release_date_id` int(11)
,`user_id` int(11)
,`seat_name` varchar(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `seller_shows`
-- (See below for the actual view)
--
CREATE TABLE `seller_shows` (
`show_id` int(11)
,`title` varchar(100)
,`description` varchar(300)
,`image` varchar(200)
,`duration` time
,`video_trailer` varchar(1000)
,`action` varchar(100)
,`price` float
,`venue_id` int(11)
,`type_id` int(11)
,`name` varchar(100)
,`user_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL,
  `duration` time NOT NULL,
  `video_trailer` varchar(1000) NOT NULL,
  `action` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `venue_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `title`, `description`, `image`, `duration`, `video_trailer`, `action`, `price`, `venue_id`, `type_id`) VALUES
(12, 'Gangnam Zombie', 'Korea Movie', 'photo_5_2023-02-19_12-57-45.jpg', '01:30:00', '<iframe width=\"1170\" height=\"767\" src=\"https://www.youtube.com/embed/Plh1sZgxO18\" title=\"Gangnam Zombie Main Trailer Kh Dub\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Action / Comedy / Horror', 3, 5, 1),
(13, 'It\'s In The Wood', 'Chinese Movie', 'photo_4_2023-02-19_12-57-45.jpg', '02:00:00', '<iframe width=\"1170\" height=\"767\" src=\"https://www.youtube.com/embed/1UuoKwNTOkY\" title=\"Official Trailer KH Dub DONE\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Horror', 2, 5, 1),
(14, 'Mummies', 'Animation 2023', 'photo_1_2023-02-19_12-57-45.jpg', '02:30:00', '<iframe width=\"1170\" height=\"767\" src=\"https://www.youtube.com/embed/L9zIGhIZW-M\" title=\"Mummies Trailer\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Animation / Comedy', 3, 11, 2),
(15, 'Laughing 652km', 'Khmer Movie ', 'photo_3_2023-02-19_12-57-45.jpg', '03:00:00', '<iframe width=\"1104\" height=\"767\" src=\"https://www.youtube.com/embed/UbCX0J_nMNI\" title=\"Trailer រឿងសំណើច652km Full HD\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Comedy', 4, 13, 2),
(16, 'Magic Mike\'s Last Dance', 'Romance Movie 2023', 'photo_2_2023-02-19_12-57-45.jpg', '03:30:00', '<iframe width=\"1170\" height=\"767\" src=\"https://www.youtube.com/embed/3wf6MT1TGBE\" title=\"int trailer f2 txtd 1080p 2398 mgmk3 29 97 no slate ProRes custom KH SUB\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Musical / Comedy / Romance', 3, 5, 1),
(17, 'You & Me', 'Chinese Movie', 'photo_6_2023-02-19_12-57-45.jpg', '02:00:00', '<iframe width=\"1170\" height=\"767\" src=\"https://www.youtube.com/embed/yQWO2BK_lR0\" title=\"YMM Trailer KH\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Romance / Drama', 3, 14, 1),
(18, 'The World Of Killing People', 'Khmer Movie', 'file_20234413014445.jpg', '01:30:00', '<iframe width=\"1170\" height=\"767\" src=\"https://www.youtube.com/embed/FCVYljwBhWE\" title=\"TWOKP Trl Kh Dub\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Thriller', 3, 12, 1),
(19, 'Dara', 'Khmer', 'file_20234511044509.jpg', '04:24:00', '<iframe width=\"1170\" height=\"767\" src=\"https://www.youtube.com/embed/FCVYljwBhWE\" title=\"TWOKP Trl Kh Dub\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Thriller', 4.5, 11, 1),
(20, 'Titanic (25th Anniversary)', 'Romance Movie', 'file_20235413015416.jpg', '02:00:00', '<iframe width=\"1170\" height=\"767\" src=\"https://www.youtube.com/embed/8TE5T5npw60\" title=\"TITANIC2023\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Romance', 3, 11, 1),
(21, 'Tainted Soul', 'Horror Moview', 'file_20233313123335.jpg', '01:40:00', '<iframe width=\"1170\" height=\"767\" src=\"https://www.youtube.com/embed/kufbpbtDKk8\" title=\"Tainted Soul TLR KH\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Horror', 4, 5, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `show_venue`
-- (See below for the actual view)
--
CREATE TABLE `show_venue` (
`show_id` int(11)
,`title` varchar(100)
,`description` varchar(300)
,`image` varchar(200)
,`duration` time
,`video_trailer` varchar(1000)
,`action` varchar(100)
,`price` float
,`venue_id` int(11)
,`type_id` int(11)
,`name` varchar(100)
,`venue_address` varchar(500)
,`seat_row` varchar(1)
,`number_column` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `credit_card` varchar(16) NOT NULL,
  `card_expiration` date NOT NULL,
  `release_date_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `credit_card`, `card_expiration`, `release_date_id`, `user_id`) VALUES
(89, '4322423423423423', '2024-02-21', 20, 7),
(90, '3231231232133333', '2024-02-24', 15, 7),
(91, '3213123321312333', '2024-03-01', 15, 7),
(92, '3123123131231231', '2024-03-02', 15, 7),
(93, '3232133213321312', '2024-03-01', 20, 7),
(94, '3232133233333332', '2024-05-24', 17, 7),
(95, '3312313131312333', '2024-02-27', 18, 6),
(96, '3213123123332333', '2024-03-02', 16, 6),
(98, '1234567891234567', '2024-02-22', 20, 13),
(99, '3876318213133333', '2024-03-09', 20, 7),
(100, '3786736432434444', '2024-02-23', 20, 7),
(101, '3231231333333213', '2024-02-22', 22, 14);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_shows`
--

CREATE TABLE `type_of_shows` (
  `type_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_of_shows`
--

INSERT INTO `type_of_shows` (`type_id`, `name`) VALUES
(1, 'Cinema'),
(2, 'Comedy'),
(3, 'Musical'),
(4, 'Classical'),
(5, 'Drama'),
(6, 'Concert ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_bird` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `pin_code` int(11),
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `date_of_bird`, `address`, `email`, `password`, `pin_code`, `role`) VALUES
(2, 'Sann', 'Sum', '2000-02-22', 'Takeo', 'sann@gmail.com', '$2y$10$H0dJTKCi5DiAtknL5ubCKOwLKbDuXLMmSeFQjHHhyBVhZsgFuI0xK', 0, 'seller'),
(3, 'Soki', 'Student', '2005-01-31', 'Phnom Penh', 'soki@gmail.com', '$2y$10$W84QJYtEiOzYqMCNJyeUweZgXEQ8UwZTtmqjAv/geVPsh53Z/oPzy', 0, 'customer'),
(6, 'Dara', 'MM', '2005-01-31', 'Phnom Penh', 'dara@gmail.com', '$2y$10$6JJRrZkp.m3XQSBZQDsX6OO.NpbBvqFPN2Tl2C3UUbEjnmuj3l.9i', 0, 'customer'),
(7, 'Chetra', 'Hong', '2003-02-03', 'Phnom Penh', 'chetra@gmail.com', '$2y$10$d8u4rarT5bJPzzq3ygpTfONRxWLQCrtl70hW1W/h4W7AsirUqRXJy', 908174, 'seller'),
(8, 'Phally', 'MM', '2005-01-31', 'Kandal', 'phally@gmail.com', '$2y$10$bOeC/wiXBoZDpODUfg9g5OwUoNrSxvVjT3SNVaUx1Z3k9BPEv8Km2', 0, 'customer'),
(11, 'Kakada', 'Hong', '2005-01-30', 'Kratie', 'hongkakada@gmail.com', '$2y$10$gAUaGOEvTRmQ6aYSl.QeuOvqPl3.V66wk9gI3vyV7JFD5XhFuPvH.', 0, 'customer'),
(13, 'Kompheak', 'Sao', '2005-02-19', 'Prey Veng', 'kompheak@gmail.com', '$2y$10$1VFdWSVknPyPDAx7hlpqEe.fPT3FJB3c0RP4hKfoKtgw/uhBVDjGS', 0, 'customer'),
(14, 'Sopheatra', 'Hong', '2005-02-12', 'Takeo', 'hong.chetra@gmail.com', '$2y$10$nzRpduW8D4jrNDY5ZClA7uFqQ1ea11PCZel0s27h11lAMs1fDVKH.', 238636, 'customer'),
(15, 'Chetra', 'Hong', '2004-06-22', 'Takeo', 'chetra.hong@student.passerellesnumeriques.org', '$2y$10$jvH5Elti/3zUNRGKxFW5G.gCMfeIjrB9zURndf0C1jlMX/FNdHB7G', 775941, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `venue_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `venue_address` varchar(500) NOT NULL,
  `seat_row` varchar(1) NOT NULL,
  `number_column` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venue_id`, `name`, `venue_address`, `seat_row`, `number_column`, `user_id`) VALUES
(5, 'MAJOR CINEPLEX AEON MALL PHNOM PENH', '#132,Street Samdach Sothearos , Sangkat Tonle Bassac, Phnom Penh(Aeon1)', 'G', 20, 7),
(7, 'Sann Cinema', '#132,Street Samdach Sothearos , Sangkat Tonle Bassac, KMALL', 'G', 25, 2),
(11, 'Legend City Mall', '(St217), Sangkat Vealvong Khan 7 Makara, Phnom Penh, Cambodia', 'L', 22, 7),
(12, 'Legend Toul Kork', 'Street 315, Sangkat Beongkok 1, Khan Toul Kork, Phnom Penh, Cambodia', 'M', 25, 7),
(13, 'Legend Premium Olympia', '6th Floor,The Olympia Mall\r\nMonireth Blvd(217),Sangkat Veal Vong Khan 7 Makara\r\nPhnom Penh, Cambodia', 'K', 20, 7),
(14, 'Legend Premium Exchange Square', 'Street 106, Corner of Street 61, Sangkat Wat Phnom, Phnom Penh, Cambodia', 'S', 24, 7);

-- --------------------------------------------------------

--
-- Structure for view `customer_tickets`
--
DROP TABLE IF EXISTS `customer_tickets`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customer_tickets`  AS SELECT `t`.`user_id` AS `user_id`, `t`.`ticket_id` AS `ticket_id`, `t`.`release_date_id` AS `release_date_id`, `rd`.`date` AS `date`, `rd`.`start_time` AS `start_time`, `rd`.`end_time` AS `end_time`, `s`.`show_id` AS `show_id`, `s`.`title` AS `title`, `s`.`description` AS `description`, `s`.`image` AS `image`, `s`.`duration` AS `duration`, `s`.`video_trailer` AS `video_trailer`, `s`.`action` AS `action`, `s`.`price` AS `price`, `s`.`venue_id` AS `venue_id`, `s`.`type_id` AS `type_id`, `v`.`name` AS `name`, `v`.`venue_address` AS `venue_address`, `st`.`seat_id` AS `seat_id`, `st`.`seat_name` AS `seat_name` FROM ((((`ticket` `t` join `release_dates` `rd` on(`rd`.`release_date_id` = `t`.`release_date_id`)) join `shows` `s` on(`s`.`show_id` = `rd`.`show_id`)) join `venues` `v` on(`v`.`venue_id` = `s`.`venue_id`)) join `seats` `st` on(`st`.`ticket_id` = `t`.`ticket_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `release_date_shows`
--
DROP TABLE IF EXISTS `release_date_shows`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `release_date_shows`  AS SELECT `rd`.`release_date_id` AS `release_date_id`, `rd`.`date` AS `date`, `rd`.`start_time` AS `start_time`, `rd`.`end_time` AS `end_time`, `s`.`show_id` AS `show_id`, `s`.`title` AS `title`, `s`.`description` AS `description`, `s`.`image` AS `image`, `s`.`duration` AS `duration`, `s`.`video_trailer` AS `video_trailer`, `s`.`action` AS `action`, `s`.`price` AS `price`, `s`.`venue_id` AS `venue_id`, `s`.`type_id` AS `type_id`, `v`.`name` AS `name`, `v`.`venue_address` AS `venue_address` FROM ((`release_dates` `rd` join `shows` `s` on(`s`.`show_id` = `rd`.`show_id`)) join `venues` `v` on(`v`.`venue_id` = `s`.`venue_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `seat_ticket`
--
DROP TABLE IF EXISTS `seat_ticket`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `seat_ticket`  AS SELECT `t`.`ticket_id` AS `ticket_id`, `t`.`credit_card` AS `credit_card`, `t`.`card_expiration` AS `card_expiration`, `t`.`release_date_id` AS `release_date_id`, `t`.`user_id` AS `user_id`, `s`.`seat_name` AS `seat_name` FROM (`ticket` `t` join `seats` `s` on(`s`.`ticket_id` = `t`.`ticket_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `seller_shows`
--
DROP TABLE IF EXISTS `seller_shows`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `seller_shows`  AS SELECT `s`.`show_id` AS `show_id`, `s`.`title` AS `title`, `s`.`description` AS `description`, `s`.`image` AS `image`, `s`.`duration` AS `duration`, `s`.`video_trailer` AS `video_trailer`, `s`.`action` AS `action`, `s`.`price` AS `price`, `s`.`venue_id` AS `venue_id`, `s`.`type_id` AS `type_id`, `v`.`name` AS `name`, `v`.`user_id` AS `user_id` FROM (`shows` `s` join `venues` `v` on(`v`.`venue_id` = `s`.`venue_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `show_venue`
--
DROP TABLE IF EXISTS `show_venue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `show_venue`  AS SELECT `s`.`show_id` AS `show_id`, `s`.`title` AS `title`, `s`.`description` AS `description`, `s`.`image` AS `image`, `s`.`duration` AS `duration`, `s`.`video_trailer` AS `video_trailer`, `s`.`action` AS `action`, `s`.`price` AS `price`, `s`.`venue_id` AS `venue_id`, `s`.`type_id` AS `type_id`, `v`.`name` AS `name`, `v`.`venue_address` AS `venue_address`, `v`.`seat_row` AS `seat_row`, `v`.`number_column` AS `number_column` FROM (`shows` `s` join `venues` `v` on(`v`.`venue_id` = `s`.`venue_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `release_dates`
--
ALTER TABLE `release_dates`
  ADD PRIMARY KEY (`release_date_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `venue_id` (`venue_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `show_datetime_id` (`release_date_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `type_of_shows`
--
ALTER TABLE `type_of_shows`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`venue_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `release_dates`
--
ALTER TABLE `release_dates`
  MODIFY `release_date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `type_of_shows`
--
ALTER TABLE `type_of_shows`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `release_dates`
--
ALTER TABLE `release_dates`
  ADD CONSTRAINT `release_dates_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `shows` (`show_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`ticket_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`venue_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shows_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type_of_shows` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`release_date_id`) REFERENCES `release_dates` (`release_date_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `venues`
--
ALTER TABLE `venues`
  ADD CONSTRAINT `venues_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
