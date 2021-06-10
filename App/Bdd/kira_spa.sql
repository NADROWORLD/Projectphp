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
  `description` text NOT NULL,
  `compatibleChat` tinyint(1) DEFAULT NULL,
  `compatibleChien` tinyint(1) DEFAULT NULL,
  `compatibleEnfants` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `id_categorie`, `nom`, `couleur`, `age`, `race`, `description`, `compatibleChat`, `compatibleChien`, `compatibleEnfants`) VALUES
(1, 1, 'Minou', 'gris', 3, 'Siamois', 'Très gentil chat, trouvé dans la rue à Bordeaux. Il lui manque une oreille, mais sa gentillesse compense !', 1, 1, 0),
(2, 1, 'Akira', 'noir & blanc', 4, 'Européen', 'Akira est très joueur, très jeune dans sa tête, il fera le bonheur de la famille !', 1, 1, 1),
(3, 2, 'Pepper', 'marron', 5, 'Chihuahua', 'Pepper est un petit chien difficile, mais il donnera tout son amour à l''humain qui lui donnera une chance !', 0, 0, 0),
(4, 2, 'Louna', 'fauve charbonnée', 9, 'Berger de Shetland', 'Comme tous les shetland, Louna est très sensible, mais très douce et pleine d''amour.', 1, 1, 1),
(5, 3, 'Dory', 'bleue et jaune', 3, 'Chirurgien bleu', 'Dory est un petit poisson pas du tout peureux, qui osera venir vous toucher le bout du doigt si vous le plongez dans son bocal !', null, null, null),
(6, 4, 'Filou', 'marron et jaune', 3, 'Python', 'Très beau Python, Filou n''a jamais montré le moindre signe d''agressivité. Il est très doux.', null, null, null),
(7, 4, 'Michou', 'vert clair', 4, 'Couleuvre', 'Michou est un serpent qui aime bouger et voir ce que vous faites tout le temps. Il aime se poser sur vos épaules et vous accompagner toute la journée.', null, null, null),
(8, 4, 'Bella', 'taupe', 5, 'Vipère', 'Bella est une vipère magnifique mais très sensible, qui aura du mal au début avec l''extérieur.', null, null, null);

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

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `mail`, `password`) VALUES 
(1, 'test', 'test', 'test@test.com', '$2y$12$Jwdgr8ejHjsKUFrsQ4XVe.jbx9bxBPwnL7A4H1uUWfG7dwysjcBGu');