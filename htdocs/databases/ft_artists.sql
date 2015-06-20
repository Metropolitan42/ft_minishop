-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 20 Juin 2015 à 04:42
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ft_minishop`
--

-- --------------------------------------------------------

--
-- Structure de la table `ft_artists`
--

CREATE TABLE IF NOT EXISTS `ft_artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `productions` int(11) NOT NULL,
  `records` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=26 ;

--
-- Contenu de la table `ft_artists`
--

INSERT INTO `ft_artists` (`id`, `name`, `productions`, `records`) VALUES
(1, 'Floxytek', 1, 1),
(2, 'BillX', 1, 1),
(3, 'Watmastaz', 1, 1),
(4, 'Riko', 1, 1),
(5, 'TLB', 1, 1),
(6, 'Tom H', 1, 1),
(7, 'Talasemik', 1, 1),
(8, 'Sparks', 1, 1),
(9, 'Sustain Release', 1, 1),
(10, 'Viko', 1, 1),
(11, 'Neurokontrol', 1, 1),
(12, 'Tripis', 1, 1),
(13, 'Paranoiak SLK', 1, 1),
(14, 'Vinsouille', 1, 1),
(15, 'Darktek', 1, 1),
(16, 'Mindtrax', 1, 1),
(17, 'Oktoberone', 1, 1),
(18, 'Pitch', 1, 1),
(19, 'Newlojik', 1, 1),
(20, 'Le Clown Evil', 1, 1),
(21, 'Imprevu', 1, 1),
(22, 'Strez', 1, 1),
(23, 'Taz', 1, 1),
(24, 'Wems', 1, 1),
(25, 'Tao H', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
