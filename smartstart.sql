-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 mars 2019 à 11:19
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `smartstart`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id_application` int(11) NOT NULL AUTO_INCREMENT,
  `id_opportunity` int(11) DEFAULT NULL,
  `id_freelancer` int(11) DEFAULT NULL,
  `state` varchar(30) NOT NULL,
  PRIMARY KEY (`id_application`),
  KEY `id_opportunity` (`id_opportunity`),
  KEY `id_freelancer` (`id_freelancer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `blogposts`
--

DROP TABLE IF EXISTS `blogposts`;
CREATE TABLE IF NOT EXISTS `blogposts` (
  `post_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Author_id` int(11) DEFAULT NULL,
  `post_date` date NOT NULL,
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8_bin NOT NULL,
  `post_type` varchar(100) COLLATE utf8_bin NOT NULL,
  `post_comment_count` int(11) DEFAULT NULL,
  `article_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_content` longtext COLLATE utf8_bin,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_likes_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_ID`),
  KEY `Author_id` (`Author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `blogposts`
--

INSERT INTO `blogposts` (`post_ID`, `Author_id`, `post_date`, `post_content`, `post_status`, `post_type`, `post_comment_count`, `article_title`, `article_content`, `image`, `post_likes_count`) VALUES
(34, 9, '2019-03-13', 'Bijor', 'draft', '1', 1, 'Bijor', 'Bijor', '73eda3d94a66348527982add02fd9c68.jpeg', 0),
(35, 9, '2019-03-14', 'hahahahah', 'draft', '1', 0, 'hahhhahah', 'hahahahah', '35c439af2a6072150c2d0080f5bddd3c.png', 0),
(36, 9, '2019-03-14', 'hahahahah', 'draft', '1', 0, 'hahhhahah', 'hahahahah', '420f30eadcf1d90372683cdb4a8c5718.jpeg', 0),
(37, 9, '2019-03-14', 'hahahahah', 'draft', '1', 6, 'hahhhahah', 'hahahahah', '46d994f497b55b9730e5ced44661a4f5.jpeg', 0),
(38, 8, '2019-03-16', 'Manirou', 'draft', 'Cheat Sheet Post', 7, 'llllll', '<p>jawek behi le enta jawek behi</p>', '20d9fb867ff2da7d28cb24a076d6a8b2.png', 0),
(39, 8, '2019-03-15', 's', 'draft', '1', 0, 's', 's', '542b445ede6984b36bb4389383b45a01.png', 0),
(40, 8, '2019-03-16', 'Bijor', 'draft', 'Newsjacking', 8, 'HAHAHAHAHA', '<p>HAHAHAHAHAHAlololololmounirbgmirceh</p>', 'a06bfc356b56764daab884e3586a089c.jpeg', 0),
(41, 8, '2019-03-16', 'hahahhaa', 'draft', 'Personal Spotlight Post', 9, 'hahaha', 'hahahahaa', 'b504395e79c568e7417e38425fd7ba70.png', 0),
(42, 8, '2019-03-16', 'ahahahahahahahah', 'draft', 'Personal Spotlight Post', 0, 'HAHAHAHAHAHAHAHAHAHAHAHA', 'HAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHA', 'b8cf7ddbb4011cba6f1d4b92617ff552.jpeg', 0),
(43, 8, '2019-03-16', 'bijor', 'draft', 'Cheat Sheet Post', 4, 'haahaaha', 'hahahaha', '502aca2d8511cc07291ee54ba5da4e57.png', 0),
(44, 9, '2019-03-16', 'C\'est le tout premier blog', 'draft', 'Instructional Post', 1, 'HAHAHAHAH', '<p>D&rsquo;un point de vue plus pratique, vous pouvez commencer par&nbsp;<strong>donner &agrave; votre article un titre de travail</strong>&nbsp;qui r&eacute;sume votre objectif final. Par exemple, cet article avait pour titre temporaire &laquo;&nbsp;Structurer un article de blog&nbsp;&raquo;. C&rsquo;est clair, pr&eacute;cis, pas tr&egrave;s sexy&hellip; mais le but de l&rsquo;article, c&rsquo;est &ccedil;a ! Trouver ce titre temporaire vous permet souvent de formuler votre objectif principal en quelques mots qui vont &agrave; l&rsquo;essentiel, c&rsquo;est une aide &agrave; la r&eacute;daction de votre intro par la suite.</p>\r\n\r\n<p>Je vous conseille aussi de&nbsp;<strong>limiter votre introduction &agrave; quelques lignes</strong>. La presse va plus loin en se limitant souvent &agrave; un chap&ocirc; de 2-3 lignes. Un blog est plus souple au niveau du format mais mieux vaut rester concis.</p>\r\n\r\n<h2>2. &Eacute;crire le corps de l&rsquo;article</h2>\r\n\r\n<p>D&eacute;j&agrave;,&nbsp;<strong>ne vous bloquez jamais en pensant qu&rsquo;il y a une seule et unique fa&ccedil;on de faire</strong>&nbsp;! Vous avez tous un style d&rsquo;&eacute;criture qui vous est propre et il fait partie int&eacute;grante de la richesse de votre blog.<img alt=\"heart\" src=\"http://cdn.ckeditor.com/4.11.3/full/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>', '42825d389ebaaf0b14fcd5766ef63243.jpeg', 0),
(45, 8, '2019-03-16', 'Blog', 'draft', 'Cheat Sheet Post', 0, 'Lol', '<p>D&rsquo;un point de vue plus pratique, vous pouvez commencer par&nbsp;<strong>donner &agrave; votre article un titre de travail</strong>&nbsp;qui r&eacute;sume votre objectif final. Par exemple, cet article avait pour titre temporaire &laquo;&nbsp;Structurer un article de blog&nbsp;&raquo;. C&rsquo;est clair, pr&eacute;cis, pas tr&egrave;s sexy&hellip; mais le but de l&rsquo;article, c&rsquo;est &ccedil;a ! Trouver ce titre temporaire vous permet souvent de formuler votre objectif principal en quelques mots qui vont &agrave; l&rsquo;essentiel, c&rsquo;est une aide &agrave; la r&eacute;daction de votre intro par la suite.</p>\r\n\r\n<p>Je vous conseille aussi de&nbsp;<strong>limiter votre introduction &agrave; quelques lignes</strong>. La presse va plus loin en se limitant souvent &agrave; un chap&ocirc; de 2-3 lignes. Un blog est plus souple au niveau du format mais mieux vaut rester concis.</p>', '0faedd6b227749fb19029211488fc665.jpeg', 0),
(46, 8, '2019-03-17', 'Bijor', 'draft', 'Newsjacking', 1, 'Bijor', '<p>Bijor<img alt=\"yes\" src=\"https://cdn.ckeditor.com/4.11.3/full/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" /></p>', '10f67612490af1f246b76441699fb502.jpeg', 1),
(47, 8, '2019-03-17', 'a', 'draft', 'Newsjacking', 0, 'a', NULL, 'c293082651a5c2cecd1eaa2db87bd63e.png', 2),
(48, 8, '2019-03-17', 'ss', 'draft', 'Newsjacking', 0, 'sss', NULL, 'f30371dff863d204c499e8e9a7a34187.jpeg', 0),
(49, 8, '2019-03-17', 'a', 'draft', 'Newsjacking', 0, 'a', NULL, 'b9f8c24688fcc92fa570bc008565be2c.png', 0),
(50, 8, '2019-03-17', 'a', 'draft', 'Newsjacking', 0, 'a', NULL, '97f48eac49f8779e36a2d4d76cef43ac.jpeg', 0),
(51, 8, '2019-03-17', 'a', 'draft', 'Newsjacking', 0, 'a', NULL, 'f932470e75581f325e0d595cb2142011.jpeg', 0),
(52, 8, '2019-03-17', 'jawek', 'draft', 'Newsjacking', 0, 'je', '<p>jejejejeje</p>', '42f052ce9a9fe6d0d787b22f841f01fb.png', 0),
(53, 8, '2019-03-17', 'é', 'draft', 'Newsjacking', 0, 'é', '<p>&eacute;</p>', '7322dabb898cfa721e8f265433651800.png', 0),
(54, 8, '2019-03-18', 'hahha', 'draft', 'Newsjacking', 1, 'haha', 'haha', '273223e540fda36adae5fafd814bf722.jpeg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `certif_tests`
--

DROP TABLE IF EXISTS `certif_tests`;
CREATE TABLE IF NOT EXISTS `certif_tests` (
  `id_certif` int(11) NOT NULL AUTO_INCREMENT,
  `name_certif` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `id_freelancer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_certif`),
  KEY `id_freelancer` (`id_freelancer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) DEFAULT NULL,
  `comment_author` int(11) DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL,
  `comment_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_approved` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_ID`),
  KEY `comment_author` (`comment_author`),
  KEY `comment_post_ID` (`comment_post_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_date`, `comment_content`, `comment_approved`) VALUES
(20, 34, 9, '2019-03-13 11:18:27', 'hahahaahahhahaah', NULL),
(21, 37, 9, '2019-03-14 02:32:36', 'hahahahaa', NULL),
(22, 37, 9, '2019-03-14 02:34:39', 'ahahahhaha', NULL),
(23, 37, 9, '2019-03-14 02:35:12', 'ahahahhaha', NULL),
(24, 37, 9, '2019-03-14 02:35:48', 'lol', NULL),
(25, 37, 9, '2019-03-14 02:36:24', 'lol', NULL),
(26, 37, 9, '2019-03-14 02:36:45', 'hhaahahahhaahahahhahha', NULL),
(62, 40, 8, '2019-03-16 16:23:59', 'je ne sais pas', NULL),
(65, 41, 9, '2019-03-16 18:30:40', '<p>ahahahahahhahahahahahahha</p>', NULL),
(66, 41, 9, '2019-03-16 18:31:04', '<p><strong>AHHAHAHAAHAHHAHA</strong></p>', NULL),
(67, 41, 9, '2019-03-16 18:44:56', '<p><a href=\"https://www.google.com/search?q=image&amp;tbm=isch&amp;source=iu&amp;ictx=1&amp;fir=B2eZsz0SnDw--M%253A%252CAB2C2TYLpAkRxM%252C%252Fm%252F0jg24&amp;vet=1&amp;usg=AI4_-kQO5xfnk-ZQThluPuDlTd4HKvRwwg&amp;sa=X&amp;ved=2ahUKEwjO5c3dqIfhAhUDy4UKHZkMC6QQ_B0wE3oECAUQBg#imgrc=B2eZsz0SnDw--M:\"><img alt=\"bijor\" src=\"https://www.google.com/search?q=image&amp;tbm=isch&amp;source=iu&amp;ictx=1&amp;fir=B2eZsz0SnDw--M%253A%252CAB2C2TYLpAkRxM%252C%252Fm%252F0jg24&amp;vet=1&amp;usg=AI4_-kQO5xfnk-ZQThluPuDlTd4HKvRwwg&amp;sa=X&amp;ved=2ahUKEwjO5c3dqIfhAhUDy4UKHZkMC6QQ_B0wE3oECAUQBg#imgrc=B2eZsz0SnDw--M:\" /></a></p>', NULL),
(68, 41, 9, '2019-03-16 19:00:31', '<p><strong><em><s>bijooooooooooooooooooooooooooooooor</s></em></strong></p>', NULL),
(69, 41, 9, '2019-03-16 19:02:43', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>AHHAHA</td>\r\n			<td>AGAGA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', NULL),
(70, 41, 9, '2019-03-16 19:04:08', '<p><img alt=\"heart\" src=\"http://cdn.ckeditor.com/4.11.3/full/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>', NULL),
(71, 41, 9, '2019-03-16 19:05:01', '<p>qhqhqhqhqhq</p>', NULL),
(72, 41, 9, '2019-03-16 19:06:39', '<p><select name=\"mounir\" size=\"1\"><option value=\"14\">14</option><option value=\"53\">12</option><option selected=\"selected\" value=\"\"></option><option selected=\"selected\" value=\"\"></option></select></p>', NULL),
(75, 44, 9, '2019-03-16 19:27:56', '<p><span style=\"background-color:#e67e22\">juste pour essayer</span></p>', NULL),
(76, 38, 8, '2019-03-16 23:27:44', '<p><iframe frameborder=\"0\" scrolling=\"no\" src=\"https://www.youtube.com/watch?v=lygMPwUj9yU&amp;t=1982s\"></iframe></p>', NULL),
(77, 38, 8, '2019-03-16 23:28:13', '<p><a href=\"https://www.youtube.com/watch?v=lygMPwUj9yU&amp;t=1982s\">https://www.youtube.com/watch?v=lygMPwUj9yU&amp;t=1982s</a></p>', NULL),
(80, 54, 8, '2019-03-18 11:18:26', '<p><img alt=\"heart\" src=\"http://cdn.ckeditor.com/4.11.3/full/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `id_complaint` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `mail_user` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `added_date` date NOT NULL,
  `id_opp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_complaint`),
  KEY `id_user` (`id_user`),
  KEY `id_opp` (`id_opp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contract`
--

DROP TABLE IF EXISTS `contract`;
CREATE TABLE IF NOT EXISTS `contract` (
  `id_contract` int(11) NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(30) DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `sum` float DEFAULT NULL,
  `id_application` int(11) DEFAULT NULL,
  `prio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contract`),
  KEY `id_application` (`id_application`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contract`
--

INSERT INTO `contract` (`id_contract`, `payment_method`, `Start_date`, `finish_date`, `sum`, `id_application`, `prio`) VALUES
(2, 'cheque', '2018-10-05', '2018-10-05', 0, NULL, 1),
(3, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id_edu` int(11) NOT NULL AUTO_INCREMENT,
  `edu_name` varchar(100) NOT NULL,
  `id_freelancer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_edu`),
  KEY `id_freelancer` (`id_freelancer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `Rating` float NOT NULL,
  `comment` varchar(100) NOT NULL,
  `added_date` date NOT NULL,
  `id_application` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_feedback`),
  KEY `id_user` (`id_user`),
  KEY `id_application` (`id_application`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birth_date` date DEFAULT NULL,
  `Bio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Register_Date` date DEFAULT NULL,
  `Earnings` float DEFAULT NULL,
  `Expenses` float DEFAULT NULL,
  `Budget` float DEFAULT NULL,
  `field_company` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `name`, `last_name`, `Birth_date`, `Bio`, `location`, `Register_Date`, `Earnings`, `Expenses`, `Budget`, `field_company`) VALUES
(8, 'mounir', 'mounir', 'mounir@gmail.com', 'mounir@gmail.com', 1, NULL, '$2y$13$JbXb0rewMp10hMkApHLs9ubLyxhTmFX1m0vvLVOrYqYz4I4sN0cFW', '2019-03-18 11:05:42', NULL, NULL, 'a:0:{}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'achir', 'achir', 'Mom@gmail.com', 'mom@gmail.com', 1, NULL, '$2y$13$kMQ63yBOmL6D6dl0RJbba.xZJKhDva7CtviagaYXjOixVQo8a5BbW', '2019-03-17 23:11:36', NULL, NULL, 'N;', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `has_skill`
--

DROP TABLE IF EXISTS `has_skill`;
CREATE TABLE IF NOT EXISTS `has_skill` (
  `id_freelancer` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  PRIMARY KEY (`id_freelancer`,`id_skill`),
  KEY `IDX_A5B4F4C9B0B8A547` (`id_skill`),
  KEY `IDX_A5B4F4C9E9A4513F` (`id_freelancer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `message_from` int(11) DEFAULT NULL,
  `message_to` int(11) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `attachement` int(11) DEFAULT NULL,
  `date_message` date NOT NULL,
  `viewed` int(11) NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `message_from` (`message_from`),
  KEY `message_to` (`message_to`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `needed_skills`
--

DROP TABLE IF EXISTS `needed_skills`;
CREATE TABLE IF NOT EXISTS `needed_skills` (
  `id_opp` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  PRIMARY KEY (`id_opp`,`id_skill`),
  KEY `IDX_412451235D54B59F` (`id_opp`),
  KEY `IDX_41245123B0B8A547` (`id_skill`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `id_declancheur` int(11) NOT NULL,
  `dateDeclanched` date NOT NULL,
  `dateViwed` date DEFAULT NULL,
  PRIMARY KEY (`id_notif`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id_notif`, `id_user`, `content`, `id_declancheur`, `dateDeclanched`, `dateViwed`) VALUES
(1, 2, 'reply', 0, '2019-02-25', NULL),
(2, 2, 'reply', 1, '2019-02-25', NULL),
(3, 2, 'reply', 2, '2019-02-25', NULL),
(4, 2, 'reply', 2, '2019-02-26', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `opportunity`
--

DROP TABLE IF EXISTS `opportunity`;
CREATE TABLE IF NOT EXISTS `opportunity` (
  `id_opp` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(50) NOT NULL,
  `job_category` varchar(50) NOT NULL,
  `job_description` varchar(50) NOT NULL,
  `Budget` float NOT NULL,
  `job_Draft` int(11) NOT NULL,
  `job_Duration` varchar(50) NOT NULL,
  `Expiry_date` date NOT NULL,
  `added_date` date NOT NULL,
  `id_entreprise` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_opp`),
  KEY `id_entreprise` (`id_entreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `post_like`
--

DROP TABLE IF EXISTS `post_like`;
CREATE TABLE IF NOT EXISTS `post_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) DEFAULT NULL,
  `Author_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_653627B8748471B8` (`Author_id`),
  KEY `IDX_653627B84B89032C` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `post_like`
--

INSERT INTO `post_like` (`id`, `post_id`, `Author_id`) VALUES
(80, 46, 9),
(81, 47, 9),
(83, 47, 8),
(87, 54, 8);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `question` varchar(50) NOT NULL,
  `description` varchar(256) NOT NULL,
  `added_date` date NOT NULL,
  `answered` date DEFAULT NULL,
  `subject` varchar(256) NOT NULL,
  `Vues` int(11) NOT NULL,
  PRIMARY KEY (`id_question`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_question`, `id_user`, `question`, `description`, `added_date`, `answered`, `subject`, `Vues`) VALUES
(1, NULL, 'loool', 'loool', '2019-02-25', '2019-02-25', 'PHP', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `id_rep` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `date_reply` date NOT NULL,
  `id_question` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  PRIMARY KEY (`id_rep`),
  KEY `id_user` (`id_user`),
  KEY `id_question` (`id_question`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reply`
--

INSERT INTO `reply` (`id_rep`, `content`, `date_reply`, `id_question`, `id_user`, `likes`, `dislikes`) VALUES
(1, 'replyman2', '2019-02-25', 1, NULL, 1, 0),
(2, 'reply2', '2019-02-25', 1, NULL, 2, 0),
(3, 'Selem', '2019-02-26', 1, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id_skill` int(11) NOT NULL AUTO_INCREMENT,
  `name_skill` varchar(60) NOT NULL,
  PRIMARY KEY (`id_skill`,`name_skill`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `suggestedopps`
--

DROP TABLE IF EXISTS `suggestedopps`;
CREATE TABLE IF NOT EXISTS `suggestedopps` (
  `freelancerId` int(11) NOT NULL,
  `opportunityId` int(11) NOT NULL,
  PRIMARY KEY (`freelancerId`,`opportunityId`),
  KEY `IDX_3777032F4DCE947A` (`freelancerId`),
  KEY `IDX_3777032FE6A900A9` (`opportunityId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `views`
--

DROP TABLE IF EXISTS `views`;
CREATE TABLE IF NOT EXISTS `views` (
  `id_view` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `view_identification` int(11) NOT NULL,
  `dateView` date NOT NULL,
  PRIMARY KEY (`id_view`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `views`
--

INSERT INTO `views` (`id_view`, `id_user`, `type`, `view_identification`, `dateView`) VALUES
(1, 2, 1, 1, '2019-02-25');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK_A45BDDC19B9B0E20` FOREIGN KEY (`id_opportunity`) REFERENCES `opportunity` (`id_opp`),
  ADD CONSTRAINT `FK_A45BDDC1E9A4513F` FOREIGN KEY (`id_freelancer`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `blogposts`
--
ALTER TABLE `blogposts`
  ADD CONSTRAINT `FK_35A84671748471B8` FOREIGN KEY (`Author_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `certif_tests`
--
ALTER TABLE `certif_tests`
  ADD CONSTRAINT `FK_5431F6BFE9A4513F` FOREIGN KEY (`id_freelancer`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A16106556` FOREIGN KEY (`comment_post_ID`) REFERENCES `blogposts` (`post_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5F9E962A77BC80DA` FOREIGN KEY (`comment_author`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `FK_A05AAF3A5D54B59F` FOREIGN KEY (`id_opp`) REFERENCES `opportunity` (`id_opp`),
  ADD CONSTRAINT `FK_A05AAF3A6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `FK_E98F2859BC491036` FOREIGN KEY (`id_application`) REFERENCES `application` (`id_application`);

--
-- Contraintes pour la table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `FK_DB0A5ED2E9A4513F` FOREIGN KEY (`id_freelancer`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FK_D22944586B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_D2294458BC491036` FOREIGN KEY (`id_application`) REFERENCES `application` (`id_application`);

--
-- Contraintes pour la table `has_skill`
--
ALTER TABLE `has_skill`
  ADD CONSTRAINT `FK_A5B4F4C9B0B8A547` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id_skill`),
  ADD CONSTRAINT `FK_A5B4F4C9E9A4513F` FOREIGN KEY (`id_freelancer`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `FK_DB021E96108F3AA9` FOREIGN KEY (`message_from`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_DB021E963BC4A6BD` FOREIGN KEY (`message_to`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `needed_skills`
--
ALTER TABLE `needed_skills`
  ADD CONSTRAINT `FK_412451235D54B59F` FOREIGN KEY (`id_opp`) REFERENCES `opportunity` (`id_opp`),
  ADD CONSTRAINT `FK_41245123B0B8A547` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id_skill`);

--
-- Contraintes pour la table `opportunity`
--
ALTER TABLE `opportunity`
  ADD CONSTRAINT `FK_8389C3D7A8937AB7` FOREIGN KEY (`id_entreprise`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `FK_653627B84B89032C` FOREIGN KEY (`post_id`) REFERENCES `blogposts` (`post_ID`),
  ADD CONSTRAINT `FK_653627B8748471B8` FOREIGN KEY (`Author_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `FK_8ADC54D56B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `FK_FDA8C6E06B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_FDA8C6E0E62CA5DB` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id_question`);

--
-- Contraintes pour la table `suggestedopps`
--
ALTER TABLE `suggestedopps`
  ADD CONSTRAINT `FK_3777032F4DCE947A` FOREIGN KEY (`freelancerId`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_3777032FE6A900A9` FOREIGN KEY (`opportunityId`) REFERENCES `opportunity` (`id_opp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
