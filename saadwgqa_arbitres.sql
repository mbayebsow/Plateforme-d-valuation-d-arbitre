-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 01 jan. 2022 à 14:45
-- Version du serveur :  10.2.41-MariaDB
-- Version de PHP : 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `saadwgqa_arbitres`
--

-- --------------------------------------------------------

--
-- Structure de la table `arbitres`
--

CREATE TABLE `arbitres` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Telephone` int(225) NOT NULL,
  `note_total` int(255) NOT NULL,
  `image` varchar(11) NOT NULL DEFAULT 'profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `arbitres`
--

INSERT INTO `arbitres` (`id`, `nom`, `Telephone`, `note_total`, `image`) VALUES
(1, 'Madou Dia', 770000000, 106, 'profile.png'),
(2, 'Khadim Niang', 770000000, 126, 'profile.jpg'),
(3, 'Amadou Sall', 770000000, 141, 'profile.png'),
(4, 'Fatou Seck', 770000000, 140, 'profile.jpg'),
(5, 'Almami Touré', 770000000, 41, 'profile.png');

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE `equipes` (
  `equipe_id` int(11) NOT NULL,
  `nom_equipe` varchar(255) NOT NULL,
  `logo_equipe` varchar(11) NOT NULL DEFAULT 'logo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`equipe_id`, `nom_equipe`, `logo_equipe`) VALUES
(1, 'ASC Darou', 'logo.png'),
(2, 'AS Ndakarou', 'logo.png'),
(3, 'Teungueth FC', 'logo.png'),
(4, 'Generation Foot', 'logo.png'),
(5, 'US Goree', 'logo.png'),
(6, 'AS Pikine', 'logo.png'),
(7, 'Guédiawaye FC', 'logo.png'),
(8, 'ASEC Ndiambour', 'logo.png'),
(9, 'Casa Sport', 'logo.png'),
(10, 'CNEPS Excellence', 'logo.png'),
(11, 'Diambars', 'logo.png'),
(12, 'AS Douanes', 'logo.png'),
(13, 'DSC', 'logo.png'),
(14, 'Jaraaf', 'logo.png'),
(15, 'Touré Kounda', 'logo.png');

-- --------------------------------------------------------

--
-- Structure de la table `eval_arbitres`
--

CREATE TABLE `eval_arbitres` (
  `id` int(255) NOT NULL,
  `a_positifs_1` text NOT NULL,
  `a_negatifs_1` text NOT NULL,
  `a_positifs_2` text NOT NULL,
  `a_negatifs_2` text NOT NULL,
  `a_positifs_3` text NOT NULL,
  `a_negatifs_3` text NOT NULL,
  `a1_positifs_1` text NOT NULL,
  `a1_negatifs_1` text NOT NULL,
  `a2_positifs_1` text NOT NULL,
  `a2_negatifs_1` text NOT NULL,
  `a4_positifs_1` text NOT NULL,
  `a4_negatifs_1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `eval_arbitres`
--

