-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 30 Mai 2017 à 09:17
-- Version du serveur: 5.5.55-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `arctrek`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` mediumtext NOT NULL,
  `date_creation` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `categorie_id` bigint(20) NOT NULL,
  `utilisateur_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_article_categorie1_idx` (`categorie_id`),
  KEY `fk_article_utilisateur1_idx` (`utilisateur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `date_creation`, `image`, `categorie_id`, `utilisateur_id`) VALUES
(9, 'EXPOSITION ANTARTICA, À LYON JUSQU’À LA FIN DE L’ANNÉE\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at augue eu leo fringilla tincidunt nec in elit. Pellentesque quis purus a risus fermentum pretium. Etiam et fermentum neque. Nam finibus tristique nisl, eget scelerisque sem malesuada quis. Suspendisse potenti. Ut gravida lacinia urna, feugiat ornare sapien imperdiet ut. Ut ac felis eget eros fringilla congue. Etiam pharetra diam eu lorem euismod, ut ullamcorper est tristique.\r\n\r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\nMauris nec elit eu justo pretium commodo non in sem. Ut posuere ex ut accumsan egestas. Sed varius cursus arcu at placerat. Mauris non sapien metus. Sed consectetur semper nibh, non scelerisque tortor sagittis sed. Donec euismod nisl et condimentum iaculis. Integer leo lorem, porta eu velit id, commodo egestas orci. Cras sit amet hendrerit elit, faucibus auctor elit.\r\n\r\n', '2017-05-29 14:57:31', '/actus/expo.jpg', 1, 5),
(10, 'QAASUITSUP, PLUS GRANDE COMMUNE DU MONDE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at augue eu leo fringilla tincidunt nec in elit. Pellentesque quis purus a risus fermentum pretium. Etiam et fermentum neque. Nam finibus tristique nisl, eget scelerisque sem malesuada quis. Suspendisse potenti. Ut gravida lacinia urna, feugiat ornare sapien imperdiet ut. Ut ac felis eget eros fringilla congue. Etiam pharetra diam eu lorem euismod, ut ullamcorper est tristique.\r\n\r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\nMauris nec elit eu justo pretium commodo non in sem. Ut posuere ex ut accumsan egestas. Sed varius cursus arcu at placerat. Mauris non sapien metus. Sed consectetur semper nibh, non scelerisque tortor sagittis sed. Donec euismod nisl et condimentum iaculis. Integer leo lorem, porta eu velit id, commodo egestas orci. Cras sit amet hendrerit elit, faucibus auctor elit.\r\n\r\n', '2017-05-29 14:57:31', '/actus/actu1.jpg', 1, 5),
(11, 'Laissez-moi vous conter l''Islande des hautes terres', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at augue eu leo fringilla tincidunt nec in elit. Pellentesque quis purus a risus fermentum pretium. Etiam et fermentum neque. Nam finibus tristique nisl, eget scelerisque sem malesuada quis. Suspendisse potenti. Ut gravida lacinia urna, feugiat ornare sapien imperdiet ut. Ut ac felis eget eros fringilla congue. Etiam pharetra diam eu lorem euismod, ut ullamcorper est tristique.\r\n\r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\nMauris nec elit eu justo pretium commodo non in sem. Ut posuere ex ut accumsan egestas. Sed varius cursus arcu at placerat. Mauris non sapien metus. Sed consectetur semper nibh, non scelerisque tortor sagittis sed. Donec euismod nisl et condimentum iaculis. Integer leo lorem, porta eu velit id, commodo egestas orci. Cras sit amet hendrerit elit, faucibus auctor elit.\r\n\r\n', '2017-05-29 14:59:13', '/recits/terre-hautes.jpg', 2, 6),
(12, 'Roadtrip en Islande', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at augue eu leo fringilla tincidunt nec in elit. Pellentesque quis purus a risus fermentum pretium. Etiam et fermentum neque. Nam finibus tristique nisl, eget scelerisque sem malesuada quis. Suspendisse potenti. Ut gravida lacinia urna, feugiat ornare sapien imperdiet ut. Ut ac felis eget eros fringilla congue. Etiam pharetra diam eu lorem euismod, ut ullamcorper est tristique.\r\n\r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\nMauris nec elit eu justo pretium commodo non in sem. Ut posuere ex ut accumsan egestas. Sed varius cursus arcu at placerat. Mauris non sapien metus. Sed consectetur semper nibh, non scelerisque tortor sagittis sed. Donec euismod nisl et condimentum iaculis. Integer leo lorem, porta eu velit id, commodo egestas orci. Cras sit amet hendrerit elit, faucibus auctor elit.\r\n\r\n', '2017-05-29 14:59:13', '/recits/roadtrip.jpg', 2, 7);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'actualite'),
(2, 'recit');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) NOT NULL,
  `contenu` varchar(45) NOT NULL,
  `date_creation` datetime NOT NULL,
  `sejour_id` bigint(20) NOT NULL,
  `utilisateur_id` bigint(20) NOT NULL,
  `commentaire_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_commentaire_sejour1_idx` (`sejour_id`),
  KEY `fk_commentaire_utilisateur1_idx` (`utilisateur_id`),
  KEY `fk_commentaire_commentaire1_idx` (`commentaire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `date_depart`
--

CREATE TABLE IF NOT EXISTS `date_depart` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `depart` date NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `place` int(11) NOT NULL,
  `sejour_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_date_depart_sejour1_idx` (`sejour_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `date_depart`
--

INSERT INTO `date_depart` (`id`, `depart`, `prix`, `place`, `sejour_id`) VALUES
(9, '2017-06-05', 1890, 25, 26),
(10, '2017-06-12', 1000, 25, 27),
(11, '2017-06-19', 2670, 25, 28),
(12, '2017-06-19', 2800, 25, 29),
(13, '2017-06-26', 2500, 25, 30),
(14, '2017-07-03', 3200, 25, 31),
(15, '2017-07-10', 4500, 25, 32),
(16, '2017-07-17', 3800, 25, 33),
(17, '2017-08-07', 2400, 25, 34),
(18, '2017-08-21', 1990, 25, 35),
(19, '2017-09-11', 3000, 25, 36);

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE IF NOT EXISTS `destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `destination`
--

INSERT INTO `destination` (`id`, `libelle`, `image`) VALUES
(1, 'Islande', '/destinations/islande.jpg'),
(2, 'Norvège', '/destinations/norvege.jpg'),
(3, 'Canada', '/destinations/canada.jpg'),
(4, 'Groenland', '/destinations/groenland.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `date_depart_id` bigint(20) NOT NULL,
  `utilisateur_id` bigint(20) NOT NULL,
  `nb_personnes` int(11) NOT NULL,
  PRIMARY KEY (`date_depart_id`,`utilisateur_id`),
  KEY `fk_date_depart_has_utilisateur_utilisateur1_idx` (`utilisateur_id`),
  KEY `fk_date_depart_has_utilisateur_date_depart1_idx` (`date_depart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sejour`
--

CREATE TABLE IF NOT EXISTS `sejour` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` mediumtext NOT NULL,
  `difficulte` int(11) NOT NULL,
  `duree_sejour` int(11) NOT NULL,
  `prix` double NOT NULL,
  `itinéraire` mediumtext NOT NULL,
  `equipement` mediumtext,
  `formalite` mediumtext,
  `sante` mediumtext,
  `climat` mediumtext,
  `image` varchar(255) NOT NULL,
  `destination_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sejour_destination_idx` (`destination_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `sejour`
--

INSERT INTO `sejour` (`id`, `titre`, `contenu`, `difficulte`, `duree_sejour`, `prix`, `itinéraire`, `equipement`, `formalite`, `sante`, `climat`, `image`, `destination_id`) VALUES
(26, 'Boucle Islandaise', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.', 2, 12, 2500, 'Jour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/ice2.jpg', 1),
(27, 'Terre de feu', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\n', 3, 15, 3200, 'Jour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 13 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 14 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 15 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/ice3.jpg', 1),
(28, 'À la découverte de l''âme Islandaise', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\n', 1, 8, 1890, '\r\n\r\nJour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/ice1.jpg', 1),
(29, 'Contemplation Islandaise', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\n', 1, 21, 4500, 'Jour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/sejours/contemplation.jpg', 1),
(30, 'Traqueurs d''aurores', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\n', 2, 18, 3800, 'Jour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/sejours/contemplation.jpg', 1),
(31, 'Les îles lofoten', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\n', 2, 10, 2400, 'Jour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/ice1.jpg', 2),
(32, 'Terre de glace', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\n', 3, 8, 1990, 'Jour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/sejours/terredeglace.jpg', 2),
(33, 'Fjords et merveilles des parcs nationaux', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\n', 1, 17, 3000, 'Jour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/sejours/fjords.jpg', 2),
(34, 'Immersion nature', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.\r\n\r\n', 1, 5, 1000, '\r\nJour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/sejours/immersion-nature.jpg', 3),
(35, 'Escapade au Québec', 'Cras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.\r\n\r\nCurabitur purus nulla, efficitur ut eleifend id, euismod nec magna. Suspendisse eu ipsum quis enim bibendum consequat nec ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor ultricies nunc, sit amet malesuada elit finibus sed. Integer in diam sed magna interdum vehicula. Maecenas vitae elit mauris. Ut non purus lacus. Sed laoreet ullamcorper augue sed rutrum. Nunc gravida purus ut mauris viverra, eget mattis urna pharetra.', 1, 12, 2670, '\r\nJour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/sejours/canada-sej2.jpg', 3),
(36, 'Route des iceberg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at augue eu leo fringilla tincidunt nec in elit. Pellentesque quis purus a risus fermentum pretium. Etiam et fermentum neque. Nam finibus tristique nisl, eget scelerisque sem malesuada quis. Suspendisse potenti. Ut gravida lacinia urna, feugiat ornare sapien imperdiet ut. Ut ac felis eget eros fringilla congue. Etiam pharetra diam eu lorem euismod, ut ullamcorper est tristique.\r\n\r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. Morbi eleifend erat in leo lacinia interdum. Quisque rutrum ante est, non consequat velit dictum luctus. Aliquam mattis ullamcorper tortor sed venenatis. Aenean in felis fringilla, tempor odio auctor, sagittis neque. Proin non lorem eget neque aliquam volutpat. Aliquam dignissim nisl non suscipit euismod. Praesent aliquam venenatis volutpat. Cras a maximus nisl.\r\n\r\nAliquam malesuada placerat diam eget luctus. In a efficitur dolor. Mauris aliquam ultricies elit. Phasellus quis imperdiet eros, in lobortis sapien. Pellentesque viverra, lacus non varius placerat, neque metus aliquet magna, vel dictum turpis massa quis augue. Duis accumsan congue risus, sit amet facilisis justo. Curabitur hendrerit enim in sapien porttitor semper ut sed sapien. Nulla facilisis pulvinar odio sit amet porttitor. Cras convallis interdum risus ut iaculis. Etiam pharetra laoreet maximus. Ut varius leo ut viverra viverra.', 3, 7, 2800, '\r\nJour 1 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 2 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 3 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 4 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 5 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 6 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 7 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit. \r\nJour 8 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 9 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 10 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 11 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.\r\nJour 12 : \r\nCras dapibus lacinia ligula, ac efficitur nisi hendrerit id. Etiam quis ultrices enim, a laoreet velit.', NULL, NULL, NULL, NULL, '/sejours/routedesiceberg.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` int(11) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `code_postale` int(5) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `telephone`, `adresse`, `ville`, `code_postale`, `mail`, `mdp`, `admin`) VALUES
(5, 'BOODHOO', 'Déborah', NULL, NULL, NULL, NULL, 'deborah.boodhoo@gmail.com', '51977f38bb3afdf634dd8162c7a33691', 1),
(6, 'DURAS', 'Marguerite', NULL, NULL, NULL, NULL, 'marguerite.duras@gmail.com', '95f2e9256583a44459fe634d0f52d5e5', 0),
(7, 'DUPONT', 'Sebastien', NULL, NULL, NULL, NULL, 'sebastien.dupont@gmail.com', '91ab7b369d48cd0eba34a1b6f417e31d', 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_categorie1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_article_utilisateur1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_commentaire_sejour1` FOREIGN KEY (`sejour_id`) REFERENCES `sejour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commentaire_utilisateur1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commentaire_commentaire1` FOREIGN KEY (`commentaire_id`) REFERENCES `commentaire` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `date_depart`
--
ALTER TABLE `date_depart`
  ADD CONSTRAINT `fk_date_depart_sejour1` FOREIGN KEY (`sejour_id`) REFERENCES `sejour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_date_depart_has_utilisateur_date_depart1` FOREIGN KEY (`date_depart_id`) REFERENCES `date_depart` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_date_depart_has_utilisateur_utilisateur1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sejour`
--
ALTER TABLE `sejour`
  ADD CONSTRAINT `fk_sejour_destination` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
