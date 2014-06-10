-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 09 Juin 2014 à 13:05
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tfe2014-tsg`
--
CREATE DATABASE IF NOT EXISTS `tfe2014-tsg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tfe2014-tsg`;

-- --------------------------------------------------------

--
-- Structure de la table `tsg_commentaires`
--

CREATE TABLE IF NOT EXISTS `tsg_commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `msg` varchar(180) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `tsg_commentaires`
--

INSERT INTO `tsg_commentaires` (`id`, `theme`, `nom`, `msg`) VALUES
(13, 1, 'Gabrielle', 'Je pense que connaitre son sujet reste le plus important, et dÃ©dramatiser aussi'),
(14, 1, 'Miu66', 'Rien que pour la dÃ©marche ce site mÃ©rite un pousse vert!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
