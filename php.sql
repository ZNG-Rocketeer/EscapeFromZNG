-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 16 Mai 2018 à 17:49
-- Version du serveur :  10.1.23-MariaDB-9+deb9u1
-- Version de PHP :  7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `php`
--

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `Admin Classement`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `Admin Classement` (
);

-- --------------------------------------------------------

--
-- Structure de la table `CommuEni`
--

CREATE TABLE `CommuEni` (
  `id` int(11) NOT NULL,
  `idEni` int(11) NOT NULL,
  `tags` tinytext,
  `Question` text NOT NULL,
  `rep` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `CommuEni`
--

INSERT INTO `CommuEni` (`id`, `idEni`, `tags`, `Question`, `rep`) VALUES
(14, 1, 'Createur;', 'Enigme mot secret', 'Un mot assez chiant'),
(13, 2, 'Createur', 'Lien secret', 'chut;secret'),
(12, 3, 'Createur', 'Picross', 'beau;dessin'),
(14, 4, 'Createur', 'Label', '21732'),
(12, 5, 'Createur', 'effacemoi', 'twitterfacebookzangaesport'),
(12, 6, 'Createur', 'souricière', 'fromage'),
(14, 10, 'Communauté', 'Qu\'est ce qui est jaune et qui attend ?', 'Jonathan');

-- --------------------------------------------------------

--
-- Structure de la table `NomsEni`
--

CREATE TABLE `NomsEni` (
  `idEni` int(11) NOT NULL,
  `Noms` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `NomsEni`
--

INSERT INTO `NomsEni` (`idEni`, `Noms`) VALUES
(1, 'Xzcrlyp'),
(2, 'Zaspwtp'),
(3, 'Fcmlty'),
(4, ' Wfnld'),
(5, 'Tgly'),
(6, 'Yleslwtp');

-- --------------------------------------------------------

--
-- Structure de la table `PostEni`
--

CREATE TABLE `PostEni` (
  `id` int(11) NOT NULL,
  `FichierJS` blob NOT NULL,
  `FichierPHP` blob NOT NULL,
  `FichierHTML` blob NOT NULL,
  `Commentaire` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ResEni`
--

CREATE TABLE `ResEni` (
  `id` int(11) NOT NULL,
  `idEni` int(11) NOT NULL,
  `temps` int(11) NOT NULL COMMENT 'en secondes',
  `note` enum('0','1','2','3','4','5','6','7','8','9','10') DEFAULT NULL COMMENT 'entre 0 et 10 compris'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `ResEni`
--

INSERT INTO `ResEni` (`id`, `idEni`, `temps`, `note`) VALUES
(12, 1, 5, NULL),
(14, 1, 5, NULL),
(25, 1, 0, NULL),
(12, 2, 2, NULL),
(14, 2, 0, NULL),
(25, 2, 2, NULL),
(12, 4, 53, NULL),
(14, 4, 5, NULL),
(25, 4, 0, NULL),
(12, 5, 0, NULL),
(14, 5, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `zng_user`
--

CREATE TABLE `zng_user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `genre` enum('M','Mme') NOT NULL,
  `nom` varchar(35) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_insc` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_naiss` date NOT NULL DEFAULT '1000-00-01',
  `ip` varchar(15) NOT NULL COMMENT 'Table ip ban'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `zng_user`
--

INSERT INTO `zng_user` (`id`, `pseudo`, `pass`, `genre`, `nom`, `prenom`, `email`, `date_insc`, `date_naiss`, `ip`) VALUES
(12, 'lce987', '87307f8dd34e8bf71be4acfb6f62d428', 'M', 'LE CORNEC', 'Erwan', 'lce987@live.fr', '2018-04-28 17:28:32', '1998-10-12', '192.168.0.30'),
(13, 'riosti', 'b291c61679463195f2f610b1d30b16c9', 'M', 'ZIZI', 'POILU', 'cami_b69@hotmail.fr', '2018-04-28 17:41:24', '0000-00-00', ''),
(14, 'HartFlash', 'bbecec051fd6f47c07b25b32d53ffaf9', 'M', 'POULAT', 'Robin', 'zxhartmann@gmail.com', '2018-04-30 15:14:42', '1996-10-26', '78.228.139.144'),
(15, 'pseudotest', '1f28e49f34e2406fdb6d6158eebd793b', 'M', 'test', 'test', 'sgnls@sg.gr', '2018-05-11 16:48:27', '2018-05-08', '192.168.0.14'),
(25, 'bobleponge', '128ecf542a35ac5270a87dc740918404', 'M', 'L\'eponge', 'Bob', 'clashk304@gmail.com', '2018-05-16 15:13:47', '1998-11-28', '77.154.204.133');

-- --------------------------------------------------------

--
-- Structure de la vue `Admin Classement`
--
DROP TABLE IF EXISTS `Admin Classement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`php`@`localhost` SQL SECURITY DEFINER VIEW `Admin Classement`  AS  select `zng_user`.`id` AS `id`,`zng_user`.`pseudo` AS `pseudo`,`ComAns`.`idEni` AS `idEni`,`ComAns`.`temps` AS `temps` from (`zng_user` join `ComAns`) where (`zng_user`.`id` = `ComAns`.`id`) ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `CommuEni`
--
ALTER TABLE `CommuEni`
  ADD PRIMARY KEY (`idEni`),
  ADD KEY `eni_id` (`id`);

--
-- Index pour la table `NomsEni`
--
ALTER TABLE `NomsEni`
  ADD PRIMARY KEY (`idEni`);

--
-- Index pour la table `PostEni`
--
ALTER TABLE `PostEni`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ResEni`
--
ALTER TABLE `ResEni`
  ADD PRIMARY KEY (`idEni`,`id`),
  ADD KEY `reseni_id` (`id`);

--
-- Index pour la table `zng_user`
--
ALTER TABLE `zng_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `CommuEni`
--
ALTER TABLE `CommuEni`
  MODIFY `idEni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `zng_user`
--
ALTER TABLE `zng_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `CommuEni`
--
ALTER TABLE `CommuEni`
  ADD CONSTRAINT `eni_id` FOREIGN KEY (`id`) REFERENCES `zng_user` (`id`);

--
-- Contraintes pour la table `NomsEni`
--
ALTER TABLE `NomsEni`
  ADD CONSTRAINT `,oms_eni` FOREIGN KEY (`idEni`) REFERENCES `CommuEni` (`idEni`);

--
-- Contraintes pour la table `PostEni`
--
ALTER TABLE `PostEni`
  ADD CONSTRAINT `post_id` FOREIGN KEY (`id`) REFERENCES `zng_user` (`id`);

--
-- Contraintes pour la table `ResEni`
--
ALTER TABLE `ResEni`
  ADD CONSTRAINT `reseni_id` FOREIGN KEY (`id`) REFERENCES `zng_user` (`id`),
  ADD CONSTRAINT `reseni_ideni` FOREIGN KEY (`idEni`) REFERENCES `CommuEni` (`idEni`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