INSERT INTO `eval_arbitres` (`id`, `a_positifs_1`, `a_negatifs_1`, `a_positifs_2`, `a_negatifs_2`, `a_positifs_3`, `a_negatifs_3`, `a1_positifs_1`, `a1_negatifs_1`, `a2_positifs_1`, `a2_negatifs_1`, `a4_positifs_1`, `a4_negatifs_1`) VALUES
(26737042, 'JKBJHVH', 'JVJHV', 'JHJV', 'HJVJHV', 'HVHV', 'JHVJHV', 'HJVHJ', 'V', 'VVHJV', 'HJVHVJH', 'HJVJHVJH', 'HVHVJHV'),
(97278090, 'Hey', 'Heyjfj\r\n', 'Hey', 'Hey', 'Hey', 'Hey', 'Djdj', 'Hey', 'Hey', 'Hey', 'Hey', 'Hey'),
(287451083, 'KJH', 'BHJB', 'JHVBJ', 'HVJH', 'VJH', 'VJH', 'VJH', 'VJ', 'HV', 'JHV', 'JHV', 'JHV'),
(381200448, 'KJGHJBVJH', 'VJHV', 'JHVJH', 'VJHVJH', 'VJHV', 'JHVJH', 'VJHVJH', 'VJHVJ', 'HVJHV', 'JHVJHV', 'JHVJH', 'JHVJH'),
(388828313, 'HBDLBDFKJDJFBNDKJBEJBD', 'KJBNDBCDN,KJEDBFBB', 'BBJFBJVHBFHJVB', 'JKBSJHDBCJDFBV HJB', 'JBJSCCB JDHBVJDHB', 'DFBVDJFHBVJDHFBJH', 'JBDJHB JD JBJVHB ', 'KBDBFJDBJHBDHBV', 'DJ BDJBVJHDBFVJDBFJH', 'DBVJDBCJHDBCJ DHB', 'DCBH DJHBC JDCB JD', 'CHJB DJBC JDBC JDB'),
(389816307, 'ghg', 'vhgv', 'gvgh', 'vhgv', 'hgvh', 'gvhgv', 'hgv', 'hgv', 'hgv', 'hgvh', 'gvh', 'vhgvhgv'),
(434373471, 'EVALUATION', 'EVALUATION', 'EVALUATION', 'EVALUATION', 'EVALUATION', 'EVALUATION', 'EVALUATION', 'EVALUATION', 'EVALUATION', 'EVALUATION', 'EVALUATION', 'EVALUATION'),
(820090940, 'KJBHJV', 'JHV', 'JHVJ', 'VJ', 'HVJ', 'HVJH', 'V', 'JHV', 'JHV', 'JHV', 'JH', 'VJ'),
(882445019, 'lknlkn', 'njkn', 'jnj', 'nj', 'nj', 'njknj', 'njkn', 'jn', 'jn', 'jn', 'j', 'nj'),
(922988342, '', '', '', '', '', '', '', '', '', '', '', ''),
(948949123, 'Rien Ã  redire ', 'Rien de plus ', 'Respect ', 'Positif', 'Bon', 'Bonne ', 'Bon', 'Pas ', 'Bon ', 'Rien', 'Bon', 'Rien '),
(1063428219, 'Exolosivite 23\r\nAngle de vue 32\r\nAvantage 55\r\nSPA cj obligatoire 72\r\n', 'Manque d anticipation 02\r\nMauvais placement sur le mur Ã  l entrÃ©e de la surface 27\r\nDOGSO hors surface CR obligatoire ', 'Changement de direction 21\r\nProximitÃ© 88', 'Absence du dernier mouvement pour mieux voir\r\nArbitre loin de l action manque d informations sur la seconde phase', 'Bonne collaboration sur la faute Ã  l entrÃ©e de la surface 27', '', 'Attendre et voir 18\r\nBonne interprÃ©tation du Hj 63', 'Programmation de la signalisation de la faute pour la dÃ©fense avec la main gauche 43\r\nMauvaise interprÃ©tation du HJ alignement dÃ©fectueux 70', 'Bonne interprÃ©tation du HJ 24 et 61', 'Mauvaise application du attendre et voir 44 ', 'Bonne collaboration avec l arbitre sur la faute Ã  cÃ´tÃ© de la ligne 48', ''),
(1086642711, 'Hdhxh', 'Jcj hx', 'Bchxjxh', 'Bxgckc', 'Jcjcjc', 'Bcyxjc', 'Hxvjf', 'Yf tu shcbc', 'Jdjdvv', 'Hxbcv', 'Jxbcc', 'Vcbcv'),
(1212980992, 'JHVJHGV', 'VGHCVGHVGH', 'VGHVGHV', 'HGVHGVGHV', 'GVGHVHGVGH', 'VHGVHGVHG', 'VHGVHGVGHV', 'HGVGHVGH', 'GHVGHVGH', 'GHVGHVGH', 'GHVGHGHV', 'GHVHG'),
(1272475397, 'lnjkl', 'nj', 'njk', 'nbkj', 'bnkj', 'nbkjb', 'jkb', 'jk', 'bkj', 'bkj', 'bk', 'jb'),
(1419033505, 'KLNK', 'NJKNKJN', 'JKNJK', 'NJK', 'NKJN', 'KJN', 'KJN', 'JKN', 'KJNKJ', 'NKJ', 'NKJN', 'KNK'),
(1448167135, 'JNJBJH', 'BJHBJH', 'BJHBJH', 'BJ', 'HBJHB', 'JHB', 'JHBJ', 'HBJH', 'BJHB', 'JH', 'BJH', 'BJHB'),
(1457303755, 'JHBHJ', 'BJHBV', 'JHBVJ', 'HV', 'JHV', 'JHV', 'JHV', 'JHVJH', 'VJH', 'VJHV', 'JHVJH', 'HVJHV'),
(1496043980, 'Xexexe\r\n', 'Fgdg', 'Fgffh', 'Fgdthcf', 'Fgvxb', 'Chffbv', 'Fghcgg', 'Fgffg', 'Rvrvfv', 'Dvrvfdv', 'Cdveceec', 'Dcecece'),
(1624732844, 'KJNJK', 'NJ', 'NJK', 'NJK', 'NJK', 'N', 'JKN', 'JKN', 'JN', 'JK', 'NJK', 'N'),
(1637810989, 'JBH', 'BHBH', 'BHJB', 'HJB', 'HJBH', 'JBHJBHJ', 'BHJBJHB', 'HJBJHBHB', 'HBHJBHJB', 'HJBJHBHJB', 'JHBJHBJHB', 'HJBJHB'),
(1695584709, 'HJHVB', 'HJB', 'JHB', 'JHB', 'JHB', 'JHB', 'JHB', 'JHB', 'JHB', 'JH', 'BJH', 'BJ'),
(1710831366, 'JBH', 'BJH', 'BJH', 'V', 'JHV', 'V', '', 'V', 'V', 'JGV', 'H', 'V'),
(1712095870, 'KHJBH', 'VBHJV', 'JHV', 'JHV', 'JHV', 'JHV', 'JHV', 'JHV', 'JHV', 'JHV', 'JHV', 'JH'),
(1811620647, 'JNJKNBKJ', 'BJKB', 'KJBKJB', 'KBKJBKJ', 'BKJBKJBKJ', 'BKJBKJBKB', 'KJBKJBKJB', 'KJBKJBKJB', 'KBKJBKJ', 'BKJBKJBKJ', 'BKJBKJBKJ', 'BKJBKJBKJB'),
(1913023416, '', '', '', '', '', '', '', '', '', '', '', ''),
(1979425452, 'KJBHB', 'HBHJBJHB', 'JHBJHBJHB', 'JHBJHBJHB', 'JHBJHB', 'JHBJHBJHB', 'JHBJHBJHB', 'JHBJHBJH', 'BJHBJHBJ', 'BJHBJHB', 'JHBJHBJHB', 'JHBJHBJH'),
(2068927052, 'JNJKNJ', 'NKJNJK', 'NKJNJKNKJ', 'NKJNKJN', 'KJNKJNKJ', 'NKJNKJN', 'KNKJNKJN', 'JKNKJNK', 'NKJNKJN', 'KJNKJNK', 'NKJNK', 'JNKJNKJN'),
(2132932617, 'Ggbvvh', 'Ghgbbb', 'Ghggg', 'Ghggg', 'Hgggg', 'Ghgh', 'Vbfgg', 'Fggv', 'Ghghb', 'Ghggh', 'Rhhvh', 'Ghgh');

