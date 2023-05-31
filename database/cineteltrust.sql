-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 10:32 AM
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
-- Database: `cineteltrust`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitties`
--

CREATE TABLE `activitties` (
  `id` int(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `adderss` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `type`, `adderss`, `date`) VALUES
(1, 'joy chakraborty', 2147483647, 'jchakraborty2011@gmail.com', '123456', 'admin', 'barrackpore', '2018-05-29 14:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `description`) VALUES
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, ''),
(48, ''),
(49, ''),
(50, ''),
(51, ''),
(52, ''),
(53, ''),
(54, ''),
(55, ''),
(56, ''),
(57, ''),
(58, ''),
(59, ''),
(60, ''),
(61, ''),
(62, ''),
(63, ''),
(64, ''),
(65, ''),
(66, ''),
(67, ''),
(68, ''),
(69, ''),
(70, ''),
(71, ''),
(72, ''),
(73, ''),
(74, ''),
(75, ''),
(76, ''),
(77, ''),
(78, ''),
(79, ''),
(80, ''),
(81, ''),
(82, ''),
(83, ''),
(84, ''),
(85, ''),
(86, ''),
(87, ''),
(88, ''),
(89, ''),
(90, ''),
(91, ''),
(92, ''),
(93, ''),
(94, ''),
(95, ''),
(96, ''),
(97, ''),
(98, ''),
(99, ''),
(100, ''),
(101, ''),
(102, ''),
(103, ''),
(104, ''),
(105, ''),
(106, ''),
(107, ''),
(108, ''),
(109, ''),
(110, ''),
(111, ''),
(112, ''),
(113, ''),
(114, ''),
(115, ''),
(116, ''),
(117, ''),
(118, ''),
(119, ''),
(120, ''),
(121, ''),
(122, ''),
(123, ''),
(124, ''),
(125, ''),
(126, ''),
(127, ''),
(128, ''),
(129, ''),
(130, ''),
(131, ''),
(132, ''),
(133, ''),
(134, ''),
(136, ''),
(137, ''),
(138, ''),
(139, ''),
(140, ''),
(141, ''),
(142, ''),
(143, ''),
(144, ''),
(145, ''),
(146, ''),
(147, ''),
(148, ''),
(149, ''),
(150, ''),
(151, ''),
(152, ''),
(153, ''),
(154, ''),
(155, ''),
(156, ''),
(157, ''),
(158, ''),
(159, ''),
(160, ''),
(161, ''),
(162, ''),
(163, ''),
(164, ''),
(165, ''),
(166, ''),
(167, ''),
(168, ''),
(169, ''),
(170, ''),
(171, ''),
(172, ''),
(173, ''),
(174, ''),
(175, ''),
(176, ''),
(177, ''),
(178, ''),
(179, ''),
(180, ''),
(181, ''),
(182, ''),
(183, ''),
(199, ''),
(200, ''),
(201, '');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`) VALUES
(1, 'jksgcsdkagk@'),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, '');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `image`, `name`, `description`, `designation`) VALUES
(6, 'soumitra chatterjee.jpg', 'Soumitra Chatterjee', 'Started his career in Satyajit Ray’ “Apur Sansar”. Acted in more than 200 feature films directed by Satyajit Ray, Mrinal Sen , Tapan Sinha & others . Conferred Legion of ‘honour for lifetime achievement in acting by the French government .Now Chairman, kolkata International film festival.\r\n', 'Actor / Chairman'),
(7, 'pranab_chaudhari.jpg', 'Pranab Chaudhari', 'Directed documentary, Feature Film & the Serials, Trade union Secretary and members of various film committees.\r\n', 'Director/Secretary'),
(8, 'soumendu_roy.jpg', 'Soumendu Roy', 'Worked as Cinematographer in Satyajit Ray’s film .Won three national awards as Cinematographer in feature film category and once in Documentary category. Director of W. B. F. D .C. and member various film committees of our state.', 'Cinematographer /Treasurer'),
(9, 'mithun_chakraborty.jpg', 'Mithun Chakraborty', 'Graduate in Acting from FT11, Pune. Won national award for Hindi film “Mrigaya” directed by Mrinal Sen . Acted in more than 200 feature films in Hindi Bengali and Others languages .2nd national award in Bengali film “Tahader Katha “ and supporting actor award in “Vivekananda”(Hindi). Chairman of Cygnus, an -visual company producing Bengali programs.\r\n', 'Actor / Vice-chairman'),
(10, 'moon_moon_sen.jpg', 'Moon Moon Sen', 'Daughter of popular actress Suchitra Sen. Acted in more than 100 feature films.', 'Actress /Vice-Chairman'),
(11, 'prasenjit_chatterjee.jpg', 'Prasenjit Chatterjee', 'Son of Biswajit, an eminent actor of Hindi, Bengali & Tamil films .Now Prasenjit is the most successful hero of Bengali films. Acted in more than 100 feature films, in Bengali and Hindi language. Member of all the development committees of film industry.', 'Actor /Joint secretary'),
(12, 'Dulal_Dutta.jpg', 'Dulal Dutta', 'Worked as editor in all the films of Satyajit ray.', 'Editor / Trustee'),
(13, 'rituparmna_sengupta.jpg', 'Rituparmna Sengupta', 'Leading heroin of Bengal. Acted in more than 100 feature film .won national award for best actress in “Dahan”.', 'Actor /Trustee'),
(14, 'mamatashankar.jpg', 'Mamatashankar', 'Daughter of Udayshanker , finest dancer and actress . Acted in films directed by leading directors of Bengal like Satyajit Ray, Mrinal Sen Tapan Sinha & others.', 'Actress /Trustee'),
(15, 'indrani_halder.jpg', 'Indrani halder', 'Acted in more than 100 films and won national award in the best actress category.', 'Actress /Trustee'),
(16, 'debasree_roy.jpg', 'Debasree Roy', 'Acted in more than 100 feature films and won national award in the best actress category.\r\n', 'Actress /Trustee'),
(17, 'ranjit_mullick.jpg', 'Ranjit Mullick', 'Won best actor award in the Bengali film “Interview” in Carlory Vary International film festival of Czeckoslovakia .', 'Actor / Vice -Chairman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitties`
--
ALTER TABLE `activitties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitties`
--
ALTER TABLE `activitties`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
