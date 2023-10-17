-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 sep. 2023 à 07:45
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID_ETU` int(11) NOT NULL,
  `MAT_ETDU` varchar(250) NOT NULL,
  `NOMCOMPLET_ETU` varchar(250) NOT NULL,
  `GENRE_ETU` varchar(250) NOT NULL,
  `DATEN_ETU` varchar(250) NOT NULL,
  `LIEU_N_ETU` varchar(250) NOT NULL,
  `EMAIL_ETU` varchar(250) NOT NULL,
  `TEL_ETU` varchar(250) NOT NULL,
  `FILIERE_ETU` varchar(250) NOT NULL,
  `CLASSE_ETU` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`ID_ETU`, `MAT_ETDU`, `NOMCOMPLET_ETU`, `GENRE_ETU`, `DATEN_ETU`, `LIEU_N_ETU`, `EMAIL_ETU`, `TEL_ETU`, `FILIERE_ETU`, `CLASSE_ETU`) VALUES
(1, 'Ndiasse44421', 'NdiasseMBOW', 'Masculin', '1999-02-09', 'Kaaolack', 'ndiasse.mbow@gmail.com', '779070965', 'IG', 'Licence 2'),
(2, 'elReservadoTc1', 'elReservado MBOW', 'Masulin', '1999-04-25', 'Dakar', 'elReservadoTc1@gmail.com', '774589632', 'IDA', 'Licence 1'),
(3, 'lionel045', 'lionel Messi', 'Maculin', '2005-04-18', 'Rosario', 'laPulga@gmail.com', '002587414', 'Sport', 'Licence 3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID_ETU`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID_ETU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
