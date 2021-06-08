--
-- Base de données : `kira_spa`
--

DROP DATABASE IF EXISTS `kira_spa`;
CREATE DATABASE IF NOT EXISTS `kira_spa`;
USE `kira_spa`;

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `race` varchar(255) NOT NULL,
  `compatibleChat` tinyint(1) DEFAULT NULL,
  `compatibleChien` tinyint(1) DEFAULT NULL,
  `compatibleEnfants` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `id_categorie`, `nom`, `couleur`, `age`, `race`, `compatibleChat`, `compatibleChien`, `compatibleEnfants`) VALUES
(1, 1, 'Minou', 'gris', 3, 'Siamois', 1, 1, 0),
(2, 1, 'Akira', 'noir & blanc', 4, 'Européen', 1, 1, 1),
(3, 2, 'Pepper', 'marron', 5, 'Chihuahua', 0, 0, 0),
(4, 2, 'Louna', 'fauve charbonnée', 9, 'Berger de Shetland', 1, 1, 1),
(5, 4, 'Filou', 'marron et jaune', 3, 'Python', null, null, null),
(6, 4, 'Michou', 'vert clair', 4, 'Couleuvre', null, null, null),
(7, 4, 'Bella', 'taupe', 5, 'Vipère', null, null, null);


-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Chat'),
(2, 'Chien'),
(3, 'Poisson'),
(4, 'Reptile');