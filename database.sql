-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 12:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publicnotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(13) NOT NULL,
  `note` longtext NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `note`, `views`) VALUES
(15, 'fas', '<h3>jksaldj;als</h3>', 17),
(16, 'fkfsalfkasl;', '<h3>Anything you type will be engraved in the code of this site, forever!</h3><h4>Confess your crush, share your thoughts or do whatever you want!</h4><p><a href=\"https://rohanghalib.me/publicnotepad/view_note.php?id=7\" rel=\"noopener noreferrer\" target=\"_blank\">Make Sure to read Readme before using!</a></p>', 19),
(17, 'a', '<h3>Anything you type will be engraved in the code of this site, forever!</h3><h4>Confess your crush, share your thoughts or do whatever you want!</h4><p><a href=\"https://rohanghalib.me/publicnotepad/view_note.php?id=7\" rel=\"noopener noreferrer\" target=\"_blank\">Make Sure to read Readme before using!</a></p>', 6),
(18, 'gdsfgdsfgd', '<h3>Anything you type will be engraved in the code of this site, forever!</h3><h4>Confess your crush, share your thoughts or do whatever you want!</h4><p><a href=\"https://rohanghalib.me/publicnotepad/view_note.php?id=7\" rel=\"noopener noreferrer\" target=\"_blank\">Make Sure to read Readme before using!</a></p>', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
