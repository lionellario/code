-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2014 at 03:21 PM
-- Server version: 5.5.32-cll-lve
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `groupenz_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `NOM_UTILISATEUR` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `MOT_DE_PASSE` varchar(255) NOT NULL,
  `GENRE` varchar(355) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`NOM`, `PRENOM`, `NOM_UTILISATEUR`, `EMAIL`, `MOT_DE_PASSE`, `GENRE`) VALUES
('ADMIN', 'ADMIN', 'ADMIN', 'administrator@yahoo.fr', '21232f297a57a5a743894a0e4a801fc3', 'Homme'),
('CONSTANT', 'LCP', 'LCP', 'lcpconstant@yahoo.fr', '617ac08757d38a5a7ed91c224f0e90a0', 'HOMME');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` smallint(6) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `PROFESSION` varchar(255) NOT NULL,
  `VILLE` varchar(255) NOT NULL,
  `QUARTIER` varchar(255) NOT NULL,
  `CONTACT` varchar(255) NOT NULL,
  `TYPE_DE_COM` varchar(255) NOT NULL,
  `QUANTITE` int(255) NOT NULL,
  `SPECIFICATION` varchar(255) NOT NULL,
  `ETAT` varchar(255) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `TIME` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`ID`, `NOM`, `PRENOM`, `PROFESSION`, `VILLE`, `QUARTIER`, `CONTACT`, `TYPE_DE_COM`, `QUANTITE`, `SPECIFICATION`, `ETAT`, `DATE`, `TIME`) VALUES
