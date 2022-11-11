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
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(200) NOT NULL,
  `description` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `titre`, `date`, `type`, `description`) VALUES
(1, 'Micro Club Capture The Flag (MCTF)', '2020-05-13', 'manifestation scientifique', 'Micro Club Capture The Flag is a lounge around cyber-security, encompassing conferences, round tables and a competition national tion. The purpose of MCTF is to enable allow participants to discover and master new technologies as well as development learn new skills. In with a view to encouraging the development of the white hacker community.'),
(2, 'Red Hat Training Camp', '2021-05-09', 'formation', 'Red Hat Training Camp is a certified 3-day training regarding Red Hat technologies. The course is led by Dr. Djelloul Bouida, Senior Solutions Architect and Level IV RHCA. The aim is to enable students to acquire a experience on the linux administration system, virtualization and cloud computing on a beginner-intermediate level.'),
(3, 'Algeria Game Challenge', '2021-03-11', 'concours de développement de jeux vidéo', 'Pioneer of video game development and first initiative to introduce this field in Algeria, Algeria Game Challenge, formerly named “XNA” after the Framework of Micro- soft, is a video game development contest aimed at to enthusiasts of the video game field in the four corners of the country. This competition aims to launch participants into a process exploring the profession of video game developer, in order to attract investors to this sector.'),
(4, 'Algeria Disrupt', '2022-01-06', 'conference', 'Algeria Disrupt is the first edition of “Algeria Disrupt: the annual startup confer- ence” organized at the CIC: International Centeral Conferences, by the Ministry of micro enterprise, start up and economy knowledge in collaboration with the CELEC club and with the help and participation of the Micro Club.'),
(5, 'Algeria 2.0', '2022-02-10', 'conference', 'Algeria 2.0 is the biggest WEB event and ICT in Africa. He is considered \"the international crossroads of professionals ICT and WEB 2.0\". Its purpose is to ensure a shift towards a digital future. creates all sorts of development opportunities development of the country and the continent.'),
(6, 'Micro Club Winter Hacks\r\n', '2021-09-15', 'activities and events', 'The idea of the Winter Hacks Season is to bring together the activities and events of types of hackathons, workshops and competitions tions of the period of the winter season of September to February in an intercon- format necté which allows participants to enjoy of these activities to learn new technologies, improve their skills, acquire news that serves them in academic, professional and personal life nel as well as being able to apply these new skills in the challenges of the different events simultaneously and work within a community nautical.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
