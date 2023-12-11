-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2023 at 09:42 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social4sia`
--

-- --------------------------------------------------------

--
-- Table structure for table `commenti`
--

CREATE TABLE `commenti` (
  `id` int NOT NULL,
  `idutente` int NOT NULL,
  `idpost` int NOT NULL,
  `contenuto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `commenti`
--

INSERT INTO `commenti` (`id`, `idutente`, `idpost`, `contenuto`) VALUES
(1, 5, 4, 'ahahahahaahah'),
(2, 3, 4, 'bellissima aahahhahsdhufahs');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `idutente` int NOT NULL,
  `contenuto` text NOT NULL,
  `allegato` varchar(255) NOT NULL,
  `numerodilike` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `idutente`, `contenuto`, `allegato`, `numerodilike`) VALUES
(3, 2, '#beccatestotrapezio ', 'memelink', 100),
(4, 3, '#poverogabbiano ', 'memelink ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `utente`
--

CREATE TABLE `utente` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `datadinascita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`id`, `nome`, `cognome`, `password`, `email`, `datadinascita`) VALUES
(1, 'George', 'Dioane', 'georgessssss', 'georgeioandioane@gmail.com', '2005-12-10'),
(2, 'Damian', 'Diaconu', 'demieeen', 'damiandiaconu@gmail.com', '2005-12-08'),
(3, 'Alessandro', 'Piccini', 'piccc', 'Alessandropiccini@gmail.com', '2006-12-03'),
(4, 'Cristiano ', 'Vignotto', 'vignox', 'cristianovignotto@gmail.com', '2006-12-04'),
(5, 'Denisa', 'Cukaj', 'deni', 'denisacucaj@gmail.com', '2005-07-04'),
(6, 'Indrit', 'Mashkuli', 'Kid', 'indritmashkuli@gmail.com', '2023-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commenti`
--
ALTER TABLE `commenti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idutente` (`idutente`),
  ADD KEY `idpost` (`idpost`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idutente` (`idutente`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commenti`
--
ALTER TABLE `commenti`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commenti`
--
ALTER TABLE `commenti`
  ADD CONSTRAINT `commenti_ibfk_1` FOREIGN KEY (`idpost`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `commenti_ibfk_2` FOREIGN KEY (`idutente`) REFERENCES `utente` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idutente`) REFERENCES `utente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
