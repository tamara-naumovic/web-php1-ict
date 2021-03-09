-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 11:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acabaza`
--
CREATE DATABASE IF NOT EXISTS `acabaza` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `acabaza`;

-- --------------------------------------------------------

--
-- Table structure for table `akcija`
--

CREATE TABLE `akcija` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `opis` text NOT NULL,
  `popust` decimal(4,2) NOT NULL,
  `datum_od` date NOT NULL,
  `datum_do` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akcija`
--

INSERT INTO `akcija` (`id`, `naziv`, `opis`, `popust`, `datum_od`, `datum_do`) VALUES
(1, 'novaGod', 'akcija za novaka', '0.99', '2021-03-07', '2021-03-07'),
(2, 'novaGod2', 'akcija za novaka', '12.00', '2021-03-07', '2021-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `ID` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`ID`, `naziv`) VALUES
(1, 'novi'),
(2, 'novi naziv');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `ID` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `sifra` varchar(60) NOT NULL,
  `uloga_id` int(11) NOT NULL,
  `adresa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`ID`, `ime`, `prezime`, `email`, `sifra`, `uloga_id`, `adresa`) VALUES
(2, 'Tamara', 'Naumovic', 'tamara@elab.rs', 'sifra1', 2, ''),
(4, 'Aleksandar', 'Naumovic', 'mejl@mejl.com', 'sifra1', 2, 'maksima'),
(5, 'Pera', 'Peric', 'mejl1', 'sifra1', 2, 'maksima'),
(6, 'admin', 'admin', 'admin@admin.com', 'admin1', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meni`
--

CREATE TABLE `meni` (
  `id` int(11) NOT NULL,
  `naziv_linka` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meni`
--

INSERT INTO `meni` (`id`, `naziv_linka`, `link`) VALUES
(1, 'Home', 'index.php'),
(2, 'Store', 'store.php'),
(3, 'About', 'about.php'),
(4, 'Admin', 'admin.php'),
(5, 'Contact', 'contact.php'),
(6, 'Korpa', 'korpa.php'),
(7, 'Login', 'login.php'),
(8, 'Logout', 'logout.php');

-- --------------------------------------------------------

--
-- Table structure for table `narudzbina`
--

CREATE TABLE `narudzbina` (
  `id` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `ukupna_cena` decimal(10,2) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narudzbina`
--

INSERT INTO `narudzbina` (`id`, `korisnik_id`, `ukupna_cena`, `datum`) VALUES
(3, 4, '500.00', '2021-03-07 22:40:51'),
(4, 4, '500.00', '2021-03-07 22:41:10'),
(5, 4, '500.00', '2021-03-09 09:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `poruka`
--

CREATE TABLE `poruka` (
  `id` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `sadrzaj` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poruka`
--

INSERT INTO `poruka` (`id`, `korisnik_id`, `sadrzaj`, `timestamp`) VALUES
(2, 2, 'novaaaaaa poruka', '2021-03-07 22:01:50'),
(3, 4, 'sta radis', '2021-03-07 22:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `ID` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `kategorija_id` int(11) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `proizvodjac` varchar(50) NOT NULL,
  `kvantitet` int(11) NOT NULL,
  `slika_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`ID`, `naziv`, `kategorija_id`, `cena`, `proizvodjac`, `kvantitet`, `slika_id`) VALUES
(1, 'novi test', 2, '60.00', 'test proizvodjac', 10, NULL),
(2, 'drugi proiz', 1, '55555.00', 'prozkealjdlk', 10, NULL),
(3, 'hgfds', 1, '20.00', 'ghfds', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi_na_akciji`
--

CREATE TABLE `proizvodi_na_akciji` (
  `akcija_id` int(11) NOT NULL,
  `proizvod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

CREATE TABLE `slika` (
  `id` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `naziv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stavka`
--

CREATE TABLE `stavka` (
  `narudzbina_id` int(11) NOT NULL,
  `proizvod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stavka`
--

INSERT INTO `stavka` (`narudzbina_id`, `proizvod_id`) VALUES
(4, 1),
(4, 2),
(4, 1),
(5, 1),
(5, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `ID` int(11) NOT NULL,
  `naziv` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`ID`, `naziv`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akcija`
--
ALTER TABLE `akcija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `uloga_id` (`uloga_id`);

--
-- Indexes for table `meni`
--
ALTER TABLE `meni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narudzbina`
--
ALTER TABLE `narudzbina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korisnik_id` (`korisnik_id`);

--
-- Indexes for table `poruka`
--
ALTER TABLE `poruka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korisnik_id` (`korisnik_id`);

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `kategorija_id` (`kategorija_id`),
  ADD KEY `slika_id` (`slika_id`);

--
-- Indexes for table `proizvodi_na_akciji`
--
ALTER TABLE `proizvodi_na_akciji`
  ADD PRIMARY KEY (`akcija_id`,`proizvod_id`),
  ADD KEY `FK_proiz` (`proizvod_id`);

--
-- Indexes for table `slika`
--
ALTER TABLE `slika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stavka`
--
ALTER TABLE `stavka`
  ADD KEY `narudzbina_id` (`narudzbina_id`),
  ADD KEY `proizvod_id` (`proizvod_id`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akcija`
--
ALTER TABLE `akcija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meni`
--
ALTER TABLE `meni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `narudzbina`
--
ALTER TABLE `narudzbina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `poruka`
--
ALTER TABLE `poruka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slika`
--
ALTER TABLE `slika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`uloga_id`) REFERENCES `uloga` (`ID`);

--
-- Constraints for table `narudzbina`
--
ALTER TABLE `narudzbina`
  ADD CONSTRAINT `narudzbina_ibfk_1` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnik` (`ID`);

--
-- Constraints for table `poruka`
--
ALTER TABLE `poruka`
  ADD CONSTRAINT `poruka_ibfk_1` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnik` (`ID`);

--
-- Constraints for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD CONSTRAINT `proizvod_ibfk_1` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorija` (`ID`),
  ADD CONSTRAINT `proizvod_ibfk_2` FOREIGN KEY (`slika_id`) REFERENCES `slika` (`id`);

--
-- Constraints for table `proizvodi_na_akciji`
--
ALTER TABLE `proizvodi_na_akciji`
  ADD CONSTRAINT `FK_akc` FOREIGN KEY (`akcija_id`) REFERENCES `akcija` (`id`),
  ADD CONSTRAINT `FK_proiz` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvod` (`ID`);

--
-- Constraints for table `stavka`
--
ALTER TABLE `stavka`
  ADD CONSTRAINT `stavka_ibfk_1` FOREIGN KEY (`narudzbina_id`) REFERENCES `narudzbina` (`id`),
  ADD CONSTRAINT `stavka_ibfk_2` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvod` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