(13, 'CHRISTIAN', 'NZENTEM', 'etudiant', 'YAOUNDE', 'MESSASSI', '74923989', 'carte de visite', 10, 'PVC', 'NON_VU', '25/10/2013', '19:10:58'),
(14, 'Fotso', 'alex', 'commerciale', 'yaounde', 'emana', '96 13 85 88', 'carte de visite', 20, 'PVC', 'NON_VU', '26/10/2013', '06:10:21'),
(15, 'nzet', 'christ', 'chef', 'douala', 'bonapriso', '96345570', 'carton_dinnvit', 200, 'bapteme ou communion', 'NON_VU', '28/10/2013', '15:10:40'),
(16, 'lionel', 'lario', 'docteur', 'Nantes', '', '+33685126547', 'carnet de consultation', 200, 'carnet de consultation classique', 'NON_VU', '15/02/2014', '09:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `Personnalite` varchar(255) NOT NULL,
  `Tel` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Personnalite`, `Tel`, `Email`, `ID`, `Nom`) VALUES
('Webmastre', 74937469, 'constantpagoui@yahoo,fr', 7, 'LCP'),
('Webmastre', 74937469, 'constantpagoui@yahoo,fr', 11, 'LCP'),
('Presi', 95478389, 'christiannzente@yahoo.fr', 5, 'Christian'),
('Webmastre', 74937469, 'constantpagoui@yahoo,fr', 6, 'LCP'),
('Presi', 74923989, 'christiannzente@yahoo.fr', 8, 'Christian'),
('DIRECTEUR', 74923989, 'nzentem1@yahoo.fr', 9, 'NZENTEM CHRISTIAN'),
('Webmastre', 74937469, 'constantpagoui@yahoo,fr', 10, 'LCP'),
('Presi', 95478389, 'christiannzente@yahoo.fr', 12, 'Christian');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE IF NOT EXISTS `forum_post` (
  `SENDER` varchar(255) NOT NULL,
  `POST` mediumtext NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `TIME` varchar(255) NOT NULL,
  `OBJECT` varchar(255) NOT NULL,
  `CODE` varchar(2555) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`SENDER`, `POST`, `DATE`, `TIME`, `OBJECT`, `CODE`) VALUES
('', 'premier message, cest juste un test', 'Feb, 25, 2014', '08:58:49 pm', 'Test', 'f4b9aff1b68fd5091f888b76749a72cf'),
('Constant', 'Ce site est une tres bonne initiative, continuez dans cette lancee Groupe Nzentem!', 'Feb, 25, 2014', '09:05:12 pm', 'Appreciation', '98f88d155f9bfca12f06422c90134729');

-- --------------------------------------------------------

--
-- Table structure for table `gestion_de_memoire`
--

CREATE TABLE IF NOT EXISTS `gestion_de_memoire` (
  `NOM` varchar(255) NOT NULL,
  `LU` text NOT NULL,
  `NON_LU` text NOT NULL,
  `MODIFICATIONS` text NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `HEURE` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FICHIER` varchar(255) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `gestion_de_memoire`
--

INSERT INTO `gestion_de_memoire` (`NOM`, `LU`, `NON_LU`, `MODIFICATIONS`, `DATE`, `HEURE`, `ID`, `FICHIER`, `USER_ID`) VALUES
('Constant', '', '', 'Il manque trop de trucs  merdd', 'Sep, 23, 2013', '11:39:13 am', 1, '', 0),
('', 'OUI', 'NON', 'YHBJSZBHJCXB CBBNMCB XJBNZNM XBJKNMCZCZMN M', '24-10-2013', '', 2, '', 0),
('', 'OUI', 'NON', 'YHBJSZBHJCXB CBBNMCB XJBNZNM XBJKNMCZCZMN M', '24-Oct-2013', '', 3, '', 0),
('', 'OUI', 'NON', 'mknmkmrt fgtjkjdfmdf rekkldfnmfd rfkkdffd', '24-Oct-2013', '', 4, '', 0),
('', 'OUI', 'NON', 'bonjour, je ne trouve pas mon travail en ligne. que dois-je faire?', '01-Nov-2013', '', 5, '', 0),
('', 'OUI', 'NON', 'svp verifier le travail', '24-Jan-2014', '', 6, '', 0),
('', 'OUI', 'NON', 'bientot je vouys  envoi ma methodologie.\r\nmerci', '27-Jan-2014', '', 7, '', 0),
('alex', 'OUI', 'NON', '		ilu jhk hjkh hjk jkhjkhl jkh jlhj hjk hhkj. jk kjj 						         ', '28-Feb-2014', '14:51:49', 36, 'vhdl-tutorial', 0),
('', 'OUI', 'NON', 'fotso alex cabrel', '15-Feb-2014', '', 10, '', 0),
('', 'NON', 'OUI', 'est ce que je peut avoir la methodologie?', '26-Feb-2014', '', 11, '', 0),
('', 'NON', 'OUI', 'mon memoire est ou??', '28-Feb-2014', '', 27, '', 0),
('', 'OUI', 'NON', 'hghgkjnhpopito', '27-Feb-2014', '', 22, '', 0),
('alex', 'OUI', 'NON', '	jh  sdfhjhjsdfjnsnnsd  dshjkjksdjk jsdjkjsdjkjksdjkjk sdjjksdkjkjsdjkjk sd kjisdjkkjjksdjksd							         ', '28-Feb-2014', '14:53:05', 37, 'vhdl-tutorial', 0),
('awaying', 'NON', 'OUI', '	modifier je veux le protocole de recherche							         ', '28-Feb-2014', '16:16:59', 38, 'CARNET DE CONSULATATION HOPITAL MOLOUNDOU', 0);

-- --------------------------------------------------------

--
-- Table structure for table `partenaire`
--

CREATE TABLE IF NOT EXISTS `partenaire` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `MOT_DE_PASSE` varchar(255) NOT NULL,
  `AVATAR` varchar(2555) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SECRET_QUESTION` varchar(2555) NOT NULL,
  `ANSWER` varchar(2555) NOT NULL,
  `NBRE_DE_MEMOIRE_EN_CHARGE` int(11) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `partenaire`
--

INSERT INTO `partenaire` (`ID`, `NOM`, `MOT_DE_PASSE`, `AVATAR`, `EMAIL`, `SECRET_QUESTION`, `ANSWER`, `NBRE_DE_MEMOIRE_EN_CHARGE`, `USERNAME`) VALUES
(10, 'nzentem', 'a9879ae278c1ae44ca7c60cc0afaaf08', '', 'nzentem@gmail.com', '', '', 0, 'nzentem'),
(9, 'nzentem', 'a9879ae278c1ae44ca7c60cc0afaaf08', '', 'nzentem@gmail.com', '', '', 0, 'nzentem'),
(8, 'Christian', '5bd40a8524882d75f3083903f2c912fc', '', 'foalex60}@yahoo.fr', '', '', 0, 'partenaire'),
(11, 'nzentem', 'fc770d025678ed23d9753ab7f50c2b01', '', 'nzentem@groupenzentem.com', '', '', 0, 'nzentem'),
(12, 'henriette', '35112f892ca1d11a427bbb756e1effda', '', 'henriette', '', '', 0, 'henriette'),
(13, 'net', 'fc770d025678ed23d9753ab7f50c2b01', '', 'nzet', '', '', 0, 'nzentem'),
(14, 'henriette', '1342dc3c83795a79e9c432a26d350258', '', 'nzentem@gmail.com', '', '', 0, 'henriette'),
(15, 'nzentem', 'fc770d025678ed23d9753ab7f50c2b01', '', 'nzentem1@yahoo.fr', '', '', 0, '74923989'),
(16, 'nzentem christian', 'fc770d025678ed23d9753ab7f50c2b01', '', 'nzentem1@yahoo.fr', '', '', 0, 'nzentem'),
(17, 'nzentem', 'fc770d025678ed23d9753ab7f50c2b01', '', 'nzentem1@yahoo.fr', '', '', 0, 'nzentem'),
(18, 'nzentem', 'fc770d025678ed23d9753ab7f50c2b01', '', 'nzentem1@yahoo.fr', '', '', 0, 'nzentem'),
(19, 'alex', '534b44a19bf18d20b71ecc4eb77c572f', '', 'alex', '', '', 0, 'alex'),
(20, 'nzentem', 'fc770d025678ed23d9753ab7f50c2b01', '', 'nzentem', '', '', 0, 'nzentem'),
(21, 'nzentem', 'fc770d025678ed23d9753ab7f50c2b01', '', 'nzentem1@yahoo.fr', '', '', 0, 'nzentem'),
(22, 'nom', '1a1dc91c907325c69271ddf0c944bc72', '', 'cabrelfotso@yahoo.fr', '', '', 0, 'nomlog'),
(23, 'nzentem', 'e6b280b6693dbccc6c52c51ea10f087d', '', 'nzentem1@yahoo.fr', '', '', 0, 'nzentem');

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE IF NOT EXISTS `pm` (
  `id` bigint(20) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `user1` bigint(20) NOT NULL,
  `user2` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `timestamp` int(10) NOT NULL,
  `user1read` varchar(3) NOT NULL,
  `user2read` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `id2`, `title`, `user1`, `user2`, `message`, `timestamp`, `user1read`, `user2read`) VALUES
(1, 1, 'Trying', 2, 1, 'Ohhh le forum de messages', 1378947301, 'yes', 'yes'),
(2, 1, 'jklkk', 2, 1, 'jkklnjnjnjlnkknlnknkkn,llkk', 1378980405, 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `soins_a_domicile`
--

CREATE TABLE IF NOT EXISTS `soins_a_domicile` (
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `UTILISATEUR` varchar(255) NOT NULL,
  `TEL` varchar(255) NOT NULL,
  `QUARTIER` varchar(255) NOT NULL,
  `VILLE` varchar(255) NOT NULL,
  `GENRE` varchar(255) NOT NULL,
  `BESOIN` text NOT NULL,
  `LU` text NOT NULL,
  `NON_LU` varchar(255) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `TIME` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `soins_a_domicile`
--

INSERT INTO `soins_a_domicile` (`NOM`, `PRENOM`, `UTILISATEUR`, `TEL`, `QUARTIER`, `VILLE`, `GENRE`, `BESOIN`, `LU`, `NON_LU`, `DATE`, `TIME`, `ID`) VALUES
('Lagabka', 'Constant', '', '74937469', 'Emana', '', 'male', 'Infirmier Brevete', 'OUI', 'NON', '', '', 1),
('Fotso', 'Alex', 'Constant', '89438978', 'Emana', 'Yaounde', 'male', 'MÃ©dÃ©cin', '', 'OUI', 'Sep, 23, 2013', '09:44:21 pm', 2),
('Fotso', 'Alex', 'constant', '96138588', 'madelon', 'Baf', 'male', 'MÃ©dÃ©cin', 'OUI', 'NON', 'Sep, 23, 2013', '10:30:56 pm', 3),
('Kamdem', 'Leonel', 'constant', '148753', 'emana', 'yaounde', 'male', 'MÃ©dÃ©cin', 'OUI', 'NON', 'Sep, 23, 2013', '10:31:32 pm', 4),
('Dirk', 'Eric', 'alex', '562632233', 'Sadi', 'Douala', 'female', 'Infirmier DiplomÃ©', 'OUI', 'NON', 'Sep, 24, 2013', '04:09:31 am', 5),
('Sophie', 'Solange', 'alex', '95585896', 'Unite', 'Garoua', 'female', 'Infirmier Brevete', 'OUI', 'NON', 'Sep, 24, 2013', '04:10:51 am', 6),
('Fotso', 'alex', 'constant', '96138588', 'biemqssi', 'yaounde', 'male', 'Infirmier DiplomÃ©', 'OUI', 'NON', 'Sep, 25, 2013', '02:16:41 pm', 7),
('Pagson', 'kanyfils', 'Constant', '4990645', 'Etoudi', 'Ynde', 'male', 'Aide soignante', 'OUI', 'NON', 'Sep, 27, 2013', '01:52:50 am', 8),
('alex', 'dom', 'Constant', 'f', 'd', 'v', 'choisissez:', 'select', 'OUI', 'NON', 'Sep, 28, 2013', '02:18:12 pm', 9),
('alex', 'dom', 'Constant', 'f', 'd', 'v', 'choisissez:', 'select', 'OUI', 'NON', 'Sep, 28, 2013', '02:19:04 pm', 10),
('ghsdhjkjd', 'uhysdfjkl', '', '65678467', 'HYUHDG', 'HKDFGNL', 'Homme', 'Aide soignante', '', 'OUI', 'Oct, 21, 2013', '11:33:08 am', 13),
('Fotso', 'Alex', 'Constant', '96138588', 'Emana', 'yaounde', 'male', 'MÃ©dÃ©cin', 'OUI', 'NON', 'Sep, 30, 2013', '07:17:56 pm', 11),
('Fotso', 'Alex', 'Fotso', '96138588', 'emana', 'Yaounde', 'male', 'Infirmier DiplomÃ©', 'OUI', 'NON', 'Oct, 04, 2013', '09:52:01 am', 12),
('christian', 'nzentem', '', '74923989', 'MESSASSI', 'YAOUNDE', 'Homme', 'MÃ©dÃ©cin', '', 'OUI', 'Oct, 25, 2013', '07:10:57 pm', 14),
('mme touko', 'christelle', '', '97125694', 'Bastos', 'Yde', 'Femme', 'Infirmier DiplomÃ©', '', 'OUI', 'Oct, 29, 2013', '02:40:16 pm', 15);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `parent` smallint(6) NOT NULL,
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` longtext NOT NULL,
  `authorid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `timestamp2` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id2`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `signup_date` varchar(25) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `avatar`, `signup_date`, `genre`, `name`, `id`) VALUES
