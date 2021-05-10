-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 26 mai 2020 à 17:49
-- Version du serveur :  10.1.39-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sinda`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `lastname`, `email`, `phone`, `message`) VALUES
(1, 'amine', 'jbali', 'chahirjbali@gmail.com', '2175538714', 'hellooooooo'),
(2, 'amine', 'jbali', 'chahirjbali@gmail.com', '2175538714', 'hellooooooo');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id`, `titre`, `description`, `image`, `prix`) VALUES
(1, 'Awesome checkbox', 'google play cards 5$-100$', '534031cc82d6468f14b14ba147c06974.png', 52),
(2, 'Awesome checkbox', 'google play cards 5$-100$', '290a77af8155c62ae04e4f65cfd2295e.jpg', 52);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `heure` varchar(100) NOT NULL,
  `drone` varchar(50) NOT NULL,
  `nbrp` int(200) NOT NULL,
  `nbrt` int(200) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `tel`, `email`, `date`, `heure`, `drone`, `nbrp`, `nbrt`, `type`) VALUES
(1, 'chahir', '12523', 'chahirjbali@gmail.com', '2019-02-01', '1', 'AM', 2, 4, 'SpÃ©cial');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'sinda', 'sinda', '2'),
(2, 'amine', '123', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
