-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2014 at 03:40 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rawtapes`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE `artists` (
  `artist_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  `url` varchar(250) COLLATE utf8_bin NOT NULL,
  `header_text_url` varchar(250) COLLATE utf8_bin NOT NULL,
  `profile_pic_url` varchar(250) COLLATE utf8_bin NOT NULL,
  `bio` text COLLATE utf8_bin NOT NULL,
  `sound_cloud_url` varchar(250) COLLATE utf8_bin NOT NULL,
  `band_camp_url` varchar(250) COLLATE utf8_bin NOT NULL,
  `twitter_url` varchar(250) COLLATE utf8_bin NOT NULL,
  `facebook_url` varchar(250) COLLATE utf8_bin NOT NULL,
  `random_artist_pic` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`artist_id`, `name`, `url`, `header_text_url`, `profile_pic_url`, `bio`, `sound_cloud_url`, `band_camp_url`, `twitter_url`, `facebook_url`, `random_artist_pic`) VALUES
(1, 'Dabo', 'dabo', '', '', 0x3c64697620636c6173733d227478742d686f6c646572223e0a093c703e0a090953756d6d65722e2044656772656573207269736520746f206f766572203235204320616e6420746865206265737420706c61636520746f20636f6f6c206f666620697320696e207468652061697220636f6e646974696f6e65642073747564696f2e2057617279206f66206265696e67206f75747369646520666f7220746f6f206c6f6e672c2063617473206c696b6520413720616e642047756164616c6f6f7020656e6420757020686176696e67206c6f6e6765722073657373696f6e73207468616e20657665722c2070726f70656c6c696e67207468656d20746f207265636f7264206173206d756368206d7573696320617320706f737369626c652e3c2f703e0a093c703e0a09095468757320636f6d657320746f20796f75202671756f743b53746179204c6f772671756f743b2c2074686520326e6420526177205461706573205820413720636f6c6c61622c20636f6e74696e75696e672074686520317374206f6e65207769746820506c757367612c202671756f743b426c61737068656d792671756f743b2e20546869732074696d65204137207069636b7320342062656174732062792047756164616c6f6f702c207768696368207765726520696e74656e64656420666f7220746865207570636f6d696e672047756164616c6f6f7020696e2041667269636120616c62756d20616e642072697073207468656d20776974682068697320757375616c20636f6c6f7266756c2c2074656e6163696f7573206c79726963732e20486176696e672042656e6f20616e64204e6f6d6f6b206173206672657175656e742067756573747320696e207468652073747564696f20636f6e7472696275746564206576656e206d6f726520746f20746865206d6f6f6420616e642068656c70656420706f6c697368207468697320736c65656b203420747261636b2072656c656173652e266e6273703b3c2f703e0a3c2f6469763e0a3c703e0a09266e6273703b3c2f703e0a, '', '', '', '', 'c516e-randomartistspic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

DROP TABLE IF EXISTS `blog_post`;
CREATE TABLE `blog_post` (
  `post_id` int(50) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(250) COLLATE utf8_bin NOT NULL,
  `post_pic` varchar(250) COLLATE utf8_bin NOT NULL,
  `bandcamp_link` varchar(2000) COLLATE utf8_bin NOT NULL,
  `enabled` enum('yes','no') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`post_id`, `post_title`, `post_pic`, `bandcamp_link`, `enabled`) VALUES
(1, 'Rejoicer - Recollection', 'edff4-img1.jpg', '<iframe seamless="" src="http://bandcamp.com/EmbeddedPlayer/album=1638530725/size=small/bgcol=ffffff/linkcol=0687f5/artwork=none/track=3152401126/transparent=true/" style="border: 0; width: 100%; height: 42px;"><a data-cke-saved-href="http://rawtapes.bandcamp.com/album/recollection" href="http://rawtapes.bandcamp.com/album/recollection">Recollection by Rejoicer</a></iframe>', 'yes'),
(2, 'Calowood (Vol. 1) - Yuka', 'eb295-img2.jpg', '<iframe style="border: 0; width: 100%; height: 42px;" src="http://bandcamp.com/EmbeddedPlayer/album=4153930201/size=small/bgcol=ffffff/linkcol=0687f5/artwork=none/track=2850638998/transparent=true/" seamless><a href="http://rawtapes.bandcamp.com/album/yuka-calo-wood-vol-1">Yuka - Calo Wood Vol. 1 by Yuka + Eyal Talmudi + Rejoicer</a></iframe>', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `contact_id` int(1) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `contact_email` varchar(250) COLLATE utf8_bin NOT NULL,
  `contact_type` varchar(250) COLLATE utf8_bin NOT NULL,
  `phone` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `contact_type`, `phone`) VALUES
(1, 'KATYA PATZI', 'Some@Email.com', 'BOOKING EU.', '0544947879'),
(2, 'ZACK BAR', 'some@gmail.com', 'BOOKING U.S.', '0544947879'),
(3, 'ZACK BAR', 'some@email.com', 'EVERYTHING ELSE', '0544947879');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(250) COLLATE utf8_bin NOT NULL,
  `event_date` date NOT NULL,
  `event_link` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_date`, `event_link`) VALUES
(1, 'some event with plusga', '2014-06-16', 'www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mixtapes`
--

DROP TABLE IF EXISTS `mixtapes`;
CREATE TABLE `mixtapes` (
  `mixtape_id` int(10) NOT NULL AUTO_INCREMENT,
  `mixtape_title` varchar(250) COLLATE utf8_bin NOT NULL,
  `mixtape_description` varchar(250) COLLATE utf8_bin NOT NULL,
  `mixtape_embed_link` varchar(2000) COLLATE utf8_bin NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mixtape_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mixtapes`
--

INSERT INTO `mixtapes` (`mixtape_id`, `mixtape_title`, `mixtape_description`, `mixtape_embed_link`, `time_added`) VALUES
(1, 'Dabo Mix A', 'A Mix By Dabo aaa', '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/154384969&color=ff5500&auto_play=false&hide_related=false&show_artwork=true&show_comments=true&show_user=true&show_reposts=false"></iframe>', '0000-00-00 00:00:00'),
(2, 'dabo', 'dabo', 'dabo', '2014-06-20 10:04:28'),
(3, 'asdaksdjh', 'alskdjhalskd', '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/154384969&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>', '2014-06-20 10:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `releases`
--

DROP TABLE IF EXISTS `releases`;
CREATE TABLE `releases` (
  `release_id` int(50) NOT NULL AUTO_INCREMENT,
  `artist_id` int(50) NOT NULL,
  `release_title` varchar(250) COLLATE utf8_bin NOT NULL,
  `bandcamp_link` varchar(2000) COLLATE utf8_bin NOT NULL,
  `bandcamp_album_link` varchar(250) COLLATE utf8_bin NOT NULL,
  `itunes_link` varchar(250) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `art_url` varchar(250) COLLATE utf8_bin NOT NULL,
  `release_date` datetime NOT NULL,
  PRIMARY KEY (`release_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `releases`
--

INSERT INTO `releases` (`release_id`, `artist_id`, `release_title`, `bandcamp_link`, `bandcamp_album_link`, `itunes_link`, `description`, `art_url`, `release_date`) VALUES
(1, 1, 'Dabo Beat Tape', '<iframe style="border: 0; width: 100%; height: 42px;" src="http://bandcamp.com/EmbeddedPlayer/album=2772926934/size=small/bgcol=333333/linkcol=0f91ff/artwork=none/transparent=true/" seamless><a href="http://rawtapes.bandcamp.com/album/stay-low">Stay Low by A7 + Guadaloop</a></iframe>', 'http://rawtapes.bandcamp.com/album/stay-low', 'http://www.google.com', 0x3c703e0a0953746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f773c2f703e0a3c703e0a0953746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f773c2f703e0a3c703e0a0953746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f773c2f703e0a3c703e0a0953746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f773c2f703e0a3c703e0a09266e6273703b3c2f703e0a3c703e0a0953746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f773c2f703e0a3c703e0a0953746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f773c2f703e0a3c703e0a0953746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f773c2f703e0a3c703e0a0953746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f77266e6273703b53746179204c6f773c2f703e0a, '1a962-staylow.jpg', '2009-03-06 12:00:00'),
(2, 1, 'dabo beat tape two', '<iframe style="border: 0; width: 270px; height: 270px;" src="http://bandcamp.com/EmbeddedPlayer/album=837635269/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="http://rawtapes.bandcamp.com/album/puzzles-vol-2">Puzzles Vol. 2 by Raw Tapes</a></iframe>', '', '', 0x3c703e0a0961736461736420617364616473266e6273703b61736461736420617364616473266e6273703b61736461736420617364616473266e6273703b61736461736420617364616473266e6273703b61736461736420617364616473266e6273703b617364617364206173646164733c2f703e0a, 'a81ba-staylow.jpg', '2011-04-05 08:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1403357852, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
