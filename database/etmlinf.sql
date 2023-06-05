-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 05 juin 2023 à 12:18
-- Version du serveur :  5.7.11
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etmlinf`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_account`
--

CREATE TABLE `t_account` (
  `acc_id` int(11) NOT NULL,
  `acc_username` varchar(30) NOT NULL,
  `acc_firstname` varchar(50) NOT NULL,
  `acc_lastname` varchar(50) NOT NULL,
  `acc_password` text NOT NULL,
  `acc_basket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_account`
--

INSERT INTO `t_account` (`acc_id`, `acc_username`, `acc_firstname`, `acc_lastname`, `acc_password`, `acc_basket`) VALUES
(2, 'root', 'rootfname', 'rootname', 'root', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_basket`
--

CREATE TABLE `t_basket` (
  `bas_id` int(11) NOT NULL,
  `bas_created` date NOT NULL,
  `bas_upated` date NOT NULL,
  `bas_elements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_basket`
--

INSERT INTO `t_basket` (`bas_id`, `bas_created`, `bas_upated`, `bas_elements`) VALUES
(1, '2023-06-05', '2023-06-05', '1,2,3,4');

-- --------------------------------------------------------

--
-- Structure de la table `t_product`
--

CREATE TABLE `t_product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_product`
--

INSERT INTO `t_product` (`pro_id`, `pro_name`, `pro_description`, `pro_price`) VALUES
(1, 'Savon', 'Pour le T', 14.5),
(2, 'Shampoing', 'Pour enlever tah le gras', 12.5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_account`
--
ALTER TABLE `t_account`
  ADD PRIMARY KEY (`acc_id`),
  ADD KEY `fk_bas_id` (`acc_basket`);

--
-- Index pour la table `t_basket`
--
ALTER TABLE `t_basket`
  ADD PRIMARY KEY (`bas_id`);

--
-- Index pour la table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_account`
--
ALTER TABLE `t_account`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `t_basket`
--
ALTER TABLE `t_basket`
  MODIFY `bas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `t_product`
--
ALTER TABLE `t_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_account`
--
ALTER TABLE `t_account`
  ADD CONSTRAINT `fk_bas_id` FOREIGN KEY (`acc_basket`) REFERENCES `t_basket` (`bas_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