-- --------------------------------------------------------

--
-- Structure de la table `fiches`
--

CREATE TABLE `fiches` (
  `id` int(225) NOT NULL,
  `a_id` int(225) NOT NULL,
  `a1_id` int(225) NOT NULL,
  `a2_id` int(225) NOT NULL,
  `a4_id` int(225) NOT NULL,
  `evaluer_par` int(255) NOT NULL,
  `section` mediumtext NOT NULL,
  `match_id` int(225) NOT NULL,
  `eval_arbitres_id` int(225) NOT NULL,
  `note_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'apprové',
  `evaluer_le` timestamp NOT NULL DEFAULT current_timestamp(),
  `saison_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fiches`
--

INSERT INTO `fiches` (`id`, `a_id`, `a1_id`, `a2_id`, `a4_id`, `evaluer_par`, `section`, `match_id`, `eval_arbitres_id`, `note_id`, `status`, `evaluer_le`, `saison_id`) VALUES
(26737042, 5, 4, 2, 3, 24, 'Rufisque', 26737042, 26737042, 26737042, 'apprové', '2021-12-14 21:52:16', 1),
(97278090, 5, 3, 4, 2, 24, 'Rufisque', 97278090, 97278090, 97278090, 'apprové', '2021-12-19 16:03:28', 1),
(287451083, 1, 1, 1, 1, 24, 'Rufisque', 287451083, 287451083, 287451083, 'apprové', '2021-12-18 21:15:31', 1),
(381200448, 1, 1, 1, 1, 24, 'Rufisque', 381200448, 381200448, 381200448, 'apprové', '2021-12-18 21:18:52', 1),
(388828313, 3, 4, 2, 5, 24, 'Rufisque', 388828313, 388828313, 388828313, 'apprové', '2021-12-08 21:53:42', 1),
(389816307, 1, 1, 1, 1, 24, 'Rufisque', 389816307, 389816307, 389816307, 'apprové', '2021-12-18 21:13:37', 1),
(434373471, 2, 5, 4, 3, 24, 'Rufisque', 434373471, 434373471, 434373471, 'apprové', '2021-12-09 16:24:00', 1),
(820090940, 1, 1, 1, 1, 24, 'Rufisque', 820090940, 820090940, 820090940, 'apprové', '2021-12-18 21:29:19', 1),
(882445019, 1, 1, 1, 1, 24, 'Rufisque', 882445019, 882445019, 882445019, 'apprové', '2021-12-18 21:55:49', 1),
(922988342, 2, 3, 1, 1, 24, 'Rufisque', 922988342, 922988342, 922988342, 'approvÃ©', '2021-12-26 14:41:14', 1),
(948949123, 2, 3, 1, 4, 24, 'Rufisque', 948949123, 948949123, 948949123, 'approvÃ©', '2021-12-30 19:22:42', 1),
(1063428219, 3, 4, 2, 1, 24, 'Rufisque', 1063428219, 1063428219, 1063428219, 'approvÃ©', '2021-12-30 21:19:50', 1),
(1086642711, 3, 4, 1, 5, 24, 'Rufisque', 1086642711, 1086642711, 1086642711, 'approvÃ©', '2021-12-25 01:25:10', 1),
(1212980992, 4, 5, 3, 1, 24, 'Rufisque', 1212980992, 1212980992, 1212980992, 'apprové', '2021-12-11 16:59:57', 1),
(1272475397, 1, 1, 1, 1, 24, 'Rufisque', 1272475397, 1272475397, 1272475397, 'apprové', '2021-12-18 22:12:41', 1),
(1419033505, 1, 1, 1, 1, 24, 'Rufisque', 1419033505, 1419033505, 1419033505, 'apprové', '2021-12-18 22:40:24', 1),
(1448167135, 1, 1, 1, 1, 24, 'Rufisque', 1448167135, 1448167135, 1448167135, 'apprové', '2021-12-18 22:41:01', 1),
(1457303755, 1, 1, 1, 1, 24, 'Rufisque', 1457303755, 1457303755, 1457303755, 'apprové', '2021-12-18 21:34:22', 1),
(1496043980, 5, 3, 4, 2, 24, 'Rufisque', 1496043980, 1496043980, 1496043980, 'apprové', '2021-12-14 22:41:26', 1),
(1624732844, 1, 1, 1, 1, 24, 'Rufisque', 1624732844, 1624732844, 1624732844, 'apprové', '2021-12-18 22:28:42', 1),
(1637810989, 1, 1, 1, 1, 24, 'Rufisque', 1637810989, 1637810989, 1637810989, 'apprové', '2021-12-18 22:29:46', 1),
(1695584709, 1, 1, 1, 1, 24, 'Rufisque', 1695584709, 1695584709, 1695584709, 'apprové', '2021-12-18 21:23:22', 1),
(1710831366, 1, 1, 1, 1, 24, 'Rufisque', 1710831366, 1710831366, 1710831366, 'apprové', '2021-12-18 19:59:02', 1),
(1712095870, 1, 1, 1, 1, 24, 'Rufisque', 1712095870, 1712095870, 1712095870, 'apprové', '2021-12-18 21:22:36', 1),
(1811620647, 1, 1, 1, 1, 24, 'Rufisque', 1811620647, 1811620647, 1811620647, 'apprové', '2021-12-18 22:01:32', 1),
(1913023416, 2, 3, 1, 1, 24, 'Rufisque', 1913023416, 1913023416, 1913023416, 'approvÃ©', '2021-12-26 14:41:14', 1),
(1979425452, 1, 1, 1, 1, 24, 'Rufisque', 1979425452, 1979425452, 1979425452, 'approvÃ©', '2021-12-24 20:35:40', 1),
(2068927052, 1, 1, 1, 1, 24, 'Rufisque', 2068927052, 2068927052, 2068927052, 'apprové', '2021-12-18 22:35:36', 1),
(2132932617, 1, 1, 1, 1, 24, 'Rufisque', 2132932617, 2132932617, 2132932617, 'approvÃ©', '2021-12-24 20:38:15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

CREATE TABLE `matchs` (
  `id` int(255) NOT NULL,
  `competition` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `joue_le` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `equipe_a` int(255) NOT NULL,
  `equipe_b` int(255) NOT NULL,
  `score_mitemps_a` int(255) NOT NULL,
  `score_mitemps_b` int(255) NOT NULL,
  `score_final_a` int(255) NOT NULL,
  `score_final_b` int(255) NOT NULL,
  `difficulte` varchar(255) NOT NULL,
  `saison_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matchs`
--

INSERT INTO `matchs` (`id`, `competition`, `zone`, `joue_le`, `lieu`, `heure`, `equipe_a`, `equipe_b`, `score_mitemps_a`, `score_mitemps_b`, `score_final_a`, `score_final_b`, `difficulte`, `saison_id`) VALUES
(26737042, 'Championat local', '9', '2021-12-14', 'Test', '20:00', 1, 3, 3, 4, 3, 4, 'Moyen', 1),
(97278090, 'Championat local', '9', '2021-12-19', 'Stade mbao', '16:00', 1, 7, 1, 1, 2, 1, 'Moyen', 1),
(287451083, 'Championat local', '9', '2021-12-18', '', '', 2, 4, 2, 2, 2, 3, 'Bas', 1),
(381200448, 'Championat local', '9', '2021-12-18', '', '', 1, 3, 2, 2, 4, 2, 'Moyen', 1),
(388828313, 'Championat local', '9', '2021-12-08', 'Stade de Guédiawaye', '17:00', 2, 1, 1, 1, 2, 1, 'Moyen', 1),
(389816307, 'Championat local', '9', '2021-12-18', '', '', 1, 3, 2, 2, 3, 2, 'Moyen', 1),
(434373471, 'Championat local', '7', '2021-12-09', 'Stade de Rufisque', '09:00', 3, 1, 2, 2, 3, 1, 'Élevé', 1),
(820090940, 'Championat local', '9', '2021-12-18', '', '', 1, 3, 3, 3, 4, 3, 'Moyen', 1),
(882445019, 'Championat local', '9', '2021-12-18', '', '', 1, 3, 1, 1, 2, 3, 'Moyen', 1),
(922988342, 'Championat local', '9', '2021-12-26', 'Dakar', '14:40', 1, 1, 0, 0, 0, 0, '', 1),
(948949123, 'Championat local', '9', '2021-12-30', 'Borom ', '19:20', 1, 1, 6, 0, 2, 9, 'Bas', 1),
(1063428219, 'Championat local', '9', '2021-12-30', 'Ponty', '15:00', 1, 1, 0, 0, 2, 0, 'Moyen', 1),
(1086642711, 'Championat local', '7', '2021-12-25', 'Stade municipal', '01:23', 6, 1, 1, 1, 1, 2, 'Ã‰levÃ©', 1),
(1212980992, 'Championat local', '9', '2021-12-11', 'Dakar', '12:00', 1, 1, 4, 3, 4, 3, 'Moyen', 1),
(1272475397, 'Championat local', '9', '2021-12-18', '', '', 1, 3, 1, 1, 2, 1, 'Moyen', 1),
(1419033505, 'Championat local', '9', '2021-12-18', '', '', 1, 2, 1, 1, 1, 1, 'Moyen', 1),
(1448167135, 'Championat local', '9', '2021-12-18', '', '', 1, 2, 1, 1, 2, 1, 'Bas', 1),
(1457303755, 'Championat local', '9', '2021-12-18', '', '', 1, 3, 4, 4, 5, 4, 'Moyen', 1),
(1496043980, 'Championat local', '9', '2021-12-14', 'Dakar', '17:00', 3, 1, 1, 1, 2, 1, 'Élevé', 1),
(1543164043, 'Championat local', '9', '2021-12-22', 'Stade municipal', '17:00', 1, 11, 2, 2, 2, 3, 'Moyen', 1),
(1624732844, 'Championat local', '9', '2021-12-18', '', '', 1, 3, 0, 0, 0, 0, 'Moyen', 1),
(1637810989, 'Championat local', '9', '2021-12-18', '', '', 1, 3, 1, 1, 2, 2, 'Bas', 1),
(1695584709, 'Championat local', '9', '2021-12-18', '', '', 1, 2, 2, 2, 2, 2, 'Bas', 1),
(1710831366, 'Championat local', '9', '2021-12-18', 'Dakar', '11:01', 1, 3, 0, 0, 0, 0, 'Élevé', 1),
(1712095870, 'Championat local', '9', '2021-12-18', '', '', 1, 2, 2, 2, 2, 2, 'Élevé', 1),
(1811620647, 'Championat local', '9', '2021-12-18', '', '', 1, 2, 2, 2, 4, 2, 'Moyen', 1),
(1913023416, 'Championat local', '9', '2021-12-26', 'Dakar', '14:40', 1, 1, 0, 0, 0, 0, '', 1),
(1979425452, 'Championat local', '9', '2021-12-24', 'dakar', '11:11', 1, 1, 7, 7, 7, 7, 'Moyen', 1),
(2068927052, 'Championat local', '9', '2021-12-18', '', '', 3, 1, 1, 1, 3, 1, 'Moyen', 1),
(2132932617, 'Championat local', '9', '2021-12-24', 'Stade municipal', '20:37', 1, 5, 1, 1, 1, 1, 'Moyen', 1);

-- --------------------------------------------------------

--
-- Structure de la table `notes_arbitres`
--

CREATE TABLE `notes_arbitres` (
  `id` int(255) NOT NULL,
  `a` int(255) NOT NULL,
  `a_1` int(225) NOT NULL,
  `a_2` int(255) NOT NULL,
  `a_4` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notes_arbitres`
--

INSERT INTO `notes_arbitres` (`id`, `a`, `a_1`, `a_2`, `a_4`) VALUES
(26737042, 9, 7, 8, 6),
(97278090, 9, 4, 7, 5),
(287451083, 0, 0, 0, 0),
(381200448, 0, 0, 0, 0),
(388828313, 9, 5, 7, 3),
(389816307, 0, 0, 0, 0),
(434373471, 9, 5, 4, 8),
(820090940, 0, 0, 0, 0),
(882445019, 0, 0, 0, 0),
(922988342, 0, 0, 0, 0),
(948949123, 7, 8, 9, 12),
(1063428219, 85, 84, 85, 85),
(1086642711, 9, 8, 5, 2),
(1212980992, 9, 5, 3, 7),
(1272475397, 0, 0, 0, 0),
(1419033505, 0, 0, 0, 0),
(1448167135, 0, 0, 0, 0),
(1457303755, 0, 0, 0, 0),
(1496043980, 8, 9, 4, 5),
(1624732844, 0, 0, 0, 0),
(1637810989, 0, 0, 0, 0),
(1695584709, 0, 0, 0, 0),
(1710831366, 0, 0, 0, 0),
(1712095870, 0, 0, 0, 0),
(1811620647, 0, 0, 0, 0),
(1913023416, 0, 0, 0, 0),
(1979425452, 0, 0, 0, 0),
(2068927052, 0, 0, 0, 0),
(2132932617, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `saisons`
--

CREATE TABLE `saisons` (
  `id` int(11) NOT NULL,
  `saison` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `saisons`
--

INSERT INTO `saisons` (`id`, `saison`) VALUES
(1, '2021 - 2022');

-- --------------------------------------------------------

--
-- Structure de la table `statistiques`
--

CREATE TABLE `statistiques` (
  `id` int(11) UNSIGNED NOT NULL,
  `equipe_id` int(11) NOT NULL,
  `total_match` int(255) NOT NULL DEFAULT 0,
  `but_marque` int(255) NOT NULL DEFAULT 0,
  `but_encaisse` int(255) NOT NULL DEFAULT 0,
  `victoire` int(255) NOT NULL DEFAULT 0,
  `defaite` int(255) NOT NULL DEFAULT 0,
  `nul` int(255) NOT NULL DEFAULT 0,
  `points` int(255) NOT NULL DEFAULT 0,
  `saison_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `statistiques`
--

INSERT INTO `statistiques` (`id`, `equipe_id`, `total_match`, `but_marque`, `but_encaisse`, `victoire`, `defaite`, `nul`, `points`, `saison_id`) VALUES
(1, 1, 23, 35, 22, 6, 3, 7, 20, 1),
(2, 2, 6, 4, 7, 0, 1, 1, 1, 1),
(3, 3, 9, 6, 5, 1, 1, 2, 3, 1),
(4, 4, 1, 0, 0, 0, 0, 0, 0, 1),
(5, 5, 1, 1, 1, 0, 0, 1, 1, 1),
(6, 6, 1, 1, 2, 0, 1, 0, 0, 1),
(7, 7, 1, 1, 2, 0, 1, 0, 0, 1),
(8, 8, 0, 0, 0, 0, 0, 0, 0, 1),
(9, 9, 0, 0, 0, 0, 0, 0, 0, 1),
(10, 10, 0, 0, 0, 0, 0, 0, 0, 1),
(11, 11, 0, 0, 0, 0, 0, 0, 0, 1),
(12, 12, 0, 0, 0, 0, 0, 0, 0, 1),
(13, 13, 0, 0, 0, 0, 0, 0, 0, 1),
(14, 14, 0, 0, 0, 0, 0, 0, 0, 1),
(15, 15, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `about` varchar(300) NOT NULL DEFAULT 'N/A',
  `role` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `token` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `course` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL DEFAULT 'profile.jpg',
  `joindate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `about`, `role`, `email`, `token`, `gender`, `password`, `course`, `image`, `joindate`) VALUES
(12, 'root', 'admin root', 'N/A', 'admin', 'root@gmail.com', '', 'N/A', '$2y$10$UExd.f8vQXogrZELXF8KGulQJKUn32p8x4B5SVQ7V/D6.mrSAkAjW', 'Administrateur', 'profile.jpg', '2000-01-01'),
(24, 'saady', 'Babacar Saady', '25DDS252', 'Inspecteur', 'babacar@dr.com', 'c7978cbcbcfebe07abfc3c6524ca969b', 'Homme', '$2y$10$Z1H.ruYjbMSp07EhejzS0O1Fr7PgFdjqbWmtu7/j68TXr55gZ2Msu', 'Rufisque', '484843.jpg', '2000-01-01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arbitres`
--
ALTER TABLE `arbitres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`equipe_id`);

--
-- Index pour la table `eval_arbitres`
--
ALTER TABLE `eval_arbitres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fiches`
--
ALTER TABLE `fiches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a1_id` (`a1_id`),
  ADD KEY `a2_id` (`a2_id`),
  ADD KEY `a4_id` (`a4_id`),
  ADD KEY `a_id` (`a_id`),
  ADD KEY `evaluer_par` (`evaluer_par`),
  ADD KEY `eval_arbitres_id` (`eval_arbitres_id`),
  ADD KEY `match_id` (`match_id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `saison_id` (`saison_id`);

--
-- Index pour la table `matchs`
--
ALTER TABLE `matchs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipe_a` (`equipe_a`),
  ADD KEY `equipe_b` (`equipe_b`),
  ADD KEY `saison_id` (`saison_id`);

--
-- Index pour la table `notes_arbitres`
--
ALTER TABLE `notes_arbitres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `saisons`
--
ALTER TABLE `saisons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statistiques`
--
ALTER TABLE `statistiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saison_id` (`saison_id`),
  ADD KEY `equipe_id` (`equipe_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `arbitres`
--
ALTER TABLE `arbitres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `equipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `eval_arbitres`
--
ALTER TABLE `eval_arbitres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2132932618;

--
-- AUTO_INCREMENT pour la table `fiches`
--
ALTER TABLE `fiches`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2132932618;

--
-- AUTO_INCREMENT pour la table `matchs`
--
ALTER TABLE `matchs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2132932618;

--
-- AUTO_INCREMENT pour la table `notes_arbitres`
--
ALTER TABLE `notes_arbitres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2132932618;

--
-- AUTO_INCREMENT pour la table `saisons`
--
ALTER TABLE `saisons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `statistiques`
--
ALTER TABLE `statistiques`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fiches`
--
ALTER TABLE `fiches`
  ADD CONSTRAINT `fiches_ibfk_1` FOREIGN KEY (`a1_id`) REFERENCES `arbitres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiches_ibfk_2` FOREIGN KEY (`a2_id`) REFERENCES `arbitres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiches_ibfk_3` FOREIGN KEY (`a4_id`) REFERENCES `arbitres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiches_ibfk_4` FOREIGN KEY (`a_id`) REFERENCES `arbitres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiches_ibfk_5` FOREIGN KEY (`evaluer_par`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiches_ibfk_6` FOREIGN KEY (`eval_arbitres_id`) REFERENCES `eval_arbitres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiches_ibfk_7` FOREIGN KEY (`match_id`) REFERENCES `matchs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiches_ibfk_8` FOREIGN KEY (`note_id`) REFERENCES `notes_arbitres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiches_ibfk_9` FOREIGN KEY (`saison_id`) REFERENCES `saisons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `matchs`
--
ALTER TABLE `matchs`
  ADD CONSTRAINT `matchs_ibfk_1` FOREIGN KEY (`equipe_a`) REFERENCES `equipes` (`equipe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matchs_ibfk_2` FOREIGN KEY (`equipe_b`) REFERENCES `equipes` (`equipe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matchs_ibfk_3` FOREIGN KEY (`saison_id`) REFERENCES `saisons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `statistiques`
--
ALTER TABLE `statistiques`
  ADD CONSTRAINT `statistiques_ibfk_2` FOREIGN KEY (`saison_id`) REFERENCES `saisons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `statistiques_ibfk_3` FOREIGN KEY (`equipe_id`) REFERENCES `equipes` (`equipe_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
