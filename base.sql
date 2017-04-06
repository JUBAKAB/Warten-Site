-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- GÃ©nÃ©rÃ© le :  Jeu 06 Avril 2017 Ã  18:05
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de donnÃ©es :  `warten`
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
-- Contenu de la table `articles`
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
-- Contenu de la table `biographie`
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
  `libellÃ©` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `langues`
--

INSERT INTO `langues` (`id`, `libellÃ©`) VALUES
(1, 'Francais'),
(2, 'Anglais');

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
-- Contenu de la table `reseauxsociaux`
--

INSERT INTO `reseauxsociaux` (`id`, `nom`, `url`, `API`) VALUES
(1, 'Facebook', 'https://www.facebook.com/VincentWarten/', ''),
(2, 'Twitter', 'https://twitter.com/W4RTEN', ''),
(3, 'Youtube', 'https://www.youtube.com/channel/UCxLI4j-u9eHCOfNZAydlviA/', ''),
(4, 'Twitch', 'https://www.twitch.tv/warten_rog', ''),
(5, 'Google+', 'https://plus.google.com/+InFamouSWarteNROG', '');

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
-- Contenu de la table `sponsor`
--

INSERT INTO `sponsor` (`id`, `nom`, `url`, `image`, `texte_fr`, `texte_en`) VALUES
(1, 'Ergotron', 'http://www.ergotron.com/en-us/', 'url', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(2, 'Kingouin', 'https://www.kinguin.net/fr/?r=8766&utm_source=partner&utm_medium=wartenrog&utm_content=twitch&utm_campaign=wartenrog', 'url', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(3, 'Gunnar', 'https://shop.gunnars.fr/fra?acc=d2ddea18f00665ce8623e36bd4e3c7c5&___store=fra', 'url', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(4, 'YouPass', 'https://www.youpass.com/#s=SS7999764', 'url', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(5, 'SoundBlaster', 'http://www.soundblaster.com/', 'url', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.'),
(6, 'BeQuiet', 'http://www.bequiet.com/fr/', 'url', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.');

--
-- Index pour les tables exportÃ©es
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
-- Contraintes pour les tables exportÃ©es
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
