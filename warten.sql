-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 06 mai 2017 à 16:10
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `warten`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `reseaux` int(11) NOT NULL,
  `APIurl` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `texte_fr` varchar(800) NOT NULL,
  `texte_en` varchar(800) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte_fr`, `texte_en`, `image`) VALUES
(1, 'Titre d\'article', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'ENGLISH Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'url'),
(2, 'Titre article', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'English Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'url');

-- --------------------------------------------------------

--
-- Structure de la table `biographie`
--

CREATE TABLE `biographie` (
  `id` int(11) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `texte_fr` varchar(2000) NOT NULL,
  `texte_en` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biographie`
--

INSERT INTO `biographie` (`id`, `titre`, `texte_fr`, `texte_en`) VALUES
(1, 'Biographie', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.');

-- --------------------------------------------------------

--
-- Structure de la table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `libelle` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `joursemaine`
--

CREATE TABLE `joursemaine` (
  `id` int(11) NOT NULL,
  `jour` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` int(11) NOT NULL,
  `libellé` varchar(25) NOT NULL,
  `libcourt` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`id`, `libellé`, `libcourt`) VALUES
(1, 'Francais', 'fr'),
(2, 'Anglais', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `main_settings`
--

CREATE TABLE `main_settings` (
  `id` int(11) NOT NULL,
  `langues` int(11) NOT NULL,
  `color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `twitch` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `libelle_fr` varchar(500) NOT NULL,
  `libelle_en` varchar(500) NOT NULL,
  `lien` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `libelle_fr`, `libelle_en`, `lien`) VALUES
(1, 'Accueil', 'Home', '#Accueil'),
(2, 'Nouveautés', 'News', '#Nouveaute'),
(3, 'Live', 'Live', 'Lien'),
(4, 'Sponsors', 'Sponsors', 'Lien'),
(5, 'Á propos', 'About', 'Lien');

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE `planning` (
  `id` int(11) NOT NULL,
  `datedebutplanning` date NOT NULL,
  `datefinplanning` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `texte_fr` varchar(500) NOT NULL,
  `texte_en` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id`, `titre`, `texte_fr`, `texte_en`, `image`) VALUES
(1, 'Prestation 1', 'Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, ', 'Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, ', 'url');

-- --------------------------------------------------------

--
-- Structure de la table `rel_planning_joursemaine`
--

CREATE TABLE `rel_planning_joursemaine` (
  `id` int(11) NOT NULL,
  `jour` int(11) NOT NULL,
  `live` int(11) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `libelle_fr` varchar(50) NOT NULL,
  `libelle_en` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reseauxsociaux`
--

CREATE TABLE `reseauxsociaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `url` varchar(500) NOT NULL,
  `API` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reseauxsociaux`
--

INSERT INTO `reseauxsociaux` (`id`, `nom`, `url`, `API`) VALUES
(1, 'Facebook', 'https://www.facebook.com/WarteNVincent?fref=ts', ''),
(2, 'Twitter', 'https://twitter.com/W4RTEN', ''),
(3, 'Youtube', 'https://www.youtube.com/channel/UCxLI4j-u9eHCOfNZAydlviA/', ''),
(4, 'Twitch', 'https://www.twitch.tv/warten_rog', ''),
(5, 'Instagram', 'https://www.instagram.com/warten_officiel/', '');

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `url` varchar(500) NOT NULL,
  `image` varchar(80) NOT NULL,
  `texte_fr` varchar(1000) NOT NULL,
  `texte_en` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sponsor`
--

INSERT INTO `sponsor` (`id`, `nom`, `url`, `image`, `texte_fr`, `texte_en`) VALUES
(1, 'Ergotron', 'http://www.ergotron.com/en-us/', 'ergotron', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(2, 'Kingouin', 'https://www.kinguin.net/fr/?r=8766&utm_source=partner&utm_medium=wartenrog&utm_content=twitch&utm_campaign=wartenrog', 'kingouin', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(3, 'Gunnar', 'https://shop.gunnars.fr/fra?acc=d2ddea18f00665ce8623e36bd4e3c7c5&___store=fra', 'gunnar', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(4, 'YouPass', 'https://www.youpass.com/#s=SS7999764', 'youpass', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(5, 'SoundBlaster', 'http://www.soundblaster.com/', 'soundblaster', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(6, 'BeQuiet', 'http://www.bequiet.com/fr/', 'bequiet', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(7, 'corsair', 'corsair', 'corsair', 's', 's'),
(8, 'creative', 'creative', 'creative', 'd', 'd'),
(9, 'viewsonic', 'viewsonic', 'viewsonic', 's', 's'),
(10, 'ldlc', 'ldlc', 'ldlc', 'x', 'x'),
(11, 'newjabes', 'newjabes', 'newjabes', 's', 's');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reseaux` (`reseaux`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `joursemaine`
--
ALTER TABLE `joursemaine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `main_settings`
--
ALTER TABLE `main_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `langues` (`langues`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade` (`grade`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rel_planning_joursemaine`
--
ALTER TABLE `rel_planning_joursemaine`
  ADD PRIMARY KEY (`id`,`jour`,`live`),
  ADD KEY `rel_planning_joursemaine_ibfk_1` (`jour`),
  ADD KEY `live` (`live`);

--
-- Index pour la table `reseauxsociaux`
--
ALTER TABLE `reseauxsociaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`reseaux`) REFERENCES `reseauxsociaux` (`id`);

--
-- Contraintes pour la table `main_settings`
--
ALTER TABLE `main_settings`
  ADD CONSTRAINT `main_settings_ibfk_1` FOREIGN KEY (`langues`) REFERENCES `langues` (`id`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `membre_ibfk_1` FOREIGN KEY (`id`) REFERENCES `grade` (`id`);

--
-- Contraintes pour la table `rel_planning_joursemaine`
--
ALTER TABLE `rel_planning_joursemaine`
  ADD CONSTRAINT `rel_planning_joursemaine_ibfk_1` FOREIGN KEY (`jour`) REFERENCES `joursemaine` (`id`),
  ADD CONSTRAINT `rel_planning_joursemaine_ibfk_2` FOREIGN KEY (`live`) REFERENCES `planning` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
