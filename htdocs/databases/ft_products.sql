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
-- Structure de la table `ft_products`
--

CREATE TABLE IF NOT EXISTS `ft_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `production` int(11) NOT NULL,
  `label` int(11) NOT NULL,
  `name` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `category` int(11) NOT NULL,
  `released` date NOT NULL,
  `added` date NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `track_a_one` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `artist_a_one` int(11) NOT NULL,
  `track_a_two` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `artist_a_two` int(11) NOT NULL,
  `track_b_one` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `artist_b_one` int(11) NOT NULL,
  `track_b_two` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `artist_b_two` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `ft_products`
--

INSERT INTO `ft_products` (`id`, `production`, `label`, `name`, `category`, `released`, `added`, `price`, `stock`, `track_a_one`, `artist_a_one`, `track_a_two`, `artist_a_two`, `track_b_one`, `artist_b_one`, `track_b_two`, `artist_b_two`) VALUES
(1, 1, 1, 'Architek 10', 1, '2009-04-11', '2015-06-20', 15, 10, 'Track...', 1, 'Track...', 2, 'Track...', 3, 'Track...', 4),
(2, 1, 1, 'Architek 11', 1, '2008-10-18', '2015-06-20', 10, 10, 'Track...', 5, 'Track...', 5, 'Track...', 6, 'Track...', 7),
(3, 1, 1, 'Architek 12', 1, '2008-11-15', '2015-06-20', 10, 10, 'Track...', 5, 'Track...', 9, 'Track...', 6, 'Track...', 8),
(4, 1, 1, 'Architek 13', 1, '2009-01-03', '2015-06-20', 15, 0, 'Track...', 5, 'Track...', 5, 'Track...', 10, 'Track...', 8),
(5, 1, 1, 'Architek 14', 1, '2009-03-14', '2015-06-20', 15, 0, 'Track...', 5, 'Track...', 5, 'Track...', 4, 'Track...', 8),
(6, 2, 2, 'Prostitution Sonore 05', 2, '2010-11-06', '2015-06-20', 10, 10, 'Track...', 11, 'Track...', 11, 'Track...', 12, 'Track...', 12),
(7, 2, 2, 'Prostitution Sonore 06', 2, '2012-05-19', '2015-06-20', 10, 10, 'Track...', 12, 'Track...', 12, 'Track...', 13, 'Track...', 14),
(8, 2, 2, 'Prostitution Sonore 07', 2, '2012-10-20', '2015-06-20', 20, 10, 'Track...', 12, 'Track...', 15, 'Track...', 12, 'Track...', 15),
(9, 2, 2, 'Prostitution Sonore 08', 2, '2014-07-13', '2015-06-20', 20, 10, 'Track...', 16, 'Track...', 18, 'Track...', 17, 'Track...', 20),
(10, 2, 2, 'Prostitution Sonore 09', 2, '2015-05-02', '2015-06-20', 10, 10, 'Track...', 18, 'Track...', 19, 'Track...', 20, 'Track...', 21),
(11, 2, 3, 'Astrology 15', 3, '2012-08-04', '2015-06-20', 25, 0, 'Track...', 22, 'Track...', 22, 'Track...', 22, 'Track...', 23),
(12, 2, 3, 'Astrology 16', 3, '2012-09-22', '2015-06-20', 10, 0, 'Track...', 16, 'Track...', 13, 'Track...', 24, 'Track...', 25),
(13, 2, 3, 'Astrology 17', 3, '2012-09-22', '2015-06-20', 15, 10, 'Track...', 16, 'Track...', 13, 'Track...', 24, 'Track...', 25),
(14, 2, 3, 'Astrology 18', 3, '2012-11-02', '2015-06-20', 10, 10, 'Track...', 13, 'Track...', 11, 'Track...', 22, 'Track...', 22),
(15, 2, 3, 'Astrology 19', 3, '2013-03-09', '2015-06-20', 10, 10, 'Track...', 13, 'Track...', 13, 'Track...', 13, 'Track...', 13);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
