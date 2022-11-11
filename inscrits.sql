-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 26 mai 2022 à 19:04
-- Version du serveur : 8.0.28
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscrits`
--

DROP TABLE IF EXISTS `inscrits`;
CREATE TABLE IF NOT EXISTS `inscrits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `matricul` int NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` bigint NOT NULL,
  `annee_etude` enum('L1','L2','L3','M1','M2') NOT NULL,
  `specialite` varchar(30) NOT NULL,
  `faculte` varchar(20) NOT NULL,
  `motif` text NOT NULL,
  `objectif` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `inscrits`
--

INSERT INTO `inscrits` (`id`, `matricul`, `prenom`, `nom`, `email`, `telephone`, `annee_etude`, `specialite`, `faculte`, `motif`, `objectif`) VALUES
(153, 20203020, 'tb', 'mohamed', 'mm03005@gmail.com', 999999998, 'L2', 'isil', 'info', 'ok', 'ok'),
(154, 1234, 'tbb', 'mohamedd', 'mm030205@gmail.com', 9229998, 'L3', 'chimie', 'physique', 'idk', 'idk'),
(155, 9, 'ANES', 'TAB', 'mohamedukouyout09@gmail.com', 6777666, 'L2', 'isil', 'info', 'jsss', 'qsq'),
(156, 9, 'ANES', 'TAB', 'mohamedukouyout09@gmail.com', 6777666, 'L2', 'isil', 'info', 'jsss', 'qsq'),
(157, 9, 'ANES', 'TAB', 'mohamedukouyout09@gmail.com', 6777666, 'L2', 'isil', 'info', 'jsss', 'qsq'),
(158, 12, 'tb mohamed', 'mohamed', 'mm03005@gmail.com', 911, 'M2', 'gtr', 'electronique', 'pratique', 'pratique'),
(160, 12900, 'chahid', 'azizi', 'chahid@gmail.com', 556785, 'M1', 'acad', 'info', 'qlq', 'qlq'),
(161, 12900, 'chahid', 'azizi', 'chahid@gmail.com', 556785, 'M1', 'acad', 'info', 'qlq', 'qlq'),
(162, 12098, 'test', 'test', 'test@gmail.com', 222222, 'L2', 'test', 'test', 'test', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