('Pagson', '534b44a19bf18d20b71ecc4eb77c572f', 'chrisface71@yahoo.com', 'com.GroupeNzentem.view/$avatars/100337.jpg', '0', 'male', 'Kanyfils', 1),
('Fotso', '862752f50fa68ebf41d03f0b00bef0a8', 'cabrelFotso@yahoo.fr', 'Groups-Meeting-Dark-icon.jpg', '0', 'male', 'Alex18', 2),
('fac', '2ec490229423f4a6879d555a81bd6e4a', 'foalex60@yahoo.fr', 'Groups-Meeting-Dark-icon.jpg', '0', 'male', 'fac', 3),
('Mahal', '098f6bcd4621d373cade4e832627b4f6', 'vic_mahal@yahoo.com', 'Groups-Meeting-Dark-icon.jpg', 'Oct, 09, 2013', 'male', 'Victor', 4),
('Mahal', '098f6bcd4621d373cade4e832627b4f6', 'vic_mahal@yahoo.com', 'Groups-Meeting-Dark-icon.jpg', 'Oct, 09, 2013', 'male', 'Victor', 5),
('CRISTAL', '7a10ea1b9b2872da9f375002c44ddfce', 'dianis_cris@yahoo.fr', 'Groups-Meeting-Dark-icon.jpg', 'Oct, 09, 2013', 'FEMALE', 'DIANIS', 6),
('INFO', 'df53ca268240ca76670c8566ee54568a', 'jean_info@yahoo.com', 'Groups-Meeting-Dark-icon.jpg', 'Oct, 09, 2013', 'MALE', 'JEAN', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_vendeur`
--

CREATE TABLE IF NOT EXISTS `user_vendeur` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `CNI` varchar(255) NOT NULL,
  `admail` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `montant` varchar(255) NOT NULL,
  `period_valid` int(255) NOT NULL,
  `debut` varchar(255) NOT NULL,
  `fin` varchar(255) NOT NULL,
  `partenaire` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `user_vendeur`
--

INSERT INTO `user_vendeur` (`id`, `nom`, `prenom`, `phone`, `ville`, `CNI`, `admail`, `login`, `password`, `montant`, `period_valid`, `debut`, `fin`, `partenaire`, `etat`) VALUES
(45, ' hasard', 'hasard', '91870256', 'Douala', '12587469782', 'hasard@co.uk', '2BB2840', '8E0D237', '10000 Fcfa', 60, 'none', 'none', 'ALEX', 'NON_VU'),
(44, ' INGRID', 'YOUMING', '96106122', 'YAOUNDE', '106868364', 'youmingridp@yahoo.fr', '573A6F3', '67FEB53', 'GRATUIT Fcfa', 60, 'none', 'none', 'PARTENAIRE', 'NON_VU'),
(43, ' groupenzentem', 'christ', '74923989', 'yaounde', '10', 'contact@groupenzentem.com', '45DABF8', '6F191B6', '10 Fcfa', 1000, 'none', 'none', 'PARTENAIRE', 'NON_VU'),
(39, ' nzentem', 'christian', '74923989', 'yaounde', '106868364', 'nzentem1@yahoo.fr', '484A031', 'BD3D3E2', '10000 Fcfa', 60, '12/11/2013, 19:23:39', '10/1/2014, 19:23:39', 'CONSTANT', 'NON_VU'),
(40, ' nzentem', 'christian', '74923989', 'yaounde', '106868364', 'nzentem1@yahoo.fr', '26D9454', '9818920', '10000 Fcfa', 60, 'none', 'none', 'CONSTANT', 'NON_VU');

-- --------------------------------------------------------

--
-- Table structure for table `utlisateur`
--

CREATE TABLE IF NOT EXISTS `utlisateur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_UTILISATEUR` varchar(255) NOT NULL,
  `MOT_DE_PASSE` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `FICHIER` varchar(225) NOT NULL,
  `ETAT_WORK` varchar(255) NOT NULL,
  `DATE_M` varchar(255) NOT NULL,
  `PARTENAIRE` varchar(255) NOT NULL,
  `NOM` varchar(2555) NOT NULL,
  `TIME_M` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `utlisateur`
--

INSERT INTO `utlisateur` (`ID`, `NOM_UTILISATEUR`, `MOT_DE_PASSE`, `EMAIL`, `FICHIER`, `ETAT_WORK`, `DATE_M`, `PARTENAIRE`, `NOM`, `TIME_M`) VALUES
(21, 'alex', '534b44a19bf18d20b71ecc4eb77c572f', 'foalex60@yahoo.fr', 'vhdl-tutorial', 'VU', '28 - 02 - 14', '', 'alex', '09:01:55'),
(20, 'domitelle', '2a778c7076b3da4f0f7f2e3c2f3666c9', 'cabrelfotso@yahoo.fr', 'ABET', 'NON_VU', '28 - 02 - 14', '', 'Domitelle', '09:01:01'),
(27, 'cabrel', '8942b07ff95535c9c5c8a8ea17cf48eb', 'cabrelfotso@yahoo.fr', 'TEST 2', 'VU', '28 - 02 - 14', '', 'cabrel', '11:02:03'),
(18, 'awaying', '5b933ca4d79387bf39d9137c0b9ae9e4', 'nzentem1@yahoo.fr', 'MEDODOLOGIEx', 'VU', '03 - 03 - 14', '', 'awaying', '06:01:30'),
(22, 'lario', 'bf531d4ace21a6e06d88435c3088752c', 'foalex60@yahoo.fr', 'EEAE', 'en_cours', '28 - 02 - 14', '', 'lario', '09:01:48'),
(26, 'cindy', 'cc4b2066cfef89f2475de1d4da4b29c7', 'cindy', 'orientationHm', 'VU', '28 - 02 - 14', '', 'cindy', '11:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `vendeur_post`
--

CREATE TABLE IF NOT EXISTS `vendeur_post` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `etiquette` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendeur_post`
--

INSERT INTO `vendeur_post` (`id`, `code`, `nom_produit`, `ville`, `image`, `source`, `titre`, `etiquette`, `prix`, `categorie`, `date`, `time`) VALUES
(39, '3A189BF7DA', 'cahiers intellect', 'Yaounde', 'CAHIERS INTELLECT.jpg, , , ', 'media_uploaded/20/By  nzentem/CAHIERS INTELLECT.jpg;media_uploaded/20/By  nzentem/;media_uploaded/20/By  nzentem/;media_uploaded/20/By  nzentem/', 'cahiers', 'fabrication des cahiers par le groupe nzentem a travers la nzentem first design', '400/pieces', '20', '12/11/2013', '19:11:52'),
(39, 'F9739EDE9B', 'television ecran plat 32 pouce', 'Yaounde', '5258828_1000035896_LC_32_LE_240_E-2_194.jpg, , , ', 'media_uploaded/32/By  nzentem/5258828_1000035896_LC_32_LE_240_E-2_194.jpg;media_uploaded/32/By  nzentem/;media_uploaded/32/By  nzentem/;media_uploaded/32/By  nzentem/', 'ecran de television', 'ecran plat sharp 32 pouce neuf avec 02 mois de garanti\r\nstock: 20 pieces', '170.000', '32', '12/11/2013', '19:11:33'),
(39, '06D71932FB', 'cle usb', 'Yaounde', 'cle-usb-imation-8go.jpg, , , ', 'media_uploaded/30/By  nzentem/cle-usb-imation-8go.jpg;media_uploaded/30/By  nzentem/;media_uploaded/30/By  nzentem/;media_uploaded/30/By  nzentem/', 'Cle usb', 'cle usb imation 4Go et 8Go neuf\r\ngaranti 1 an\r\nlivraison gratuite dans Yaound&Atilde;&copy;', '4500 F et 5500F respectivement.', '30', '12/11/2013', '19:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `vendeur_post_maison`
--

CREATE TABLE IF NOT EXISTS `vendeur_post_maison` (
  `id` int(255) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `etiquette` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `piece` int(255) NOT NULL,
  `surface` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendeur_post_maison`
--

INSERT INTO `vendeur_post_maison` (`id`, `nom_produit`, `ville`, `image`, `source`, `titre`, `etiquette`, `prix`, `categorie`, `type`, `piece`, `surface`, `date`) VALUES
(30, 'lionel', 'Maroua', 'lcp.jpg, , , ', 'media_uploaded/21/By  kamdem/lcp.jpg;media_uploaded/21/By  kamdem/;media_uploaded/21/By  kamdem/;media_uploaded/21/By  kamdem/', 'A Lario', 'mjbig  uyguyhui', '4567', '21', 'Appartement', 1, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
